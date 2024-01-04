<?php 

require_once 'php/dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Fname']) && !isset($_SESSION['Lname']) && !isset($_SESSION['Email'])) {
    header("Location: php/user_login.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `user` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles & Books Management  - Manager Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style3.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header_container">
  <div id="header"> <a href="index3.php"><img src="images/logo.jpg" alt="Articles & Books Management " title="Articles & Books Management " border="0" /></a>
    <ul>
      <li><a href="index3.php">Home</a> </li>
      <li><a href="pages/about3.php">About us</a></li>
      <li><a href="pages/help3.php">Help</a></li>
      <li><a href="php/logout.php">Logout</a></li>
      <li><a href="pages/contact3.php">Contact</a> </li>
    </ul>
    <h1 style="color: yellow;">Articles & Books Management  ~ Knowledge In the Palm of Your Hands</h1>
  </div>
</div>
 <div style="text-align: center;">
<div id="bodymiddlePan">
  <h2 style="font-size: 14px; color: yellow;">~ Welcome User <?php echo $row['First_Name']; ?> <?php echo $row['Last_Name']; ?> !~</h2><br><br>
  <div><a style="background-color: white; border-radius: 25px; padding: 12px 25px;  box-shadow: 0 0 5px black;" href="php/viewArticles & Bookss2.php">View Articles & Bookss</a></div><br><br>
  <div><a style="background-color: white; border-radius: 25px; padding: 12px 25px;  box-shadow: 0 0 5px black;" href="php/viewborrowed2.php">View Borrowed Articles & Bookss</a></div><br><br>  
<div><a style="background-color: white; border-radius: 25px; padding: 12px 25px;  box-shadow: 0 0 5px black;" href="php/viewreturned2.php">View Returned Articles & Bookss</a></div>
</div>
</div>
<br>
<br>
<div id="bottomPan">
  <div id="bottomMainPan">
    <div id="bottomBorderPan">
      <h2>Help & Tips</h2>
      <h3>About Us?</h3>
      <h4>Genre of Articles & Bookss</h4>
      <ul>
        <li><a href="pages/help1.php">How To Borrow A Articles & Books?</a></li>
        <li><a href="pages/help1.php">How To Register Under the System?</a></li><br>
        <li><a href="pages/help1.php">How to Reset my Password ?</a></li>
        <li><a href="pages/help1.php">How to Cancel A Borrowwed Articles & Books ?</a></li><br>
        <li><a href="pages/help1.php">How to Return A Borrowed Articles & Books ?</a></li><br>
        <li><a href="pages/help1.php">How to Print A Table ?</a></li>
      </ul>
      <ul>
        <li><a href="pages/about1.php">Who is Kelvin Lemanta ?</a></li>
        <li><a href="pages/about1.php">What is a Articles & Books Management  ?</a></li><br>
        <li><a href="pages/about1.php">Problems facing libraries ? </a></li>
        <li><a href="pages/about1.php">Our Aim ?</a></li>
        <li><a href="pages/about1.php">Why work with us ?</a></li>
      </ul>
      <ul>
        <li><a href="php/viewArticles & Bookss2.php">Fiction</a></li>
        <li><a href="php/viewArticles & Bookss2.php">Educational</a></li>
        <li><a href="php/viewArticles & Bookss2.php">Religous</a></li>
        <li><a href="php/viewArticles & Bookss2.php">Film Scripts</a></li>
        <li><a href="php/viewArticles & Bookss2.php">Past Papers</a></li>
        <li><a href="php/viewArticles & Bookss2.php">Biographies</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="footermainPan">
  <div id="footerPan">
    <ul>
     <li><a href="index3.php">Home</a> </li>
      <li><a href="pages/about3.php">About us</a></li>
      <li><a href="pages/help.php">Help</a></li>
      <li><a href="pages/contact3.php">Contact</a> </li>
    </ul>
  </div>
</div>
<div align=center>Created by Kelvin Lemanta@2024</a></div></body>
</html>

