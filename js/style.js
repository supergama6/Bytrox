$(document).ready(function () {	
	 $(".navbar-toggler.header_bar ").click(function() {
	$("#header_bar").toggle();
	$("#header_bar2").toggle();
	$(".logo").toggle();
	$(".phone_top ").toggle();
	$(".dropdown.float-right ").toggle();
	
	});

	 var banner = new Swiper('.banner .swiper-container', {
	slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
	  autoplay: 5000,
	  speed:1300,
      loopFillGroupWithBlank: true,     
      pagination: '.banner .swiper-pagination',
	  paginationClickable: true,
	 
    });
	
	
	

	var about_swiper = new Swiper('.about_swiper .swiper-container', {
      slidesPerView: 4,
      spaceBetween:12,
      loop: true,
      loopFillGroupWithBlank: true,
     
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
	  breakpoints: { 
			1600: {
				slidesPerView: 4,
				spaceBetween: 24, 
			},
			1400: {
				slidesPerView:4,
				spaceBetween: 24, 	
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 24, 	
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 15, 
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			460: {
				slidesPerView: 2,
				spaceBetween: 10,
			},375: {
				slidesPerView: 2,
				spaceBetween: 10,
			}
		},
    });

  });

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		$("#myBtn").css("display","block");
		$("#header").addClass('mini');
    } else {
		$("#myBtn").hide();
		$("#header").removeClass('mini');
    }
}



// 点击按钮，返回顶部
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



;(function($, window, undefined) {    
    var $allDropdowns = $();
    $.fn.dropdownHover = function(options) {        
        $allDropdowns = $allDropdowns.add(this.parent());
       
        return this.each(function() {
            var $this = $(this).parent(),
                defaults = {
                    delay: 200,
                    instantlyCloseOthers: true,
                },
                data = {
                    delay: $(this).data('delay'),
                    instantlyCloseOthers: $(this).data('close-others'),
                },
                settings = $.extend(true, {}, defaults, options, data),
                timeout;

            $this.hover(function() {
                if(settings.instantlyCloseOthers === true){
                    $allDropdowns.removeClass('show');
                }

                window.clearTimeout(timeout);
                $(this).addClass('show').find(".dropdown-menu").addClass('show');
            }, function() {
                timeout = window.setTimeout(function() {
                    $this.removeClass('show').find(".dropdown-menu").removeClass('show');
                }, settings.delay);
            });
        });
    };

    $('[data-hover="dropdown"]').dropdownHover();
})(jQuery, this);


