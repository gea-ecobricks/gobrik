
/*
GoBrik.com Server Side Javascript File
Version: 1.1
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
/* -------------------------------------------------------------------------- */





/* -------------------------------------------------------------------------- */

/*	1. SEND TO TOP OF PAGE
This code sends the users browser view to the top of the page.
/* -------------------------------------------------------------------------- */


//Attempt to insert java  onclick="topFunction()" into every submit and login button








//Scroll to  kn-message element if any errors on a form submission.  Works for all scenes! 

$(document).on('knack-view-render.any', function(event, page) {
$("button.kn-button.is-primary").on("click", function(){
setTimeout(function(){
if ($(".kn-message").is(":visible")) {
$('html, body').animate({
scrollTop: $("#knack-body").offset().top
}, 500);
}
else {
notVisible = 1;
}
}, 500); 
});
});




//Scroll to  kn-message element if any errors on login form.  Not yet working though :-()

/*

$(document).on('knack-view-render.view_4367', function(event, page) {
$("button.kn-button.is-primary").on("click", function(){
setTimeout(function(){
if ($(".kn-message").is(":visible")) {
$('html, body').animate({
scrollTop: $("#knack-body").offset().top
}, 500);
}
else {
notVisible = 1;
}
}, 500); 
});
});


*/


/* -------------------------------------------------------------------------- */

/*	1. CHANGE CAPTIONS
Change caption text for "Add New Option" links.
/* -------------------------------------------------------------------------- */



// Set Regions Page
$(document).on('knack-scene-render.any', function(event, scene) {
  $("#view_837 .kn-add-option").html("+ Add New Region")
});

// Set City Page
$(document).on('knack-scene-render.any', function(event, scene) {
  $("#view_1012 .kn-add-option").html("<b><u>+ Add New City")
});



//First onboard page  OFF
/*
$(document).on('knack-scene-render.any', function(event, scene) {
  $("#kn-input-field_326 .kn-add-option").html("<b><u>+ Add New Country")
});

$(document).on('knack-scene-render.any', function(event, scene) {
  $("#kn-input-field_212 .kn-add-option").html("+ Add New Language")
});
*/


// Set Community Page

$(document).on('knack-scene-render.any', function(event, scene) {
  $("#kn-input-field_125 .kn-add-option").html("<b><u>+ Add Your Community</b><u>")
});

//??

$(document).on('knack-scene-render.any', function(event, scene) {
  $("#kn-input-field_335 .kn-add-option").html("<b><u> + Add a New Ecobricker</b><u>")
});

// Log page?

$(document).on('knack-scene-render.any', function(event, scene) {
  $("#kn-input-field_592 .kn-add-option").html("<b><u> + Add Community Project</b><u>")
});

// Set Photo log page ?
$(document).on('knack-scene-render.any', function(event, scene) {
  $("#field_37_upload .input .is-file").html("Take and Upload Photo")
});

// All login pages

$(document).on('knack-scene-render.any', function(event, scene) {
  $("#forgot-pass").html("<b><u>(Forgot your password?)</b></u>")
});

// what is this?

$(document).on('knack-scene-render.any', function(event, scene) {
  $("#view_5050 > div:nth-child(1) > p:nth-child(1)").html('....')
});

// Plastic assessment page

$(document).on('knack-scene-render.any', function(event, scene) {
  $("#kn-input-field_2028 .kn-add-option").html("<b><u> + Don't see your household? Add it</b><u>")
});





/* -------------------------------------------------------------------------- */

/*	3. HIDE / SHOW
Hides certain views on certain pages.
/* -------------------------------------------------------------------------- */




$(document).on('knack-scene-render.scene_1652', function (event, scene, page) {  /*Main Login*/
   $('.top-graphic,  .main-statement, .social-buttons-box, .social-buttons-box2, .tree-coins, .tree-text').hide()
        });

$(document).on('knack-scene-render.scene_1653', function (event, scene, page) {  /*dashboard*/
   $('.top-graphic,  .main-statement, .social-buttons-box, .social-buttons-box2, .tree-coins, .tree-text').hide()
        });

/*
$(document).on('knack-scene-render.scene_1652', function (event, scene, page) {
   $('.social-buttons-box').hide()
        });


$(document).on('knack-scene-render.scene_1671', function (event, scene, page) {
   $('.social-buttons-box').hide()
        });

$(document).on('knack-scene-render.scene_1671', function (event, scene, page) {
   $('.social-buttons-box2').show()
        });
        */


$(document).on('knack-scene-render.scene_79', function (event, scene, page) {
   $('#landing-content, .kn-info-bar').hide()
        });

$(document).on('knack-scene-render.scene_106', function (event, scene, page) {
   $('#landing-content, .top-menu').hide()
        });

$(document).on('knack-scene-render.scene_106', function (event, scene, page) {
  $('#landing-content, .kn-info-bar').hide()
        });

$(document).on('knack-scene-render.scene_191', function (event, scene, page) {
   $('#landing-content, .top-menu, .kn-info-bar').hide()
        });


$(document).on('knack-scene-render.scene_298', function (event, scene, page) {
   $('#landing-content, .top-menu, .kn-info-bar').hide()
        });

$(document).on('knack-scene-render.scene_35', function (event, scene, page) {
   $('#landing-content, .top-menu, .kn-info-bar').hide()
        });

$(document).on('knack-scene-render.scene_300', function (event, scene, page) {
   $('#landing-content, .top-menu, .kn-info-bar').hide()
        });

$(document).on('knack-scene-render.scene_18', function (event, scene, page) {
   $('#landing-content, .top-menu, .kn-info-bar').show()
        });

