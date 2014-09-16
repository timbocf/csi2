(function($){$(function(){

	/** RESPONSIVE MENU **/
	$('.toggle-push-left').click(function(){

		$('body').addClass('pml-open');

		// $('body').append('<div class="mask"></div>');

	});

	$('.close-menu').click(function(){

		$('body').removeClass('pml-open');

		// $('.mask').remove();

	});

	/** DISABLE ACCORDION MENU IN MOBILE **/

	function() {

		var active = true;

	    if ($(window).innerWidth() < 960) {

	        if (active) {

	            active = false;

	            $('.panel-collapse').collapse('show');
	            	           
	        } else {

	            active = true;

	            $('.panel-collapse').collapse('hide');

	        }
	    });
	    
	    $('#accordion').on('show.bs.collapse', function () {

	        if (active) $('#accordion .in').collapse('hide');
	        
	    });

	};

})})(jQuery);