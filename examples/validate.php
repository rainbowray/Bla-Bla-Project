<!DOCTYPE html>
  <html>
    <head>
      <title>Example of form</title>
      <style>
        .signup {
          border: 1px solid #999999;
          font: normal 14px helvetica;
          color: #444444;
        }
      </style>
      <script>
        function validate(form) {
          fail=validateForename(form.forename.value)
          fail+=validateSurname(form.surname.value)
          fail+=validateUsername(form.username.value)
          fail+=validatePassword(form.password.value)
          fail+=validateAge(form.age.value)
          fail+=validateEmail(form.email.value)
          if (fail=="")return true
          else {alert(fail);return false}
        }
      </script>
    </head>
    <body>
      <table class="signup" border="0" cellpadding="2"
      cellspacing="5" bgcolor="#eeeeee">
      <th colspan="2" align="center">Registration form</th>
        
      </table>
    </body>