<?php

try{
	
$db=new PDO('mysql:host=localhost;dbname=db_eshop','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

}


catch(PDOEXCEPTION $error){
	
	
	echo 'connection failed';
	
	
	}
	
	try{
	
$sql="select * from tblozv";

$query=$db->query($sql);

$num=$query->rowCount();

echo $num;

	}
	
	
    catch(PDOEXCEPTION $error){
	
	
	echo 'query failed';
	
	
	}


ini_set('display_errors','on');


echo $salam;







?>





