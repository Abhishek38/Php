<?php 
session_start();

//session_destroy();//this method will destroy the session variable and all those files using that variable will get null value...
//this will also destroy every single session variable that was initailized...

//-------------------------------------------------------------
unset($_SESSION['sample1']);//This method will destroy only that particular session variable which has been passed into the arguments of this function....
 ?>