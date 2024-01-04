<?php

require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: login_manager.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

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
    <form action="insertion1.inc.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Librarian Registration</p>
      <div class="input-group">
        <input type="text" placeholder="Kindly input your Fullname" name="fname" required>
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
      <p class="login-register-text">Have an account? <a href="login_librarian.php">Login Here</a>.</p>
      <br>
      <p class="login-register-text">Forgot Password? <a href="recover_l_1.php">Click Here</a>.</p>
    </form>
  </div>
</body>
</html>


      