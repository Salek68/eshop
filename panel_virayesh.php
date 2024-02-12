<?php
session_start();

if(!isset($_SESSION['email'])){header('location:login.php');}

if(isset($_SESSION['email'])){


include('injection.php');

if(isset($_POST['captcha'])){
	
	
	if($_POST['captcha']==$_SESSION['captcha']){
		
		
		$name=$_POST['namekarbar'];
		
	    $name=check($name);
		
	   if(isset($_POST['jensiat'])){ $jensiat=$_POST['jensiat'];} else{$jensiat=2;}
	   
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
		
		
		include('connect.php');
		
		$sql="update tblozv set mobile='".$mobile."',name='".$name."',jensiat='".$jensiat."',tel='".$tel."',ostan='".$ostan."',shahr='".$shahr."',codeposti='".$codeposti."',adres='".$adres."',khabaremail='".$khabarnameemail."',khabarsms='".$khabarnamesms."',fileadres='".$fileadres."' where email='".$_SESSION['email']."'  ";
		
		$stmt=$db->prepare($sql);
		
		$stmt->execute();
		
		header('location:panel.php');
	    
		
		
		
		
		}
		
		else{}
	
	
	
	}
	
	
	else{}


     }/*end check session['email']*/
	 
	 else{header('location:login.php');}




?>