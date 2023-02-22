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



@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }


html {
height: 100%;
}


body {
	z-index: 0;
	text-align: center;
	position: relative;
	position: bottom;
	margin-top: 0px;
	padding-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
	background-color: #f7fdff;
	/*General interface background slightly off-white to make the white buttons and boxes show up better*/
}

@media screen and (min-width: 769px) {
	body {
		background: url(../svgs/top-clouds-desktop-static.svg) center top repeat-x ;
    		box-sizing: border-box;
		background-size: 100%;
	}
}
@media screen and (min-width: 0px) and (max-width: 768px) {
	body {
		background: url(../svgs/ashim-top-clouds-mobile.svg?v1.3) center top repeat-x;
    	box-sizing: border-box;
		background-size: 100%;
}
}

#loading-box {
	width: 100%;
	}	

@media screen and (min-width: 1000px) {
		#loading-box {
			min-height: 80vh;

	}
}
@media screen and (max-width: 999px) {
	#loading-box   {
		min-height: 51vh;
        }
}	

@media screen and (min-width: 1000px) {
#header {  
	padding-top: 18px;
	padding-bottom: 15px;
	z-index: 3;
	position: relative;
	background: white;
	box-shadow: 0px 0px 32px rgba(62, 65, 74, 0.6);	
}
}

@media screen and (max-width: 999px) {
#header {  
	padding-top: 14px;
	padding-bottom: 11px;
	z-index: 3;
	position: relative;
	background: white;
	box-shadow: 0px 0px 32px rgba(62, 65, 74, 0.6);	
}
}

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


@media screen and (min-width: 770px) and (max-width: 2000px) { 
#landing-content { 
	max-width: 80%;
	margin: auto;
	margin-bottom: 0px;
	background: none;
			}}
	@media screen and (max-width: 769px) { 
#landing-content { 
	padding-left: 12px;
	padding-right: 12px;
	margin-bottom: 0px;
	background: none;
			}}
  		


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


/* LANDING PAGE */
  
  .top-graphic {
      
      margin: auto;
      margin-top: -25px;
        position: relative;
        z-index: 0;
        margin-bottom: -10px;
        width: 500px;
        max-width: 87%;
  
        /*
        -webkit-animation-delay: 1.0s !important;
        opacity:0;
        -webkit-animation:fadeIn ease-in 0.25s;
        -webkit-animation-duration:0.25s;
        -webkit-animation-fill-mode:forwards;
    
        animation-delay: 1.0s; 
        animation: fadeIn ease-in 0.25s;
        animation-duration: 0.25s;
        animation-fill-mode: forwards;
  */
    }


.big-header {	
   
   font-family: 'Arvo', serif;
   margin-top: 20px;
   text-align: center !important;
   line-height: 1.2 !important;
   margin-bottom: 25px;
   text-shadow: 0px 0px 8px #fff;
		
   -webkit-animation-delay: 0.3s !important;
   opacity:0;
   -webkit-animation:fadeIn ease-in 0.25s;
   -webkit-animation-duration:0.25s;
   -webkit-animation-fill-mode:forwards;

   animation-delay: 0.3s; 
   animation: fadeIn ease-in 0.25s;
   animation-duration: 0.25s;
   animation-fill-mode: forwards;
   
}

@media screen and (min-width: 770px) { 
 .big-header {
	  font-size: 42px !important;
 }
}
	 
@media screen and (max-width: 769px) {
 .big-header {
	 font-size: 36px !important;
 }
}
	   
   
.main-statement {
 
   font-family: 'Mulish', sans-serif;
   text-align: center !important;
   line-height: 1.3 !important;
   margin: 20px 0px 13px 0px;
   text-shadow: 0px 0px 6px #fff;
   /*
   -webkit-animation-delay: 1.2s !important;
   opacity:0;
   -webkit-animation:fadeIn ease-in 0.25s;
   -webkit-animation-duration:0.25s;
   -webkit-animation-fill-mode:forwards;

   animation-delay: 0.75s; 
   animation: fadeIn ease-in 0.25s;
   animation-duration: 0.25s;
   animation-fill-mode: forwards;*/
}
	   
@media screen and (min-width: 770px) and (max-width: 2000px) { 
   .main-statement {
		font-size: 2.5em !important;
   }
}
	   
@media screen and (max-width: 769px) {
   .main-statement {
	   font-size: 1.5em !important;
   }
}
	   
