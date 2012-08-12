 /* Author: Lewis Nixon

*/

var BD_2012 = BD_2012 || {};  
// here a namespace object is passed as a function  
// parameter, where we assign public methods and  
// properties to it  
(function( o ){
  // Let's start with some variables
  var $mainAside = $('#main-aside'),
    $dataToggle = $('.data-toggle','#page'),
    resizeTimer, w;
    
    // Now for the functions
    o.showArchives = function() {
      $dataToggle.click(function() {
        var $t = $(this);
        if ( $t.text() === 'Archives' ) {
          $t.text('Hide Archives');
        }
        else if ( $t.text() === 'Hide Archives' ) {
          $t.text('Archives');
        }
        $mainAside.toggleClass('shown');
      });
    };
    
    o.layeredArchiveFlag = function() {
      if ( window.innerWidth ) {
        w = window.innerWidth;
        if ( w <= 1235 ) {
          $mainAside.insertAfter($dataToggle);
        }
        else if ( w > 1235 ) {
          $mainAside.insertBefore('#site-info');
        }
      }
    };
    
    o.windowResizeListener = function() {
      // Listen for the window.resize event
      // but throttle it to fire only every
      // 250ms to increase performance
      $(window).on("resize load", function() {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(o.layeredArchiveFlag, 250);
      });
    };    
})(BD_2012);

jQuery(function($) {
  BD_2012.showArchives();
  BD_2012.windowResizeListener();
});




