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
	
<!-- Primary stylesheet -->
<link rel="stylesheet" type="text/css" href="../main-stylesheet.css?v1.8">

<!-- Footer stylesheet -->
<link rel="stylesheet" type="text/css" href="../footer-stylesheet.css?2.0">

<!-- Knack Stylesheet -->
<link rel="stylesheet" type="text/css" href="../knack-stylesheet.css?v0.6">

<!-- CUSTOM PAGE SCRIPTS
<script src="spring-javascript.js?v1.4" async></script> -->

<link rel="preload" href="../light.css?v2.1" as="style" onload="this.rel='stylesheet'">
<link rel="preload" href="../acessibilidade.css" as="style" onload="this.rel='stylesheet'">


<script src="../accessibility.js" defer></script>
<script src="../richard-scripts.js"></script>
 <script type="module" src="https://unpkg.com/dark-mode-toggle"></script>
 
<link rel="stylesheet" href="../light.css?v2.1" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
 <link rel="stylesheet" href="../dark.css?v2.1" media="(prefers-color-scheme: dark)">
 


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


	
<!-- Localise translation script

<script src="https://global.localizecdn.com/localize.js"></script>

<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: 'OuoVGmZSN0BEz', 
    rememberLanguage: true,
    // other options go here, separated by commas
  });
</script>

<script async src="https://arc.io/widget.min.js#mJFtQsHF"></script>-->

<style>




.fa-bars  {
 	background: url(svgs/grey-emblem-button.svg) no-repeat center;
	background-size: contain;
	color: rgba(255, 255, 255, 0);
	font-size: 35px !important;
	margin-top:-10px;
opacity: 50%;
}


.fa-bars:hover {
  opacity: 100%;
}


  		


#offline { 
	z-index: 100;
	position: relative;
	margin: auto;
	max-width: 700px;
	background: none;
	display: block;
}


		
@media screen and (min-width: 0px) and (max-width: 769px) {
    #offline  {	
      	width: 90%;
		margin: auto;
	  	margin-top: 0px;
      }

	  .offline-image {
		width: 350px;
		height:374px;
		max-width: 90%;
		margin: auto;
		margin-bottom: -15px;
}
      }

  @media screen and (min-width: 770px) and (max-width: 1023px) { 
	#offline {	
		margin: auto;
		width: 600px;
          margin-top: 0px;
		padding-right: 10px;
		padding-left: 10px;
		margin-bottom: -150px;
          }
	.offline-image {
		width: 500px;
		height:534px;
		margin: auto;
		margin-bottom: -20px;
}
          }

  @media screen and (min-width: 1024px)  {
	#offline {	
		margin: auto;
		width: 60%;
		margin-top: -40px;
  }
  	.offline-image {
		width: 600px;
		height:641px;
		margin: auto;
		margin-bottom: -30px;
}
}

.offline-header {

	font-size: 36px;
    font-family: 'Arvo', Georgia, serif;
    text-align: center ;
	line-height: 1.3 ;
	font-weight: 500;
	text-shadow: 0px 0px 10px #fff;
	padding: 12px;
}

.offline-text {

	font-size: 28px !important;
	font-family: 'Mulish', sans-serif;
    text-align: center;
	line-height: 1.2;
	text-shadow: 0px 0px 10px #fff;
	font-weight: 300 ;
	padding: 10px;
}

.offline-subtext {
	font-size: 20px;
    font-family:'Mulish', sans-serif;
    text-align: center;
    line-height: 1.4 ;
    font-weight: 300;
	padding: 8px;
}

#full-page {
	font-family: Mulish, sans-serif;
}


	   

 @media screen and (min-width: 1000px) {
 #vision-clouds {
	position: relative;
	width:100%;
	z-index: -5;
	background: url(../svgs/footer-clouds-desktop.svg?v1.4) center top repeat-x ;
    box-sizing: border-box;
	background-size: 100%;
	margin-bottom: -270px;
min-height: 800px;
margin-top: -300px;
}
 }

@media screen and (max-width: 999px) {
 #vision-clouds {
	position: relative;
	width:100%;
	height: 30vh;
	z-index: -5;
	background: url(../svgs/footer-clouds-mobile.svg?v1.2) center top repeat-x ;
    box-sizing: border-box;
	background-size: 100%;
	margin-bottom: -320px;
min-height: 515px;
margin-top: -100px;
}
}
 

#vision-landscape {
    width: 100%;
    position: relative;
    z-index: -1;
    margin-bottom: -6px;
  }
  
  .vison-landscape img {
    position: absolute;
    left: 0px;
    bottom: 0;
    width: 100%;
  }


  .sign-up-button {
    background-color: rgba(252, 250, 250, 0.8);
  width: 200px;
  border-width: 4px;
  border-radius: 10px;
  font-family: 'Mulish', sans-serif;
  font-size: 22px;
  padding: 12px 22px 12px 22px;
color: #494949;
border-style: solid;
  }






/*Gallery CSS*/


.block {
  overflow: hidden;
  width: 800px;
  margin: 50px auto;
  background: #fff;
}
.animation {
  width: auto;
  height: 100px;
  font-size: 0px;
}
.animation div {
  display: inline-block;
  width: auto;
  float: none;
  padding: 0 10px;
}



/* FEATURED ECOBRICKS GALLERY FORMATING */

.brik-co2 {
    font-size: 0.7em;
    color: white;
    font-family: 'Impact', 'Haettenschweiler', 'Arial Narrow Bold', sans-serif;
    margin-top: -60px;
    text-align: left;
    padding: 0px 0px 10px 20px;
    background-color: black !important;
}




.photo-box-end a {
	color: #dfdfdf;
	text-decoration: none;}


    @media screen and (min-width: 700px) { 
.feed-live {
width: 100%;
text-align: center;
line-height: 1.5;
margin: auto;
padding: 10px;
background-color: #DFDFDF;
margin-bottom: 35px;
}

.feed-live p {
  font-size: .9em;
  font-family: courier new,monospace !important;
  color: #222;
  line-height: 1.3;
  margin-top: 5px;
  font-weight: 300;

}
    }

    @media screen and (max-width: 700px) { 
.feed-live {
width: 100%;
text-align: center;
padding: 10px;
line-height: 1.5;
background-color: #DFDFDF;
margin-bottom: 25px;}

.feed-live p {
  font-size: .8em;
  font-family: courier new,monospace !important;
  color: #222;
  line-height: 1.3;
  margin-top: 5px;
  font-weight: 300;

}
    }

  </style>


