<?php

require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['liname'])) {
    header("Location: login_librarian.php");
}

else if(isset($_POST['update'])){
  session_start();
    $Articles & Books = $_POST['bid'];

    if(empty($Articles & Books)){
        echo "Please input a valid Articles & Books ID.";
        
    }else{

        $sql1 = "SELECT * FROM `Articles & Bookss` WHERE `Articles & Books_ID`='$Articles & Books'";

        $run = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($run) > 0){
            $row1 = mysqli_fetch_assoc($run);

                $_SESSION['Articles & Booksname1'] = $row1['Articles & Books_ID'];
                header("Location: update_b1.php");
            }else{
            echo "Articles & Books does not exist.";
        }
      }
    }
?>