<!DOCTYPE html>
<!--ENGLISH PAGE for grabbing the details of any ecobrick on the Brikchain and showing them on Ggobrik  -->
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
<!-- This accessess the ecobricks table, searches by serial number and other columns -->
<title>GoBrik | Search</title>
<meta name="keywords" content="search ecobricks, gobrik, ecobrick app, eco, brick, eco brick, ecobrick, eco-brick, eco,
bricks, eco brick, ecobricks, eco-bricks, brik, briks, plastic, plastic management, carbon sequestration,  plastic solved,
drop off, exchange, marketplace, plastic sequestration, aes plastic, plastic offsetting, ecological accounting, plastic accounting">
<meta name="description" content="Search our archive of authenticated ecobricks from around the world.">
<meta name="author" content="Global Ecobrick Alliance">
<!-- Facebook Open Graph Tags for social sharing-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<meta property="og:url"           content="https://www.gobrik.com/<?php echo $lang; ?>">
<meta property="og:type"          content="app">
<meta property="og:title"         content="GoBrik">
<meta property="og:description"   content="Search our archive of authenticated ecobricks from around the world." >
<meta property="og:image"         content="https://www.gobrik.com/images/social-banner-1200px.png" >
<meta property="fb:app_id"        content="1781710898523821" >
<meta property="og:image:width"   content="1200" >
<meta property="og:image:height"  content="1000" >
<meta property="og:image:alt"     content="A metaphorical road winding into the distance with various ecobrick and earth constructions along side it and the GoBrik logo floating above">
<meta property="og:locale"        content="en_GB">
</head>

<body id="full-page" class="accessibility-plugin-ac">
<?php include 'includes/top-menu.php';?>
<?php require_once ("includes/settings-curtain.php");?>
<!-- ?php include ("../ecobrick_env.php");?                                                                    rakshaECO-DNC-DUPLICATED-ABOVE-only Include ONCE -->
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">First Draft Search for Ecobricks</div>
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
		         <p><div class="vision-quote">By user, serial, location, etc.</div></p>
        	<!-- div class="lead-page-paragraph">Pushes over too far</div  -->
		<div class="main-details">
		   <div class="page-paragraph">
            <p>Russ and Team I suggest only some of these columns be available for use as Search parameters :- </p>
   <pre>
   ecobrick_unique_id OR serial_no
   owner OR ecobricker_maker OR actual_maker_name
   location_country : India
   location_region : Telangana
   location_city : MANCHERIAL
   location_full : MANCHERIAL, Telangana,  India
   plastic_from : community
   community_name : Carmel Convent High School
   brand_name : Coca cola
   bottom_colour : Green

   validator_1 : ie,  Jill Bonney Testing
   validator_2 : ie,  Cheekoti Medha Testing
   validator_3 : ie,  Debs Boyle Testing

   date_logged_ts : 2022-03-29 07:43:00
   sequestration_type : Testing Regular Ecobrick

   vision: null
   non_registered_maker_name

   If the search is to be presented in a long TABLE
       Should we remove the side panel over there ==>
   </pre>
			</div>
			</div>
                <!-- div class="side-details"> EMPTY side-details DIV HERE ?? </div  -->
		</div>
			<div id="data-chunk">
				<div class="ecobrick-data">
			  <p style="margin-left: -32px;font-weight: bold;">>> Current output > A FUll Raw Brikchain Data Record (described as follows) </p><br>
			  <p>OLD OUTOUT FOR REMOVAL </p>	<p>----  May be used as New Search criteria selection ----------------</p>
              <p>BEGIN BRIK RECORD Parameters columns/fields</p>
			  <p><b>Link to brk trans:</b><var>No link yet</var></p>
			  <p><b>Logged:</b> date_logged_ts </p>
			  <p><b>Volume:</b> <var>volume_ml in ml</var></p>
			  <p><b>Weight:</b> <var> weight_g &#8202;g</var></p>
			  <p><b>Density:</b> <var> density &#8202;g/ml</var></p>
			  <p><b>CO2e:</b> <var>CO2_kg &#8202;kg</var></p>
			  <p><b>Brikcoin value:</b> <var>ecobrick_dec_brk_val &#8202;ß</var></p>
			  <p><b>Maker:</b> <var><i>owner </i></var></p>
			  <p><b>Sequestration:</b> <var>sequestration_type </var></p>
			  <p><b>Brand:</b> <var> brand_name </var></p>
			  <p><b>Bottom colour:</b> bottom_colour</p>
			  <p><b>Plastic source:</b>  plastic_from</p>
			  <p><b>Community:</b> <var>community_name</var></p>
			  <p><b>City:</b> <var>location_city</var></p>
			  <p><b>Region:</b> <var>location_region</var></p>
			  <p><b>Country:</b> location_country </p>
			  <p><b>Full location:</b> <var> location_full</var></p>
			  <p><b>Validation:</b>last_validation_ts</var></p>
			  <p><b>Validator 1:</b> <var>validator_1</var> </p>
			  <p><b>Validator 2:</b> <var>validator_2</var> </p>
			  <p><b>Validator 3:</b> <var>validator_3</var> </p>
			  <p><b>Validation score avg.:</b> <var>validation_score_avg</var></p>
			  <p><b>Validation score final:</b> <var>final_validation_score</var></p>
			  <p><b>Authenticated weight:</b> <var> weight_authenticated_kg &#8202;kg</p>
			              <p> > END of  OLD RECORD.</p>
				</div>
                <!-- p> END OLD  RECORD.  in grey outside record </p -->

			</div>
			<br><hr>
            <!-- p>NEW SEARCH OUTPUT(s) WILL NEED TO BE DISPLAYED AS A TABLE here.</p  -->
			<div class="page-paragraph">
                <p>Search Results will need to be displayed as a nice formatted table....</p>
