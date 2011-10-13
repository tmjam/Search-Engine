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
mysql_query("DELETE FROM `deal`");
mysql_query("DELETE FROM `product`");

$array1 = array("camera","phone","laptop","mouse","lens","books");
//$query=$_GET["search"];
foreach ($array1 as $i => $value) {

$testfile=file_get_contents("http://www.dealstobuy.com/search?q=$array1[$i]");
$testfile=str_replace("\n", " ", $testfile);

$regex1="@<a[^>]*href=\"([^\"]+)\">([^<]*)</a>[^<]*<strong>\s*([^\s<]*)\s*</strong>.*<div class=\"image\">.*<a class=\"jumplink\".*<img src=\"([^\"]+)\".*<p class=\"description\">(.*)</p>@U";
$count=preg_match_all($regex1, $testfile, $matches);

array_shift($matches);

$items=array();
for($i=0; $i<$count; $i++){
	$items[]=array(
		"Deal_Link" => $matches[0][$i],
		"Name" => $matches[1][$i],
		"Price" => $matches[2][$i],
		"Image_Link" => $matches[3][$i],
		"Description" => htmlentities($matches[4][$i]));
}

mysql_query("INSERT INTO product(`Name`) VALUES('".$query."')");
$product = mysql_query("SELECT * FROM `product` WHERE `Name`='".$query."'");
$prod= mysql_fetch_array($product);
echo $prod['Name'];
echo "$count matches found:<br/>";
foreach($items as $item){
	echo "<dl>";
	foreach($item as $key => $val)
	{
		echo "<dt>$key</dt><dd>$val</dd>";
		

		if($key == "Name")
		{
			$Name = mysql_escape_string($val);
		}
		if($key == "Deal_Link")
			$deal = mysql_escape_string($val);
		if($key == "Description")
			$desc = mysql_escape_string($val);
		if($key == "Image_Link")
			$img = mysql_escape_string($val);
		if($key == "Price")
			$price = mysql_escape_string($val);
		
		
	}
    
$priceOnly = substr($price,1);
$priceFloat = (float)$priceOnly;

$deal = "http://deals2buy.com/".$deal;
mysql_query("INSERT INTO deal(`Product_ID`,`Name`,`Deal_Link`,`Image_Link`,`Price`,`Description`) VALUES('". $prod['Product_ID']."','".$Name."','".$deal."','".$img."','".$priceFloat."','".$desc."')");

	echo "</dl>";
}
}

?>
