<?php

$mobile=$_POST['mobile'];

include('connect.php');

$sql="select * from tblozv where mobile='".$mobile."' ";

$stmt=$db->prepare($sql);

$stmt->execute();

$num=$stmt->rowCount();

echo $num;





?>