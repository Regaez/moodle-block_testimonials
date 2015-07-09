/**
 * Javascript to manipulate the edit_form elements
 *
 * @copyright 2015 Thomas Threadgold, LearningWorks Ltd
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$(document).ready(function(){ 
	$('#id_config_testimonials_shown').on('change', function(){
		var numToShow = $('#id_config_testimonials_shown').val();

		if( numToShow < 2) {
			$('#id_testimonial_header_2').hide();
		} else {
			$('#id_testimonial_header_2').show();
		}

		if( numToShow < 3) {
			$('#id_testimonial_header_3').hide();
		} else {
			$('#id_testimonial_header_3').show();
		}

		if( numToShow < 4) {
			$('#id_testimonial_header_4').hide();
		} else {
			$('#id_testimonial_header_4').show();
		}

		if( numToShow < 5) {
			$('#id_testimonial_header_5').hide();
		} else {
			$('#id_testimonial_header_5').show();
		}
	});

	var initSettings = function() {
		var numToShow = parseInt($('#id_config_testimonials_shown').val(), 10);

		if( numToShow < 2) {
			$('#id_testimonial_header_2').hide();
		}

		if( numToShow < 3) {
			$('#id_testimonial_header_3').hide();
		}

		if( numToShow < 4) {
			$('#id_testimonial_header_4').hide();
		}

		if( numToShow < 5) {
			$('#id_testimonial_header_5').hide();
		}

	};

	initSettings(); 
});