<?php 

require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Fname']) && !isset($_SESSION['Lname']) && !isset($_SESSION['Email'])) {
    header("Location: user_login.php");
}else{
   $Articles & Booksss = $_SESSION['Articles & Booksdet'];
  $query=mysqli_query($conn,"SELECT * FROM `Articles & Bookss` WHERE `Articles & Books_ID`='$Articles & Booksss'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles & Books Management  - Borrow Articles & Books Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container" style="position: relative; top: 0px; width: 70%; text-align: center;">
    <form method="POST" action="borrow.php" class="login-email">
      <div>
        <h1 style="background-color: blue;">Borrow Articles & Books Form</h1>
      </div>
      <br/>
      <fieldset>
        <legend style="background-color: blue;">User Details:</legend>
        <br>
          <p style="font-size: 14px; font-weight: bold;">Kindly fill in the details below.</p>
          <br>
        <div>
            <label for="fname">User Name:</label>
            <input type="text" name="" style="width: 70%" required></input>
        </div>
        <br>
        <br>
         <div>
            <label for="fname">User Email Address:</label>
            <input type="text" class="gtext" name="email" value="" style="width: 70%" required></input>
        </div>
        <br>
        <br>
      </fieldset>
      <fieldset>
        <legend style="background-color: blue;">Articles & Books Details:</legend>
        	<br>
          <p style="font-size: 14px; font-weight: bold;">Kindly do not edit the details, unless any of them are incorrect.</p>
          <br>
        <div>
            <label for="fname">Articles & Books Title:</label>
            <input type="text" name="" value="<?php echo $row['Title'];?>" style="width: 70%" required></input>
        </div>
        <br>
        <br>
         <!-- <div> -->
            <!-- <label for="fname">Articles & Books ID :</label> -->
            <input type="text" class="gtext" value="<?php echo $row['Articles & Books_ID'];?>" name="bid" style="width: 70%" hidden></input>
        <!-- </div>
        <br>
        <br> -->
         <div>
              <label for="fname">Date Of Borrow:</label>
              <input type="text" id="today" name="borr" class="gtext" required></input>
              <i class="fas fa-calendar-alt"></i>
        </div>
        <br>
        <br>
         <div>
              <label for="fname">Date To Return:</label>
              <input type="date" id="today" name="return" class="gtext" required></input>
              <i class="fas fa-calendar-alt"></i>
        </div>
        <br>
        <br>
      </fieldset>
      <button type="submit" name="submit">Submit</button>
  </form>
</body>

<script type="text/javascript">

 n =  new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("today").value = m + "/" + d + "/" + y;

</script>

</html>