
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



</style>




<div id="porforush">


<style>

#search-setting{ width:100%; height:140px; background:#eee; position:relative;}


</style>


<div id="search-setting">


<style>

#tedad-namayesh{position:absolute; right:5px; top:10px; border-left:2px solid #fff; padding-left:40px;}

span{text-align:right; direction:rtl; font-family:tahoma; font-size:13px;}


#tedad-namayesh a{ width:30px; height:30px; border-radius:100%; background:#fff; font-family:tahoma; font-size:13px; text-align:center; float:right; margin-right:2px; line-height:27px;}

</style>


<div class="tedad-namayesh" id="tedad-namayesh">

<span style="float:right; line-height:27px;">تعداد نمایش:</span>

<a class="pager_active">1</a>
<a>2</a>
<a>3</a>


</div><!--tedad-namayesh-->


<style>


#namayesh-mojood{position:absolute; right:240px; top:10px; border-left:2px solid #fff; padding-left:95px;}

#scroll{ width:50px; height:23px; background:#fff; border-radius:5px; position:absolute; right:160px; top:4px;}

</style>



<div id="namayesh-mojood">

<span style="float:right; line-height:27px;">فقط نمایش کالاهای موجود:</span>


<div id="scroll">

<span id="circle" style="width:30px; height:30px; background:url(img/circle.png) no-repeat; position:absolute; left:-2px; top:-3px; cursor:pointer;">

<input type="checkbox" name="mojood" style="width:100%; height:100%; opacity:0; cursor:pointer;">

</span>

</div><!--scroll-->


<script>

$("input[name=mojood]").change(function(){
	
	if($(this).is(':checked')){$("#circle").animate({left:'23px'},400,function(){ $("#scroll").css('background','#0f0');});}
	
	else{$("#circle").animate({left:'-2px'},400,function(){$("#scroll").css('background','#fff');});}
	
	
	})//change


</script>



</div><!--tedad-namayesh-->






<style>


#namayesh-tartib{position:absolute; right:512px; top:10px; border-left:2px solid #fff; padding-left:137px;}


select,option{font-family:tahoma; font-size:12px; text-align:right; padding:1px;}

</style>



<div id="namayesh-tartib">

<span style="float:right; line-height:27px;">ترتیب نمایش محصولات:</span>


<select id="order" style="position:absolute; right:141px; top:4px;">

<option value="1">جدیدترین ها</option>

<option value="2">محبوب ترین ها</option>

<option value="3">پرفروش ترین ها</option>


</select>



</div><!--tedad-namayesh-->







<style>


#keyword{position:absolute; right:5px; top:54px; border-left:2px solid #fff; padding-left:185px;}


</style>




<div id="keyword">

<input type="text" name="keyword" style=" width:300px; height:26px; border:none; border-radius:5px; text-align:right;">

<span id="icon"  style=" width:25px; height:25px; position:absolute; right:276px; background:url(img/search_icon.png) no-repeat #828080 5px 6px; border-radius:100%; cursor:pointer;"></span>

<span style="position:absolute; right:310px; top:6px;">یافت شده:<a id="all_result">12345</a></span>

</div><!--keyword-->


<style>
.pager,.tedad-namayesh a{cursor:pointer; transition:all linear .4s;}

.pager:hover,.tedad-namayesh a:hover{ background:red !important;}

.pager_active{background:red !important;}

</style>


<div id="tedad-namayesh" style="right:419px; top:54px; border:none; padding-left:0;">

<a id="prev" style="background:url(img/prev.png) #FFFFFF no-repeat 10px -36px;cursor:pointer;"></a>

<span id="pager_asli" >



</span><!--pager_asli-->



<a id="next" style="background:url(img/next.png) #FFFFFF no-repeat 8px -36px; cursor:pointer;"></a>

</div><!--tedad-namayesh-->



<div id="worddiv" style=" display:none; width:100%; height:35px; text-align:right; direction:rtl; position:absolute; top:100px;">

<span>عبارت مورد نظر شما:</span><span style="position:relative; background:#fff; border-radius:4px;padding:5px">

<a style="padding:14px;" id="word"></a>

<a id="word_close" style="width:14px; height:24px; background:url(img/key_delete.png); position:absolute; top:1px; left:1px; cursor:pointer;"></a></span>


</div>

<style>

