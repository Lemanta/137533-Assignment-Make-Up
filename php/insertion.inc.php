<?php

if(isset($_POST["submit"])){

	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $question = $_POST['rq'];
    $answer = $_POST['ra'];
    $password = $_POST['pass'];
    $passconfirm = $_POST['cpassword'];

require_once 'dbconnection.inc.php';

if (empty($password)){
	echo "Kindly input a password.";
}

else if ($password == $passconfirm) {

	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `user`(`First_Name`, `Last_Name`, `Email_Address`, `Phone_Number`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$fname','$lname','$email','$phone','$question','$answer','$hashedpassword')";

	mysqli_query($conn, $sql);
	 // var_dump($sql);
	 // die();
	header("Location: user_login.php?signup=success");

}else{
	echo "Passwords do not match.";
}

}
?>