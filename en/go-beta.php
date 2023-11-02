<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8"> 

<!-- Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages--> 

<title>GoBrik | BETA 2.2 </title>

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

<script type="text/javascript">app_id="654387b48cf6b600295bba26";distribution_key="dist_2"; async</script>
        
<script type="text/javascript" src="https://loader.knack.com/654387b48cf6b600295bba26/dist_2/knack.js" async></script>



<script async src="https://arc.io/widget.min.js#mJFtQsHF"></script>



<!--Default Light Styles to load first-->
<link rel="preload" href="../light.css?v5.8" as="style" onload="this.rel='stylesheet'">

<!-- Main Landing stylesheet -->
<link rel="preload" href="../2023-stylesheet.css?v1.2" as="style">

 <!--Stylesheets for light and dark mode.  They need to be called here-->
<link rel="stylesheet" href="../light.css?v5.8" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">

<link rel="stylesheet" href="../dark.css?v=7.2" media="(prefers-color-scheme: dark)">
 


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
  src: url("../fonts/Arvo-regular.");
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

<link rel="stylesheet" type="text/css" href="../2023-stylesheet.css?v1.2">


</head>

<body id="full-page" class="accessibility-plugin-ac">

    <?php include 'includes/top-menu.php';?>

  <!-- Main knack loader--> 
  <div id="knack-dist_2">
        <div class="loader-spin"></div>
  </div>

<?php require_once ("includes/settings-curtain.php");?>
         
</body>

</html>
