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

	    if ($(window).innerWidth() < 960) {

            $('.panel-collapse').removeClass('collapse');
           
	    };
	    
	    // $('#accordion').on('show.bs.collapse', function () {

	    //     if (active) $('#accordion .in').collapse('hide');

	    // });

})})(jQuery);