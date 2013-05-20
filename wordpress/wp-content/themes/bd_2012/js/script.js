 /* Author: Lewis Nixon

*/

var BD_2012 = BD_2012 || {};  
// here a namespace object is passed as a function  
// parameter, where we assign public methods and  
// properties to it  
(function( o ){
  
  // pull the UA string
  var ua = navigator.userAgent;
  
  // test against ua for mobile webkit / old IE
  var isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

  // Test to see if its mobile webkit and
  // start adding classes in the new old-fashioned way,
  // with the classList property
  o.add_mobile_webkit_class = function() {
    if (isMobileWebkit) {
      var elementArr = document.getElementsByTagName("html"),
          html = elementArr[0];

      html.classList.add('mobile-webkit');
    }
  };

  o.scrollToMugshot = function() {
    $('li', '#menu-main-navigation').last().children('a').click(function() {
      $('html, body').animate({
        scrollTop: $("#lewis-nixon-headshot").offset().top
      }, 1500);  
    });
  };   
})(BD_2012);

jQuery(function($) {
  BD_2012.add_mobile_webkit_class();
  BD_2012.scrollToMugshot();
});




