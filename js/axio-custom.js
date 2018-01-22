$(window).on("load", function() {

  "use strict";

  // --------------------------------------------- //
  // Loader Start
  // --------------------------------------------- //
  setTimeout(function(){
    $(".loader").addClass('fade-dark');
    $(".loader-logo").removeClass('slideInDown').addClass('flipOutY');
    $(".loader-caption").removeClass('slideInUp').addClass('fadeOutDown');
  },1000);

  setTimeout(function(){
    $(".loader").addClass('loaded');
  },1700);
  // --------------------------------------------- //
  // Loader End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // Main Section Loading Animation Start
  // --------------------------------------------- //
  setTimeout(function(){
    $("#main").addClass('loaded');
  },1900);
  // --------------------------------------------- //
  // Main Section Loading Animation End
  // --------------------------------------------- //

});

$(function() {

  // --------------------------------------------- //
  // Animated Headline Start
  // --------------------------------------------- //
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

  // Animated Headline Initialization
  $(window).on("load",function(){
    setTimeout(function(){
      initHeadline();
    },600);
  });
  // --------------------------------------------- //
  // Animated Headline End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // Fullscreen Layout Start
  // --------------------------------------------- //
  function fullscreenLayout() {
    $(".fullscreen").css({
        height: $(window).height()
    });
  };
  fullscreenLayout();
  $(window).resize(function(){
    fullscreenLayout();
  });
  // --------------------------------------------- //
  // Fullscreen Layout End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // YTPlayer Start
  // --------------------------------------------- //
  var bgndVideo = $("#bgndVideo");
  if(bgndVideo.length){
    bgndVideo.mb_YTPlayer({
      mute: true,
      containment: '#video-wrapper',
      showControls:false,
      autoPlay:true,
      loop:true,
      startAt:0,
      quality:'default'
    });
  }
  // --------------------------------------------- //
  // YTPlayer End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // Vegas Kenburns Start
  // --------------------------------------------- //
  var bgndKenburns = $('#bgndKenburns');
  if(bgndKenburns.length){
    bgndKenburns.vegas({
      timer: false,
      delay: 8000,
      transition: 'fade2',
      transitionDuration: 2000,
      slides: [
        { src: "img/backgrounds/kenburns-1.jpg" },
        { src: "img/backgrounds/kenburns-2.jpg" },
        { src: "img/backgrounds/kenburns-3.jpg" }
      ],
      animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ]
    });
  }
  // --------------------------------------------- //
  // Vegas Kenburns End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // KBW-Countdown Start
  // --------------------------------------------- //
  $(function () {
    $('#countdown').countdown({until: $.countdown.UTCDate(+10, 2017, 10, 8), format: 'D'});
  });
  // --------------------------------------------- //
  // KBW-Countdown End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // Custom Scrollbar Start
  // --------------------------------------------- //
  $(window).on("load",function(){
    $(".about, .works, .contact").mCustomScrollbar();
  });
  // --------------------------------------------- //
  // Custom Scrollbar End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // Mailchimp Notify Form Start
  // --------------------------------------------- //
  $('.notify-form').ajaxChimp({
    callback: mailchimpCallback,
    url: 'http://besaba.us10.list-manage.com/subscribe/post?u=e8d650c0df90e716c22ae4778&amp;id=6c8d32a3aa'
  });

  function mailchimpCallback(resp) {
    if(resp.result === 'success') {
      $('.notify').find('.form').addClass('is-hidden');
      $('.notify').find('.subscription-ok').addClass('is-visible');
      setTimeout(function() {
        // Done Functions
        $('.notify').find('.subscription-ok').removeClass('is-visible');
        $('.notify').find('.form').delay(300).removeClass('is-hidden');
        $('.notify-form').trigger("reset");
      }, 5000);
    } else if(resp.result === 'error') {
      $('.notify').find('.form').addClass('is-hidden');
      $('.notify').find('.subscription-error').addClass('is-visible');
      setTimeout(function() {
        // Done Functions
        $('.notify').find('.subscription-error').removeClass('is-visible');
        $('.notify').find('.form').delay(300).removeClass('is-hidden');
        $('.notify-form').trigger("reset");
      }, 5000);
    }
  };
  // --------------------------------------------- //
  // Mailchimp Notify Form End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // Stay-in-touch Form Start
  // --------------------------------------------- //
  $("#stayintouch-form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
      $('.stayintouch').find('.form').addClass('is-hidden');
      $('.stayintouch').find('.reply-group').addClass('is-visible');
			setTimeout(function() {
				// Done Functions
        $('.stayintouch').find('.reply-group').removeClass('is-visible');
        $('.stayintouch').find('.form').removeClass('is-hidden');
				th.trigger("reset");
			}, 5000);
		});
		return false;
	});
  // --------------------------------------------- //
  // Stay-in-touch Form End
  // --------------------------------------------- //

  // --------------------------------------------- //
  // Contact Form Start
  // --------------------------------------------- //
  $("#contact-form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
      $('.contact').find('.form').addClass('is-hidden');
      $('.contact').find('.reply-group').addClass('is-visible');
			setTimeout(function() {
				// Done Functions
        $('.contact').find('.reply-group').removeClass('is-visible');
        $('.contact').find('.form').delay(300).removeClass('is-hidden');
				th.trigger("reset");
			}, 5000);
		});
		return false;
	});
  // --------------------------------------------- //
  // Contact Form End
  // --------------------------------------------- //

});

