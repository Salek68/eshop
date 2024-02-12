<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test2</title>
</head>

<body>


پرداخت با موفقیت انجام شد. محصولات خریداری شده:

<?php

include('myfirstclass.php');
$object=new class_parent;

 $id_get=$_POST['id_get'];
 $transe_id=$_POST['trans_id'];

$url = 'http://payline.ir/payment-test/gateway-result-second';
$api='adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
$result=$object->get($url,$api,$transe_id,$id_get);


if($result==1){
	
	
	$sql="update tblsefaresh set pardakht=1 where id_get=?";
	$arr=[$id_get];
	$object->myquery($sql,$arr);
	
	$sql="select * from tblsefaresh where id_get=? ";
	$arr=[$id_get];
	$res=$object->select($sql,$arr);
	
	
	$arr_idsabad=unserialize($res[0]['idsabad']);
	
	foreach($arr_idsabad as $idsabad){
		
	$sql2="select * from tblsabad where id=? ";
	$arr=[$idsabad];
	$res2=$object->select($sql2,$arr);
	
	$idmahsool=$res2[0]['idmahsool'];
	$sql2="select * from tblmahsool where id=? ";
	$arr=[$idmahsool];
	$res3=$object->select($sql2,$arr);
	
	echo $res3[0]['title'].' تعداد :'.$res2[0]['tedad'].'<br>';
	
		
		
		
		}//foreach
	
	
	
	
	
	}//if


?>






</body>
</html>