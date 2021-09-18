$(function() {

    let navbar = $('.navbar-toggle');
    let body = $('body');
    let skills = $('.section-skills');
    let counter = $(".section-counters .start");
    let infinity = $('#infinity');

    navbar.click(function() {
        $(this).toggleClass('act');
            if($(this).hasClass('act')) {
                $('.main-menu').addClass('act');
            }
            else {
                $('.main-menu').removeClass('act');
            }
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on('click', '.page-scroll a', function(event) {
        let anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    body.scrollspy({
        target: '.site-header',
        offset: 10
    });

	/* Progress bar */
    function loadProgressBar() {
	    $('.progress .progress-bar').progressbar({
	        transition_delay: 50
	    });
    }

    $(document).bind('scroll', function() {
        let scrollOffset = $(document).scrollTop();
        let containerOffset = skills.offset().top - window.innerHeight;
        if (scrollOffset > containerOffset) {
            loadProgressBar();
            $(document).unbind('scroll');
        }
    });

    /* Counters  */
    if (counter.length > 0) {
        counter.each(function() {
            let stat_item = $(this),
            offset = stat_item.offset().top;
            $(window).scroll(function() {
                if($(window).scrollTop() > (offset - 1000) && !(stat_item.hasClass('counting'))) {
                    stat_item.addClass('counting');
                    stat_item.countTo();
                }
            });
        });
    }

	// another custom callback for counting to infinity
	infinity.data('countToOptions', {
		onComplete: function (value) {
		  count.call(this, {
		    from: value,
		    to: value + 1
		  });
		}
	});

	infinity.each(count);

	function count(options) {
        let $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }

    // Navigation overlay
    skrollr.init({
            forceHeight: false,
            smoothScrolling: false,
            mobileDeceleration: 0.004,
            mobileCheck: function() {
                //hack - forces mobile version to be off
                return false;
            }
    });
});
