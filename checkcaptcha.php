<?php
session_start();

$captcha=$_POST['captcha'];

if($captcha==$_SESSION['captcha']){
	
	echo 0;
	
	}
	
	else{
		
		echo 1;
		
		}



?>
