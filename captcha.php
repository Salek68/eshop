<?php
session_start();


function create_image(){
	
	$time=round(microtime(true)*1000);
	
	$image;
	$image=imagecreate(200,50);
	
	$background_color=imagecolorallocate($image,255,255,255);
	
	$text_color=imagecolorallocate($image,0,0,0);
	
	$line_color=imagecolorallocate($image,0,255,0);
	
	$pixel_color=imagecolorallocate($image,255,0,0);
	
	
	imagefilledrectangle($image,0,0,200,50,$background_color);
	
	
	
	for($i=0;$i<3;$i++){
		
		imageline($image,0,rand(0,50),200,rand(0,50),$line_color);
		
		}
		
		for($i=0;$i<1000;$i++){
			
		imagesetpixel($image,rand(0,200),rand(0,50),$pixel_color);
		
			
		}
		
	$letters="asdfertyu45kil";	
	
	$len=strlen($letters);
	
	$word="";
	
	$font="font/arial.ttf";
	
	for($i=0;$i<6;$i++){
	
	$letter=$letters[rand(0,$len-1)];
	
	imagettftext($image,20,rand(20,60),25+($i*30),30,$text_color,$font,$letter);
	
	$word=$word.$letter;
		
	}
	
	$_SESSION['captcha']=$word;
	
	
	
$array=glob('*.png');


foreach( $array as  $x  ){
	
	$create_time=str_replace('.png','',$x);
	
	if($time-$create_time>8000){
	
	unlink($x);
	
	}
	
	
	}


	
	
	
	imagepng($image,$time.".png");
	
	
	echo $time;
	
	
	}
	
	
	create_image();




?>
