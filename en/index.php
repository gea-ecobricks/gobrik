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
                        <a href="details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="'.$row["thumb_url"].'?v=1.1"  alt="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'" title="Ecobrick '.$row["ecobrick_unique_id"].' by '.$row["ecobrick_owner"].' in '.$row["location"].'"/></a>
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
        

      
            <div class="tree-coins"><img src="../webp/2023-tree-blank.webp" width="100%"></div>

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
