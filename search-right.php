
<style>
#right{ width:235px; float:right; margin-top:28px;}

#pishnahad{width:100%; border:1px solid #ccc; border-radius:7px; float:right; box-shadow:1px 1px 6px #9CF1F8;}

#pishnahad h2{font-size:17px; float:right; text-align:right; direction:rtl; margin-top:0px;border:2px solid #ccc; background: #fff; margin-right:-2px; border-bottom:0; line-height:24px; margin-bottom:0; }

#line4{ width:100%; height:2px; background:red; box-shadow:1px 1px 4px #000; float:right; margin-bottom:10px; }

#pishnahad li{list-style:none; float:right; direction:rtl; border-bottom:1px solid #ccc; padding:12px 0; font-family:tahoma; font-size:12px; width:100%; }

#pishnahad ul{margin:0; padding:0;}

#pishnahad a{padding-right:5px;}




</style>



<script src="js/jquery-ui.js"></script>

<link href="css/jquery-ui.css" rel="stylesheet">



<div id="right">

<div id="pishnahad">

<span style="float:right; margin-right:5px; margin-top:5px; border-bottom:1px solid #ccc;">جست و جوی پیشرفته</span>


<div id="amount" style="width:100%; padding:25px 0px; float:right; position:relative;">


<div class="slider" style="width:92%; margin-left:7px;"></div><!--slider-->



<span style="position:absolute; left:10px; top:44px;"><a id="minamount">1000</a> تومان</span>


<span style="position:absolute; right:10px; top:44px;"><a id="maxamount">1000000</a> تومان</span>




</div><!--amount-->


<style>

.ui-slider-range{background:#1BF32D !important;}

</style>



<script>


$(".slider").slider({
	
	min:1000,
	max:1000000,
	values:[1000,1000000],
	range:true,
	
	step:1000,
	
	slide:function (event , ui){
		
		
		$("#minamount").html(ui.values[0]);
		
		$("#maxamount").html(ui.values[1]);
		
		page=1;
		
		begard();
		
		
		
		
		
		}
	
	
	
	})




</script>




<h2><img src="img/dots.png">دسته بندی محصولات</h2>

<div id="line4"></div><!--line4-->

<ul>


<?php

include('connect.php');


$iddaste=0;
if(isset($_GET['iddaste'])){
	$iddaste=$_GET['iddaste'];
	}

$sql="select * from tblmenu where parent=".$iddaste." order by title asc ";
$stmt=$db->prepare($sql);
$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
$id=$result['id'];	
$title=$result['title'];	


echo '<li><a href="search.php?iddaste='.$id.'"><img style="margin-left:5px;" src="img/dot.png">'.$title.'</a></li>';





}


?>



</ul>

</div><!--pishnahad-->







</div><!--right-->