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

});

function checkNavPosition() {
    if ($(window).scrollTop() >= $('.header-bg').outerHeight()) {
        $('.site-header').addClass('site-header-collapse');
    } else {
        $('.site-header').removeClass('site-header-collapse');
    }
}