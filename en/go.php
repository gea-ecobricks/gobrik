<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 

<!-- Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages--> 

<title>GoBrik</title>

<meta name="keywords" content="gobrik, ecobrick app, eco, brick, eco brick, ecobrick, eco-brick, eco, bricks, eco brick, ecobricks, eco-bricks, brik, briks, plastic, plastic management, carbon sequestration,  plastic solved, drop off, exchange, marketplace, plastic sequestration, aes plastic, plastic offsetting, ecological accounting, plastic accounting">
<meta name="description" content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions.">
<meta name="author" content="Global Ecobrick Alliance">

<!-- Facebook Open Graph Tags for social sharing-->
<meta property="og:url"           content="https://www.gobrik.com/<?php echo $lang; ?>">
<meta property="og:type"          content="app">
<meta property="og:title"         content="GoBrik">
<meta property="og:description"   content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions." >
<meta property="og:image"         content="https://www.gobrik.com/images/social-banner-1200px.png" >
<meta property="fb:app_id"  content="1781710898523821" >
<meta property="og:image:width" content="1200" >
<meta property="og:image:height" content="1000" >
<meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it and the GoBrik logo floating above">
<meta property="og:locale" content="en_GB">



<!-- This calls our webmanifest wich turns our page into a progressive web app (PWA) -->
<!-- <link rel="manifest" href="manifest.webmanifest">

	 -->
<!-- This allows GoBrik to be used a PWA on iPhones -->

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.8, target-densitydpi=160, maximum-scale=1, user-scalable = no">
<meta name="apple-mobile-web-app-title" content="GoBrik">
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
	
<!-- Launch screens for iOS - Not sure if this working -->

<meta name="apple-mobile-web-app-capable" content="yes" />
<link href="icons/splashes/apple_splash_2048.png" sizes="2048x2732" rel="apple-touch-startup-image" />
<link href="icons/apple_splash_1668.png" sizes="1668x2224" rel="apple-touch-startup-image" />
<!--<link href="/apple_splash_1536.png" sizes="1536x2048" rel="apple-touch-startup-image" />
<link href="/apple_splash_1125.png" sizes="1125x2436" rel="apple-touch-startup-image" />
<link shref="/apple_splash_1242.png" sizes="1242x2208" rel="apple-touch-startup-image" />
<link href="/apple_splash_750.png" sizes="750x1334" rel="apple-touch-startup-image" />
<link href="/apple_splash_640.png" sizes="640x1136" rel="apple-touch-startup-image" />-->





<!--These are the scripts for the new Richard Landing page-->
<script src="../richard-scripts.js?v=3.6"></script>


<!--This enables the Light and Dark mode switching-->
<script type="module" src="https://unpkg.com/dark-mode-toggle"></script>
<link rel="stylesheet" type="text/css" href="slider.css">


<!--Default Light Styles to load first-->
<link rel="preload" href="../light.css?v5.8" as="style" onload="this.rel='stylesheet'">

<!-- Main Landing stylesheet -->
<link rel="preload" href="../2023-stylesheet.css?v1.85" as="style">



 <!--Stylesheets for light and dark mode.  They need to be called here-->
<link rel="stylesheet" href="../light.css?v5.8" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">

<link rel="stylesheet" href="../dark.css?v=7.2" media="(prefers-color-scheme: dark)">
 
<link rel="stylesheet" type="text/css" href="../2023-stylesheet.css?v1.84">


<!-- Primary stylesheet 
<link rel="stylesheet" type="text/css" href="../main-stylesheet.css?v1.91">-->
<!-- Knack Stylesheet 
<link rel="stylesheet" type="text/css" href="../knack-stylesheet.css?v0.61">-->
<!--still needed :-( 
<link rel="stylesheet" type="text/css" href="../april-old-knack-to-transition.css?v=1.3">
-->
<!-- 

<script async src="https://arc.io/widget.min.js#mJFtQsHF"></script> -->

<style>



@font-face {
  font-family: "Mulish";
  src: url("../fonts/Mulish-Light.ttf");
  font-display: swap;
  font-weight: 300;
 }

 @font-face {
  font-family: "Mulish";
  src: url("../fonts/Mulish-Regular.ttf");
  font-display: swap;
  font-weight: 500;
 } 

 @font-face {
  font-family: "Arvo";
  src: url("../fonts/Arvo-Regular.ttf");
  font-display: swap;
 }

#kn-app-header {
  background-color: var(--general-background) !important;
}

#header {
  box-shadow: none !important;
}


.kn-mobile-controls { 
  z-index: 26 !important;
  margin-top: -24px;
}

.main-menu-button {
  display:none;
}

.kn-content {
  margin-top: -40px;}

  

.loader-spin { 
  position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    margin:auto;
    z-index: 5;
    background: url('../svgs/bottle-loader-day-7.svg') center no-repeat;
      box-sizing: border-box;
   background-size: 100px;

 }

</style>


<script async>app_id="5b8c28c2a1152679c209ce0c";distribution_key="dist_53"; </script>
        
<script async src="https://loader.knack.com/5b8c28c2a1152679c209ce0c/dist_53/knack.js"></script>

</head>

<body id="full-page" class="accessibility-plugin-ac">

    <?php include 'includes/top-menu.php';?>

  <!-- Main knack loader--> 
<div id="knack-dist_53">
        <div class="loader-spin"></div>
  </div> 

 <!-- <div id="offline" style="width:80%"><br><br>
<h2>Sorry, GoBrik is offline</h2><h4>We'll be back in 24hrs as we pay our database hosting bill.  Our apologies for the inconvenience.  Please consider offsetting your plastic with us when we're back online-- we're 100% movement funded!  <a href="https://ecobricks.org/en/about.php">Learn about the GEA</a></h4>
</div>  -->

<?php require_once ("includes/settings-curtain.php");?>
         
</body>

</html>
