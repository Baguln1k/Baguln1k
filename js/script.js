$(document).ready(function() {

    $('.mine-bu .bt1').click(function () {
        $('.mine-sl-tab .item2').click();
        var tabs = $(this).index();
        var tabItem = $('.mine-ct .item1');
        $(this).siblings().removeClass('ac');
        $(this).addClass('ac');
        $('.mine-ct').fadeOut(300, function () {
            tabItem.removeClass('ac');
            tabItem.eq(tabs).addClass('ac');
            $(this).fadeIn(300);
        });
    });


    $('.mine-sl-tab .item2').click(function() {
        $(this).parent().parent().find('.sl4').slick('slickGoTo', $(this).index());
        $(this).addClass('ac').siblings().removeClass('ac');
    });
	



    $('.left-list-items ul li').click(function () {
        var tabs = $(this).index();
        var tabItem = $(this).parent().parent().parent().find('.right-item-content .self-item');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().parent().find('.right-item-content').fadeOut(300, function () {
            tabItem.removeClass('active');
            tabItem.eq(tabs).addClass('active');
            $(this).fadeIn(300);
        });
    });




    var hamburger = "<div class='open-menu'><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></div>"
    $('ul.nav').before(hamburger);

    $('.open-menu').click(function() {
        $('ul.nav').toggleClass('active');
        $(this).toggleClass('active');
    });


    jQuery(window).scroll(function() {
        var scroll_Height = window.pageYOffset;
        if (scroll_Height > 100) {
            jQuery('header#header').addClass('its-fixed');
        }
        else {
            jQuery('header#header').removeClass('its-fixed');
        }
    });

    if(document.body.clientWidth < 770) {
        $('.backg1').slick({
            prevArrow: '<div class="prev"></div>',
            nextArrow: '<div class="next"></div>',
            slidesToShow: 2,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
            ],
            dots: false
        });
        $('.ov').slick({
            prevArrow: '<div class="prev"></div>',
            nextArrow: '<div class="next"></div>',
            slidesToShow: 3,
            dots: true,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
            ]
        });
		  $('.ov_ak').slick({
            prevArrow: '<div class="prev"></div>',
            nextArrow: '<div class="next"></div>',
            slidesToShow: 1,
            dots: true,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }


        function checker() {
            if ($('html').hasClass('fancybox-enabled')) {
                $('.aktual-side .sl4').not('.slick-initialized').slick({
                    arrows: true,
                    fade: true,
                    prevArrow: '<div class="prev"></div>',
                    nextArrow: '<div class="next"></div>'
                });
                $('.mine-sl-tab .item2').click(function() {
                    $(this).parent().parent().find('.sl4').slick('slickGoTo', $(this).index());
                    $(this).addClass('ac').siblings().removeClass('ac');
                });
            }

        }
        setInterval(function(){
            checker();
        }, 10);

    // var timesRun = 0;
    // var interval = setInterval(function(){
    //     timesRun += 1;
    //     if(timesRun === 10){
    //         clearInterval(interval);
    //     }
    //     checker();
    //
    // }, 1000);



    $('ul.chose-et1 li').click(function() {
        if ($('.rr-ov1').length != 0) {
            $('html, body').animate({
                scrollTop: $('.rr-ov1').offset().top - 80
            }, 600);
        }
        return false;
    });



    $('.fancybox-container').fancybox({
        touch: false
    })

});
