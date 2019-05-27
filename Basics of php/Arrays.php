<?php
/*Simple Arrays syntax
----------------
name of the array i.e. $Sample=array(empty array);*/
$sample=array('hello',123456789,12.12,true);
echo $sample[2],'<br />';

/* Assocaitive array similar to hashmap in java but always prints the value not the key;

syntax
------
$sample=array(1=>"hello",2=>123456789,3=>12.12,4=>true);
here key can be also be of any datatype;
*/
$Sample =array('goku'=>"main character",
				'vegeta'=>9000,
				'gohan'=>12.12,
				'trunks'=>false);
echo $Sample['vegeta'],'<br />';

//Multidemensional Array,Array within array;
$Sample1 =array(
				'goku'=>array(1,2,3),
				'vegeta'=>9000,
				'gohan'=>12.12,
				'trunks'=>false);
echo $Sample1['goku'][2];//output will be the number at position 2 in array goku;


?>