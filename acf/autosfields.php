<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60c07f9e9cb4e',
	'title' => 'Autos',
	'fields' => array(
		array(
			'key' => 'field_60c07fa5bb1fa',
			'label' => 'Marca',
			'name' => 'marca',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_62075c2b5bef7',
			'label' => 'Año',
			'name' => 'anio',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_62076361c480c',
			'label' => 'Modelo',
			'name' => 'modelo',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_620766629ae12',
			'label' => 'Descripcion',
			'name' => 'descripcion',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'descripcion_autos',
				'id' => '',
			),
			'choices' => array(
				0 => 'Selecciona los datos',
			),
			'allow_null' => 0,
			'default_value' => '0',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_62076e6383289',
			'label' => 'Galeria',
			'name' => 'galeria',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Agregar Imagen',
			'sub_fields' => array(
				array(
					'key' => 'field_62076e838328a',
					'label' => 'Item Galeria',
					'name' => 'item_galeria',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
		array(
			'key' => 'field_62076eb69e87f',
			'label' => 'Video',
			'name' => 'video',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_62076edeb343c',
			'label' => 'Kilometraje',
			'name' => 'kilometraje',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'Kms.',
			'min' => 100,
			'max' => '',
			'step' => 1,
		),
		array(
			'key' => 'field_62076effb343d',
			'label' => 'Transmisión',
			'name' => 'transmision',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_62076f16b343e',
			'label' => 'Precio',
			'name' => 'precio',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '$',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => 1,
		),
		array(
			'key' => 'field_62076f39b343f',
			'label' => 'Color',
			'name' => 'color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'autos',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

//Mandamos info al select de marcas

function acf_load_marca_field_choices( $field ) {
    $field['choices'] = array();    
    global $wpdb;
	$tablename=$wpdb->prefix.'modelos';
	$query="select Marca,count(Anio) FROM {$tablename} group by Marca order by Marca asc;";
	$res=$wpdb->get_results($query,ARRAY_A);
	$marcas=array();
	foreach($res as $ma){
		$marcas[]=$ma['Marca'];
	}
    
    
    // remove any unwanted white space
    $choices = array_map('trim', $marcas);

    
    // loop through array and add to field 'choices'
    if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            
            $field['choices'][ $choice ] = $choice;
            
        }
        
    }
    

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=marca', 'acf_load_marca_field_choices');

//Agregamos buscador del select
add_action('wp_ajax_getanios','getanios');
function getanios(){
	global $wpdb;
	$tablename=$wpdb->prefix.'modelos';
	$query="SELECT anio FROM {$tablename} where marca='".$_POST['marca']."' GROUP BY anio order by anio desc;";
	$res=$wpdb->get_results($query,ARRAY_A);
	$anios=array();
	foreach($res as $ma){
		$anios[]=$ma['anio'];
	}
	wp_send_json($anios);
}

add_action('wp_ajax_getmodelos','getmodelos');
function getmodelos(){
	global $wpdb;
	$tablename=$wpdb->prefix.'modelos';
	$query="SELECT modelo FROM {$tablename} where marca='".$_POST['marca']."' and anio=".$_POST['anio']." GROUP BY modelo order by modelo asc;";
	$res=$wpdb->get_results($query,ARRAY_A);
	$modelos=array();
	foreach($res as $ma){
		$modelos[]=$ma['modelo'];
	}
	//$modelos[]=$query;
	wp_send_json($modelos);
}


add_action('wp_ajax_getdescr','getdescr');
function getdescr(){
	global $wpdb;
	$tablename=$wpdb->prefix.'modelos';
	$query="SELECT equipamiento FROM {$tablename} where marca='".$_POST['marca']."' and anio=".$_POST['anio']." and modelo='".$_POST['modelo']."' order by equipamiento	asc;";
	$res=$wpdb->get_results($query,ARRAY_A);
	$equipamiento=array();
	foreach($res as $ma){
		$equipamiento[]=$ma['equipamiento'];
	}
	//$modelos[]=$query;
	wp_send_json($equipamiento);
}



