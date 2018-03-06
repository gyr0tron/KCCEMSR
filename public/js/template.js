
(function($){
	$(document).ready(function(){
		(function bannerparser()
			{
				var response = "";
				var bannerlistjs = '/api/home/carousel/';
				$.ajax({
					type: "GET", 
					url: bannerlistjs,
					dataType: "json",//set to JSON    
					success: function(response)
					{
						var json_banner_obj = response;//parse JSON
						var banner_image = "";
						let banner_image_arr = new Array();
						for (var p in json_banner_obj) {
							if( json_banner_obj.hasOwnProperty(p) ) {
								banner_image_arr[p] = json_banner_obj[p].image ;
							} 
						}
						$(".banner-image").backstretch(banner_image_arr, {
								fade: 750,
								duration: 4000
							});
					}
				})    
			}());

// Fixed header
//-----------------------------------------------
$(window).scroll(function() {
	if($("[data-navtransparent]").length > 0) {
		if (($(".header.fixed").length > 0)) {
			if(($(this).scrollTop() > 0) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
				// $("#arw").addClass("hidn-arw");
				// $(".sub-menu").addClass("sub-menu-down");
			} else {
				$("body").removeClass("fixed-header-on");
				// $("#arw").removeClass("hidn-arw");
				// $(".sub-menu").removeClass("sub-menu-down");
			}
		}
	}
	else {
		$("header").addClass("fixed-header-on-fix");
	}
});

$(window).load(function() {
	if($("[data-navtransparent]").length > 0) {
		if (($(".header.fixed").length > 0)) {
			if(($(this).scrollTop() > 0) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
				// $("#arw").addClass("hidn-arw");
				// $(".sub-menu").addClass("sub-menu-down");
			} else {
				$("body").removeClass("fixed-header-on");
				// $("#arw").removeClass("hidn-arw");
				// $(".sub-menu").removeClass("sub-menu-down");
			}
		}
	}
	else {
		$("header").addClass("fixed-header-on-fix");
		// $(".sub-menu").addClass("sub-menu-down");
	}
});

$(window).scroll(function() {

	if ($(this).scrollTop()>0)
	 {
			$('#arw').fadeOut();
	 }
	else
	 {
		$('#arw').fadeIn();
	 }
});

var prev = 0;
var $window1 = $('#navbar-collapse-1');
var nav = $('.arrow-submenu');

$window1.on('scroll', function(){
  var scrollTop = $window1.scrollTop();
  nav.toggleClass('hidden', scrollTop > prev);
  prev = scrollTop;
});

//Scroll Spy
//-----------------------------------------------
if($(".scrollspy").length>0) {
	$("body").addClass("scroll-spy");
	$('body').scrollspy({
		target: '.scrollspy',
		offset: 152
	});
}

//Smooth Scroll
//-----------------------------------------------
if ($(".smooth-scroll").length>0) {
	$('.smooth-scroll a[href*=#]:not([href=#]), a[href*=#]:not([href=#]).smooth-scroll').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top-151
				}, 1000);
				return false;
			}
		}
	});
}

// Animations
//-----------------------------------------------
if (($("[data-animation-effect]").length>0) && !Modernizr.touch) {
	$("[data-animation-effect]").each(function() {
		var $this = $(this),
		animationEffect = $this.attr("data-animation-effect");
		if(Modernizr.mq('only all and (min-width: 768px)') && Modernizr.csstransitions) {
			$this.appear(function() {
				setTimeout(function() {
					$this.addClass('animated object-visible ' + animationEffect);
				}, 20);
			}, {accX: 0, accY: -130});
		} else {
			$this.addClass('object-visible');
		}
	});
};

// Isotope filters
//-----------------------------------------------
if ($('.isotope-container').length>0) {
	$(window).load(function() {
		$('.isotope-container').fadeIn();
		var $container = $('.isotope-container').isotope({
			itemSelector: '.isotope-item',
			layoutMode: 'masonry',
			transitionDuration: '0.6s',
			filter: "*"
		});
		// filter items on button click
		$('.filters').on( 'click', 'ul.nav li a', function() {
			var filterValue = $(this).attr('data-filter');
			$(".filters").find("li.active").removeClass("active");
			$(this).parent().addClass("active");
			$container.isotope({ filter: filterValue });
			return false;
		});
	});
};

//Custom Isotope
//-----------------------------------------------
// var $grid = $('.grid').isotope({
// 	itemSelector: '.element-item',
// 	layoutMode: 'fitRows',
// 	getSortData: {
// 		name: '.name'
// 	}
// });

// // bind filter button click
// $('#isofilters').on('click', 'button', function () {
// 	var filterValue = $(this).attr('data-filter');
// 	// use filterFn if matches value
// 	filterValue = filterValue;
// 	$grid.isotope({ filter: filterValue });
// });

// // bind sort button click
// $('#sorts').on('click', 'button', function () {
// 	var sortByValue = $(this).attr('data-sort-by');
// 	$grid.isotope({ sortBy: sortByValue });
// });

// // change is-checked class on buttons
// $('.button-group').each(function (i, buttonGroup) {
// 	var $buttonGroup = $(buttonGroup);
// 	$buttonGroup.on('click', 'button', function () {
// 		$buttonGroup.find('.is-checked').removeClass('is-checked');
// 		$(this).addClass('is-checked');
// 	});
// });



//Modal
//-----------------------------------------------
if($(".modal").length>0) {
	$(".modal").each(function() {
		$(".modal").prependTo( "body" );
	});
}

}); // End document ready
})(this.jQuery);

