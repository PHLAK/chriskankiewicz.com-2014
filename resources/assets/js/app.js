$(document).ready(function() {

    // Enable Tooltips
    $('[rel="tooltip"]').tooltip();

    // Toggle navbar state on button click
    $('.navbar-toggle').click(function() {
        $('.nav-links').toggleClass('expanded');
    });

});

$(document).on('ready scroll resize', $(window), function() {

    var scrollPosition = $(window).scrollTop();
    var headerBottom   = $('.header-image').outerHeight();

    if (scrollPosition != 0 && scrollPosition >= headerBottom) {
        $('.primary-navigation').addClass('primary-navigation-collapse');
    } else {
        $('.primary-navigation').removeClass('primary-navigation-collapse');
    }

});
