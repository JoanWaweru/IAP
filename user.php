<?php

	class User{
		protected $fullName;
		protected $email;
		protected $residence;
		protected $user;
		protected $pw;
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

	public function register($pdo){

		$passwordHash = password_hash($this->pw,PASSWORD_DEFAULT); 

		try {
	        $stmt=$pdo->prepare("INSERT INTO user (fullName,email,residence,username,password) VALUES (?,?,?,?,?)");
	        $stmt->execute([$this->getFullName(), $this->email, $this->residence, $this->user, $passwordHash]);
	        // $stmt->execute([$fName, $email, $residence, $user, $pw, $image]);        
	        // $stmt = null;        
	        return "Successfully registered!";   
	        }catch (PDOException $e){
	           	return $e->getMessage();
	        }  
	}

	public function login ($pdo){

	     try {
            $stmt = $pdo->prepare("SELECT * FROM user WHERE username=?");
            $stmt->execute([$this->user]);
            $row = $stmt->fetch();
            
            if ($row == null) {
                return "This account does not exist";
            }
            if (password_verify($this->pw, $row['password'])) {
                $_SESSION['user']=$row['username'];
                return "<h1> Name =>".$row['fullName']."</h1><br><br> <span style='color:blue; font-size:100px;'> Work In Progress😊</span>";
            }
            return "Your username or password is not correct";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
}
}
?>