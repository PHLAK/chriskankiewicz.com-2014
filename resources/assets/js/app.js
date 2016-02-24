window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

$(document).ready(function() {

    // Enable Tooltips
    $('[rel="tooltip"]').tooltip();

    // Check nav position on page load
    checkNavPosition();

    // Check nav position on scroll
    $(window).scroll(function() {
        checkNavPosition();
    });

    // Check nav position on resize
    $(window).resize(function() {
        checkNavPosition();
    });

    // Toggle navbar state on button click
    $('.navbar-toggle').click(function() {
        $('.nav-links').toggleClass('expanded');
    });

});

function checkNavPosition() {
    if ($(window).scrollTop() >= $('.header-image').outerHeight()) {
        $('.primary-navigation').addClass('primary-navigation-collapse');
    } else {
        $('.primary-navigation').removeClass('primary-navigation-collapse');
    }
}
