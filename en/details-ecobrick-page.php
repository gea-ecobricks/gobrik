
<!DOCTYPE html>
<?php $lang='en';?>

<head lang="en">

<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<!--PAGE LANGUAGE:  ENGLISH
Special Ecobrick View Page: v.1.0.1-->

<!--Content Page template: v.1.0.0-->



<?php require_once ("header.php");?>

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

<?php include '../ssp.class.php';?>

<!-- ENGLISH ECOBRICK DETAILS PAGE -->

<?php

// Get the contents from the Ecobrick table as an ordered View, using the serial_no from the URL.
$serialNo = $_GET['serial_no'];

// Refered to  https://www.w3schools.com/php/php_mysql_select_where.asp1
$sql = "SELECT * FROM tb_ecobricks WHERE serial_no = " . $serialNo;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    //  echo "<h1> Use Serial Number from URL => " . $serialNo ."</h1>"; Output data of each row 
    while($array = $result->fetch_assoc()) {

		echo '<title>Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g of plastic sequestered by '. $array["owner"] .' in '. $array["location_full"] .'.</title>';

        echo '<meta name="description" content="An authenticated ecobrick that was published and archived on the brikcoin manual blockchain on ' . $array["last_validation_ts"] .'">';

        if ( isset($array["vision"]) && $array["vision"] != '' ) {
            echo '<meta name="description" content="'. $array["vision"] .'">';
    
        }

		echo '<meta name="keywords" content="ecobrick, serial '. $array["owner"] .', '. $array["owner"] .', brikchain, brikcoin, brik record, plastic sequestration, recycling, alternative, sequestration of plastic, plastic offsetting, aes plastic, carbon sequestration. '. $array["location_full"] .'">';

        echo '<meta property="og:url"           content="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='. $array["serial_no"] .'"/>' ;
        echo '<meta property="og:title"         content="Ecobrick '. $array["serial_no"] .' | '. $array["weight_g"] .'g of plastic sequestered by '. $array["owner"] .' in '. $array["location_full"] .'.">';
        echo '<meta property="og:description"   content="An authenticated ecobrick that was published and archived on the brikcoin manual blockchain on ' . $array["last_validation_ts"] .'"/>';
        echo '<meta property="og:image"         content="'. $array["ecobrick_full_photo_url"] .'"/>';
        echo '<meta property="og:image:alt"     content="The brikchain record of an authenticated ecobrick on the brikchain"/>';
        echo '<meta property="og:locale" content="en_GB" />';
        echo '<meta property="og:type"          content="website">';
 	   

        echo '<meta property="og:type" content="article" />
        <meta property="og:site_name" content="Ecobricks.org" />
        <meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" />
        <meta property="article:modified_time" content="'. $array["last_validation_ts"] .'" />
        <meta property="og:image:type" content="image/png" />
        <meta name="author" content="Global Ecobrick Alliance" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="15 minutes" /> ';

    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>No Ecobrick Found | Ecobricks.org</title>';
    echo '<meta name="description" content="No data found for this ecobrick serial number.  Most likely this is because the brikchain data is still in migration."> ';
}
$conn->close();

?>

<!-- Required script for something?? -->


<STYLE>


.vision-quote {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #222222;
  font-weight: 300;
  text-shadow: 0 0 10px #fff;
}
@media screen and (max-width: 769px) {
	.vision-quote {
      font-size: 2.4em;
      line-height: 1.2;
      padding: 10px 6% 0px 6%;
	  margin-bottom: -18px;
  }
}
@media screen and (min-width: 769px) {
	.vision-quote {
      font-size: 4em;
      line-height: 1.3;
      padding: 15px;
	  margin-top: -40px;
	  margin-bottom: -20px;
  }
}

/* Sidebar/right column */

.row-details {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}

@media screen and (min-width: 700px) {
.main-details {
  flex: 60%;

  padding: 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main-details {
  flex: 100%;
  box-sizing: border-box;
}
}

@media screen and (min-width: 700px) {
	.side-details {
	flex: 40%;
	padding-left: 10px;
	box-sizing: border-box;
	margin-top: 30px;
	background: #ECECEC;
	padding: 10px;
	height: fit-content;
		}
	}

@media screen and (max-width: 700px) {
	.side-details {
	flex: 90%;
	margin: 0px 5% 0px 5%;
	box-sizing: border-box;
	background: #ECECEC;
	padding: 10px;
	
	
	}
	}

#data-chunk {margin: 16px;}

	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 73vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
       
		background: url(../svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}

@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		min-height: 70vh;
		padding: 0px 7% 0px 7%;
		z-index: 5;
		position: relative;
		
        
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
        background-color: #2A91DA;
		
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin: auto;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: left;
    margin: auto;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;

  width: 100%;
	padding: 0px;
	box-sizing: border-box;
	margin: 32px 8% -25px 4%;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
    flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
    margin: auto;
}
}



