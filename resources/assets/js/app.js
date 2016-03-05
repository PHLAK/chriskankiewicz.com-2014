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

    var scrollPosition = $(window).scrollTop();
    var headerBottom   = $('.header-image').outerHeight();

    if (scrollPosition != 0 && scrollPosition >= headerBottom) {
        $('.primary-navigation').addClass('primary-navigation-collapse');
    } else {
        $('.primary-navigation').removeClass('primary-navigation-collapse');
    }

}
