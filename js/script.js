
/*-------------GOOGLE MAPS-----------------*/

function initialize() {

    var myLatlng = new google.maps.LatLng(55.633057, 37.212202);
    var mapOptions = {
        center: new google.maps.LatLng(55.633057, 37.212202),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        panControl: false,
        zoomControl: false,
        scaleControl: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);   
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;

$(document).ready(function() {

    $(".menu > li").each(function() {
        if($(this).children('a').attr('href') == '#'){
            $(this).addClass('dropdown');
            $(this).children('a').addClass('dropdown-toggle');
            $(this).children('a').attr('data-toggle', 'dropdown');
        }
    });

});

$(function() {

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});
