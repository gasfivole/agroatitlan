/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        var url = $anchor.attr('href');
        var section = url.substring(url.lastIndexOf("#"));
        $('html, body').stop().animate({
            scrollTop: $(section).offset().top - 100
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$( document ).ready(function() {
    var url = window.location.href;
    var section = url.substring(url.lastIndexOf("#"));
    $('html, body').stop().animate({
        scrollTop: $(section).offset().top - 100
    }, 1500, 'easeInOutExpo');
});