#word_close:hover{background-position:0px -24px !important;}
.x4{background:#fff !important; border:1px solid #eee !important;}

</style>



</div><!--search-setting-->



<div id="line4"></div><!--line4-->




<div id="search-setting" class="moghayese" style="margin-top:12px; height:187px; display:none;">
<p style="text-align:right; font-family:tahoma; font-size:13px; background:#9EECF9; padding:10px;">لیست محصولات جهت مقایسه

<a id="compare" href="moghayese.php" style=" padding:6px; background:green;float:left;color:#fff;text-decoration:none;">مقایسه کن</a>

</p>


</div>
<!--search-setting-->






<ul class="mahsoolat">


</ul>



</div><!--porfprush-->


<script>

function removemoghayese(id){
	
	$('.moghayese').find('#'+id).remove();
	$(".in"+id).prop('checked',false);
		var count=$('.moghayese a').length;
		count--;
	if(count>0){$(".moghayese").slideDown(200);}
	else{$(".moghayese").slideUp(200);}
	
			var href=$("#compare").attr('href');
			var reg=new RegExp("a\\[\\]="+id+'(&|$)');
			var href2=href.replace(reg,'');
			if(href2=='moghayese.php?'){href2='moghayese.php';}
			$("#compare").attr('href',href2);
	
	
	}//removemoghayese

var k=0;

function moghayese(tag,id){
	
	
	var title=$(tag).parents('li').find('#title').text();
	var ax=$(tag).parents('li').find('#ax').attr('src');
	var href=$("#compare").attr('href');
	var count=$('.moghayese a').length;
	count--;
	
	
	if($(tag).is(':checked')){
		
		$('.moghayese').append('<a id="'+id+'" style="display:block; width:120px; height:125px; border:1px solid #000000; padding:3px; text-align:center; float:right; position:relative; margin-right:20px;"><img style="cursor:pointer;position:absolute;right:0; top:0;" onClick="removemoghayese('+id+');" src="img/delete.gif" style="position:absolute; right:0; top:0;"><img src="'+ax+'" style="width:100%; height:85px;"><span>'+title+'</span></a>');


if(count==0){
		href=href+'?a[]='+id;
}
else{
		href=href+'&a[]='+id;
}

	$("#compare").attr('href',href);
		}//if
		
		else{
			
			$('.moghayese').find('#'+id).remove();
			
			
			var reg=new RegExp("a\\[\\]="+id+'(&|$)');
			var href2=href.replace(reg,'');
			if(href2=='moghayese.php?'){href2='moghayese.php';}
			$("#compare").attr('href',href2);
			
			}//else
	
	
	
	var count=$('.moghayese a').length;
	count--;
	if(count>0){$(".moghayese").slideDown(200);}
	else{$(".moghayese").slideUp(200);}
	
	
	}//moghayese





var page=1;

$("#pager_asli .pager").click(function(){

page=$(this).text();	

begard();

});//click




$("#icon").click(function(){
	
	var word=$("input[name=keyword]").val();
	
	$("#word").html(word);
	
	$("#worddiv").slideDown(300);
	
	page=1;
	
	begard();	
	
	})//click
	
	
	
$("#word_close").click(function(){
	
	$("#worddiv").slideUp(300);
	
	$("input[name=keyword]").val('');
	
	page=1;
	
	begard();
	
	})//click




$("#next").click(function(){
	
	page=$("#pager_asli .pager_active").text();
	
	page=parseInt(page)+1;
	
	var last=$("#pager_asli .pager").last().text();
	
	last=parseInt(last);
	
	if(page<=last){	begard();}//if
	

	
	
	})//function
	
	
	$("#prev").click(function(){
	
	page=$("#pager_asli .pager_active").text();
	
	page=parseInt(page)-1;
	
	if(page>0){
	
	begard();
	
	}//if
	
	
	})//function




$(".tedad-namayesh a").click(function(){
	
	
	$(".tedad-namayesh a").each(function(index, element) {
        
	$(this).removeClass('pager_active');	
		
		
    });//each
	
	$(this).addClass('pager_active');
	
	page=1;
	
	begard();
	
	
	
	})//click


$("#circle").click(function(){
	
	page=1;
	
	begard();

	
	})//click
	
	
	
$("#order").change(function(){
	
	page=1;
	
	begard();

	
	
	})//change	




function pager(number){
	
	number=parseInt(number);
	
	
	$(".pager").each(function(index, element) {
        
		$(this).hide();
		
		$(this).removeClass('pager_active');
		
		var x=$(this).text();
		
		
		if(x>=number-5 && x<=number+5){
			
			$(this).show();
			
			}//if
		
    });//each
	
	var test=number-1;
	
	$(".pager:eq("+test+")").addClass('pager_active');
	

	
	}//function pager






function begard(){
	

var hast='';

if($("input[name=mojood]").is(':checked')){hast=1;}	

else{hast=0;}

var minamount=$("#minamount").text();

var maxamount=$("#maxamount").text();

var order=$("#order option:selected").val();

var tedad_dar_page=$(".tedad-namayesh .pager_active").text();

var keyword=$("input[name=keyword]").val();



$.ajax({
	
	url:'result.php',
	type:'POST',
	dataType:"json",
	
	data:{page:page,hast:hast,minamount:minamount,maxamount:maxamount,order:order,tedad_dar_page:tedad_dar_page,keyword:keyword<?php if(isset($_GET['iddaste'])){ echo ', iddaste:'.$_GET['iddaste'];} ?>  }
	
	
	})//ajax
	
.done(function(msg){
	

	
	$("#all_result").text(msg[0]);
	
	$(".mahsoolat").html('');
	
	$.each(msg[1],function(index,val){
			
		var mojood=val[5];
		
		if(mojood>0){var mojood2='موجود است';}
		
		else{var mojood2='موجود نیست';}
		
		var checkedinput='';
		var count=$('.moghayese').find('#'+val[0]).length;
		if(count>0){checkedinput='checked';}
		else{}
				
$(".mahsoolat").append('<li><img  id="ax"  src="'+val[2]+'"><div id="tozihat"><a id='+val[0]+' class="x1">افزودن به سبد خرید</a><a class="x2">مشاهده جزییات محصول</a><a class="x3"> محصولات مشابه</a><?php if(isset($sath_sevom)){ ?><a class="x4"> مقایسه <input class="in'+val[0]+'" type="checkbox" onChange="moghayese(this,'+val[0]+');" '+checkedinput+'></a><?php } ?></div><a><span id="title">'+val[1]+'</span><br><span id="mojood">'+mojood2+'</span> </a><a style="height:33px; margin-top:3px;">قیمت:<span id="gheymat">'+val[6]+'</span> تومان</a></li>');	
		
			
		})//each
		
		

$("#pager_asli").html('');		
		
var tedad_result=msg[0];

var tedad_page=Math.ceil(tedad_result/tedad_dar_page);

var i=1;

for(i=1;i<=tedad_page;i++){

	
	$("#pager_asli").append('<a class="pager" >'+i+'</a>');
	
	
	}//for
	

	
	pager(page);
	
	
$("#pager_asli .pager").click(function(){

page=$(this).text();	

begard();

});//click

		
		
	
	
	
	$("#porforush ul li").hover(function(){
	
		$(this).find('#tozihat').animate({opacity:1},500);
		$(this).addClass('border');
		
	
	},function(){
	
		$(this).find('#tozihat').animate({opacity:0},500);
        $(this).removeClass('border');
	
	
	})//hover
	
	
	
	
	$("#porforush #tozihat .x1").click(function(){
	
	var length='';
	var ax='';
	var title='';
	var gheymat='';
	
	var li=$(this).parents('li');
	
	ax=li.find('#ax').attr('src');
	
	title=li.find('#title').html();
	
	gheymat=li.find('#gheymat').html();
	
	
	id=$(this).attr('id');
	
	length=$("#sabad1 #"+id+" ").length;
		
	
	$.ajax({
		
		type:'post',
		
	    url:"sabad.php",
		
		data:{idmahsool:id}
		
		
		})//ajax
		
	.done(function(msg){
		
		if(length==1){
			
			var tedad=0;
			
			tedad=$("#sabad1 #"+id+" #tedad ").html();
			
			tedad=parseInt(tedad);
			
			tedad=tedad+1;
			
			$("#sabad1 #"+id+" #tedad ").html(tedad);
			
			
			
			
			      }
				  
		else{
			
			
			$("#sabad1 ul").append('<li id='+id+'> <img src="'+ax+'"> <a>'+title+'</a>  <a>تعداد :<span style="float:none;" id="tedad">1</span></a><a>قیمت :<span style="float:none;" id="gheymat">'+gheymat+'</span></a><img id=delete src="img/remove.png" style="width:24px; height:22px;"> </li>');
		
			
			
			
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
		
		
		
		
		
		
		})	//done
	
	
	
	
	})//click
	
	
	
	
	
	

	
	
		
		
		
		
	
	})//done
	
	
	
	
	}//function begard




begard();



</script>





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



