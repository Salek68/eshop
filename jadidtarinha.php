
<style>

#jadidtarinha{width:349px;height:302px; background: #fff; float:left; margin-left:4px; margin-top:14px; border:2px solid #ccc; border-radius:6px; }

#jadidtarinha h2{font-size:17px; float:right; text-align:right; direction:rtl; margin-top:-15px;border:2px solid #ccc; background: #fff; margin-right:-2px; border-bottom:0; line-height:24px; }


#jadidtarinha ul{width:100%; padding:0; float:right; margin:0;}


#jadidtarinha li{width:168px; height:137px; float:right; list-style:none; border:1px solid #ccc; border-radius:8px; margin-left:4px; text-align:center; font-family:arial; font-size:16px; font-weight:bold;}


#jadidtarinha li img{ width:140px; height:100px;}

</style>

<div id="jadidtarinha">

<h2><img src="img/dots.png"> جدیدترین کالاها</h2>


<ul>




<?php

include('connect.php');


$res=$object->mahsoolat_at_position('jadid');
	
foreach($res as $row){

	$id=$row['id'];
	$title=$row['title'];
	$img=$row['img'];
	
	echo '<a  href="mahsool.php?id='.$id.'"><li><img src="'.$img.'"><br>'.$title.'</li></a>';
	
	}





?>






</ul>



</div><!--jadidtarinha-->

