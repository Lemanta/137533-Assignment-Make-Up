<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Articles & Books Management  - Login Page - Guest</title>
</head>
<body>
  <div class="container" style="position: relative; top: 0px;">
    <form action="authentication_user.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Guest Login</p>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" id="pass">
      </div>
      <input style="position: relative; top: 25px; left: 150px;" class="input-group-password" type="checkbox" onclick="myFunction()">Show Password
      <div class="input-group">
        <button name="login" class="btn" style="background-color: rgb(255, 223, 0);">Login</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="reg_user.php">Register Here</a>.</p>
      <p class="login-register-text">Forgot <a href="recover_u_1.php">Password </a>?</p>
    </form>
  </div>
  <script>
     function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  </script>
</body>
</html>