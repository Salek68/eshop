<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه اینترنتی</title>

<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/cycle.js"></script>



</head>

<body style="margin:0; padding:0;">




<?php

include('top.php');

include('myfirstclass.php');

$object=new class_parent;

?>



<style>

#underslide{width:100%; background:#CEF8F6; float:right;}

#underslide1{width:1100px; background:#fff; margin:0 auto; overflow:hidden;}


</style>


<div id="underslide">



<div id="underslide1">


<style>

.row{width:100%; height:32px; background:#ccc;}

</style>

<div class="row">


<?php

if(isset($_GET['iddaste'])){
	
	$iddaste=intval($_GET['iddaste']);
	$parenta='';
	$parentb='';
	$parentc='';
	$sql="select * from tblmenu where id=".$iddaste." ";
	$res=$object->select($sql);
	if(isset($res[0])){
	$iddastec=$iddaste;	
	$titlec=$res[0]['title'];
	$parentc=$res[0]['parent'];
	}
	
	$sql="select * from tblmenu where id=".$parentc." ";
	$res=$object->select($sql);
	if(isset($res[0])){
	$iddasteb=$res[0]['id'];	
	$titleb=$res[0]['title'];
	$parentb=$res[0]['parent'];
	}
	

	$sql="select * from tblmenu where id=? ";
	$arr=[$parentb];
	$res=$object->select($sql,$arr);
	if(isset($res[0])){
	$iddastea=$res[0]['id'];	
	$titlea=$res[0]['title'];
	$sath_sevom='';
	}

	
	
	
	}


?>



<a style="float:right;margin-top:4px;margin-right:7px; color:#fff; text-decoration:none; font-family:tahoma; font-size:12px;" href="search.php">
محصولات

</a>


<?php if(isset($titlea)){   ?>

<img style="float:right;margin-top:9px;margin-right:7px" src="img/arrow.png">

<a style="float:right;margin-top:4px;margin-right:7px; color:#fff; text-decoration:none; font-family:tahoma; font-size:12px;" href="search.php?iddaste=<?php echo $iddastea; ?>">
<?php echo $titlea; ?>
</a>

<?php } ?>


<?php if(isset($titleb)){   ?>

<img style="float:right;margin-top:9px;margin-right:7px" src="img/arrow.png">

<a style="float:right;margin-top:4px;margin-right:7px; color:#fff; text-decoration:none; font-family:tahoma; font-size:12px;" href="search.php?iddaste=<?php echo $iddasteb; ?>">
<?php echo $titleb; ?>
</a>

<?php } ?>


<?php if(isset($titlec)){   ?>

<img style="float:right;margin-top:9px;margin-right:7px" src="img/arrow.png">


<a style="float:right;margin-top:4px;margin-right:7px; color:#fff; text-decoration:none; font-family:tahoma; font-size:12px;" href="search.php?iddaste=<?php echo $iddastec; ?>">
<?php echo $titlec; ?>
</a>

<?php } ?>


</div>


<?php

include('search-right.php');


?>




<?php

include('search-left.php');


?>





</div><!--underslide1-->



</div><!--underslide-->



</body>



</html>