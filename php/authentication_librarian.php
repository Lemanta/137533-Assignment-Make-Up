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

        $sql = "SELECT * FROM `librarian` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            
            if(password_verify($password, $row['Password'])){

                $_SESSION['liname'] = $row['Fullname'];
                $_SESSION['Email'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location:../index2.php");
            }else{
                echo "Incorrect password.";
            }

        }else{
            echo "Librarian does not exist.";
        }
    }
}
?>