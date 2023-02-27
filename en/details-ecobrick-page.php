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

    <?php 
require_once  'ssp.class.php';?>
 
<?php 

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = '" . $serialNo . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {




echo 
'<div class="splash-content-block">
	<div class="splash-box">

		<div class="splash-heading">Ecobrick ' . $array["serial_no"] .'</div>
		
		<div class="splash-sub">'. $array["weight_authenticated_kg"] .'&#8202;kg of plastic has been secured out of the biosphere in '. $array["location_full"] .'.</div>
	</div>
	
	<div class="splash-image">
		<a href="ecobrick_full_photo_url"><img src="'. $array["ecobrick_full_photo_url"] .'" style="	border-width: 10px;
	border-color: #97C4E3;
	width: 85%;
	margin-top:-20px;
	box-shadow: 0 0px 10px rgba(85, 84, 84, 0.8);
	border-style: solid;" alt="Ecobrick Serial '. $array["serial_no"] .' was made in '. $array["location_full"] .' and authenticated on ' . $array["last_validation_ts"] .'"
	title="Ecobrick Serial '. $array["serial_no"] .' was made in '. $array["location_full"] .' and authenticated on ' . $array["last_validation_ts"] .'"></a>
	</div>	
</div>

<div id="splash-bar"></div>
';

