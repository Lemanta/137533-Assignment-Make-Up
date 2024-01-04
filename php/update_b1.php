<?php

require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['liname'])) {
    header("Location: login_librarian.php");
}else{
  $Articles & Booksid = $_SESSION['Articles & Booksname1'];
  $query=mysqli_query($conn,"SELECT * FROM `Articles & Bookss` WHERE `Articles & Books_ID`='$Articles & Booksid'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../style1.css">

  <title>Articles & Books Management  - Update Articles & Books Page</title>
</head>
<style type="text/css">
</style>
<body>
  <br>
  <br>
  <div class="container" style="position: relative; top: 0px; text-align: center;">
    <form action="" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Update Articles & Books</p>
      <br>
      <br>
      <div class="input-group">
        <input type="text" placeholder="Kindly input Articles & Books Title" name="title" value="<?php echo $row['Title']; ?>" required>
         <input type="text" hidden name="Articles & Booksid" value="<?php echo $Articles & Booksid; ?>" required>
      </div>
       <br>
      <br>
      <div class="input-group">
        <input type="text" placeholder="Kindly input Articles & Books Author" name="author" value="<?php echo $row['Author']; ?>" required>
      </div>
       <br>
      <br>
      <div class="input-group">
              <p>Kindly input Articles & Books Genre : </p>
        <br>
        <br>
         <select required name="Genre">
      <option value="<?php echo $row['Genre']; ?>" disabled selected>Genre</option>
      <option value="Fiction">Fiction</option>
      <option value="Religious">Religious</option>
      <option value="Educational">Educational</option>
      <option value="Biography">Biography</option>
      <option value="Past Papers">Past Papers</option>
      </div>
       <br>
      <br>

       <div class="input-group">
        <input type="text" placeholder="Kindly input Publisher " name="publisher" value="<?php echo $row['Publisher']; ?>" required>
      </div>
       <br>
      <br>
       <div class="input-group">
        <input type="text" placeholder="Kindly input Publishing Company" name="company" value="<?php echo $row['Publishing_Company']; ?>" required>
      </div>
       <br>
      <br>
        <div class="input-group">
        <input type="text" placeholder="Kindly input Articles & Books Description" name="description" value="<?php echo $row['Description']; ?>" required>
      </div>
       <br>
      <br>
      <div class="input-group">
        <input type="text" placeholder="Kindly input Number of Pages" name="pages" required value="<?php echo $row['Number_Of_Pages']; ?>">
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
         $Articles & Booksid = $_POST['Articles & Booksid'];

require_once 'dbconnection.inc.php';

$Articles & Booksid = $_SESSION['Articles & Booksname'];

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

$sql = "UPDATE `Articles & Bookss` SET `Title`='$tit',`Author`='$auth',`Genre`='$gern',`Description`='$desc',`Publisher`='$publish',`Publishing_Company`='$com',`Number_Of_Pages`='$page' WHERE `Articles & Books_ID`='$Articles & Booksid'";

        // $query = mysqli_query($conn,$sql);

        if ($conn->query($sql) === TRUE) {
  echo "Record  successfully";
  header("Location: viewArticles & Bookss1.php");
 }
 else {
  echo "Error updating record: " . $conn->error;
}
} 
}
?>

</body>
</html>