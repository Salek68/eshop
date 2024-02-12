

<style>
#slideshow>a{width:100%; height:100%;}
#slideshow>a>img{ width:100%; height:100%;}
#next{position:absolute; top:155px; z-index:7; right:680px; cursor:pointer; display:none; opacity:0; }
#prev{position:absolute;top:155px; right:19px; z-index:7;cursor:pointer; display:none; opacity:0;}

</style>





<div id="slide">


<div id="next"><img src="img/next.png"></div><!--next-->

<div id="prev"><img src="img/prev.png"></div><!--prev-->



<div id="slideshow" style="width:735px; height:315px; border:2px solid #ccc; border-radius:7px; float:right; overflow:hidden;">




<?php

include('connect.php');

$res=$object->mahsoolat_at_position('slider');


foreach($res as $row){

$img=$row['img'];

echo '<a><img src="'.$img.'"></a>';




}


?>






</div><!--slideshow-->

</div><!--slide-->





<script>

$("#slideshow").cycle({
	
	fx:'zoom',
	timeout:5000,
	next:'#next',
	prev:'#prev'
	
	})
	
$("#slide").hover(function(){
	
	$("#next,#prev").show(0);
	$("#next,#prev").animate({opacity:1},600);
	
	},function(){
		
		$("#next,#prev").animate({opacity:0},600);

		$("#next,#prev").hide(0);
		
		})
	
	
	


</script>
