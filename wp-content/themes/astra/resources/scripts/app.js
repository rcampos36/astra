import domReady from '@roots/sage/client/dom-ready';
import jQuery from 'jquery';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  jQuery(window).on("load",function() {
    jQuery(window).on("scroll", function() {
      var windowBottom = jQuery(this).scrollTop() + jQuery(this).innerHeight();
      jQuery(".card").each(function() {
        /* Check the location of each desired element */
        var objectBottom = jQuery(this).offset().top + jQuery(this).outerHeight();
        
        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
          if (jQuery(this).css("opacity")==0) {jQuery(this).fadeTo(300,1);}
        } else { //object goes out of view (scrolling up)
          if (jQuery(this).css("opacity")==1) {jQuery(this).fadeTo(300,0);}
        }
      });
    }).on("scroll"); //invoke scroll-handler on page-load
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
