<?php 
	session_start();
	//echo $_SESSION['sample'];
	//after session_destroy(); has been initialized this will give an error that no variable exists...
var_dump($_SESSION);
  
 ?>