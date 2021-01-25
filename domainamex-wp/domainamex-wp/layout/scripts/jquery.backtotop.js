/*

Theme Name: Domainamex
Theme URI: https://domainamex.com/
Author: Domainamex
Author URI: https://domainamex.com/
Description: My 2020 personal theme is designed to show off the power of the block editor. It features custom styles for all the default blocks, and is built so that what you see in the editor looks like what you'll see on your website. Domainamex is designed to be adaptable to a wide range of websites.
Requires at least: 1.0.0
Version: 1.0
Text Domain: Domainamex
Tags: one-column, flexible-header, accessibility-ready, custom-colors, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, rtl-language-support, sticky-post, threaded-comments, translation-ready, block-patterns.

File: Back to Top JS
*/

jQuery("#backtotop").click(function () {
    jQuery("body,html").animate({
        scrollTop: 0
    }, 600);
});
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > 150) {
        jQuery("#backtotop").addClass("visible");
    } else {
        jQuery("#backtotop").removeClass("visible");
    }
});