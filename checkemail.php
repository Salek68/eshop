<?php

$email=$_POST['email'];

include('connect.php');

$sql="select * from tblozv where email='".$email."' ";

$stmt=$db->prepare($sql);

$stmt->execute();

$num=$stmt->rowCount();

echo $num;





?>