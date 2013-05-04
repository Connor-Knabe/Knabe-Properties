<?php
session_start();
//Log the user out
if(isset($_GET['logout']))
{
  unset($_SESSION['login']);
  session_destroy();
}

if (!isset($_SESSION['login'])){
      header("Location: index.php");
}
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("include/header.php"); ?>
   </head>

  <body>

    <div class="container">
      <?php include("include/navbar.php"); ?>
      <hr>
      <!-- Example row of columns -->
      <div class="featured">
        <h1>Some hidden videos</h2>
      </div>

      <div class="row-fluid">
        <div class="span4">
          <iframe width="320" height="315" src="http://www.youtube.com/embed/qu_sW8ZqEbg" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="span4">
          <iframe width="320" height="315" src="http://www.youtube.com/embed/p7M-OwFBg5E" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="span4">
     		 <iframe width="320" height="315" src="http://www.youtube.com/embed/pL8y8XXGxQA" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Knabe Properties llc.</p>
            <?php
        if (isset($_SESSION['login'])) {

      ?>
            
        <p>Hello <?php echo $_SESSION["username"]; ?>, you have logged in!</p>
        <a href="?logout=true">Click here to logout</a>
        <?php
      }
       ?>
       </div>
    </div> <!-- /container -->

  </body>
</html>