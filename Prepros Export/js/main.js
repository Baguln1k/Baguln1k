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
	// mobile menu btn
	var $naviMobile = $(".touch .mobile-header")
	$(".mobile-menu-btn").click(function(){
        $(this).toggleClass("mobile-btn-open")
        $naviMobile.fadeToggle("fast");  
    })
    //desktop fullheight box
	var resizedDiv = $(".no-touch .js_fullheight");
	
	$(window).resize(function() {
		window_H =  $(window).height();  
		resizedDiv.height(window_H - 140);
	});
	$(window).trigger('resize');


	

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

    //swiper carousel
    if ( $( ".comfort-carousel .swiper-container" ).length ) {
         var swiper = new Swiper('.comfort-carousel .swiper-container', {
            pagination: '.comfort-box .swiper-pagination',
            nextButton: '.comfort-box .swiper-button-next',
            prevButton: '.comfort-box .swiper-button-prev',
            slidesPerView: 3,
            slidesPerGroup: 2,
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
            effect: 'coverflow',
            grabCursor: false,
            centeredSlides: true,
            loop:true,
            slidesPerView: 'auto',
            initialSlide:1,
            keyboardControl:true,
            slideToClickedSlide:true,
            preventClicks:false,
            coverflow: {
                rotate: 0,
                stretch: 0,
                depth: 250,
                modifier: 2,
                slideShadows : false
            },
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
			}
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


});