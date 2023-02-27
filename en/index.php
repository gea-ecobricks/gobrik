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



<?php require_once ("header.php");?>
 
<style>


/* -------------------------------------------------------------------------- */

/*	1. FOOTER 
migrated from Knack CSS
/* -------------------------------------------------------------------------- */
.vision-clouds {
  background: url(../svgs/footer-clouds-desktop.svg) no-repeat center bottom;
  background-size: contain;
  z-index: 0;
  width: 100%;
  height: fit-content;
}

.vision-landscape {
  z-index: 1;
  width: 100%;
  height:fit-content;
  margin-bottom: -10px;
  margin-top: -100px;
  background-color: var(--general-background);
}

.row {  
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box;
  }
  
  
  /* Main column */
  
  @media screen and (min-width: 700px) {
    .virtue {
      flex: auto;
      padding: 15px;
      box-sizing: border-box;
    }
    }
    
    @media screen and (max-width: 700px) {
    .virtue {
      flex: 100%;
      box-sizing: border-box;
    }
    }
  
  
  #footer-full {
    width: 100%;
    margin-top:20px;
    z-index: -1;
  }
  
  
  #ocean-vision {
    width: 100%;
    position: relative;
    z-index: -1;
    margin-bottom: -6px;
  }
  
  .ocean-vison img {
    position: absolute;
    left: 0px;
    bottom: 0;
    width: 100%;
  }
  
  /* VISION STAETMENT IN FOOTER */
  
  .footer-vision {
    font-family: 'Mulish', sans;
    color:#b0fff7;
    font-weight: 500;
    text-align: center;
    background-color: var(--footer-background);
    padding-top: 36px;
    padding-bottom: 50px;
  }
  
  @media screen and (max-width: 800px) {
    .footer-vision {
  
    font-size: 1.15em;
    line-height: 1.3;
    padding-right: 4%;
    padding-left: 4%;
    }
  }
  
  @media screen and (min-width: 770px) and (max-width: 2000px) { 
    .footer-vision {
    font-size: 1.7em;
    line-height: 1.3;
    padding-right: 10%;
    padding-left:10%;
      }
  }
  
  /*INVITE TO CLICK ICONS*/
  
  .footer-invite {
  
    font-family: Arvo, serif;
    color:   #a8aab8;
    text-align: center;
    background-color: var(--footer-background);
  }
  
  .footer-invite a {
    color: #a8aab8;
    text-decoration: pointer;
  }
  
  .footer-invite a:hover {
    color: #a8aab8;
    text-decoration: none;
  }
  
  @media screen and (max-width: 800px) {
    .footer-invite {
      font-size: 0.9em;
    line-height: 1.3;
    padding-right: 5%;
    padding-left: 5%;
    }
  }
  
  @media screen and (min-width: 800px) and (max-width: 2000px) { 
    .footer-invite {
    font-size: 1.3em;
    line-height: 1.3;
    padding-right: 10%;
    padding-left:10%;
  }
  }
  
  
  /*PLATFORM ICONS*/
  
  
  .footer-icons-container {
  
    padding-bottom: 0px;
    background-color: var(--footer-background);
    display: flex;
    align-items: stretch;
    flex-direction: row;
    box-sizing: border-box;
    height: fit-content;
    width: 100%;
    box-sizing: border-box;
  }
  
  .footer-icons { 
    flex: 50%;
    text-align: center;
    box-sizing: border-box;
  }
  
  .footer-icons img {
    max-width: 100px;
  }
  
  .footer-icons a img {
    opacity: 0.6;
  
  }
  
  .footer-icons a:hover img {
    opacity: 1;
  }
  
  
  /* Responsive layout for icons */
  @media (max-width: 800px) {
  
    .footer-icons-container {
      padding: 16px 3% 0px 3%;
  }
     .footer-icons {
      padding: 0px 4px 0px 4px;
  }
  }
  
  @media (min-width: 800px) {
  
    .footer-icons-container {
      padding: 40px 6% 0px 6% ;
  }
     .footer-icons  {
        padding: 0px 10px 0px 10px ;
  }
  }
          
          
  
  /*NOT ACTIVE - PLatform reviews*/
  .icon-name { 
    font-family: Mulish, sans;
    font-size: 0.9em;
    color:#a8aab8;
    line-height: 1.3;
    font-weight: 500;
    display: none;
  
  }
  
  .server-review {
    font-family: Mulish, sans;
    font-size: 0.8em;
    color:#a8aab8;
    line-height: 1.3; 
    font-weight: 500;
    display: none;
  }
  
  @media (max-width: 800px) {
    .icon-name {
      display: none;
    }
    .server-review {
      display: none;
    }
  }
  
  
  /* FOUR FOOTER SECTIONS */
  
  .footer-content {
    padding-top: 20px;
    padding-bottom: 40px;
    padding-right: 5%;
    padding-left: 5%;
    background-color: var(--footer-background);
    display: flex;
    align-items: stretch;
    flex-direction: row;
    box-sizing: border-box;
  }
  
  
  
  /* Responsive layout - makes a one column-layout instead of two-column layout */
  @media (max-width: 800px) {
    .footer-content {
      flex-direction: column;
    }
  }
  
  .footer-box {
    padding: 15px;
    flex: 50%;
  }
  
  
  .footer-header {
    font-family: Arvo, serif;
    color: #529bc2;
    font-weight: 100;
    text-align: left;
    padding-bottom: 10px;
  }
  
  
  @media screen and (max-width: 770px) {
    .footer-header {
     font-size: 1.2em;
    line-height: 1.2;
    }
  }
  
  @media screen and (min-width: 770px) and (max-width: 2000px) { 
    .footer-header {
    font-size: 1.5em;
    line-height: 1.3;
  }
  }
  
  
  .footer-subtext {
    font-family: Mulish, sans-serif;
    color: #8cbdda;
    font-weight: 300;
    text-align: left;
  }
  
  .footer-subtext a {
    color: #8cbdda;
  }
  
  .footer-subtext a:hover {
    color: #fff;
    text-decoration: none;
  }
  
  @media screen and (max-width: 800px) {
    .footer-subtext {
     font-size: 0.9em;
    line-height: 1.2;
    }
  }
  
  @media screen and (min-width: 800px) and (max-width: 2000px) { 
    .footer-subtext {
    font-size: 1.1em;
    line-height: 1.3;
    }
  }
  
  
  .footer-bottom {
    width: 100%;
    padding-bottom: 50px;
    background-color:var(--footer-background);
    margin-bottom: -20px;
  }
  
  .footer-conclusion {
    font-family: Mulish, sans;
    color: #9fdafc;
    line-height: 1.3;
    font-weight: 500;
    text-align: center;
  
    background-color: var(--footer-background);
    padding-top: 5px;
    padding-bottom: 20px;
  
  }
  
  .footer-conclusion a {
    color: #9fdafc;
  }
  
  .footer-conclusion a:hover {
    color: #fff;
    text-decoration: none;
  }
  
  @media screen and (max-width: 800px) {
    .footer-conclusion {
     font-size: 0.7em;
    line-height: 1.2;
  padding-right: 6%;
    padding-left:6%;
    }
  }
  
  @media screen and (min-width: 800px) and (max-width: 2000px) { 
    .footer-conclusion {
      font-size: 1.0em;
    line-height: 1.3;
          padding-right: 10%;
    padding-left:10%;
  }
  }
  
  /* -------------------------------------------------------------------------- */
  
  /*	7. CARBON WIDGET FORMATTING
  
  /* -------------------------------------------------------------------------- */
  /*
  
/* -------------------------------------------------------------------------- */

