var doc;
document.addEventListener("DOMContentLoaded", function() {
    doc = $(document);
    var menuMobile = doc.find('.menu-mobile');
menuMobileClick(menuMobile); // срабатывание мобильного меню
slider(); // слайдер


// срабатывание при скроле
window.onscroll = function() {
    menuScroll(menuMobile); 
}  

// контент главная
if(doc.find('#content-index')) {
sliderHstart();
ObjContent.index.sliderBottom(); // слайдер опустить в низ при нажатии
ObjContent.index.display2Slider(); // слайдер 2 экран
ymaps.ready(init); // проресовка карты
}


if(doc.find('#content-index')) {
// действия при изменении размера
    window.onresize = function() {
        sliderHstart();
    }  
}
});



var wHeight , displayHeight , headHeight , sliderHeight = '' , heightFix = 0;
function sliderHstart() {


        if( (wHeight == window.innerHeight) && (doc.find('.head').height() == headHeight) ) return;
        wHeight = window.innerHeight;

        headHeight = doc.find('.head').outerHeight(); // высота шапки
        sliderHeight = window.innerHeight - headHeight;


        if (wHeight - headHeight < 700) {
            doc.find('.slider').height(sliderHeight); // высота слайдера
            heightFix = 0;
        } else {
            if (heightFix == 0) {
            heightFix = 1;
        }

    }





}



function init() {
    var myMap = new ymaps.Map("map", {
        center: [56.509, 84.984],
        zoom: 15,
        controls: []
    }, {
        searchControlProvider: 'yandex#search',
        suppressMapOpenBlock: true
    });

    myMap.geoObjects.add(new ymaps.Placemark([56.509551, 84.984611], {
        balloonContent: 'Центр дентальной имплантации'
    }, {
        preset: 'islands#redDotIcon'
    }))

}

function menuMobileClick(menu) {
    var menuMobile = menu;
    $('.menu-mobile__buttonClick').click(function(event) {

        if(menuMobile.hasClass('menu-mobile_active')) {
            menuMobile.removeClass('menu-mobile_active');
        } else {
            menuMobile.addClass('menu-mobile_active');
        }
    });
}


var scrollActive = '';
function menuScroll(menu) {
        var head = $('.infoHead'); // шапка
        var scroll = window.pageYOffset;
        if(window.innerWidth < 768) return;
        var headHeight = head.height();

        if(headHeight < scroll) {
            menu.addClass('menu-scroll');
            scrollActive = 1;
        } else {
            menu.removeClass('menu-scroll');
            scrollActive = 0;
        }
}



function slider() {


        $('.owl-carousel1').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            dots: true,

            responsive:{
                0:{
                    items:1,
                }
            }
        });



        $('.owl-carousel2').owlCarousel({
            loop:false,
            margin:18,
            nav:true,
            dots: false,

            responsive:{

                0:{
                    items:1
                },

                500:{
                    items:1
                },
                768:{
                    items:2
                },
                1000:{
                    items:3
                }

            }
        });

        $('.owl-carousel3').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,

            responsive:{

                0:{
                    items:1
                },

                1200:{
                    items:2
                }

            }
        });


        $('.owl-carousel4').owlCarousel({

            loop:true,
            margin:0,
            nav:true,
            dots: true,

            responsive:{

                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:3,
                },
                // 1200:{
                //     items:4,
                // }

            }

        });


}




var ObjContent = {

    index: {
        display2Slider: function () {
            var content = $('.aboutSlider__content');

            $('.aboutCenter .aboutSlider__item').click(function() {
                $(this).parent().find('.aboutSlider__item_active').removeClass('aboutSlider__item_active');
                content.find('.content__item_active').removeClass('content__item_active');
                content.find('[data-target='+$(this).attr('data-target')+']').addClass('content__item_active');
                $(this).addClass('aboutSlider__item_active');
            });
        },

        sliderBottom: function () {
            doc.find('.slider__bottom').click(function(event) {
               $('html, body').animate({ scrollTop: $('.services').offset().top }, 500);
            });
        }
    }




}




