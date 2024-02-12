<?php

include('connect.php');

if(isset($_COOKIE['mybasket'])){
	
	$id=$_POST['idmahsool'];
	
	$cookiename=$_COOKIE['mybasket'];	
	
	$sql="select * from tblsabad where cookiename='".$_COOKIE['mybasket']."' and idmahsool=".$id." and pardakht=0 ";
	$stmt=$db->prepare($sql);
    $stmt->execute();
	$num=$stmt->rowCount();
	
	if($num==0){
		
	    
	$sql="insert into tblsabad (cookiename,idmahsool,tedad) values ('$cookiename','$id',1)  ";
	$stmt=$db->prepare($sql);
    $stmt->execute();
			
		
		        }
	
	else{  
	
	
	  $sql=" update tblsabad set tedad=tedad+1 where cookiename='".$cookiename."' and idmahsool=".$id." ";
	  $stmt=$db->prepare($sql);
      $stmt->execute();
		
	
	     }
	
	
	
	
	
	
	}


else{
	
	$random=microtime(true).rand(1,10000);
	
	setcookie('mybasket',$random,time()+60*60*24*365,'/');
	
	$id=$_POST['idmahsool'];
	
	$sql="insert into tblsabad (cookiename,idmahsool,tedad) values ('$random','$id',1)  ";
	
	$stmt=$db->prepare($sql);
    $stmt->execute();
	
	
	
	}




?>