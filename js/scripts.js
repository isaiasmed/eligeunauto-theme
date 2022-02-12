/*!
* Start Bootstrap - Bare v5.0.0 (https://startbootstrap.com/template/bare)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-bare/blob/master/LICENSE)
*/
(function($) {
    //$( "div" ).show();

	$('.indexslide').owlCarousel({
		items:1,
		loop:true,
		margin:0,
		nav:true,
	});
	$('#btn-login').on('click',function(){
		$('#login_modal').modal('show');
		return false;
	});
	$('.lost').on('click',function(){
		$('#forgot_password').fadeIn('slow');
		$('#login').fadeOut('fast');
		$('#email').focus();
		return false;
	});
	$('.cancellost').on('click',function(){
		$('#forgot_password').fadeOut('slow');
		$('#login').fadeIn('fast');
		return false;
	});
	
	$(document).on('change','#acf-field_60c07fa5bb1fa',function(){
		console.log($(this).val());
	});
})(jQuery);
