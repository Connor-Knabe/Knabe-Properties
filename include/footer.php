<div class="footer">
    <p>&copy; Knabe Properties llc.</p>
                 
	<?php


	//If user is already logged in
	//echo "LOGGEDIN!"  . "<br>" . $_SESSION['login'] ."<br>". $hash ;
	if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {

	  ?>
	      
	    <p>Hello <?php echo $username; ?>, you have logged in!</p>
	    <a href="?logout=true">Click here to logout</a>
	    <br>
	  <?php

	}

	else {
	    //Error message
	    display_login_form();
	    if(isset($_POST['submit'])){
	      echo '<p>Please Enter Your Login Information Again</p>';   
	    }
	}

	//Submit the form
	 
	function display_login_form(){ ?>
	  <p>Login to access the videos about flipping
	  <form action="<?php echo $self; ?>" method='post'>
	  <label for="username">username</label>
	  <input type="text" name="username" id="username">
	  <label for="password">password</label>
	  <input type="password" name="password" id="password">
	  <input type="submit" name="submit" value="submit">
	  </form> 
	  </p>

	<?php } ?>



</div>