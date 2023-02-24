<!DOCTYPE html>
<html>
<head>
<?php $lang='en';?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >

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
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="1000" />
<meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it and the GoBrik logo floating above"/>
<meta property="og:locale" content="en_GB, id_ID, es_ES" />

<link rel="preload" as="image" href="https://gobrik.com/svgs/Happy-turtle-dolphin-opti2.svg">


<style>



@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }


html {
height: 100%;
}


body {
	z-index: 0;
	position: relative;
	position: bottom;
	margin-top: 0px;
	padding-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
	background-color: #f7fdff;
    overflow-x: hidden;
	/*General interface background slightly off-white to make the white buttons and boxes show up better*/
}



@media screen and (min-width: 1200px) { 

#landing-content { 
width: 70%;
margin: auto;
margin-bottom: 0px;
background: none;
    }
  }
  
  
  @media screen and (min-width: 700px) and (max-width: 1200px) { 

  #landing-content { 
	width: 80%;
	margin: auto;
	margin-bottom: 0px;
	background: none;
			}
    }


	@media screen and (max-width: 700px) { 
#landing-content { 
	background: none;
max-width: 90%;
margin: auto;
			}
    }

#header {
    transition: 0.4s;
    display: flex;
    justify-content: center;
    z-index: 20;
	position: relative;
	background: white;
	box-shadow: 0px 0px 32px rgba(62, 65, 74, 0.6);	
    width: 100%;

}
    @media screen and (min-width: 701px) {
#header {  
    height: 70px;
}
}

@media screen and (max-width: 700px) {
#header {  

    height: 70px;
}
}


.gobrik-logo {
    margin: auto;
position: absolute;
width: fit-content;
margin-top: 13px;
}


@media screen and (max-width: 700px) {
.top-menu-login-button {
    display:none;
}
}


.gallery-header {
    background-color:grey;
    height:40px;
    width:100%;
    display:flex;
    justify-content:center;
}

.gallery-live-text {
    font-size:0.75em;
    font-family:'Mulish';
    font-weight:300; 

    color:white;
    height:fit-content;
    padding-top: 10px;
}

.blink {
          animation: blinker 1.5s linear infinite;
          color: #00AA44;
          
      }
      @keyframes blinker {
          50% {
              opacity: 0;
      
          }
      }


.gallery-background {
    text-align: center;
    width: 100%;
    max-width: 100%;
    background-color:grey;
    margin-top: -10px;
    min-height: fit-content;
  	overflow-x: hidden;
    position: relative;
    z-index: 0;
    padding-bottom: 14px;
    min-height: 70vh;
}


	.gallery-content-block {
		text-align: center;
		/*min-height: 67vh;*/
		z-index: 5;
		position: relative;   
     /*background-color: #DFDFDF;*/
		display: flex;
 		flex-wrap: wrap;
 		box-sizing: border-box;
		flex-direction: row;
		width: 115%;
  		margin-right: -10%;
  		margin-left: -1%;
		overflow-x: hidden;

	}



    .flex-container {
  display: flex;
  flex-wrap: wrap;
  /*background-color: #DFDFDF;
  margin-top: 10px;
  /*flex-wrap: wrap-reverse;*/
}

@media screen and (max-width: 700px) { 

.flex-container > .gal-photo {
    /*background-color: #DFDFDF;*/
    margin: 0px;
    padding: 2px;
    height: 81px;
    overflow: hidden;
width: 60px;
}

.gal-photo img {
    height: 81px;
    display: block;
    margin: auto;

}
}


@media screen and (min-width: 700px) and (max-width: 1200px) { 

	.flex-container > .gal-photo {
		margin: 2px;
		padding: 2px;
		max-height: 130px;
		overflow: hidden;
		text-align: center;
	}

	.gal-photo img {
		max-height: 130px;
		height: 130px;
	}
}

@media screen and (min-width: 1201px)  { 

.flex-container > .gal-photo {
    margin: 2px;
    padding: 2px;
    max-height: 160px;
    overflow: hidden;
    text-align: center;
}

.gal-photo img {
    max-height: 160px;
    height: 160px;
}
}