<!--  ecobrick_unique_id OR serial_no
   Maker owner OR ecobricker_maker OR actual_maker_name
   location_country : India
   location_region : Telangana
   location_city : MANCHERIAL
   location_full : MANCHERIAL, Telangana,  India
   plastic_from : community
   community_name : Carmel Convent High School
   brand_name : Coca cola
   bottom_colour : Green -->
                <table id="search-results" class="display-table" style="width:100%">
                    <thead>
                    <tr>
                        <th>Maker</th>
                        <th>Full location</th>
                        <th>Community</th>
                        <th>Sequestration</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Bottom colour</th>
                        <th>Size</th>
                        <th>Sequestration</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>Maker</td>
                        <td>Full location</td>
                        <td>Community</td>
                        <td>Sequestration</td>
                        <td>Brand</td>
                        <td>Type</td>
                        <td>Bottom colour</td>
                        <td>Size</td>
                        <td>Sequestration</td>
                    </tr>
                    <tr>
                        <td>Maker</td>
                        <td>Full location</td>
                        <td>Community</td>
                        <td>Sequestration</td>
                        <td>Brand</td>
                        <td>Type</td>
                        <td>Bottom colour</td>
                        <td>Size</td>
                        <td>Sequestration</td>
                    </tr>
                    <tr>
                        <td>Maker</td>
                        <td>Full location</td>
                        <td>Community</td>
                        <td>Sequestration</td>
                        <td>Brand</td>
                        <td>Type</td>
                        <td>Bottom colour</td>
                        <td>Size</td>
                        <td>Sequestration</td>
                    </tr>
                    <tr>
                        <td>Maker</td>
                        <td>Full location</td>
                        <td>Community</td>
                        <td>Sequestration</td>
                        <td>Brand</td>
                        <td>Type</td>
                        <td>Bottom colour</td>
                        <td>Size</td>
                        <td>Sequestration</td>
                    </tr>
                    <tr>
                        <td>Maker</td>
                        <td>Full location</td>
                        <td>Community</td>
                        <td>Sequestration</td>
                        <td>Brand</td>
                        <td>Type</td>
                        <td>Bottom colour</td>
                        <td>Size</td>
                        <td>Sequestration</td>
                    </tr>
                    </tbody>

                    <!-- tfoot>
                    <tr>
                        <th>Maker</th>
                        <th>Full location</th>
                        <th>Community</th>
                        <th>Sequestration</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Bottom colour</th>
                        <th>Size</th>
                        <th>Sequestration</th>
                    </tr>
                    </tfoot -->
                </table>



			<p><h2 style="text-align: left !important;
			text-shadow: none !important;">The Brikchain</h2></p>
		
			<p>When an ecobrick is authenticated, like the one above, it is published to the brikcoin manual blockchain and coins are issued according to its ecological value.
                This is what we call the Brikchain.  On the Brikchain, you can find this ecobrick and all the other ecobricks, blocks and transactions
                that underpin the Brickoin complimentary currency.</p><p>As a non-capital, manual process, Brikcoins favors anyone anywhere willing
                to work with their hands to make a meaningful ecological contribution.</p>
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
