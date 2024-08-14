<!DOCTYPE html>

<html lang="en">

<head>
<!-- Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages--> 

<title>GoBrik | 2.1</title>


<script type="text/javascript">
        // Check if the URL contains a fragment identifier
        if (window.location.hash) {
            // Redirect to /en/go.php while preserving the fragment
            window.location.href = "/en/go.php" + window.location.hash;
        }
    </script>


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

<link rel="preload" as="image" href="../svgs/richard-and-team-day.svg">
<link rel="preload" as="image" href="../svgs/richard-and-team-night.svg">
<link rel="preload" as="image" href="https://www.gobrik.com/webp/ecobrick-team-blank.webp">
<link rel="preload" as="image" href="../webp/biosphere2.webp">
<link rel="preload" as="image" href="https://gobrik.com/webp/biosphere-day.webp">


<?php require_once ("includes/header.php");?>


 
<!--Stylesheets for light and dark mode.  They need to be called here-->
<link rel="stylesheet" href="../light.css?v5.93" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">
<link rel="stylesheet" href="../dark.css?v=6.99" media="(prefers-color-scheme: dark)">
<link rel="stylesheet" href="../slider.css?v1.1">




<!-- Footer stylesheet -->

<link rel="preload" href="../stylesheet-footer-march.css?2.24" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="../stylesheet-footer-march.css?2.4" href="styles.css"></noscript>


<style>



@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  

/*COMMON*/



/* --------------------------------------------------------------------------


2. Document Setup


-------------------------------------------------------------------------- */
:root {
    --unit-100vh: 100vh;
}
@supports (height: 100dvh) {
    :root {
        --unit-100vh: 100dvh;
    }
}

html {
  height: 100%;
  }
  
  
  body {
    z-index: 0;
    position: relative;
    /*position: bottom;*/
    margin-top: 0px;
    padding-bottom: 0px;
    margin-left: 0px;
    margin-right: 0px;
    background-color: var(--general-background);
      overflow-x: hidden;
    /*General interface background slightly off-white to make the white buttons and boxes show up better*/
  }


  @media screen and (min-width: 1200px) { 
  
  .landing-content { 
  width: 70%;
  margin: auto;
  margin-bottom: 0px;
      }
    }
    
    
    @media screen and (min-width: 700px) and (max-width: 1200px) { 
  
    .landing-content { 
    width: 80%;
    margin: auto;
    margin-bottom: 0px;

        }
      }
  
  
    @media screen and (max-width: 700px) { 
  .landing-content { 
    background: none;
  max-width: 90%;
  margin: auto;
        }
      }



/*------------------------------------


3. Header


------------------------------------*/



#header {
  transition: 0.4s;
  /*display: flex;
  justify-content: center;*/
  z-index: 25;
position: relative;
background: var(--top-header);
/*box-shadow: 0px 0px 12px var(--shadow);	*/
  width: 100%;
  border-bottom: var(--header-accent) 0.5px solid;
  box-shadow: 0px 0px 15px rgba(0, 0, 10, 0.805);
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



#header-knack {
  transition: 0.4s;
  display: flex;
  justify-content: center;
  z-index: 25;
position: absolute;
background: var(--top-header);
/*box-shadow: 0px 0px 12px var(--shadow);	*/
  width: 100%;
  border-bottom: gray 0.5px solid;

}
  @media screen and (min-width: 701px) {
#header-knack {  
  height: 70px;
}
}

@media screen and (max-width: 700px) {
#header-knack {  

  height: 70px;
}
}


.gobrik-logo {
margin: auto;
position: absolute;
width: fit-content;
margin-top: 13px;
width:165px;
height:47px;
border: none;
right: 0;
left: 0;
border: none;
cursor:pointer;
}


/*needed!*/

.main-menu-button {
  position:absolute;
  left:0;
  margin-top: 22px;
  margin-left:25px;
  border: none; 
  margin-right:10px;
  cursor:pointer;
  height:30px;
  width:30px;
}


.main-menu-button:hover  {
  border: none; 
  margin-right:10px;
  cursor:pointer;
  height:30px;
  width:30px;
}*/



