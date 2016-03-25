<?php

$img = $_GET['img'];
$id = $_GET['id'];
$href = "../index.php?opt=item&id=$id&tpl=tpl_item";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Sitter 1</title>

<style text/css>

body { 
	background-color: black;
	/* color: white; */
	margin: 60px;
	}
	
a img {
	padding:1px;
    border:1px solid #999;
	}

</style>

</head>
<body>

<a href="<?=$href; ?>"><img src="<?=$img; ?>" /></a>
<!-- <p><a href="item.php">RETURN</a></p> -->

</body>
</html>