<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email']) && !isset($_SESSION['rq'])) {
    header("Location: recover_l_1.php");
}else{
  $answer = $_SESSION['ra'];
  $query=mysqli_query($conn,"SELECT * FROM `librarian` WHERE `Recovery_Answer`='$answer'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Hotel Articles & Booksing Management System - Password Recovery Page</title>
</head>
<body>
  <div class="container" style="position: relative; top: 0px;">
    <form action="insertnewpass_l.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">New Password</p>
      <div class="input-group">
        <input type="password" name="pass" id="pass" placeholder="Enter New Password..." required>
      </div>
        <input style="position: relative; top: 25px; left: 150px;" class="input-group-password" type="checkbox" onclick="myFunction()">Show Password
      <div class="input-group">
        <input type="password" placeholder="Verify New Password..." name="passc" id="pass1" required>
      </div>
        <input style="position: relative; top: 25px; left: 150px;" class="input-group-password" type="checkbox" onclick="myFunction1()">Show Password
      <div class="input-group">
        <button name="submit" class="btn" style="background-color: rgb(255, 223, 0);">Submit</button>
      </div>
    </form>

    <script >
    function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

         function myFunction1() {
          var x =
          document.getElementById('pass1');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

  </script>

  </div>
</body>
</html>