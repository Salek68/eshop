<div id="line1" style="width:100%; height:4px; background:#006;"></div><!--line1-->

<style>

img{border:none;}


#ertebat a{ font-family:tahoma; font-size:12px; margin:0 6px; float:right; }

#ertebat span{float:right;} 

#ertebat > a > img{ vertical-align:middle;}

</style>


<div id="ertebat" style="width:1100px; height:37px; margin:0 auto;  background:#0F9; text-align:right; direction:rtl; line-height:35px;">


<a href="index.php">بازگشت به صفحه نخست</a>
<span>|</span>
<a>درباره ما</a>
<span>|</span>
<a>تماس با ما</a>

<a style="margin-right:180px; margin-top:-10px;"> <img src="img/logo.png"></a>

<a style="float:left; box-shadow:1px 1px 8px #ccc; margin-left:2px; border-radius:8px; cursor:pointer;" id="basket"> <img src="img/sabad.png"> سبد خرید شما 
  
  <span id="tedadkol" style="width:25px; height:25px;background:red; float:left; margin-top:7px; margin-right:5px; border-radius:100%; text-align:center; line-height:25px; color:#fff; font-size:13px;">
 
  
  </span> 

</a>


<style>
#sabad1{position:absolute; top:40px; left:0px; width:400px;height:220px; overflow-y:scroll; background:#fff; z-index:6; border-radius:0px; opacity:0; }
#sabad1 ul{width:100%; padding:0; margin:0;}
#sabad1 li{width:100%; border-bottom:1px solid #900; list-style:none; direction:rtl;}
#sabad1 img{ width:80px; height:60px; vertical-align:middle;}
#sabad1 a{float:none !important;}

</style>

<div id="sabad" style=" position: relative;width:400px; height:300px;right:702px; display:none;">

<img id="mosalas" src="img/login_content_top.png" style="position:absolute; top:30px; left:121px;z-index:6; opacity:0;  ">



<div id="sabad1">


<ul>


<?php



include('connect.php');

if(isset($_COOKIE['mybasket'])){
	
	
$sql="select * from tblsabad where cookiename='".$_COOKIE['mybasket']."' and pardakht=0  ";
$stmt=$db->prepare($sql);
$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$idmahsool=$result['idmahsool'];
	$tedad=$result['tedad'];
	
	
		
$sql2="select * from tblmahsool where id=".$idmahsool."  ";
$stmt2=$db->prepare($sql2);
$stmt2->execute();
$result2=$stmt2->fetch(PDO::FETCH_ASSOC);
	
	$title=$result2['title'];
	$img=$result2['img'];
	$gheymat=$result2['gheymat'];
	
echo '<li id='.$idmahsool.'> <img src="'.$img.'"> <a>'.$title.'</a>  <a>تعداد :<span style="float:none;" id="tedad">'.$tedad.'</span></a><a>قیمت :<span style="float:none;" id="gheymat">'.$gheymat.'</span></a><img id="delete" src="img/remove.png" style="width:24px; height:22px;"> </li>';
	
	
	
	
                     }
	
	
	
	}




					 
					 
?>	


<a id="emptysabad" style="display:none;">هیچ محصولی در سبد شما وجود ندارد</a>				 


</ul>



</div><!--sabad1-->

<style>

#tasvie{width:380px; padding-right:20px; height:35px; background:#fff;position:absolute; top:260px; z-index:6; font-family:tahoma; font-size:13px;}


</style>



<div id="tasvie">
قیمت کل : <span id="gheymatkol" style="float:none;"></span>تومان

<a href="tasvie.php" style="float:none; background:#73C55A; color:#fff; margin-right:20px; padding:7px;">ورود به درگاه پرداخت اینترنتی</a>


</div><!--tasvie-->








</div><!--sabad-->





</div><!--ertebat-->
<style>

#alert1{ width:300px; min-height:200px; background:red; position:fixed; z-index:10; left:0; right:0; margin:0 auto; top:25%; border-radius:10px; display:none; opacity:0;}
#exit1{width:25px; height:25px; position:absolute; top:2px; left:2px; cursor:pointer;}

