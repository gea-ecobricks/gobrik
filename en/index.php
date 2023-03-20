<!DOCTYPE html>

<html lang="en">

<head>
<!-- Meta tags for page display and search engine listing
AND UNIQUE to HTML Pages--> 

<title>GoBrik | βeta</title>
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

<link rel="preload" as="image" href="https://www.gobrik.com/svgs/richard-and-team.svg">



<?php require_once ("header.php");?>


 
<style>

/*COMMON*/



/* --------------------------------------------------------------------------


2. Document Setup


-------------------------------------------------------------------------- */


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
  /*padding-top: 10px;*/
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

  /*min-height: fit-content;
  overflow-x: hidden;
    margin-top: -10px;
     padding-bottom: 14px;*/
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


.main-landing-graphic {
    margin: auto;
      position: relative;
      z-index: 11;
      background: url(../svgs/richard-and-team.svg) no-repeat;
      background-size: contain;
      height: fit-content;
  }



  @media screen and (max-width: 700px) { 
    .main-landing-graphic {
      width: 90%;
      margin-top: 70px;
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 700px) { 
    .main-landing-graphic {
      width: 58%;
      margin-bottom: 5px;
      margin-top: 45px;
    }
  }


.big-header {	
 
 font-family: 'Arvo', serif;
 margin-top: 20px;
 text-align: center !important;
 line-height: 1.2 !important;
 margin-bottom: 20px;
 color: var(--h1);

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
font-size: 20px;
font-weight: 700;
padding: 10px 20px 10px 20px ;
text-decoration: none;
margin-top: 0px;
margin-bottom: 12px;
border: none;
margin-left: 3px;
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
font-size: 20px;
font-weight: 700;
padding: 10px 20px 10px 20px ;
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
      margin: 0px auto 0px auto;
      
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
 margin-bottom: 32px;
 color:var(--text-color);
 
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



/* COMMON OVERLAYS */


/* -------------------------------------------------------------------------- */

/*	6. User Settings Overlay Curtain 

    Comes in from the left after clicking +- button.

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
  color: var(--footer-text); !important;
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

/*main landing image*/

.signup-team {
  margin: auto;
    position: relative;
    z-index: 11;
    background: url(../svgs/richard-and-team.svg) no-repeat;
    background-size: contain;
    height: fit-content;
}

@media screen and (max-width: 700px) { 
  .signup-team {
    width: 90%;
    margin-top: 20px;
    margin-bottom: 5px;
  }
}

@media screen and (min-width: 700px) { 
  .signup-team {
    width: 59%;
margin-bottom: 10px;
  }
}

/* RECENT */

#gallery-overlay-button {
position: absolute;
  width: 100%;
  left: 0;
  right: 0;
  z-index: 5;
  cursor: pointer;
  height: 100vh;
top: -73vh;
background: url(../svgs/down-arrow2.svg?v=4) no-repeat center bottom;
background-size: 160px;
background-position: bottom center;
background-repeat: no-repeat;
border:none;
opacity:0.3;
transition: 0.5s;
}


#gallery-overlay-button:hover {
opacity: 0.9;
top: -72vh;

}

#gallery-overlay-button:hover + #gallery {
opacity: 0.9;

}

#gallery-overlay-button:hover + #regular-ecobricks {
    top: -72vh;
}


.down-arrow {
    width:100%;
    height:100%;
    background: url(../svgs/down-arrow2.svg?v2) no-repeat center bottom;
    background-size: 20%;
    transition: 0.5s;
    opacity:0.5;
}

.up-arrow {
    width:70px;
    height:18px;
    background: url(../svgs/up-arrow-white.svg?v=3) no-repeat center bottom;
    background-size: contain;
    transition: 0.5s;
    opacity:1;
    display: none;
    cursor: pointer;
    position: absolute;
    bottom: 30px;
}

.up-arrow:hover {

    opacity:0.6;
    
}

#regular-ecobricks {
    box-shadow: 0px 0px 15px rgba(0, 0, 10, 0.8);
    height: 100vh;
    display: flex;
    left: 0;
    right: 0;
    position: absolute;
    z-index: 3;
    align-items: end;
    top: -73vh;
    transition: 0.5s;
    flex-wrap: wrap;
    text-align: center;
  width: 100%;
  max-width: 100%;
  background-color: var(--gallery);
  z-index: 0;
  overflow-x:clip;
}

#gallery {
    opacity:0.5;

}



    </style>



<script>
/* OPEN THE GALLERY ON MAIN PAGE */

