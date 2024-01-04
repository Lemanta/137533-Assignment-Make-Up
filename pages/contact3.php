<?php 

require_once '../php/dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Fname']) && !isset($_SESSION['Lname']) && !isset($_SESSION['Email'])) {
    header("Location: ../php/user_login.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `user` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles & Books Management  - About Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header_container">
  <div id="header"> <a href="../index3.php"><img src="../images/logo.jpg" alt="Articles & Books Management " title="Articles & Books Management " border="0" /></a>
    <ul>
      <li><a href="../index3.php">Home</a> </li>
      <li><a href="about3.php">About us</a></li>
      <li><a href="help3.php">Help</a></li>
 <li><a href="../php/logout.php">Logout</a></li>
      <li><a href="contact3.php">Contact</a> </li>
    </ul>
    <h1 style="color: yellow;">Articles & Books Management  ~ Knowledge In the Palm of Your Hands</h1>
  </div>
</div>
<br>
<div style="text-align: center;">
<h2 style="color: yellow;">~ Contact Us ~</h2>
    </div>     
    <div>
      <p>To get in touch with us, kindly use one of the following options below:</p><br>
      <ul>
        <li>Phone Number - <a style="font-weight: bold;">+254705 993092</a></li>
        <li>Email Address - <a class="a1" href="mailto:kelvinlemanta@strathmore.edu" style="font-weight: bold;">kelvinlemanta@strathmore.edu</a></li>
      </ul><br>
      <p style="display: block; text-align: center;">If you are a Librarian and desire to be registered under the system, kindly send us an email <a class="a1" href="mailto:kelvinlemanta@strathmore.edu" style="font-weight: bold;">HERE</a> with your academic records  and a brief CV, we hope to here from you soon.</p><br>
    </div>
    <label style="font-style: italic; margin-left: 75%;">System Created by Kelvin Lemanta@2024.</label>
  </div>
  <br>
</div>
  <br>
    <div id="footermainPan">
  <div id="footerPan">
    <ul>
      <li><a href="../index3.php">Home</a> </li>
      <li><a href="about3.php">About us</a></li>
      <li><a href="help3.php">Help</a></li>
      <li><a href="contact3.php">Contact</a> </li>
    </ul>
  </div>
</div>
<div align=center>Created by Kelvin Lemanta@2024</a></div></body>
</html>