// --------------------------------------------- //
// ParticlesJS Backgrounds Start
// --------------------------------------------- //
$(window).on("load", function() {

  // Bokeh BG - particlesJS
  var bgndCircles = $('#circles-js');
  if (bgndCircles.length) {
    particlesJS('circles-js', {
      "particles": {
        "number": {
          "value": 40,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#fcc820"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          }
        },
        "opacity": {
          "value": 0.3,
          "random": true,
          "anim": {
            "enable": true,
            "speed": 0.6,
            "opacity_min": 0,
            "sync": false
          }
        },
        "size": {
          "value": 13,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 120,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": false
        },
        "move": {
          "enable": true,
          "speed": 0.2,
          "direction": "bottom-left",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": true,
            "rotateX": 3286.994724774322,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "bubble"
          },
          "onclick": {
            "enable": false,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "bubble": {
            "distance": 85,
            "size": 45,
            "duration": 1.5,
            "opacity": 0.2,
            "speed": 3
          }
        }
      },
      "retina_detect": true
    });
  };

  // Particles BG - particlesJS
  var bgndParticles = $('#particles-js');
  if (bgndParticles.length) {
    particlesJS('particles-js', {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.6,
            "random": true,
            "anim": {
              "enable": true,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 3,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 80,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 180,
            "color": "#ffffff",
            "opacity": 0.3,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 3,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": false,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 800,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 800,
              "size": 80,
              "duration": 2,
              "opacity": 0.8,
              "speed": 3
            },
            "repulse": {
              "distance": 100,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      });
  };

  // Polygon BG - particlesJS
  var bgndPolygons = $('#polygon-js');
  if (bgndPolygons.length) {
    particlesJS('polygon-js', {
      "particles": {
        "number": {
          "value": 24,
          "density": {
            "enable": true,
            "value_area": 650
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "polygon",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          },
          "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
          }
        },
        "opacity": {
          "value": 0.2324947488255008,
          "random": false,
          "anim": {
            "enable": true,
            "speed": 0.48724632738080703,
            "opacity_min": 0.06496617698410762,
            "sync": false
          }
        },
        "size": {
          "value": 19.728691040806815,
          "random": true,
          "anim": {
            "enable": true,
            "speed": 7.308694910712106,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": false,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 2,
          "direction": "top",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 4249.041961293636,
            "rotateY": 3206.8241217310456
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": false,
            "mode": "repulse"
          },
          "onclick": {
            "enable": false,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  };

});
// --------------------------------------------- //
// ParticlesJS Backgrounds End
// --------------------------------------------- //
