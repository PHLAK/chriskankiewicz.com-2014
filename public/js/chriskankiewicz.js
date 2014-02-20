$(document).ready(function() {

    // Enable Tooltips
    $('[rel="tooltip"]').tooltip();

    // Resize header onload
    // resizeHeader();

    // Resize header on window resize
    // $(window).resize(resizeHeader);

});

function resizeHeader() {
    var newHeight = $(window).height() / 3;
    $('.header-bg').css('height', newHeight);
}