
<style>
.row{width:100%; padding:8px; text-align:right; float:right;}
.input{width:400px;}
.side{width:130px; display:block; float:right;}
#cke_tozihat{float:right;}

</style>


<?php
if(isset($_GET['new'])){

if(!isset($_GET['step2']) and !isset($_GET['step3'])){
	
		$title='';
		$dasteid='';
		$mojood='';
		$gheymat='';
		$img='';
		$tozihat='';
		$takmili='';
		$vir=0;
		$idmahsool='';
	
	if(isset($_GET['virayesh'])){
		
		$idmahsool=$_GET['idmahsool'];
		$sql="select * from tblmahsool where id=?";
		$arr=array($_GET['idmahsool']);
		$res=$object->select($sql,$arr);
		$row=$res[0];
		$title=$row['title'];
		$dasteid=$row['dasteid'];
		$mojood=$row['mojood'];
		$gheymat=$row['gheymat'];
		$img=$row['img'];
		$tozihat=$row['tozihat'];
		$takmili=$row['takmili'];
		$vir=1;
		
		$sql="select * from tblposition where idmahsool=? and position=?";
		$arr=array($idmahsool,"jadid");
		$num=$object->num($sql,$arr);
		if($num>0){$position_jadid=1;}else{$position_jadid=0;}
		
		
		$sql="select * from tblposition where idmahsool=? and position=?";
		$arr=array($idmahsool,"porforoosh");
		$num=$object->num($sql,$arr);
		if($num>0){$position_porforoosh=1;}else{$position_porforoosh=0;}
		
		$sql="select * from tblposition where idmahsool=? and position=?";
		$arr=array($idmahsool,"pishnahadi");
		$num=$object->num($sql,$arr);
		if($num>0){$position_pishnahadi=1;}else{$position_pishnahadi=0;}
		
		$sql="select * from tblposition where idmahsool=? and position=?";
		$arr=array($idmahsool,"slider");
		$num=$object->num($sql,$arr);
		if($num>0){$position_slider=1;}else{$position_slider=0;}
		
		
		
		}//if isset virayesh
		
		

?>

<form action="action.php?action=new_mahsool&virayesh=<?php echo $vir; ?>&idmahsool=<?php echo $idmahsool; ?>" method="post">

<p style="text-align:center;">

مشخصات محصول را وارد نمایید
</p>

<div class="row">
<span class="side">عنوان محصول:</span>
<input type="text" name="title" class="input" value="<?php echo $title; ?>">
</div><!--row-->

<div class="row">
<span class="side">دسته محصول:</span>

<select type="text" name="daste">
<?php
$sql="select * from tblmenu";
$res=$object->select($sql);
foreach($res as $row){
	
	$selected='';
	if($row['id']==$dasteid){$selected='selected';}
echo '<option value="'.$row['id'].'" '.$selected.'>'.$row['title'].'</option>';

}
?>
</select>

</div><!--row-->

<div class="row">
<span class="side">قیمت محصول:</span>
<input type="text" style="width:150px;" name="gheymat" value="<?php echo $gheymat; ?>">
</div><!--row-->

<div class="row">
<span class="side">تعداد موجود:</span>
<input type="text" style="width:150px;"  name="mojood" value="<?php echo $mojood; ?>">
</div><!--row-->


<div class="row">

<input type="button" value="انتخاب عکس" style="float:right;" onClick="BrowseServer(1);">
<input id="xFilePath1" type="text" class="input"  name="img"
 style="float:right; margin-right:20px;" value="<?php echo $img; ?>" readonly>

<img id="" style="width:100px; height:100px; float:left; margin-left:100px;" src="<?php echo $img; ?>">

</div><!--row-->





<div class="row">



<input type="checkbox" name="position[]" value="jadid" <?php if($position_jadid==1){echo 'checked';} ?>>
<span>جدیدترین محصولات</span>

<input type="checkbox" name="position[]" value="porforoosh" <?php if($position_porforoosh==1){echo 'checked';} ?>>
<span>پرفروش ترین محصولات</span>


<input type="checkbox" name="position[]" value="pishnahadi" <?php if($position_pishnahadi==1){echo 'checked';} ?>>
<span>محصولات پیشنهادی</span>

<input type="checkbox" name="position[]" value="slider" <?php if($position_slider==1){echo 'checked';} ?>>
<span>اسلایدشو</span>




</div><!--row-->




<div class="row" style="padding-bottom:20px;">
<span class="side" style="margin-bottom:20px;">توضیحات محصول:</span>
</div>

<div class="row">
<textarea style="vertical-align:top;" type="text" name="tozihat"><?php echo $tozihat; ?></textarea>
</div><!--row-->

<div class="row">
<span class="side">توضیحات تکمیلی:</span>
</div>

<div class="row">
<textarea style="vertical-align:top;" type="text" name="takmili"><?php echo $takmili; ?></textarea>
</div><!--row-->

<button> ثبت محصول </button>


</form>

<?php

}//step1

else if(isset($_GET['step2'])){

$vir=0;
if(isset($_GET['virayesh'])){$vir=1;}

?>


<script>

var i=2;


function remove_img(j){
	
	$("#gallery"+j).remove();
	
	}//function remove_img


function add_img(){
	
$('#gallery').append('<div id="gallery'+i+'" class="row"><input type="button" value="انتخاب عکس" style="float:right;" onClick="BrowseServer('+i+');"><input id="xFilePath'+i+'" type="text" class="input"  name="img[]" style="float:right; margin-right:20px;" readonly><img id="img_xFilePath'+i+'" style="width:100px; height:100px; float:left; margin-left:100px;" src=""><a style="cursor:pointer; color:red; margin-right:7px;" onClick="remove_img('+i+');">حذف</a></div>');
	
	i++;
	
	}//function

</script>


<P>مرحله دوم:ایجاد گالری تصاویر محصول</P>

<form action="action.php?action=delete_gallery&idmahsool=<?php echo $_GET['idmahsool']; ?>" method="post">

<table border="1" cellpadding="4" cellspacing="3" style="width:250px;">

<thead>
<th>تصویر</th><th>حذف</th>
</thead>


<?php

$idmahsool=$_GET['idmahsool']; 
$sql="select * from tblax where idmahsool=?";
$arr=array($idmahsool);
$res=$object->select($sql,$arr);

foreach($res as $row){

?>

<tr><td><img  style="width:100px; height:100px;" src="<?php echo $row['img']; ?>"></td>
<td><input type="checkbox" name="gallery<?php echo $row['id']; ?>"></td></tr>

<?php
}
?>

</table>


<div class="row">

<button> حذف تصاویر انتخاب شده </button>

</div><!--row-->

</form>


<form action="action.php?action=gallery&idmahsool=<?php echo $_GET['idmahsool']; ?>&virayesh=<?php echo $vir; ?>" method="post">

<div id="gallery">

<div id="gallery1" class="row">

<input type="button" value="انتخاب عکس" style="float:right;" onClick="BrowseServer(1);">
<input id="xFilePath1" type="text" class="input"  name="img[]" style="float:right; margin-right:20px;" readonly>
<img id="img_xFilePath1" style="width:100px; height:100px; float:left; margin-left:100px;" src="">
<a style="cursor:pointer; color:red; margin-right:7px;" onClick="remove_img(1);">حذف</a>

</div><!--row-->


</div><!--gallery-->

<button>ذخیره تصاویر</button>


</form>


<div class="row">

<a style="color:#07AD15; cursor:pointer;" onClick="add_img();"> افزودن عکس جدید </a>

</div><!--row-->



<?php 

}//step2

else if(isset($_GET['step3'])){
	
	
	$vir=0;
	if(isset($_GET['virayesh'])){$vir=1;}//if
	
	$sql="select * from tblmahsool where id=?";
	$arr=array($_GET['idmahsool']);
	$res=$object->select($sql,$arr);
	$dasteid=$res[0]['dasteid'];
	
	$sql="select * from tblvijegi where iddaste=? and parent=0";
	$arr=array($dasteid);
	$res=$object->select($sql,$arr);
	
	
	
?>

<form action="action.php?action=mahsool_vijegi&idmahsool=<?php echo $_GET['idmahsool']; ?>&virayesh=<?php echo $vir; ?>" method="post">


<P>تعیین ویژگی های محصول:</P>

<?php
foreach($res as $row){
?>

<h3 style="text-align:right; padding-right:10px;"><?php echo $row['title']; ?></h3>


<?php
$sql2="select * from tblvijegi where parent=?";
$arr=array($row['id']);
$res2=$object->select($sql2,$arr);
foreach($res2 as $row2){
	
	$sql3="select * from tblvijegi_mahsool where idvijegi=? and idmahsool=?";
	$arr3=array($row2['id'],$_GET['idmahsool']);
	$res3=$object->select($sql3,$arr3);
?>

<div class="row">
<span class="side"><?php echo $row2['title']; ?></span>
<input type="text" style="width:150px;"  name="vijegi<?php echo $row2['id']; ?>" value="<?php echo $res3[0]['val']; ?>">
</div><!--row-->



<?php
}//foreach zirvijegi
}//foreach vijegi asli
 ?>

<div class="row">
<button>ذخیره ویژگی ها</button>
</div>


</form>


<?php } ?>

<script>

$("textarea[name=tozihat],textarea[name=takmili]").ckeditor();

</script>



<?php
}//if

