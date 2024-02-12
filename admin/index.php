<?php
ob_start();
session_start();
include('../myfirstclass.php');
$object=new class_parent;
?>
<!doctype html>
<html>
<head>


<meta charset="utf-8">
<title>ورود به بخش پنل مدیریت سایت</title>
</head>

<body>

<?php

$num=0;

if(isset($_POST['user'])){
	
	$user=md5(hash('ripemd160',$_POST['user']));
	$password=md5(hash('ripemd160',$_POST['password']));
	
	$sql="select * from tbladmin where user=? and password=? and id=1";
	$arr=array($user,$password);
	$num=$object->num($sql,$arr);
	
	if($num==1){$_SESSION['check']=1; header('location:index2.php');}//if
	else{$error=1;}
	
	
	}//if



?>



<style>

.row{width:100%;}
body{font-family:tahoma; direction:rtl;}

</style>

<div id="main" style="width:1000px; margin:0 auto; text-align:center;">

<p style="margin-top:200px;">لطفا اطلاعات ورود را در کادرهای مشخص شده وارد نمایید:</p>

<?php
if(isset($error)){

?>

<p style="color:red;">نام کاربری یا رمز عبور اشتباه است</p>

<?php

}//if

?>

<form action="index.php" method="post">
<div class="row">
نام کاربری:
<input name="user" type="text">
</div>
<div class="row">
رمز عبور:
<input name="password" type="password">
</div>

<div class="row">
<input  type="submit" value="ورود">
</div>



</form>


</div>


</body>
</html>