$(document).ready(function() {
    $("#phone").inputmask("+7 (999) 999-99-99");
    if ($(document).width() >= 768) {
        $('#fullpage').fullpage({
            navigation: true,
            navigationPosition: 'right',
            scrollingSpeed: 500,
            afterLoad: function(anchorLink, index) {
                if (index == 4) {
                    $('.wrapper').addClass('index');
                } else {
                    $('.wrapper').removeClass('index');
                }
                $('.mainblockcontent').addClass('animated fadeInUp').css('animation-delay', '.3s');
            },
            onLeave: function(index, nextIndex, direction) {
                if (index == 1 && nextIndex == 2) {
                    $('.mainslider .coutbloc , .mainslider .owlmain , .mainslider .scrollmain').addClass('animated fadeInUp').css('animation-delay', '.3s');
                } else if ((index == 1 || index == 2) && nextIndex == 3) {
                    $('.premiummain  .blockin').addClass('animated fadeInUp').css('animation-delay', '.3s');
                } else if ((index == 1 || index == 2 || index == 3) && nextIndex == 4) {
                    $('.contacts_page_block .blockin').addClass('animated fadeInUp').css('animation-delay', '.3s');
                    $('.contacts_page_block .rightblock').addClass('animated fadeInUp').css('animation-delay', '.3s');
                }
            }
        });
    } else {
        $('.wrapper').addClass('mobile');
    }
    $(".owlmain").owlCarousel({
        items: 1,
        margin: 0,
        nav: true,
        loop: true,
        smartSpeed: 1450,
        navContainer: '.arrowmain',
        responsive: {
            0: {
                autoHeight: true
            },
            767: {
                autoHeight: true
            },
            991: {
                autoHeight: false
            }
        }
    });
    owlcount = function() {
        if ($('.owlmain .owl-dots div').length > 1) {
            var count = $('.owlmain .owl-dots div').length;
            var val = $('.owlmain .owl-dots div.active').index();
            $('.count').html('<span>' + (val + 1) + '</span>' + ' / ' + count);
        }
    }
    $(document).ready(function() {
        
        owlcount();
        
        $(".scrollDown").click(function() {
            $("#fp-nav ul li:nth-child(2) a").click();
        });
        
    });
    $(window).on('resize', function() {
        setTimeout(function() {
            owlcount();
        }, 400);
    });
    $('.owlmain').on('changed.owl.carousel', function(e) {
        owlcount();
    });
    $('.scrollmain').click(function() {
        var ind = $(this).parents('.section').index() + 1;
        $('#fp-nav li').eq(ind).find('a').click();
    });
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            zoom: 18,
            center: new google.maps.LatLng(56.509553, 84.984578),
            styles: [{
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "simplified"
                }, {
                    "color": "#fcfcfc"
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "simplified"
                }, {
                    "color": "#fcfcfc"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "simplified"
                }, {
                    "color": "#dddddd"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "simplified"
                }, {
                    "color": "#dddddd"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "simplified"
                }, {
                    "color": "#eeeeee"
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "simplified"
                }, {
                    "color": "#dddddd"
                }]
            }]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
    }
});