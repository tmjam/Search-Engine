<!--
	Created by: Tauseef Jamadar, Abhishek Iyer, David Stolp
	Code for the cloud that is getting displayed on the home page
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html class="js" dir="ltr" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>

  
    <title>Tags Cloud</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
  $user_id="tauseef";
		$username="root";
        //$password="admin";
        $database="search";
        mysql_connect("localhost",$username,"");
        @mysql_select_db($database) or die( "Unable to select database");

        error_reporting (E_ERRORS);

// Get the words from the keyword table so that they can be added to the cloud
$query="SELECT DISTINCT key FROM keyword ORDER BY 1 DESC";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
// A maximum of 50 elements can be displayed in the cloud
// Results from the keyword table are stored into an array and then each element from the array is stored into a variable
$tag1=mysql_result($result,0,"query");
$tag2=mysql_result($result,1,"query");
$tag3=mysql_result($result,2,"query");
$tag4=mysql_result($result,3,"query");
/*$tag5=mysql_result($result,4,"query");
$tag6=mysql_result($result,5,"query");
$tag7=mysql_result($result,6,"query");
$tag8=mysql_result($result,7,"query");
$tag9=mysql_result($result,8,"query");
$tag10=mysql_result($result,9,"query");
$tag11=mysql_result($result,10,"query");
$tag12=mysql_result($result,11,"query");
$tag13=mysql_result($result,12,"query");
$tag14=mysql_result($result,13,"query");
$tag15=mysql_result($result,14,"query");
$tag16=mysql_result($result,15,"query");
$tag17=mysql_result($result,16,"query");
$tag18=mysql_result($result,17,"query");
$tag19=mysql_result($result,18,"query");
$tag20=mysql_result($result,19,"query");
$tag21=mysql_result($result,20,"query");
$tag22=mysql_result($result,21,"query");
$tag23=mysql_result($result,22,"query");
$tag24=mysql_result($result,23,"query");
$tag25=mysql_result($result,24,"query");
$tag26=mysql_result($result,25,"query");
$tag27=mysql_result($result,26,"query");
$tag28=mysql_result($result,27,"query");
$tag29=mysql_result($result,28,"query");
$tag30=mysql_result($result,29,"query");
$tag31=mysql_result($result,30,"query");
$tag32=mysql_result($result,31,"query");
$tag33=mysql_result($result,32,"query");
$tag34=mysql_result($result,33,"query");
$tag35=mysql_result($result,34,"query");
$tag36=mysql_result($result,35,"query");
$tag37=mysql_result($result,36,"query");
$tag38=mysql_result($result,37,"query");
$tag39=mysql_result($result,38,"query");
$tag40=mysql_result($result,39,"query");
$tag41=mysql_result($result,40,"query");
$tag42=mysql_result($result,41,"query");
$tag43=mysql_result($result,42,"query");
$tag44=mysql_result($result,43,"query");
$tag45=mysql_result($result,44,"query");
$tag46=mysql_result($result,45,"query");
$tag47=mysql_result($result,46,"query");
$tag48=mysql_result($result,47,"query");
$tag49=mysql_result($result,48,"query");
$tag50=mysql_result($result,49,"query");
*/
?>
<!-- embed the flash object inside the html page. This flash object is the cloud that will be displayed -->
<embed  type="application/x-shockwave-flash"
        src="GoCLoud/Flash/GoCloud.swf"
        id="cumulusflash"
        name="cumulusflash"
        bgcolor="000000"
        quality="high"
        wmode="transparent"
        allowscriptaccess="always"
        flashvars="tcolor=0x000000&amp;tspeed=100&amp;distr=true&amp;mode=tags&amp;tagcloud=%3Ctags%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag1?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+25px%3B%26quot%3B%22%3E<?php echo $tag1?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag2?>%%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+25px%3B%26quot%3B%22%3E<?php echo $tag2?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag3?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+24px%3B%26quot%3B%22%3E<?php echo $tag3?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag4?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+24px%3B%26quot%3B%22%3E<?php echo $tag4?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag5?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+24px%3B%26quot%3B%22%3E<?php echo $tag5?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag6?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+23px%3B%26quot%3B%22%3E<?php echo $tag6?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag7?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+23px%3B%26quot%3B%22%3E<?php echo $tag7?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag8?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+22px%3B%26quot%3B%22%3E<?php echo $tag8?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag9?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+22px%3B%26quot%3B%22%3E<?php echo $tag9?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag10?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+21px%3B%26quot%3B%22%3E<?php echo $tag10?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag11?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+21px%3B%26quot%3B%22%3E<?php echo $tag11?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag12?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+21px%3B%26quot%3B%22%3E<?php echo $tag12?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag13?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+20px%3B%26quot%3B%22%3E<?php echo $tag13?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag14?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+20px%3B%26quot%3B%22%3E<?php echo $tag14?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag15?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+19px%3B%26quot%3B%22%3E<?php echo $tag15?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag16?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+19px%3B%26quot%3B%22%3E<?php echo $tag16?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag17?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag17?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag18?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag18?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag19?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag19?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag20?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+18px%3B%26quot%3B%22%3E<?php echo $tag21?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag21?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+17px%3B%26quot%3B%22%3E<?php echo $tag21?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag22?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+17px%3B%26quot%3B%22%3E<?php echo $tag22?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag23?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+17px%3B%26quot%3B%22%3E<?php echo $tag23?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag24?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+16px%3B%26quot%3B%22%3E<?php echo $tag24?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag25?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+16px%3B%26quot%3B%22%3E<?php echo $tag25?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag26?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+16px%3B%26quot%3B%22%3E<?php echo $tag26?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag27?>%%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag27?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag28?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag28?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag29?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag29?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag30?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+15px%3B%26quot%3B%22%3E<?php echo $tag30?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag31?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+14px%3B%26quot%3B%22%3E<?php echo $tag31?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag32?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+14px%3B%26quot%3B%22%3E<?php echo $tag32?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag33?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+14px%3B%26quot%3B%22%3E<?php echo $tag33?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag34?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+13px%3B%26quot%3B%22%3E<?php echo $tag34?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag35?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+13px%3B%26quot%3B%22%3E<?php echo $tag35?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag36?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+13px%3B%26quot%3B%22%3E<?php echo $tag36?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag37?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+12px%3B%26quot%3B%22%3E<?php echo $tag37?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag38?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+12px%3B%26quot%3B%22%3E<?php echo $tag38?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag39?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+12px%3B%26quot%3B%22%3E<?php echo $tag39?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag40?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+11px%3B%26quot%3B%22%3E<?php echo $tag40?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag41?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+11px%3B%26quot%3B%22%3E<?php echo $tag41?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag42?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+10px%3B%26quot%3B%22%3E<?php echo $tag42?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag43?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+10px%3B%26quot%3B%22%3E<?php echo $tag43?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag44?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+10px%3B%26quot%3B%22%3E<?php echo $tag44?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag45?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+9px%3B%26quot%3B%22%3E<?php echo $tag45?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag46?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+9px%3B%26quot%3B%22%3E<?php echo $tag46?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag47?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+9px%3B%26quot%3B%22%3E<?php echo $tag47?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag48?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+8px%3B%26quot%3B%22%3E<?php echo $tag48?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag49?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+8px%3B%26quot%3B%22%3E<?php echo $tag49?>%3C%2Fa%3E%3Ca+href%3D%22search%2Fsearch.php%3Fquery=<?php echo $tag50?>%26search=1%22+style%3D%22%26quot%3Bfont-size%3A+8px%3B%26quot%3B%22%3E<?php echo $tag50?>%3C%2Fa%3E+%0A%3C%2Ftags%3E"
        width="400"
        height="400"
     >
</embed>

</body>
</html>