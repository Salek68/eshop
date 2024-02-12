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

include('myfirstclass.php');
$object=new class_parent;

include('top.php');

?>



<div id="undermenu" style="width:100%; background:#CFFCFC; height:340px;">


<div id="undermenu1" style="width:1100px; margin:0 auto; height:100%; position:relative; ">




<?php


include('slide.php');

?>


<?php


include('jadidtarinha.php');

?>





</div><!--undermenu1-->


</div><!--undermenu-->


<style>

#underslide{width:100%; background:#eee; float:right;}

#underslide1{width:1100px; background:#fff; margin:0 auto; overflow:hidden;}


</style>


<div id="underslide">

<div id="underslide1">

<?php

include('right.php');


?>




<?php

include('left.php');


?>





</div><!--underslide1-->



</div><!--underslide-->



</body>



</html>