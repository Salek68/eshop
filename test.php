<?php


$array=array(array('id'=>3,'family'=>'ahmadi'),array('id'=>2,'family'=>'razavi'));



function cmp_function($a,$b){
	
	if($b['id']>$a['id']){return 1;}
	if($b['id']<$a['id']){return -1;}
	if($a['id']==$b['id']){return 0;}

	}

usort($array,'cmp_function');

print_r($array);


?>