.splash-heading { 
    /*font-family: 'Mulish', Arial, Helvetica, sans-serif;*/
    font-family: Arvo, serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 3.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 4em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #fff;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
  text-shadow: 0 0 7px black;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.25em;
		line-height: 1.25;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 2.5em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	
	height:100px;	
	
	position: relative;
	z-index: 0;

box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
    background-color: #2A91DA;

	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);
	margin-bottom: 40px;

}

hr {border: gray;
border-style: dashed;
border-width: 1px;
margin-top: 31px;
margin-bottom: 31px;}



#main-content {
  margin: auto;
  box-sizing: border-box;
}
@media screen and (max-width: 700px) {
  #main-content {
      width: 100%;
	  margin-top: 0px;
  }
}
@media screen and (min-width: 700px) and (max-width: 1024px) {
  #main-content {
      width: 85%;
  }
}
@media screen and (min-width: 1024px) {
  #main-content {
      width: 77%;
  }
}


/* COLUMN DESIGN */


.row {  
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}


/* Main column */

@media screen and (min-width: 700px) {
.main {
  flex: 70%;

  padding: 15px 40px 15px 0px;
  box-sizing: border-box;
}
}

@media screen and (max-width: 700px) {
.main {
  flex: 100%;

  box-sizing: border-box;
}
}



@media screen and (max-width: 700px) {
	.lead-panel-paragraph {
      font-size: 1.35em;
      line-height: 1.4;
      margin: 20px 0% 25px 0%;
  }
}

@media screen and (min-width: 700px) {
	.lead-panel-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 17px 0px 23px 0px;
  }
}




 

@media screen and (max-width: 700px) {


  .lead-page-paragraph p {
    font-size: 1.45em;
    line-height: 1.4;
    margin: 35px 6% 25px 6%;
}
}

@media screen and (max-width: 700px) {

  .page-paragraph p {
    font-size: 1.15em;
    line-height: 1.4;
    margin: 20px 6% 30px 6%;
}
}

@media screen and (max-width: 700px) {
	.page-paragraph-reg {
      font-size: 1em;
      line-height: 1.3;
      margin: 20px 4% 20px 4%;
  }
}


@media screen and (min-width: 700px) {
	.lead-page-paragraph {
      font-size: 1.4em;
      line-height: 1.5;
      margin: 25px 10px 5px 10px;
  }
}


@media screen and (min-width: 700px) {
	.page-paragraph {
      font-size: 1.15em;
      line-height: 1.4;
      margin: 25px 10px 50px 10px;
  }
}

@media screen and (min-width: 700px) {
	.page-paragraph-reg {
      font-size: 1em;
      line-height: 1.3;
      margin: 20px 7px 50px 7px;
  }
}


@media screen and (max-width: 700px)  {
		.reg-content-block {
		text-align: left;
		padding: 15px 7% 15px 7%;
		border-radius: 0px;
		margin: 35px 0px 0px 0px;
/*
		border-color: grey;
		border-width: 1px;
		border-style: dashed;*/
}
	}


	@media screen and (min-width: 700px) {
		.reg-content-block {
			text-align: left;
			padding: 18px 5% 22px 5%;
			border-radius: 15px;
			margin: 30px 0px 20px 0px;
			
			border-color: grey;
			border-width: 1px;
			border-style: dashed;
 
}
	}


#data-chunk {
  padding: 15px;
  background: #e6f3ff;}


.ecobrick-data p {
	font-size: 0.9em;
	font-family: 'Courier New', monospace !important;
  	color: #222222;
  	line-height: 1.3;
	margin-top: 12px;
	font-weight: 300;
  background: aliceblue;
padding: 10px;
border-radius: 5px;
}


/* Sidebar/right column */

