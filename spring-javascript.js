
/*
Our Custom GoBrik Javascripts served on our server
Version: 1.0
Description: The jquery here loads through here (not directly throught this page).  This is a backup of the knack live code.
Orginal Author:  Russell Maier
Posted by: Robbie Green
Last Backup:  May 4th, 2021
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
All files, unless otherwise stated, are released under the GNU General Public
License version 2.0 (http://www.gnu.org/licenses/gpl-2.0.html)
*/

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
	0.	Send to top of page
	1.  Change Captions
	2.  Hide / Show
	4. 	Dashboard
	5.  Auto-Submit
	6.	Experimental
	7.  Off
  8.  PTR DIAL SCORE
/* -------------------------------------------------------------------------- */


/* -------------------------------------------------------------------------- */

/*	1. SEND TO TOP OF PAGE
This code sends the users browser view to the top of the page.
/* -------------------------------------------------------------------------- */


//Attempt to insert java  onclick="topFunction()" into every submit and login button


  
window.onload = function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



// Not working.  When the user clicks on the button, scroll to the top of the document
/*function topFunction2() {
document.body.addEventListener('click', fn, true); 
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}*/




/*
<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function(event) {
  setTimeout(addScript, 8000)
  });
  
  function addScript() {
  
  script = document.createElement('script');
  script.type = 'text/javascript';
  script.async = true;
  script.onload = function() {
    console.log("Added Script");
  };
  script.src = 'https://arc.io/widget.min.js#mJFtQsHF';
  document.getElementsByTagName('head')[0].appendChild(script);
  }
*/


/* -------------------------------------------------------------------------- */

/*	8.  PTR DIAL SCORE
    This Dial object uses the PTR Score image 
    Score refers to the text Span found inside the PTR #Dial object, which appears in the image. 
    CSS causes default to Black, if JS not implemented. last update 13/MAR/2022
*/
/* -------------------------------------------------------------------------- */