@media screen and (min-width: 701px) {
  .clouds-new2  {
    background-image: linear-gradient(#30ffff, rgba(255,0,0,0), rgba(255,0,0,0), rgba(255,0,0,0));
  /*  background: url(../svgs/top-clouds-desktop-animate-to-static2.svg) center top repeat-x ;
    		box-sizing: border-box;
		background-size: 100%;*/
	}
}
@media screen and (min-width: 0px) and (max-width: 700px) {
  .clouds-new2  {
    background-image: linear-gradient(#30ffff, rgba(255,0,0,0), rgba(255,0,0,0), rgba(255,0,0,0));
   /* background: url(../svgs/ashim-top-clouds-mobile.svg?v1.3) center top repeat-x;
    	box-sizing: border-box;
		background-size: 100%;*/
}
}


.top-graphic {
      
      margin: auto;
      margin-top: -75px;
        position: relative;
        z-index: 0;
        margin-bottom: -10px;
        width: 500px;
        max-width: 87%;
        -webkit-animation-delay: 1.0s !important;
        opacity:0;
        -webkit-animation:fadeIn ease-in 0.25s;
        -webkit-animation-duration:0.25s;
        -webkit-animation-fill-mode:forwards;
    
        animation-delay: 1.0s; 
        animation: fadeIn ease-in 0.25s;
        animation-duration: 0.25s;
        animation-fill-mode: forwards;

    }


/* LANDING PAGE */
  

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
  -webkit-border-radius: 8px 0px 0px 8px;
  -moz-border-radius: 8px 0px 0px 8px;
  border-radius: 8px 0px 0px 8px;
  color: #ffffff;
  font-size: 22px !important;
  padding: 12px 22px 12px 22px !important;
  text-decoration: none !important;
  margin-top: 0px;
  margin-bottom: 0px;
	font-weight: 700;
  border: none;
  margin-right: 3px;
}


.sign-innn:hover {
  background: #5b5bf6;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}



.sign-uppp {
  font-family: 'mulish', sans-serif !important;
  display: block;
  margin: auto;
  background: #00a1f2;
  background-image: -webkit-linear-gradient(top, #4646cf, #3b3baf);
  background-image: -moz-linear-gradient(top, #4646cf, #3b3baf);
  background-image: -ms-linear-gradient(top, #4646cf, #3b3baf);
  background-image: -o-linear-gradient(top, #4646cf, #3b3baf);
  background-image: linear-gradient(to bottom, #4646cf, #3b3baf);
  -webkit-border-radius: 0px 8px 8px 0px;
  -moz-border-radius: 0px 8px 8px 0px;
  border-radius: 0px 8px 8px 0px;
  padding-right: 5px;
  color: #ffffff;
  font-size: 22px !important;
  padding: 12px 22px 12px 22px !important;
  text-decoration: none !important;
  margin-top: 0px;
  margin-bottom: 0px;
	font-weight: 700;
  border: none;
  margin-left: 3px;
}


.sign-uppp:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #5b5bf6, #5454ff);
  background-image: -moz-linear-gradient(top, #5b5bf6, #5454ff);
  background-image: -ms-linear-gradient(top, #5b5bf6, #5454ff);
  background-image: -o-linear-gradient(top, #5b5bf6, #5454ff);
  background-image: linear-gradient(to bottom, #5b5bf6, #5454ff);
  text-decoration: none;
}


.tree-coins {
        margin-top: 0px;
        position: relative;
        z-index: -1;
        opacity:0;
        text-align: center;
        
        -webkit-animation-delay: 3s !important;
        -webkit-animation:fadeIn ease-in 0.25s;
        -webkit-animation-duration:0.25s;
        -webkit-animation-fill-mode:forwards;
    
        animation-delay: 3s; 
        animation: fadeIn ease-in 0.25s;
        animation-duration: 0.25s;
        animation-fill-mode: forwards;
        
        }


        @media screen and (max-width: 769px) {

.tree-coins img {
    width: 100%;
}

        }


.welcome-text {	
   
   font-size: 1.6em !important;
   font-family: 'Mulish', sans-serif;
   text-align: center !important;
   margin-bottom: 35px;
   
   
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
    
        
    .tree-text {
      font-size: 16px ;
      font-family: 'Mulish', sans-serif;
      width: 80%;
      text-align: center;
      line-height: 1.4;
      position: relative;
      z-index: 5;
      font-weight: 300;
      margin:auto;
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
        



.aes-logos {
    width: 100%;
height: 60px;
margin: auto;
text-align: center;
margin-top: 26px;
}

#lang-button {position: relative !important;
transition: 0.3s;}


/*settings-curtain*/


/* -------------------------------------------------------------------------- */

/*	4. User Settings Overlay Curtain 

    Comes in from the left after clicking +- button.

/* -------------------------------------------------------------------------- */

#right-settings-overlay {
  background-color: white /*var(--overlays-and-headers:)*/; 
  color: black  /*var(--text-color)*/ ;
  z-index: 26;
}


/* Table of Contents Menu (background) */
.overlay-settings {
  height: 100%;
  width: 0%;
  position: fixed; /* Stay in place */
  z-index: 21; /* Sit on top */
  right: 0;
  top: 0;
  overflow-x: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}


/* Position the content inside the overlay */
.overlay-content-settings {
  position: initial;
  text-align: center; /* Centered text/links */
   /*margin-top: 30px; 30px top margin to avoid conflict with the close button on smaller screens */
  font-family: "Mulish";
  font-size: smaller;
  display: flex;
  justify-content: center;
  flex-flow: column;
  height:100%;  
  margin: auto;
}


@media screen and (max-width: 700px) {
  .overlay-content-settings {
    width: 77%;
    font-size: 0.9em;
    /*margin-top: 6%;*/
}
}

@media screen and (min-width: 700px) and (max-width: 1324px) {
  .overlay-content-settings {
    width: 65%;
    font-size: 0.9em;
    /*margin-top: 2%;*/
}
}

@media screen and (min-width: 1325px) {
    .overlay-content-settings {
      width: 69%;
      margin: auto;
    }
}

.settings-label {
  font-family: 'Mulish';
  font-size: 1.2em;
  margin: 18px 0px 8px 0px;
}

#languages {
  display: flex;
  margin: 10px auto 10px auto;
  justify-content: center;
  padding: 5px 30px 5px 30px;
  background: var(--background-color);
  border-radius: 55px;
  width: fit-content;
}

.language-selector {
  font-family: 'Mulish';
  padding: 10px 20px 10px 20px;
  background: var(--deeper-accent-color);
  border-radius: 10px;
  margin: 10px;
  filter: invert(100);
  font-size: 1.1em;
  cursor: pointer;

}

.language-selector a:hover {
  color: var(--deeper-accent-color);
}

.language-selector a {
  color: var(--text-color);
}



/*Carbon Badge */

#wcb.wcb-d #wcb_a {
  color: #2e2e2e !important;
background: #27ad37 !important;
border-color: #00a112 !important;
}

#wcb #wcb_a,
#wcb #wcb_g {
  border: 0.2em solid #2cb03c !important;
}

#wcb.wcb-d #wcb_2 {
  color: grey !important;
}







/* -------------------------------------------------------------------------- */

/*	13. Text Size Adjust Section

/* -------------------------------------------------------------------------- */


#text-adjust {
margin: 10px auto 12px auto;
width: fit-content;
background: var(--header-footer);
border-radius: 55px;

}

#increase-plugin-ac  {
padding: 10px;
border: grey;
background: white;
color: black;
border-style: solid;
border-radius: 40px 10px 10px 40px;
border-width: 1px;
font-size: 25px;
margin: 20px;
font-family: "Mulish";
display: inline;
text-align: center;
text-decoration: none;
margin: 7px;
cursor: pointer;
    }

#normal-plugin-ac {
  padding: 10px;
  border: grey;
  background: white;
  color: black;
  border-style: solid;
  border-radius: 5px;
  border-width: 1px;
  font-size: 25px;
  margin: 20px;
  font-family: "Mulish";
  display: inline;
  text-align: center;
  text-decoration: none;
  margin: 7px;
  cursor: pointer;
    }

#decrease-plugin-ac {
  padding: 10px;
  border: grey;
  background: white;
  color: black;
  border-style: solid;
  border-radius: 10px 40px 40px 10px;
  border-width: 1px;
  font-size: 25px;
  margin: 20px;
  font-family: "Mulish";
  display: inline;
  text-align: center;
  text-decoration: none;
  margin: 7px;
  cursor: pointer;
    }


/* -------------------------------------------------------------------------- */

/*	18. Sepia, Contrast, Brightness Sliders

    This shows up on the settings page.
    Unfortunately, it only works for one page at a time.

/* -------------------------------------------------------------------------- */


#containerSepia {
    width: 100%;
    height: 100%;
    z-index: -10;
    position: absolute;
    background-color: var(--background-color);
    top: 0;
    overflow: hidden;
  }

  #containerContrast {
    width: 100%;
    height: 100%;
    z-index: -10;
    position: absolute;
    background-color:var(--background-color);
    top: 0;
    overflow: hidden;
  }


  #containerBrightness {
    width: 100%;
    height: 100%;
    z-index: -10;
    position: absolute;
    background-color: var(--background-color);
    top: 0;
    overflow: hidden;
  }



