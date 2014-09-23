(function($){$(function(){

	/** RESPONSIVE MENU **/

	$('nav.menu').addClass('hide-menu');

	$('.toggle-menu').click(function(){

		if($('nav.menu').hasClass('show-menu')) {

			$('nav.menu').addClass('hide-menu');
			$('nav.menu').removeClass('show-menu');

		} else {

			$('nav.menu').removeClass('hide-menu');
			$('nav.menu').addClass('show-menu');

		}

	});

	$('.close-menu').click(function(){

		$('nav.menu').removeClass('show-menu');
		$('nav.menu').addClass('hide-menu');

	});


	$('nav.menu .dropdown').click(function(){

		if($(this).hasClass('open')) {

			$(this).removeClass('open')

		} else {

			$(this).addClass('open');

		}

	});

	

	/** DISABLE ACCORDION MENU IN MOBILE/TABLET **/

    if ($(window).innerWidth() < 1025) {

        $('.panel-collapse').removeClass('collapse');
       
    };

	
})})(jQuery);