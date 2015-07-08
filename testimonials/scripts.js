$(document).ready(function(){ 

	// variable to hold our interval id
	var intervalTimer;
	var disableChanging = false;

	/**
	 * Function handles changing of the items
	 * @param  int  id  data-id of the testimonial item
	 * @return none
	 */
	var changeTo = function(id){
		disableChanging = true;

		// We fade out the existing item
		$('.testimonial__item.active').fadeOut('slow', function(){
			// We remove any existing active items
			$(this).removeClass('active');
			$('.pagination__item.active').removeClass('active');

			// Then make the next item active, based on the id parameter
			// and fade it in
			$('.pagination__item .pagination__link[data-id="'+id+'"]').parent().addClass('active');
			
			$('.testimonial__item[data-id="'+id+'"]').fadeIn('slow', function(){
				$(this).addClass('active');
				disableChanging = false;
			});
		});


	};

	/**
	 * Get the max height of the testimonial items
	 * @return 	int  tallest height
	 */
	var getMaxItemHeight = function(){
		var arrayHeights = [];
		
		$('.block_testimonials .testimonial__item').each(function(){
			arrayHeights.push($(this).outerHeight(true));
		});

		return Math.max.apply(Math, arrayHeights);
	};

	/**
	 * Function to handle the selection of the next testimonial
	 * @return none
	 */
	var autoPlay = function(){
		// Get the next item based on the current active item
		var nextItem = $($('.block_testimonials .testimonial__item.active')).next('.testimonial__item');

		// If there is no next item, then get 
		if($(nextItem).length === 0){
			nextItem = $('.block_testimonials .testimonial__item')[0];
		}

		// Now change to the item that matches the id of the pagination link that was clicked
		changeTo($(nextItem).attr('data-id'));
	};


	// We update testimonial list to be min-height of the tallest testimonial
	$('.block_testimonials .testimonial__list').css('min-height', getMaxItemHeight() + 'px');

	if( $('.block_testimonials .testimonial__list').hasClass('autoplay') ){
		// We only want to autoplay if there is more than 1 item
		if( 1 < $('.block_testimonials .testimonial__item').length ) {
			// Start looping, because autoplay is enabled		
			intervalTimer = setInterval(autoPlay, 10000);
		}
	}

	// Attach the event handler to the pagination links
	$('.block_testimonials .pagination__link').on('click', function(){
		// We only allow changing if the last change has finished
		if(!disableChanging) {
			// Reset interval in case it was about to change
			// But only if autoplay is enabled
			if( $('.block_testimonials .testimonial__list').hasClass('autoplay')) {
				clearInterval(intervalTimer);
				intervalTimer = setInterval(autoPlay, 10000);
			}

			// We pass the link's id attribute to the change function
			changeTo($(this).attr('data-id'));
		}
	});

	// On window resize, update the min height
	$(window).on('resize', function(){
		$('.block_testimonials .testimonial__list').css('min-height', getMaxItemHeight() + 'px');
	});
});