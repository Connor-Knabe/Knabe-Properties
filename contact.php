<?php include("include/loginheader.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("include/header.php"); ?>
    <script>
      $(function(){
        $("#accordion").accordion();
      });
    </script>
  </head>

  <body>

    <div class="container">
    <?php include("include/navbar.php"); ?>
      <!-- Example row of columns -->

      <div class="featured">
        <h2>Contact</h2>
        
      </div>



      <div class="row-fluid">
        <p>Have a question about a home or want to talk about selling yours? Or, if you have any other questions or comments, then feel free to e-mail or call using any of the information below. You will get a response as quickly as possible.</p>
        <p>Kent Knabe</p>
        <div id="accordion">
          <h3>Owner</h3>
          <div>Kent Knabe</div>
          <h3>Phone Number</h3>
          <div>314-555-5555</div>
          <h3>Email Address:</h3>
          <div>KentKnabe@gmail.com</div>
        </div>
      
      </div>
     

      <hr>

      <?php include("include/footer.php"); ?>

    </div> <!-- /container -->

    
  </body>
</html>
