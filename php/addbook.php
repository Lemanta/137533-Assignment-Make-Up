<?php

require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: login_manager.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../style1.css">

  <title>Articles & Books Management  - Add Articles & Books Page</title>
</head>
<style type="text/css">
</style>
<body>
  <br>
  <br>
  <div class="container" style="position: relative; top: 0px; text-align: center;">
    <form action="" method="POST" class="login-email">
      <br>
      <br>
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add Articles & Books</p>
      <br>
      <br>
      <div class="input-group">
        <input type="text" placeholder="Kindly input Articles & Books Title" name="title" required>
      </div>
      <br>
      <br>
      <div class="input-group">
        <input type="text" placeholder="Kindly input Articles & Books Author" name="author" required>
      </div>
      <br>
      <br>
      <div class="input-group">
        <p>Kindly input Articles & Books Genre : </p>
        <br>
        <br>
         <select required name="Genre">
      <option value="" disabled selected>Genre</option>
      <option value="Fiction">Fiction</option>
      <option value="Religious">Religious</option>
      <option value="Educational">Educational</option>
      <option value="Biography">Biography</option>
      <option value="Past Papers">Past Papers</option>
      </select>
      </div>
      <br>
      <br>
       <div class="input-group">
        <input type="text" placeholder="Kindly input Publisher " name="publisher"  required>
      </div>
      <br>
      <br>
       <div class="input-group">
        <input type="text" placeholder="Kindly input Publishing Company" name="company"  required>
      </div>
      <br>
      <br>
      <div class="input-group">
        <input type="text" placeholder="Kindly input a Description" name="description"  required>
      </div>
      <br>
      <br>
      <div class="input-group">
        <input type="text" placeholder="Kindly input Number of Pages" name="pages" required>
            </div>
      <br>
      <br>
      <div class="input-group">
        <button name="submit" class="btn" style="background-color: rgb(255, 223, 0);">Submit</button>
      </div>
    </form>
  </div>

 <?php

      if(isset($_POST['submit'])){
        $tit = $_POST['title'];
        $auth = $_POST['author'];
        $gern = $_POST['Genre'];
        $publish = $_POST['publisher'];
        $com = $_POST['company'];
        $page = $_POST['pages'];
         $desc = $_POST['description'];

require_once 'dbconnection.inc.php';

$email = $_SESSION['Email'];

if (empty($tit)){
  echo "Kindly input Articles & Books Title.";
} else if (empty($auth)){
  echo "Kindly input Articles & Books Author.";
} else if (empty($gern)){
  echo "Kindly input a Articles & Books Genre.";
} else if (empty($publish)){
  echo "Kindly input Articles & Books Publisher.";
} else if (empty($com)){
  echo "Kindly input Publishing Company.";
} else if (empty($page)){
  echo "Kindly input Number of Pages.";
} else if (empty($desc)){
  echo "Kindly input Number of Pages.";
} 
else {

$sql = "INSERT INTO `Articles & Bookss`(`Title`, `Author`, `Genre`, `Description`, `Publisher`, `Publishing_Company`, `Number_Of_Pages`) VALUES ('$tit','$auth','$gern','$desc','$publish','$com','$page')
";


        if ($conn->query($sql) === TRUE) {
  echo "Record  successfully";
   header("Location: viewArticles & Bookss.php");
 }
 else {
  echo "Error adding record: " . $conn->error;
}
} 
}
?>

</body>
</html>
     
