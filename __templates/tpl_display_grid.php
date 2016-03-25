<!DOCTYPE html>  <!-- tpl_display_grid.php -->
<html lang="en" >
<head>

<meta charset="utf-8" / >
<title><?=$title; ?></title>
<link rel="stylesheet" type="text/css" href="__css/ss_main.css">

</head>
<body>
<div id="container">
<div id="page_head" >My Night Kitchen</div>
<div id="artist">Artwork by Sharon Goods&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?opt=statement" >Artist Statement</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?opt=contact" >Contact</a></div>
<div id="sub_head" ><?=$sub_head; ?> <span id="sub_sub_head" ><?=$sub_sub_head; ?></span></div><br/>


<div class="portfolio">

<ul id="grid">
<?=$list; ?>
</ul>

</div> <!-- portfolio -->
</div> <!-- Container -->

</body>
</html>
