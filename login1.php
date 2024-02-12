<?php
session_start();

$email=$_POST['email'];

$email=addslashes($email);

echo $email;

$pass=$_POST['pass'];

$pass=md5($pass);

include('connect.php');

$sql="select * from tblozv where email='".$email."' and  password='".$pass."' ";

$stmt=$db->prepare($sql);

$stmt->execute();

$num=$stmt->rowCount();

echo $num;

if($num==1){
	
	if(isset($_POST['remember'])){setcookie('remember',$email,time()+60*60*24*30,'/');}
	
$_SESSION['email']=$email;	

header('location:panel.php');}

else{header('location:login.php');}












?>