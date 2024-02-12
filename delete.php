<?php

$id=$_POST['id'];

include('connect.php');

$sql="delete from tblsabad where idmahsool=".$id." and cookiename='".$_COOKIE['mybasket']."' ";

$stmt=$db->prepare($sql);

$stmt->execute();

?>