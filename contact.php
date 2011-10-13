<!--
	Created by : Taussef Jamadar, David Stolp, Abhishek Iyer
	Gives the details for contact for each team member
	
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Displaying result</title>
  <link rel="stylesheet" href="animated-menu.css"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.2r1/build/grids/grids-min.css">
<!-- Jquery basic script  added -->
    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="animated-menu.js" type="text/javascript"></script>
<style type="text/css">

/*css for the style same as other documents*/
td
{
text-align:center;
padding:10px;
}
#cont {
position: absolute;
width:100%;
margin:auto;
}

.left{
	background-color:#777;
	padding: 5px;

}

.center{
	background-color: #996;
	padding: 5px;
	
}
.right{
	background-color: #0C3;
	padding: 5px;

}
</style>
</head>

<body>
 <div id="cont">
    <ul>
  <li class="green">
            <p><a href="index.php">Home</a></p>
            <p class="subtext">The front page</p>
        </li>
  <li class="yellow">
            <p><a href="#">About</a></p>
            <p class="subtext">More info</p>
        </li>
  <li class="red">
            <p><a href="#">Contact</a></p>
            <p class="subtext">Get in touch</p>
        </li>
  <li class="blue">
            <p><a href="#">Submit</a></p>
            <p class="subtext">Send us your stuff!</p>
        </li>
  <li class="purple">
            <p><a href="#">Terms</a></p>
            <p class="subtext">Legal things</p>
        </li>
      <li class="new">
        <form method="POST" action="search.php">
<div align="center" style="border:thick; background-color:#6AA63B; padding: 12px; position: relative">

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
<div style="background-image:url(images/main-bg.png); padding:50px; background-repeat:repeat-x;">

</div>

<div id="contact form">    
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
