<?php 
setcookie('username', '', time()-3600, 'babbage.cs.missouri.edu/~ckgdd/Knabe/'); 
setcookie('password', '', time()-3600, 'babbage.cs.missouri.edu/~ckgdd/Knabe/');
header("Location: index.php"); 
?>