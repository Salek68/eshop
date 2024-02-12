<?php

include('myfirstclass.php');

$object=new class_parent;

$sql="select * from tblmahsool ";

$result=$object->select($sql,array(),PDO::FETCH_NUM);

$page=$_GET['page'];

$tedad_result=$object->num($sql);

$tedad_dar_page=2;

$tedad_page=ceil($tedad_result/$tedad_dar_page);

$start=($tedad_dar_page)*($page-1)+1;

$end=$start+$tedad_dar_page-1;
	
$array=array();	

$array=array_slice($result,$start-1,$end-$start+1);

print_r($array);




$m=1;

foreach($result as $row){
	
   if($m>=$start and $m<=$end){
		
	//echo $row['id'].'<br>';	
		
	}//if
	
	$m++;
	
	}//foreach
	










?>