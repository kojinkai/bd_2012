/* Author: Lewis Nixon

*/

var BD = BD || {};  
// here a namespace object is passed as a function  
// parameter, where we assign public methods and  
// properties to it  
(function( o ){  
    o.foo = "foo";  
    o.bar = function(){  
        return "bar";  
    };  
})(BD);  
console.log(BD);




