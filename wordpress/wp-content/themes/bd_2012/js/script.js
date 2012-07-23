/* Author: Lewis Nixon

*/

var BD_2012 = BD_2012 || {};  
// here a namespace object is passed as a function  
// parameter, where we assign public methods and  
// properties to it  
(function( o ){  
    o.showArchives = function() {
      $('.data-toggle','#page').click(function() {
        var $t = $(this);
        if ( $t.text() === "Archives" ) {
          $t.text('Hide Archives');
        }
        else if ( $t.text() === "Hide Archives" ) {
          $t.text('Archives');
        }
        $('#secondary').toggleClass('shown');
      });
    };    
})(BD_2012);

jQuery(function($) {
  BD_2012.showArchives();
});




