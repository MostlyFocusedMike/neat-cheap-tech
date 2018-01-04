/*jslint plusplus: true*/
/*jslint white: true*/
/*globals $:false */
"use strict";

(function () {
  var sort = document.getElementById("sort"), 
      sticky = sort.offsetTop, // offsetTop returns the value of the el when it's at its topmost position
      buffer = document.getElementById("buffer");
      // a buffer is needed to keep smooth scrolling 
      // when the sort bar switches to position: absolute it leaves the flow 
      // to keep the other elements from jumping up, a buffer is added 
  window.onscroll = function() {
    if (window.pageYOffset >= sticky) {
      // if scrolled down past bar, make it stick, add buffer
      sort.classList.add("sticky"); 
      buffer.style.display = "block";
    } else {
      sort.classList.remove("sticky");
      buffer.style.display = "none";
    }
  };
}());
