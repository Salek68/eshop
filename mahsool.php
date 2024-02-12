<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه اینترنتی</title>

<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/jquery.jcarousellite.js"></script>

<script src="js/jquery.mousewheel.js"></script>


<link rel="stylesheet" href="css/font-awesome.min.css" />



</head>

<body style="margin:0; padding:0; direction:rtl;">




<?php

include('top.php');

include('myfirstclass.php');

$object=new class_parent;

$id=$_GET['id'];

$sql="select * from tblmahsool where id=?";
$array=array(intval($id));
$res=$object->select($sql,$array);
$row=$res[0];
$title=$row["title"];
$img=$row["img"];
$gheymat=$row["gheymat"];
$vote_kharid=$row["vote_kharid"];
$vote_tasmim=$row["vote_tasmim"];
$mojood=$row["mojood"];
$tozihat=$row["tozihat"];
$takmili=$row["takmili"];



?>



<style>

#underslide{width:100%; background:#CEF8F6; float:right;}

#underslide1{width:1100px; background:#fff; margin:0 auto; overflow:hidden;}


</style>


<div id="underslide">



<div id="underslide1"  >


<style>

.col-right{width:120px; float:right; height:200px; position:fixed;  }

.col-left{width:976px; float:left;background:#fff; border:1px solid #ccc;}

p,span,a,div{text-align:right; font-family:tahoma; font-size:12px;}

.col-right p{text-align:center !important; background:#fff; margin:0; padding:10px 0px; border-bottom:1px solid #ccc;}

.w100{width:100%;}

.t1{height:81px; background:#eee;}

.t1-right{width:728px; float:right; height:100%;}

.t1-left{width:240px; float:left;height:100%;}

.col-right p{position:relative;}

.bar{width:3px; height:100%; position:absolute; right:0; top:0;}

.access{z-index:1; position:relative;}

.white{color:#fff !important;}

.paccess{cursor:pointer;}

</style>


<div class="col-right">

<p class="paccess paccess1">

<a class="access access1">مشخصات کلی</a>
<span class="bar bar1" style="background:red;"></span>

</p>


<p class="paccess paccess2">

<a class="access access2">توضیحات</a>
<span class="bar bar2" style="background:#000;"></span>



</p>


<p class="paccess paccess3">
<a class="access access3">اطلاعات تکمیلی</a>
<span class="bar bar3" style="background:green;"></span>

</p>

<p class="paccess paccess4">
<a class="access access4">نظرات</a>
<span class="bar bar4" style="background:blue;"></span>

</p>

<p class="paccess paccess5">
<a class="access access5">محصولات مشابه</a>
<span class="bar bar5" style="background:#F9A00E;"></span>

</p>

</div>



<script>

$(document).ready(function(e) {
   
   
   
function bar(i){
	
	$(".col-right p .bar").css('width','3px');
	$(".bar"+i).animate({width:'120px'},200);
	
	$(".col-right p .access").removeClass("white");
	$(".access"+i).addClass("white");
	
	
	}
	
	bar(1);
	
	
	var timer;
	$(window).scroll(function(){
		
		clearTimeout(timer);
		timer=setTimeout(function(){
		
			var scr=$(window).scrollTop();
			
			var top1=($(".t4").position().top)-200;
			var top2=($(".t5").position().top)-200;
			var top3=($(".t6").position().top)-200;
			var top4=($(".t7").position().top)-200;
			
				
				
			if(scr<top1){
				
				if($(".bar1").width()!=120){
				bar(1);
				}
				}
				
				
				if(scr>top1 && scr<top2){
				
				if($(".bar2").width()!=120){
				bar(2);
				}
				
				}
				
				if(scr>top2 && scr<top3){
				if($(".bar3").width()!=120){
				bar(3);
				}
				
				}
				
				if(scr>top3 && scr<top4){
				if($(".bar4").width()!=120){
				bar(4);
				}
				
				}
				
				if(scr>top4){
				if($(".bar5").width()!=120){
				bar(5);
				}
				
				}
			
			
			
			},100);//settimeout
		
		
		})//scoll
	

var bar2;
var access;
var active_bar=0;
var bar_width;



$(".paccess1").click(function(){
	
	$("html").animate({scrollTop:0},200);
	active_bar=1;
	$(".bar2,.bar3,.bar4,.bar5").css("width","3px");
	$(".col-right p .access").removeClass("white");
	$(".access1").addClass("white");
	
	
	})
	
	
			var t1=$(".t4").position().top;
			var t2=$(".t5").position().top;
			var t3=$(".t6").position().top;
			var t4=$(".t7").position().top;
		
		
$(".paccess2").click(function(){
	
	$("html").animate({scrollTop:t1},200);
	active_bar=1;
	$(".bar1,.bar3,.bar4,.bar5").css("width","3px");
	$(".col-right p .access").removeClass("white");
	$(".access2").addClass("white");
	
	
	})	
	
	$(".paccess3").click(function(){
	
	$("html").animate({scrollTop:t2},200);
	active_bar=1;
	$(".bar1,.bar2,.bar4,.bar5").css("width","3px");
	$(".col-right p .access").removeClass("white");
	$(".access3").addClass("white");
	
	
	})	
	
	$(".paccess4").click(function(){
	
	$("html").animate({scrollTop:t3},200);
	active_bar=1;
	$(".bar1,.bar2,.bar3,.bar5").css("width","3px");
	$(".col-right p .access").removeClass("white");
	$(".access4").addClass("white");
	
	
	})	
	
	
	$(".paccess5").click(function(){
	
	$("html").animate({scrollTop:t4},200);
	active_bar=1;
	$(".bar1,.bar3,.bar4,.bar2").css("width","3px");
	$(".col-right p .access").removeClass("white");
	$(".access5").addClass("white");
	
	
	})	





$(".col-right .paccess").hover(

function(){
	
	bar2=$(this).find('.bar');
	bar_width=bar2.width();
	if(bar_width==3){
	active_bar=0;
	bar2.animate({width:'120px'},100);
	access=$(this).find('.access');
	access.addClass('white');
	}
	else{active_bar=1;}
	
	},
	
	
	function(){
		if(active_bar==0){
	bar2=$(this).find('.bar');
	bar2.animate({width:'3px'},100);
	access=$(this).find('.access');
	access.removeClass('white');
	
		}
		
		
		});



   
   
    
});//ready

</script>



<div class="col-left" style="padding-bottom:200px;">


<div  class="t1 w100">

<div class="t1-right">

<span style="font-size:14px;float:right;margin-right:20px;margin-top:20px">
<?php echo $title; ?>
</span>

</div>

<div class="t1-left">

<div class="w100" style="height:38px; padding-top:8px;">
کد محصول: <?php echo $id; ?>
</div>

<div class="w100" style="height:38px;">

<?php if($mojood>0){ ?>

<a style="padding:5px; background:green; color:#fff;">موجود است</a>

<?php } else{ ?>

<a style="padding:5px; background:red; color:#fff;">موجود نیست</a>

<?php } ?>



<a style="padding:5px; background:#FCA90F; color:#fff;">مقایسه کالا</a>



</div>

</div>


</div>
<!--t1-->



<style>

.t2{height:340px;}
.t2-right{width:415px; float:right; height:100%;}
.t2-left{width:550px; float:left;height:100%;}

</style>

<div  class="t2 w100">

<div class="t2-right">

<div class="right" style="width:120px;padding-top:10px; float:right; height:100%; position:relative;">


<a class="next" style="width:31px; height:31px; display:block; border-radius:100%; border:1px solid #ccc; 
background:url(img/top.png) center no-repeat; position:absolute; right:40px;cursor:pointer;"></a>


<style>

.carousel img{width:113px; height:80px; cursor:pointer;}

</style>


<div class="carousel" style="width:100%; height:250px; background:#fff; margin-top:37px;padding-right:4px;">


<ul style="">


<?php

echo "<li><img src=".$img."></li>";


$sql="select * from tblax where idmahsool=? ";

$array=array($id);

$result3=$object->select($sql,$array);

foreach($result3 as $row ){

	echo "<li><img src=".$row["img"]."></li>";
	
	}


?>


</ul>

</div>




<!--carousel-->


<a class="prev" style="width:31px; height:31px; display:block; border-radius:100%; border:1px solid #ccc; 
background:url(img/bottom.png) center no-repeat; position:absolute; right:40px; bottom:15px; cursor:pointer;"></a>



</div><!--right-->




<div class="left" style="width:290px; float:left; margin-top:48px;  background:#CB2EE0;">

<img style="width:100%; height:242px;" id="carousel_img" src="<?php echo $img; ?>">

</div>
<!--left-->



<style>

.red-border{border:1px solid red;}

</style>


<script>

$(".carousel").jCarouselLite({
	
	
	vertical:true,
	auto: 2000,
    speed: 500,
	btnNext:'.next',
	btnPrev:'.prev',
	scroll:1,
	//visible:1,
	 mouseWheel: true,
	 
	  beforeStart: function(a) {
		
	
      	
    }
	 
	
	
	});
	
	
	$(".carousel img").click(function(){
		
		
		$('.carousel img').removeClass('red-border');
		
		$(this).addClass('red-border');
		
		 var src=$(this).attr('src');
		
		$("#carousel_img").attr('src',src);
		
		
		
		});



</script>




</div>



<div class="t2-left">

<div class="right" style="width:250px; float:right; height:57px; padding-top:20px;">

تعداد:

<input type="text" name="tedad_mahsool" value="1" id="tedad_mahsool">

</div>

<div class="left" style="width:250px; float:left; height:57px;padding-top:20px;">

<p style="margin-top:0;">قیمت محصول:</p>

<p><?php echo $gheymat; ?> تومان</p>


<?php if($mojood>0){ ?>

<p>

<a class="addtobasket" style="padding:5px; background:green; color:#fff; cursor:pointer;">افزودن به سبد خرید</a>


</p>

<?php } ?>


</div>



</div>

</div>
<!--t2-->



<div class="t3" style="width:400px; height:35px; padding:10px; float:right; border:1px solid #ccc; border-radius:5px;">


<i style="font-size:20px; color:#1B8DEA;" class="fa fa-thumbs-up"></i>

<span style="cursor:pointer;" class="vote_kharid">این محصول را خریداری کردم</span>


<span class="vote_kharid_tedad" style="padding:5px; text-align:center; border:1px solid #ccc; border-radius:5px;"><?php echo $vote_kharid; ?></span>





<i style="font-size:20px; color:#15D831; margin-right:15px;" class="fa fa-thumbs-up"></i>

<span style="cursor:pointer;" class="vote_tasmim">تصمیم به خرید دارم</span>


<span class="vote_tasmim_tedad" style="padding:5px; text-align:center; border:1px solid #ccc; border-radius:5px;"><?php echo $vote_tasmim; ?></span>


</div>


<script>

$(".vote_kharid").click(function(){
	
	$.ajax({
		
		url:'action.php',
		type:'POST',
		data:{action:"vote_kharid",id:<?php echo $id; ?>},
		success: function(msg){
			
			if(msg.trim()=="before"){
		alert("رای شما قبلا ثبت شده است.");
			}
			else{
			var vote_kharid_tedad=parseInt($(".vote_kharid_tedad").text());
			$(".vote_kharid_tedad").text(vote_kharid_tedad+1);
				}
			
			
			}
			
		})
		
	})//click




$(".vote_tasmim").click(function(){
	
	$.ajax({
		
		url:'action.php',
		type:'POST',
		data:{action:"vote_tasmim",id:<?php echo $id; ?>},
		success: function(msg){
			
			if(msg.trim()=="before"){
		alert("رای شما قبلا ثبت شده است.");
			}
			else{
			var vote_tasmim_tedad=parseInt($(".vote_tasmim_tedad").text());
			$(".vote_tasmim_tedad").text(vote_tasmim_tedad+1);
				}
			
			
			}
			
		})
		
	})//click





</script>






<div class="t4" style="width:953px;  padding:10px; float:right; border:1px solid #ccc; border-radius:5px; margin-top:10px;">


<p style="font-size:14px; font-weight:bold;">

توضیحات محصول

</p>


<?php echo $tozihat; ?>


</div>

<!--t4-->





<div class="t5" style="width:953px;  padding:10px; float:right; border:1px solid #ccc; border-radius:5px; margin-top:10px;">


<p style="font-size:14px; font-weight:bold;">

اطلاعات تکمیلی
</p>


<?php echo $takmili; ?>

</div>

<!--t5-->


<script>

function like(idnazar,tag){
	
	
		$.ajax({
		
		url:'action.php',
		type:'POST',
		data:{action:"like_nazar",id:idnazar},
		success: function(msg){
	
		if(msg.trim()=="before"){alert("رای شما قبلا ثبت شده است");}
		
		else{
			
			var tedad_like=$(tag).find("span").text();
			tedad_like=parseInt(tedad_like);
			$(tag).find("span").text(tedad_like+1);
			
			
			
			}//else
			
			}//success
			
		})//ajax
	
	
	}//function like


</script>




<div class="t6" style="width:953px;  padding:10px; float:right; border:1px solid #ccc; border-radius:5px; margin-top:10px;">


<p style="font-size:14px; font-weight:bold;">

نظرات کاربران

</p>


<?php

$sql="select * from tblnazar where idmahsool=? and admin=1";
$array=array($id);
$result4=$object->select($sql,$array);

foreach($result4 as $row){


?>


<div class="nazar" style="position:relative; width:923px;  padding:10px; float:right; border:1px solid #ccc; border-radius:5px; margin-top:10px;">


<div onClick="like(<?php echo $row['id']; ?>,this)"  class="like" style="width:54px; height:25px; border:1px solid #ccc; box-shadow:1px 1px 1px #000; position:absolute; left:60px; top:5px; cursor:pointer;">

<i style="font-size:17px; color:#15D831;" class="fa fa-thumbs-up"></i>

<span><?php echo $row["nazar_like"]; ?></span>


</div><!--like-->






<div class="dislike" style="width:54px; height:25px; border:1px solid #ccc; box-shadow:1px 1px 1px #000; position:absolute; left:2px; top:5px;cursor:pointer;">

<i style="font-size:17px; color:#F5171B; " class="fa fa-thumbs-down"></i>

<span><?php echo $row["dislike"]; ?></span>

</div><!--dislike-->


<p><?php echo $row["name"]; ?> تاریخ: <?php echo $row["tarikh"]; ?></p>


<div class="matn-nazar" style="width:915px;">

<?php echo $row["matn_nazar"]; ?>

</div>
<!--matn-nazar-->


<p>پاسخ مدیر:</p>


<div class="pasokh-modir" style="width:915px;">

 با سلام
 
 <br>

<?php

$sql2="select * from tblpasokh where idnazar=? ";
$array2=array($row["id"]);
$result5=$object->select($sql2,$array2);
if(isset($result5[0])){
$row5=$result5[0];
echo $row5["matn_pasokh"];
}



?>

</div>
<!--pasokh-modir-->



</div><!--nazar-->


<?php }//foreach ?>

<style>
.sabt_nazar_input{width:320px; height:28px; border:1px solid #ccc; border-radius:7px;}
.sabt_nazar_span{width:80px; float:right; display:block;}
</style>

<form>


<div class="w100" style="margin-top:15px; float:right;">
<span class="sabt_nazar_span">نام:</span>
<input class="sabt_nazar_input" name="name_nazar">
</div>

<div class="w100" style="margin-top:15px; float:right;">
<span class="sabt_nazar_span">ایمیل:</span>
<input class="sabt_nazar_input" name="email_nazar">
</div>

<div class="w100" style="margin-top:15px; float:right;">
<span class="sabt_nazar_span">کد امنیتی:</span>
<input class="sabt_nazar_input" name="captcha" style="float:right;">
<img id="captcha" src="" style=" margin-right:8px; cursor:pointer; float:right;">
</div>




<script>




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


<div class="w100" style="margin-top:15px; float:right;">
<span class="sabt_nazar_span">نظرات:</span>
<textarea style="width:855px; height:120px; border:1px solid #ccc; border-radius:7px;"  name="matn_nazar"></textarea>
</div>


<input type="hidden" name="idmahsool" value="<?php echo intval($_GET["id"]); ?>">

<input type="hidden" name="action" value="sabt_nazar">

</form>

<div class="w100" style="margin-top:15px; float:right;">
<span id="sabt_nazar" style="float:left; background:green; padding:9px; text-align:center; color:#fff; cursor:pointer; ">ثبت نظر</span>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

<!--t6-->

<script>

$("#sabt_nazar").click(function(){


var frm=$("form").serializeArray();


$.ajax({
	
	url:'action.php',
	type:'POST',
	data:frm
	
	})

.done(function(msg){
	
	
	if(msg.trim()=="captcha_error"){alert("لطفا کد امنیتی را به درستی وارد نمایید.");}
	
	else{
		
		alert('نظر شما با موفقیت ثبت شد.');
		}

	}) 

	
	
	})//click







</script>






<div class="t7" style="width:953px;  padding:10px; float:right; border:1px solid #ccc; border-radius:5px; margin-top:10px;">


<p style="font-size:14px; font-weight:bold;">

محصولات مشابه
</p>



<?php


$sql="select * from tblmortabet where id1=? ";

$id=intval($_GET['id']);

$array=array($id);

$result=$object->select($sql,$array);

foreach($result as $row ){
	

	$id2=$row['id2'];	
	$sql="select * from tblmahsool where id=? ";
	$array=array($id2);
	$result2=$object->select($sql,$array);

     echo '<a href="mahsool.php?id='.$id2.'" style="display:block; width:150px; height:160px; border:1px solid #ccc; padding:6px; text-align:center; float:right; border-radius:6px;margin-right:10px;">

<img style="height:120px; width:100%;" src="'.$result2[0]['img'].'">

<span>
'.$result2[0]['title'].'
</span>

</a>';
	
	
	}





$sql="select * from tblmortabet where id2=? ";

$id=intval($_GET['id']);

$array=array($id);

$result=$object->select($sql,$array);

foreach($result as $row ){
	

	$id2=$row['id1'];	
	$sql="select * from tblmahsool where id=? ";
	$array=array($id2);
	$result2=$object->select($sql,$array);

     echo '<a href="mahsool.php?id='.$id2.'" style="display:block; width:150px; height:160px; border:1px solid #ccc; padding:6px; text-align:center; float:right; border-radius:6px; margin-right:10px;">

<img style="height:120px; width:100%;" src="'.$result2[0]['img'].'">

<span>
'.$result2[0]['title'].'
</span>

</a>';
	
	
	}

?>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

<!--t7-->



</div><!--col-left-->


<?php

include("scriptsabad.php");

?>



<script>

$(".addtobasket").click(function(){
	
	var length='';
	var ax='<?php echo $img; ?>';
	var title='<?php echo $title; ?>';
	var gheymat=<?php echo $gheymat; ?>;
	var id=<?php echo $id; ?>;
	var tedad_mahsool=$("#tedad_mahsool").val();
	
	if(isNaN(tedad_mahsool)){alert("لطفا تعداد زا به درستی وارد کنید");}
	else{
		
	tedad_mahsool=parseInt(tedad_mahsool);
	length=$("#sabad1 #"+id+" ").length;
		
	
	$.ajax({
		
		type:'post',
		
	    url:"action.php",
		
		data:{action:"addtobasket",idmahsool:id,tedad_mahsool:tedad_mahsool}
		
		
		})
		
	.done(function(msg){
		
		if(length==1){
			
			
			$("#sabad1 #"+id+" #tedad ").html(tedad_mahsool);
		
			
			      }
				  
		else{
			
			
			$("#sabad1 ul").append('<li id='+id+'> <img src="'+ax+'"> <a>'+title+'</a>  <a>تعداد :<span style="float:none;" id="tedad">'+tedad_mahsool+'</span></a><a>قیمت :<span style="float:none;" id="gheymat">'+gheymat+'</span></a><img id=delete src="img/remove.png" style="width:24px; height:22px;"> </li>');
		
			
			
			
			}		  
		
		deletesabad();
		tedadkol();
		gheymatkol();
		empty();
		
		
		$("#namekala").html(title);
		
		$("#tarik").show();
	
	    $("#tarik").animate({opacity:.6},700);
		
		$("#alert1").show();
	
	    $("#alert1").animate({opacity:1},700);
		

		});
		
		
	}//else
		
		});	
	


</script>



</div><!--underslide1-->



</div><!--underslide-->


</body>



</html>