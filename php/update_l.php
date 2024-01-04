 <?php

     session_start();
      if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

require_once 'dbconnection.inc.php';

$email = $_SESSION['Email'];

if (empty($fname)){
  echo "Kindly input First Name.";
} else if (empty($lname)){
  echo "Kindly input Last Name.";
} else if (empty($phone)){
  echo "Kindly input a Phone Number.";
} else if (empty($gender)){
  echo "Kindly input a Gender.";
} 
else {

$sql = "UPDATE `users` SET `First_Name`='$fname',`Last_Name`='$lname',`Phone_Number`='$phone',`Gender`='$gender' WHERE `Email_Address`= '$email'
";

        $query = mysqli_query($conn,$sql);

        if ($conn->query($sql) === TRUE) {
  echo "Record  successfully";
   header("Location:../index1.php");
 }
 else {
  echo "Error deleting record: " . $conn->error;
}
} 
}
?>
     
