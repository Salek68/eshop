<?php

include('myfirstclass.php');

$object=new class_parent;

$array_id=array();

$keyword=$_POST['keyword'];

$array_keyword = preg_split('/\s+/',$keyword);


$page=$_POST['page'];

$s1='';

$hast=$_POST['hast'];

if($hast==1){$s1=' mojood >0 and ';}//if

$minamount=$_POST['minamount'];

$maxamount=$_POST['maxamount'];

$order=$_POST['order'];

if($order==1){$order="order by id desc";}//if
if($order==2){$order="order by porbahs desc";}//if
if($order==3){$order="order by foroosh desc";}//if




$iddaste='';

$sql_daste="";

if(isset($_POST['iddaste'])){

$iddaste=intval($_POST['iddaste']);

$daste=[$iddaste];

$daste_first=array();

$sql_daste=" and ( ";



$sql="select * from tblmenu where parent=".$iddaste." ";

$res=$object->select($sql);

foreach($res as $row){
	
	if(!in_array($row['id'],$daste)){
	array_push($daste,$row['id']);
	}
	
	}
	
	
	$daste_first=$daste;
	
	
	
	
	foreach($daste_first as $iddaste2){
		
$sql="select * from tblmenu where parent=".$iddaste2." ";

$res2=$object->select($sql);


foreach($res2 as $row){
	
	if(!in_array($row['id'],$daste)){
	array_push($daste,$row['id']);
	}
	
	}
	
		
		}
		
		
		
		
		foreach($daste as $key=>$iddaste_item){
			
			if($key!=sizeof($daste)-1){
			
			$sql_daste=$sql_daste." dasteid = ".$iddaste_item." or ";
			
			}
			
			else{
				
				$sql_daste=$sql_daste." dasteid = ".$iddaste_item." )  ";
				
				}//else
			
			
			
			}
		
		
}







$tedad_dar_page=$_POST['tedad_dar_page'];


$sql="select * from tblmahsool where ".$s1."  gheymat>=".$minamount." and gheymat<=".$maxamount." and title like '%".$keyword."%' ".$sql_daste."   ".$order." ";

$result=$object->select($sql,array(),PDO::FETCH_NUM);


foreach($result as $row){
	
	array_push($array_id,$row[0]);
	
	}//foreach




foreach($array_keyword as $keyword){
			
$sql="select * from tblmahsool where ".$s1."  gheymat>=".$minamount." and gheymat<=".$maxamount." and title like '%".$keyword."%' ".$sql_daste."  ".$order." ";

$result=$object->select($sql,array(),PDO::FETCH_NUM);

foreach($result as $row){
	
	if(!in_array($row[0],$array_id)){array_push($array_id,$row[0]);}//if
	
	
}//foreach
		
				
}//foreach array_keyword





$tedad_result=sizeof($array_id);

$tedad_page=ceil($tedad_result/$tedad_dar_page);

$start=($tedad_dar_page)*($page-1)+1;

$end=$start+$tedad_dar_page-1;
	

	
$array=array();	

$array_result=array();	

$array=array_slice($array_id,$start-1,$end-$start+1);


foreach($array as $id){
	
$sql="select * from tblmahsool where id=".$id." ";

$res=$object->select($sql,array(),PDO::FETCH_NUM);

array_push($array_result,$res[0]);

	
	}//foreach



$array_all=array(sizeof($array_id),$array_result);	

echo json_encode($array_all);













?>