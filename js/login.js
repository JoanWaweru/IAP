  $(document).ready(function () {
    $("#submit").click(function (e) {
      if ($("#userForm")[0].checkValidity()) {
        e.preventDefault();

        $("#submit").val("Please wait...");
        $.ajax({
          url: 'http://localhost/IAP/accountCreation.php',
          method: 'post',
          data: $("#userForm").serialize() + '&action=login',
          success: function (response) {
            console.log(response);
            if ($.trim(response) == 'login') {
              $("#submit").val('Login');
              window.location = 'http://localhost/IAP/homePage.php'
            } else {
              $("#loginAlert").html(response);
            }
          }
        })

      }

    })
  })