/*$(document).on('knack-scene-render.scene_1653', function (event, scene, page) {
   $('.top-menu, .kn-info-bar').show()
        });*/


     

/* -------------------------------------------------------------------------- */

/*	4. DASHBOARD 
Code used on the dashboard
/* -------------------------------------------------------------------------- */

     


//Adds links to Personal Panel on Dash

     
$(document).on('knack-scene-render.scene_18', function(event, scene) {

     $('.field_141 > div:nth-child(2)').wrap('<a href="#my-ecobricks" />');                   

     $('.field_143 > div:nth-child(2)').wrap('<a href="#density" />'); 
  
  $('.field_140 > div:nth-child(2)').wrap('<a href="#aes" />'); 
  
  $('.field_1834 > div:nth-child(2)').wrap('<a href="#ptr" />'); 
 
  $('.field_400 > div:nth-child(2)').wrap('<a href="#my-brikcoins" />'); 
 
   $('.field_1077 > div:nth-child(2)').wrap('<a href="#co2" />'); 
  
   $('.field_1747 > div:nth-child(2)').wrap('<a href="#offset" />'); 
  
  

  /* Adds linkes to Community panel */
  
   $('.field_43 > div:nth-child(2) > span:nth-child(1)').wrap('<a href="#my-community" />'); 
  
    $('.field_149 > div:nth-child(2)').wrap('<a href="#my-community" />'); 
  
 
   $('.field_459 > div:nth-child(2)').wrap('<a href="#community-ecobricks" />'); 
  
  $('.field_930 > div:nth-child(2)').wrap('<a href="aes" />'); 
  
    $(' .field_152 > div:nth-child(2)').wrap('<a href="#density" />'); 
  
     $('  .field_1080 > div:nth-child(2)').wrap('<a href="#co2" />'); 
  
       $('  .field_764 > div:nth-child(2)').wrap('<a href="#my-projects" />'); 
 
  
});

// Footer fade in  (still needed?)

setTimeout(function(){
document.getElementById('footer').style.visibility = "visible";
},5000);




/* -------------------------------------------------------------------------- */

/*	5. AUTO SUBMIT PAGES
This code forces a form to Submit and update automatically
/* -------------------------------------------------------------------------- */

/*AUTO SUBMIT FORMS 
Log step 2 new*/

$(document).on('knack-scene-render.scene_1727', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_788', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1226', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_809', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1243', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1333', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1425', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1450', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1451', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1447', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1474', function(event, scene) {
    $('button[type=submit]').submit();
});
$(document).on('knack-scene-render.scene_1448', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1857', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1618', function(event, scene) {
    $('button[type=submit]').submit();
});


$(document).on('knack-scene-render.scene_1860', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1825', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1827', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1544', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1972', function(event, scene) {
    $('button[type=submit]').submit();
});

$(document).on('knack-scene-render.scene_1997', function(event, scene) {
    $('button[type=submit]').submit();
});


$(document).on('knack-scene-render.scene_1994', function(event, scene) {
    $('button[type=submit]').submit();
});




/* -------------------------------------------------------------------------- */

/*	6. EXPERIMENTAL 
This code in development progress
/* -------------------------------------------------------------------------- */





// Function to Save Record ID  
/*
function save_Record_ID(recordID) {
  $.ajax({
    url: "https://api.knack.com/v1/pages/scene_1967/views/view_6276/records/" + recordID, // Replace Scene/View Here with Yours
    type: "PUT", 
    headers: {
        "X-Knack-Application-Id": Knack.application_id,
      "X-Knack-REST-API-Key": `knack`,
      "Authorization": Knack.getUserToken()
    },
    data: {
      field_2145 : recordID, // Stores Record ID Here
    },
    tryCount: 0,
    retryLimit: 3,
    success: function(response) {
      console.log("Captured Record ID"); // Success Message in Console Log
      Knack.hideSpinner();
    },
    error : function(XMLHttpRequest, textStatus, errorThrown) {
      this.tryCount++;
      let tryCount = this.tryCount, retryLimit = this.retryLimit, seconds; 
      if (tryCount <= retryLimit) { //try again
        switch(tryCount) {
          case 1:
          case 2: seconds = 5; break;
          case 3: seconds = 10; break; }
        let timeout = seconds * 1000;
        console.log("Error: " + XMLHttpRequest.status + " " + XMLHttpRequest.statusText + "\nRetry Count: " + tryCount + "\nRetrying in " + seconds + " seconds")
        let ajaxObject = this;
        window.setTimeout(function(){
          $.ajax(ajaxObject);
        }, timeout);
      } else {
        console.log("Failed to Capture Record ID");
      }
    }
  });
}

// Listen for record creation
// The comment line below also works
// $(document).on('knack-form-submit.view_638' , function (event, view, record) {
$(document).on('knack-form-submit.view_4979', function(event, view, record) {
  const recordId = record.id;
  save_Record_Id(recordId);
});

// This is the separate edit form.
// This removes the view from HTML upon rendering to prevent data manipulation.
$(document).on('knack-view-render.view_6276', function (event, view, record) {
  $('#' + view.key).remove(); 
});


*/



/* -------------------------------------------------------------------------- */

/*	6. OFF 
Code that is currently turned off, but could be useful again.
/* -------------------------------------------------------------------------- */



/* NOW ADDED TO INDEX LOADING  pybiT0O8ArV04 *

LazyLoad.js(['https://global.localizecdn.com/localize.js'], function () {
	!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);

	Localize.initialize({
		key: 'OuoVGmZSN0BEz',
    rememberLanguage: true
 	});
});

*/



