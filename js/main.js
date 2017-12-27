
jQuery(document).ready(function($) {

    $('.fornCustomClick').click(function(event) {
        if (window.innerWidth <= 768) {
            event.stopPropagation();
            event.preventDefault();
            document.location.replace("/form.html");
        } 
    });


    $('.button_top_scroll').click(function(event) {
       window.scroll(0,0); 
    });

});













var $wind = $(window);
// check modernizr only for xs devices
Modernizr.addTest('device_xs', function() {
	return $wind.width() < 768;
});

// check modernizr only for sm devices
Modernizr.addTest('device_sm', function() {
	return $wind.width() > 767 && $wind.width() < 992;
});

// check modernizr from xs to sm
Modernizr.addTest('device_xs_sm', function() {
	return $wind.width() < 992;
});


// xs only
if (Modernizr.device_xs) {
	$(".mobileFullHeight").height($(window).height() )
}


jQuery(document).ready(function($) {



	$('#form').on('submit', function() {

// Получение ID формы
    var formID = $(this).attr('id');

// Добавление решётки к имени ID
    var formNm = $('#' + formID);

    $.ajax({
        type: "POST",
        url: 'mail.php',
        data: formNm.serialize(),
        success: function (data) {

//Прячем окно формы
            $('body').find('#bookModal').modal('hide');
			$('body').find('#bookModalSuccess').modal('show');
			$('#form input.user').val('');
			$('#form input.tel').val('');
			$('#form input.email').val('');
			$('#form textarea').val('');


        },
        error: function (jqXHR, text, error) {

// Вывод текста ошибки отправки
            $(formNm).html(error);
        }
    });
    return false;

});
	
	


	$('#form2').on('submit', function() {

// Получение ID формы
    var formID = $(this).attr('id');

// Добавление решётки к имени ID
    var formNm = $('#' + formID);

    $.ajax({
        type: "POST",
        url: 'mail2.php',
        data: formNm.serialize(),
        success: function (data) {

//Прячем окно формы
           
			$('body').find('#bookModalSuccess').modal();
			$('#form2 input.input-name').val('');
			$('#form2 input.input-tel').val('');

        },
        error: function (jqXHR, text, error) {

// Вывод текста ошибки отправки
            $(formNm).html(error);         
        }
    });
    return false;

});
	
	
	
$('#form3').on('submit', function() {

// Получение ID формы
    var formID = $(this).attr('id');

// Добавление решётки к имени ID
    var formNm = $('#' + formID);

    $.ajax({
        type: "POST",
        url: 'mail3.php',
        data: formNm.serialize(),
        success: function (data) {

//Прячем окно формы
           
			$('body').find('#bookModalSuccess').modal();
			$('#form3 input.name').val('');
			$('#form3 input.tel').val('');
			$('#form3 textarea').val('');

        },
        error: function (jqXHR, text, error) {

// Вывод текста ошибки отправки
            $(formNm).html(error);         
        }
    });
    return false;

});
	
	
	
	
	
	
	
	
	
	
	
	// mobile menu btn
	var $naviMobile = $(".touch .mobile-header")
	$(".mobile-menu-btn").click(function(){
        $(this).toggleClass("mobile-btn-open")
        $naviMobile.fadeToggle("fast");  
        $("body").toggleClass("menu-body-open")
    })
    //desktop fullheight box
	var resizedDiv = $(".no-touch .js_fullheight");
	
	$(window).resize(function() {
		window_H =  $(window).height();  
		resizedDiv.height(window_H - 140);
	});
	$(window).trigger('resize');

     $('.index-top-screen').bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta /120 < 0) {
            console.log("scrolling")
            TweenLite.to(window, 1, {scrollTo:window_H,ease: Power3.easeInOut});
            return false;
        }
    });
      $('.index-white-box').bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta /120 > 0) {
            TweenLite.to(window, 1, {scrollTo:0,ease: Power3.easeInOut});
            return false;
        }
    });
	

	//layer slider
	if ( $( ".top-index-slider" ).length ) {
        $('.top-index-slider').layerSlider({
            autoStart: false,
            skinsPath: 'js/layerslider/skins/',
            skin: 'noskin',
            hoverPrevNext:false,
            thumbnailNavigation:'disabled',
            type: 'fullsize',
			fullSizeMode:'fitheight' ,
			allowFullscreen:false,
			showCircleTimer:false,
			showBarTimer:true
            
        });    
    }
    $('[data-fancybox]').fancybox({
       arrows : true,
    });
    //swiper carousel
    if ( $( ".comfort-carousel .swiper-container" ).length ) {
         var swiper = new Swiper('.comfort-carousel .swiper-container', {
            pagination: '.comfort-box .swiper-pagination',
            nextButton: '.comfort-box .swiper-button-next',
            prevButton: '.comfort-box .swiper-button-prev',
            slidesPerView: 3,
            slidesPerGroup: 2,
            roundLengths:true,
            paginationClickable: true,
            loop: true,
            centeredSlides:false,
            spaceBetween: 50,
            breakpoints: {
		    768: {
		      slidesPerView: 1,
		      slidesPerGroup: 1,
		      spaceBetween: 0
		    },
		    1199: {
		      spaceBetween: 20
		    }
		  }
        });
    }

    if ( $( ".preim-slider" ).length ) {
        var swiperVideo = new Swiper('.preim-slider .swiper-container', {
            pagination: '.preim-slider .swiper-pagination',
            nextButton: '.preim-slider .swiper-button-next',
            prevButton: '.preim-slider .swiper-button-prev',
            effect: 'slide',
            grabCursor: false,
            centeredSlides: true,
            slidesPerView: "auto",
            initialSlide:1,
            keyboardControl:true,
            slideToClickedSlide:true,
            preventClicks:false,
            speed:500,
            followFinger:false,
            breakpoints: {
			    768: {
			      slidesPerView: 1,
			      slidesPerGroup: 1,
			      spaceBetween: 0,
			      noSwipingClass:'noshit',
			      coverflow:{
			      	modifier: 1,
			      }
			    },
			},
			onInit: function(swiper){
		       
		    },
        });
    }
    //swiper carousel
    if ( $( ".reviews-slider-box .swiper-container" ).length ) {
         var swiper = new Swiper('.rev-slider .swiper-container', {
            pagination: '.rev-slider .swiper-pagination',
            nextButton: '.rev-slider .swiper-button-next',
            prevButton: '.rev-slider .swiper-button-prev',
            slidesPerView: 3,
            slidesPerGroup: 1,
            roundLengths:true,
            paginationClickable: true,
            loop: true,
            centeredSlides:true,
            loopedSlides:4,
            spaceBetween: 50,
            breakpoints: {
		    768: {
		      slidesPerView: 1,
		      spaceBetween: 0
		    },
		    1199: {
		      spaceBetween: 20
		    }
		  }
        });
    }
    //swiper carousel
    if ( $( ".js_galleryCarousel .swiper-container" ).length ) {
         var swiper = new Swiper('.js_galleryCarousel .swiper-container', {
            scrollbar: '.js_galleryCarousel .swiper-scrollbar',
            nextButton: false,
            prevButton: false,
            slidesPerView: 4,
            slidesPerGroup: 2,
            paginationClickable: true,
            loop: false,
            centeredSlides:false,
            spaceBetween: 10,
            autoplay: 2500,
        	autoplayDisableOnInteraction: true,
        	speed:800,
            breakpoints: {
		    767: {
		      slidesPerView: 1,
		      slidesPerGroup: 1,
		      spaceBetween: 0,
		      speed:300,
		    },
		    992: {
				spaceBetween: 20,
				slidesPerView: 3,
		    },
		    1199: {
		      spaceBetween: 20
		    }
		  }
        });
    }

    if ( $( ".nearby-list-slider .swiper-container" ).length && Modernizr.device_xs) {
         var swiper = new Swiper('.nearby-list-slider .swiper-container', {
            scrollbar: '.nearby-list-slider .swiper-scrollbar',
            nextButton: false,
            prevButton: false,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            paginationClickable: true,
            loop: false,
            centeredSlides:false,
            spaceBetween: 0, 
        });
    }

    if ( $( ".xs-room-carousel" ).length && Modernizr.device_xs) {
         var swiper = new Swiper('.xs-room-carousel .swiper-container', {
            pagination: '.xs-room-carousel .swiper-pagination',
            nextButton: '.xs-room-carousel .swiper-button-next',
            prevButton: '.xs-room-carousel .swiper-button-prev',
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            paginationClickable: true,
            loop: false,
            centeredSlides:false,
            spaceBetween: 0, 
        });
    }
    //scrollTo script 
    $('a.js_scrollToLink[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			var scrolledAmount = target.offset().top;
			if (target.length) {
				TweenLite.to(window, 2, {scrollTo:scrolledAmount,ease: Power3.easeInOut});
				return false;
			}
		}
    });

    //datepicker 
    // for programmer - API:  http://www.daterangepicker.com/#options
    $('.book-form .date-col').daterangepicker({
    	drops:"up",
    	autoApply:true,
    	showDropdowns: true,
	    	"locale": {
	        "format": "DD.MM.YYYY",
	        "separator": " - ",
	        "applyLabel": "Ок",
	        "cancelLabel": "Отмена",
	        "fromLabel": "С",
	        "toLabel": "До",
	        "customRangeLabel": "Custom",
	        "weekLabel": "Нед",
	        "daysOfWeek": [
	            "Вс",
	            "Пн",
	            "Вт",
	            "Ср",
	            "Чт",
	            "Пн",
	            "Сб"
	        ],
	        "monthNames": [
	            "Январь",
	            "Февраль",
	            "Март",
	            "Апрель",
	            "Май",
	            "Июнь",
	            "Июль",
	            "Август",
	            "Сентябрь",
	            "Октябрь",
	            "Ноябрь",
	            "Декабрь"
	        ],
	        "firstDay": 1
	    },
    });
    $('.book-form .date-col').on('apply.daterangepicker', function(ev, picker) {
    	$(".book-form input.date-from").val(picker.startDate.format('DD.MM.YYYY'))
    	$(".book-form input.date-to").val(picker.endDate.format('DD.MM.YYYY'))
	});
	


    

	//move map element
	if (Modernizr.device_xs) {
		$("footer .map-box").insertAfter($("footer .contacts-box hr"))
	}

	// рейтинги по клику (reviews) 
	$(".unit-rating a").click(function(event){
		event.preventDefault();
		var ratingClicked = $(this).attr("data-rate");
		$(this).closest("ul").find(".current-rating").removeClass("rate-1").removeClass("rate-2").removeClass("rate-3").removeClass("rate-4").removeClass("rate-5")
		$(this).closest("ul").find(".current-rating").addClass("rate-" + ratingClicked);
		$(this).closest("ul").find("a").hide();
	});
	
	// door-table scrollBar
    $(".js_doorCustomScrollbar").mCustomScrollbar({
        theme:"inset-3-dark",
        axis:"y",
        documentTouchScroll:true,
        autoDraggerLength:false,
        autoExpandScrollbar:true,
        mouseWheel:{ preventDefault: true }
    });

    // input mask
    $(".js_maskInputPhone").mask("+7 999 999-99-99");

    //оставить отзыв фокус на форме
    $(".jsMakeReview").on('click', function(){
        setTimeout( function() {
            $("#reviewAdd .name").focus();
        }, 1500 );
    })
    $(".js_successBtn").on('click', function(){
        $('#bookModal').modal('hide')
        $('#bookModalSuccess').modal()
    })
	
	
	/*$('.more-btn').click(function(){
		$(this).prev( ".review-body" ).slideToggle('normal');
		return false;
	})
	*/
	
	

});

