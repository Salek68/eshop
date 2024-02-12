<?php
ob_start();
session_start();

$action=$_POST["action"];
include("myfirstclass.php");
$object=new class_parent;
include('connect.php');
include('jdf.php');
$tarikh=jdate('Y/n/j');



if($action=="vote_kharid"){
	
	$id=intval($_POST["id"]);
	
	if(!isset($_COOKIE["vote_kharid"])){
	$array=array($id);
	$array_serialize=serialize($array);
	setcookie("vote_kharid",$array_serialize,time()+30*24*3600,"/");
	$sql="update tblmahsool set vote_kharid=vote_kharid+1 where id=".$id." ";
	$object->myquery($sql);
	}
	
	else{
		
		$array=unserialize($_COOKIE["vote_kharid"]);
	
		
		if(!in_array($id,$array)){
			
		$sql="update tblmahsool set vote_kharid=vote_kharid+1 where id=".$id." ";
		$object->myquery($sql);
			}
			
			else{
				echo "before";
				}
		
		array_push($array,$id);
		
		
		$array_serialize=serialize($array);
		setcookie("vote_kharid",$array_serialize,time()+30*24*3600,"/");
		
		
		
		}

	
	}//if action=vote_kharid




if($action=="vote_tasmim"){
	
	$id=intval($_POST["id"]);
	
	if(!isset($_COOKIE["vote_tasmim"])){
	$array=array($id);
	$array_serialize=serialize($array);
	setcookie("vote_tasmim",$array_serialize,time()+30*24*3600,"/");
	$sql="update tblmahsool set vote_tasmim=vote_tasmim+1 where id=".$id." ";
	$object->myquery($sql);
	}
	
	else{
		
		$array=unserialize($_COOKIE["vote_tasmim"]);
	
		
		if(!in_array($id,$array)){
			
		$sql="update tblmahsool set vote_tasmim=vote_tasmim+1 where id=".$id." ";
		$object->myquery($sql);
			}
			
			else{
				echo "before";
				}
		
		array_push($array,$id);
		
		
		$array_serialize=serialize($array);
		setcookie("vote_tasmim",$array_serialize,time()+30*24*3600,"/");
		
		
		
		}
	
	
	
	}// if action=vote_tasmim
	
	
	
	
	
	
	if($action=="addtobasket"){


if(isset($_COOKIE['mybasket'])){
	
	$id=$_POST['idmahsool'];
	$tedad_mahsool=$_POST['tedad_mahsool'];
	
	$cookiename=$_COOKIE['mybasket'];	
	
	$sql="select * from tblsabad where cookiename='".$_COOKIE['mybasket']."' and idmahsool=".$id." ";
	$stmt=$db->prepare($sql);
    $stmt->execute();
	$num=$stmt->rowCount();
	
	if($num==0){
		
	    
	$sql="insert into tblsabad (cookiename,idmahsool,tedad) values ('$cookiename','$id','$tedad_mahsool')  ";
	$stmt=$db->prepare($sql);
    $stmt->execute();
			
		
		        }
	
	else{  
	
	
	  $sql=" update tblsabad set tedad=".$tedad_mahsool." where cookiename='".$cookiename."' and idmahsool=".$id." ";
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

	}//if action=addtobasket
	
	
	
	
	if($action=="like_nazar"){
			
	$id=intval($_POST["id"]);
	
	if(!isset($_COOKIE["like"])){
	$array=array($id);
	$array_serialize=serialize($array);
	setcookie("like",$array_serialize,time()+30*24*3600,"/");
	$sql="update tblnazar set nazar_like=nazar_like+1 where id=".$id." ";
	$object->myquery($sql);
	}
	
	else{
		
		$array=unserialize($_COOKIE["like"]);

		if(!in_array($id,$array)){
			
		$sql="update tblnazar set nazar_like=nazar_like+1 where id=".$id." ";
		$object->myquery($sql);
			}
			
			else{
				echo "before";
				}
		
		array_push($array,$id);
		
		
		$array_serialize=serialize($array);
		setcookie("like",$array_serialize,time()+30*24*3600,"/");
		
		
		
		}
		
		
		}//if action=like_nazar
	
	
	
	
	if($action=="sabt_nazar"){
		
		
		if(isset($_POST['captcha'])){
	
	
		if($_POST['captcha']==$_SESSION['captcha']){
	
		
		$array=array($_POST['idmahsool'],$_POST['name_nazar'],$_POST['email_nazar'],$_POST['matn_nazar'],$tarikh);
		
		$sql="insert tblnazar (idmahsool,name,email,matn_nazar,tarikh) values (?,?,?,?,?)";
	
		$object->myquery($sql,$array);
		
		}//if
		
		else{echo 'captcha_error';}
		
		}//if
		
		else{echo 'captcha_error';}
		
		}//sabt_nazar
	
	
	
	
	
	if($action=='takhfif'){
	
		$code=$_POST['code'];
		$sql="select * from tbltakhfif where code=?";
		$arr=[$code];
		$res=$object->select($sql,$arr);
		
		if(isset($res[0])){
			
		echo $res[0]['takhfif'];	
			}//if
		
		
		}//takhfif
	
	
	
	
	
	
	if($action=='sefaresh'){
		
		
		$cookie=$_COOKIE['mybasket'];
		$sql="select * from tblsabad where cookiename=? and pardakht=0";
		$arr=[$cookie];
		$res=$object->select($sql,$arr);
		
		foreach($res as $row){
			
			$idmahsool=$row['idmahsool'];
			$tedad=$_POST['tedad'.$idmahsool];
			$sql2="update tblsabad set tedad=? where (cookiename=? and idmahsool=? and pardakht=0) ";
			$arr=[$tedad,$cookie,$idmahsool];
			$object->myquery($sql2,$arr);
			
			
			}//foreach
		
		
		
		$sql="select * from tblsabad where cookiename=? and pardakht=?";
		$arr=[$cookie,0];
		$res=$object->select($sql,$arr);
		$idsabad=array();
		foreach($res as $row){
			
			$idsabad[$row['idmahsool']]=$row['tedad'];
			
			}//foreach

			
		$idsabad=serialize($idsabad);
		
		
		$url = 'http://payline.ir/payment-test/gateway-send';
		$api='adxcv-zzadq-polkjsad-opp13opoz-1sdf455aadzmck1244567';
		$amount=$_POST['amount']*10;
		$redirect='http://127.0.0.1/eshop/afterpay.php';
		$result=$object->send($url,$api,$amount,$redirect);
		
		
		$id_sefaresh=rand(1001,9999).'-'.rand(1001,9999).'-'.rand(1001,9999).'-'.rand(1001,9999);
		
		$sql="select * from tblsefaresh where id_sefaresh=?";
		$arr=[$id_sefaresh];
		$num=$object->num($sql,$arr);
		
		if($num>0){
			
			$id_sefaresh=rand(1001,9999).'-'.rand(1001,9999).'-'.rand(1001,9999).'-'.rand(1001,9999);
			
			}//if
		
		$ozv='';
		if(isset($_SESSION['email'])){$ozv=$_SESSION['email'];}
		if(isset($_COOKIE['remember'])){$ozv=$_COOKIE['remember'];}
		
		
		$sql3="insert into tblsefaresh (family,mobile,tel,codeposti,email,ostan,shahr,adres,amount,idsabad,id_get,id_sefaresh,ozv,tarikh,vaziat) 
		values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$arr=[$_POST['family'],$_POST['mobile'],$_POST['tel'],$_POST['codeposti'],$_POST['email'],$_POST['ostan'],
		$_POST['shahr'],$_POST['adres'],$_POST['amount'],$idsabad,$result,$id_sefaresh,$ozv,$tarikh,'بررسی نشده'];
		
		$object->myquery($sql3,$arr);
		
		
		if($result > 0 && is_numeric($result)){ 

 		echo $result; 

 		}//if
		
		
		
		
		
		}//sefaresh
	
	
	
	
	


?>















