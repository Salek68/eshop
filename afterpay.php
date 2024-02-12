<?php
ob_start();
session_start();
$cookie=$_COOKIE['mybasket'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه اینترنتی</title>

<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/cycle.js"></script>



</head>

<body style="margin:0; padding:0;">




<?php

include('top.php');

?>

<style>

p{font-family:tahoma; margin-top:0; direction:rtl; }

</style>


<div id="undermenu" style="width:100%; background:#CFFCFC; height:340px;">


<div id="undermenu1" style="width:1100px; margin:0 auto; height:100%; position:relative; background:#fff;  ">



<p style="text-align:center;">

پرداخت شما با موفقیت انجام شد.

</p>


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
	
	if($res[0]['sms']==0){
	
	$mobile=$res[0]['mobile'];
	$text='شماره سفارش شما
	'.$res[0]['id_sefaresh'].'
	می باشد';
	
	/*$object->sms($mobile,$text);*/
	
	}//sms
	
	$sql="update tblsefaresh set sms=1 where id_get=?";
	$arr=[$id_get];
	$object->myquery($sql,$arr);
	
	
	echo '<p style="text-align:center;width:100%;"> <span style="float:right; margin-right:400px;">شماره سفارش شما:  </span> <span style="float:right;"> '.$res[0]['id_sefaresh'].' </span> </p>';
	
	
	echo '<p style="text-align:center; float:right; margin-top:7px; width:100%; "> شماره تراکنش: '.$transe_id.' </p>';
	
	
	
	echo '<p style="text-align:center; float:right; margin-top:7px; width:100%; ">لیست محصولات خریداری شده:</p>';
	
	$sql="update tblsefaresh set trance_id=? where id=?";
	$arr=[$transe_id,$res[0]['id']];
	$object->myquery($sql,$arr);
	
	
	$arr_idsabad=unserialize($res[0]['idsabad']);
	
	foreach($arr_idsabad as $idmahsool=>$tedad){
		
	$sql2="select * from tblsabad where idmahsool=? and cookiename=? and pardakht=? ";
	$arr=[$idmahsool,$cookie,0];
	$res2=$object->select($sql2,$arr);
	$idsabad=$res2[0]['id'];
	
	$sql4="update tblsabad set pardakht=1 where id=?";
	$arr=[$idsabad];
	$object->myquery($sql4,$arr);
	
	
	$idmahsool=$res2[0]['idmahsool'];
	$sql2="select * from tblmahsool where id=? ";
	$arr=[$idmahsool];
	$res3=$object->select($sql2,$arr);
	
	echo '
	<p style="text-align:center; float:right; margin-top:7px; width:100%; ">'.$res3[0]['title'].' تعداد :'.$tedad.'</p>';
	
		
		
		
		}//foreach
	
	
	
	
	
	}//if


?>



</div><!--undermenu1-->


</div><!--undermenu-->





</body>



</html>