<?php

if(isset($_POST["submit"])){

	$fname = $_POST['fname'];
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

	$sql = "INSERT INTO `librarian`(`Fullname`, `Email_Address`, `Phone_Number`, `Password`, `Recovery_Question`, `Recovery_Answer`) VALUES ('$fname','$email','$phone','$hashedpassword','$question','$answer')";

	mysqli_query($conn, $sql);
	 // var_dump($sql);
	 // die();
	header("Location: viewlibrarians.php?signup=success");

}else{
	echo "Passwords do not match.";
}

}
?>