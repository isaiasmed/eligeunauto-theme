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
	});
})(jQuery);