#range-scale {
-webkit-appearance: none;
background: #5c5c5c;
height: 4px;
outline: none;
cursor: pointer;
margin-top: 7px;
margin-bottom: 14px;
border-radius: 8px;
border-width: 1px;
border-color: #8b8a8a;
border-style: solid;
margin-right: auto;
margin-left: auto;
  }

  @media screen and (max-width: 699px) {

    #range-scale { 
      width: 80%;
    }

  }

  @media screen and (min-width: 700px) and (max-width: 1324px) {

    #range-scale { 
      width: 70%;
    }

  }

  @media screen and (min-width: 1325px) {

    #range-scale { 
      width: 30%;
    }

  }


  #brightness-range::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    cursor: pointer;
       
  }

  .top-settings-button  {
    border: none; 
    margin-right:10px;
    cursor:pointer;
    background: url('../svgs/settings-icon.svg') no-repeat;
    background-size: contain;
    height:30px;
    width:30px;
    
  }

  .top-settings-button:hover  {
    border: none; 
    margin-right:10px;
    cursor:pointer;
    background: url('../svgs/settings-icon-over.svg') no-repeat;
    background-size: contain;
    height:30px;
    width:30px;
  }

  .main-menu-button {
    position:absolute;
    left:0;
    margin-top: 22px;
    margin-left:20px;

    border: none; 
    margin-right:10px;
    cursor:pointer;
    background: url('../svgs/grey-emblem-button3.svg?v=2') no-repeat;
    background-size: contain;
    height:30px;
    width:30px;
  }

  .main-menu-button:hover  {
    border: none; 
    margin-right:10px;
    cursor:pointer;
    background: url('../svgs/grey-emblem-button-over.svg') no-repeat;
    background-size: contain;
    height:30px;
    width:30px;
  }



