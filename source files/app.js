$(function() {

  // Letters Effect Start
  var animationDelay       = 2500,
      revealDuration       = 600,
      revealAnimationDelay = 1500;

  function initHeadline() {
    animateHeadline($('.main-headline'));
   }

	function animateHeadline($headlines) {
		var duration = animationDelay;
		$headlines.each(function(){
			var headline = $(this);
      var spanWrapper = headline.find('.words-wrapper'),
        newWidth = spanWrapper.width() + 10
      spanWrapper.css('width', newWidth);

			setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
		});
	}

	function hideWord($word) {
		var nextWord = takeNext($word);
    $word.parents('.words-wrapper').animate({ width : '2px' }, revealDuration, function(){
      switchWord($word, nextWord);
      showWord(nextWord);
    });
	}

	function showWord($word, $duration) {
    $word.parents('.words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){
      setTimeout(function(){ hideWord($word) }, revealAnimationDelay);
    });
	}

	function takeNext($word) {
		return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
	}

	function takePrev($word) {
		return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
	}

	function switchWord($oldWord, $newWord) {
		$oldWord.removeClass('is-visible').addClass('is-hidden');
		$newWord.removeClass('is-hidden').addClass('is-visible');
	}
  // Letters Effect End

  $(window).on("load",function(){
    setTimeout(function(){
      initHeadline();
    },600);
  });

  // SVG Fallback
  if(!Modernizr.svg) {
    $("img[src*='svg']").attr("src", function() {
      return $(this).attr("src").replace(".svg", ".png");
    });
  };

  // Chrome Smooth Scroll
  try {
    $.browserSelector();
    if($("html").hasClass("chrome")) {
      $.smoothScroll();
    }
  } catch(err) {
  };

  $("img, a").on("dragstart", function(event) { event.preventDefault(); });

  // Sections Behavior Start
  // Declaring Variables
  var stayintouchTrigger = $('#stayintouch-trigger'),
      stayintouch        = $('.stayintouch'),
      stayintouchClose   = $('#stayintouch-close'),
      asideContent       = $('.aside-content'),
      notify             = $('.notify'),
      notifyTrigger      = $('#notify-trigger'),
      notifyClose        = $('#notify-close'),
      mainIntro          = $('.main-intro'),
      aboutTrigger       = $('#about-trigger'),
      worksTrigger       = $('#works-trigger'),
      contactTrigger     = $('#contact-trigger'),
      aboutSection       = $('#about'),
      worksSection       = $('#works'),
      contactSection     = $('#contact'),
      aboutClose         = $('#about-close'),
      worksClose         = $('#works-close'),
      contactClose       = $('#contact-close');

      // Contact Forms Open/Close Start
      // Stay-On-Touch Form Open
      stayintouchTrigger.on('click', function(event){
        event.preventDefault();

        asideContent.addClass('animate-out');
        if(stayintouch.hasClass('animate-out')) {
          stayintouch.removeClass('animate-out');
        }

        setTimeout(function(){
          stayintouch.addClass('animate-in');
          $('body').addClass('overflow-hidden');
        }, 200);
      });
      // Stay-On-Touch Form Close
      stayintouchClose.on('click', function(event) {
        event.preventDefault();
        stayintouch.addClass('animate-out');
        $('body').removeClass('overflow-hidden');

        setTimeout(function(){
          asideContent.removeClass('animate-out');
          stayintouch.removeClass('animate-in');
        }, 300);
      });

      // Notify Form Open
      notifyTrigger.on('click', function(event){
        event.preventDefault();
        mainIntro.addClass('is-scaled-down');

        setTimeout(function(){
          notify.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            notifyClose.addClass('is-scaled-up');
          });
          if($('html').hasClass('no-csstransitions')) {
            notifyClose.addClass('is-scaled-up');
          }
          $('body').addClass('overflow-hidden');
        }, 150);
      });

      // Notify Form Close
      notifyClose.on('click', function(event){
        event.preventDefault();

        notify.removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
          notifyClose.removeClass('is-scaled-up');
        });
        if($('html').hasClass('no-csstransitions')) {
          notifyClose.removeClass('is-scaled-up');
        }
        $('body').removeClass('overflow-hidden');

        setTimeout(function(){
          mainIntro.removeClass('is-scaled-down');
        }, 150);
      });

      // Sections Open/Close
      // About Section Open
      aboutTrigger.on('click', function(event) {
        event.preventDefault();
        mainIntro.addClass('is-scaled-down');

        setTimeout(function(){
          aboutSection.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            aboutClose.addClass('is-scaled-up');
          });
          if($('html').hasClass('no-csstransitions')) {
            aboutClose.addClass('is-scaled-up');
          }
        }, 200);
      });

      // About Section Close
      aboutClose.on('click', function(event) {
        event.preventDefault();
        aboutSection.removeClass('is-visible');

        setTimeout(function(){
          mainIntro.removeClass('is-scaled-down').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            aboutClose.removeClass('is-scaled-up');
          });
          if($('html').hasClass('no-csstransitions')) {
            aboutClose.removeClass('is-scaled-up');
          }
        }, 200);
      });

      // Works Section Open
      worksTrigger.on('click', function(event) {
        event.preventDefault();
        mainIntro.addClass('is-scaled-down');

        setTimeout(function(){
          worksSection.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            worksClose.addClass('is-scaled-up');
          });
          if($('html').hasClass('no-csstransitions')) {
            worksClose.addClass('is-scaled-up');
          }
        }, 200);
      });

      // Works Section Close
      worksClose.on('click', function(event) {
        event.preventDefault();
        worksSection.removeClass('is-visible');

        setTimeout(function(){
          mainIntro.removeClass('is-scaled-down').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            worksClose.removeClass('is-scaled-up');
          });
          if($('html').hasClass('no-csstransitions')) {
            worksClose.removeClass('is-scaled-up');
          }
        }, 200);
      });

      // Contact Section Open
      contactTrigger.on('click', function(event) {
        event.preventDefault();
        mainIntro.addClass('is-scaled-down');

        setTimeout(function(){
          contactSection.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            contactClose.addClass('is-scaled-up');
          });
          if($('html').hasClass('no-csstransitions')) {
            contactClose.addClass('is-scaled-up');
          }
        }, 200);
      });

      // Contact Section Close
      contactClose.on('click', function(event) {
        event.preventDefault();
        contactSection.removeClass('is-visible');

        setTimeout(function(){
          mainIntro.removeClass('is-scaled-down').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
            contactClose.removeClass('is-scaled-up');
          });
          if($('html').hasClass('no-csstransitions')) {
            contactClose.removeClass('is-scaled-up');
          }
        }, 200);
      });

});
