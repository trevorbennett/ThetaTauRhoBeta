<?php include('inc/html.php');
$imgUrl = 'http://img.gawkerassets.com/img/17o9jz54r7tntjpg/original.jpg';  ?>
<title>Home Page</title>
<?php include('inc/head.php'); ?>
<a href=http://ohiothetatau.com>main page</a>
<a href=http://ohiothetatau.com/email>email redirect</a>
<a href=http://ohiothetatau.com/docs/Handout.pdf>Direct link test (Appearently capitalization matters)</a>
<div></div>
<?php
for($i = 0;$i<=10;$i++){
?><img src="<?php echo $imgUrl ?>" width="215" height="155"/><?php
for($j = 0;$j<=$i;$j++){
?><img src="<?php echo $imgUrl ?>" width="55" height="30"/><?php
for($k = 0;$k<=$j;$k++){
?><img src="<?php echo $imgUrl ?>" width="12" height="9"/><?php 
for($l = 0;$l<=$k;$l++){
?><img src="<?php echo $imgUrl ?>" width="4" height="3"/><?php
 }
 }
 }
 ?><div></div><?php
 }
 ?>
<?php include('inc/foot.php'); ?>