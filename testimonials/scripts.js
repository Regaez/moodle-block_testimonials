$(document).ready(function(){ 

	if( $('.block_testimonials .testimonial__list').hasClass('autoplay') ){
		// Start looping
	}

	$('.block_testimonials .pagination__link').on('click', function(){
		console.log('clicked');
		changeTo($(this).attr('data-id'), $(this).parents('.block_testimonials'));
	});

	var changeTo = function(id, scope) {
		$('.testimonial__item.active').removeClass('active');
		$('.pagination__item.active').removeClass('active');

		$('.testimonial__item[data-id="'+id+'"]').addClass('active');
		$('.pagination__item .pagination__link[data-id="'+id+'"]').parent().addClass('active');
	};

});