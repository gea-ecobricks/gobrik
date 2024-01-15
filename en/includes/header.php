<!-- GOBRIK.COM HTML HEADER v2.0-->

<!-- This gets the name of the page.  This is then used for the custom metatags-->

<?php
	$parts = explode ("/", $_SERVER['SCRIPT_NAME']);
	$name = $parts [count($parts)-1];
	;?>

<!-- Sets the language of the page for use in the meta tag link composition-->

<?php require_once ("lang.php");?>

<!-- This preloads the above the fold key landing images  -->

<link rel="preload" as="image" href="../svgs/gobrik-logo-dark.svg">
<link rel="preload" as="image" href="../svgs/gobrik-logo-static.svg">
<link rel="preload" as="image" href="../svgs/settings-icon.svg">
<link rel="preload" as="image" href="../svgs/settings-icon-over.svg">
<link rel="preload" as="image" href="../svgs/settings-icon-over-dark2.svg">
<link rel="preload" as="image" href="../svgs/settings-icon-dark.svg">



<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="https://fonts.googleapis.com/css2?family=Arvo&display=swap"></noscript>


<link rel="preload" href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap"></noscript>



<!-- CUSTOM PAGE SCRIPTS
This enables accessibility text scaling on the page by the user
<script src="../accessibility.js" defer></script>-->

<!--These are the scripts for the new Richard Landing page-->
<script src="../richard-scripts.js?v=3.6"></script>

<!--This enables the Light and Dark mode switching-->
<script type="module" src="https://unpkg.com/dark-mode-toggle"></script>
<link rel="stylesheet" type="text/css" href="../slider.css">



<!-- This doesn't seem to be working:

Global site tag (gtag.js) - Google Analytics 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z5NZX7H9MB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z5NZX7H9MB');
</script>-->


  
<!-- This calls our webmanifest wich turns our page into a progressive web app (PWA)
<link rel="manifest" href="manifest.webmanifest"> -->

	
<!-- This allows GoBrik to be used a PWA on iPhones -->

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3, user-scalable =yes">
<meta name="apple-mobile-web-app-title" content="GoBrik">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png?v=2">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png?v=2">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png?v=2">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png?v=2">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png?v=2">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png?v=2">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png?v=2">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png?v=2">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png?v=2">
<link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png?v=2">
<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png?v=2">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png?v=2">
	
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png?v=2">
<meta name="theme-color" content="#ffffff">
	
<!-- Launch screens for iOS - Not sure if this working -->

<meta name="apple-mobile-web-app-capable" content="yes">

<!--
  <link href="../icons/splashes/apple_splash_2048.png" sizes="2048x2732" rel="apple-touch-startup-image">
<link href="../icons/apple_splash_1668.png" sizes="1668x2224" rel="apple-touch-startup-image">
<link href="/apple_splash_1536.png" sizes="1536x2048" rel="apple-touch-startup-image" />
<link href="/apple_splash_1125.png" sizes="1125x2436" rel="apple-touch-startup-image" />
<link shref="/apple_splash_1242.png" sizes="1242x2208" rel="apple-touch-startup-image" />
<link href="/apple_splash_750.png" sizes="750x1334" rel="apple-touch-startup-image" />
<link href="/apple_splash_640.png" sizes="640x1136" rel="apple-touch-startup-image" />-->


	

