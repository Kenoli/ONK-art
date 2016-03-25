<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Thumbnail Image Gallery</title>

<LINK REL=StyleSheet HREF="<?=$style; ?>" TYPE="text/css" MEDIA=screen>

</head>

<body>

<div id="container">

<span class="onkhead" >OUR NIGHT KITCHEN</span>

<h3 id="header" >The following Series are available for <?=$sname; ?>.  Please select one by clicking on image.</h3>

<ul class="thumbwrap">
<?=$list; ?>
</ul>

<!-- <p>&nbsp;</p> -->

<div  class="rightHeader"><h1>Our Night Kitchen</h1></div>
<div  class="rightHeader"><h2><?=$page_description;?></div>

</div>

</body>
</html>