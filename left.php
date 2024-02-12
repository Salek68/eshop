
<div id="left">


<style>

#left{ width:857px; float:left; margin-top:28px;}



#porforush{ width:100%; float:right;}


#porforush h2{font-size:17px; float:right; text-align:right; direction:rtl; margin-top:-20px;border:2px solid #ccc; background: #fff; margin-right:-2px; border-bottom:0; line-height:24px; margin-bottom:0; }

#porforush ul{ width:100%; padding:0;}


#porforush  li{ width:204px; height:285px; border:1px solid #ccc; border-radius:8px;list-style:none; float:right; margin-left:7px; margin-top:5px; overflow:hidden; position:relative; }


#porforush  li img{ width:100%; height:177px;}

#porforush  li a{width:100%; height:66px; background:#eee; display:block; text-align:center; direction:rtl; font-family:tahoma; font-size:12px; font-weight:bold; color:#006;}

#porforush  li a #mojood{ width:90px; height:31px; background:#0C3; border-radius:8px; display:block; margin:0 auto; margin-top:5px; color:#fff; line-height:26px;}


#porforush #tozihat{ width:100%; height:177px; background:#000; position:absolute; top:0; text-align:center; opacity:0;}


#porforush #tozihat a{width:140px; height:29px; background:#eee; margin-top:10px; padding:2px; border-radius:8px; margin-right:auto; margin-left:auto; line-height:25px;}


.x1{
	
	transition:all .5s ease-out  ;
	
	}

.x1:hover{ background:#09F !important; width:153px !important; border:1px solid #CF0;}



.x2{
	
	transition:all .5s ease-out ;
	
	}

.x2:hover{ background:#3F3 !important; width:153px !important;}




.x3{
	
	transition:all .5s ease-out ;
	
	}

.x3:hover{ background:#C30 !important; width:153px !important;}

.x1,.x2,.x3{text-decoration:none; cursor:pointer;}

</style>




<div id="porforush">

<h2><img src="img/dots.png"> پرفروش ترین کالاها</h2>

<div id="line4"></div><!--line4-->


<ul>

<?php

include('connect.php');

$res=$object->mahsoolat_at_position('porforoosh');


foreach($res as $row){
	
		
	$id=$row['id'];
	$title=$row['title'];
	$img=$row['img'];
	
	$gheymat=$row['gheymat'];
	
	$mojood=$row['mojood'];
	
	if($mojood==0){$mojood1='موجود نیست';}
	
	else{$mojood1='موجود است';}
	

echo '
<li><img  id="ax"  src="'.$img.'">


<div id="tozihat">

<a id='.$id.' class="x1">افزودن به سبد خرید</a>

<a href="mahsool.php?id='.$id.'" class="x2">مشاهده جزییات محصول</a>

<a class="x3"> محصولات مشابه</a>




</div><!--tozihat-->



<a><span id="title">'.$title.'</span><br> <span id="mojood">'.$mojood1.'</span> </a>


<a style="height:33px; margin-top:3px;">قیمت:<span id="gheymat">'.$gheymat.' </span> تومان</a>



</li>


';

	
	
	
}

?>









</ul>



</div><!--porfprush-->









<div class="mahboobtarinha" id="porforush" style="margin-top:30px;">

<h2><img src="img/dots.png"> محبوب ترین کالاها</h2>

<div id="line4"></div><!--line4-->


<ul>


<?php

include('connect.php');

$sql="select * from tblmahsool order by bazdid desc limit 4 ";
$stmt=$db->prepare($sql);
$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$id=$result['id'];
	$title=$result['title'];
	$img=$result['img'];
	
	$gheymat=$result['gheymat'];
	
	$mojood=$result['mojood'];
	
	if($mojood==0){$mojood1='موجود نیست';}
	
	else{$mojood1='موجود است';}
	

echo '
<li><img  id="ax"  src="'.$img.'">


<div id="tozihat">

<a  id='.$id.' class="x1">افزودن به سبد خرید</a>

<a href="mahsool.php?id='.$id.'" class="x2">مشاهده جزییات محصول</a>

<a class="x3"> محصولات مشابه</a>




</div><!--tozihat-->



<a><span id="title">'.$title.'</span><br> <span id="mojood">'.$mojood1.'</span> </a>


<a style="height:33px; margin-top:3px;">قیمت:<span id="gheymat">'.$gheymat.' </span> تومان</a>



</li>


';

	
	
	
}

?>


</ul>



</div><!--porfprush-->









<style>

.border{ border:1px dashed #000 !important; box-shadow:1px 1px 4px #006;}


</style>


<script>

$("#porforush ul li").hover(function(){
	
		$(this).find('#tozihat').animate({opacity:1},500);
		$(this).addClass('border');
		
	
	},function(){
	
		$(this).find('#tozihat').animate({opacity:0},500);
        $(this).removeClass('border');
	
	
	})


</script>







</div><!--left-->





<?php

include('scriptsabad.php');

?>