.top-menu-login-button {

  position:absolute;
  left:0;
 margin-top: 22px;
 margin-left: 22px;


  font-family:'Mulish';
  background: none;
  border:0.5px;
  border-style:solid;

  border-radius:5px;
  align-content: center;
  font-size: 0.9em;
  padding: 3px 14px 3px 14px;
  margin-right:10px;
  cursor: pointer;
  color: var(--header-accent);
  border-color: var(--header-accent);
  border-width: 0.5px;
}

.top-menu-login-button:hover {
  color: var(--top-header);
  background-color: var(--header-accent);
}

@media screen and (max-width: 700px) {
.top-menu-login-button {
  display:none;
}
}


.top-settings-button  {
  border: none; 
  margin-right:10px;
  cursor:pointer;
  height:30px;
  width:30px;
}

/* LANDING SPECIFIC */


/* RECENT 

#gallery-overlay-button {
position: absolute;
width: 100%;
left: 0;
right: 0;
z-index: 5;
cursor: pointer;
height: 100vh;
border:none;
/*background: url(../svgs/down-arrow2.svg?v=4) no-repeat center bottom;
background-size: 160px;
background-position: bottom center;
background-repeat: no-repeat;
opacity:0.3;
transition: 0.5s;
}*/


   /*
        -webkit-animation-delay: 3.0s !important;
        opacity:0;
        -webkit-animation:fadeIn ease-in 0.25s;
        -webkit-animation-duration:0.25s;
        -webkit-animation-fill-mode:forwards;
    
        animation-delay: 1.0s; 
        animation: fadeIn ease-in 0.25s;
        animation-duration: 0.25s;
        animation-fill-mode: forwards;*/

    /*    -webkit-animation: regularecobricks 1.1s forwards;
-webkit-animation-delay: 2s;*/

#regularecobricks {
    box-shadow: 0px 0px 15px rgba(0, 0, 10, 0.8);
   
    left: 0;
    right: 0;
    position: absolute;
    z-index: 3;
    /*flex-flow: column;*/
    flex-direction: column; 
    align-items: flex-end;
    justify-content: end;
    text-align: center;
  width: 100%;
  max-width: 100%;
  background-color: var(--gallery);
  overflow-x: clip;
  overflow-y: scroll;
  transition: 0.5s;
  opacity: 0.81;
  height: 100vh;
    top: -70vh;
    display: flex;

  
}




#gal-button {
  right:0;
  z-index:21;
  border:none;
  width:100%;
  height:100%;
  position:absolute;
  transition: 0.5s ease;
}

#regularecobricks:hover {
z-index:20;
opacity:1;
top: -67vh;   
}



#regularecobricks:hover #gal-button {
transition: 0.5s ease;
}

.down-arrow:hover {
  background: url(../svgs/down-arrow-over.svg) no-repeat center bottom;
  background-position-y: bottom;
  background-color: var(--gallery);

background-size: 88px;
}




.down-arrow {
  background: url(../svgs/down-arrow4.svg?v=2) no-repeat center bottom;
  background-position-y: bottom;
background-size: 88px;
background-position-y: bottom 10px;
position: absolute;
bottom: 0;
width: 150px;
height: 70px;
margin: auto;
left: 0;
text-align: center;
align-content: center;
right: 0;
cursor: pointer;
border: none;
background-color: var(--gallery);
margin-bottom: 30px;
border-radius: 10px;
}

.up-arrow {
    width:100%;
    height:18px;
    background: url(../svgs/up-arrow-white.svg?v=3) no-repeat center bottom;
    background-size: contain;
    transition: 0.5s;
    opacity:1;
    display: none;
    cursor: pointer;
}

.up-arrow:hover {

opacity:0.6;
    
}


.gallery-header {
  background-color: var(--gallery);
  height:fit-content;
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
  margin: auto;
  padding: 10px;
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
  background-color: var(--gallery);
  position: relative;
  z-index: 0;
 
}


.gallery-content-block {
  text-align: center;
  /*min-height: 67vh;*/
  z-index: 5;
  background-color: var(--gallery);
  display: flex;
   flex-wrap: wrap;
   box-sizing: border-box;
  flex-direction: row;
  width: 115%;
    margin-right: -10%;
    margin-left: -1%;
    margin-top: 65px;
    margin-bottom: 0px;

}



.flex-container {
display: flex;
flex-wrap: wrap-reverse;
}

