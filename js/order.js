$(document).ready(function(){
    $("form").on("order", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
 
        $.post("http://localhost/IAP/accountCreation.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });

		alert('⚠Oops! This feature is currently unavailable☹.Come back soon!');
        window.location.href = 'http://localhost/IAP/homePage.php';
    });
});