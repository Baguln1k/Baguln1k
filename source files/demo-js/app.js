$(window).load(function() {
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

  setTimeout(function(){
    $('body').addClass('loaded');
  },1900);
  // --------------------------------------------- //
  // Loader End
  // --------------------------------------------- //
});

$(document).ready(function() {

  // ----------------------------------------------- //
  // Background-attachment: fixed Solution for IE Start
  // ----------------------------------------------- //
  if(navigator.userAgent.match(/Trident\/7\./)) {
    $('body').on("mousewheel", function () {
        event.preventDefault();

        var wheelDelta = event.wheelDelta;

        var currentScrollPosition = window.pageYOffset;
        window.scrollTo(0, currentScrollPosition - wheelDelta);
    });

    $('body').keydown(function (e) {
          e.preventDefault(); // prevent the default action (scroll / move caret)
          var currentScrollPosition = window.pageYOffset;

          switch (e.which) {

              case 38: // up
                  window.scrollTo(0, currentScrollPosition - 120);
                  break;

              case 40: // down
                  window.scrollTo(0, currentScrollPosition + 120);
                  break;

              default: return; // exit this handler for other keys
          }
      });
  }
  // --------------------------------------------- //
  // Background-attachment: fixed Solution for IE End
  // --------------------------------------------- //

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

  // Fullscreen Layout
  function fullscreenLayout() {
    $(".fullscreen").css({
        height: $(window).height()
    });
  };
  fullscreenLayout();
  $(window).resize(function(){
    fullscreenLayout();
  });

  // Smooth Scroll To Section
  var scrollToPreview = $('#scroll-to-preview');

  scrollToPreview.on('click', function(event){
    event.preventDefault();
    smoothScroll($(this.hash));
  });

  function smoothScroll(target){
    $('body,html').animate(
      {'scrollTop':target.offset().top},
      500
    );
  }

});
