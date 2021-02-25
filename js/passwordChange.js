$(document).ready(function(){
    $("form").on("changePassword", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("accountCreation.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });

		alert('Password changed successfully! You are being directed to the login page.');
        window.location.href = 'login.php'; 
    });
});