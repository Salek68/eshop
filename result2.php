<?php
$keyword=$_POST['keyword'];
$iddaste=$_POST['iddaste'];


include('myfirstclass.php');

$object=new class_parent;


$sql="select * from tblmahsool where title like '%".$keyword."%' and dasteid=".$iddaste." ";
$result=$object->select($sql);

echo json_encode($result);



?>