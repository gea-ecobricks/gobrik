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

<!--<link rel="preload" as="image" href="https://gobrik.com/svgs/Happy-turtle-dolphin-opti2.svg">-->



<?php require_once ("header.php");?>


 
<style>

#gallery-overlay-button {
position: absolute;
  width: 100%;
  left: 0;
  right: 0;
  background-color: black;
  z-index: 5;
  cursor: pointer;
  height: 100vh;
top: -73vh;
background-image: url('../svgs/down-arrow-white.svg?v=3.1');
background-size: 160px;
background-position: bottom center;
background-repeat: no-repeat;
border:none;
opacity:0.5;
transition: 0.5s;
}


#gallery-overlay-button:hover {
opacity: 0.1;
top: -72vh;

}

#gallery-overlay-button:hover + #regular-ecobricks {
    top: -72vh;
}


.down-arrow {
    width:100%;
    height:100%;
    background: url(../svgs/down-arrow-white.svg?v=3) no-repeat center bottom;
    background-size: 30%;
    transition: 0.5s;
    opacity:0.5;
}

.up-arrow {
    width:100%;
    height:100%;
    background: url(../svgs/up-arrow-white.svg?v=3) no-repeat center bottom;
    background-size: 100px;
    transition: 0.5s;
    opacity:0.5;
    margin-bottom: 20px;
    display: none;
}

#regular-ecobricks {
    box-shadow: 0px 0px 15px rgba(0, 0, 10, 0.8);
    height: 100vh;
    display: flex;
    left: 0;
    right: 0;
    flex-flow: row-reverse;
    position: absolute;
    z-index: 3;
    align-items: end;
    top: -73vh;
    transition: 0.5s;

    text-align: center;
  width: 100%;
  max-width: 100%;
  background-color: var(--gallery);
  z-index: 0;


}



    </style>







</head>

<body id="full-page">

<?php include 'top-menu.php';?>



<!-- FULL GALLERY

<div id="the-gallery" style="height:0vh;transition:0.5s;width:100%;background-color:#30ffff;overflow-y:clip;">

/*
document.getElementById("regular-ecobrick").style.display = "none";
  document.getElementById("gallery-overlay-button").style.display = "none";
    document.getElementById("right-settings-overlay").style.width = "0%";
    
    function openGallery() {
  document.getElementById("regular-ecobricks").display ="none";
  document.getElementById("regular-ecobricks").top = "20vh";
  document.getElementById("regular-ecobricks").top = "20vh";
  document.getElementById("landing-content").top = "-20vh";
}*/
    -->



<div id="landing-page">


<script>
/* OPEN THE GALLERY ON MAIN PAGE */

function openGallery() {
    document.getElementById("gallery-overlay-button").style.display = "none";
    document.getElementById("regular-ecobricks").style.top = "-20vh";
    document.getElementById("regular-ecobricks").style.zIndex = "20";
    document.getElementById("up-arrow").style.display = "contents";

    alert("It works!");
}
</script>



<div id="gallery-overlay-button" onclick="openGallery()">
<div class="down-arrow"></div>
</div><!--closes gallery-overlay"-->


<div id="regular-ecobricks">   
<!--<div class="gallery-background">-->
<div class="gallery-content-block">

    
test content2

</div>
<div id="up-arrow" class="up-arrow">arrow</div>


</div><!--closes regular ecobrick curtain-->     
<!--
 <div class="bio-top"><img src="../svgs/biosphere-top-day.webp" style="width:100%" alt="Together we can contribute to the biosphere"></div>-->
            
    <div class="clouds-new2" style=" margin-top:10vh; margin-bottom: -30px;
padding-bottom: 10px;padding-top:10px">
        <div id="landing-content">

            <div class="main-landing-graphic"><img src="../webp/ecobrick-team-blank.webp" style="width:100%" alt="Unite with ecobrickers around the world"></div>

            <div class="big-header">Together we can keep our plastic out of the biosphere.</div>
           
            <button type="button" onclick="openGallery()">Open Gallery</button>

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
        

      
            <div class="tree-coins"><img src="../webp/2023-tree-blank.webp" style="width:100%;" alt="Build your greenest visions with ecobricks"></div>
        
            <div class="welcome-text">
                Together we're securing plastic out of the biosphere to make building blocks, generate brikcoins and co-create green spaces.
            
               <br><br> <img src="../svgs/aes-brk.svg" style="width:200px;" alt="Introducing Brikcoins and AES Plastic Offsetting">
            </div>
            
            <div class="tree-text">
                GoBrik provides ecobrickers and their communities with the tools to manage their ecobricking and to quantify its ecological value.
            </div>

            
           <!-- <h6>Learn some more about<br><a href="#ecobricks">Ecobricks</a>, <a href="#gea">the GEA</a>, <a href="#brikcoins">Brikcoins</a> and <a href="#aes">AES Plastic Offsets</a></h6>-->
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
