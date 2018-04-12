$(document).ready(function() {
	
  $('a[href^="#"]').click(function () {

     var page = $('body');

     var href = $(this).attr('href');

     var destination = $(href).offset().top-100;

     $(page).animate({scrollTop: destination}, 800);

     return false;

 });
    
  // console.clear()
  // document.querySelector('svg').addEventListener('click', function(evt){
  //     console.log('L' + evt.offsetX + ' ' + evt.offsetY)
  // })

//   $('.kra').hover(function(){
//     $(this).attr('href', '/assets/template/img/kra.png');
// });
//   $('.kra').mouseover(function(){
//     $(this).attr('href', '/assets/template/img/kraac.png');
// });

//   $('.zel').hover(function(){
//     $(this).attr('href', '/assets/template/img/zel.png');
// });
//   $('.zel').mouseover(function(){
//     $(this).attr('href', '/assets/template/img/zelac.png');
// });

$('.clear').click(function(){
    $('.fix').fadeOut(300);
});
	setTimeout(function(){$('.load').fadeOut('fast'); $('#page').css('opacity','1')},3000);  //30000 = 30 секунд
	
    $('.lang li a').click(function(y) {
        if (!$(y.target).is('.none')) {
            $('.lang li a').removeClass('active');
            $(this).addClass('active');
        }
    });


//floor
$('.chose-et1 #floor10').click(function() {
    $('.svg-block svg').hide();
    $('#svg10').show().removeClass('none');
});

$('.chose-et1 #floor9').click(function() {
    $('.svg-block svg').hide();
    $('#svg9').show().removeClass('none');
});

$('.chose-et1 #floor8').click(function() {
    $('.svg-block svg').hide();
    $('#svg8').show().removeClass('none');
});

$('.chose-et1 #floor7').click(function() {
    $('.svg-block svg').hide();
    $('#svg7').show().removeClass('none');
});

$('.chose-et1 #floor6').click(function() {
    $('.svg-block svg').hide();
    $('#svg6').show().removeClass('none');
});
$('.chose-et1 #floor5').click(function() {
    $('.svg-block svg').hide();
    $('#svg5').show().removeClass('none');
});
$('.chose-et1 #floor4').click(function() {
    $('.svg-block svg').hide();
    $('#svg4').show().removeClass('none');
});  
$('.chose-et1 #floor3').click(function() {
    $('.svg-block svg').hide();
    $('#svg3').show().removeClass('none');
});  
//end

$('.chose-et1 li span').click(function() {
    var img = $(this).parents('li').attr('data-img');
    var a = $(this).parents('li').attr('data-a');
    var j = $(this).parents('li').attr('data-num');
    $('.con-ch1').children('img').prop('src', img);
    $('.zoom1').prop('href', a);
    $('.inf1 span').text(j);
});
if ($('.mask').length > 0) {
    $(".mask").mask("8 (999) 999-99-99");
}

function ress() {
    $('.block1,.bg-sl-con .item-poss,.ov-center.j1').height($(window).height());
}
ress();
$(window).resize(function() {
    ress();
});
$(window).load(function() {
    ress();
        //$('#page').addClass('ac');
        $('.load').fadeOut(300);
        setTimeout(function() {
            $('.ov-center').addClass('ac');
        }, 200);
    });
$('.sl-bg1').slick({
    prevArrow: '<div class="prev"></div>',
    nextArrow: '<div class="next"></div>',
    dots: true,
    fade: true,
    autoplay: true
});
$('.show1').click(function() {
    if ($(this).attr('dt') == '0') {
        $(this).attr('dt', '1').addClass('ac').prev().slideDown(300);
    } else {
        $(this).attr('dt', '0').removeClass('ac').prev().slideUp(300);
    }
});
$('.btn-scroll-down').click(function() {
    if ($('.block9').length > 0) {
        $('body,html').animate({
            scrollTop: $('.block9 .title1').offset().top - 50 - 70
        }, 500);
    } else if ($('.block11').length > 0) {
        $('body,html').animate({
            scrollTop: $('.block11 .title1').offset().top - 50 - 70
        }, 500);
    } else {
        $('body,html').animate({
            scrollTop: $('.block2 .title1').offset().top - 50 - 70
        }, 500);
    }
});
$('.sl1').slick({
    prevArrow: '<div class="prev"></div>',
    nextArrow: '<div class="next"></div>',
    slidesToShow: 3
});
$('.bt1').click(function(e) {
    e.preventDefault();
    $('.bt1').removeClass('ac');
    $(this).addClass('ac');
    var sd = $(this).attr('dt')
    var ds = sd - 1;
    $('.tabs1 .item1').eq(ds).addClass('ac').siblings().removeClass('ac');
});
$('.otz').click(function(){
    $('form#ec-form-resource-5').addClass('block');
    $('form#ec-form-resource-9').addClass('block');
    $('body').addClass('noscroll');
});

$('.otz').click(function(){
  var top = $(this).siblings('.sl23').offset().top + $(this).height() - 25;
  var windowWidth= $( window ).width();
  console.log(top);
  if(windowWidth > 320){
    $('form#ec-form-resource-5').addClass('block').css({
        top:top,
  });
   $('form#ec-form-resource-9').addClass('block').css({
        top:top,
  });
}
$('body').addClass('noscroll');
});

$(document).click(function(y) {
  if (!$(y.target).is('form#ec-form-resource-5.block, form#ec-form-resource-5.block *, form#ec-form-resource-9.block, form#ec-form-resource-9.block *, .otz')) {
    $('form#ec-form-resource-5.block').removeClass('block');
    $('form#ec-form-resource-9.block').removeClass('block');
    $('body').removeClass('noscroll')
}

});

$('.sl2').slick({
    prevArrow: '<div class="prev"></div>',
    nextArrow: '<div class="next"></div>',
    slidesToShow: 3,
    dots: true,
    responsive: [
    {
        breakpoint: 769,
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
$('.sl23').slick({
    prevArrow: '<img class="prev" src="assets/template/img/gallery/prev.png" alt="" />',
    nextArrow: '<img class="next" src="assets/template/img/gallery/next.png" alt="" />',
    slidesToShow: 1,
    dots: false,

});
$('.sl3').slick({
    prevArrow: '<div class="prev"></div>',
    nextArrow: '<div class="next"></div>',
    slidesToShow: 3,
    asNavFor: '.slider-nav',
    responsive: [
    {
        breakpoint: 769,
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
// $('a[data-slide]').click(function(e) {

//    // e.preventDefault();#
//    // var slideno = $(this).data('slide');
//    // $('.slider-nav').slick('slickGoTo', slideno - 2);
//     setTimeout(function(){$('.slider-nav .slick-slide.slick-current.slick-active + div img').trigger('click')},1500);  //1500 = 1.5 секунды

// });

$('a[href^="#"]').click(function () {

 var href = $(this).attr('href');
 console.log(href);

    setTimeout(function(){$(href).children('.ft').children('a').trigger('click')},1500);  //1500 = 1.5 секунды
});
$('.sl4').slick({
    arrows: true,
    fade: true,
    prevArrow: '<div class="prev"></div>',
    nextArrow: '<div class="next"></div>'
});
$('.zoom1,.sl3 .item-poss .ft a,.sl-con2 .item-poss a').fancybox({
    buttons: ['close']
});
if ($(window).width() < 1025) {
    $('.km').addClass('km2').removeClass('km');
} else {
    $(window).load(function() {
        setTimeout(function() {
            km1();
        }, 400)
    });
    $(window).scroll(function() {
        km1();
    });

    function km1() {
        $('.km:not(.km2)').each(function() {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height() * 0.8) {
                $(this).addClass('km2');
            }
        });
    }
}
$('.sl-chose1 .item2').click(function() {
    $(this).parent().parent().find('.sl4').slick('slickGoTo', $(this).index());
    $(this).addClass('ac').siblings().removeClass('ac');
});
$('.nav-tb li').click(function() {
    $(this).addClass('ac').siblings().removeClass('ac');
    $('.ct-tb .item1').eq($(this).index()).addClass('ac').siblings().removeClass('ac');
});
$('.chose-et1 li').mouseenter(function() {
    $(this).addClass('ac').siblings().removeClass('ac');
    $('.ep-hov div').css({
        'top': $(this).position().top
    });
});
$('.ep-hov div').each(function() {
    $(this).css({
        'top': $('.chose-et1 li.ac').position().top
    });
});
$('.go-to-office1,.go-to-office2,.ord-office1,.go-ord1').click(function(e) {
    e.preventDefault();
    $('body,html').animate({
        scrollTop: $('.form1').offset().top
    }, 500);
});
$('.sl-con1 .next').click(function() {
    if ($('.ov-bt .bt1.ac').attr('dt') == '3') {
        $('.ov-bt .bt1').eq(1).click();
    } else {
        $('.ov-bt .bt1.ac').next().click();
    }
});
$('.sl-con1 .prev').click(function() {
    if ($('.ov-bt .bt1.ac').attr('dt') == '1') {
        $('.ov-bt .bt1').eq(3).click();
    } else {
        $('.ov-bt .bt1.ac').prev().click();
    }
});
var options = {
    useEasing: false,
    useGrouping: true,
    separator: ' ',
    decimal: '',
    prefix: '',
    suffix: ''
};
var options2 = {
    useEasing: false,
    useGrouping: true,
    separator: '',
    decimal: '',
    prefix: '',
    suffix: ''
};
var flg1 = 0;
var speed1 = 500;
if ($("#y1").length == 0) {
    flg1 = 1;
}
$(window).scroll(function() {
    if ($(this).scrollTop() > 195) {
        $('#header2').addClass('ac');
    } else {
        $('#header2').removeClass('ac');
    }
    if (flg1 == 0) {
        if ($('.number-anim').offset().top < $(window).scrollTop() + $(window).height() * 0.8) {
            flg1 = 1;
            new CountUp("y1", 0, 3, 0, 2, options2).start();
            setTimeout(function() {
                new CountUp("y2", 0, 170, 2, 2, options).start();
            }, speed1);
            setTimeout(function() {
                new CountUp("y3", 0, 20, 2, 2, options).start();
            }, speed1 * 2);
            setTimeout(function() {
                new CountUp("y4", 0, 300, 0, 2, options2).start();
            }, speed1 * 3);
            setTimeout(function() {
                new CountUp("y5", 0, 10, 0, 2, options2).start();
            }, speed1 );
        }
    }
});
$('#header2').html('<div class="ov-head">' + $('#header').html() + '</div>');

function validateEmail(email) {
    var re = /^(([^<>()[\]\.,;:\s@"]+(\.[^<>()[\]\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateName(email) {
    var re = /^[A-Za-zА-Яа-я ]+$/;
    return re.test(email);
}
$('.eml').blur(function() {
    if ($(this).val().length > 0) {
        if (validateEmail($(this).val()) == false) {
            $(this).addClass('err');
        } else {
            $(this).removeClass('err');
        }
    }
});
$('.eml').keyup(function() {
    if (validateEmail($(this).val()) == true) {
        $(this).removeClass('err');
    }
});
$('.name').blur(function() {
    if ($(this).val().length > 0) {
        if (validateName($(this).val()) == false) {
            $(this).addClass('err');
        } else {
            $(this).removeClass('err');
        }
    }
});
$('.name').keyup(function() {
    if (validateName($(this).val()) == true) {
        $(this).removeClass('err');
    }
});
$('input,textarea').focus(function() {
    $(this).removeClass('err');
});

var ct = new ScrollMagic();
new ScrollScene({
    duration: 1100
}).addTo(ct).triggerHook(0.5).triggerElement(".z1").setTween(TweenMax.to(".z1", 1, {
    paddingTop: 120
}))
new ScrollScene({
    duration: 1100
}).addTo(ct).triggerHook(0.5).triggerElement(".z2").setTween(TweenMax.to(".z2", 1, {
    paddingTop: 120
}))
new ScrollScene({
    duration: 1100
}).addTo(ct).triggerHook(0.5).triggerElement(".z3").setTween(TweenMax.to(".z3", 1, {
    paddingTop: 120
}))
});