else{
?>


<?php

if(isset($_GET['ok'])){echo '<p style="color:#0f0;">محصول با موفقیت اضافه شد</p>';};

?>
<script></script>

<a href="index2.php?item=mahsoolat&new" style="text-align:left; display:block; color:#23D308; padding:10px;">افزودن محصول جدید</a>




<div class="row">

<form action="index2.php" method="get">

<input type="hidden" name="item" value="mahsoolat">


<span>کد محصول:</span>
<input type="text" name="code_mahsool" value="<?php if(isset($_GET['code_mahsool'])){ echo $_GET['code_mahsool'];} ?>">

<span style="margin-right:10px;">عنوان محصول:</span>
<input type="text" name="title" value="<?php if(isset($_GET['title'])){ echo $_GET['title'];} ?>">


<span style="margin-right:10px;">دسته محصول:</span>


<select type="text" name="daste">
<?php
$sql="select * from tblmenu";
$res=$object->select($sql);

$dasteid='';
if(isset($_GET['daste'])){$dasteid=$_GET['daste'];}

foreach($res as $row){
	
	$selected='';
	if($row['id']==$dasteid){$selected='selected';}
echo '<option value="'.$row['id'].'" '.$selected.'>'.$row['title'].'</option>';

}
?>
</select>



<input type="submit" name="search" value="جست و جو">


</form>

</div>







<form action="" method="post" id="frm">

<table border="1" cellpadding="4" cellspacing="3" style="float:right;">

<thead>
<th>کد محصول</th>
<th>عنوان محصول</th><th>تعداد خرید</th><th>مشخصات</th><th>گالری</th><th>ویژگی ها</th><th>وضعیت محصول</th><th>تغییرات</th>
</thead>

<?php

$q="";
$q1='';
$q2='';

if(isset($_GET['search'])){
	
	$code_mahsool=$_GET['code_mahsool'];
	$title=$_GET['title'];
	$daste=$_GET['daste'];
	$q=" where ";
	
	
	if(!empty($code_mahsool)){$q=$q." id=".$code_mahsool." ";$q1=1;}
	
	if(!empty($title)){
		
		if($q1==''){
		$q=$q." title like '%".$title."%'  ";
		}
		else{
			$q=$q." and title like '%".$title."%'  ";
			}
		$q2=1;
		}
		
		
		if(!empty($daste)){
		
		if($q1=='' and $q2==''){
		$q=$q." dasteid=".$daste."  ";
		}
		else{
			$q=$q." and dasteid=".$daste."  ";
			}
		
		}
	
	
	
	}



echo $sql="select * from tblmahsool ".$q." order by id desc";
$res=$object->select($sql);
foreach($res as $row){
	
	$tedad=0;
	$sql2="select * from tblsabad where idmahsool=? and pardakht=?";
	$arr=array($row['id'],1);
	$res2=$object->select($sql2,$arr);
	foreach($res2 as $row2 ){$tedad=$tedad+$row2['tedad'];}
	$disable=$row['disable'];
	if($disable==0){$disable2='فعال';}
	else{$disable2='غیر فعال';}
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td><td><?php echo $tedad; ?></td><td><a href="index2.php?item=mahsoolat&new&virayesh&idmahsool=<?php echo $row['id']; ?>">ویرایش</a></td><td><a href="index2.php?item=mahsoolat&new&step2&idmahsool=<?php echo $row['id']; ?>&virayesh">ویرایش</a></td><td><a href="index2.php?item=mahsoolat&new&step3&idmahsool=<?php echo $row['id']; ?>&virayesh">ویرایش</a></td><td><?php echo $disable2; ?></td><td> <input type="checkbox" name="mahsool[]" value="<?php echo $row['id']; ?>"> </td>
</tr>

<?php
}

}//if

?>

</table>

<div class="row" style="padding-bottom:100px;">

<p>سطرهای انتخاب شده را:</p>

<script>

function change_action(act){$("#frm").attr('action',act);}//function

</script>


<p><button onClick="change_action('action.php?action=delete_mahsoolat');" style="color:red;" >حذف کن</button></p>

<p><button onClick="change_action('action.php?action=disable_mahsoolat');">غیرفعال کن</button></p>

<p><button onClick="change_action('action.php?action=active_mahsoolat');">فعال کن</button></p>

</div>

</form>













