
<!DOCTYPE html>
<?php $lang='en';?>

<head lang="en">

<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<!--PAGE LANGUAGE:  ENGLISH
Special Ecobrick View Page: v.1.0.1-->

<!--Content Page template: v.1.0.0-->



<?php require_once ("header.php");?>



<!-- ENGLISH ECOBRICK DETAILS PAGE -->

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

include 'ssp.class.php';

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
       
		background: url(https://ecobricks.org/svgs/brik-market-banner3.svg) bottom;
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



							  
											  

Hello.


</div>
</body>
</html>