$('.counting').each(function() {
	var $this = $(this),
		countTo = $this.attr('data-count');
	
	$({ countNum: $this.text()}).animate({
	  countNum: countTo
	},
	{
	  duration: 1500,
	  easing:'linear',
	  step: function() {
		$this.text(Math.floor(this.countNum));
	  },
	  complete: function() {
		$this.text(this.countNum);
	  }
	});
});

$('#myCarousel').carousel({
	interval: 3500
});

// This event fires immediately when the slide instance method is invoked.
$('#myCarousel').on('slide.bs.carousel', function (e) {
    var id = $('.item.active').data('slide-number');
		
  	// Added a statement to make sure the carousel loops correct
		if(e.direction == 'right'){
	    id = parseInt(id) - 1;  
      if(id == -1) id = 7;
    } else{
        id = parseInt(id) + 1;
        if(id == $('[id^=carousel-thumb-]').length) id = 0;
    }
  
    $('[id^=carousel-thumb-]').removeClass('selected');
    $('[id=carousel-thumb-' + id + ']').addClass('selected');
});

// Thumb control
$('[id^=carousel-thumb-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-thumb-]').removeClass('selected');
  $(this).addClass('selected');
});

//mob-navbar
(function ($) {
	this.MobileNav = function () {
		this.curItem,
			this.curLevel = 0,
			this.transitionEnd = _getTransitionEndEventName();

		var defaults = {
			initElem: ".main-menu",
			menuTitle: "Menu"
		}

		// Check if MobileNav was initialized with some options and assign them to the "defaults"
		if (arguments[0] && typeof arguments[0] === "object") {
			this.options = extendDefaults(defaults, arguments[0]);
		}

		// Add to the "defaults" ONLY if the key is already in the "defaults"
		function extendDefaults(source, extender) {
			for (option in extender) {
				if (source.hasOwnProperty(option)) {
					source[option] = extender[option];
				}
			}
		}

		MobileNav.prototype.getCurrentItem = function () {
			return this.curItem;
		};

		MobileNav.prototype.setMenuTitle = function (title) {
			defaults.menuTitle = title;
			_updateMenuTitle(this);
			return title;
		};

		// Init is an anonymous IIFE
		(function (MobileNav) {
			var initElem = ($(defaults.initElem).length) ? $(defaults.initElem) : false;

			if (initElem) {
				defaults.initElem = initElem;
				_clickHandlers(MobileNav);
				_updateMenuTitle(MobileNav);
			} else {
				console.log(defaults.initElem + " element doesn't exist, menu not initialized.");
			}
		}(this));

		function _getTransitionEndEventName() {
			var i,
				undefined,
				el = document.createElement('div'),
				transitions = {
					'transition': 'transitionend',
					'OTransition': 'otransitionend', // oTransitionEnd in very old Opera
					'MozTransition': 'transitionend',
					'WebkitTransition': 'webkitTransitionEnd'
				};

			for (i in transitions) {
				if (transitions.hasOwnProperty(i) && el.style[i] !== undefined) {
					return transitions[i];
				}
			}
		};

		function _clickHandlers(menu) {
			defaults.initElem.on('click', '.has-dropdown > a', function (e) {
				e.preventDefault();
				menu.curItem = $(this).parent();
				_updateActiveMenu(menu);
			});

			defaults.initElem.on('click', '.nav-toggle', function () {
				_updateActiveMenu(menu, 'back');
			});
		};

		// TODO: Make this DRY (deal with waiting for transitionend event)
		function _updateActiveMenu(menu, direction) {
			_slideMenu(menu, direction);
			if (direction === "back") {
				/*defaults.initElem.children('ul').one(menu.transitionEnd, function(e) {
						menu.curItem.removeClass('nav-dropdown-open nav-dropdown-active');
						menu.curItem = menu.curItem.parent().closest('li');
						menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
						_updateMenuTitle(menu);
				});*/

				menu.curItem.removeClass('nav-dropdown-open nav-dropdown-active');
				menu.curItem = menu.curItem.parent().closest('li');
				menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
				_updateMenuTitle(menu);
			} else {
				menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
				_updateMenuTitle(menu);
			}
		};

		// Update main menu title to be the text of the clicked menu item
		function _updateMenuTitle(menu) {
			var title = defaults.menuTitle;
			if (menu.curLevel > 0) {
				title = menu.curItem.children('a').text();
				defaults.initElem.find('.nav-toggle').addClass('back-visible');
			} else {
				defaults.initElem.find('.nav-toggle').removeClass('back-visible');
			}
			$('.nav-title').text(title);
		};

		// Slide the main menu based on current menu depth
		function _slideMenu(menu, direction) {
			if (direction === "back") {
				menu.curLevel = (menu.curLevel > 0) ? menu.curLevel - 1 : 0;
			} else {
				menu.curLevel += 1;
			}
			defaults.initElem.children('ul').css({
				"transform": "translateX(-" + (menu.curLevel * 100) + "%)"
			});
		};
	}
}(jQuery));

$(document).ready(function () {
	var MobileMenu = new MobileNav({
		initElem: "nav",
		menuTitle: "K.C. College of Engineering",
	});

	$('.js-nav-toggle').on('click', function (e) {
		e.preventDefault();

		$('.nav-wrapper').toggleClass('show-menu');
	});
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
	acc[i].onclick = function () {
		this.classList.toggle("active");
		this.nextElementSibling.classList.toggle("show");
	}
}

// reg/login box shuffle
$(document).ready(function () {
	$('ul.headers li').click(function () {
		var tab_id = $(this).attr('data-tab');

		$('ul.headers li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
	})
})

//rolldown list
$('.rolldown-list li').each(function () {
	var delay = ($(this).index() / 4) + 's';
	$(this).css({
		webkitAnimationDelay: delay,
		mozAnimationDelay: delay,
		animationDelay: delay
	});
});