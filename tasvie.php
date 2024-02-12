<?php
session_start();
include('myfirstclass.php');
$object=new class_parent;



$name=$mobile=$tel=$codeposti=$email=$adres=$ostan=$shahr='';


if(isset($_SESSION['email'])){$ozv=$_SESSION['email'];}
if(isset($_COOKIE['remember'])){$ozv=$_COOKIE['remember'];}

if(isset($ozv)){
	
	$sql="select * from tblozv where email=?";
	$arr=[$ozv];
	$res=$object->select($sql,$arr);
	$row=$res[0];
	
	$name=$row['name'];
	$mobile=$row['mobile'];
	$tel=$row['tel'];
	$codeposti=$row['codeposti'];
	$email=$row['email'];
	$idostan=$row['ostan'];
	$idshahr=$row['shahr'];
	$adres=$row['adres'];
	
	$sql="select * from tblostan where id=?";
	$arr=[$idostan];
	$res=$object->select($sql,$arr);
	$ostan=$res[0]['name'];
	
	
	$sql="select * from tblshahr where id=?";
	$arr=[$idshahr];
	$res=$object->select($sql,$arr);
	$shahr=$res[0]['name'];
	
	
	}//if


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه اینترنتی</title>

<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/city2.js"></script>


</head>

<body style="margin:0; padding:0;">




<?php

include('top.php');

?>



<div id="undermenu" style="width:100%; background:#CFFCFC; float:right;">


<div id="undermenu1" style="width:1100px; margin:0 auto; height:100%; position:relative; ">

