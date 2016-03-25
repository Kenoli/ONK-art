<!DOCTYPE html> <!-- start.php -->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="author" content="Flux User" >
<meta name="description" content="My Website" >
<meta name="keywords" content="Flux, Mac" >
<meta name="flux-custom-url" content="http://localhost/~studio/ournightkitchen-staging/" >

<title>Our Night Kitchen</title>

<link href="__css/splashStyles.css" rel="stylesheet" media="screen" type="text/css" >
<link href="__css/ss_main.css" rel="stylesheet" media="screen" type="text/css" >

<style text/css>
	
	/*html { 
	background: url(__images/background/ONK_back.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}*/

#s-bg {
	position:fixed; 
	top:0; 
	left:0; 
	z-index:-4;
	/* Preserve aspet ratio */
	min-width:100%;
	min-height:100%;
}
	
</style>

<!--[if lte IE 8]>
<style type="text/css">
body {
-ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='__images/background/ONK-back.jpg', sizingMethod='scale')";
filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='__images/background/ONK-back.jpg', sizingMethod='scale');
}
</style>
<![endif]-->

</head>

<body>

<div id="statement">

<p><a href="index.php?opt=sg&cid=2&creator_name=Sharon%20Goods&style=ss_sharon.css">Home</a></p>
<?=$content['statement']; ?>

</div>

<!-- <img src="__images/background/invite_test.jpg" id="s-bg" > -->
	

</body></html>