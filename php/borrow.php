<?php

if(isset($_POST["submit"])){

	$id = $_POST['bid'];
    $borrowed = $_POST['borr'];
    $returned = $_POST['return'];
    $email = $_POST['email'];
$datestamp = strtotime($returned);
 $datestamp2 = strtotime($borrowed);


require_once 'dbconnection.inc.php';

if (empty($id)){
	echo "Kindly input a Articles & Books ID.";
}else if (empty($borrowed)){
	echo "Kindly input a Date of Borrow.";
}else if (empty($returned)){
	echo "Kindly input a Date of Return.";
}else if ($datestamp2 > $datestamp){
	echo "Kindly input a Return Date after the Borrowed Date.";
}else {

$select = mysqli_query($conn, "SELECT * FROM `user` WHERE `Email_Address` = '$email'") or exit(mysqli_error($connectionID));
if(mysqli_num_rows($select)) {
   $sql = "INSERT INTO `borrowed_Articles & Bookss`(`Articles & Books_ID`, `Email_Address`, `Date_Of_Borrow`, `Date_To_Return`) VALUES ('$id','$email','$borrowed','$returned')";

	mysqli_query($conn, $sql);
	 // var_dump($sql);
	 // die();
	header("Location: viewborrowed2.php?borrow=success");
}else{
		echo "User does not exist within the system.";
}
}
}
?>