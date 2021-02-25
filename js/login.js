  $(document).ready(function () {
    $("#submit").click(function (e) {
      if ($("#userForm")[0].checkValidity()) {
        e.preventDefault();

        $("#submit").val("Please wait...");
        $.ajax({
          url: 'accountCreation.php',
          method: 'post',
          data: $("#userForm").serialize() + '&action=login',
          success: function (response) {
            console.log(response);
            if ($.trim(response) == 'login') {
              $("#submit").val('Login');
              window.location = 'homePage.php'
            } else {
              $("#loginAlert").html(response);
            }
          }
        })

      }

    })
  })