@media screen and (max-width: 700px) { 

.flex-container > .gal-photo {
  /*background-color: #DFDFDF;*/
  margin: 0px;
  padding: 2px;
  height: 95px;
  overflow: hidden;
/*width: 60px;*/
}

.gal-photo img {
  height: 95px;
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


.bio-top {
width:100%;
height: fit-content;
margin-bottom: -160px;
margin-top:-5px;
z-index: 10;
position: relative;
background-color: var(--gallery);
border:none;
}



.biosphere {
  position: relative;
z-index: 0;
padding-bottom: 300px;
height: 20vh;
width: auto;
text-align: center;

  }



@media screen and (max-width: 700px) { 
    .biosphere {
      margin: -40vh auto -9vh auto;
    }
  }

  @media screen and (min-width: 701px) and (max-width: 1300px){ 
    .biosphere {
      margin: -25vh auto -21vh auto;
    }
  }



  @media screen and (min-width: 1301px) { 
    .biosphere {
      margin: -27vh auto -19vh auto;
    }
  }



.main-landing-graphic {
    margin: auto;
      position: relative;
      z-index: 11;
    
  }

  .main-landing-graphic  img {
  height: auto;
  width: 100%;
}


  @media screen and (max-width: 700px) { 
    .main-landing-graphic {
      width: 93%;
      height:39%;
      margin-top: 9px;
      margin-bottom: -5px;
      min-width: 250px;
    min-height: 145px;
    }
  }

  @media screen and (min-width: 701px) and (max-width: 1300px){ 
    .main-landing-graphic {
      width: 75%;
      height:31%;
     /* min-width: 644px;
      min-height:272px;*/
      margin-bottom: -5px;
      margin-top: 0px;
    }
  }

  @media screen and (min-width: 1301px) { 
    .main-landing-graphic {
      width: 66%;
      height:28%;
      margin-bottom: -5px;
      margin-top: 0px;
      /*min-width: 644px;
      min-height:272px;*/
    }
  }




.big-header {	
 
 font-family: 'Arvo', serif;
 margin-top: 20px;
 text-align: center !important;
 line-height: 1.2 !important;
 color: var(--h1);

}

@media screen and (max-width: 700px) {
.big-header {
 font-size: 1.95em !important;
 margin-bottom: 14px;

}
}


@media screen and (min-width: 701px) and (max-width: 1300px){ 
.big-header {
  font-size: 2.3em !important;
  margin-bottom: 16px;

}
}
 


@media screen and (min-width: 1301px) {
.big-header {
 font-size: 2.6em !important;
 margin-bottom: 19px;

}
}
   
 
.main-statement {

 font-family: 'Mulish', sans-serif;
 text-align: center !important;
 line-height: 1.3 !important;
 margin: 20px 0px 13px 0px;
 color:var(--text-color);
 
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
background: var(--button-2-1);
background-image: -webkit-linear-gradient(top, var(--button-2-1), var(--button-2-2));
background-image: -moz-linear-gradient(top,  var(--button-2-1), var(--button-2-2));
background-image: -ms-linear-gradient(top,  var(--button-2-1), var(--button-2-2));
background-image: -o-linear-gradient(top,  var(--button-2-1), var(--button-2-2));
background-image: linear-gradient(to bottom,  var(--button-2-1), var(--button-2-2));
-webkit-border-radius: 8px 0px 0px 8px;
-moz-border-radius: 8px 0px 0px 8px;
border-radius: 8px 0px 0px 8px;
color: #fff;
font-size: 1.3em;
font-weight: 700;
padding: 9px 18px 9px 18px ;
text-decoration: none;
margin-top: 0px;
margin-bottom: 12px;
border: none;
margin-right: 3px;
}


.sign-innn:hover {
background: var(--button-2-1-over);
background-image: -webkit-linear-gradient(top,  var(--button-2-1-over), var(--button-2-2-over));
background-image: -moz-linear-gradient(top, var(--button-2-1-over), var(--button-2-2-over));
background-image: -ms-linear-gradient(top, var(--button-2-1-over), var(--button-2-2-over));
background-image: -o-linear-gradient(top, var(--button-2-1-over), var(--button-2-2-over));
background-image: linear-gradient(to bottom, var(--button-2-1-over), var(--button-2-2-over));
text-decoration: none;
}



.sign-uppp {
font-family: 'mulish', sans-serif !important;
display: block;
margin: auto;
background: var(--button-1-1);
background-image: -webkit-linear-gradient(top, var(--button-1-1), var(--button-1-2));
background-image: -moz-linear-gradient(top, var(--button-1-1), var(--button-1-2));
background-image: -ms-linear-gradient(top, var(--button-1-1), var(--button-1-2));
background-image: -o-linear-gradient(top, var(--button-1-1), var(--button-1-2));
background-image: linear-gradient(to bottom, var(--button-1-1), var(--button-1-2));
-webkit-border-radius: 0px 8px 8px 0px;
-moz-border-radius: 0px 8px 8px 0px;
border-radius: 0px 8px 8px 0px;
color: #fff;
font-size: 1.3em;
font-weight: 700;
padding: 9px 18px 9px 9px ;
text-decoration: none;
margin-top: 0px;
margin-bottom: 12px;

border: none;
margin-left: 3px;
}


.sign-uppp:hover {
background: var(--button-1-1-over);
background-image: -webkit-linear-gradient(top, var(--button-1-1-over), var(--button-1-2-over));
background-image: -moz-linear-gradient(top, var(--button-1-1-over), var(--button-1-2-over));
background-image: -ms-linear-gradient(top, var(--button-1-1-over), var(--button-1-2-over));
background-image: -o-linear-gradient(top, var(--button-1-1-over), var(--button-1-2-over));
background-image: linear-gradient(to bottom, var(--button-1-1-over), var(--button-1-2-over));
text-decoration: none;
}


.tree-coins {
      position: relative;
      z-index: 0;
      text-align: center;
      width: 80%;
      height: 100%;
      margin: 15px auto 10px auto;
      }


  @media screen and (max-width: 700px) { 
    .tree-coins {
      width: 90%;

    }
  }

  @media screen and (min-width: 700px) { 
    .tree-coins {
      width: 60%;

    }
  }


.welcome-text {	
 
 font-size: 1.6em !important;
 font-family: 'Mulish', sans-serif;
 text-align: center !important;
 color:var(--text-color);

   }


 
@media screen and (max-width: 700px) {
.welcome-text {
 font-size: 1.11em !important;
 margin-bottom: 26px;
}
}

@media screen and (min-width: 701px) and (max-width: 1300px) { 
.welcome-text {
   font-size: 1.5em !important;
   margin-bottom: 28px;
}
}

@media screen and (min-width: 1301px) { 
.welcome-text {
   font-size: 1.7em !important;
   margin-bottom: 30px;
}
}
  
      
  .tree-text {
    font-size: 0.83em ;
    font-family: 'Mulish', sans-serif;
    width: 85%;
    text-align: center;
    line-height: 1.4;
    position: relative;
    z-index: 5;
    font-weight: 300;
    margin:auto;
    color:var(--text-color);
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




/* -------------------------------------------------------------------------- */

/*	6. User Settings Overlay Curtain 

    Comes in from the right after clicking +- button.

/* -------------------------------------------------------------------------- */

#right-settings-overlay {
  background-color: var(--side-overlays) /*var(--overlays-and-headers:)*/; 
  color:  var(--text-color); /*var(--text-color)*/ ;
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
  /*font-size: smaller;*/
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

.language-box {
  display: flex;
  margin: 10px auto 10px auto;
  justify-content: center;
  padding: 5px 30px 5px 30px;
  background: var(--slide-highlight);
  border-radius: 55px;
  width: fit-content;
}

.language-selector {
  font-family: 'Mulish';
  padding: 10px 20px 10px 20px;
  background: var(--side-overlays);
  border-radius: 10px;
  margin: 10px;
 /* filter: invert(100);*/
  font-size: 1.1em;
  cursor: pointer;
  color: var(--text-color);
  /*border-color:var(--header-accent);*/
  border-width:0.5px;

}

.language-selector:hover {
  background: var(--header-accent);
  border-width:1px;
  color:var(--top-header);
}

.language-selector a {
  color: var(--side-overlays);
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
  color: var(--footer-text) !important;
}


/*MENU ITEMS*/


.menu-page-item {
  padding:10px;
  font-family:'Mulish';
  font-size:1.4em;
  color:var(--text-color);
  border-bottom:1px solid var(--subdued-text);
  cursor: pointer;

}


.menu-page-item:hover {
 
  border-bottom:2px solid var(--text-color);
  color: var(--header-accent);

}

.menu-page-item a {  text-decoration: none;
color: var(--subdued-text);
}

.menu-page-item a:hover {  text-decoration: none;
  color: var(--h1);
  }

[part="darkLabel"], [part="lightLabel"], [part="toggleLabel"] {

  font-size: 22px !important;
}

p a {
  color: var(--text-color) !important;
}

p a:hover {
  color: var(--h1) !important;
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


#main {
    width: 100%;
    height: 100%;
    transition: 0.3s; /* Smooth transition for height */
    /* margin-top: 40px; */
    margin-bottom: -1px;

}





    </style>



<script>
/* OPEN THE GALLERY ON MAIN PAGE

window.onload = function() {
  showDivAfterDelay();
}


function showDivAfterDelay() {
      const div = document.getElementById('regularecobricks');
      setTimeout(() => {
        div.style.display = 'flex';
      }, 0000);
    }

    */


function openGallery() {
  document.getElementById("regularecobricks").style.top = "-8vh";

  document.getElementById("regularecobricks").style.animation = "none";
  document.getElementById("gal-button").style.display = "none";
    document.getElementById("regularecobricks").style.opacity = "1";
    document.getElementById("regularecobricks").style.zIndex = "20";
    document.getElementById("up-arrow").style.display = "block";
}

function closeGallery() {
    document.getElementById("regularecobricks").style.top = "-72vh";
    document.getElementById("gal-button").style.display = "flex";
    document.getElementById("regularecobricks").style.zIndex = "5";
    document.getElementById("up-arrow").style.display = "none";

}
</script>


</head>

<body id="full-page">

    <div id="main">

        <div class="clouds-new2">

        <div class="landing-content" >

        <!--<div class="biosphere"><img src="../webp/biosphere-blank.webp" width="400" height="400" alt="biosphere"></div>-->

        <div class="main-landing-graphic" style="text-align:center;background:none;">   <img src="../svgs/regen-top-offline.svg" style="width:80%;" alt="Build your greenest visions with ecobricks" style="text-align:center">

        <!--<div class="big-header">GoBrik is Offline.</div>-->
        <div class="welcome-text">
Our old version of GoBrik ran on corporate servers and code. We've let this pass pass away.
                <br><br>
                We're calling this our regeneration.

                 <br><br>
                 We have migrated all our data to our own independent, self-run server. Our new GoBrik 3.0 will 100% open source fully focused on ecological accountability. This is a major upgrade and requires GoBrik to offline for 10 days.<br><br>
                 We'll be back soon!
         </div>



        <div class="tree-coins" ><img src="../webp/2023-tree-blank.webp" style="width:100%;" alt="Build your greenest visions with ecobricks">
        </div>
            
        <div class="tree-text">
            GoBrik 3.0 will continue to provide ecobrickers and their communities with the tools to manage their ecobricking and to quantify its ecological value.
        </div>

        <div style="display:flex;flex-flow:row;justify-content:center;width:100%;margin-top:10px">
            <div><a href="#" onclick="showModalInfo('terms')" class="underline-link" style="margin:auto;padding: 15px;text-align:center;display:block;background: var(--lighter);
border-radius: 10px;margin: 5px;">New Buwana & GoBrik Terms of Service</a></div>

            <div><a href="https://earthen.io/gobrik-regen" class="underline-link" target="_blank" style="margin:auto;padding: 15px;text-align:center;display:block;background: var(--lighter);
border-radius: 10px;margin: 5px;">Why?  Read our 'Great GoBrik Regeneration' blog post.</a></div>
            <div><a href="https://github.com/gea-ecobricks/gobrik-3.0" class="underline-link" target="_blank" style="margin:auto;padding: 15px;text-align:center;display:block;background: var(--lighter);
border-radius: 10px;margin: 5px;">New Github Source Code Repository</a></div>
        </div>

   </div><!--landing-content-->

</div><!--clouds-->

</div> <!--main-->

</div>
   
 

    <div style="z-index:5;">
    <!-- sets footer of page:  be sure to add page name-->
    <?php require_once ("includes/footer.php");?>
    </div>

</div> <!--landing page close-->


<?php require_once ("includes/settings-curtain.php");?>

            </div>
</body>

</html>
