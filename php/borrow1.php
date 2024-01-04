<?php

require_once 'dbconnection.inc.php';
session_start();

if(isset($_POST["borrow"])){

    $id = $_POST["bid"];
    $sql = "SELECT * FROM `Articles & Bookss` WHERE `Articles & Books_ID`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

                $_SESSION['Articles & Booksdet'] = $row['Articles & Books_ID'];
                echo "Login Succesful.";
                header("Location: borrow_Articles & Books.php");
            }else{
                echo "Articles & Books does not exist.";
            }
}

?>