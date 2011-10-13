<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Terms and Conditions</title>
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
            <p><a href="#">Terms</p>
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
<strong>Copyright Restrictions upon Materials in our Holdings</strong>

<p>Some documents  &#8211; including images, sound, cartographic, textual, or electronic materials &#8211; found in our holdings may be copyrighted. Please note that it is your responsibility to identify the copyright owner and to obtain permission before making use of this material in any way. We have provided a <strong>Source and Permissions Contact List</strong></a> for some motion pictures, sound and video which may assist you. If you have questions about this process, please contact us.</p>

<p>

The copyright law of the United States (Title 17, United States Code) governs the making of photocopies or other reproductions of copyrighted material. This law provides that under certain conditions libraries and archives are authorized to furnish a photocopy or other reproduction of materials. One of these specific conditions is that the photocopy or reproduction is not to be &quot;used for any purpose other than private study, scholarship, or research.&quot; If you use a photocopy or reproduction for purposes in excess of &quot;fair use,&quot; you may be liable for copyright infringement.</p>

<p><strong>Please note: The National Archives and Records Administration reserves the right to refuse to accept a copying order if, in its judgment, fulfillment of the order would involve violation of copyright law.</strong></p>



<hr noshade size="1">

<a name="surety"></a><strong>Information Surety</strong>

<p>We recommend that you acquire information describing the services and products of the National Archives and Records Administration (NARA) directly from NARA's official web sites, because other, non-NARA sources may not be able to maintain accurate information pertaining to our programs.</p>

  <p>We work hard to ensure the information provided to you is accurate and complete. However, it is possible that information may change prior to updating. We welcome your suggestions on how to improve our home page and correct errors.</p>

<p>Please use the information on this web site based on your evaluation and analysis of any risks. It is your responsibility to ensure that the information you use (including software, images, audio files, artwork, and documents) are free of any violations of intellectual property rights. 



<p>Some of the documents on the server may contain live references (or &quot;pointers&quot;) to information created and maintained by other organizations. NARA does not control and cannot guaranty the relevance, timeliness, or accuracy of the outside materials.</p>

<p>Please note that electronic editions of <em>Federal Register</em> publications (Executive Orders) are posted on the GPO Access web site. NARA's GPO Access web pages are jointly administered by NARA and the Government Printing Office. Federal Register online publications are generally considered to be documents of record under Federal Register regulations and statements posted on NARA's web site and GPO Access. NARA's Office of the Federal Register controls the content of Federal Register publications on GPO Access and stands behind the accuracy and authenticity of the material. Therefore, we provide direct links from NARA's web site to Federal Register web pages on GPO Access.</p>

<p>  Because we do not know how you are using information found on our web site, we do not make any express or implied warranties about the information contained in this web site for your particular use. Except as to segments of this web site specifically identified as authoritative guidance, we disclaim these warranties to the full extent provided by state and Federal law, including, but not limited to the warranties for merchantability, fitness for a particular purpose, and non-infringement of proprietary rights. All indirect, consequential, implied, punitive and special damages are deemed waived if you use the information on this web site in any manner.</p>

<p>The vast majority of information presented through web sites administered by the National Archives and Records Administration (NARA), are not documents of record. Please note that authenticity of information can be confirmed only by examining the &quot;record&quot; version. If you have questions about the authenticity of a document, please contact the owner of the page that concerns you, or you may contact us.</p>




</body>
</html>
