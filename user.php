<?php

	class User{
		protected $fullName;
		protected $email;
		protected $residence;
		protected $user;
		protected $pw;
		protected $newPw;
		// protected $image;

		function __construct($user, $pw){
			// $this->email = $email;
			// $this->residence = $residence;
			$this->user = $user;
			$this->pw = $pw;
			// $this->image = $image;
		}

		public function setFullName($fullName){
			$this->fullName = $fullName;
		}

		public function getFullName(){
			return $this->fullName;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}
		
		public function setResidence($residence){
			$this->residence = $residence;
		}

		public function getResidence(){
			return $this->residence;
		}

		public function setNewPassword($newPw){
			$this->newPw = $newPw;
		}

		public function getNewPassword(){
			return $this->newPw;
		}

	public function register($pdo){

		$passwordHash = password_hash($this->pw,PASSWORD_DEFAULT); 

		try {
	        $stmt1=$pdo->prepare("INSERT INTO user (fullName,email,residence,username,password) VALUES (?,?,?,?,?)");
	        $stmt1->execute([$this->getFullName(), $this->email, $this->residence, $this->user, $passwordHash]);
	        // $stmt->execute([$fName, $email, $residence, $user, $pw, $image]);        
	        // $stmt = null;        
			// return "Successfully registered!";   
			return "<script language='javascript'>
			alert('Successfully registered! You will be directed to the login page.');
			window.location.href = 'http://localhost/IAP/login.php'; 
			</script>";
	        }catch (PDOException $e){
	           	return $e->getMessage();
	        }  
	}

	public function login ($pdo){

	     try {
            $stmt2 = $pdo->prepare("SELECT * FROM user WHERE username=?");
            $stmt2->execute([$this->user]);
            $row = $stmt2->fetch();
            
            if ($row == null) {
                return "<script language='javascript'>
				alert('⚠This account does not exist. Try Again');
				window.location.href = 'http://localhost/IAP/login.php'; 
				</script>";
            }
            else if (password_verify($this->pw, $row['password'])) {
				$_SESSION['user']=$row['username'];
				return "<script language='javascript'>
				// alert('Logged in Successfully!');
				window.location.href = 'http://localhost/IAP/homePage.php';
				</script>";
            }else{
				return "<script language='javascript'>
			alert('⚠Wrong Password. Try Again');
			window.location.href = 'http://localhost/IAP/login.php'; 
			</script>";
			}
        }catch (PDOException $e) {
            return $e->getMessage();
        }
}

public function changePassword($pdo){
	try {
		session_start();
		$query_password_SQL = "SELECT * FROM user WHERE username = :user";
		$query_password_args = array($_SESSION['user']);
		$query_password_stmt = $pdo->prepare($query_password_SQL);
		$query_password_stmt->execute($query_password_args);
		$row = $query_password_stmt->fetch();
		
		if ($row == null) {
			return "<script language='javascript'>
			alert('⚠This account does not exist. Try Again');
			window.location.href = 'http://localhost/IAP/passwordChange.php'; 
			</script>";

		}
		else if (password_verify($this->pw, $row['password'])) {
			$update_password_SQL = "UPDATE user SET password = :pw WHERE username = :user";
			$passwordHash = password_hash($this->newPw,PASSWORD_DEFAULT); 
			$update_password_args = array($passwordHash, $_SESSION['user']);
			$update_password_stmt = $pdo->prepare($update_password_SQL);
			$update_password_stmt->execute($update_password_args);
			return "<script language='javascript'>
					 alert('Password changed successfully! You are being directed to the login page.');
 					window.location.href = 'http://localhost/IAP/login.php'; 
  					</script>";
			
		}return "<script language='javascript'>
		alert('⚠Password not changed. Try Again');
		window.location.href = 'http://localhost/IAP/passwordChange.php'; 
		</script>";

        } catch (PDOException $e) {
            return $e->getMessage();
        }
}

public function logOut(){
	if(isset ($_SESSION['user'])){	
		session_unset();
		header("location:http://localhost/IAP/login.php");
	}		
}
	
}

?>