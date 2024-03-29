<!DOCTYPE html>

<html lang="en">

<head>
<!-- Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages--> 

<title>GoBrik | Login</title>
<meta name="keywords" content="gobrik, ecobrick app, eco, brick, eco brick, ecobrick, eco-brick, eco, bricks, eco brick, ecobricks, eco-bricks, brik, briks, plastic, plastic management, carbon sequestration,  plastic solved, drop off, exchange, marketplace, plastic sequestration, aes plastic, plastic offsetting, ecological accounting, plastic accounting">
<meta name="description" content="Manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions.">
<meta name="author" content="Global Ecobrick Alliance">

<!-- Facebook Open Graph Tags for social sharing-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
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

<!--<link rel="preload" as="image" href="https://gobrik.com/svgs/casandra.svg">-->

<script type="text/javascript">app_id="5b8c28c2a1152679c209ce0c";distribution_key="dist_52"; async</script>
        
<script type="text/javascript" src="https://loader.knack.com/5b8c28c2a1152679c209ce0c/dist_52/knack.js" async></script>

<?php require_once ("includes/header.php");?>

<!--LEGACY Sheet to move into march-stylesheet
<link rel="stylesheet" type="text/css" href="../april-old-knack-to-transition.css?v9.6">
-->
<!--Default Light Styles to load first-->
<link rel="preload" href="../light.css?v5.71" as="style" onload="this.rel='stylesheet'">

<!-- Main Landing stylesheet -->
<link rel="stylesheet" type="text/css" href="../march-stylesheet.css?v9.71">

<!--LEGACY Sheets to consolidate-->
<link rel="stylesheet" type="text/css" href="../april-old-knack-to-transition.css?v=1.01">


<!--Stylesheets for light and dark mode.  They need to be called here-->
<link rel="stylesheet" href="../light.css?v5.71" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">

<link rel="stylesheet" href="../dark.css?v5.7" media="(prefers-color-scheme: dark)">
 
<style>

#header {
  box-shadow: none !important;
}

.kn-mobile-controls { 
  z-index: 26 !important;
  margin-top: 7px;
}

.main-menu-button {
  display:none;
}

.kn-content {
  margin-top: -70px;}

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

</head>

<body id="full-page">

    <?php include 'includes/top-menu.php';?>

  <!-- Main knack loader--> 
  <div id="knack-dist_52">
        <div class="loader-spin"></div>
  </div>

<?php require_once ("includes/settings-curtain.php");?>
         
</body>

</html>