#sabadekharid{position:absolute; font-family:tahoma; font-size:12px; text-align:right; right:5px; top:15px; border-bottom:1px solid #ccc; background:url(img/basket2.png) right center no-repeat; width:250px; line-height:26px; padding-right:34px;}


#namekala{position:absolute; font-family:tahoma; font-size:12px; text-align:right; right:5px; top:51px;width:250px; line-height:26px; padding-right:4px;}

#edame{ position:absolute; right:40px; top:159px; padding:6px; background:#6AB774;border-radius:8px; width:70px;}

#tasvie2{position:absolute; right:159px; top:159px; padding:6px; background:#6AB774;border-radius:8px;width:70px;}


</style>


<div id="alert1">

<img id="exit1" src="img/remove.png">

<h3 id="sabadekharid">محصول زیر به سبد خرید شما افزوده شد</h3>


<h3 id="namekala">لپ تاپ مدل شماره 1</h3>


<a id="edame" style="cursor:pointer;">ادامه خرید</a>


<a id="tasvie2" href="tasvie.php" style="cursor:pointer;"> تسویه حساب</a>


</div><!--alert1-->



<style>

#alert2{ width:300px; min-height:200px; background:red; position:fixed; z-index:10; left:0; right:0; margin:0 auto; top:25%; border-radius:10px; display:none; opacity:0;}
#exit2{width:25px; height:25px; position:absolute; top:2px; left:2px; cursor:pointer;}



#namekala1{position:absolute; font-family:tahoma; font-size:12px; text-align:right; right:5px; top:51px;width:250px; line-height:26px; padding-right:4px;}



</style>



<div id="alert2">

<img id="exit2" src="img/remove.png">


<h3 id="namekala1">محصول مورد نظر از سبد خرید شما حرف شد.</h3>



</div><!--alert1-->







<div id="tarik" style="width:100%; height:100%; background:#000;  position:fixed; z-index:5; top:0; display:none; cursor:pointer; opacity:0;  "></div><!--tarik-->




<script>

$("#exit1").click(function(){
	
	
	$("#tarik").animate({opacity:0},700,function(){$("#tarik").hide();});
	
	$("#alert1").animate({opacity:0},700,function(){$("#alert1").hide();});


	})
	
	
	
	
$("#edame").click(function(){
	
	
	$("#tarik").animate({opacity:0},700,function(){$("#tarik").hide();});
	
	$("#alert1").animate({opacity:0},700,function(){$("#alert1").hide();});


	})
	
	
	$("#exit2").click(function(){
	
		
	$("#alert2").animate({opacity:0},700,function(){$("#alert2").hide();});


	})



$("#basket").click(function(){
	

	$("#sabad").show();

	$("#mosalas").animate({opacity:1},700);
	
	$("#sabad1").animate({opacity:1},700);


	$("#tarik").show();
	
	$("#tarik").animate({opacity:.6},700);


	
	
	});
	
	
$("#tarik").click(function(){

    $("#tarik").animate({opacity:0},700,function(){$("#tarik").hide();});
    
	$("#sabad1").animate({opacity:0},700);
	
	$("#mosalas").animate({opacity:0},700,function(){$("#sabad").hide();});	
	
	})	
	



</script>






<div id="line1" style="width:100%; height:4px; background:#006;"></div><!--line1-->

<style>

#menu > ul{ padding:0; margin:0; width:100%; height:100%;}

#menu > ul >li , #menu >ul >li >ul >li { float:right; direction:rtl; list-style:none; background:url(img/line1.jpg) right center no-repeat ; padding:0 10px; line-height: 34px; font-family:tahoma; font-size:12px; height:100%; cursor:pointer;}

#menu >ul >li >ul >li{background: none;}

#menu > ul >li >img { vertical-align:middle;}

