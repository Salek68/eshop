<?php
ob_start();
session_start();

if(!isset($_SESSION['check'])){header('location:index.php');}

include('../myfirstclass.php');
$object=new class_parent;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/adapters/jquery.js"></script>
<script src="ckeditor/ckfinder/ckfinder.js"></script>

<script>

var index='';
var indexget='';
function BrowseServer(index)
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	
	indexget=index;
	var finder = new CKFinder();
	finder.basePath = "/";	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField;
	finder.popup();
};


// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField(fileUrl)
{	
   
	document.getElementById( "xFilePath"+indexget+"" ).value = fileUrl;
	$("#img_xFilePath"+indexget+"").attr('src',fileUrl);
	
};



</script>


</head>

<body>

<div id="main" style="width:1000px; margin:0 auto; text-align:center;">


<style>

.right{width:190px; float:right; border:1px solid #ccc; }
.left{width:780px; float:left; border:1px solid #ccc;}
.right a{display:block;border-bottom:1px solid #000; padding:10px;}
body{font-family:tahoma; font-size:12px; }
#main{direction:rtl;}
table{width:100%;}
option,select,button,input{font-family:tahoma; font-size:12px;}

</style>



<h3>مدیریت محصولات</h3>


<div id="menu" class="right">

<a href="index2.php?item=mahsoolat">مدیریت محصولات</a>

<a href="index2.php?item=sefareshat">مدیریت سفارشات</a>

</div><!--right-->


<div class="left">


<?php
$item=$_GET['item'];
if($item=='mahsoolat'){include('index2_mahsoolat.php');}
if($item=='sefareshat'){include('index2_sefareshat.php');}


?>


</div><!--left-->



</div><!--main-->


</body>




</html>


