/*	7. WIDGET FORMATTING

/* -------------------------------------------------------------------------- */

/*

#wcb.wcb-d #wcb_a {
    color: #252b4d !important;
    background: #8cbdda !important;
    border-color: #529bc2 !important;
  }
  
  #wcb #wcb_a, #wcb #wcb_g {
    border:.2em solid #8cbdda !important;
  }
  
  
	
  #view_6432  .kn-menu .kn-button {
       color: #fff !important;
      padding: 15px !important;
        font-size: 18px !important;
      }
  
  */
  
  
  
  
  
  
  
</style>

</head>


 

<?php include '../ecobrick_env.php';?> 

  
<body id="full-page" class="accessibility-plugin-ac">

				

	<div id="header" class="top-menu">


        <div><button type="button" class="main-menu-button" onclick="openMenu()" aria-label="Login to Gobrik"></button></div>

		<div><button type="button" class="gobrik-logo" onclick="closeKnack()" aria-label="Return to Home page"></button></div>
        
       
		
        <div class="button-list" style="display:flex;position:absolute;right:0;width:fit-content;margin-right:15px;flex-flow:row;margin-top:22px;"m>
          
            
                <div id="top-menu-login-button"><button type="button" class="top-menu-login-button" onclick="openKnack()" >
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
        <div class="gallery-live-text"><span class="blink">⬤ </span>Latest authenticated ecobricks</div>
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
     

    <div class="bio-top"><img src="../svgs/biosphere-top-day.webp" width="100%"></div>
            
    <div class="clouds-new2" style="padding-top:35px;">
        <div id="landing-content">

            <div class="top-graphic"><img src="../webp/ecobrick-team-blank.webp" width="100%"></div>

            <div class="big-header">Together we can keep our plastic out of the biosphere.</div>

            <div class="welcome-text">
            GoBrik helps you manage your ecobricks, projects and plastic transition. By putting our plastic to good use, together we can build our greenest visions.
            </div>
            <!--<h3<b>Selfie Frame</b> <a href="https://twb.nz/ecobrick4oceans" target="_blank">My Ecobrick For the Oceans</a></h3><br><br>-->

            <div class="sign-buttons" style="display:flex;flex-flow:row;justify-content: center;">
        
                <div>
                    <button type="button" aria-label="sign in" class="sign-innn" onclick="openKnack()" title="Click here to sign in" style="cursor:pointer;">
                    <i style="background: url(../svgs/bottle-icon.svg) no-repeat; width:20px; height:26px;display: inline-block;background-size:contain;margin-bottom:-5px;margin-right:4px;"></i>Sign in</button>
                </div>
        
                <div>
                    <button type="button" aria-label="Sign up" onclick="openKnack()" class="sign-uppp" style="cursor:pointer;">Sign up<i style="background: url(../svgs/strike-icon.svg) no-repeat; width:20px; height:26px;display: inline-block;background-size:contain;margin-bottom: -5px;margin-left:4px;"></i></a>
                </div>
            </div>
            
            <div class="tree-text">Use your GoBrik account to sign in.
            No account? Sign up for free!</div>
        

      
            <div class="tree-coins"></div>

            <div class="welcome-text">
                Together we're securing plastic out of the biosphere to make building blocks, generate brikcoins and co-create green spaces.
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

    <?php require_once ("knack-curtain.php");?>
    

    <div style="z-index:5;">
    <!-- sets footer of page:  be sure to add page name-->
    <?php require_once ("footer.php");?>

    

            </div>

        
  

</div>
</body>
</html>
