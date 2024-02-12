<?php
session_start();

$passold=$_POST['passold'];

$passnew=$_POST['passnew'];

$passold=md5($passold);

$passnew=md5($passnew);

include('connect.php');

$sql="select * from tblozv where email='".$_SESSION['email']."' and password='".$passold."' ";

$stmt=$db->prepare($sql);

$stmt->execute();

$num=$stmt->rowCount();



if($num==1){
	
$sql="update tblozv set password='".$passnew."' where email='".$_SESSION['email']."' ";

$stmt=$db->prepare($sql);

$stmt->execute();
	
	header('location:panel.php?item=changepass');
	
	}














?>