$(document).on('knack-scene-render.any', function(event, scene) {
  // Removes the Thousands comma delimiter from text Span, it screwed up higher values.
    var score = Number($(this).find('#dial').text().replace(',', ''));
    $('#dial').css('background-repeat', 'no-repeat'); 
    $('#dial').css('background-position', 'center'); 
    $('#dial').css('height', '380px');
  switch (true) {
    case (score >= 0 && score < 7):
      $('#dial').css('color', '#ff0000');/* #ff0000 The Zero Point 7 14 21 28 35 42 49 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-5-10.webp)'); 
  //  $('#dial').css('background-repeat', 'no-repeat'); 
  //  $('#dial').css('background-position', 'top'); 
  //  $('#dial').css('height', '450px'); 
  // no-needle.webp
      break;
    case (score >= 7 && score < 14):
      $('#dial').css('color', '#ff0900');/* #ff0900  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-10-15.webp)'); 
  //    $('#dial').css('background-repeat', 'no-repeat'); 
  //    $('#dial').css('background-position', 'top'); 
      break;
    case (score >= 14 && score < 21):
      $('#dial').css('color', '#ff1600');/* #ff1600  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-15-20.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 21 && score < 28):
      $('#dial').css('color', '#ff2900');/* #ff2900 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-20-25.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 28 && score < 32):
      $('#dial').css('color', '#ff3e00');/* #ff3e00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-25-30.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 32 && score < 38):
      $('#dial').css('color', '#ff5b00');/* #ff4a00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-30-35.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');    
      break;
    case (score >= 38 && score < 40):
      $('#dial').css('color', '#ff6600');/* The 50 Point 'orangered' '#ff6600' */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-35-40.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 40 && score < 45):
      $('#dial').css('color', '#ff6600');/* 1 #ff6600  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-40-45.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 44 && score < 49):
      $('#dial').css('color', '#ff8d00');/* 2 #ff8d00   */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-45-49.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
     case (score >= 49 && score < 51):
      $('#dial').css('color', '#ffb300');/* 4 #ffb300  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-50.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
       case (score >= 51 && score < 63):
      $('#dial').css('color', '#ffb300');/* 4 #ffb300  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-51-60.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
      case (score >= 63 && score < 70):
      $('#dial').css('color', '#ffb300');/* 4 #ffb300  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-61-70.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
    case (score >= 70 && score < 80):
      $('#dial').css('color', '#ffb300');/* 4 #ffb300  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-71-80.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
    case (score >= 80 && score < 90):
      $('#dial').css('color', '#ffca00');/* 5 #ffca00 */
          $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-81-90.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
    case (score >= 91 && score < 98):
      $('#dial').css('color', '#ffff00');/* 6 #ffe200*/
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-91-98.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 98 && score < 101):
      $('#dial').css('color', '#ffff00');/* #fff700 The 100 Point  YELLOW */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-98-101.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
    case (score >= 101 && score < 115):
      $('#dial').css('color', '#ffff00');/* 1  ffff00 */
        $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-101-115.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
    case (score >= 115 && score < 128):
      $('#dial').css('color', '#fdff00');/*  2  fdff00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-115-128.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
  
    case (score >= 128 && score < 142):
      $('#dial').css('color', '#fdff00');/*  2  fdff00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-128-142.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 142 && score < 156):
      $('#dial').css('color', '#e9ff00');/*  3 e9ff00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-142-156.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 156 && score < 170):
      $('#dial').css('color', '#d7ff00');/* 4  d7ff00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-156-170.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 170 && score < 184):
      $('#dial').css('color', '#c6ff00');/* 5  c6ff00  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-170-186.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 184 && score < 200):
      $('#dial').css('color', '#b1ff00');/* 6  b1ff00*/
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-186-200.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 200 && score < 243):
      $('#dial').css('color', '#9fff00');/* 9fff00 The 200 Point  214  PaleGreen */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-200-243.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 243 && score < 286):
      $('#dial').css('color', '#9fff00');/* 2 9fff00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-243-286.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 286 && score < 329):
      $('#dial').css('color', '#87ff00');/* 3 87ff00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-286-329.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 329 && score < 372):
      $('#dial').css('color', '#70ff00');/* 4 70ff00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-329-372.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 372 && score < 415):
      $('#dial').css('color', '#58ff00');/* 5 58ff00*/
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-372-415.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 415 && score < 458):
      $('#dial').css('color', '#3fff00');/* 6 3fff00*/
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-415-448.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 458 && score < 500):
      $('#dial').css('color', '#11ff00');/* 1 #1ff00 500 POINT */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-458-500.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 500 && score < 572):
      $('#dial').css('color', '#00ff00');/* 2 00ff00*/
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-500-572.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 572 && score < 644):
      $('#dial').css('color', '#00fd00');/* 3 00fd00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-572-644.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 644 && score < 716):
      $('#dial').css('color', '#00f900');/* 4 00f900 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-644-716.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 716 && score < 860):
      $('#dial').css('color', '#00f600');/* 5 00f600 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-716-860.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 860 && score < 932):
      $('#dial').css('color', '#00f200');/* 6 00f200 1000(00ee00) 00ea00  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-860-932.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break; 
    case (score >= 932 && score < 1200):
      $('#dial').css('color', '#00e500');/*  00e500  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-932-1200.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 1200 && score < 1400):
      $('#dial').css('color', '#00df00');/*  00df00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-1200-1400.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break; 
    case (score >= 1400 && score < 1600):
      $('#dial').css('color', '#00dc00');/*  00dc00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-1400-1600.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 1600 && score < 1800):
      $('#dial').css('color', '#00df00');/*   00df00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-1600-1800.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break; 
    case (score >= 1800 && score < 2000):
      $('#dial').css('color', '#00dc00');/* 2000 Point 00dc00 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-1800-2000.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;    
    case (score >= 2000 && score < 2500):
      $('#dial').css('color', '#00d000');/* 00d000 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-2000-2500.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 2500 && score < 3000):
      $('#dial').css('color', '#00c400');/* 00c400 3000 Point */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-2500-3000.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 3000 && score < 3500):
      $('#dial').css('color', '#00bb00');/*00bb00  */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-3000-3500.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 3500 && score < 4000):
      $('#dial').css('color', '#00b000');/*  00b000 */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-3500-4000.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    case (score >= 4000 && score < 5000):
      $('#dial').css('color', '#00a100');/* The final Green area */
      $('#dial').css('background-image', 'url(https://www.gobrik.com/dials/dial-4000-5000.webp)'); 
      $('#dial').css('background-repeat', 'no-repeat'); 
      $('#dial').css('background-position', 'top');
      break;
    }
  });
  
  
  /*MENU*/
  
  
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
      x.className += " responsive";
      } else {
      x.className = "topnav";
      }
    }
  
  
  