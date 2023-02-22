<!DOCTYPE html>
<html>
<head>
<?php $dist='42';?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >



<!-- Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages-->

<title>GoBrik</title>
<meta name="keywords" content="gobrik, ecobrick app, eco, brick, eco brick, ecobrick, eco-brick, eco, bricks, eco brick, ecobricks, eco-bricks, brik, briks, plastic, plastic management, carbon sequestration,  plastic solved, drop off, exchange, marketplace, plastic sequestration, aes plastic, plastic offsetting, ecological accounting, plastic accounting">
<meta name="description" content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions.">
<meta name="author" content="Global Ecobrick Alliance">

<!-- Facebook Open Graph Tags for social sharing-->

<meta property="og:url"           content="https://www.gobrik.com">
<meta property="og:type"          content="app">
<meta property="og:title"         content="GoBrik">
<meta property="og:description"   content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions." >
<meta property="og:image"         content="https://www.gobrik.com/images/social-banner-1200px.png" >
<meta property="fb:app_id"  content="1781710898523821" >
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="1000" />
<meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it and the GoBrik logo floating above"/>
<meta property="og:locale" content="en_GB, id_ID, es_ES" />

<link rel="preload" as="image" href="https://gobrik.com/svgs/Happy-turtle-dolphin-opti2.svg">


<!-- sets page meta tags:  be sure to add page name-->
<?php require_once ("header.php");?>

<?php
	$parts = explode ("/", $_SERVER['SCRIPT_NAME']);
	$name = $parts [count($parts)-1];
	;?>

<script async type="text/javascript" async>
	app_id='5b8c28c2a1152679c209ce0c';
	region='eu-central';
	api_subdomain='eu-api';
	api_domain='knack.com';
	cdn_url='https://cdn1.cloud-database.co';
	assets='eu-secure-assets.cloud-database.co';
	api_subdomain='eu-api';
	s3='{"domain":"s3-eu-west-1.amazonaws.com","bucket":"assets.knack-eu.com"}';
	s3_secure='{"domain":"s3-eu-west-1.amazonaws.com","bucket":"eu-secure-assets.cloud-database.co"}';
	distribution_key="dist_<?php echo ($dist); ;?>";
	
	</script>
	<script type="text/javascript" src="https://loader.knack.com/5b8c28c2a1152679c209ce0c/dist_<?php echo ($dist); ;?>/knack.js"></script>


<!-- sets header and core of page:  be sure to add page name-->
<?php require_once ("go-core.php");?>

<!-- sets footer of page:  be sure to add page name-->
<?php require_once ("footer.php");?>

<script>
(function() {
      var linksOnPage = document.querySelectorAll("a");
      var link = "";
      for (var i = 0; i < linksOnPage.length; i++) {
        link = linksOnPage[i];
        link.setAttribute("onclick", "window.scrollTo(0, 0)");
  
      }
    })();
    </script>

    
</body>
</html>
