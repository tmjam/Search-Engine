<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">

<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>Search Gallery</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css 
href="gallery/demo.css"><LINK
rel=stylesheet type=text/css 
href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-darkness/jquery-ui.css" 
media=all><LINK rel=stylesheet type=text/css 
href="gallery/jquery.fancybox-1.2.6.css">
<SCRIPT type=text/javascript 
src="gallery/jquery.min.js"></SCRIPT>

<SCRIPT type=text/javascript 
src="gallery/jquery-ui.min.js"></SCRIPT>

<SCRIPT type=text/javascript 
src="gallery/jquery.fancybox-1.2.6.pack.js"></SCRIPT>

<SCRIPT type=text/javascript 
src="gallery/script.js"></SCRIPT>

</HEAD>
<BODY>
<DIV id=main>


<?php
       $username="tjamadar";
$password="jamadar";
$database="tjamadar";
mysql_connect("db.ecst.csuchico.edu:5551",$username,$password);
if(@mysql_select_db($database) )
echo " ";
else
echo "<h1>Connection Failure</h1>";

error_reporting (E_ERRORS);
?>
<DIV id=gallery>
<?php 
$deal = mysql_query("SELECT * FROM deal LIMIT 0,50");
$u=0;
while($allDeals = mysql_fetch_array($deal)){

?>


<DIV 
style="BACKGROUND: url(<?php echo $allDeals['Image_Link'];?>) no-repeat 50% 50%; TOP: <?php print rand(50, 360); ?>px; LEFT: <?php print rand(100, 900); ?>px; -moz-transform: rotate(<?php print rand(-360, 360); ?>deg); -webkit-transform: rotate(<?php print rand(-360, 360);;?>deg)" 
id=pic-16 class=pic><A class=fancybox 
href="<?php echo $allDeals['Image_Link'];?>"
rel=fncbx target=_blank>whoooosh</A> </DIV>
<DIV class=drop-box></DIV></DIV>
<DIV class=clear></DIV>
</DIV>
<?php }
?>
</BODY></HTML>
