jQuery(function() {
	initNavigationSelect();
});


// generate select from navigation
function initNavigationSelect() {
	jQuery('.nav-list').navigationSelect({
		activeClass: 'nav-active',
		defaultOptionAttr: 'title',
		levelIndentHTML: ' &amp;bull; '
	});
}


/*
 * Convert navigation to select
 */
;(function($) {
	function NavigationSelect(options) {
		this.options = $.extend({
			list: null,
			levelIndentHTML: ' &bull; ',
			defaultOptionAttr: 'title',
			defaultOptionText: '...',
			selectClass: 'nav-select',
			activeClass: 'nav-active',
			defaultOptionClass: 'opt-default',
			hasDropClass: 'opt-sublevel',
			levelPrefixClass: 'opt-level-',
			useDefaultOption: false
		}, options);
		if(this.options.list) {
			this.createSelect();
			this.attachEvents();
		}
	}
	NavigationSelect.prototype = {
		createSelect: function() {
			var self = this;
			this.startIndex = 0;
			this.navigation = $(this.options.list);
			this.select = $('<select>').addClass(this.options.selectClass);
			this.createDefaultOption();
			this.createList(this.navigation, 0);
			this.select.insertBefore(this.navigation);
		},
		createDefaultOption: function() {
			if(this.options.useDefaultOption) {
				var attrText = this.navigation.attr(this.options.defaultOptionAttr);
				var defaultOption = $('<option>').addClass(this.options.defaultOptionClass).text(attrText || this.options.defaultOptionText);
				this.navigation.removeAttr(this.options.defaultOptionAttr);
				this.select.append(defaultOption);
				this.startIndex = 1;
			}
		},
		createList: function(list, level) {
			var self = this;
			list.children().each(function(index, item) {
				var listItem = $(this),
					listLink = listItem.find('a').eq(0),
					listDrop = listItem.find('ul').eq(0),
					hasDrop = listDrop.length > 0;

				if(listLink.length) {
					self.select.append(self.createOption(listLink, hasDrop, level, listLink.hasClass(self.options.activeClass)));
				}
				if(hasDrop) {
					self.createList(listDrop, level + 1);
				}
			});
		},
		createOption: function(link, hasDrop, level, selected) {
			var optionHTML = this.getLevelIndent(level) + link.html();
			return $('<option>').html(optionHTML)
								.addClass(this.options.levelPrefixClass + (level + 1))
								.toggleClass(this.options.hasDropClass, hasDrop)
								.val(link.attr('href')).attr('selected', selected ? 'selected' : false)
                                .data('el',link);
		},
		getLevelIndent: function(level) {
			return (new Array(level + 1)).join(this.options.levelIndentHTML);
		},
		attachEvents: function() {
			// redirect on select change
			var self = this;
			this.select.change(function() {
            self.select.find('option').eq(this.selectedIndex).data('el').trigger('click');
				if(this.selectedIndex >= self.startIndex) {
					// location.href = this.value;
				}
			});
		}
	};

	// jquery pluginm interface
	$.fn.navigationSelect = function(opt) {
		return this.each(function() {
			new NavigationSelect($.extend({list: this}, opt));
		});
	};
}(jQuery));

