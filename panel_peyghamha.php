

<div id="col-left">



<div style="height:auto; text-align:right; float:right; direction:rtl;">

<?php


include('connect.php');

if(isset($_GET['idpeygham'])){

$sql="select * from tblpm where id=".intval($_GET['idpeygham'])." and idozv=".$userid." ";

$stmt=$db->prepare($sql);

$stmt->execute();

$num=$stmt->rowCount();

$result=$stmt->fetch(PDO::FETCH_ASSOC);

if($num>0){
echo 'متن پیغام:'.$result['matn'];

}/*if*/


$sql="update tblpm set khande=1 where id=".intval($_GET['idpeygham'])." and idozv=".$userid." ";

$stmt=$db->prepare($sql);

$stmt->execute();



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





<table id="table1" border="2">

<thead><th>کد پیغام</th><th>موضوع پیغام</th><th>تاریخ پیغام</th><th>وضعیت خوانده شدن</th></thead>



<tbody>

<?php


include('connect.php');

$sql="select * from tblpm where idozv=".$userid." order by id desc";

$stmt=$db->prepare($sql);

$stmt->execute();

$tedad_pm=$stmt->rowCount();


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
	
	if($result['khande']==0){$khande="img/unread.png";}
	if($result['khande']==1){$khande="img/read.png";}
	
	
	echo'<tr><td>'.$result['id'].'</td><td>
	<a href="panel.php?item=peyghamha&idpeygham='.$result['id'].'">'.$result['title'].'</a>
	</td><td>'.$result['tarikh'].'</td><td id="khande"><img src="'.$khande.'"></td></tr>';
	
	}/*if*/
	
	$m++;
	
	}/*while*/



?>



</tbody>


</table>

</div><!--table-->

<style>
#paging a{ float:right; padding:5px; text-align:center; background:red; margin-right:4px; color:#fff;}

</style>


<div id="paging" style="height:auto; text-align:right; float:right;">

<?php

for($i=1;$i<=$tedad_page;$i++){
	
	if($i==$page){$background="background:#0f0;";}
	else{$background="";}
	
	echo '<a style="'.$background.'" href="panel.php?item=peyghamha&page='.$i.'">'.$i.'</a>';
	
	
	}


?>




</div><!--paging-->













</div><!--col-left-->