#menu > ul >li >ul {padding:0; margin:0; width:1100px; height:37px; margin:0 auto; position:absolute; right:0; top:37px; z-index:2; color:#fff; display:none;}

</style>


<div id="top1" style="width:100%; height:37px; background:#003; margin-top:3px;">


<div id="menu" style="width:1100px; height:100%; background:#A4DAF7; margin:0 auto; height:100%; position:relative;">

<ul>

<li> <img src="img/home54.png"> صفحه نخست </li>

<?php

include('connect.php');

$sql="select * from tblmenu where parent=0";
$stmt=$db->prepare($sql);
$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$id=$result['id'];
	$title=$result['title'];
	$img=$result['img'];
	
	
$sql2="select * from tblmenu where parent='".$id."' ";
$stmt2=$db->prepare($sql2);
$stmt2->execute();
$num=$stmt2->rowCount();	
	
	
echo '	<li><img src="'.$img.'"><a style="text-decoration:none;color:#fff;" href="search.php?iddaste='.$id.'">  '.$title.' </a> ';


if($num>0){echo '<ul>';}


while($result2=$stmt2->fetch(PDO::FETCH_ASSOC)){


$id2=$result2['id'];
$title2=$result2['title'];

echo '<li><a style="text-decoration:none; color:#fff;" href="search.php?iddaste='.$id2.'">'.$title2.'</a></li>';


}





if($num>0){echo '</ul>';}


echo '</li>';

	
	
	
	}



?>




</ul>




</div><!--menu-->



</div><!--top1-->


<div id="menu1" style="width:100%; height:37px; background:#006; position:absolute; display:none;"></div><!--menu1-->



<style>

#user>div{width:184px; height:24px; background:#A4DAF7; float:right; margin-right:10px; margin-top:11px; direction:rtl; text-align:right; border-radius:7px; overflow:hidden;}

#user>div>a>img{vertical-align:middle; margin-left:6px;}

#user>div>a{line-height:23px; font-weight:bold; font-family:tahoma; font-size:12px; color:#fff;}


input{ font-family:tahoma; font-size:12px;}


</style>

<div id="shop1" style="width:100%; height: 52px; background:#CFFCFC;">


<div id="user" style="width:1100px; height:45px; box-shadow:1px 1px 4px #003; background:#eee; margin:0 auto; border-bottom-left-radius:20px; border-bottom-right-radius:20px;">


<div id="login"><a href="login.php"><img src="img/key.png">ورود کاربران</a></div>

<div id="sabtenam"><a href="register.php"><img src="img/register.png">ثبت نام کاربران</a></div>

<div id="adserach"><a href="search.php"><img src="img/adsearch.png">جست و جوی پیشرفته</a></div>


<div id="serach" style=" width:399px; background:#fff;">

<form action="" style="width:100%; height:100%;">

<input type="text" style=" width:346px; height:99%;">

<input type="submit" style=" border:none; width:38px; height:100%; background:url(img/search.png) no-repeat; float:left; margin-top:2px;" value="" >

</form>



</div>



</div><!--user-->

</div><!--shop1-->


<script type="text/javascript" src="js/jquery.hoverIntent.js"></script>

<script>

$("#menu > ul > li").hoverIntent({

  over:aval,
    out:dovom,
    timeout:0,
    interval:200


});







timer='';

function aval(){
    clearTimeout(timer);

    $("#menu  ul  li  ul ").hide();
    $("#menu > ul > li").css('background','url(img/line1.jpg) right center no-repeat ');
    $(this).css('background','url(img/line2.jpg) right center no-repeat ');

    var number=$(this).find('ul').length;

    if(number>0){

        $("#menu1").slideDown(100);
        $(this).find('ul').show();

    }

    else{

        $("#menu1").slideUp(100);
    }


}

function dovom(){

    timer = setTimeout(function() {
        $("#menu  ul  li  ul").hide();
        $(this).css('background', 'url(img/line1.jpg) right center no-repeat ');
        $("#menu1").slideUp(100);
    },3000);


}




		

</script>