$(document).ready(function(){
	$('.burger').click(function(){
		$(this).toggleClass('open');
		$('.top_menu').toggleClass('open');
	});
	heightfunction = function(){
		var height = $('.footer').outerHeight();
		$('.wrapper').css({
			'padding-bottom': height
		});
	}

	heightfunction();

	$(window).on('load' , function(){
		heightfunction();
	})
	$(window).on('resize' , function(){
		heightfunction();
	});

	$('.scroll').click(function () {
		var height = $(this).parents('.section').outerHeight();
		$('body').animate({scrollTop:height}, 500);
	});

	new WOW().init();



	jQuery(function($) {
		$(window).scroll(function(){
			if($(this).scrollTop()>20){
				$('.fix_scroll .header').addClass('header_fixed fadeInUp');
			}
			else if ($(this).scrollTop()<20){
				$('.fix_scroll .header').removeClass('header_fixed fadeOutUp');
			}
		});
	});






	$('.closeservice').click(function(){
		$(".rightblock li").removeClass("fadeInUp");
		$('.services_popup_block .site_but').removeClass("fadeInUp ");
		$('.services_popup_block .leftblock').removeClass("fadeInUp");
		$('.services_popup_block').fadeOut();
		$('body').addClass('fix_scroll');
	});


	$('.openmodal_3').click(function(e){



		e.preventDefault();
		$('.services_popup_block').fadeIn();
		$(".rightblock li").removeClass('animated fadeOutUp');
		$('.services_popup_block .site_but').removeClass("fadeOutUp");
		$('.services_popup_block .leftblock').removeClass("fadeOutUp");

		$(".rightblock li").addClass("animated fadeInUp");
		$('.services_popup_block .site_but').addClass("animated fadeInUp");
		$('.services_popup_block .leftblock').addClass("animated fadeInUp");
		$('body').removeClass('fix_scroll');






	});

	$('.ajaxform').submit(function(e){
		e.preventDefault();
		var form_data = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "form.php", 
			data: form_data,
			success:function(data){
				if(data == '1'){
					$('.ajaxform').remove();	
					$('.textsuccess').show();	
				}else{
					console.log(data);
				}
			},
		});

// $(function () {
//     $('.site_but').click(function (event) {
//         event.preventDefault();
//         var data = "action=10&moveMe=<?php echo $row_rsChkOptions['chkID'] ?>&startPos=<?php echo $row_rsChkOptions['orderID'] ?>&parentCategory=<?php echo $row_rsChkOptions['categoryID'] ?>&chklistID=<?php echo $row_rsChkOptions['chklistID'] ?>";
//         $.get("form.php", data, function (data) {

// 			$('.ajaxform').remove();	
//  			$('.textsuccess').show();
//         });
//     });
// });









});




//   $( ".header" ).addClass('header_fix');
//   console.log("scroll");
// });




$( ".opmnu_btn" ).click(function() {
	event.preventDefault();
	$( this ).parent( ".text" ).toggleClass('ha');
	$( ".opmnu" ).toggleClass('haa');

		// $( this ).parent( ".text" ).css('height', '100%');

});

var initialPoint;
var finalPoint;





jQuery(document).on('touchstart', 'body' , function(event){

	initialPoint = event.originalEvent.changedTouches[0].clientY;
	document.addEventListener('touchend',  function(event) {
		finalPoint=event.changedTouches[0].clientY;
		if(initialPoint - 30 > finalPoint){
			// jQuery('.lg-close').click();
			// console.log("вниз");
			$('.header').css('opacity', "0");
		}
		if(initialPoint + 30 < finalPoint){
			// jQuery('.lg-close').click();
			// $('.header').fadeTo( "slow", 0.99 );
			$('.header').css('opacity', "1");
			// console.log("вверх");
		}
	});





$(".scrollmain").click(function(event) {
	event.preventDefault();

console.log("lj");
$(".scrollmain").css("background", " rgba(33, 190, 177, 0)");

	// $('body').animate({
 //        scrollTop: $(".mainslider").offset().top - 115
 //    }, 10);
 //    return;
});




});

 $("#mixparagraph").mixItUp({
                selectors: {
                    target: '.price-paragraph',
                    filter: '.filter'
                },
                load: {
                    filter: '.category-ortodont'
                },
                
       "animation": {
         "duration": 1,
        "nudge": false,
        "reverseOut": false,
        "effects": "",
           "enable":false
    }
 
            });


 $("#mixcontainer").mixItUp({
                selectors: {
                    target: '.mix',
                    filter: '.filter'
                },
                load: {
                    filter: '.category-ortodont'
                },
   "animation": {
           "duration": 250,
        "nudge": false,
        "reverseOut": false,
        "effects": "fade translateY(20%)"
    }
            });












});
