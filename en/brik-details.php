
<!--PAGE LANGUAGE:  ENGLISH
Special Ecobrick View Page: v.1.0.1-->
 

<!--require_once ("includes/details-ecobrick-page-inc.php");-->

<!--Content Page template: v.1.0.0-->

<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<meta charset="UTF-8"> 

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">

_END;?>

<HEAD>  

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="https://ecobricks.org/logos/gea-horizontal.svg">
<link rel="preload" as="image" href="https://ecobricks.org/webp/brikmarket-400px.webp?v1.3">
<link rel="preload" as="image" href="https://ecobricks.org/svgs/brik-market-banner3.svg">



<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

include 'ecobricks_env.php';

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<title>Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g of plastic sequestered by '. $array["owner"] .' in '. $array["location_full"] .'.</title>';

        echo '<meta name="description" content="An authenticated ecobrick that was published and archived on the brikcoin manual blockchain on ' . $array["last_validation_ts"] .'">';

        if ( isset($array["vision"]) && $array["vision"] != '' ) {
            echo '<meta name="description" content="'. $array["vision"] .'">';
    
        }

		echo '<meta name="keywords" content="ecobrick, serial '. $array["owner"] .', '. $array["owner"] .', brikchain, brikcoin, brik record, plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:title"         content="Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g of plastic sequestered by '. $array["owner"] .' in '. $array["location_full"] .'.">';
        echo '<meta property="og:description"   content="An authenticated ecobrick that was published and archived on the brikcoin manual blockchain on ' . $array["last_validation_ts"] .'"/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="The brikchain record of an authenticated ecobrick on the brikchain"/>';
        echo '<meta property="og:locale" content="en_GB" />';
        echo '<meta property="og:type"          content="website">';
 	   

        echo '<meta property="og:type" content="article" />
        <meta property="og:site_name" content="Ecobricks.org" />
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" />
        <meta property="article:modified_time" content="'. $array["last_validation_ts"] .'" />
        <meta property="og:image:type" content="image/png" />
        <meta name="author" content="Global Ecobrick Alliance" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="15 minutes" /> ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>No Ecobrick Found | Ecobricks.org</title>';
    echo '<meta name="description" content="No data found for this ecobrick serial number.  Most likely this is because the brikchain data is still in migration."> ';
}
$conn->close();?>



<meta charset="UTF-8"> 

<?php
	$parts = explode ("/", $_SERVER['SCRIPT_NAME']);
	$name = $parts [count($parts)-1];
	if (strcmp($name, "welcome.php") == 0)
  $name = "";
	;?>
	
	<link rel="canonical" href="https://ecobricks.org/<?php echo ($lang); ;?>/<?php echo ($name); ;?>"> 
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

	<link rel="alternate" href="https://ecobricks.org/en/<?php echo ($name); ;?>" hreflang="en">
	<link rel="alternate" href="https://ecobricks.org/id/<?php echo ($name); ;?>" hreflang="id"> 
	<link rel="alternate" href="https://ecobricks.org/es/<?php echo ($name); ;?>" hreflang="es"> 
	<link rel="alternate" href="https://ecobricks.org/fr/<?php echo ($name); ;?>" hreflang="fr"> 
	<link rel="alternate" href="http://ecobricks.org/en/<?php echo ($name); ;?>" hreflang="x-default">

<!-- Arc CDN Script without delay
<script async src="https://arc.io/widget.min.js#Z7EC7Cze"></script>-->

<!-- This calls our Github hosted stylesheet - if it gets hopelessly cached and doesn't load, up the version number! -->
		
<link rel="stylesheet" type="text/css" href="http://ecobricks.org/stylesheet-general.css?v2.9">

<meta property="og:site_name" content="Ecobricks.org">
<meta property="article:publisher" content="https://web.facebook.com/ecobricks.org">

	
<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 

<!-- Arvo loads very last to speed up first load.  See the script in the footer that triggers this  

<noscript>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" />
</noscript>


<link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet" media="print" onload="this.media='all'">-->
		

<!-- This calls our webmanifest wich turns our page into a progress web app (PWA) 
<link rel="manifest" href="manifest.webmanifest">-->

<!-- This allows Ecobricks.org to be used a PWA on iPhones
	
<meta name="apple-mobile-web-app-capable" content="yes">-->

<!--<meta name="viewport" content="width=device-width, initial-scale=1.8, target-densitydpi=160, maximum-scale=1, user-scalable = no">
-->

<!-- WHAT"S THIS? <meta http-equiv="Cache-control" content="no-store" Cache-Control: private, max-age=604800>
-->
<meta name="apple-mobile-web-app-title" content="Ecobricks.org">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	


<!-- Enables the nav menu grey circle on mobile by click-->

<script>
	function appMenu() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
</script>



<!-- Required script for something?? -->




<STYLE>


.vision-quote {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #222222;
  font-weight: 300;
  text-shadow: 0 0 10px #fff;
}
@media screen and (max-width: 769px) {
	.vision-quote {
      font-size: 2.4em;
      line-height: 1.2;
      padding: 10px 6% 0px 6%;
	  margin-bottom: -18px;
  }
}
@media screen and (min-width: 769px) {
	.vision-quote {
      font-size: 4em;
      line-height: 1.3;
      padding: 15px;
	  margin-top: -40px;
	  margin-bottom: -20px;
  }
}

/* Sidebar/right column */

.row-details {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}

@media screen and (min-width: 700px) {
.main-details {
  flex: 60%;

  padding: 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main-details {
  flex: 100%;
  box-sizing: border-box;
}
}

@media screen and (min-width: 700px) {
	.side-details {
	flex: 40%;
	padding-left: 10px;
	box-sizing: border-box;
	margin-top: 30px;
	background: #ECECEC;
	padding: 10px;
	height: fit-content;
		}
	}

@media screen and (max-width: 700px) {
	.side-details {
	flex: 90%;
	margin: 0px 5% 0px 5%;
	box-sizing: border-box;
	background: #ECECEC;
	padding: 10px;
	
	
	}
	}

#data-chunk {margin: 16px;}

	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}

@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 70vh;
		padding: 0px 7% 0px 7%;
		z-index: 5;
		position: relative;
		
        
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin: auto;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: left;
    margin: auto;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;

  width: 100%;
	padding: 0px;
	box-sizing: border-box;
	margin: 32px 8% -25px 4%;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
    flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
    margin: auto;
}
}



.splash-heading { 
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
    font-family: Arvo, serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.25em;
		line-height: 1.25;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:100px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #2A91DA;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}





</style>

</head>
							  
											  
<BODY id="full-page">

Test sadja

</body>

</html>