$(document).ready(function() {

    // Enable Tooltips
    $('[rel="tooltip"]').tooltip();


    // Affix navbar on page load
    affixNavbar();

    // Affix navbar on scroll
    $(window).scroll(function() {
        affixNavbar();
    });

    // Affix navbar on resize
    $(window).resize(function() {
        affixNavbar();
    });

});


function affixNavbar() {
    if ($(window).scrollTop() >= $('.site-header').outerHeight()) {
        $('.site-nav').removeClass('navbar-static-top').addClass('navbar-fixed-top');
        $('.site-header').css('margin-bottom', $('.site-nav').outerHeight());
    } else {
        $('.site-nav').removeClass('navbar-fixed-top').addClass('navbar-static-top');
        $('.site-header').css('margin-bottom', 0);
    }
}