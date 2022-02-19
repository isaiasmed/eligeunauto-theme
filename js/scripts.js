/*!
* Start Bootstrap - Bare v5.0.0 (https://startbootstrap.com/template/bare)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-bare/blob/master/LICENSE)
*/
(function($) {
	
	$("#menu-principal").after('<div class="bumper"></div>');
	var offsetini=$('#menu-principal').offset().top;
	var toph=0;
	
	console.log($('#wpadminbar').length );
	
	$(window).scroll(function () {
		if($('#wpadminbar').length >0){
			toph=$('#wpadminbar').height();
			console.log($('#wpadminbar'));
		}
		
		if ($(document).scrollTop() > offsetini ) {
			$('#menu-principal').addClass('fija').css('top',toph);
		}else{
			$('#menu-principal').removeClass('fija').css('top',0);
		}
	});
	
	if($('.indexslide').count>0){
		//Slider home
		$('.indexslide').owlCarousel({
			items:1,
			loop:true,
			margin:0,
			nav:true,
		});
	}
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
	
	 $('.xzoom, .xzoom-gallery').xzoom({position:'right'});
    
	
	$(document).on('change','#acf-field_60c07fa5bb1fa',function(){
		console.log($(this).val());
	});
})(jQuery);
