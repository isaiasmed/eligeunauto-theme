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
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'marcas',
			'field_type' => 'select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
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
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'descripcion_autos',
				'id' => '',
			),
			'choices' => array(
				0 => 'Selecciona los datos',
			),
			'allow_null' => 1,
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
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
		4 => 'revisions',
		5 => 'author',
		6 => 'format',
		7 => 'page_attributes',
		8 => 'featured_image',
		9 => 'categories',
		10 => 'tags',
		11 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
));

endif;

//Mandamos info al select de marcas

function acf_load_marca_field_choices( $field ) {
	global $post;	
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

//Prellenamos el campo año si trae valor ya guardado de marca
function acf_load_anio_field_choices( $field ) {
	global $post;
	$marcao=get_field('marca',$post->ID);
	if($marcao){
		$field['choices'] = array();
		$marcaname=get_term($marcao,'marcas',ARRAY_A);	
		global $wpdb;
		$tablename=$wpdb->prefix.'modelos';
		$query="select Anio FROM {$tablename} where Marca = '".$marcaname['name']."' group by anio order by anio desc;";
		$res=$wpdb->get_results($query,ARRAY_A);
		$marcas=array();
		foreach($res as $ma){
			$marcas[]=$ma['Anio'];
		}    
		$choices = array_map('trim', $marcas);
		if( is_array($choices) ) {
			foreach( $choices as $choice ) {
				$field['choices'][ $choice ] = $choice;
			}
		}
    }else{
		$field['choices'][ '' ] = 'Selecciona Año';
	}
    return $field;
}
add_filter('acf/load_field/name=anio', 'acf_load_anio_field_choices');

//Prellenamos el campo año si trae valor ya guardado de marca
function acf_load_modelo_field_choices( $field ) {
	global $post;
	$marcao=get_field('marca',$post->ID);
	$anioo=get_field('anio',$post->ID);
	if($marcao && $anioo){
		$field['choices'] = array();
		$marcaname=get_term($marcao,'marcas',ARRAY_A);	
		global $wpdb;
		$tablename=$wpdb->prefix.'modelos';
		$query="select Modelo FROM {$tablename} where Marca = '".$marcaname['name']."' and Anio=".$anioo." group by Modelo order by Modelo desc;";
		$res=$wpdb->get_results($query,ARRAY_A);
		$marcas=array();
		foreach($res as $ma){
			$marcas[]=$ma['Modelo'];
		}    
		$choices = array_map('trim', $marcas);
		if( is_array($choices) ) {
			foreach( $choices as $choice ) {
				$field['choices'][ $choice ] = $choice;
			}
		}
    }else{
		$field['choices'][ '' ] = 'Selecciona Modelo';
	}
    return $field;
}
add_filter('acf/load_field/name=modelo', 'acf_load_modelo_field_choices');

//Prellenamos el campo año si trae valor ya guardado de marca
function acf_load_descripcion_field_choices( $field ) {
	global $post;
	$marcao=get_field('marca',$post->ID);
	$anioo=get_field('anio',$post->ID);
	$modeloo=get_field('modelo',$post->ID);
	if($marcao && $anioo && $modeloo){
		$field['choices'] = array();
		$marcaname=get_term($marcao,'marcas',ARRAY_A);	
		global $wpdb;
		$tablename=$wpdb->prefix.'modelos';
		$query="select Equipamiento FROM {$tablename} where Marca = '".$marcaname['name']."' and Anio=".$anioo." and Modelo='".$modeloo."' group by Equipamiento order by Equipamiento desc;";
		$res=$wpdb->get_results($query,ARRAY_A);
		$marcas=array();
		foreach($res as $ma){
			$marcas[]=$ma['Equipamiento'];
		}    
		$choices = array_map('trim', $marcas);
		if( is_array($choices) ) {
			foreach( $choices as $choice ) {
				$field['choices'][ $choice ] = $choice;
			}
		}
    }else{
		//$field['choices'][ '' ] = 'Selecciona Modelo';
	}
    return $field;
}
add_filter('acf/load_field/name=descripcion', 'acf_load_descripcion_field_choices');


//Agregamos buscador del select
add_action('wp_ajax_getanios','getanios');
function getanios(){
	global $wpdb;
	$marca=get_term($_POST['marca'],'marcas',ARRAY_A);	
	$tablename=$wpdb->prefix.'modelos';
	$query="SELECT anio FROM {$tablename} where marca='".$marca['name']."' GROUP BY anio order by anio desc;";
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
	$marca=get_term($_POST['marca'],'marcas',ARRAY_A);	
	$query="SELECT modelo FROM {$tablename} where marca='".$marca['name']."' and anio=".$_POST['anio']." GROUP BY modelo order by modelo asc;";
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
	$marca=get_term($_POST['marca'],'marcas',ARRAY_A);	
	$tablename=$wpdb->prefix.'modelos';
	$query="SELECT equipamiento FROM {$tablename} where marca='".$marca['name']."' and anio=".$_POST['anio']." and modelo='".$_POST['modelo']."' order by equipamiento	asc;";
	$res=$wpdb->get_results($query,ARRAY_A);
	$equipamiento=array();
	foreach($res as $ma){
		$equipamiento[]=$ma['equipamiento'];
	}
	//$modelos[]=$query;
	wp_send_json($equipamiento);
}


function cptui_register_my_taxes_marcas() {

	/**
	 * Taxonomy: Marcas.
	 */

	$labels = [
		"name" => __( "Marcas", "custom-post-type-ui" ),
		"singular_name" => __( "marca", "custom-post-type-ui" ),
		"menu_name" => __( "Marcas", "custom-post-type-ui" ),
		"all_items" => __( "Todos los Marcas", "custom-post-type-ui" ),
		"edit_item" => __( "Editar marca", "custom-post-type-ui" ),
		"view_item" => __( "Ver marca", "custom-post-type-ui" ),
		"update_item" => __( "Actualizar el nombre de marca", "custom-post-type-ui" ),
		"add_new_item" => __( "Añadir nuevo marca", "custom-post-type-ui" ),
		"new_item_name" => __( "Nombre del nuevo marca", "custom-post-type-ui" ),
		"parent_item" => __( "marca superior", "custom-post-type-ui" ),
		"parent_item_colon" => __( "marca superior:", "custom-post-type-ui" ),
		"search_items" => __( "Buscar Marcas", "custom-post-type-ui" ),
		"popular_items" => __( "Marcas populares", "custom-post-type-ui" ),
		"separate_items_with_commas" => __( "Separar Marcas con comas", "custom-post-type-ui" ),
		"add_or_remove_items" => __( "Añadir o eliminar Marcas", "custom-post-type-ui" ),
		"choose_from_most_used" => __( "Escoger entre los Marcas más usandos", "custom-post-type-ui" ),
		"not_found" => __( "No se ha encontrado Marcas", "custom-post-type-ui" ),
		"no_terms" => __( "Ningún Marcas", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Navegación de la lista de Marcas", "custom-post-type-ui" ),
		"items_list" => __( "Lista de Marcas", "custom-post-type-ui" ),
		"back_to_items" => __( "Volver a Marcas", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Marcas", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'marcas', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "marcas",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "marcas", [ "autos" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_marcas' );

