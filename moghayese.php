<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه اینترنتی</title>

<script src="js/jquery-1.10.2.min.js"></script>


</head>

<body style="margin:0; padding:0;">


<?php


include('myfirstclass.php');

$object=new class_parent;

?>

<?php

include('top.php');

$array_id=$_GET['a'];
$href='moghayese.php';

foreach($array_id as $key=>$val){
	
	if($key==0){$href=$href.'?a[]='.$val;}
	else{$href=$href.'&a[]='.$val;}
	
	}
	

$idmahsool=$array_id[0];
$sql="select * from tblmahsool where id=".$idmahsool." ";
$res=$object->select($sql);
$iddaste=$res[0]['dasteid'];


?>



<div id="undermenu" style="width:100%; background:#CFFCFC; height:340px;">


<div id="undermenu1" style="width:1100px; margin:0 auto; height:100%; position:relative; ">



<div class="getfixed" style="width:1100px; height:180px; background:#fff;">

<div style="width:250px; height:100%; float:right; position:relative;" class="right">

<input class="search-input" type="text" style="height:19px; float:right; margin-top:50px; margin-right:30px; direction:rtl; text-align:right;" placeholder="جست و جو">

<div class="search" style="position:absolute; width:240px; height:350px; box-shadow:1px 1px 2px #000; top:78px; right:29px; background:#fff; z-index:2; overflow:auto; display:none;">





</div>
<!--search-->


</div>
<!--right-->

<div style="width:850px; height:100%;float:right;" class="left">


<?php

foreach($array_id as $idmahsool){

$sql="select * from tblmahsool where id=".$idmahsool." ";
$res=$object->select($sql);
$title=$res[0]['title'];
$img=$res[0]['img'];
$id=$res[0]['id'];

$href2='moghayese.php';
$key2=0;

foreach($array_id as $val2){
	if($val2!=$id){
	if($key2==0){$href2=$href2.'?a[]='.$val2;}
	else{$href2=$href2.'&a[]='.$val2;}
	$key2=1;
	}//if
	
	}

 ?>


<div id="g<?php echo $id; ?>" style="display:block; width:<?php echo 100/sizeof($array_id); ?>%; height:143px; float:right; text-align:center; position:relative; ">

<div style="position:relative;width:140px;margin:0 auto;">
<a style="display:block; width:140px; height:134px;  border:1px solid #ccc; border-radius:6px; margin-top:13px; text-align:center; font-family:tahoma; font-size:12px; padding:3px; margin:5px auto;  ">

<img src="<?php echo $img; ?>" style="width:100%; height:82px;">
<span style="margin-top:8px;">
<?php echo $title; ?>
</span>

</a>

<a href="<?php echo $href2; ?>" style="display:block; width:15px; height:15px; position:absolute; right:-7px; top:3px; background:url(img/delete.gif);"></a>

</div>



</div>

<?php }//foreach ?>



</div>
<!--left-->


</div>
<!--getfixed-->



<style>
.getfixed2{position:fixed; top:0;}
</style>




<style>
table{font-family:tahoma; font-size:12px; float:right;}
table tr:nth-child(odd){background:#B5AFAF;}
table tr:nth-child(even){background:#D9D8D8;}
table tr td:first-child{background:#474747; color:#fff;}
table td{padding:16px;}
</style>

<table style="width:100%; direction:rtl; text-align:right;">

<tr>

<td style="width:250px;">
قیمت
</td>

<?php

foreach($array_id as $idmahsool){

$sql="select * from tblmahsool where id=".$idmahsool." ";
$res=$object->select($sql);
$gheymat=$res[0]['gheymat'];


 ?>

<td style="width:<?php echo 840/sizeof($array_id); ?>px;"><?php echo $gheymat; ?></td>


<?php } ?>

</tr>



<?php



$sql="select * from tblvijegi where iddaste=".$iddaste." and parent=0 ";
$res=$object->select($sql);

foreach($res as $row){


?>

<tr>

<td colspan="20" style="width:250px;background:#fff; color:#000;">
<?php echo $row['title']; ?>
</td>
</tr>


<?php



$sql="select * from tblvijegi where iddaste=".$iddaste." and parent=".$row['id']." ";
$res2=$object->select($sql);
foreach($res2 as $row2){
?>


<tr>

<td style="width:250px;">
<?php echo $row2['title']; ?>
</td>

<?php

foreach($array_id as $idmahsool){

$sql="select * from tblvijegi_mahsool where idmahsool=".$idmahsool." and idvijegi=".$row2['id']." ";
$res=$object->select($sql);
$val='';
if(isset($res[0])){
$val=$res[0]['val'];
}
 ?>
 
 <td style="width:<?php echo 840/sizeof($array_id); ?>px;">
<?php echo $val; ?>
</td>
 
 <?php }//foreach ?>

</tr>


<?php }//foreach zirvijegi ?>




<?php }//foreach vijegi asli ?>



</table>

<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>


<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>


<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>


<script>


$(".search-input").keyup(function(){
	

	var keyword=$(this).val();
	
if(keyword.length>2){
	
$.ajax({
	
	url:'result2.php',
	type:'POST',
	dataType:"json",
	data:{keyword:keyword,iddaste:<?php echo $iddaste; ?>}
	
	
	})//ajax
	
.done(function(msg){
	
	$(".search").html('');
	$.each(msg,function(index,val){
		
		var num=$(".getfixed").find('#g'+val['id']).length;
		if(num==0){
		$(".search").append('<a href="<?php echo $href; ?>&a[]='+val['id']+'" style="display:block; width:92%;float:right;padding:9px;"><img src="'+val['img']+'" style="width:50px; height:40px; float:right;"><div style="width:152px;float:left;text-align:right;font-family:tahoma;font-size:12px;">'+val['title']+'</div></a><div style="width:100%; height:1px;background:#ccc; float:right;"></div>');
		}//if

		
		});//each
		
		if(msg.length==0){$(".search").html('<p style="font-size:12px; font-family:tahoma; text-align:center;">موردی یافت نشد</p>');}
	
	
});

$('.search').slideDown(300);

}//if

	
	});//keyup


$(document).click(function(){
	$('.search').slideUp(300);
	})



var top2=$("#undermenu").position().top;

$(window).scroll(function(){

	if($(window).scrollTop()>top2){$('.getfixed').addClass('getfixed2');$('table').css('margin-top','185px');}
	else{$('.getfixed').removeClass('getfixed2');$('table').css('margin-top','0px');}
	
	
	})//scroll

</script>


</div><!--undermenu1-->


</div><!--undermenu-->





</body>



</html>