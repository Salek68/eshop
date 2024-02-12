<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه اینترنتی</title>

<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/cycle.js"></script>

<link rel="stylesheet" href="css/jquery.fileupload.css">

<link rel="stylesheet" href="css/bootstrap.min.css">



</head>

<body style="margin:0; padding:0;">




<?php

include('top.php');

?>


<style>

#col-right{ width:182px; float:right; background:#eee; min-height:300px;}


#col-left{ width:1094px; float:right; margin-right:3px; background:#0FF;min-height:300px; font-family:tahoma; font-size:12px; color:#03C;}


#col-left>div{ padding:15px; width:1062px; height:25px; background:#ccc;; margin-top:3px;}

#col-left span,#col-left input{float:right; direction:rtl;}

#onvan{width:180px;}


input[type="text"],input[type="password"]{ width:200px; height:21px; border:none; background:#E4E4E4; border-radius:4px;}

input[type="radio"]{margin:0; opacity:0; }


#man,#woman{width:11px; height:11px; background:url(img/check2.png); margin-top:3px;margin-right:5px;}


#man:hover,#woman:hover{background-position:0px 11px !important;}


#undermenu{height:auto !important; float:right;}


option{ font-family:tahoma; font-size:12px; padding:6px; background:#eee; text-align:right;}


</style>


<div id="undermenu" style="width:100%; background:#CFFCFC; height:340px;">


<div id="undermenu1" style="width:1100px; margin:0 auto; height:100%; position:relative; ">

<form action="register1.php" method="post" onSubmit="return check();">


<input name="fileadres" type="hidden">


<div id="col-left">


<div><span id="onvan">ایمیل شما:<b id="onvan" style="color:red;">*</b></span><input type="text"  name="namekarbar"></div>


<div><span id="onvan">رمز عبور شما:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="password" name="password"></div>

 
<div><span id="onvan">حروف موجود در تصویر را وارد نمایید:<b id="onvan" style="color:red;">*</b></span><input style="width:100px;direction:ltr;" type="text" name="captcha" ><img id="captcha" src="image1416824798.png" style="float:right; margin-right:8px; margin-top:-13px; cursor:pointer;"></div>



<div><input type="submit" value="ورود" style=" width:90px; height:26px; cursor:pointer; float:left; background:#03C; color:#fff; border:none; border-radius:6px;"></div>





<div></div>
<div></div>
<div></div>



</div><!--col-left-->



</form>


<style>

.red{background:#FDB0B3 !important;}

.red2{background:url(img/select4.png) #FDB0B3 no-repeat !important; }

</style>



<script>


function check(){
	
	var username=$("input[name]=username").val();
	
	var password=$("input[name]=password").val();
	
	if(username==''){}
	
	
	
	}

$.ajax({
	
	url:'captcha.php'
	
	
	})


.done(function(msg){
	
	$("#captcha").attr('src',msg+'.png');
	

	})
	
	
 $("#captcha").click(function(){
	 
	 
	 
	 
	 
	
$.ajax({
	
	url:'captcha.php'
	
	
	})


.done(function(msg){
	
	$("#captcha").attr('src',msg+'.png');
	

	}) 
	 
	 
	 
	 
	 
	 
	 
	 })	



	


</script>



</div><!--undermenu1-->


</div><!--undermenu-->


<?php

include('scriptsabad.php');

?>



</body>



</html>