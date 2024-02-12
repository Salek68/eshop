<?php

include('connect.php');

$id=$_GET['id'];

 $sql="select * from tblozv where id=:x ";

$stmt=$db->prepare($sql);


$stmt->execute(array(":x"=>$id));

$result=$stmt->fetch(PDO::FETCH_ASSOC);

print_r($result);



?>