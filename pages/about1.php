<?php

require_once '../php/dbconnection.inc.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: ../php/login_manager.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Email_Address`='$email'")or die(mysqli_error());
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
  <div id="header"> <a href="../index1.php"><img src="../images/logo.jpg" alt="Articles & Books Management " title="Articles & Books Management " border="0" /></a>
    <ul>
      <li><a href="../index1.php">Home</a> </li>
      <li><a href="about1.php">About us</a></li>
      <li><a href="help1.php">Help</a></li>
 <li><a href="../php/logout.php">Logout</a></li>
      <li><a href="contact1.php">Contact</a> </li>
    </ul>
    <h1 style="color: yellow;">Articles & Books Management  ~ Knowledge In the Palm of Your Hands</h1>
  </div>
</div>
<br>
<div style="text-align: center;">
<h2 style="color: yellow;">~ About Us ~</h2>
    </div>
    <br>     
    <div>
      <p>The Articles & Books data information system of various Library Centers still use conventional methods in Articles & Books data collection. The large numbers of printed Articles & Bookss and manuscripts that have been entered and transacted in the recent years has caused many difficulties in controlling Articles & Bookskeeping.</p><br>
      <p>Thus, the need to maintain the records of the new and retrieve the details of the Articles & Bookss and articles available in the library which relay mainly on manual services. The uses of librarians to manage the details of the library which is enormously large is unguaranteed. And by such errors in the library it leads to confusion of the conveyance of Articles & Bookss, classification and other technical works bringing up delays when a customer requires a certain copy.</p><br>
      <p>The main aim of the project is to come up with a website whereby the library users can access Articles & Bookss and articles with ease and faster. Being able to access detailed information of Articles & Bookss borrowed in a particular data. More so, to help the librarians ease their work in record keeping and analyzing of the library information data. </p>
    </div>
    <label style="font-style: italic; margin-left: 75%;">System Created by Kelvin Lemanta@2024.</label>
  </div>
  <br>
</div>
  <br>
    <div id="footermainPan">
  <div id="footerPan">
    <ul>
     <li><a href="../index1.php">Home</a> </li>
      <li><a href="about1.php">About us</a></li>
      <li><a href="help1.php">Help</a></li>
      <li><a href="contact1.php">Contact</a> </li>
    </ul>
  </div>
</div>
<div align=center>Created by Kelvin Lemanta@2024</a></div></body>
</html>