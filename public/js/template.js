
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
				$("#arw").addClass("hidn-arw");
				// $(".sub-menu").addClass("sub-menu-down");
			} else {
				$("body").removeClass("fixed-header-on");
				$("#arw").removeClass("hidn-arw");
				// $(".sub-menu").removeClass("sub-menu-down");
			}
		}
	}
	else {
		$("body").addClass("fixed-header-on");
	}
});

$(window).load(function() {
	if($("[data-navtransparent]").length > 0) {
		if (($(".header.fixed").length > 0)) {
			if(($(this).scrollTop() > 0) && ($(window).width() > 767)) {
				$("body").addClass("fixed-header-on");
				$("#arw").addClass("hidn-arw");
				// $(".sub-menu").addClass("sub-menu-down");
			} else {
				$("body").removeClass("fixed-header-on");
				$("#arw").removeClass("hidn-arw");
				// $(".sub-menu").removeClass("sub-menu-down");
			}
		}
	}
	else {
		$("body").addClass("fixed-header-on");
		$(".sub-menu").addClass("sub-menu-down");
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
	  duration: 2000,
	  easing:'linear',
	  step: function() {
		$this.text(Math.floor(this.countNum));
	  },
	  complete: function() {
		$this.text(this.countNum);
	  }
	});
});