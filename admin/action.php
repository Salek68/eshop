<?php

include('../myfirstclass.php');
$object=new class_parent;

if(isset($_GET['action'])){
$action=$_GET['action'];
};


if($action=='new_mahsool'){
	
	$b=array_values($_POST);
	
	print_r($b);
	$key2=0;
	
	foreach($b as $key=>$elem){
		
		if($key!=5){$a[$key2]=$elem;$key2++;}
		
		}

	
	if($_GET['virayesh']==0){
	$sql="insert into tblmahsool (title,dasteid,gheymat,mojood,img,tozihat,takmili) values (?,?,?,?,?,?,?)";
	}//if
	
	if($_GET['virayesh']==1){
	$idmahsool=$_GET['idmahsool'];
	$sql="update tblmahsool set title=?,dasteid=?,gheymat=?,mojood=?,img=?,tozihat=?,takmili=? where id=".$idmahsool." ";	
		}//if
	
	$object->myquery($sql,$a);
	

	$sql="select * from tblmahsool order by id desc limit 1";
	$res=$object->select($sql);print_r($res);
	$last_id=$res[0]['id'];
	
	
	
	if(!isset($idmahsool)){$idmahsool=$last_id;}
	
	
	$sql="delete from tblposition where idmahsool=".$idmahsool." ";
	$object->myquery($sql);
	
	$array_position=$_POST['position'];
	
	print_r($array_position);
	
	foreach($array_position as $position){
		
		$max='';
		if($position=='jadid'){$max=4;}
		
		$sql="select * from tblposition where position='".$position."' ";
		$num=$object->num($sql);
		
		if($num==$max){
			$sql="delete from tblposition where position='".$position."' limit 1 ";
			$object->myquery($sql);
			}
		
		$sql="insert into tblposition (idmahsool,position) values (?,?)";
		$arr=array($idmahsool,$position);
		$object->myquery($sql,$arr);
		
		}
	
	
	
	if($_GET['virayesh']==0){
	//header('location:index2.php?item=mahsoolat&new&step2&idmahsool='.$last_id);
	}//if
	
	else{
		//header('location:index2.php?item=mahsoolat&new&virayesh&idmahsool='.$idmahsool);
		}//else
	
	
	}//if
	
	
	if($action=='gallery'){
		
		$vir=$_GET['virayesh'];
		$array=$_POST['img'];
		print_r($array);
		$idmahsool=$_GET['idmahsool'];
		echo $idmahsool;
		
		foreach($array as $img){
			
			if(!empty($img)){
			$sql="insert into tblax (img,idmahsool) values (?,?)";
			$arr=array($img,$idmahsool);
			$object->myquery($sql,$arr);
			}//if !empty
			
			
			}//foreach
		
		if($vir==0){
		header('location:index2.php?item=mahsoolat&new&step3&idmahsool='.$idmahsool);
		}//if
		if($vir==1){header('location:index2.php?item=mahsoolat&new&step2&virayesh&idmahsool='.$idmahsool);}//if
		
		}//gallery
	
	
	
	
	if($action=='mahsool_vijegi'){
		
		$vir=$_GET['virayesh'];
		$idmahsool=$_GET['idmahsool'];
		$sql="select * from tblmahsool where id=?";
		$arr=array($idmahsool);
		$res=$object->select($sql,$arr);
		$dasteid=$res[0]['dasteid'];
		
		
		$sql="select * from tblvijegi where iddaste=? and parent!=0";
		$arr=array($dasteid);
		$res=$object->select($sql,$arr);

		
		foreach($res as $row){
			
			$val=$_POST['vijegi'.$row['id']];
			if($vir==0){
			$sql2="insert into tblvijegi_mahsool (idvijegi,idmahsool,val) values (?,?,?)";
			$arr2=array($row['id'],$idmahsool,$val);
			}//if
			if($vir==1){
				$sql2="update tblvijegi_mahsool set val=? where idvijegi=? and idmahsool=?";
				$arr2=array($val,$row['id'],$idmahsool);
				}//if
			
			$object->myquery($sql2,$arr2);
			
			}//foreach
			
		if($vir==0){
		header('location:index2.php?item=mahsoolat&ok');
		}//if
		
		if($vir==1){
			
			header('location:index2.php?item=mahsoolat&new&step3&virayesh&idmahsool='.$idmahsool);
		
			}//if
		
		
		}//mahsool_vijegi
	
	
	
	if($action=='delete_gallery'){
		
		$idmahsool=$_GET['idmahsool'];
		$sql="select * from tblax where idmahsool=".$idmahsool." ";
		$res=$object->select($sql);
		
		print_r($res);
		
		foreach($res as $row){
			
			$id=$row['id'];
			
			echo $_POST['gallery'.$id];
			
			if(isset($_POST['gallery'.$id])){
				
				$sql2="delete from tblax where id=".$id." ";
				$object->myquery($sql2);	
				
				}//if
			
			
			}//foreach
		
		header('location:index2.php?item=mahsoolat&new&step2&idmahsool='.$idmahsool);
		
		}//if delete_gallery
	
	
	
	if($action=="delete_mahsoolat"){
		
		$arr=$_POST['mahsool'];
		print_r($arr);
		
		foreach($arr as $idmahsool){
			
			$sql="delete from tblmahsool where id=".$idmahsool."";
			$object->myquery($sql);
			
			
			}//foreach
			
			header('location:index2.php?item=mahsoolat');
		
		}//if
	
	
	
	
	
	if($action=="disable_mahsoolat"){
		
		$arr=$_POST['mahsool'];
		print_r($arr);
		
		foreach($arr as $idmahsool){
			
			$sql="update tblmahsool set disable=1 where id=".$idmahsool."";
			$object->myquery($sql);
			
			
			}//foreach
			
			header('location:index2.php?item=mahsoolat');
		
		}//if
		
		
		
		if($action=="active_mahsoolat"){
		
		$arr=$_POST['mahsool'];
		print_r($arr);
		
		foreach($arr as $idmahsool){
			
			$sql="update tblmahsool set disable=0 where id=".$idmahsool."";
			$object->myquery($sql);
			
			
			}//foreach
			
			header('location:index2.php?item=mahsoolat');
		
		}//if
	
	
	
	
	
	


?>

