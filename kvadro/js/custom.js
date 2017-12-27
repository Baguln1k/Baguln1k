$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 20){
            $("header").addClass("fixed-top-header"); 
        }else{
            $("header").removeClass("fixed-top-header")
        };
    });
    $(window).scroll(function(){
        if($(this).scrollTop() > 550){
            $("#back-up").fadeIn();
        }else{
            $("#back-up").fadeOut();
        };
    });
    $('body').on('click', '#back-up', function(){
        $('body, html').animate({scrollTop:0}, 800);
    });
    $(".menu-button").click(function(){
        var menuItem = $(".menu ul").css("display");
        if(menuItem == "none"){
            $(".menu ul").fadeIn();
        }else{
            $(".menu ul").fadeOut();
        }
    });
    $(".info-actual img").click(function(){
        $(".title-info").trigger("click");
    });
    $(".title-info").click(function(){
        var menuItem = $(".info-actual").css("display");
        if(menuItem == "none"){
            $(".info-actual").fadeIn();
            $(".info-actual").css("display", "inline-block");
            $(".second").css("overflow", "inherit");
        }else{
            $(".info-actual").fadeOut();
            $(".second").css("overflow", "hidden");
        }
    });
    $(".week-actual img").click(function(){
        $(".week-info").trigger("click");
    });
    $(".week-info").click(function(){
        var menuItem = $(".week-actual").css("display");
        if(menuItem == "none"){
            $(".week-actual").fadeIn();
            $(".week-actual").css("display", "inline-block");
        }else{
            $(".week-actual").fadeOut();
        }
    });
    $('a[href^="#"]').click(function () {
        var page = $('body');
        var href = $(this).attr('href');
        var destination = $(href).offset().top;
        $(page).animate({scrollTop: destination}, 800);
        return false;
      });
    $(".nav-menu-second-list").click(function(){
        var menuItem = $(".nav-menu-second ul").css("display");
        if(menuItem == "none"){
            $(".nav-menu-second ul").fadeIn();
        }else{
            $(".nav-menu-second ul").fadeOut();
        }
    });
    $(".menu-title img").click(function(){
        $(".menu-button").trigger("click");
    });
    var mySwiper = new Swiper ('.first', {
        // Optional parameters
       
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplay: 3000,
        pagination: '.swiper-pagination-one',
        
    });
    var swiper = new Swiper('.second', {
        slidesPerView: 6,
        spaceBetween: 5,
        breakpoints: {
            991:{
                slidesPerView: 4,
            },
            767:{
                slidesPerView: 3,
            },
            425:{
                slidesPerView: 2,
            },
        },
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    $(".button-headings span").click(function(){
        $(".property a").fadeIn();
        $(this).css("display", "none")
    });
    $(".top-fifty-title span").click(function(){
        $(".top-fifty a").fadeIn();
        $(this).css("display", "none")
    });
    $(".services-block-item a").hover(function(){
        $("img", this).css("box-shadow", "0 0 10px rgb(20, 156, 239)")
    }, function(){
        $(".services-block-item a img").css("box-shadow", "none")
    });
    $(".property a").hover(function(){
        $("img", this).css("box-shadow", "0 0 10px rgb(20, 156, 239)")
    }, function(){
        $(".property a img").css("box-shadow", "none")
    });
      
});