<?php 
//\\ Sessions will hold a single value till the browser is opened or session variable is not destroyed.
session_start();//it start the session feature.

$_SESSION['sample']="this is the session varaible"; //the session variable should be in all capital ....
$_SESSION['sample1']="this is the session1 varaible";
$_SESSION['sample2']="this is the session2 varaible";

foreach ($_SESSION as $key => $value) {
	echo $value.'<br/>';
}


 ?>