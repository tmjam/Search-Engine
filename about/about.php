<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Displaying result</title>
  <link rel="stylesheet" href="../animated-menu.css"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.2r1/build/grids/grids-min.css">

    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
    <script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="../animated-menu.js" type="text/javascript"></script>
     <!-- Load JavaScript files -->
<script type='text/javascript' src='../js/jquery(2).js'></script>
<script type='text/javascript' src='../js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='../js/contact.js'></script>

<!-- Contact Form CSS files -->
<link type='text/css' href='../css/contact.css' rel='stylesheet' media='screen' />

<!-- JS files are loaded at the bottom of the page -->
<style type="text/css">
td
{
text-align:center;
padding:10px;
}
#cont {
	position: absolute;
	width:100%;
	margin:auto;
	left: 11px;
	top: 17px;
}

.left{
	background-color:#F2F2F2;
	padding: 15px;
	font-size:12px;



}
.center{
	background-color: #F2F2F2;
	padding: 15px;
	font-size:12px;
	
	
}
.right{
	background-color: #F2F2F2;
	padding: 15px;
	font-size:12px;	
	

}
</style>
</head>

<body>
 <div id="cont">
    <ul>
  <li class="green">
            <p><a href="../index.php">Home</a></p>
            <p class="subtext">The front page</p>
        </li>
  <li class="yellow">
            <p><a href="#">About</a></p>
            <p class="subtext">More info</p>
        </li>
  <li class="red">
  			<div id='container'>
            <div id='content'>
			<div id='contact-form'>
	
            <p><a href="#" class='contact'>Contact</a></p>
            <p class="subtext">Get in touch</p>
            </div>
            <div style='display:none'>
			<img src='../img/contact/loading.gif' alt='' />
		</div>
	</div>
   
        </li>
  <li class="blue">
            <p><a href="../CSS_gallery/index.php">Gallery</a></p>
            <p class="subtext">See our stuff!</p>
        </li>
  <li class="purple">
            <p><a href="#">Terms</a></p>
            <p class="subtext">Legal things</p>
        </li>
      <li class="new">
        <form method="GET" action="../search.php">
<div align="center" style="border:thick; background-color:#0292C0; padding: 12px; position: relative">

<input type="text" id="search" size="41" align="middle" width="300" name="search"/>
<select class="category" name="category">
<option>Select Category</option>
<option>Product name</option>
<option>Manufacturer's name</option>
<option>Model</option>
<input type="submit" value="Go"/>
</select>
</div>
</form>
        </li>
    </ul>
</div>
<br /><br />
<br />
<br />
<br />
</div>
<br><br>
<div class="include" style="height:600px; position: inherit;">
<?php 
include("search.php"); 
?>
</div>

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




</body>
</html>
