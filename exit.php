<?php
session_start();

unset($_SESSION['email']);

setcookie('remember','1',time()-3600,'/');

header('location:login.php');


?>