$(document).ready(function(){
    $("form").on("register", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("accountCreation.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });

		alert('Successfully registered! You will be directed to the login page.');
		window.location.href = 'login.php'; 
    });
});