/* -------------------------------------------------------------------------- */

/*	5. Share Overlay Curtain

  Comes in from the right after clicking share button in header.

/* -------------------------------------------------------------------------- */



#left-menu-overlay {
  background-color: var(--overlays-and-headers); 
  color: inherit;
  z-index: 26;
}


/* Table of Contents Menu (background) */
.menu-overlay {
  height: 100%;
  width: 0;
  position: fixed; /* Stay in place */
  z-index: 21; /* Sit on top */
  right: 0;
  top: 0;
  overflow-x: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}


/* Position the content inside the overlay */
.menu-overlay-content {
  position: initial;
  text-align: center; /* Centered text/links */
   /*margin-top: 30px; 30px top margin to avoid conflict with the close button on smaller screens */
  font-family: "CooperLT";
  display: flex;
  justify-content: center;
  flex-flow: column;
  height:100%;
  margin: auto;
}


@media screen and (max-width: 700px) {
  .menu-overlay-content {
    width: 85%;
    font-size: 0.9em;
    /*margin-top: 6%;*/
}
}

@media screen and (min-width: 700px) and (max-width: 1324px) {
  .menu-overlay-content {
    width: 65%;
    font-size: 0.9em;
    /*margin-top: 2%;*/
}
}

@media screen and (min-width: 1325px) {
    .menu-overlay-content {
      width: 69%;
      margin: auto;
    }
}


/*Right Close Button*/

#right-close-button {
  position: absolute;
  right: 0px;
  transition: 0.3s;
  height: 75px;
  width:75px;
  padding-right: 30px;
  padding-top: 30px;
  right: 0px;
  top: 0px;
}


.x-button {
    background: url('../svgs/right-x.svg') no-repeat;
    padding: 10px;
    background-size: contain;
    width: 75px;
    height: 75px;
    border:none;
}

.x-button:hover {
    background: url('../svgs/x-over.svg') no-repeat;
    padding: 10px;
    background-size: contain;

}

/*Left CLose Button*/

#left-close-button {
  position: absolute;
  left: 0px;
  transition: 0.3s;
  height: 75px;
  width:75px;
  padding-left: 30px;
  padding-top: 30px;
  right: 0px;
  top: 0px;
}

#left-close-button:hover {
  left: -40px;
  transition: 0.5s;
  background-color: var(--background-color);
  box-shadow: var(--element-shadow);
}


#left-close-button img {
  height: 50px;
  padding-top: 20px;
  padding-left: 7px;
  margin-left: 0px;
}  

  
</style>

<script>

