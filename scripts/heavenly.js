function setHeaderDefaults() {
    $('.nav:first').prepend("<li><img src='http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/KTS_TM_updated.png' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50'></li>");
    $('.nav:last').append("<li id='last-logo'><img src='http://sourendev.scilsnet.rutgers.edu/wp/wp-content/uploads/2013/12/KTS_TM_updated.png' title='Kind Technology Services' alt='Kind Technology Services' width='30' height='50'></li>");
    $('img').bind('contextmenu', function (e) {
        return false;
    });
}

function setMobileNavigation() {
    $('#mobile-nav-button-minus').click(function () {
        $('.nav').hide();
        $('#mobile-nav-button-plus').show();
        $('#mobile-nav-button-minus').hide();
    });
    $('#mobile-nav-button-plus').click(function () {
        $('.nav').show();
        $('#mobile-nav-button-minus').show();
        $('#mobile-nav-button-plus').hide();
    });
    $(window).resize(function() {
        if ($(window).width() <= 700) {
            $('#mobile-nav-button-minus').click(function () {
                $('.nav').hide();
                $('#mobile-nav-button-plus').show();
                $('#mobile-nav-button-minus').hide();
            });
            $('#mobile-nav-button-plus').click(function () {
                $('.nav').show();
                $('#mobile-nav-button-minus').show();
                $('#mobile-nav-button-plus').hide();
            });
        } else {
            $('.nav').show();
        }
    });
}

function setMobileServicePageLinks() {
    $('.mark-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#marketing-content').show();
        return false;
    });
    $('.host-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#hosting-content').show();
        return false;
    });
    $('.design-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#design-content').show();
        return false;
    });
    $('.dev-link').click(function() {
        $('.services').hide();
        $('#service-content-mobile').css('border-top', '1px solid black');
        $('#service-content-mobile').css('border-bottom', '1px solid black');
        $('#dev-content').show();
        return false;
    });
}