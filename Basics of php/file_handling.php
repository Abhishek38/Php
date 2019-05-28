<?php 
//to create a file using only php code..

/*mode of operation
write w
read r
append a*/
 $file=fopen('dbz.txt', 'r'); //creates a file of particular format in desired mode of operation....
 //fwrite($file ,'dragon ball z is the best anime of all time');//to put the data into the file.... and it will overwrite the previous data with the data provided.... 
 $output=fread($file, filesize('dbz.txt'));// to get the data of the file onto our website...
 echo $output;
$file=fopen('dbz.txt', 'a');
 fwrite($file ,'dragon ball z is the best anime of all time');// in append mode it will append the given data with the previously presented data...

 ?>