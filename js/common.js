(function($){$(function(){

	$('.address').click(function(){

		$('body').addClass('pml-open');

		$('body').append('div');

	});

	$('.toggle-push-left').click(function(){

		$('body').addClass('pml-open');

		$('body').append('div');

	});

	$('.mask').click(function(){

		$('body').removeClass('pml-open');

		$('body').remove('div');

	});

	$('.close-menu').click(function(){

		$('body').removeClass('pml-open');

		$('body').remove('div');

	});

})})(jQuery);