echo '
<a name="top"></a>
<div id="main-content">
	<div class="row">
		<div class="main">
			<div class="row-details">';

	if ( isset($array["vision"]) && $array["vision"] != '' ) {
			//	echo '<p><div class="vision-quote">'. $array["vision"] .'</div></p>';
		                echo '<p><div class="vision-quote"> '. str_replace('"', "", $array["vision"]) . '  </div></p>';
			}
	
			
			echo '<div class="lead-page-paragraph">
						<p><b>'. $array["owner"] .' has ecobricked '. $array["weight_g"] .'&#8202;g of used plastic in '. $array["location_city"] .', '. $array["location_country"] .' using a '. $array["volume_ml"] .' bottle to make a '. $array["sequestration_type"].'.</b></p>
					</div>';

	

				

			echo ' <div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p>This ecobrick was completed with a density of '. $array["density"] .'&#8202;g/ml and represents '. $array["CO2_kg"] .'&#8202;kg of sequestered C02. The ecobrick is permanently marked with Serial Number '. $array["serial_no"] .' and on '. $array["date_logged_ts"] .' was automatically added to the validation queue.  Based in '. $array["location_region"] .', '. $array["owner"] .' and their community '. $array["community_name"] .', are working hard to keep plastic out of the biosphere in '. $array["location_country"] .'. </p>

						<p>On '. $array["date_logged_ts"] .' the ecobrick was authenticated with an average validation score of '. $array["final_validation_score"] .'. The ecobrick’s authentication generated '. $array["ecobrick_dec_brk_val"] .'&#8202;ß. The ecobrick was ranked with the score of '. $array["validation_score_avg"] .'.</p>
						<br>
					</div>
				</div>';

			

			if ( isset($array["selfie_photo_url"]) && $array["selfie_photo_url"] != '' ) {
				echo '<div class="side-details">
				<img src="'. $array["selfie_photo_url"] .'" width="100%">
			</div>
		';
			}
				

			echo '
			
			</div>
			<div id="data-chunk">
				<div class="ecobrick-data">
					<p style="margin-left: -32px;font-weight: bold;">>> Raw Brikchain Data Record</p><br>
					<p>--------------------</p>
					<p>BEGIN BRIK RECORD ></p>';
			echo ' <p><b>Link to brk trans:</b><var>  No link yet</var></p>' ;
			echo ' <p><b>Logged:</b> ' . $array["date_logged_ts"] .'</p>' ;
			echo ' <p><b>Volume:</b> <var>'. $array["volume_ml"] .' &#8202;ml</var></p>' ;
			echo ' <p><b>Weight:</b> <var>' . $array["weight_g"] .'&#8202;g</var></p>' ;
			echo ' <p><b>Density:</b> <var>' . $array["density"] .'&#8202;g/ml</var></p>' ;
			echo ' <p><b>CO2e:</b>  <var>' . $array["CO2_kg"] .' &#8202;kg</var></p>' ;
			
			echo ' <p><b>Brikcoin value:</b> <var>' . $array["ecobrick_dec_brk_val"] .'&#8202;ß</var></p>' ;

			echo ' <p><b>Maker:</b> <var><i>' . $array["owner"] .'</i></var> </p>' ;
			echo ' <p><b>Sequestration:</b> <var>' . $array["sequestration_type"].'</var></p>' ;
			echo ' <p><b>Brand:</b> <var>' . $array["brand_name"] .'</var></p>' ;
			echo ' <p><b>Bottom colour:</b> ' . $array["bottom_colour"] .'</p>' ;

			echo ' <p><b>Plastic source:</b>  ' . $array["plastic_from"] .'</p>' ;

			echo ' <p><b>Community:</b> <var>' . $array["community_name"] .'</var></p>' ;
			echo ' <p><b>City:</b> <var>' . $array["location_city"] .'</var></p>' ;
			echo ' <p><b>Region:</b> <var>' . $array["location_region"] .'</var></p>' ;
			echo ' <p><b>Country:</b> ' . $array["location_country"] .'</p>' ;
			echo ' <p><b>Full location:</b> <var>' . $array["location_full"] .'</var></p>' ;


			echo ' <p><b>Validation:</b> ' . $array["last_validation_ts"] .'</var></p>' ;
			echo ' <p><b>Validator 1:</b> <var>' . $array["validator_1"] .'</var> </p>' ;
			echo ' <p><b>Validator 2:</b> <var>' . $array["validator_2"] .'</var> </p>' ;
			echo ' <p><b>Validator 3:</b> <var>' . $array["validator_3"] .'</var> </p>' ;
			echo ' <p><b>Validation score avg.:</b> <var>' . $array["validation_score_avg"] .'</var></p>' ;

			echo ' <p><b>Validation score final:</b> <var>' . $array["final_validation_score"] .'</var></p>' ;
			echo ' <p><b>Authenticated weight:</b> <var> ' . $array["weight_authenticated_kg"] .'&#8202;kg</p>
			<p>> END RECORD.</p>
				</div>
			</div>
			' ;

			echo '
			<br><hr><br> 
			<div class="page-paragraph">
				<h3><p>The Brikchain</p></h3>
			
				<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br><br>
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>';
			
			echo '	<div class="side">

			<div id="side-module-desktop-mobile">
					<img src="pngs/authenticated-ecobrick.png" width="90%" alt="Following the Earths example through eco bricking">
					<br><h4>Authenticated!</h4>
					<h5>This ecobrick has been authenticated by three independent validators that it meets the standards of plastic sequestration.</h5><br>
					<a class="module-btn" href="/about">About Ecobricks</a>
					<br><br>
				</div>   ';

	}


} else {
    echo '<META NAME="robots" CONTENT="noindex">';

	echo '

</head>

<BODY id="full-page">

<!--MENU INSERT-->

	  ';





echo '
<div class="splash-content-block">
		<div class="splash-box">
			<div class="splash-heading">';
	
			echo 'Sorry! :-(</div>
			<div class="splash-sub">No results for ecobrick '. $serialNo .' in the Brikchain.  Most likely this is because the Brikchain data is still in migration.</div>
		</div>
		<div class="splash-image"><img src="webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="empty ecobrick"></div>	
	</div>
	<div id="splash-bar"></div>

	<a name="top"></a>

	<div id="main-content">
		<div class="row">
			<div class="main">
				<br><br>

				
			
			<div class="ecobrick-data">
			<p>🚧 The data for ecobrick '. $serialNo .' has not yet been migrated to the blockchain.
				</p></div><br><br><br><br>
				
				<div class="page-paragraph">
				<p><h3>The Brikchain</h3></p>
			
				<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

			<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
				<br><br><br>
				<p><a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
				</div>
			</div>

			<div class="side">
		  
		';
		}
		$conn->close();

		?>



				
	

			
			

		
	

            <div id="side-module-desktop-mobile">
				<img src="webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<h5>The weight of the plastic inside an authenticated ecobrick is what we call Authenticated Ecobricked Plastic (AES plastic) for short.</h5><br>
				<a class="module-btn" href="/aes" target="_blank">About AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Brikcoins</h4>
				<h5>When an ecobrick is authenticated brikcoins are generated to represent the ecological value of its AES plastic.</h5><br>
				<a class="module-btn" href="brikcoins.php">About Brikcoins</a><br><br>
			</div>



		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->
<?php require_once ("settings-curtain.php");?>

<?php require_once ("menu-curtain.php");?>

<?php require_once ("knack-curtain.php");?>


<div style="z-index:5;">
<!-- sets footer of page:  be sure to add page name-->
<?php require_once ("footer.php");?>



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