@media screen and (min-width: 700px) {
	.side {
	flex: 24%;
	padding: 70px 20px 0px 20px;
	box-sizing: border-box;
	margin-top: -80px;
	background: rgb(212,212,212);
	background: linear-gradient(126deg, rgba(212,212,212,1) 10%, rgba(251,251,251,1) 71%);
  border-radius: 20px;
	}
	}

@media screen and (max-width: 700px) {
	.side {
	flex: 24%;
	padding: 20px;
	box-sizing: border-box;
	
	}
	}






/* -------------------------------------------------------------------------- */

/*	4. TYPOGRAPHY
/* -------------------------------------------------------------------------- */


p {
	font-family: 'Mulish', sans-serif !important;
	font-size: 15px !important;
	font-weight: 300 !important;
	-webkit-font-smoothing: antialiased !important;
  	line-height: 1.5em !important;
    color: var(--text-color);
}

b {	font-weight: 500 !important;}

strong {font-weight: 500 !important;}


h1 {
	font-size: 28px !important;
	font-family: 'Mulish', sans-serif !important;
      text-align: center !important;
	  line-height: 1.2 !important;
	text-shadow: 0px 0px 10px #fff !important;
	 font-weight: 300 !important;
     color: var(--text-color);
}

h2 {
	font-size: 29px;
    font-family: 'Arvo', Georgia, serif !important;
    text-align: center !important;
	  line-height: 1.3 !important;
	 font-weight: 400 !important;
	text-shadow: 0px 0px 10px #fff !important;
    color: var(--text-color);
}

h3 {
    font-size: 22px !important;
    font-family:'Mulish', sans-serif !important;
    text-align: center !important;
    line-height: 1.4 !important;
    font-weight: 300;
    color: var(--text-color);
}

h4 {
	font-size: 17px !important;
	font-family: 'Mulish', sans-serif !important;
    text-align: center !important;
          line-height: 1.4 !important;
	    font-weight: 300 !important;
        color: var(--text-color);
}


h5 {
	font-size: 16px !important;
    font-family: 'Arvo', serif;
    text-align: center !important;
  line-height: 1.3 !important;
  color: var(--text-color);
}

h6 {
	font-size: 16px !important;
	font-family: 'Mulish', sans-serif !important;
   /* text-align: center;*/
  line-height: 1.4 !important;
    font-weight: 300 !important;
    color: var(--text-color);
}


/* -------------------------------------------------------------------------- */

/*	5. Document Setup
/* -------------------------------------------------------------------------- */



.loader { 
    z-index: 1;	
    position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 90%;
      z-index: 99;
      background: url('svgs/bottle-loader.svg') center no-repeat;
        box-sizing: border-box;
     background-size: 38px;
		
	-webkit-animation-delay: 0s !important;
	opacity:0;
	-webkit-animation:fadeIn ease-in 0.3s;
	-webkit-animation-duration:0.3s;
	-webkit-animation-fill-mode:forwards;

  animation-delay: 0s; 
  animation: fadeIn ease-in 0.3s;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
}




</style>

</head>


											  

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
		<div class="splash-image"><img src="../webp/empty-ecobrick-450px.webp?v2" style="width: 80%; margin-top:20px;" alt="empty ecobrick"></div>	
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

			<div class="side">
		  
		';
		}
		$conn->close();

		?>



				
	

			
			

		
	

            <div id="side-module-desktop-mobile">
				<img src="../webp/aes-400px.webp" width="80%" alt="For-Earth Enterprise through eco bricking">
				<!--<h4>AES Plastic</h4>-->
				<h5>The weight of the plastic inside an authenticated ecobrick is what we call Authenticated Ecobricked Plastic (AES plastic) for short.</h5><br>
				<a class="module-btn" href="/aes" target="_blank">About AES</a><br><br>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="../webp/2-brikcoins-450px.webp" width="75%" loading="lazy" alt="eco brik and earth building can make regenerative structures">
				<h4>Brikcoins</h4>
				<h5>When an ecobrick is authenticated brikcoins are generated to represent the ecological value of its AES plastic.</h5><br>
				<a class="module-btn" href="brikcoins.php">About Brikcoins</a><br><br>
			</div>
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


		</div>

	</div>
</div>



	<!--FOOTER STARTS HERE-->

	<?php require_once ("footer.php");?>


<!-- CUSTOM PAGE SCRIPTS-->

<!-- This script is for pages that use the accordion content system
<script src="accordion-scripts.js" defer></script>-->


</div>
</body>
</html>
