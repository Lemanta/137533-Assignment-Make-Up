<?php

require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['liname'])) {
    header("Location: login_librarian.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `librarian` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles & Books Management  - View Returned Articles & Bookss Page</title>
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
  <div id="header"> <a href="../index2.php"><img src="../images/logo.jpg" alt="Articles & Books Management " title="Articles & Books Management " border="0" /></a>
    <ul>
      <li><a href="../index2.php">Home</a> </li>
      <li><a href="../pages/about2.php">About us</a></li>
      <li><a href="../pages/help2.php">Help</a></li>
      <li><a href="logout.php">Logout</a></li>
      <li><a href="../pages/contact2.php">Contact</a> </li>
    </ul>
    <h1 style="color: yellow;">Articles & Books Management  ~ Knowledge In the Palm of Your Hands</h1>
  </div>
</div>
<div id="bodymiddlePan" style="text-align: center;">
  <h2 style="font-size: 14px; color: yellow;">~ Welcome Manager <?php echo $row['Fullname']; ?> !~</h2><br>
  <div style="text-align: center;">
   <p>Below are the borrowed Articles & Bookss that have been returned :</p> <br><br>
</div>
   <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Borrow ID</th>
<th style="text-align: left;
  padding: 8px;">Articles & Books ID</th>
<th style="text-align: left;
  padding: 8px;">Email Address</th>
<th style="text-align: left;
  padding: 8px;">Date of Borrow</th>
<th style="text-align: left;
  padding: 8px;">Date To Return</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "library_management_system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 $email = $_SESSION['Email'];
$sql = "SELECT * FROM `returned_Articles & Bookss`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Return_ID"] . "</td><td>" . $row["Articles & Books_ID"] . "</td><td>" . $row["Email_Address"]. "</td><td>" . $row["Date_Returned"]. "</td><td>" . $row["Status"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<br>
<br>
<button onclick="printData()" style="width: 12%; margin-left: 50%;">Print the List of Borrowed Articles & Bookss</button>
<br>
<br>
</form>
</div>
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

<script type="text/javascript">
  
n =  new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("today").value = m + "/" + d + "/" + y;

</script>

<div id="footermainPan">
  <div id="footerPan">
    <ul>
     <li><a href="../index2.php">Home</a> </li>
      <li><a href="../pages/about2.php">About us</a></li>
      <li><a href="../pages/help2.php">Help</a></li>
      <li><a href="../pages/contact2.php">Contact</a> </li>
    </ul>
  </div>
</div>
<div align=center>Created by Kelvin Lemanta@2024</a></div>
</body>
</html>