<style>
div{ font-family:tahoma; font-size:12px; text-align:right; direction:rtl;}
.row{width:100%; height:170px; background:#fff; margin-bottom:15px;}
.col1{width:390px; height:100%; border-left:1px solid #ccc; float:right;}
.col2{width:230px; height:100%; border-left:1px solid #ccc; float:right;}
.col-right{ float:right; width:140px;}
.col-left{ float:right; width:240px;text-align:right;}
.info{width:90%; padding:10px;}
option,select{font-family:tahoma; font-size:12px;}


</style>


<script>

function checknumber(e){
	
	
	
	if( (e.keyCode==65 && e.ctrlKey) || (e.keyCode>=35 && e.keyCode<=40) || ($.inArray(e.keyCode,[8,46])!=-1) ){
		
		return;
		
		}//if
	
	
	
	if( e.shiftKey || ( (e.keyCode<48 || e.keyCode>57) && (e.keyCode<96 || e.keyCode>105) ) ){
		
		e.preventDefault();
		
		}//if
	
	
	
	};



</script>



<div class="item">


<?php
$sql="select * from tblsabad where cookiename=? and pardakht=0";
$arr=[$_COOKIE['mybasket']];
$res=$object->select($sql,$arr);

foreach($res as $row){

$sql="select * from tblmahsool where id=?";
$arr=[$row['idmahsool']];
$res2=$object->select($sql,$arr);
$row2=$res2[0];


?>






<div id="<?php echo $row2['id']; ?>" class="row">

<div class="col1" style="position:relative;">

<img class="del_item" src="img/remove.png" style="position:absolute; top:4px; right:4px; width:25px; cursor:pointer;">

<div class="col-right">
<a href="mahsool.php" target="_blank">
<img src="<?php echo $row2['img']; ?>" style="width:120px; height:100px; float:right; margin-top:30px; margin-right:7px;">
</a>
</div><!--col-right-->

<div class="col-left">

<p style="margin-top:25px;">

<?php echo $row2['title']; ?>

</p>
</div><!--col-left-->

</div><!--col1-->

<div class="col2">

<div class="info">

قیمت:
<span style="float:left;"><a id="m_gheymat"><?php echo $row2['gheymat']; ?></a> تومان</span>

</div>



<div class="info">

تعداد:
<span style="float:left;">
<input id="m_tedad" onKeyDown="return checknumber(event);" class="m_tedad" type="text" style="width:25px;" value="<?php echo $row['tedad']; ?>">
</span>

</div>



<div class="info">

مبلغ کل:
<span style="float:left;"><a id="kol_gheymat"><?php echo $row2['gheymat']*$row['tedad']; ?></a> تومان</span>

</div>



</div><!--col2-->


</div><!--row-->


<?php } ?>

</div>
<!--item-->




<style>
.user_info{ float:right; width:700px;background:#fff; height:600px;}

.factor{float:left; width:396px; background:#fff; height:367px;}
.factor-row{width:94%; border-bottom:1px solid #ccc; padding:10px; height:32px; padding-top:18px;}
.user_info_right{width:330px; float:right; height:100%; padding:24px;}
.user_info_left{width:273px; float:left; height:100%;padding:24px;}
.user_info_row{width:100%; height:35px;}
.user_info_input{width:200px; float:left;}
</style>

<form>

<div class="user_info">

<div class="user_info_right" >


<div class="user_info_row">

نام:
<input name="family" value="<?php echo $name; ?>" class="user_info_input" type="text" >

</div><!--user_info_row-->


<div class="user_info_row">

شماره موبایل:
<input name="mobile" value="<?php echo $mobile; ?>" class="user_info_input" type="text" >

</div><!--user_info_row-->





<div class="user_info_row">

تلفن ثابت
<input name="tel" value="<?php echo $tel; ?>" class="user_info_input" type="text" >

</div><!--user_info_row-->



<div class="user_info_row">

کدپستی:

<input name="codeposti" value="<?php echo $codeposti; ?>" class="user_info_input" type="text" >

</div><!--user_info_row-->





</div><!--user_info_right-->

<div class="user_info_left" >



<div class="user_info_row">

ایمیل:
<input name="email" value="<?php echo $email; ?>" class="user_info_input" type="text" >

</div><!--user_info_row-->




<div class="user_info_row">

استان:


<select name="ostan" id="ostan"   onchange="ldMenu(this.value);" class="user_info_input">

                        <option selected="selected" value="0">لطفا استان خود را انتخاب کنید</option>
                        <option value="41">آذربايجان شرقي</option>
                        <option value="44">آذربايجان غربي</option>
                        <option value="45">اردبيل</option>
                        <option value="31">اصفهان</option>
                        <option value="26">البرز</option>
                        <option value="84">ايلام</option>

                        <option value="77">بوشهر</option>
                        <option value="تهران">تهران</option>
                        <option value="38">چهارمحال بختياري</option>
                        <option value="56">خراسان جنوبي</option>
                        <option value="51">خراسان رضوي</option>
                        <option value="58">خراسان شمالي</option>

                        <option value="61">خوزستان</option>
                        <option value="24">زنجان</option>
                        <option value="23">سمنان</option>
                        <option value="54">سيستان و بلوچستان</option>
                        <option value="71">فارس</option>
                        <option value="28">قزوين</option>

                        <option value="25">قم</option>
                        <option value="87">كردستان</option>
                        <option value="34">كرمان</option>
                        <option value="83">كرمانشاه</option>
                        <option value="74">كهكيلويه و بويراحمد</option>
                        <option value="17">گلستان</option>

                        <option value="13">گيلان</option>
                        <option value="66">لرستان</option>
                        <option value="15">مازندران</option>
                        <option value="86">مركزي</option>
                        <option value="76">هرمزگان</option>
                        <option value="81">همدان</option>

                        <option value="35">يزد</option>
                    </select>

</div><!--user_info_row-->







<div class="user_info_row">

شهر:

 <select name="shahr"  id="shahr" class="user_info_input">
	<option selected="selected" value="">
         لطفا استان خود را انتخاب کنید
     </option>
</select>

</div><!--user_info_row-->


<script>

$("#ostan option").each(function(index, element) {
    
	var txt=$(this).text();
	var number=$(this).val();
	
	if(txt=='<?php echo $ostan; ?>'){$(this).prop('selected','selected');ldMenu(number);
	
	$("#shahr option").each(function(index, element) {
		
		var txt=$(this).text();
		if(txt=='<?php echo $shahr; ?>'){$(this).prop('selected','selected');}
		
	});
	
	
	}//if
	
	
});


</script>



<div class="user_info_row" style="height:170px;">

آدرس پستی:

<textarea name="adres" class="user_info_input" style="height:115px;" >

<?php echo $adres; ?>

</textarea>

</div><!--user_info_row-->



<div class="user_info_row">


<a id="sabt_nahaee" style="padding:6px; background:#13BD05; color:#fff; text-align:center; float:left; text-decoration:none; cursor:pointer;">

ثبت نهایی

</a>

</div><!--user_info_row-->







</div><!--user_info_left-->

</div><!--user_info-->


</form>


<div class="factor">

<div class="factor-row">

جمع خرید شما:

<span style="float:left;"><a id="jam_kharid">23000</a> تومان</span>

</div><!--factor-row-->


<div class="factor-row">

میزان تخفیف:

<span style="float:left;"><a id="takhfif">0</a> تومان</span>

</div><!--factor-row-->



<div class="factor-row">

کد تخفیف:

<span style="float:left;">

<input id="code_takhfif" type="text" style="width:45px;">

<a id="takhfif_sabt" style="padding:8px; background:#39E50E; color:#fff; text-align:center; cursor:pointer;">
ثبت
</a>

</span>

</div><!--factor-row-->



<div class="factor-row">

هزینه ارسال:

<span style="float:left;">0 تومان</span>

</div><!--factor-row-->



<div class="factor-row">

مالیات:
<span style="float:left;"><a id="maliat">1000</a> تومان</span>

</div><!--factor-row-->



<div class="factor-row" style="background:#19E449; color:#fff;">

مجموع قیمت پرداختی:

<span style="float:left;"><a id="kol_amount"></a> تومان</span>

</div><!--factor-row-->






</div><!--factor-->







</div><!--undermenu1-->


</div><!--undermenu-->


<script>

var timer;

function jam_kharid(){
	
	clearTimeout(timer);
	timer=setTimeout(function(){
	
	var amount=0;
	$(".row").each(function(index, element) {
        
		var tedad=$(this).find('#m_tedad').val();
		var gheymat=$(this).find('#m_gheymat').text();
		
		amount=amount+parseInt(tedad)*parseInt(gheymat);
		
    });//each
	
	
	$('.row .m_tedad').keyup(function(){
		
		
		jam_kharid();
		
		
		var gheymat=$(this).parents('.row').find('#m_gheymat').text();
		var tedad=$(this).val();
		var kol=parseInt(gheymat)*parseInt(tedad);
		$(this).parents('.row').find('#kol_gheymat').text(kol);
		
		})//change
	
	var takhfif=parseInt($("#takhfif").text());
	$("#jam_kharid").html(amount);
	$("#maliat").html(amount*.09);
	$("#kol_amount").html((amount+.09*amount-takhfif).toFixed(0));
	
	},400);
	
	}//jam_kharid
	
	
	
	

jam_kharid();


$("#takhfif_sabt").click(function(){

	
	var code=$("#code_takhfif").val();
	
	$.ajax({
		
		url:'action.php',
		type:'POST',
		data:{action:'takhfif',code:code}
			
		})
		
		.done(function(msg){
			
			msg=msg.trim();
			msg=parseInt(msg);
			if(!isNaN(msg)){
			var x1=$("#jam_kharid").text();
			x1=parseInt(x1);
		    var takhfif=(msg/100)*x1;
			$("#takhfif").html(takhfif);
			jam_kharid();
			
			
			}//if
			
			
			
			
			})
	
	
	})//click




</script>



<?php

include('scriptsabad.php');

?>



<script>

$(".del_item").click(function(){
	
	var idx=$(this).parents('.row').attr('id');
	var parent=$(this).parents('.row');
	
	$.ajax({
		
		url:'delete.php',
		type:'POST',
		data:{id:idx}
		
		
		
		})
		
		
		.done(function(){
			
			parent.remove();
			$("#sabad1 ul #"+idx+" ").remove();
			tedadkol();
			gheymatkol();
			empty();
			jam_kharid();
			
		});
	
	
	
	})//click







$("#sabt_nahaee").click(function(){
	
	var frm=$("form").serializeArray();	
	
	var amount=0;
	$(".row").each(function(index, element) {
        
		var tedad=$(this).find('#m_tedad').val();
		var gheymat=$(this).find('#m_gheymat').text();
		
		amount=amount+parseInt(tedad)*parseInt(gheymat);
		
    });//each
	
	var takhfif=parseInt($("#takhfif").text());
	
	var amount2=amount*1.09-takhfif;
	
	
	frm.push({name:'amount',value:amount2});
	frm.push({name:'action',value:'sefaresh'});
	
	
	
	$(".m_tedad").each(function(index, element) {
       
	var id=$(this).parents('.row').attr('id'); 
	var tedad=$(this).val();  
	frm.push({name:'tedad'+id,value:tedad});
	   
	    
    });//each
	
	$.ajax({
		
		url:'action.php',
		type:'POST',
		data:frm
		
		
		
		})
		
		
		.done(function(msg){
			
	    alert(msg);
		
		var id_get=msg.trim();
		location.href="http://payline.ir/payment-test/gateway-"+id_get; 
		
			
		});
	
	
	})//click

</script>



</body>



</html>