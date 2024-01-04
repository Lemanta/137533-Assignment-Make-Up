<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
        echo "Please input an email.";
    }else if(empty($password)){
        echo "Please enter your password."; 

    }else{

        $sql = "SELECT * FROM `user` WHERE `Email_Address`='$email'";
        // var_dump($sql);
        // die();
        
        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            
            if(password_verify($password, $row['Password'])){

                $_SESSION['Fname'] = $row['First_Name'];
                $_SESSION['Lname'] = $row['Last_Name'];
                $_SESSION['Email'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location:../index3.php");
            }else{
                echo "Incorrect password.";
            }

        }else{
            echo "User does not exist.";
        }
    }
}
?>
