<?php
session_start();

if(!isset($_SESSION['email'])){

if(isset($_COOKIE['remember'])){$_SESSION['email']=$_COOKIE['remember'];}

else{
header('location:login.php');
}

	}
	
	
include('myfirstclass.php');
$object=new class_parent;

include('connect.php');

$sql="select * from tblozv where email='".$_SESSION['email']."' ";

$stmt=$db->prepare($sql);

$stmt->execute();

$myresult=$stmt->fetch(PDO::FETCH_ASSOC);

$userid=$myresult['id'];

$item="moshakhasat";

if(isset($_GET['item'])){$item=$_GET['item'];}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>

<?php

switch($item){
	
	case "moshakhasat":echo "مشخصات شما";break;
	case "sefareshat":echo "سفارشات شما";break;
	case "peyghamha":echo "پیغام ها";break;
	case "changepass":echo "تغییر پسورد";break;
	
	
	
	
	
	}


?>




</title>

<script src="js/jquery-1.10.2.min.js"></script>


<link rel="stylesheet" href="css/jquery.fileupload.css">

<link rel="stylesheet" href="css/bootstrap.min.css">



</head>

<body style="margin:0; padding:0;">




<?php

include('top.php');

?>


<style>

#col-right{ width:182px; float:right; background:#eee; min-height:300px;}


#col-left{ width:911px; float:right; margin-right:3px; background:#0FF;min-height:300px; font-family:tahoma; font-size:12px; color:#03C;}


#col-left>div{ padding:15px; width:881px; height:25px; background:#ccc;; margin-top:3px;}

#col-left span,#col-left input{float:right; direction:rtl;}

#onvan{width:180px;}


input[type="text"],input[type="password"]{ width:200px; height:21px; border:none; background:#E4E4E4; border-radius:4px;}

input[type="radio"]{margin:0; opacity:0; }


#man,#woman{width:11px; height:11px; background:url(img/check2.png); margin-top:3px;margin-right:5px;}

#man{<?php if($myresult['jensiat']==1) { ?> background-position:0px 11px; <?php };?>}

#woman{<?php if($myresult['jensiat']==0) { ?> background-position:0px 11px; <?php };?>}


#man:hover,#woman:hover{background-position:0px 11px !important;}


#undermenu{height:auto !important; float:right;}


option{ font-family:tahoma; font-size:12px; padding:6px; background:#eee; text-align:right;}


</style>


<div id="undermenu" style="width:100%; background:#CFFCFC; height:340px;">


<div id="undermenu1" style="width:1100px; margin:0 auto; height:100%; position:relative; ">


<div id="col-right">



<?php if($item=="moshakhasat") { ?>


<span style="margin-left:40px; margin-top:13px;" class="btn fileinput-button btn-success">

<span>select files</span>

<input type="file" id="fileupload" name="files[]" multiple>


</span>


<div style="width:179px; margin:20px auto; position:relative;" id="progress" class="progress">

<div id="darsad" style="color:red; width:100%; height:100%; position:absolute; text-align:center;"></div><!--darsad-->

<div class="progress-bar progress-bar-success"></div>

</div>


<div id="files" class="files" style="display:none;"></div>


<div id="uperror" style="color:red; text-align:center;"></div>



<?php }  ?>


<style>
#myupload img{width:100%; height:100%;}

</style>



<div id="myupload" style="width:168px; height:130px;margin:3px auto;">

<?php if($myresult['fileadres']!=''){echo '<img src="'.$myresult['fileadres'].'" >';} ?>


</div>

<?php

include('uploadscript.php');

?>

<br>


<a style="display:block; padding:10px; width:162px; text-align:right; font-family:tahoma; font-size:12px; border-bottom:1px solid #13416C;" href="panel.php?item=moshakhasat">مشخصات شما</a>




<a style="display:block; padding:10px; width:162px; text-align:right; font-family:tahoma; font-size:12px; border-bottom:1px solid #13416C;" href="panel.php?item=sefareshat">مشاهده سفارشات</a>



<a style="display:block; padding:10px; width:162px; text-align:right; font-family:tahoma; font-size:12px; border-bottom:1px solid #13416C;" href="panel.php?item=peyghamha">پیغام ها</a>


<a style="display:block; padding:10px; width:162px; text-align:right; font-family:tahoma; font-size:12px; border-bottom:1px solid #13416C;" href="panel.php?item=changepass">تغییر پسورد</a>


<a style="display:block; padding:10px; width:162px; text-align:right; font-family:tahoma; font-size:12px; border-bottom:1px solid #13416C;" href="exit.php">خروج</a>





</div><!--col-right-->


<?php

switch($item){
	
	case "moshakhasat":include('panel_moshakhasat.php');break;
	case "sefareshat":include('panel_sefareshat.php');break;
	case "peyghamha":include('panel_peyghamha.php');break;
	case "changepass":include('panel_changepass.php');break;
	
	
	}




?>



</div><!--undermenu1-->


</div><!--undermenu-->


<?php

include('scriptsabad.php');

?>



</body>



</html>