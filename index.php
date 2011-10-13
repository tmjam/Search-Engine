<!--
	Created by : Tauseef Jamadar, Abhishek Iyer, David Stolp
	Shows the index page or the home page for the wesbite
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Engine !!</title>
<style>
select.category {border:1px solid #A5A5A5; backgorund-color:#D0D0D0}
select.category option {border-bottom:1px solid #dadada}
</style>
<!--  Inserts the autocomplete option for the text box -->
<script type="text/javascript" src="js/jquery.js"></script>
	<script type='text/javascript' src='js/jquery.autocomplete.js'></script>

	<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
    
    <!-- Auto complete feature -->
    <script type="text/javascript">
function findValue(li) {
	if( li == null ) return alert("No match!");

	// if coming from an AJAX call, let's use the product as the value
	if( !!li.extra ) var sValue = li.extra[0];

	// otherwise, let's just display the value in the text box
	else var sValue = li.selectValue;

	
}

function selectItem(li) {
	findValue(li);
}

function formatItem(row) {
	return row[0] + " (id: " + row[1] + ")";
}

function lookupAjax(){
	var oSuggest = $("#CityAjax")[0].autocompleter;

	oSuggest.findValue();

	return false;
}

function lookupLocal(){
	var oSuggest = $("#CityLocal")[0].autocompleter;

	oSuggest.findValue();

	return false;
}

$(document).ready(function() {
	$("#CityAjax").autocomplete(
		"autocomplete_ajax.cfm",
		{
			delay:10,
			minChars:2,
			matchSubset:1,
			matchContains:1,
			cacheLength:10,
			onItemSelect:selectItem,
			onFindValue:findValue,
			formatItem:formatItem,
			autoFill:true
		}
	);

	$("#CityLocal").autocompleteArray(
		[
			"iphone","lg","blackberry","hp","apple","samsung","google","htc","microsoft","laptop","camera","watch","computer","hardware","software","book","apparel","game","video","health","beauty","electronics","music","office","flower","shoes","footwear","ipod","sunglasses","gift","kids","baby","accessories","hair","gps","gamecube","oprah","blu ray","HDTV","coffee maker","Windows","Photoshop","Xbox","Harry Potter","Nikon","Cuisinart","Bose","Canon","Wii",
"player","home","McAfee","Kindle","WebKinz","Lego","Barbie","yoga","Pilates","Webcam","Calphalon","cookbook","MP3","cellphone","printer","pocket","Transformers","food processor","NASCAR","radar detector","Powershot","Linksys","Lexmark","Vaio","Coolpix",
"gas grill","adobe","toy","tool","garden","goods","sports",
			"Aberdeen", "Ada", "Adamsville", "Addyston", "Adelphi", "Adena", "Adrian", "Akron",
			"Albany", "Alexandria", "Alger", "Alledonia", "Alliance", "Alpha", "Alvada",
			"Alvordton", "Amanda", "Amelia", "Amesville", "Amherst", "Amlin", "Amsden",
			"Amsterdam", "Andover", "Anna", "Ansonia", "Antwerp", "Apple Creek", "Arcadia",
			"Arcanum", "Archbold", "Arlington", "Ashland", "Ashley", "Ashtabula", "Ashville",
			"Athens", "Attica", "Atwater", "Augusta", "Aurora", "Austinburg", "Ava", "Avon",
			"Avon Lake", "Bainbridge", "Bakersville", "Baltic", "Baltimore", "Bannock",
			"Barberton", "Barlow", "Barnesville", "Bartlett", "Barton", "Bascom", "Batavia",
			"Bath", "Bay Village", "Beach City", "Beachwood", "Beallsville", "Beaver",
			"Beaverdam", "Bedford", "Bellaire", "Bellbrook", "Belle Center", "Belle Valley",
			"Bellefontaine", "Bellevue", "Bellville", "Belmont", "Belmore", "Beloit", "Belpre",
			"Benton Ridge", "Bentonville", "Berea", "Bergholz", "Berkey", "Berlin",
			"Berlin Center", "Berlin Heights", "Bethel", "Bethesda", "Bettsville", "Beverly",
			"Bidwell", "Big Prairie", "Birmingham", "Blacklick", "Bladensburg", "Blaine",
			"Blakeslee", "Blanchester", "Blissfield", "Bloomdale", "Bloomingburg",
			"Bloomingdale", "Bloomville", "Blue Creek", "Blue Rock", "Bluffton",
			"Bolivar", "Botkins", "Bourneville", "Bowerston", "Bowersville",
			"Bowling Green", "Bradford", "Bradner", "Brady Lake", "Brecksville",
			"Bremen", "Brewster", "Brice", "Bridgeport", "Brilliant", "Brinkhaven",
			"Bristolville", "Broadview Heights", "Broadway", "Brookfield", "Brookpark",
			"Brookville", "Brownsville", "Brunswick", "Bryan", "Buchtel", "Buckeye Lake",
			"Buckland", "Bucyrus", "Buffalo", "Buford", "Burbank", "Burghill", "Burgoon",
			"Burkettsville", "Burton", "Butler", "Byesville", "Cable", "Cadiz", "Cairo",
			"Caldwell", "Caledonia", "Cambridge", "Camden", "Cameron", "Camp Dennison",
			"Campbell", "Canal Fulton", "Canal Winchester", "Canfield", "Canton", "Carbon Hill",
			"Carbondale", "Cardington", "Carey", "Carroll", "Carrollton", "Casstown",
			"Castalia", "Catawba", "Cecil", "Cedarville", "Celina", "Centerburg",
			"Chagrin Falls", "Chandlersville", "Chardon", "Charm", "Chatfield", "Chauncey",
			"Cherry Fork", "Chesapeake", "Cheshire", "Chester", "Chesterhill", "Chesterland",
			"Chesterville", "Chickasaw", "Chillicothe", "Chilo", "Chippewa Lake",
			"Christiansburg", "Cincinnati", "Circleville", "Clarington", "Clarksburg",
			"Clarksville", "Clay Center", "Clayton", "Cleveland", "Cleves", "Clifton",
			"Clinton", "Cloverdale", "Clyde", "Coal Run", "Coalton", "Coldwater", "Colerain",
			"College Corner", "Collins", "Collinsville", "Colton", "Columbia Station",
			"Columbiana", "Columbus", "Columbus Grove", "Commercial Point", "Conesville",
			"Conneaut", "Conover", "Continental", "Convoy", "Coolville", "Corning", "Cortland",
			"Coshocton", "Covington", "Creola", "Crestline", "Creston", "Crooksville",
			"Croton", "Crown City", "Cuba", "Cumberland", "Curtice", "Custar", "Cutler",
			"Cuyahoga Falls", "Cygnet", "Cynthiana", "Dalton", "Damascus", "Danville",
			"Dayton", "De Graff", "Decatur", "Deerfield", "Deersville", "Defiance",
			"Delaware", "Dellroy", "Delphos", "Delta", "Dennison", "Derby", "Derwent",
			"Deshler", "Dexter City", "Diamond", "Dillonvale", "Dola", "Donnelsville",
			"Dorset", "Dover", "Doylestown", "Dresden", "Dublin", "Dunbridge", "Duncan Falls",
			"Dundee", "Dunkirk", "Dupont", "East Claridon", "East Fultonham",
			"East Liberty", "East Liverpool", "East Palestine", "East Rochester",
			"East Sparta", "East Springfield", "Eastlake", "Eaton", "Edgerton", "Edison",
			"Edon", "Eldorado", "Elgin", "Elkton", "Ellsworth", "Elmore", "Elyria",
			"Empire", "Englewood", "Enon", "Etna", "Euclid", "Evansport", "Fairborn",
			"Fairfield", "Fairpoint", "Fairview", "Farmdale", "Farmer", "Farmersville",
			"Fayette", "Fayetteville", "Feesburg", "Felicity", "Findlay", "Flat Rock",
			"Fleming", "Fletcher", "Flushing", "Forest", "Fort Jennings", "Fort Loramie",
			"Fort Recovery", "Fostoria", "Fowler", "Frankfort", "Franklin",
			"Franklin Furnace", "Frazeysburg", "Fredericksburg", "Fredericktown",
			"Freeport", "Fremont", "Fresno", "Friendship", "Fulton", "Fultonham",
			"Galena", "Galion", "Gallipolis", "Galloway", "Gambier", "Garrettsville",
			"Gates Mills", "Geneva", "Genoa", "Georgetown", "Germantown", "Gettysburg",
			"Gibsonburg", "Girard", "Glandorf", "Glencoe", "Glenford", "Glenmont",
			"Glouster", "Gnadenhutten", "Gomer", "Goshen", "Grafton", "Grand Rapids",
			"Grand River", "Granville", "Gratiot", "Gratis", "Graysville", "Graytown",
			"Green", "Green Camp", "Green Springs", "Greenfield", "Greenford",
			"Greentown", "Greenville", "Greenwich", "Grelton", "Grove City",
			"Groveport", "Grover Hill", "Guysville", "Gypsum", "Hallsville",
			"Hamden", "Hamersville", "Hamilton", "Hamler", "Hammondsville",
			"Hannibal", "Hanoverton", "Harbor View", "Harlem Springs", "Harpster",
			"Harrisburg", "Harrison", "Harrisville", "Harrod", "Hartford", "Hartville",
			"Harveysburg", "Haskins", "Haverhill", "Haviland", "Haydenville", "Hayesville",
			"Heath", "Hebron", "Helena", "Hicksville", "Higginsport", "Highland", "Hilliard",
			"Hillsboro", "Hinckley", "Hiram", "Hockingport", "Holgate", "Holland",
			"Hollansburg", "Holloway", "Holmesville", "Homer", "Homerville", "Homeworth",
			"Hooven", "Hopedale", "Hopewell", "Houston", "Howard", "Hoytville", "Hubbard",
			"Hudson", "Huntsburg", "Huntsville", "Huron", "Iberia", "Independence",
			"Irondale", "Ironton", "Irwin", "Isle Saint George", "Jackson", "Jackson Center",
			"Jacksontown", "Jacksonville", "Jacobsburg", "Jamestown", "Jasper",
			"Jefferson", "Jeffersonville", "Jenera", "Jeromesville", "Jerry City",
			"Jerusalem", "Jewell", "Jewett", "Johnstown", "Junction City", "Kalida",
			"Kansas", "Keene", "Kelleys Island", "Kensington", "Kent", "Kenton",
			"Kerr", "Kettlersville", "Kidron", "Kilbourne", "Killbuck", "Kimbolton",
			"Kings Mills", "Kingston", "Kingsville", "Kinsman", "Kipling", "Kipton",
			"Kirby", "Kirkersville", "Kitts Hill", "Kunkle", "La Rue", "Lacarne",
			"Lafayette", "Lafferty", "Lagrange", "Laings", "Lake Milton", "Lakemore",
			"Lakeside Marblehead", "Lakeview", "Lakeville", "Lakewood", "Lancaster",
			"Langsville", "Lansing", "Latham", "Latty", "Laura", "Laurelville",
			"Leavittsburg", "Lebanon", "Lees Creek", "Leesburg", "Leesville",
			"Leetonia", "Leipsic", "Lemoyne", "Lewis Center", "Lewisburg",
			"Lewistown", "Lewisville", "Liberty Center", "Lima", "Limaville",
			"Lindsey", "Lisbon", "Litchfield", "Lithopolis", "Little Hocking",
			"Lockbourne", "Lodi", "Logan", "London", "Londonderry",
			"Long Bottom", "Lorain", "Lore City", "Loudonville", "Louisville",
			"Loveland", "Lowell", "Lowellville", "Lower Salem", "Lucas",
			"Lucasville", "Luckey", "Ludlow Falls", "Lynchburg", "Lynx",
			"Lyons", "Macedonia", "Macksburg", "Madison", "Magnetic Springs",
			"Magnolia", "Maineville", "Malaga", "Malinta", "Malta", "Malvern",
			"Manchester", "Mansfield", "Mantua", "Maple Heights", "Maplewood",
			"Marathon", "Marengo", "Maria Stein", "Marietta", "Marion",
			"Mark Center", "Marshallville", "Martel", "Martin", "Martins Ferry",
			"Martinsburg", "Martinsville", "Marysville", "Mason", "Massillon",
			"Masury", "Maumee", "Maximo", "Maynard", "Mc Arthur", "Mc Clure",
			"Mc Comb", "Mc Connelsville", "Mc Cutchenville", "Mc Dermott",
			"Mc Donald", "Mc Guffey", "Mechanicsburg", "Mechanicstown",
			"Medina", "Medway", "Melmore", "Melrose", "Mendon", "Mentor",
			"Mesopotamia", "Metamora", "Miamisburg", "Miamitown", "Miamiville",
			"Middle Bass", "Middle Point", "Middlebranch", "Middleburg",
			"Middlefield", "Middleport", "Middletown", "Midland", "Midvale",
			"Milan", "Milford", "Milford Center", "Millbury", "Milledgeville",
			"Miller City", "Millersburg", "Millersport", "Millfield",
			"Milton Center", "Mineral City", "Mineral Ridge", "Minerva",
			"Minford", "Mingo", "Mingo Junction", "Minster", "Mogadore",
			"Monclova", "Monroe", "Monroeville", "Montezuma", "Montpelier",
			"Montville", "Morral", "Morristown", "Morrow", "Moscow",
			"Mount Blanchard", "Mount Cory", "Mount Eaton", "Mount Gilead",
			"Mount Hope", "Mount Liberty", "Mount Orab", "Mount Perry",
			"Mount Pleasant", "Mount Saint Joseph", "Mount Sterling",
			"Mount Vernon", "Mount Victory", "Mowrystown", "Moxahala",
			"Munroe Falls", "Murray City", "Nankin", "Napoleon", "Nashport",
			"Nashville", "Navarre", "Neapolis", "Neffs", "Negley",
			"Nelsonville", "Nevada", "Neville", "New Albany", "New Athens",
			"New Bavaria", "New Bloomington", "New Bremen", "New Carlisle",
			"New Concord", "New Hampshire", "New Haven", "New Holland",
			"New Knoxville", "New Lebanon", "New Lexington", "New London",
			"New Madison", "New Marshfield", "New Matamoras", "New Middletown",
			"New Paris", "New Philadelphia", "New Plymouth", "New Richmond",
			"New Riegel", "New Rumley", "New Springfield", "New Straitsville",
			"New Vienna", "New Washington", "New Waterford", "New Weston",
			"Newark", "Newbury", "Newcomerstown", "Newport", "Newton Falls",
			"Newtonsville", "Ney", "Niles", "North Baltimore", "North Bend",
			"North Benton", "North Bloomfield", "North Fairfield",
			"North Georgetown", "North Hampton", "North Jackson",
			"North Kingsville", "North Lawrence", "North Lewisburg",
			"North Lima", "North Olmsted", "North Ridgeville", "North Robinson",
			"North Royalton", "North Star", "Northfield", "Northwood", "Norwalk",
			"Norwich", "Nova", "Novelty", "Oak Harbor", "Oak Hill", "Oakwood",
			"Oberlin", "Oceola", "Ohio City", "Okeana", "Okolona", "Old Fort",
			"Old Washington", "Olmsted Falls", "Ontario", "Orangeville",
			"Oregon", "Oregonia", "Orient", "Orrville", "Orwell", "Osgood",
			"Ostrander", "Ottawa", "Ottoville", "Otway", "Overpeck",
			"Owensville", "Oxford", "Painesville", "Palestine", "Pandora",
			"Paris", "Parkman", "Pataskala", "Patriot", "Paulding", "Payne",
			"Pedro", "Peebles", "Pemberton", "Pemberville", "Peninsula",
			"Perry", "Perrysburg", "Perrysville", "Petersburg", "Pettisville",
			"Phillipsburg", "Philo", "Pickerington", "Piedmont", "Pierpont",
			"Piketon", "Piney Fork", "Pioneer", "Piqua", "Pitsburg",
			"Plain City", "Plainfield", "Pleasant City", "Pleasant Hill",
			"Pleasant Plain", "Pleasantville", "Plymouth", "Polk",
			"Pomeroy", "Port Clinton", "Port Jefferson", "Port Washington",
			"Port William", "Portage", "Portland", "Portsmouth", "Potsdam",
			"Powell", "Powhatan Point", "Proctorville", "Prospect", "Put in Bay",
			"Quaker City", "Quincy", "Racine", "Radnor", "Randolph", "Rarden",
			"Ravenna", "Rawson", "Ray", "Rayland", "Raymond", "Reedsville",
			"Reesville", "Reno", "Republic", "Reynoldsburg", "Richfield",
			"Richmond", "Richmond Dale", "Richwood", "Ridgeville Corners",
			"Ridgeway", "Rio Grande", "Ripley", "Risingsun", "Rittman",
			"Robertsville", "Rock Camp", "Rock Creek", "Rockbridge", "Rockford",
			"Rocky Ridge", "Rocky River", "Rogers", "Rome", "Rootstown", "Roseville",
			"Rosewood", "Ross", "Rossburg", "Rossford", "Roundhead", "Rudolph",
			"Rushsylvania", "Rushville", "Russells Point", "Russellville", "Russia",
			"Rutland", "Sabina", "Saint Clairsville", "Saint Henry", "Saint Johns",
			"Saint Louisville", "Saint Marys", "Saint Paris", "Salem", "Salesville",
			"Salineville", "Sandusky", "Sandyville", "Sarahsville", "Sardinia",
			"Sardis", "Savannah", "Scio", "Scioto Furnace", "Scott", "Scottown",
			"Seaman", "Sebring", "Sedalia", "Senecaville", "Seven Mile", "Seville",
			"Shade", "Shadyside", "Shandon", "Sharon Center", "Sharpsburg",
			"Shauck", "Shawnee", "Sheffield Lake", "Shelby", "Sherrodsville",
			"Sherwood", "Shiloh", "Short Creek", "Shreve", "Sidney", "Sinking Spring",
			"Smithfield", "Smithville", "Solon", "Somerdale", "Somerset",
			"Somerville", "South Bloomingville", "South Charleston", "South Lebanon",
			"South Point", "South Salem", "South Solon", "South Vienna",
			"South Webster", "Southington", "Sparta", "Spencer", "Spencerville",
			"Spring Valley", "Springboro", "Springfield", "Stafford", "Sterling",
			"Steubenville", "Stewart", "Stillwater", "Stockdale", "Stockport",
			"Stone Creek", "Stony Ridge", "Stout", "Stoutsville", "Stow", "Strasburg",
			"Stratton", "Streetsboro", "Strongsville", "Struthers", "Stryker",
			"Sugar Grove", "Sugarcreek", "Sullivan", "Sulphur Springs", "Summerfield",
			"Summit Station", "Summitville", "Sunbury", "Swanton", "Sycamore",
			"Sycamore Valley", "Sylvania", "Syracuse", "Tallmadge", "Tarlton",
			"Terrace Park", "The Plains", "Thompson", "Thornville", "Thurman",
			"Thurston", "Tiffin", "Tiltonsville", "Tipp City", "Tippecanoe", "Tiro",
			"Toledo", "Tontogany", "Torch", "Toronto", "Tremont City", "Trenton",
			"Trimble", "Trinway", "Troy", "Tuppers Plains", "Tuscarawas", "Twinsburg",
			"Uhrichsville", "Union City", "Union Furnace", "Unionport", "Uniontown",
			"Unionville", "Unionville Center", "Uniopolis", "Upper Sandusky", "Urbana",
			"Utica", "Valley City", "Van Buren", "Van Wert", "Vandalia", "Vanlue",
			"Vaughnsville", "Venedocia", "Vermilion", "Verona", "Versailles",
			"Vickery", "Vienna", "Vincent", "Vinton", "Wadsworth", "Wakefield",
			"Wakeman", "Walbridge", "Waldo", "Walhonding", "Walnut Creek", "Wapakoneta",
			"Warnock", "Warren", "Warsaw", "Washington Court House",
			"Washingtonville", "Waterford", "Waterloo", "Watertown", "Waterville",
			"Wauseon", "Waverly", "Wayland", "Wayne", "Waynesburg", "Waynesfield",
			"Waynesville", "Wellington", "Wellston", "Wellsville", "West Alexandria",
			"West Chester", "West Elkton", "West Farmington", "West Jefferson",
			"West Lafayette", "West Liberty", "West Manchester", "West Mansfield",
			"West Millgrove", "West Milton", "West Point", "West Portsmouth",
			"West Rushville", "West Salem", "West Union", "West Unity", "Westerville",
			"Westfield Center", "Westlake", "Weston", "Westville", "Wharton",
			"Wheelersburg", "Whipple", "White Cottage", "Whitehouse", "Wickliffe",
			"Wilberforce", "Wilkesville", "Willard", "Williamsburg", "Williamsfield",
			"Williamsport", "Williamstown", "Williston", "Willoughby", "Willow Wood",
			"Willshire", "Wilmington", "Wilmot", "Winchester", "Windham", "Windsor",
			"Winesburg", "Wingett Run", "Winona", "Wolf Run", "Woodsfield",
			"Woodstock", "Woodville", "Wooster", "Wren", "Xenia", "Yellow Springs",
			"Yorkshire", "Yorkville", "Youngstown", "Zaleski", "Zanesfield", "Zanesville",
			"Zoar"
		],
		{
			delay:10,
			minChars:1,
			matchSubset:1,
			onItemSelect:selectItem,
			onFindValue:findValue,
			autoFill:true,
			maxItemsToShow:10
		}
	);
});
</script>

    <!-- End autocomplete -->
</head>

<body>

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

<br />
<div align="center"><img src="images.jpg" width="108" height="143" /></div>
<div align="center" style="padding: 20px; font-size:36px; font-family:'Lucida Console', Monaco, monospace"><font color="#0292C0">GAZING</font> THINGS</div>

<br />
<form method="GET" action="search.php">
<div align="center" style="border:thick; background-color:#0292C0; padding: 10px;" >
<input type="text" id="CityLocal" value="" size="41" align="middle" width="400" name="search"/>
<select class="category" name="category">
<option>Select Category</option>
<option>Product name</option>
<option>Manufacturer's name</option>
<option>Model</option>
<input type="submit" value="Go"/>
</select>
</div>
</form>
<! ---------------------------------------------- Code to implement the Tag Cloud ----------------------------------------------------------- >

<?php

// gets the words searched from the keyword table into the results array
$result=mysql_query("SELECT * FROM keyword")or die(mysql_error());
$num=mysql_numrows($result);

// each value from the results array is assigned to a variable
$tag1=mysql_result($result,0,"key");
$tag2=mysql_result($result,1,"key");
$tag3=mysql_result($result,2,"key");
$tag4=mysql_result($result,3,"key");
$tag5=mysql_result($result,4,"key");
$tag6=mysql_result($result,5,"key");
$tag7=mysql_result($result,6,"key");
$tag8=mysql_result($result,7,"key");
$tag9=mysql_result($result,8,"key");
$tag10=mysql_result($result,9,"key");
$tag11=mysql_result($result,10,"key");
$tag12=mysql_result($result,11,"key");
$tag13=mysql_result($result,12,"key");
$tag14=mysql_result($result,13,"key");
$tag15=mysql_result($result,14,"key");
$tag16=mysql_result($result,15,"key");
$tag17=mysql_result($result,16,"key");
$tag18=mysql_result($result,17,"key");
$tag19=mysql_result($result,18,"key");
$tag20=mysql_result($result,19,"key");
$tag21=mysql_result($result,20,"key");
$tag22=mysql_result($result,21,"key");
$tag23=mysql_result($result,22,"key");
$tag24=mysql_result($result,23,"key");
$tag25=mysql_result($result,24,"key");
$tag26=mysql_result($result,25,"key");
$tag27=mysql_result($result,26,"key");
$tag28=mysql_result($result,27,"key");
$tag29=mysql_result($result,28,"key");
$tag30=mysql_result($result,29,"key");

?>
<!-- embedding the cloud into the page that displays all recent words searched -->
<div align="center">
<embed  type="application/x-shockwave-flash"
        src="GoCloud/Flash/GoCloud.swf"
        id="cumulusflash"
        name="cumulusflash"
        bgcolor="000000"
        quality="high"
        wmode="transparent"
        allowscriptaccess="always"
        flashvars="tcolor=0x000000&amp;tspeed=100&amp;distr=true&amp;mode=tags&amp;tagcloud=%3Ctags%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag1?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+25px%3B%26quot%3B%22%3E<?php echo $tag1?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag2?>%%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+25px%3B%26quot%3B%22%3E<?php echo $tag2?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag3?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+24px%3B%26quot%3B%22%3E<?php echo $tag3?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag4?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+24px%3B%26quot%3B%22%3E<?php echo $tag4?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag5?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+24px%3B%26quot%3B%22%3E<?php echo $tag5?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag6?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+23px%3B%26quot%3B%22%3E<?php echo $tag6?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag7?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+23px%3B%26quot%3B%22%3E<?php echo $tag7?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag8?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+22px%3B%26quot%3B%22%3E<?php echo $tag8?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag9?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+22px%3B%26quot%3B%22%3E<?php echo $tag9?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag10?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+21px%3B%26quot%3B%22%3E<?php echo $tag10?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag11?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+21px%3B%26quot%3B%22%3E<?php echo $tag11?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag12?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+21px%3B%26quot%3B%22%3E<?php echo $tag12?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag13?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+20px%3B%26quot%3B%22%3E<?php echo $tag13?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag14?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+20px%3B%26quot%3B%22%3E<?php echo $tag14?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag15?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+19px%3B%26quot%3B%22%3E<?php echo $tag15?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag16?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+19px%3B%26quot%3B%22%3E<?php echo $tag16?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag17?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag17?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag18?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag18?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag19?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag19?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag20?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag21?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag21?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+17px%3B%26quot%3B%22%3E<?php echo $tag21?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag22?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+17px%3B%26quot%3B%22%3E<?php echo $tag22?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag23?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+17px%3B%26quot%3B%22%3E<?php echo $tag23?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag24?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+16px%3B%26quot%3B%22%3E<?php echo $tag24?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag25?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+16px%3B%26quot%3B%22%3E<?php echo $tag25?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag26?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+16px%3B%26quot%3B%22%3E<?php echo $tag26?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag27?>%%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag27?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag28?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag28?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag29?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag29?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag30?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag30?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag31?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+14px%3B%26quot%3B%22%3E<?php echo $tag31?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag32?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+14px%3B%26quot%3B%22%3E<?php echo $tag32?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag33?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+14px%3B%26quot%3B%22%3E<?php echo $tag33?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag34?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+13px%3B%26quot%3B%22%3E<?php echo $tag34?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag35?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+13px%3B%26quot%3B%22%3E<?php echo $tag35?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag36?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+13px%3B%26quot%3B%22%3E<?php echo $tag36?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag37?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+12px%3B%26quot%3B%22%3E<?php echo $tag37?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag38?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+12px%3B%26quot%3B%22%3E<?php echo $tag38?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag39?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+12px%3B%26quot%3B%22%3E<?php echo $tag39?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag40?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+11px%3B%26quot%3B%22%3E<?php echo $tag40?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag41?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+11px%3B%26quot%3B%22%3E<?php echo $tag41?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag42?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+10px%3B%26quot%3B%22%3E<?php echo $tag42?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag43?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+10px%3B%26quot%3B%22%3E<?php echo $tag43?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag44?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+10px%3B%26quot%3B%22%3E<?php echo $tag44?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag45?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+9px%3B%26quot%3B%22%3E<?php echo $tag45?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag46?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+9px%3B%26quot%3B%22%3E<?php echo $tag46?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag47?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+9px%3B%26quot%3B%22%3E<?php echo $tag47?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag48?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+8px%3B%26quot%3B%22%3E<?php echo $tag48?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag49?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+8px%3B%26quot%3B%22%3E<?php echo $tag49?>%3C%2Fa%3E%3Ca+href%3D%22search.php%3Fquery=<?php echo $tag50?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+8px%3B%26quot%3B%22%3E<?php echo $tag50?>%3C%2Fa%3E+%0A%3C%2Ftags%3E"
        width="600"
        height="500"
     >
</embed>
</div>
<! ------------------------------------------------------ End of code for Tag Clouds ------------------------------------------------- >

</body>
</html>