function openGallery() {
    document.getElementById("gallery-overlay-button").style.display = "none";
    document.getElementById("regular-ecobricks").style.top = "-8vh";

    document.getElementById("gallery").style.opacity = "1";

    document.getElementById("regular-ecobricks").style.zIndex = "20";
    document.getElementById("up-arrow").style.display = "block";
}

function closeGallery() {
    document.getElementById("gallery-overlay-button").style.display = "unset";
    document.getElementById("regular-ecobricks").style.top = "-73vh";
    document.getElementById("regular-ecobricks").style.zIndex = "0";
    document.getElementById("up-arrow").style.display = "none";
}
</script>


</head>

<body id="full-page">

<div class="landing-scope" style="min-height:100vh; height: 100%; width:100%;">

<?php include 'top-menu.php';?>


<div id="gallery-overlay-button"><button  onclick="openGallery()" aria-label="open gallery" style="background:none;border:none;width:100%;height:100%;  cursor: pointer;
"></button></div>


<div id="regular-ecobricks">   
    <div id="gallery" class="gallery-content-block" style="margin-bottom:-60px;">
    <?php include 'gallery.php';?>
    </div>
    <div class="gallery-header">
        <div type="button" id="up-arrow" onclick="closeGallery()" aria-label="Close Gallery" style="border:none;" class="up-arrow"></div>
            <div class="gallery-live-text"><span class="blink">⬤ </span> Latest authenticated ecobricks</div>
    </div>
</div><!--closes regular ecobrick curtain-->     
<!--
 <div class="bio-top"><img src="../svgs/biosphere-top-day.webp" style="width:100%" alt="Together we can contribute to the biosphere"></div>-->
            
    <div class="clouds-new2" style=" margin-top:10vh; margin-bottom: -30px;
padding-bottom: 10px;padding-top:10px">
        <div class="landing-content">

            <div class="main-landing-graphic"><img src="../webp/ecobrick-team-blank.webp" style="width:100%" width="500" height="" alt="Unite with ecobrickers around the world"></div>

            <div class="big-header">Together we can keep our plastic out of the biosphere.</div>
           
            <div class="welcome-text">
            GoBrik helps you manage your ecobricks, projects and plastic transition. By sequestering our plastic we can put it to good use to build our greenest visions.
            </div>
            <!--<h3<b>Selfie Frame</b> <a href="https://twb.nz/ecobrick4oceans" target="_blank">My Ecobrick For the Oceans</a></h3><br><br>-->

            <div class="sign-buttons" style="display:flex;flex-flow:row;justify-content: center;">
        
                <div>
                    <button type="button" aria-label="sign in" class="sign-innn" onclick="location.href='login.php'" title="Click here to sign in" style="cursor:pointer;">
                    <i style="background: url(../svgs/bottle-icon.svg) no-repeat; width:20px; height:26px;display: inline-block;background-size:contain;margin-bottom:-5px;margin-right:4px;"></i>Sign in</button>
                </div>
        
                <div>
                    <button type="button" aria-label="Sign up" onclick="location.href='signup.php'" class="sign-uppp" style="cursor:pointer;">
                    <i style="background: url(../svgs/strike-icon.svg) no-repeat; width:20px; height:26px;display: inline-block;background-size:contain;margin-bottom: -5px;margin-left:4px;"></i>Sign up</button>
                </div>
            </div>
            
            <div class="tree-text">Use your GoBrik account to sign in.
            No account? Sign up for free!</div>
    </div><!--landing-scope-->

    <div class="bottom-scope" style="width:100%;height:100%;margin-top:25px;">
         <div class="landing-content">
            <div class="tree-coins"><img src="../webp/2023-tree-blank.webp" style="width:100%;" alt="Build your greenest visions with ecobricks"></div>
        
            <div class="welcome-text">
                Together we're securing plastic out of the biosphere to make building blocks, generate brikcoins and co-create green spaces.
            
               <br><br> <img src="../svgs/aes-brk.svg" style="width:200px;" width="200" height="77" alt="Introducing Brikcoins and AES Plastic Offsetting">
            </div>
            
            <div class="tree-text">
                GoBrik provides ecobrickers and their communities with the tools to manage their ecobricking and to quantify its ecological value.
            </div>


        </div><!--closes Landing content-->
    </div>
   
 

    <div style="z-index:5;">
    <!-- sets footer of page:  be sure to add page name-->
    <?php require_once ("footer.php");?>
    </div>

</div> <!--landing page close-->


<?php require_once ("settings-curtain.php");?>

            </div>
</body>

</html>
