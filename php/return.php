<?php

if(isset($_POST["return"])){

	$id = $_POST['bid'];
	$email = $_POST['uemail'];
	$getTodaysDate = date('d-m-Y');

require_once 'dbconnection.inc.php';

if (empty($id)){
	echo "Kindly input a Borrow ID.";
}else if (empty($email)){
	echo "Kindly input a Borrow ID.";
}else {

$select = mysqli_query($conn, "SELECT * FROM `user` WHERE `Email_Address` = '$email'") or exit(mysqli_error($connectionID));
if(mysqli_num_rows($select)) {
	 $query=mysqli_query($conn,"SELECT * FROM `borrowed_Articles & Bookss` WHERE `Borrow_ID`='$id'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  $datedue = $row['Date_To_Return'];
  $date1 = strtotime($datedue);
  $date2 = strtotime($getTodaysDate);
  if ($date2 > $date1) {
  		  $sql = "DELETE FROM `borrowed_Articles & Bookss` WHERE `Borrow_ID` = '$id'";
	mysqli_query($conn, $sql);
	$sql1 = "INSERT INTO `returned_Articles & Bookss`(`Articles & Books_ID`, `Email_Address`, `Date_Returned`, `Status`) VALUES ('$id','$email','$getTodaysDate','Returned Late')";
	mysqli_query($conn, $sql1);
	 // var_dump($sql);
	 // die();
	header("Location: viewreturned2.php?return=success");
  }else{
  	  $sql = "DELETE FROM `borrowed_Articles & Bookss` WHERE `Borrow_ID` = '$id'";
	mysqli_query($conn, $sql);
	$sql1 = "INSERT INTO `returned_Articles & Bookss`(`Articles & Books_ID`, `Email_Address`, `Date_Returned`, `Status`) VALUES ('$id','$email','$getTodaysDate','Returned Early')";
	mysqli_query($conn, $sql1);
	 // var_dump($sql);
	 // die();
	header("Location: viewreturned2.php?return=success");
  }
}else{
		echo "User does not exist within the system.";
}
}
}
?>