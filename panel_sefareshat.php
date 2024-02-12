

<div id="col-left">



<div style="height:auto; text-align:right; float:right; direction:rtl; background:#fff;">

<?php


include('connect.php');

if(isset($_GET['idsefaresh'])){

$sql="select * from tblsefaresh where id=".intval($_GET['idsefaresh'])." and ozv='".$_SESSION['email']."' and pardakht=1 ";

$stmt=$db->prepare($sql);

$stmt->execute();

$num=$stmt->rowCount();

$result=$stmt->fetch(PDO::FETCH_ASSOC);

$arr_idsabad=unserialize($result['idsabad']);

if($num>0){

echo 'جزییات سفارش:<br>';

foreach($arr_idsabad as $idmahsool=>$tedad){
		
	$sql2="select * from tblmahsool where id=? ";
	$arr=[$idmahsool];
	$res3=$object->select($sql2,$arr);
	
	echo '
	<p style="text-align:right; float:right; margin-top:7px; width:100%; ">'.$res3[0]['title'].' تعداد :'.$tedad.'</p>';
	
		
	
}



}/*if*/




}/*isset*/

?>
	



</div>





<div style="height:auto; text-align:right; float:right;">

<style>

#table1{float:right; direction:rtl;}

#table1 td{padding:15px;}

#table1 th{text-align:center;}

#khande{text-align:center;}


</style>



<?php


include('connect.php');

$sql="select * from tblsefaresh where ozv='".$_SESSION['email']."' and pardakht=1 order by id desc";

$stmt=$db->prepare($sql);

$stmt->execute();

$tedad_pm=$stmt->rowCount();


$tedad_page=0;

if($tedad_pm>0){


?>




<table id="table1" border="2">

<thead><th>کد سفارش</th><th>تاریخ سفارش</th><th>وضعیت سفارش</th><th>مشاهده سفارش</th></thead>



<tbody>

<?php



$tedad_dar_page=2;

$tedad_page=($tedad_pm)/($tedad_dar_page);

$tedad_page=ceil($tedad_page);

$m=1;

if(isset($_GET['page'])){
	
$page=intval($_GET['page']);

}
else{$page=1;}
$start=($tedad_dar_page)*($page-1)+1;

$end=$start+$tedad_dar_page-1;



while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	if($m>=$start and $m<=$end){

	
	echo'<tr><td>'.$result['id_sefaresh'].'</td><td>'.$result['tarikh'].'
	</td><td>'.$result['vaziat'].'</td><td><a href="panel.php?item=sefareshat&idsefaresh='.$result['id'].'">مشاهده</a></td></tr>';
	
	}/*if*/
	
	$m++;
	
	}/*while*/



?>



</tbody>


</table>

<?php
}//if


else{
	
echo '<p> شما هیچ سفارشی را تا کنون ثبت نکرده اید</p>';	
	
	}

?>

</div><!--table-->

<style>
#paging a{ float:right; padding:5px; text-align:center; background:red; margin-right:4px; color:#fff;}

</style>


<div id="paging" style="height:auto; text-align:right; float:right;">

<?php

for($i=1;$i<=$tedad_page;$i++){
	
	if($i==$page){$background="background:#0f0;";}
	else{$background="";}
	
	echo '<a style="'.$background.'" href="panel.php?item=sefareshat&page='.$i.'">'.$i.'</a>';
	
	
	}


?>




</div><!--paging-->













</div><!--col-left-->