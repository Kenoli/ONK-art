<!DOCTYPE html>
<!-- tpl_item_TG.php -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $title; ?></title>


<LINK rel="styleSheet" type="text/css" href="__css/ss_main.css" />


<!--[if lt IE 8]><style>
.thumbwrap li {
	width: 201px;
	w\idth: 199px;
	display: inline;
}
.thumbwrap {
	_height: 0;
	zoom: 1;
	display: inline;
}
.thumbwrap li .wrimg {
	display: block;
	/* evita hasLayout per background position */
	width: auto;
	height: auto;
}
.thumbwrap .wrimg span {
	vertical-align: middle;
	height: 199px;
	zoom: 1;
}
</style><![endif]-->
</head>

<body>
<div id="container">
<div id="page_head" >My Night Kitchen</div>
<div id="artist">Artwork by Sharon Goods&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?opt=statement" >Artist Statement</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?opt=contact" >Contact</a></div>

<div id="leftcolumn">
<a href="<?=$_SERVER['HTTP_REFERER']; ?>"><img src="<?=$content['image']; ?>" width="180" ></a>
</div>

<div id="rightcolumn">
<h3><span class="category">Title:</span> <?=$content['title']; ?></h3>
<h3><span class="category" >Artist:</span> <?=$content['creator']; ?></h3>
<h3><span class="category" >Media:</span> <?=$content['media']; ?></h3>
<h3><span class="category" >Support:</span> <?=$content['support']; ?></h3>
<h3><span class="category" >Dimensions:</span> <?=$content['dimensions']; ?></h3>
<h3><span class="category" >Giclees:</span> Fine art reproductions available<br/>in custom sizes and enlargements.</h3>
<p><?=$content['versions']; ?></p>
<!-- <p><a href="form/email_form.php" class="purchase" >Click here</a> for information or purchase request. Thank you.</p> -->
</div>

<!-- <div class"clear"></div> -->

<!-- <div id="footer">
<h1>My Night Kitchen</h1>
<!-- <h2><?=$content['title']; ?></h2>
</div> -->

</div>


</body>
</html>