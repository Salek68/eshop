<?php

$idostan=$_POST['idostan'];

include('connect.php');

$sql="select * from tblshahr where idostan=".$idostan." ";

$stmt=$db->prepare($sql);

$stmt->execute();

echo '<option value="0">انتخاب شهر</option>';

while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
	
	$nameshahr=$result['name'];
	
	$id=$result['id'];
	
	echo'<option value="'.$id.'">'.$nameshahr.'</option>';
	
	
	}



?>