$(document).ready(function () {
    
    $("#login").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        $('#loader').css('display', 'block');
        $('body').css('overflowY', 'hidden');
        $('#navbar').hide();
    });

    $('#loader').css('display', 'none');
    $('body').css('overflowY', 'auto');
});