<!--
	Page that displays all the information about the products searched and displays the information by descending order of price
	Created by : Tauseef jamadar, David Stolp, Abhishek Iyer
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
	padding: 15px;
	font-size:12px;
	
	
}
.right{
	background-color: #F2F2F2;
	padding: 15px;
	font-size:12px;	
}

#previewWin {
	background-color: #FF9;
	width: 150px;
	height: 200px;
	font: .6em arial, helvetica, sans-serif;
	padding: 5px;
	position: absolute;
	visibility: hidden;
	border: 1px #CC0 solid;
	overflow: hidden;
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
            <p><a href="about/about.php">About</a></p>
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
$search_criteria = $_POST["search"];
$category = $_POST["category"];
if(isset($_GET["query"]))
{

$search_criteria = $_GET["query"];
echo $search_criteria;
}
$result = mysql_query("SELECT * FROM product WHERE Name LIKE  '%".$search_criteria."%' ");

$num_rows_result = mysql_num_rows($result);
 while($row = mysql_fetch_array($result))
  		{
			?>
      <div id="doc3" class="yui-t3">
	
   	<div class="yui-gb">
    	    <div class="yui-u first" style="width: 20%;">
            <div class="left"><hr>
	        <p align="center"><?php echo "'".$row["Name"]."'\n";?></p><hr>
            <p id="product1"></p>
            <?php
			 $deal = mysql_query("SELECT * FROM deal WHERE Product_ID = '".$row['Product_ID']."' ");
			  while($allDeals = mysql_fetch_array($deal)){


$img = $allDeals['Image_Link'];
//Select the default image if there is no image entry found for the product
			if($img == null)
			$img = "http://files.sharenator.com/d_silhouette2_Alternatives_to_your_Default_Facebook_Profile_Picture-s200x126-60695-580.jpg"; 
?>
			
			  <img src="<?php echo $img; ?>"/><br><hr>
			  <?php }
			  ?> </p>
             
            <p align="center"></p>
</div></div>
			<p align="center"></p>	
            <div class="yui-u"  style="width: 50%;">
              <div class="center"><hr>
            <p align="center"> <?php echo "'".$row["Description"]."'\n";?></p><hr>
            <?php
			 $nayadeal = mysql_query("SELECT * FROM deal WHERE Product_ID = '".$row['Product_ID']."' ");
			  while($allDeals = mysql_fetch_array($nayadeal)){?>
              
			  <p id="descPara"> Go to Deal <a id="dealLink" href="http://<?php echo $allDeals["Deal_Link"]; ?>">Click Here  </a><br>
			<?php echo $allDeals['Name'] .":" . $allDeals['Description']; ?>  <br><hr>
			  <?php }
			  ?> </p>
           	<p align="center"></p>

</div></div>
			<div class="yui-u"  style="width: 26%;">
              <div class="right"><hr>
            <p align="center">Price</p><hr>

			<?php
			 $deal2 = mysql_query("SELECT * FROM deal WHERE Product_ID = '".$row['Product_ID']."' ");
			  while($allDeals = mysql_fetch_array($deal2)){?>
   			 <p class="priceValues"><?php echo "$".$allDeals['Price']; ?> <br><hr></p>
			  <?php }
			  ?>
      </div></div>
    </div>


    
</div>      
			
          
           
			
	<?php	}
$data = mysql_result($key);
$size = 0;


$i=0;
?>
<?php
if($_POST["search"])
mysql_query("INSERT INTO keyword(`key`) VALUES('".$_POST["search"]."')");
?>
<div id="previewWin"><div>
</body>
</html>
