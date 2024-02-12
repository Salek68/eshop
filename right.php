
<style>
#right{ width:235px; float:right; margin-top:28px;}

#pishnahad{width:100%; border:1px solid #ccc; border-radius:7px; float:right; box-shadow:1px 1px 6px #9CF1F8;}

#pishnahad h2{font-size:17px; float:right; text-align:right; direction:rtl; margin-top:-20px;border:2px solid #ccc; background: #fff; margin-right:-2px; border-bottom:0; line-height:24px; margin-bottom:0; }

#line4{ width:100%; height:2px; background:red; box-shadow:1px 1px 4px #000; float:right; margin-bottom:10px; }

#pishnahad li{list-style:none; float:right; direction:rtl; border-bottom:1px solid #ccc; padding:12px 0; font-family:tahoma; font-size:12px; width:100%; }

#pishnahad ul{margin:0; padding:0;}

#pishnahad a{padding-right:5px;}




</style>




<div id="right">

<div id="pishnahad">

<h2><img src="img/dots.png">کالاهای پیشنهادی</h2>

<div id="line4"></div><!--line4-->

<ul>


<?php

include('connect.php');

$res=$object->mahsoolat_at_position('pishnahadi');


foreach($res as $row){

$id=$row['id'];	
$title=$row['title'];	


echo '<li><a href="mahsool.php?id='.$id.'" target="_blank"><img style="margin-left:5px;" src="img/dot.png">'.$title.'</a></li>';





}


?>



</ul>

</div><!--pishnahad-->




<div class="porbahstarinha" id="pishnahad" style="margin-top:30px;">

<h2><img src="img/dots.png">پربحث ترین محصولات</h2>

<div id="line4"></div><!--line4-->

<ul>



<?php

include('connect.php');

$sql="select * from tblmahsool order by porbahs desc limit 40 ";
$stmt=$db->prepare($sql);
$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
$id=$result['id'];	
$title=$result['title'];	


echo '<li><a href="mahsool.php?id='.$id.'" target="_blank"><img style="margin-left:5px;" src="img/dot.png">'.$title.'</a></li>';





}


?>


</ul>

</div><!--pobahstarinha-->







</div><!--right-->