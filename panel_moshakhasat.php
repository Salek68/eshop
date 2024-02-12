

<form action="panel_virayesh.php" method="post" onSubmit="return check();">


<input name="fileadres" type="hidden" value="<?php echo $myresult['fileadres']; ?>">


<div id="col-left">

<div><span id="onvan">نام شما:<b id="onvan" style="color:red;">*</b></span><input type="text"  name="namekarbar" value="<?php echo $myresult['name'] ;?>"></div>


<div><span id="onvan">پست الکترونیکی شما:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="mail" value="<?php echo $myresult['email'] ;?>" readonly><span id="erroremail" style="color:red; margin-right:20px; margin-top:3px; display:none;">پست الکترونیکی تکراری است</span></div>



<div><span id="onvan">جنسیت:</span> <span>مرد</span><span id="man"><input name="jensiat" value="1" type="radio" <?php if($myresult['jensiat']==1) { echo 'checked';} ; ?> ></span><span style="margin-right:15px;">زن</span>
<span id="woman"><input   name="jensiat" value="0" type="radio" <?php if($myresult['jensiat']==0) { echo 'checked';} ; ?>></span> </div>





<div><span id="onvan">همراه شما:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="mobile" value="<?php echo $myresult['mobile'] ;?>"><span id="errormobile" style="color:red; margin-right:20px; margin-top:3px; display:none;">شماره موبایل تکراری است</span></div>


<div><span id="onvan">تلفن ثابت:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="tel" value="<?php echo $myresult['tel'] ;?>"></div>


<div><span id="onvan">استان:<b id="onvan" style="color:red;">*</b></span>

<div id="ostan1" style=" width:140px; height:25px; background:url(img/select4.png) #fff no-repeat; float:right; position:relative;">

<span id="ostan2" style="padding-right:3px; line-height:22px;">


<?php

$idostan=$myresult['ostan'];

$sql="select * from tblostan where id=".$idostan."";

$stmt=$db->prepare($sql);

$stmt->execute();

$resultostan=$stmt->fetch(PDO::FETCH_ASSOC);

$ostan=$resultostan['name'];

echo $ostan;


?>


</span>


<select id="ostan" name="ostan" style="width:100%; height:100%; opacity:0; position:absolute; right:0; top:0;">


<option value="0">انتخاب استان</option>


<?php

$sql="select * from tblostan ";

$stmt=$db->prepare($sql);

$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$id=$result['id'];
	$nameostan=$result['name'];
	
	if($id==$idostan){$select='selected';}else{$select='';}
	
	echo '<option value="'.$id.'" '.$select.'>'.$nameostan.'</option>';
	
	
	
	
	}
	
	
	?>



</select></div><!--ostan1-->


</div>



<div><span id="onvan">شهر:<b id="onvan" style="color:red;">*</b></span>

<div id="shahr1" style=" width:140px; height:25px; background:url(img/select4.png) #fff no-repeat; float:right; position:relative;">

<span id="shahr2" style="padding-right:3px; line-height:22px;">


<?php

$idshahr=$myresult['shahr'];

$sql="select * from tblshahr where id=".$idshahr."";

$stmt=$db->prepare($sql);

$stmt->execute();

$resultshahr=$stmt->fetch(PDO::FETCH_ASSOC);

$shahr=$resultshahr['name'];

echo $shahr;


?>


</span>


<select id="shahr" name="shahr" style="width:100%; height:100%; opacity:0; position:absolute; right:0; top:0;">


<option value="0">انتخاب شهر</option>

<?php

$sql="select * from tblshahr where idostan=".$idostan." ";

$stmt=$db->prepare($sql);

$stmt->execute();

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$id=$result['id'];
	$nameshahr=$result['name'];
	
		if($id==$idshahr){$select='selected';}else{$select='';}

	
	echo '<option value="'.$id.'" '.$select.'>'.$nameshahr.'</option>';
	
	
	
	
	}
	
	
	?>



</select></div><!--shahr1-->



</div>


<div><span id="onvan">کد پستی:<b id="onvan" style="color:red;">*</b></span><input style="direction:ltr;" type="text" name="codeposti" value="<?php echo $myresult['codeposti'] ;?>"></div>


<div style="height:200px;">
<span id="onvan">آدرس پستی:<b id="onvan" style="color:red;">*</b></span>

<textarea name="adres" style=" width:540px; height:172px; max-width:540px; max-height:172px;min-width:540px; min-height:172px; 
direction:rtl; float:right; border:none; background:#e4e4e4; border-radius:8px; padding:10px;" >
<?php echo $myresult['adres'] ;?>
</textarea>

</div>


<style>

#test1,#test2{width:13px; height:13px; background:url(img/checkbox.png); margin-top:3px; margin-right:3px; margin-left:5px; border-radius:4px;}

input[type=checkbox]{margin:0; opacity:0;}

.checked{background-position:0px 13px !important;}

</style>



<div> <span id="test1" <?php if($myresult['khabaremail']==1) { ?> class="checked" <?php };?>>

<input type="checkbox" name="khabarnameemail" <?php if($myresult['khabaremail']==1) { ?> checked <?php };?>  ></span><span>دریافت خبرنامه توسط ایمیل</span>


<span id="test2" <?php if($myresult['khabarsms']==1) { ?> class="checked" <?php };?>><input type="checkbox" name="khabarnamesms" <?php if($myresult['khabarsms']==1) { ?> checked <?php };?>></span><span>دریافت خبرنامه توسط پیامک</span>

 </div>
 
 
<div><span id="onvan">حروف موجود در تصویر را وارد نمایید:<b id="onvan" style="color:red;">*</b></span><input style="width:100px;direction:ltr;" type="text" name="captcha" ><img id="captcha" src="image1416824798.png" style="float:right; margin-right:8px; margin-top:-13px; cursor:pointer;"></div>



<div><input type="submit" value="ویرایش" style=" width:90px; height:26px; cursor:pointer; float:left; background:#03C; color:#fff; border:none; border-radius:6px;"></div>





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

 
 $("input[name=captcha]").removeClass('red');
 
 $("#errormobile").css('display','none');





var name=$("input[name=namekarbar]").val();



var mobile=$("input[name=mobile]").val();


var tel=$("input[name=tel]").val();

var codeposti=$("input[name=codeposti]").val();


var adres=$("textarea[name=adres]").val();


var ostan=$("#ostan option:selected").val();


var shahr=$("#shahr option:selected").val();

var captcha=$("input[name=captcha]").val();



if(name=='' || name=='لطفا نام خود را وارد کنید' ){error=1; $("input[name=namekarbar]").val('لطفا نام خود را وارد کنید');$("input[name=namekarbar]").addClass('red');}

else{$("input[name=namekarbar]").removeClass('red');}



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

