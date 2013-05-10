 /* Author: Lewis Nixon

*/

var BD_2012 = BD_2012 || {};  
// here a namespace object is passed as a function  
// parameter, where we assign public methods and  
// properties to it  
(function( o ){

  o.scrollToMugshot = function() {
    $('li', '#menu-main-navigation').last().children('a').click(function() {
      $('html, body').animate({
        scrollTop: $("#lewis-nixon-headshot").offset().top
      }, 1500);  
    });    
  }   
})(BD_2012);

jQuery(function($) {
  BD_2012.scrollToMugshot();
});




