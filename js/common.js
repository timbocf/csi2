(function($){$(function(){

	$('.toggle-push-left').click(function(){

		$('body').addClass('pml-open');

		// $('body').append('<div class="mask"></div>');

	});

	$('.close-menu').click(function(){

		$('body').removeClass('pml-open');

		// $('.mask').remove();

	});

})})(jQuery);