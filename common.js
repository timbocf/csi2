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


	$('.dropdown').click(function(){

		$(this).children('.sub-menu').addClass('open');

		// $(this).addClass('close');

	});  

	$('.close-menu').click(function(){

		$('ul').removeClass('open');

	})

	

	/** DISABLE ACCORDION MENU IN MOBILE **/

    if ($(window).innerWidth() < 960) {

        $('.panel-collapse').removeClass('collapse');
       
    };

	
})})(jQuery);