$( window ).on( "load", function() {
    if ($( ".index-top-screen" ).length) {
        animeIndexTop();
    }
    if ($( ".room-choice-top" ).length) {
        animeRoomsTop();
    }
    if ($( ".room-single-top" ).length) {
        animeRoomSingleTop();
    }    
    if ($( ".error-page" ).length) {
        animeErrorPage();
    }
});

$("a.more-btn").click(function(){
    $(".review-body").toggleClass('active');
});



    $('.book-form .datemob1').daterangepicker({
        drops:"down",
        singleDatePicker: true,
        autoApply:true,
        showDropdowns: true,


        "locale": {
            "format": "DD.MM.YYYY",
            "separator": " - ",
            "applyLabel": "Ок",
            "cancelLabel": "Отмена",
            "fromLabel": "С",
            "toLabel": "До",
            "customRangeLabel": "Custom",
            "weekLabel": "Нед",
            "daysOfWeek": [
                "Вс",
                "Пн",
                "Вт",
                "Ср",
                "Чт",
                "Пн",
                "Сб"
            ],
            "monthNames": [
                "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь"
            ],
            "firstDay": 1
        },
    });
    $('.book-form .datemob1').on('apply.daterangepicker', function(ev, picker) {
        $(".book-form input.date-from2").val(picker.startDate.format('DD.MM.YYYY'))
        // $(".book-form input.date-to2").val(picker.endDate.format('DD.MM.YYYY'))
    });
    



    $('.book-form .datemob2').daterangepicker({
        drops:"down",
        singleDatePicker: true,
        autoApply:true,
        showDropdowns: true,


        "locale": {
            "format": "DD.MM.YYYY",
            "separator": " - ",
            "applyLabel": "Ок",
            "cancelLabel": "Отмена",
            "fromLabel": "С",
            "toLabel": "До",
            "customRangeLabel": "Custom",
            "weekLabel": "Нед",
            "daysOfWeek": [
                "Вс",
                "Пн",
                "Вт",
                "Ср",
                "Чт",
                "Пн",
                "Сб"
            ],
            "monthNames": [
                "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь"
            ],
            "firstDay": 1
        },
    });
    $('.book-form .datemob2').on('apply.daterangepicker', function(ev, picker) {
        // $(".book-form input.date-from2").val(picker.startDate.format('DD.MM.YYYY'))
        $(".book-form input.date-to2").val(picker.endDate.format('DD.MM.YYYY'))
    });
    


                                        jQuery(document).ready(function($) {
                                            var d = new Date();
                                            var curr_date = d.getDate();
                                            var curr_month = d.getMonth() + 1;
                                            var curr_year = d.getFullYear();
                                            var newDat = curr_year + "-" + curr_month + "-" + curr_date;
                                            $('.datemob1').find('input').val(newDat);
                                            $('.datemob2').find('input').val(newDat);

                                        });