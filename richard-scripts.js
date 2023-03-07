
/* RIGHT SETTINGS OVERLAY */
function openSettings() {
  document.getElementById("right-settings-overlay").style.width = "90%";
  document.body.style.overflowY = "hidden";
  document.body.style.maxHeight = "101vh";

  var modal = document.getElementById('right-settings-overlay');

function modalShow () {
   modal.setAttribute('tabindex', '0');
   modal.focus();
}

function focusRestrict ( event ) {
  document.addEventListener('focus', function( event ) {
    if ( modalOpen && !modal.contains( event.target ) ) {
      event.stopPropagation();
      modal.focus();
    }
  }, true);
}
}


/* Close when someone clicks on the "x" symbol inside the overlay */
function closeSettings() {
  document.getElementById("right-settings-overlay").style.width = "0%";
  document.body.style.overflowY = "unset";
document.body.style.maxHeight = "unset";
  //document.body.style.height = "unset";
} 


/* LEFT MAIN MENU OVERLAY 

Triggers the right share link panel*/

function openMenu() {
  document.getElementById("left-menu-overlay").style.width = "90%";
  document.body.style.overflowY = "hidden";
  //document.body.style.maxHeight = "101vh";

  var modal = document.getElementById('left-menu-overlay');

function modalShow () {
   modal.setAttribute('tabindex', '0');
   modal.focus();
}

function focusRestrict ( event ) {
  document.addEventListener('focus', function( event ) {
    if ( modalOpen && !modal.contains( event.target ) ) {
      event.stopPropagation();
      modal.focus();
    }
  }, true);
}
}



/* Close when someone clicks on the "x" symbol inside the overlay */
function closeMenu() {
  document.getElementById("left-menu-overlay").style.width = "0%";
  document.body.style.overflowY = "unset";
  //document.body.style.maxHeight = "unset";

}

/* Knack OVERLAY 

Triggers the down fall of the knack sign in curtain*/

function openKnack() {
  document.getElementById("header").style.display = "none";

  document.getElementById("knack-overlay-curtain").style.height = "100%";
  document.getElementById("top-menu-login-button").style.display = "none";

  document.getElementById("top-close-buttoner").style.display = "contents";
  document.getElementById("landing-page").style.display = "none";
  //document.body.style.overflowY = "hidden";
  //document.body.style.maxHeight = "101vh";
  //document.body.style.overflowY = "unset"; please work
  window.scrollTo(0, 0);
  document.getElementById("knack-overlay-curtain").scrollTo(0, 0);
  document.getElementById("knack-overlay-curtain").scrollTo(0, 0);

  var modal = document.getElementById('knack-overlay-curtain');

  function modalShow () {
   modal.setAttribute('tabindex', '0');
   modal.focus();
}

function focusRestrict ( event ) {
  document.addEventListener('focus', function( event ) {
    if ( modalOpen && !modal.contains( event.target ) ) {
      event.stopPropagation();
      modal.focus();
    }
  }, true);
}
}


/* Knack OVERLAY 

Triggers the down fall of the knack sign in curtain

function openKnack2() {
  document.getElementById("knack-overlay-curtain2").style.height = "100%";
  document.getElementById("top-menu-login-button").style.display = "none";
  document.getElementById("top-close-buttoner").style.display = "contents";
  document.getElementById("landing-page").style.display = "none";

  window.scrollTo(0, 0);
  document.getElementById("knack-overlay-curtain2").scrollTo(0, 0);
  document.getElementById("knack-overlay-curtain2").scrollTo(0, 0);

  var modal = document.getElementById('knack-overlay-curtain');

  function modalShow () {
   modal.setAttribute('tabindex', '0');
   modal.focus();
}

function focusRestrict ( event ) {
  document.addEventListener('focus', function( event ) {
    if ( modalOpen && !modal.contains( event.target ) ) {
      event.stopPropagation();
      modal.focus();
    }
  }, true);
}
}*/



/* Close when someone clicks on the "x" symbol inside the overlay */
function closeKnack() {
  document.getElementById("knack-overlay-curtain").style.height = "0%";
  document.getElementById("top-menu-login-button").style.display = "block";
  document.body.style.overflowY = "unset";
  document.getElementById("landing-page").style.display = "block";
  document.getElementById("top-close-buttoner").style.display = "none";
  document.getElementById("header").style.display = "block";



  //document.body.style.maxHeight = "unset";

} 



function modalCloseCurtains ( e ) {
  if ( !e.keyCode || e.keyCode === 27 ) {
    
  document.body.style.overflowY = "unset";
  document.getElementById("right-close-button2").style.position = "absolute";
  document.getElementById("right-share-overlay").style.width = "0%";

  document.getElementById("left-settings-overlay").style.width = "0%";
  document.getElementById("knack-overlay-curtain").style.height = "0%";

  }
}

document.addEventListener('keydown', modalCloseCurtains);


/*
window.onscroll = function() {scrollFunction()};

//Scroll on arrival 
function scrollFunction() {

    const mediaQuery = window.matchMedia('(max-width: 700px)')

   //AFTER
   if ((mediaQuery.matches)  || (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30)) {
    
   
    document.getElementById("header").style.height = "50px";
    document.getElementById("lang-button").style.opacity = "1";
    document.getElementById("header").style.position = "fixed";
    
 
   } else {
     //BEFORE
     document.getElementById("header").style.height = "90vh";
     document.getElementById("header").style.position = "relative";
     
 
   }
 }
*/
