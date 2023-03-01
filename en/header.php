<?php
	$parts = explode ("/", $_SERVER['SCRIPT_NAME']);
	$name = $parts [count($parts)-1];
	;?>

<!-- preload key landing images  -->

<link rel="preload" as="image" href="../svgs/gobrik-logo-3.svg">
<link rel="preload" as="image" href="../svgs/top-clouds-desktop-static.svg?v1.1">
<link rel="preload" as="image" href="../svgs/ashim-top-clouds-mobile.svg">
<link rel="preload" as="image" href="../svgs/footer-clouds-desktop.svg">
<link rel="preload" as="image" href="../svgs/footer-clouds-mobile.svg">
<link rel="preload" as="image" href="../svgs/vision-footer-2022.svg">

<!-- This calls our GEA typography -->

<!-- This calls GEA typography -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Mulish loads first for first page view-->

<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500&display=swap" rel="stylesheet" media="print" onload="this.media='all'"> 
</noscript>


	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet" media="print" onload="this.media='all'"/>


<!-- Arvo loads very last to speed up first load.  See the script in the footer that triggers this  --> 
	
<!-- Main Landing stylesheet -->
<link rel="stylesheet" type="text/css" href="../landing-stylesheet.css?v1.5">

<!-- Main Landing stylesheet -->
<link rel="stylesheet" type="text/css" href="../new-page-stylesheet.css?v1.0">

<!-- Primary stylesheet 
<link rel="stylesheet" type="text/css" href="../main-stylesheet.css?v1.8">-->

<!-- Footer stylesheet -->
<link rel="stylesheet" type="text/css" href="../stylesheet-footer-new.css?2.0">

<!-- Knack Stylesheet -->
<link rel="stylesheet" type="text/css" href="../knack-stylesheet.css?v0.6">

<!-- CUSTOM PAGE SCRIPTS
<script src="spring-javascript.js?v1.4" async></script> -->

<link rel="preload" href="../light.css?v2.91" as="style" onload="this.rel='stylesheet'">
<link rel="preload" href="../acessibilidade.css" as="style" onload="this.rel='stylesheet'">


<script src="../accessibility.js" defer></script>
<script src="../richard-scripts.js?v=1.0"></script>
 <script type="module" src="https://unpkg.com/dark-mode-toggle"></script>
 
<link rel="stylesheet" href="../light.css?v2.91" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
 <link rel="stylesheet" href="../dark.css?v2.91" media="(prefers-color-scheme: dark)">
 


<!-- Global site tag (gtag.js) - Google Analytics 
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
<meta name="viewport" content="width=device-width, initial-scale=1.8, target-densitydpi=160, maximum-scale=1, user-scalable = no">
<meta name="apple-mobile-web-app-title" content="GoBrik">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
<link rel="apple-touch-icon" sizes="57x57" href="../icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
	
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	
<!-- Launch screens for iOS - Not sure if this working -->

<meta name="apple-mobile-web-app-capable" content="yes" />
<link href="../icons/splashes/apple_splash_2048.png" sizes="2048x2732" rel="apple-touch-startup-image" />
<link href="../icons/apple_splash_1668.png" sizes="1668x2224" rel="apple-touch-startup-image" />
<!--<link href="/apple_splash_1536.png" sizes="1536x2048" rel="apple-touch-startup-image" />
<link href="/apple_splash_1125.png" sizes="1125x2436" rel="apple-touch-startup-image" />
<link shref="/apple_splash_1242.png" sizes="1242x2208" rel="apple-touch-startup-image" />
<link href="/apple_splash_750.png" sizes="750x1334" rel="apple-touch-startup-image" />
<link href="/apple_splash_640.png" sizes="640x1136" rel="apple-touch-startup-image" />-->


	

