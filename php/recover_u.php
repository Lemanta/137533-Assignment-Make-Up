<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email']) && !isset($_SESSION['rq'])) {
    header("Location: recover_u_1.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `user` WHERE `Email_Address`='$email'")or die(mysqli_error());
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
    <form action="find_answer.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Forgot Password?</p>
      <div class="input-group">
        <input type="email" value="<?php echo $row['Recovery_Question']; ?>" name="rq" readonly required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Recover Answer..." name="ra">
      </div>
      <div class="input-group">
        <button name="submit" class="btn" style="background-color: rgb(255, 223, 0);">Submit</button>
      </div>
      <p class="login-register-text">Don't have an account? <a href="reg_user.php">Register Here</a>.</p>
    </form>
  </div>
</body>
</html>