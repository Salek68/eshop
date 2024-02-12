<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه اینترنتی</title>

<script src="js/jquery-1.10.2.min.js"></script>


<link rel="stylesheet" href="css/jquery.fileupload.css">

<link rel="stylesheet" href="css/bootstrap.min.css">



</head>

<body style="margin:0; padding:0;">




<?php

include('top.php');

?>


<style>

#col-right{ width:182px; float:right; background:#eee; min-height:300px;}


#col-left{ width:911px; float:right; margin-right:3px; background:#0FF;min-height:300px; font-family:tahoma; font-size:12px; color:#03C;}


#col-left>div{ padding:15px; width:881px; height:25px; background:#ccc;; margin-top:3px;}

#col-left span,#col-left input{float:right; direction:rtl;}

#onvan{width:180px;}


input[type="text"],input[type="password"]{ width:200px; height:21px; border:none; background:#E4E4E4; border-radius:4px;}

input[type="radio"]{margin:0; opacity:0; }


#man,#woman{width:11px; height:11px; background:url(img/check2.png); margin-top:3px;margin-right:5px;}


#man:hover,#woman:hover{background-position:0px 11px !important;}


#undermenu{height:auto !important; float:right;}


option{ font-family:tahoma; font-size:12px; padding:6px; background:#eee; text-align:right;}


</style>


<div id="undermenu" style="width:100%; background:#CFFCFC; height:340px;">


<div id="undermenu1" style="width:1100px; margin:0 auto; height:100%; position:relative; ">


<div id="col-right">




<span style="margin-left:40px; margin-top:13px;" class="btn fileinput-button btn-success">

<span>select files</span>

<input type="file" id="fileupload" name="files[]" multiple>


</span>


<div style="width:179px; margin:20px auto; position:relative;" id="progress" class="progress">

<div id="darsad" style="color:red; width:100%; height:100%; position:absolute; text-align:center;"></div><!--darsad-->

<div class="progress-bar progress-bar-success"></div>

</div>


<div id="files" class="files" style="display:none;"></div>


<style>
#myupload img{width:100%; height:100%;}

</style>


<div id="uperror" style="color:red; text-align:center;"></div>



<div id="myupload" style="width:168px; height:130px;margin:3px auto;"></div>


<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: true,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 120000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: false
    }).on('fileuploadadd', function (e, data) {
		
		$("#uperror").text('');
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
			
			
			
			$("#uperror").text(file.error);
			
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );$("#darsad").text(progress+'%');
		
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
			
            if (file.url) {
				
				$("#myupload").html('<img src="'+file.url+'"><br>'+file.name+'');
				$("input[name=fileadres]").val(file.url);
				
				
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>




</div><!--col-right-->

<form action="register1.php" method="post" onSubmit="return check();">


<input name="fileadres" type="hidden">


<div id="col-left">

<div><span id="onvan">نام شما:<b id="onvan" style="color:red;">*</b></span><input type="text"  name="namekarbar"></div>


<div><span id="onvan">پست الکترونیکی شما:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="mail"><span id="erroremail" style="color:red; margin-right:20px; margin-top:3px; display:none;">پست الکترونیکی تکراری است</span></div>



<div><span id="onvan">جنسیت:</span> <span>مرد</span><span id="man"><input name="jensiat" value="1" type="radio"></span><span style="margin-right:15px;">زن</span>
<span id="woman"><input   name="jensiat" value="0" type="radio"></span> </div>


<div><span id="onvan">رمز عبور شما:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="password" name="password"></div>

<div><span id="onvan">تایید رمز عبور:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="password" name="confirmpassword"></div>




<div><span id="onvan">همراه شما:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="mobile"><span id="errormobile" style="color:red; margin-right:20px; margin-top:3px; display:none;">شماره موبایل تکراری است</span></div>


<div><span id="onvan">تلفن ثابت:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="tel"></div>


<div><span id="onvan">استان:<b id="onvan" style="color:red;">*</b></span>

<div id="ostan1" style=" width:140px; height:25px; background:url(img/select4.png) #fff no-repeat; float:right; position:relative;">

<span id="ostan2" style="padding-right:3px; line-height:22px;">انتخاب استان</span>


<select id="ostan" name="ostan" style="width:100%; height:100%; opacity:0; position:absolute; right:0; top:0;">


<option value="0">انتخاب استان</option>


<?php

$sql="select * from tblostan ";

$stmt=$db->prepare($sql);

$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$id=$result['id'];
	$nameostan=$result['name'];
	
	echo '<option value="'.$id.'">'.$nameostan.'</option>';
	
	
	
	
	}
	
	
	?>



</select></div><!--ostan1-->


</div>



<div><span id="onvan">شهر:<b id="onvan" style="color:red;">*</b></span>

<div id="shahr1" style=" width:140px; height:25px; background:url(img/select4.png) #fff no-repeat; float:right; position:relative;">

<span id="shahr2" style="padding-right:3px; line-height:22px;">انتخاب شهر</span>


<select id="shahr" name="shahr" style="width:100%; height:100%; opacity:0; position:absolute; right:0; top:0;">


<option value="0">انتخاب شهر</option>



</select></div><!--shahr1-->



</div>


<div><span id="onvan">کد پستی:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="codeposti"></div>


<div style="height:200px;">
<span id="onvan">آدرس پستی:<b id="onvan" style="color:red;">*</b></span>

<textarea name="adres" style=" width:540px; height:172px; max-width:540px; max-height:172px;min-width:540px; min-height:172px; 
direction:rtl; float:right; border:none; background:#e4e4e4; border-radius:8px; padding:10px;"></textarea>

</div>


<style>

#test1,#test2{width:13px; height:13px; background:url(img/checkbox.png); margin-top:3px; margin-right:3px; margin-left:5px; border-radius:4px;}

input[type=checkbox]{margin:0; opacity:0;}

.checked{background-position:0px 13px !important;}

</style>



<div> <span id="test1"><input type="checkbox" name="khabarnameemail"></span><span>دریافت خبرنامه توسط ایمیل</span>


<span id="test2"><input type="checkbox" name="khabarnamesms"></span><span>دریافت خبرنامه توسط پیامک</span>

 </div>
 
 
<div><span id="onvan">حروف موجود در تصویر را وارد نمایید:<b id="onvan" style="color:red;">*</b></span><input style="width:100px;direction:ltr;" type="text" name="captcha" ><img id="captcha" src="image1416824798.png" style="float:right; margin-right:8px; margin-top:-13px; cursor:pointer;"></div>



<div><input type="submit" value="ثبت نام" style=" width:90px; height:26px; cursor:pointer; float:left; background:#03C; color:#fff; border:none; border-radius:6px;"></div>





<div></div>
<div></div>
<div></div>



</div><!--col-left-->



</form>


<style>

.red{background:#FDB0B3 !important;}

.red2{background:url(img/select4.png) #FDB0B3 no-repeat !important; }

</style>



<script>

function check(){

var error=0;



 $("#erroremail").css('display','none');
 
 $("input[name=captcha]").removeClass('red');
 
 $("#errormobile").css('display','none');





var name=$("input[name=namekarbar]").val();

var mail=$("input[name=mail]").val();

var password=$("input[name=password]").val();

var confirmpassword=$("input[name=confirmpassword]").val();


var mobile=$("input[name=mobile]").val();


var tel=$("input[name=tel]").val();

var codeposti=$("input[name=codeposti]").val();


var adres=$("textarea[name=adres]").val();


var ostan=$("#ostan option:selected").val();


var shahr=$("#shahr option:selected").val();

var captcha=$("input[name=captcha]").val();



if(name=='' || name=='لطفا نام خود را وارد کنید' ){error=1; $("input[name=namekarbar]").val('لطفا نام خود را وارد کنید');$("input[name=namekarbar]").addClass('red');}

else{$("input[name=namekarbar]").removeClass('red');}



var regexp=/^[a-z0-9_\.-]+@{1}[a-z0-9_\.-]+\.[a-z]{2,4}$/i;


if(regexp.test(mail)==false){error=1; $("input[name=mail]").val('لطفا ایمیل خود را به درستی وارد کنید');$("input[name=mail]").addClass('red');}

else{$("input[name=mail]").removeClass('red');}





regexp=/.{5,}/i;


if(regexp.test(password)==false){error=1; alert('لطفا پسورد را به درستی وارد کنید');$("input[name=password]").addClass('red');}

else{if(password!=confirmpassword){error=1; alert('رمز عبور با تاییدیه رمز عبور یکسان نیست');$("input[name=password]").addClass('red');
$("input[name=confirmpassword]").addClass('red');}

else{$("input[name=password]").removeClass('red');$("input[name=confirmpassword]").removeClass('red');}

  }







regexp=/^0{1}9{1}[0-9]{9}$/i;


if(regexp.test(mobile)==false){error=1; $("input[name=mobile]").val('لطفا موبایل خود را به درستی وارد کنید');$("input[name=mobile]").addClass('red');}


else{$("input[name=mobile]").removeClass('red');}






regexp=/^0{1}[0-9]{10,12}$/i;


if(regexp.test(tel)==false){error=1; $("input[name=tel]").val('لطفا تلفن خود را به درستی وارد کنید');$("input[name=tel]").addClass('red');}


else{$("input[name=tel]").removeClass('red');}






regexp=/^[0-9]{10}$/i;


if(regexp.test(codeposti)==false){error=1; $("input[name=codeposti]").val('لطفا کد پستی خود را به درستی وارد کنید');$("input[name=codeposti]").addClass('red');}


else{$("input[name=codeposti]").removeClass('red');}



if(adres=='' || adres=='لطفا آدرس خود را وارد کنید'){error=1; $("textarea[name=adres]").val('لطفا آدرس خود را وارد کنید');$("textarea[name=adres]").addClass('red');}

else{$("textarea[name=adres]").removeClass('red');}





if(ostan==0){error=1; $("#ostan1").addClass('red2');}


else{$("#ostan1").removeClass('red2');}


if(shahr==0){error=1; $("#shahr1").addClass('red2');}

else{$("#shahr1").removeClass('red2');}


if(error==0){
	
	$.ajax({
		
		url:'checkcaptcha.php',
		type:'POST',
		async:false,
		data:{captcha:captcha}
			
		})
		
		.done(function(msg){
			
			if(msg==1){error=1; $("input[name=captcha]").addClass('red');}
			
			
			})
	
	
	
	}
	
	
	
	if(error==0){
	
	$.ajax({
		
		url:'checkmobile.php',
		type:'POST',
		async:false,
		data:{mobile:mobile}
			
		})
		
		.done(function(msg){
			
       if(msg==1){error=1; $("#errormobile").css('display','block'); }		
			
			})
	
	
	
	}



if(error==0){
	
	$.ajax({
		
		url:'checkemail.php',
		type:'POST',
		async:false,
		data:{email:mail}
			
		})
		
		.done(function(msg){
			
       if(msg==1){error=1; $("#erroremail").css('display','block'); }		
			
			})
	
	
	
	}






if(error==1){return false;}


}




$("input[name=namekarbar],input[name=mail],input[name=mobile],input[name=tel],input[name=codeposti],textarea[name=adres]").click(function(){
	
	var red=$(this).attr('class');
	
	if(red=='red'){
		
		$(this).val('');
		
		}
	
	
	
	
	})





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






$("#test1").click(function(){
	
	$(this).toggleClass('checked');
	
	})
	
	
	$("#test2").click(function(){
	
	$(this).toggleClass('checked');
	
	})



$("#ostan").change(function(){
	
	
	var ostan=$(this).find('option:selected').text();
	
	$("#ostan2").text(ostan);
	
	
	var idostan=$(this).find('option:selected').val();
	
	
	
	$.ajax({
		
		url:'shahr.php',
		type:'POST',
		data:{idostan:idostan}
		
		
		})
		
		.done(function(msg){
			
			$("#shahr2").text('انتخاب شهر');
			
			$("#shahr").html(msg);
			
			
			})
	
	
	
	})
	
	
	
$("#shahr").change(function(){
	
	
	var shahr=$(this).find('option:selected').text();
	
	$("#shahr2").text(shahr);
	
	
	})



$("#man").click(function(){
	
	$(this).css('background-position','0px 11px');
	
	$("#woman").css('background-position','0px 0px');
	
	})
	
	
	$("#woman").click(function(){
		
		
		$(this).css('background-position','0px 11px');
	
	$("#man").css('background-position','0px 0px');
	
	
	})
	
	
	


</script>



</div><!--undermenu1-->


</div><!--undermenu-->


<?php

include('scriptsabad.php');

?>



</body>



</html>