/* RIGHT SETTINGS OVERLAY */
function openSettings() {
  document.getElementById("right-settings-overlay").style.width = "100%";
  document.body.style.overflowY = "hidden";
  document.body.style.maxHeight = "101vh";

  var modal = document.getElementById('right-settings-overlay');

function modalShow () {
   modal.setAttribute('tabindex', '0');
   modal.focus();
}

function focusRestrict ( event ) {
  document.addEventListener('focus', function( event ) {
    if ( modalOpen && !modal.contains( event.target ) ) {
      event.stopPropagation();
      modal.focus();
    }
  }, true);
}
}


/* Close when someone clicks on the "x" symbol inside the overlay */
function closeSettings() {
  document.getElementById("right-settings-overlay").style.width = "0%";
  document.body.style.overflowY = "unset";
document.body.style.maxHeight = "unset";
  //document.body.style.height = "unset";
} 


/* LEFT MAIN MENU OVERLAY 

Triggers the right share link panel*/

function openMenu() {
  document.getElementById("left-menu-overlay").style.width = "100%";
  document.body.style.overflowY = "hidden";
  //document.body.style.maxHeight = "101vh";

  var modal = document.getElementById('left-menu-overlay');

function modalShow () {
   modal.setAttribute('tabindex', '0');
   modal.focus();
}

function focusRestrict ( event ) {
  document.addEventListener('focus', function( event ) {
    if ( modalOpen && !modal.contains( event.target ) ) {
      event.stopPropagation();
      modal.focus();
    }
  }, true);
}
}



/* Close when someone clicks on the "x" symbol inside the overlay */
function closeMenu() {
  document.getElementById("left-menu-overlay").style.width = "0%";
  document.body.style.overflowY = "unset";
  //document.body.style.maxHeight = "unset";

} 

</script>

<script>



function modalCloseCurtains ( e ) {
  if ( !e.keyCode || e.keyCode === 27 ) {
    
  document.body.style.overflowY = "unset";
  document.getElementById("right-close-button2").style.position = "absolute";
  document.getElementById("right-share-overlay").style.width = "0%";

  document.getElementById("left-settings-overlay").style.width = "0%";

  }
}

document.addEventListener('keydown', modalCloseCurtains);

</script>



<!--
<script>

window.onscroll = function() {scrollFunction()};

//Scroll on arrival 
function scrollFunction() {

    const mediaQuery = window.matchMedia('(max-width: 700px)')

   //AFTER
   if ((mediaQuery.matches)  || (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30)) {
    
   
    document.getElementById("header").style.height = "50px";
    document.getElementById("lang-button").style.opacity = "1";
    document.getElementById("header").style.position = "fixed";
    
 
   } else {
     //BEFORE
     document.getElementById("header").style.height = "90vh";
     document.getElementById("header").style.position = "relative";
     
 
   }
 }
"des vivant parmi des vivantes"

ressac

 </script>-->


 
<?php require_once ("header.php");?>

<?php include '../ecobrick_env.php';?> 

  
<body id="full-page" class="accessibility-plugin-ac">

				

	<div id="header" class="top-menu">


        <div><button type="button" class="main-menu-button" onclick="openMenu()" aria-label="Click to open settings page"></button></div>

		<div class="gobrik-logo">
            <a href="/go.php#home"><img src="../svgs/gobrik-logo-static.svg?v1.1" width="165" height=""></a>
        </div>
		
        <div class="button-list" style="display:flex;position:absolute;right:0;width:fit-content;margin-right:15px;flex-flow:row;margin-top:22px;"m>
          
            
                <div class="top-menu-login-button"><button type="button" style="font-family:'Mulish';color:grey;padding10px;background: none;border:0.5px;border-style:solid;border-color:grey;border-radius:5px;margin: auto;margin-top:2px;
align-content: center;
font-size: 0.9em;
padding: 3px 14px 3px 14px; margin-right:10px;" class="login-top-button">
                    login
                </button></div>

                <div><button type="button" class="top-settings-button" onclick="openSettings()" aria-label="Click to open settings page"></button></div>

               <!-- <div><button type="button" style="background: none;border: none;" class="settings-">
                    <img src="../svgs/language-button2.svg" height="30px">
                </button></div>-->
                   
		    </div>
        </div>
    </div> 
<!--
		<div class="offline-image"><img src="svgs/earth-service4.svg" width="100%" height="96%"></div>
		<div class="offline-header">Happy New Year!</div> 
		<div class="offline-text">GoBrik is Offline for a Bit!</div>
		<div class="offline-subtext">We're paying our bill and... we're getting ready for some major revamps to the app in 2023!  We should be back online in 12hrs.</div>	
	</div>
