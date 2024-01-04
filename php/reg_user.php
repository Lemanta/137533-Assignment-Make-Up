<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="style1.css">

  <title>Articles & Books Management  - Login Page - User</title>
</head>
<style type="text/css">
</style>
<body>
  <br>
  <br>
  <div class="container" style="position: relative; top: 0px;">
    <form action="insertion.inc.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">User Registration</p>
			<div class="input-group">
				<input type="text" placeholder="Kindly input your First Name" name="fname" required>
			</div>
      <div class="input-group">
        <input type="text" placeholder="Kindly input your Last Name" name="lname" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Kindly input your Phone Number" name="phone" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Kindly input your Email Address" name="email" required>
      </div>
       <div class="input-group">
        <input type="text" placeholder="Kindly Set A Password Recovery Question" name="rq" required>
      </div>
       <div class="input-group">
        <input type="text" placeholder="Kindly Set A Password Recovery Answer" name="ra" required>
      </div>
			<div class="input-group">
				<input type="password" placeholder="Kindly input your Password" name="pass" id="pass" required>
            </div>
            <input style="position: relative; top: 25px; left: 150px;" class="input-group-password" type="checkbox" onclick="myFunction()">Show Password
            <br>
            <br>
            <div class="input-group">
				<input type="password" placeholder=" Kindly Confirm your Password" name="cpassword" id="pass2" required>
			</div>
         <input style="position: relative; top: 25px; left: 150px;" class="input-group-password" type="checkbox" onclick="myFunction2()">Show Password
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

            function myFunction2() {
          var x =
           document.getElementById('pass2');
             if (x.type === "password"){
               x.type = "text";
             } else {
               x.type = "password";
             }
         }

      </script>
      <br>
      <br>
			<div class="input-group">
        <button name="submit" class="btn" style="background-color: rgb(255, 223, 0);">Register</button>
      </div>
			<p class="login-register-text">Have an account? <a href="user_login.php">Login Here</a>.</p>
      <br>
      <p class="login-register-text">Forgot Password? <a href="recover_u_1.php">Click Here</a>.</p>
		</form>
	</div>
</body>
</html>


      