.welcome-text {	
   
   font-size: 1.6em !important;
   font-family: 'Mulish', sans-serif;
   text-align: center !important;
   margin-bottom: 35px;
   
   /*
   -webkit-animation-delay: 2.2s !important;
   opacity:0;
   -webkit-animation:fadeIn ease-in 0.25s;
   -webkit-animation-duration:0.25s;
   -webkit-animation-fill-mode:forwards;

   animation-delay: 2.2s; 
   animation: fadeIn ease-in 0.25s;
   animation-duration: 0.25s;
   animation-fill-mode: forwards;*/
	   }

@media screen and (min-width: 770px) and (max-width: 2000px) { 
 .welcome-text {
	   font-size: 1.8em !important;
 }
}
	 
@media screen and (max-width: 769px) {
 .welcome-text {
	 font-size: 1.2em !important;
 }
}

.tree-coins {
        margin-top: -120px;
        position: relative;
        z-index: -1;
        opacity:0;
        
        -webkit-animation-delay: 3s !important;
        -webkit-animation:fadeIn ease-in 0.25s;
        -webkit-animation-duration:0.25s;
        -webkit-animation-fill-mode:forwards;
    
        animation-delay: 3s; 
        animation: fadeIn ease-in 0.25s;
        animation-duration: 0.25s;
        animation-fill-mode: forwards;
        
        }
    
        
    .tree-text {
      /*font-size: 16px !important;
      font-family: 'Mulish', sans-serif;*/
      text-align: center !important;
      line-height: 1.4 !important;
      position: relative;
      z-index: 5;
      font-weight: 300;
      margin: 5px 10px 3px 10px;
      margin-bottom: -150px;
      opacity:0;
        
      -webkit-animation-delay: 3s !important;
      -webkit-animation:fadeIn ease-in 0.25s;
      -webkit-animation-duration:0.25s;
      -webkit-animation-fill-mode:forwards;
    
      animation-delay: 3s; 
      animation: fadeIn ease-in 0.25s;
      animation-duration: 0.25s;
      animation-fill-mode: forwards;
    }
        
        @media screen and (min-width: 770px) and (max-width: 2000px) { 
            .tree-text { 
                margin-bottom: -150px;
            }
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

  .sign-innn {
  font-family: 'mulish', sans-serif !important;
  display: block;
  margin: auto;
  background: #00a1f2;
  background-image: -webkit-linear-gradient(top, #00a1f2, #008ad4);
  background-image: -moz-linear-gradient(top, #00a1f2, #008ad4);
  background-image: -ms-linear-gradient(top, #00a1f2, #008ad4);
  background-image: -o-linear-gradient(top, #00a1f2, #008ad4);
  background-image: linear-gradient(to bottom, #00a1f2, #008ad4);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px !important;
  color: #ffffff;
  font-size: 22px !important;
  padding: 12px 22px 12px 22px !important;
  text-decoration: none !important;
  margin-top: 0px;
  margin-bottom: 0px;
	font-weight: 700;
  border: none;
}


.sign-innn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
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

.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: #DFDFDF;
  margin-top: 10px;
  flex-wrap: wrap-reverse;
}


@media screen and (min-width: 700px) { 

	.flex-container > .gal-photo {
		background-color: #DFDFDF;
		margin: 2px;
		padding: 2px;
		max-height: 190px;
		overflow: hidden;
		text-align: center;
	}

/*	.photo-box {
		max-height: 225px;
		overflow: hidden;
		background: grey;
	}
    */

	.gal-photo img {
		max-height: 190px;
		height: 190px;
	}

	
	.gal-photo-text {
		background-color: #DFDFDF;
		margin: 0px;
		text-align: center;
		padding: 2px;
		overflow: hidden;
        font-size: 0.9em;
	}


	.photo-box-end {

		height: 190px;
		width: 120px;
		overflow: hidden;
		background: grey;
		line-height: 190px;
		color: #dfdfdf;
		text-align: center;
		font-size: 4em;
		padding: 2px;
		text-decoration: none;
		animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;}

}

@media screen and (max-width: 700px) { 

	.flex-container > .gal-photo {
		background-color: #DFDFDF;
		margin: 0px;
		padding: 2px;
		height: 81px;
		overflow: hidden;
	}

	.gal-photo img {
		height: 81px;
		display: block;
		margin: auto;

	}

	.photo-box-end {
		max-height: 81px;
		width: 60px;
	
		overflow: hidden;
		background: grey;
		line-height: 75px;
		color: #dfdfdf;
		text-align: center;
		font-size: 2em;
		padding: 2px;
		text-decoration: none;
		animation: blinker 1.5s cubic-bezier(0,.43,1,.64) infinite;}
	
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




@media screen and (max-width: 700px) { 
	.gallery-content-block {
		text-align: center;
		min-height: 67vh;
		z-index: 5;
		position: relative;   
        background-color: #DFDFDF;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 120%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 33px;
        padding-top: 12px;
		overflow: hidden;
		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/
	}

}


@media screen and (min-width: 700px) { 
	.gallery-content-block {		
		text-align: center;
		min-height: 67vh;
		z-index: 5;
		position: relative;   
        background-color: #dfdfdf;
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 120%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;
		overflow: hidden;

        padding-top: 10px;

		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/  

	}
} 




/*TOP TEN GALLERY*/

.gallery-background {
    text-align: center;
    margin-bottom: 120px;
    padding-bottom: 20px;
    background: #e5e5e559;
    margin-top: 50px;
}


@media screen and (max-width: 700px) { 
	.gallery10-content-block {
		text-align: center;
		z-index: 5;
		position: relative;   
        background-color: #0ff;
		display: flex;
 		box-sizing: border-box;
		flex-direction: row;
		width: 110%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;
        padding-top: 5px;
        overflow: auto;
        white-space: nowrap;
     
	}

}


@media screen and (min-width: 700px) { 
	.gallery10-content-block {		
		text-align: center;
		/*min-height: 67vh;
        flex-wrap: wrap;*/
		z-index: 5;
		position: relative;   
        background-color: #0ff /*#dfdfdf*/;
		display: flex;
 		box-sizing: border-box;
		flex-direction: row;
		width: 120%;
  		margin-right: -5%;
  		margin-left: -5%;
		margin-top: 0px;
        margin-top: 70px;
        padding-top: 20px;
        padding-bottom: 15px;
		/*box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
		margin-bottom: 40px;
		padding-bottom: 15px;*/
        overflow: auto;
        white-space: nowrap;
     

	}
} 

.flex-container10 {
  display: flex;
  /*flex-wrap: wrap;
    overflow-x: scroll;*/
  /*background-color: #0ff #dfdfdf;*/
  margin-top: -10px;
  margin-bottom: 0px;
}


@media screen and (min-width: 700px) { 

.flex-container10 > .gal-photo10 {
    background-color: #0ff /*#dfdfdf*/;;
    margin: 0px;
    padding: 2px;
   /* max-height: 520px;
    overflow: hidden;*/
    text-align: center;
    margin-top: -35px;
}

/*
.photo-box10 {
    max-height: 520px;
    overflow: hidden;
    
}*/

.gal-photo10 img {

    height: 520px;
    max-height: 520px;

    
}
}



.gal10-photo-text {
    background-color: #8DF9F9 /*#DFDFDF*/;
    margin: 0px;
    text-align: left;
    padding: 3px;
    overflow: hidden;    
    font-size: 0.8em;
    font-family: Mulish;
    width: 235px;
    color: #504f4f;
    border-radius: 0px 0px 10px 10px;
padding: 15px;
width: 80%;
margin-top: -10px;
margin-right: auto;
margin-left: 0px;
}



@media screen and (max-width: 700px) { 

.flex-container10 > .gal-photo10 {
    background-color: #0ff #dfdfdf;
    margin: 0px;
    padding: 4px;
    /*overflow: hidden;*/

}

/*
.photo-box10 {
    max-height: 225px;
    overflow: hidden;
    
}*/

.gal-photo10 img {
    max-width: 235px;
    max-height: 365px;
    display: block;
}
}

/*
.gal-photo-text {
    background-color: #DFDFDF;
    margin: 2px;
    text-align: center;
    padding: 8px;
    width: 205px;
    max-width:205px;
    overflow: hidden;
        margin-bottom: 0px;
}*/

.gal-photo10 p {
    font-size: 0.9em;
}

.clouds-new  {
    background: url(https://www.ecobricks.org/webp/mountain-top2.webp?v4) no-repeat center bottom;
    width:100%;
    text-align:center;
}

@media screen and (min-width: 770px) { 
    .clouds-new  {
        background-size:cover;
        padding-bottom: 50px;

    }
}

@media screen and (max-width: 770px) { 
    .clouds-new  {
        background-size:contain;
        padding-bottom: 10px;
    }
}




</style>

  </style>
</head>