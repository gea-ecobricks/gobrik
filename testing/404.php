
<!DOCTYPE html>

<!--ENGLISH PAGE for grabbing the details of any ecobrick on the Brikchain and showing them on GoBrik.com-->


<head lang="en">

<meta http-equiv="content-type" content="text/html; charset=UTF-8" >

<!--This is our generic header that loads all the generic meta tags, stylesheets and scripts for the page-->

<?php require_once ("includes/header.php");?>

<!-- Main Landing stylesheet -->
<link rel="stylesheet" type="text/css" href="../2023-stylesheet.css?v=3">


<!--Default Light Styles to load first-->
<link rel="preload" href="../light.css?v=3" as="style" onload="this.rel='stylesheet'">
<noscript><link rel="../light.css?v=3" href="styles.css"></noscript>

<!-- Footer stylesheet -->

<link rel="preload" href="../stylesheet-footer-march.css?v=3" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="../stylesheet-footer-march.css?v=3" href="styles.css"></noscript>

<!--Stylesheets for light and dark mode.  They need to be called here-->
<link rel="stylesheet" href="../light.css?v=3" media="(prefers-color-scheme: no-preference), (prefers-color-scheme: light)">

<link rel="stylesheet" href="../dark.css?v5.7" media="(prefers-color-scheme: dark)">

<!-- This is the login information for the MYSQL database.  It is working.  And is already working on the index page -->

<?php include ("../ecobrick_env.php");?>


<!-- This accessess the ecobricks table, searches by serial number and should pull up the variables need to compose the unique meta tags of the pages -->


<title>GoBrik | Page not found  | 404</title>



<meta name="keywords" content="404, error, page not found, sorry">
<meta name="description" content="404 Error - Page Not Found">
<meta name="author" content="Global Ecobrick Alliance">

<!-- Facebook Open Graph Tags for social sharing-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
<meta property="og:url"           content="https://www.gobrik.com/<?php echo $lang; ?>">
<meta property="og:type"          content="app">
<meta property="og:title"         content="GoBrik | Page not found  | 404">
<meta property="og:description"   content="404 Error" >
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

		<div class="splash-heading">Page not found</div>
		
		<div class="splash-sub">Sorry there's no page at this address.</div>
	</div>
	
	<div class="splash-image">
		<img src="https://ecobricks.org/en/svgs/question.svg" style="
	width: 100%; margin-top:-20px;">
	</div>	
</div>

<div id="splash-bar"></div>

<a name="top"></a>
<div id="main-content">
	<div class="row">
		<div class="main">

        <div class="vision-quote">404 Error</div>
		
				<div class="lead-page-paragraph">Sorry, this page is missing or the URL you used is incorrect.</div>

				<div class="page-paragraph">
				
				<p>Check the page URL to make sure there's no typos in the address.  Or use the menu on the top right to go to another page or back home.</p>
				<br>
				<p><a class="action-btn-blue" href="go.php">🏠 Home</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">Our main landing page.</a></p><br>
                <p><a class="action-btn-blue" href="go.php">👨‍💻 Login</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">Already have an account? Login to GoBrik.</a></p><br>

                <p><a class="action-btn-blue" href="go.php">✍️ Sign Up</a></p>
				<p style="font-size: 0.85em; margin-top:20px;">No account yet?  Register for a free GoBrik account.</a></p><br>
				
				</div>
			</div>
		
		<div class="side">

		
<?php require_once ("side-modules/about-gea.php");?>

<?php require_once ("side-modules/brikcoin-live-values.php");?>

<?php require_once ("side-modules/for-earth.php");?>
    
	
	

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
