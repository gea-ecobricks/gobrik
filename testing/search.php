
<!DOCTYPE html>

<!--ENGLISH PAGE for grabbing the details of any ecobrick on the Brikchain and showing them on GoBrik.com-->


<head lang="en">

<meta http-equiv="content-type" content="text/html; charset=UTF-8" >

<!--This is our generic header that loads all the generic meta tags, stylesheets and scripts for the page-->

<?php require_once ("includes/header.php");?>

<!-- Main Landing stylesheet -->
<link rel="stylesheet" type="text/css" href="../march-stylesheet.css?v=3">


<!--Default Light Styles to load first-->
<link rel="preload" href="../light.css?v=3" as="style" onload="this.rel='stylesheet'">
<noscript><link rel="../light.css?v=3" href="styles.css"></noscript>

<!-- Footer stylesheet -->

<link rel="preload" href="../stylesheet-footer-march.css?v=3" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="../stylesheet-footer-march.css?v=3" href="styles.css"></noscript>

<!--Stylesheets for light and dark mode.  They need to be called here-->
<link rel="stylesheet" href="../light.css?v=3" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">

<link rel="stylesheet" href="../dark.css?v5.6" media="(prefers-color-scheme: dark)">

<!-- This is the login information for the MYSQL database.  It is working.  And is already working on the index page -->

<?php include ("../ecobrick_env.php");?>


<!-- This accessess the ecobricks table, searches by serial number and should pull up the variables need to compose the unique meta tags of the pages -->


<title>GoBrik | Search</title>



<meta name="keywords" content="search ecobricks, gobrik, ecobrick app, eco, brick, eco brick, ecobrick, eco-brick, eco, bricks, eco brick, ecobricks, eco-bricks, brik, briks, plastic, plastic management, carbon sequestration,  plastic solved, drop off, exchange, marketplace, plastic sequestration, aes plastic, plastic offsetting, ecological accounting, plastic accounting">
<meta name="description" content="Search our archive of authenticated ecobricks from around the world.">
<meta name="author" content="Global Ecobrick Alliance">

<!-- Facebook Open Graph Tags for social sharing-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<meta property="og:url"           content="https://www.gobrik.com/<?php echo $lang; ?>">
<meta property="og:type"          content="app">
<meta property="og:title"         content="GoBrik">
<meta property="og:description"   content="Search our archive of authenticated ecobricks from around the world." >
<meta property="og:image"         content="https://www.gobrik.com/images/social-banner-1200px.png" >
<meta property="fb:app_id"  content="1781710898523821" >
<meta property="og:image:width" content="1200" >
<meta property="og:image:height" content="1000" >
<meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it and the GoBrik logo floating above">
<meta property="og:locale" content="en_GB">



</head>


<body id="full-page" class="accessibility-plugin-ac">

<?php include 'includes/top-menu.php';?>



<?php require_once ("includes/settings-curtain.php");?>

<?php include ("../ecobrick_env.php");?>


<div class="splash-content-block">
	<div class="splash-box">

		<div class="splash-heading">Search for Ecobricks</div>
		
		<div class="splash-sub">Search our repository of authenticated ecobricks from around the world</div>
	</div>
	
	<div class="splash-image">
		<img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/5f4c71fbadcff100153f2bff/original/searchecobricks500px.png">
	</div>	
</div>

<div id="splash-bar"></div>

<a name="top"></a>
<div id="main-content">
	<div class="row">
		<div class="main">
			<div class="row-details">

	<p><div class="vision-quote">Search</div></p>';
		     <p><div class="vision-quote"> By serial, location, user, etc.</div></p>
	
			
	<div class="lead-page-paragraph">
						Some infor
						</div>

	

				

		<div class="main-details">
					
					
					
					<div class="page-paragraph">
						<p>This ecobrick was completed with a density of '. $array["density"] .'&#8202;g/ml and represents '. $array["CO2_kg"] .'&#8202;kg of sequestered C02. The ecobrick is permanently marked with Serial Number '. $array["serial_no"] .' and on '. $array["date_logged_ts"] .' was automatically added to the validation queue.  Based in '. $array["location_region"] .', '. $array["owner"] .' and their community '. $array["community_name"] .', are working hard to keep plastic out of the biosphere in '. $array["location_country"] .'. </p>

						<p>On '. $array["date_logged_ts"] .' the ecobrick was authenticated with an average validation score of '. $array["final_validation_score"] .'. The ecobrick’s authentication generated '. $array["ecobrick_dec_brk_val"] .'&#8202;ß. The ecobrick was ranked with the score of '. $array["validation_score_avg"] .'.</p>
						
					</div>
				</div><div class="side-details">
				
			</div>
	
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
	
			<br><hr>
			<div class="page-paragraph">
			<p><h2 style="text-align: left !important;
			text-shadow: none !important;">The Brikchain</h2></p>
		
			<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.  This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions that underpin the Brickoin complimentary currency.</p>

		<p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing to work with their hands to make a meaningful ecological contribution.</p>
			<br>
			<p><a class="action-btn-blue" href="brikchain.php">🔎 Browse the Brikchain</a></p>
			<p style="font-size: 0.85em; margin-top:20px;">The live chain of transactions and ecobricks.</a></p>
			</div>
		</div>
		
		<div class="side">

			<div id="side-module-desktop-mobile">
					<img src="../svgs/authenticated-brik.svg?v=3" width="80%" alt="Following Earths example through eco bricking">
					<br><h2>Authenticated!</h2>
					<p>This ecobrick has been authenticated by three independent validators that it meets the standards of plastic sequestration.</p><br>
					<a class="module-btn" href="/about">About Ecobricks</a>
					<br><br>
				</div>  


            <div id="side-module-desktop-mobile">
				<img src="../webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<p>The weight of the plastic inside an authenticated ecobrick is what we call Authenticated Ecobricked Plastic (AES plastic) for short.</p><br>
				<a class="module-btn" href="/aes" target="_blank">About AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="../webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h2>Brikcoins</h2>
				<p>When an ecobrick is authenticated brikcoins are generated to represent the ecological value of its AES plastic.</p><br>
				<a class="module-btn" href="brikcoins.php">About Brikcoins</a><br><br>
			</div>



		</div>

	</div>
</div>



<div class="bottom-scope" style="width:100%;height:400px;margin-top:-350px"></div>

<div style="z-index:5;">
<!-- sets footer of page:  be sure to add page name-->
<?php require_once ("includes/footer.php");?>
</div>
</div>
</body>
</html>
