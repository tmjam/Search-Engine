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

<!-- Script to redirect the user to the desired url on clicking anywhere on the row -->
<script type="text/javascript">
$(document).ready(function(){
   $("tr").click(function(){
	   if($(this).attr("url"))// to avoid the header tags
            window.location = $(this).attr("url");
   });
});
</script>

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
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 1px;
	text-align: left;
	padding: 6px 6px 6px 10px;
	background: #CAE8EA;
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
            <p><a href="CSS_gallery/index.php">Gallery</p>
            <p class="subtext">See our stuff!</a></p>
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
$start = isset($_GET["limit"]) ? $_GET["limit"] : 0;

if(isset($_GET["search"]) && $_GET["search"] != "" || isset($_GET["query"]))
{
	$search_criteria = $_GET["search"];
$category = $_GET["category"];
$limit = 10;
if(isset($_GET["query"]))
{

$search_criteria = $_GET["query"];

}
$temp = mysql_query("SELECT count(*) FROM deal WHERE Description LIKE  '%".$search_criteria."%'"); 
$num_rows = mysql_fetch_array($temp);
$result = mysql_query("SELECT * FROM deal WHERE Description LIKE  '%".$search_criteria."%' OR Name LIKE  '%".$search_criteria."%'  ORDER BY Price LIMIT $start,$limit"); ?>
<div class="navigate">
<table>
<tr>
<?php if($start>0)
{?>
<td class="prev">
<a style="color:#009;" href="search.php?limit=<?php echo $start-$limit ;?>&search=<?php echo $search_criteria; ?>">PREVIOUS PAGE </a>
</td>
<?php } ?>
<?php if($num_rows[0]> $start+$limit)
{?>
<td class="next">
<a style="color:#009;" href="search.php?limit=<?php echo $start+$limit ;?>&search=<?php echo $search_criteria; ?>">NEXT PAGE </a>
</td>
<?php }?>
</tr>
</table>
</div>
<br><br>
<?php 
$num_rows_result = mysql_num_rows($result);
if($num_rows_result>0)
{
?>
<table>
<tr class="header">
   		    <td>   
	        <p align="center"><?php echo "".$search_criteria."\n";?></p>
            </td>
            
            
            <td>
            <p align="center">Description</p>
            </td>
            
           	<td>
            <p align="center">Price</p>
            </td>
            
     </tr>       
<?php $num_rows_result = mysql_num_rows($result);
 while($row = mysql_fetch_array($result))
  		{
			?>
   
              
          <tr url="<?php echo $row["Deal_Link"]; ?>"> 
              <td>
            	<a id="dealLink" href="<?php echo $row["Deal_Link"]; ?>">	<img class="images" border="0" src="<?php echo $row['Image_Link']; ?>"/>
                </a><br>
              </td>
              
               <td width="940">
               
				<font style="color:#080;"><?php echo $row['Name'].":"; ?> </font><br><hr>
   				<?php echo $row['Description']; ?>  <br>
                 Go to Deal <a id="dealLink" href="<?php echo $row["Deal_Link"]; ?>">Click Here  </a><br>
                 <p><a style="color:#000; font-size:14px;" href="review.php?searchID=<?php echo $row['Deal_ID']; ?>">Reviews
                 <?php
				 $cnt = mysql_query("SELECT * FROM review WHERE Deal_ID=".$row["Deal_ID"]." ");
				 $count = mysql_num_rows($cnt);
				 echo "(".$count.")";
				 ?>
                 
                 
                 
                 </a></p>
			   </td>
               
               <td class="price">
				<?php echo "$".$row['Price']; ?> <br>
                </td>
    	 </tr>        
           
		
	<?php	}
$data = mysql_result($key);
$size = 0;


$i=0;
?>
<?php
if($_GET["search"])
mysql_query("INSERT INTO keyword(`key`) VALUES('".$_GET["search"]."')");
?>
<tr>


</tr>
</table>
<?php }
else
{
	echo "No Donut for you. Please try again !! ";
}
?>
<br><br>
<div class="navigate">
<table>
<tr>
<?php if($start>0)
{?>
<td class="prev">
<a style="color:#009;" href="search.php?limit=<?php echo $start-$limit ;?>&search=<?php echo $search_criteria; ?>">PREVIOUS PAGE </a>
</td>
<?php } ?>
<?php if($num_rows[0]> $start+$limit)
{?>
<td class="next">
<a style="color:#009;" href="search.php?limit=<?php echo $start+$limit ;?>&search=<?php echo $search_criteria; ?>">NEXT PAGE </a>
</td>
<?php }
} // end of the if condition where no word is searched for
else 
{
	
echo "No results found Please Enter a valid keyword";
}
?>
</tr>
</table>
</div>
</body>
</html>
