<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Review Page</title>
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
<script type='text/javascript' src='js/script.js'></script>


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

.priceValues{
	padding: 28px;
	text-align:center;
}


.yui-gb img{
	width: 80px;
	height: 80px;
	margin-left: 50px;
	padding:30px;
}
.images{
	width: 130px;
	height: 130px;
	padding:20px;

}

#descPara{
	position: relative;
	padding: 20px;
}

#dealLink{
	color: RED;
}

.center{

	background-color: #F2F2F2;
	padding: 10px;
	font-size:12px;

}

.right{
	background-color: #F2F2F2;
	padding: 25px;
	font-size:12px;	
}
td{
	text-align:justify;
}
.price{
	font-size:14px;
}
tr{
	
	font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
	color: #000000;
	letter-spacing: 1px;
	background-color:#DDD;
	
	
}

tr:hover{
	
	background: #AAA;

}
.header{
	background-color:#888;
	font-size:18px;
	text-transform:uppercase;
	
}
.next{
	background-color: #FF6;
	
}
.next:hover{
	background-color: #F60;
}
.prev{
	background-color: #FF6;
	
}
.prev:hover{
	background-color: #F60;
}
.navigate{
	list-style-position:outside;
}
.review{
	background-color:#FC6;
	width: 800px ;
  
}
#comment tr{
	background-color: #FFFFF;
}

#comment tr:hover{
	background-color: #DDDDD;
}

</style>
</head>

<body>
 <div id="cont">
    <ul>
  <li class="green">
            <p><a href="index.php">Home</p>
            <p class="subtext">The front page</a></p>
            
      </li>
  <li class="yellow">
            <p><a href="about/about.php">About</p>
            <p class="subtext">More info</a></p>
      </li>
  <li class="red">
  			<div id='container'>
            <div id='content'>
			<div id='contact-form'>
	
            <p><a href="#" class='contact'>Contact</p>
            <p class="subtext">Get in touch</a></p>
            </div>
            <div style='display:none'>
			<img src='img/contact/loading.gif' alt='jkjk' />
		</div>
	</div>
   
      </li>
  <li class="blue">
            <p><a href="#">Submit</p>
            <p class="subtext">Send us your stuff!</a></p>
      </li>
  <li class="purple">
            <p><a href="terms.php">Terms</p>
            <p class="subtext">Legal things</a></p>
      </li>
      <li class="new">
        <form method="GET" action="search.php">
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
<?php


	$product=$_GET["searchID"];
		
if(isset($_POST["data"]) && isset($_GET["searchID"])) 
{
		$product=$_GET["searchID"];
		
	$data = $_POST["data"];
	
	if($data !="" && $product!="") // to avoid blank comments
	mysql_query("INSERT INTO review(`Deal_ID`,`Review`) VALUES('".$product."','".$data."')");
}

$query=mysql_query("SELECT * FROM review WHERE Deal_ID=".$product." ");

$temp = mysql_fetch_array($query);
$cnt = mysql_query("SELECT * FROM review WHERE Deal_ID=".$product." ");
$count = mysql_num_rows($cnt);
if($count == 0)
{
	echo "No comments have been posted for this product. Please help others by posting some comment";
}

?>
<p align="center" class="review">
<form method="POST" action="review.php?searchID=<?php echo $product; ?>">
	<table align="center" border="0">
   <?php 
   $query=mysql_query("SELECT * FROM review WHERE Deal_ID=".$product." ");
    while($review=mysql_fetch_array($query)) 
   			{?>
            <tr>
           	  <td><img src="images/default_user.png" width="70" height="70" alt="default"></td>
                <td width="700"><hr><?php echo $review['Review']?><hr></td>
      </tr>
            <?php }?>
            </table>
            <table id="comment" align="center">
<tr>
        	<td>Comment: </td>
            <td width="400"><textarea type="text" rows="10" cols="80" id="data" name="data" maxlength="400" size="100"/>
            </textarea>
            </td>
        </tr>
        <tr align="right">
        	
            <td colspan="2"><input type="submit" /></td>
        </tr>
    </table>
</form>
</p>
</body>
</html>

