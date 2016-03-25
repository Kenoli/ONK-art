<?php

//include_once ('../Page-new.php');

//$id = 2;
//$content = $p->item($id);

$href = "image.php?id={$content['id']}&img=artwork/{$content['image_directory']}/full_img/{$content['image_name']}_full.png";
$src = "artwork/{$content['image_directory']}/item_img/{$content['image_name']}_600.png";
$cssfile = "strange.css";

if (!isset($content)) {

$content['image_directory'] = "elsa_marley";
$content['image_name'] = "the-sitter-1";
$content['title'] = "Sitter 1";
$content['name'] = "Elsa Marley";
$content['media'] = 'Acrylic, ink, mixed media';
$content['description'] = "Giclee print rolled up in tube.";

$cssfile = "../strange.css";

$href = "../image.php?img=artwork/{$content['image_directory']}/full_img/{$content['image_name']}_full.png";
$src = "../artwork/{$content['image_directory']}/item_img/{$content['image_name']}_600.png";


}

//echo "\$src = $src<br/><br/>";



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Thumbnail Image Gallery</title>

<LINK REL=StyleSheet HREF="<?=$cssfile; ?>" TYPE="text/css" MEDIA=screen>

</head>

<body>

<form>

<input type="textarea" cols="20" rows="6" />



</form>



<form>

<input type="textarea" cols="20" rows="6" />



</form>


<form method='post' action='mailform.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>


</div>
</div>

</body>
</html>