</div>-->

<?php
   
$servername = "localhost";
$username = "ecobricks_brikchain_viewer";
$password = "desperate-like-the-Dawn";
$dbname = "ecobricks_gobrik_msql_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!-- FULL GALLERY

<div id="the-gallery" style="height:0vh;transition:0.5s;width:100%;background-color:#30ffff;overflow-y:clip;">
    -->
    
    <div class="gallery-header" >
        <div class="gallery-live-text"><span class="blink">⬤ </span>50 latest authenticated ecobricks</div>
    </div>
   


   <div class="gallery-background">
  <!-- <div class="grey-gradient" style="background-image: linear-gradient(grey,grey, #30FFFF);height:60vh;margin-bottom:-60vh;max-height:fit-content;"></div>-->
            
        <div class="gallery-content-block">
            
            <div class="flex-container">

                <?php

                $sql = "SELECT * FROM vw_gallery_feed ;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    array_reverse($result);
                // output data of each row
                while( $row= $result->fetch_assoc()) {

                echo '
                <div class="gal-photo">
                    <div class="photo-box">
                        <a href="https://ecobricks.org/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["thumb_url"].'?v=1.1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'"/></a>
                    </div>';
            
                echo '
                    <!--<div class="brik-co2">'.$row["ecobrick_brk_amt"].' BRK<br>'.$row["weight_in_g"].'g<br>'.$row["CO2_kg"].' CO2e
                    </div>-->
                </div>';
                }

                } else {
                echo "Failed to connect to the Brikchain database";
                }

                ?>

            </div>
        </div><!--closes gallery content block-->
    </div><!--closes gallery background-->
     

 
            
    <div class="clouds-new2">
        <div id="landing-content">

            <div class="top-graphic"><img src="../svgs/dolphin-top-optimized.svg" width="100%"></div>

            <div class="big-header">Together we can keep our plastic out of the biosphere.</div>

            <div class="welcome-text">
            Ecobricking is a great way to take personal responsibility for our plastic and transition from it to build our greenest visions.
            </div>
            <!--<h3<b>Selfie Frame</b> <a href="https://twb.nz/ecobrick4oceans" target="_blank">My Ecobrick For the Oceans</a></h3><br><br>-->

            <div class="sign-buttons" style="display:flex;flex-flow:row;justify-content: center;">
        
                <div>
                    <button type="button" aria-label="sign in" class="sign-innn" onclick="location.href='go.php#home-login'" title="Click here to sign in" style="cursor:pointer;">
                    <i style="background: url(../svgs/bottle-icon.svg) no-repeat; width:20px; height:26px;display: inline-block;background-size:contain;margin-bottom:-5px;margin-right:4px;"></i>Sign in</button>
                </div>
        
                <div>
                    <button type="button" aria-label="Sign up" onclick="location.href='go.php#signup'" class="sign-uppp" style="cursor:pointer;">Sign up<i style="background: url(../svgs/strike-icon.svg) no-repeat; width:20px; height:26px;display: inline-block;background-size:contain;margin-bottom: -5px;margin-left:4px;"></i></a>
                </div>
            </div>
            
            <h4>Use your GoBrik account to sign in.<br>
            No account? Sign up for free!</h4>
        

      
            <div class="tree-coins"><img src="../images/mangotreebluesky400px.png"></div>

            <div class="welcome-text">
                Together we're securing plastic out of the biosphere to make building blocks, brikcoins and green spaces.
            </div>

            <div class="tree-text">
                GoBrik provides ecobrickers and their communities with the tools to manage their ecobricking and to quantify its ecological value.
            </div>

            <div class="aes-logos">
            <img src="../svgs/aes-brk.svg" style="width: 200px;">
            </div>
           <!-- <h6>Learn some more about<br><a href="#ecobricks">Ecobricks</a>, <a href="#gea">the GEA</a>, <a href="#brikcoins">Brikcoins</a> and <a href="#aes">AES Plastic Offsets</a></h6>-->
        </div><!--closes Landing content-->
    </div>
   
    <?php require_once ("settings-curtain.php");?>

    <?php require_once ("menu-curtain.php");?>


<div id="containerSepia"></div>
  <div id="containerContrast"></div>
  <div id="containerBrightness"></div>
    

    <div style="z-index:5;">
    <!-- sets footer of page:  be sure to add page name-->
    <?php require_once ("footer.php");?>

    

            </div>

        
  

</div>
</body>
</html>
