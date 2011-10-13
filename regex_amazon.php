
<?php
// The most important file of the project . Here we parse the websites for the deals and make entry for the deals in the website
// Connection to the database

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
// Search for the products according to the query entered by the user
// Search for watch just in case of some error
$search="watch";
// Gets the search words from the URL
if(isset($_GET['search']))
	$search=$_GET['search'];

// Function that fetches the results from deals2buy.com	
function deals2buy_query($query){
	$prefix="http://www.dealstobuy.com";
	
	$testfile=str_replace("\n", " ", file_get_contents("$prefix/search?q=$query"));
	// regex script that parses the website  returned according the search query
	$regex='@<a[^>]*href="([^"]+)">([^<]*)</a>[^<]*<strong>\s*([^\s<]*)\s*</strong>.*<div class="image">.*<a class="jumplink".*<img src="([^"]+)".*<p class="description">(.*)</p>@U';
	$count=preg_match_all($regex, $testfile, $matches);
	array_shift($matches);
	// Matches the data returned and looks at specific details that we need like price, name , description, etc;
	$items=array();
	for($i=0; $i<$count; $i++){
		$items[]=array(
			"Deal_Link" => $prefix.$matches[0][$i],
			"Name" => $matches[1][$i],
			"Price" => $matches[2][$i],
			"Image_Link" => $matches[3][$i],
			"Description" => strip_tags($matches[4][$i]));
	}
	return $items;

}
// Function that fetches the results from amazon.com
function amazon_query($query){
	// It follows a completely different structure from deals2buy.com hence a different script had to be written
	$prefix="http://amazon.com";
	// Different structure to match the user entered string
	$testfile=str_replace("\n", " ", file_get_contents("$prefix/s/ref=nb_sb_ss_i_0_5?url=search-alias%3Daps&field-keywords=$query&x=0&y=0&sprefix=$query"));
	// regex query from amazon.com
	$regex1='@<img\s*src="([^"]+)"\s*class="productImage"[^>]*>.*<a\s+class="title"\s+href="([^"]+)"[^>]*>([^<]+)</a>.*<span\s*class="price">\s*([^\s]+)\s*</span>@U';
	$regex2='@<td\s+class="imageColumn"[^>]*>.*<a href="([^"]+)">\s*<img\s+src="([^"]+)".*<a href="([^"]+)"><span[^>]*>(.*)</span>.*<a href="([^"]+)">.*<span class="s[^"]*">(\$[^>]+)</span>@U';
	// count the number of results returned
	$count=preg_match_all($regex1, $testfile, $matches);
	// get the specific details from the results obtained into the variables
	if($count){
		array_shift($matches);
		$items=array();
		for($i=0; $i<$count; $i++){
			$items[]=array(
				"Deal_Link" => $matches[1][$i],
				"Name" => $matches[2][$i],
				"Price" => $matches[3][$i],
				"Image_Link" => $matches[0][$i],
				"Description" => $matches[2][$i]);
		}
		return $items;
	}
	// Similar method followes to store results for a differnt html structure returned from amazon.com
	$count=preg_match_all($regex2, $testfile, $matches);
	if($count){
		array_shift($matches);
		$items=array();
		for($i=0; $i<$count; $i++){
			if($matches[0][$i]==$matches[2][$i] && $matches[2][$i]==$matches[4][$i])
				$items[]=array(
					"Deal_Link" => $matches[0][$i],
					"Name" => $matches[3][$i],
					"Price" => $matches[5][$i],
					"Image_Link" => $matches[1][$i],
					"Description" => $matches[3][$i]);
		}
		return $items;
	}
	return array();
}

// delete the older deals present in the database
mysql_query("DELETE FROM `deal`");
mysql_query("DELETE FROM `product`");
$array1 = array("iphone","lg","blackberry","hp","apple","samsung","google","htc","microsoft","laptop","camera","watch","computer","hardware","software","book","apparel","game","video","health","beauty","electronics","music","office","flower","shoes","footwear","ipod","sunglasses","gift","kids","baby","accessories","hair","gps","gamecube","oprah","blu ray","HDTV","coffee maker","Windows","Photoshop","Xbox","Harry Potter","Nikon","Cuisinart","Bose","Canon","Wii",
"player","home","McAfee","Kindle","WebKinz","Lego","Barbie","yoga","Pilates","Webcam","Calphalon","cookbook","MP3","cellphone","printer","pocket","Transformers","food processor","NASCAR","radar detector","Powershot","Linksys","Lexmark","Vaio","Coolpix",
"gas grill","adobe","toy","tool","garden","goods","sports");

// Insert the product name into the database
mysql_query("INSERT INTO product(`Name`) VALUES('".$query."')");
foreach ($array1 as $i => $value) {
// Call the amazon search function
$items1=amazon_query($array1[$i]);
// call the deals2buy search function
$items2=deals2buy_query($array1[$i]);
// merge the results from deals 2 buy and amazon.com
$items=array_merge($items1, $items2);

$count=count($items);
// just for checking the results returned by printing on screen
echo "$count matches found:<br/>";
foreach($items as $item){
	echo "<dl>";
	foreach($item as $key => $val)
		echo "<dt>$key</dt><dd>$val</dd>";
	echo "</dl>";
    
}
// For each item that was returned or each deal returned
foreach($items as $item){
	echo "<dl>";
	//Get the specific details from the bunch of values found and assign the values to specific variables
	foreach($item as $key => $val)
	{
		if($key == "Name")
		{
			// store the name into the name variable for insertion
			$Name = mysql_escape_string($val);
		}
		// store the link into the deal variable for insertion
		if($key == "Deal_Link")
			$deal = mysql_escape_string($val);
		// store the product description into the desc variable for insertion
		if($key == "Description")
			$desc = mysql_escape_string($val);
		// store the image  into the img variable for insertion
		if($key == "Image_Link")
			$img = mysql_escape_string($val);
		// store the price in to the price variable for insertion
		if($key == "Price")
			$price = mysql_escape_string($val);

	}
// remove the dollar sign from price so that deals can be displayed by price
$priceOnly = substr($price,1);
// convert to float
$priceFloat = (float)$priceOnly;

//$deal = "http://deals2buy.com/".$deal;
// Insert into the database
if($priceFloat !=0)
mysql_query("INSERT INTO deal(`Product_ID`,`Name`,`Deal_Link`,`Image_Link`,`Price`,`Description`) VALUES('". $prod['Product_ID']."','".$Name."','".$deal."','".$img."','".$priceFloat."','".$desc."')");

	echo "</dl>";
}
}
?>
