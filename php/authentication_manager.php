<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $id = $_POST['aid'];
    $password = $_POST['password'];

    if(empty($id)){
        echo "Please input an email.";
    }else if(empty($password)){
        echo "Please enter your password."; 
        
   }

    else{

        $sql = "SELECT * FROM `admin` WHERE `Administrator_ID`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            $pass = $row['Password'];

            if(md5($password) == $pass){

                $_SESSION['adminname'] = $row['Fullname'];
                $_SESSION['Email'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location:../index1.php");
            }else{
                echo "Incorrect password.";
            }
}else{
    echo "Administrator does not exist.";
    }
}
}
?>
