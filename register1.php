<?php
session_start();

include('injection.php');

include('jdf.php');

if(isset($_POST['captcha'])){
	
	
	if($_POST['captcha']==$_SESSION['captcha']){
		
		
		$name=$_POST['namekarbar'];
		
	    $name=check($name);
		$mail=$_POST['mail'];
		$mail=check($mail);
	   
	   if(isset($_POST['jensiat'])){ $jensiat=$_POST['jensiat'];} else{$jensiat=2;}
	   
		$password=$_POST['password'];
		$password=check($password);
		$password=md5($password);
		
	    $mobile=$_POST['mobile'];
		$mobile=check($mobile);
		$tel=$_POST['tel'];
		$tel=check($tel);
		$ostan=$_POST['ostan'];
		$ostan=check($ostan);
		$shahr=$_POST['shahr'];
		$shahr=check($shahr);
		$shahr=intval($shahr);
		$codeposti=$_POST['codeposti'];
		$codeposti=check($codeposti);
		$adres=$_POST['adres'];
		$adres=check($adres);
		
		$fileadres=$_POST['fileadres'];
		  
		if(isset($_POST['khabarnameemail'])){$khabarnameemail=1;}else{$khabarnameemail=0;}

		if(isset($_POST['khabarnamesms'])){$khabarnamesms=1;}else{$khabarnamesms=0;}
     
	    $tarikh=jdate('Y/n/j');
		
		include('connect.php');
		
		$sql="insert into tblozv (email,mobile,name,jensiat,password,tel,ostan,shahr,codeposti,adres,khabaremail,khabarsms,tarikh,fileadres) values ('$mail','$mobile','$name','$jensiat','$password','$tel','$ostan','$shahr','$codeposti','$adres','$khabarnameemail','$khabarnamesms','$tarikh','$fileadres') ";
		
		$stmt=$db->prepare($sql);
		
		$stmt->execute();
	    
		
		
		
		
		}
		
		else{}
	
	
	
	}
	
	
	else{}







?>