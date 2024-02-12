<style>

#porforosh{ width:100%; float:right; }

#porforosh h2{ font-size:17px; float:right; text-align:right; direction:rtl;margin-top:-20px; border:2px solid #ccc; background:#fff; margin-right:0; border-bottom:0; line-height:24px; border-radius:4px; margin-bottom:0;}

#porforosh ul{ width:100%; padding:0;}

#porforosh li{ width:204px;  height:285px; border: 1px solid #ccc; border-radius:7px; list-style:none; float:right; margin-left:7px; margin-top:10px; overflow:hidden; position:relative;}

#porforosh li img{ width:100%;  height:177px;}

#porforosh li a{ width:100%; height:66px; background:#CCCCCC; display:block; margin-top:5px; text-align:center; direction:rtl; font-family:tahma; font-size:12px; font-weight:bold; color:#6600FF;}

#porforosh li span{ width:66px; height:31px; color:#FFFFFF; display:block; margin:0 auto;  margin-top:10px; background:#00CC66; border-radius:7px; line-height:29px;}

#porforosh #tozihat{ width:100%; height:177px; background:#000000; position:absolute; top:0; text-align:center; opacity:0;}

#porforosh #tozihat a{ width:140px; height:29px; background:#eee; margin-top:10px; padding:2px; border-radius:7px; margin-right:auto; margin-left:auto; line-height:30px;}

.x1{
	
	transition:all .2s ease-out ;
	
	}

.X1:hover{ background:#0066CC !important; width:150px !important; border:1px solid #00CC66}

.x2{
	
	transition:all .2s ease-out;
	
	}

.X2:hover{ background:#FF3300 !important; width:150px !important; border:1px solid #00CC66}

.x3{
	
	transition:all .2s ease-out;
	
	}

.X3:hover{ background:#99CCCC !important; width:150px !important; border:1px solid #00CC66}
</style>

<div id="left">

<div id="porforosh">

<h2><img src="img/dots.png" />پرفروش ترین کالاها</h2>

<div id="line4"></div><!--line4-->

<ul>




 <?php 

include('connect.php');

$sql="select * from tblmahsool order by foroosh desc limit 4";
$stmt=$db->prepare($sql);
$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$id=$result['id'];
	$title=$result['title'];
	$img=$result['img'];
	$mojood=$result['mojood'];
	$price=$result['price'];
	
	if($mojood==0){$mojood1='موجود نیست';}
	
	else{$mojood1='موجود';}
	
	echo '<li><img src="'.$img.'">

<div id="tozihat">

<a id='.$id.' class="X1">افزودن به سبد خرید</a>

<a class="X2">مشاهده جزییات محصول</a>

<a class="X3">مشاهده محصولات مشابه</a>





</div><!--tozihat-->


<a>'.$title.'<br>  <span>'.$mojood1.'</span></a>

<a style="height:33px; margin-top:3px;">قیمت :'.$price.' تومان</a>

</li>';
	
}

?>

</ul>

</div><!--porforosh-->

<script>

alert('');






</script>




<div id="porforosh" style="margin-top:30px;">

<h2><img src="img/dots.png" />محبوب ترین محصولات</h2>

<div id="line4"></div><!--line4-->

<ul>


 <?php 

include('connect.php');

$sql="select * from tblmahsool order by bazdid desc limit 8";
$stmt=$db->prepare($sql);
$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$id=$result['id'];
	$title=$result['title'];
	$img=$result['img'];
	$mojood=$result['mojood'];
	$price=$result['price'];
	
	if($mojood==0){$mojood1='موجود نیست';}
	
	else{$mojood1='موجود';}
	
	echo '<li><img src="'.$img.'">

<div id="tozihat">

<a class="X1">افزودن به سبد خرید</a>

<a class="X2">مشاهده جزییات محصول</a>

<a class="X3">مشاهده محصولات مشابه</a>





</div><!--tozihat-->


<a>'.$title.'<br>  <span>'.$mojood1.'</span></a>

<a style="height:33px; margin-top:3px;">قیمت :'.$price.' تومان</a>

</li>';
	
}

?>


</ul>

</div><!--porforosh-->




<style>

.border{ border:1px solid #000 !important; box-shadow:1px 1px 4px #006;}

</style>

<script>

$("#porforosh ul li").hover(function(){
	
	$(this).find('#tozihat').animate({opacity:.8},500);
	$(this).addClass('border')
	
	
	
	},function(){
	
	$(this).find('#tozihat').animate({opacity:0},500);
	$(this).removeClass('border')
	
	})


</script>




</div><!--left-->