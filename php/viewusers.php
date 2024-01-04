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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles & Books Management  - View Users Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  
  table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }

</style>
</head>
<body>
<div id="header_container">
  <div id="header"> <a href="../index1.php"><img src="../images/logo.jpg" alt="Articles & Books Management " title="Articles & Books Management " border="0" /></a>
    <ul>
      <li><a href="../index1.php">Home</a> </li>
      <li><a href="../pages/about1.php">About us</a></li>
      <li><a href="../pages/help1.php">Help</a></li>
      <li><a href="logout.php">Logout</a></li>
      <li><a href="../pages/contact1.php">Contact</a> </li>
    </ul>
    <h1 style="color: yellow;">Articles & Books Management  ~ Knowledge In the Palm of Your Hands</h1>
  </div>
</div>
<div id="bodymiddlePan" style="text-align: center;">
  <h2 style="font-size: 14px; color: yellow;">~ Welcome Manager <?php echo $row['Fullname']; ?> !~</h2><br>
  <div style="text-align: center;">
   <p>Below are the users that are registered within the system :</p> <br><br>
</div>
   <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">First Name</th>
  <th style="text-align: left;
  padding: 8px;">Last Name</th>
<th style="text-align: left;
  padding: 8px;">Email Address</th>
<th style="text-align: left;
  padding: 8px;">Phone Number</th>
<th style="text-align: left;
  padding: 8px;">Recovery Question</th>
<th style="text-align: left;
  padding: 8px;">Recovery Answer</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "library_management_system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 $email = $_SESSION['Email'];
$sql = "SELECT `User_ID`, `First_Name`, `Last_Name`, `Email_Address`, `Phone_Number`, `Recovery_Question`, `Recovery_Answer` FROM `user`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["User_ID"] . "</td><td>" . $row["First_Name"] . "</td><td>" . $row["Last_Name"] . "</td><td>"
. $row["Email_Address"]. "</td> <td>" . $row["Phone_Number"]. "</td><td>" . $row["Recovery_Question"]. "</td><td>" . $row["Recovery_Answer"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<br>
<br>
<button onclick="printData()" style="width: 12%; margin-left: 50%;">Print the List of Librarians</button>
<br>
<br>
<div style="width: 45%; margin-left: 30%;">
<label style="text-align: center;">To delete a user, kindly input the User ID in the field below:</label>
<br>
<br>
<form method="POST" action="">
<input type="text" name="id" placeholder="User ID...">
<button type="submit" name="cancel">DELETE USER</button>
</form>
</div>
<br>
<br>
<?php
if (isset($_POST['cancel'])) {
  require 'dbconnection.inc.php';

  $id = $_POST['id'];

  if (empty($id)) {
    echo "<alert><p>Please Input a Articles & Booksing ID</p></alert>";
  }else{
    $sql = "DELETE FROM `user` WHERE `User_ID` = '$id'";
    mysqli_query($conn, $sql);
    header("Location: viewusers.php");
  }
}
?>

<script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<div id="footermainPan">
  <div id="footerPan">
    <ul>
     <li><a href="../index1.php">Home</a> </li>
      <li><a href="../pages/about1.php">About us</a></li>
      <li><a href="../pages/help1.php">Help</a></li>
      <li><a href="../pages/contact1.php">Contact</a> </li>
    </ul>
  </div>
</div>
<div align=center>Created by Kelvin Lemanta@2024</a></div></body>
</html>

