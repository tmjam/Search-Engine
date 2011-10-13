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

    <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="animated-menu.js" type="text/javascript"></script>
     <!-- Load JavaScript files -->
<script type='text/javascript' src='js/jquery(2).js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/contact.js'></script>

<!-- Contact Form CSS files -->
<link type='text/css' href='css/contact.css' rel='stylesheet' media='screen' />

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
            <p><a href="index.php">Home</a></p>
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
			<img src='img/contact/loading.gif' alt='' />
		</div>
	</div>
   
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
<br />
<br />
</div>

<div id="doc3" class="yui-t3">
	
   	<div class="yui-gb">
    	    <div class="yui-u first" style="width: 20%;">
            <div class="left">
	        <p align="center">Images</p><hr>

            <p align="center"><img src="images/check.png" width="48" height="48" align="middle"></p>
</div></div>	
            <div class="yui-u"  style="width: 50%;">
              <div class="center">
            <p align="center"> Description</p><hr>

</div></div>
			<div class="yui-u"  style="width: 26%;">
              <div class="right">
            <p align="center">Price</p><hr>

      </div></div>
    </div>


    
</div>


<?php
$user_id="tauseef";
		$username="root";
        //$password="admin";
        $database="search";
        mysql_connect("localhost",$username,"");
        @mysql_select_db($database) or die( "Unable to select database");
 error_reporting (E_ERRORS);
      
?>




<?php
mysql_query("INSERT INTO keyword(`key`) VALUES('".$_POST["search"]."')");
?>
<?php
$search_criteria = $_POST["search"];
$category = $_POST["category"];
//echo $search_criteria;
//echo $category;
$size = 0;

//$mysql_query("SELECT * FROM keyword");

$i=0;
/*$url = "http://www.deals2buy.com/";
$message = "error";
$the_page = fopen($url, "r");
//$mysql_query("INSERT INTO keyword VALUES('$size','$search_criteria')");
while(!feof($the_page))
{
  $each_line = fgetss($the_page, 4096);
  //$query = "INSERT INTO keyword VALUES('$size','$search_criteria')";
  
 // echo $each_line;
    if(eregi($search_criteria, $each_line, $results))
   {
       

        //print_r($result);
      // for each line where there is a match, increment a counter
      $size++;
      //echo fgetss($the_page, 4096);
      //echo "\n";
//print_r($results);
   }
}
fclose($the_page);
print("found $size ocurrences of $search_criteria at $url");
*/
?>


</body>
</html>
