/*!
* Theme js for admin dashboard
* Isaias Medina Theme Elige un auto 2022* 
*/
(function($) {
	$(document).on('change','#acf-field_60c07fa5bb1fa',function(){
		var marca=$(this).val();
		var anio_select = $('#acf-field_62075c2b5bef7');
		anio_select.empty();
		$.post(ajaxurl,{'action':'getanios','marca':marca},function(response){
			console.log(response);
			anio_select.append('<option value="">Selecciona Año</option>');
			$.each(response,function(a,b){
				var anio_item = '<option value="'+b+'">'+b+'</option>';
				anio_select.append(anio_item);
			});
		});
	}).on('change','#acf-field_62075c2b5bef7',function(){
		var anio=$(this).val();
		var marca=$('#acf-field_60c07fa5bb1fa').val();
		var modelo_select = $('#acf-field_62076361c480c');
		modelo_select.empty();
		$.post(ajaxurl,{'action':'getmodelos','marca':marca,'anio':anio},function(response){
			console.log(response);
			modelo_select.append('<option value="">Selecciona Modelo</option>');
			$.each(response,function(a,b){
				var modelo_item = '<option value="'+b+'">'+b+'</option>';
				modelo_select.append(modelo_item);
			});
		});
	}).on('change','#acf-field_62076361c480c',function(){
		var modelo=$(this).val();
		var marca=$('#acf-field_60c07fa5bb1fa').val();
		var anio=$('#acf-field_62075c2b5bef7').val();
		var desc_select = $('.acf-field-620766629ae12').find('.acf-button-group');
		desc_select.html('');
		$.post(ajaxurl,{'action':'getdescr','marca':marca,'anio':anio,'modelo':modelo},function(response){
			console.log(response);
			$.each(response,function(a,b){
				var desc_item = '<label><input type="radio" name="acf[field-620766629ae12]" value="'+b+'">'+b+'</label>';
				desc_select.append(desc_item);
			});
		});
	}).on('change','.acf-field-620766629ae12 input[type="radio"]',function(){		
		alert($('.acf-field-620766629ae12 input[type="radio"]:checked').val()); 
	});
})(jQuery);
