<?php 
/*
for
dowhile
while
foreach
*/

// for($i=0;$i<10;$i++){
// echo $i;
// }

//while loop--------------------------------------------
// $i=0;
// while($i<10){
// echo $i;
// $i++;
// }

//do while loop------------------------------
//  $i=0;
// do{
// echo $i;
// $i++;
// }while($i<10)
//foreach loop------------------------------
$Sample =array('goku'=>"main character",
				'vegeta'=>9000,
				'gohan'=>12.12,
				'trunks'=>false);
foreach ($Sample as $key => $value) {
	echo $key.'&nbsp'.$value.'<br/>';
	# code...
}
 ?>