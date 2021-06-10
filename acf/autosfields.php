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
				'Acura' => 'Acura',
				'Alfa Romeo' => 'Alfa Romeo',
				'Aston Martin' => 'Aston Martin',
				'Audi' => 'Audi',
				'Bentley' => 'Bentley',
				'BMW' => 'BMW',
				'Brilliance' => 'Brilliance',
				'Bugatti' => 'Bugatti',
				'Buick' => 'Buick',
				'BYD' => 'BYD',
				'Cadillac' => 'Cadillac',
				'Changan' => 'Changan',
				'Chery' => 'Chery',
				'Chevrolet' => 'Chevrolet',
				'Chrysler' => 'Chrysler',
				'Citroen' => 'Citroen',
				'Daewoo' => 'Daewoo',
				'Daihatsu' => 'Daihatsu',
				'Datsun' => 'Datsun',
				'Dodge' => 'Dodge',
				'Dongfeng' => 'Dongfeng',
				'FAW' => 'FAW',
				'Ferrari' => 'Ferrari',
				'Fiat' => 'Fiat',
				'Fisker' => 'Fisker',
				'Ford' => 'Ford',
				'GAZ' => 'GAZ',
				'Geely' => 'Geely',
				'Genesis' => 'Genesis',
				'GMC' => 'GMC',
				'Great Wall' => 'Great Wall',
				'Haval' => 'Haval',
				'Holden' => 'Holden',
				'Honda' => 'Honda',
				'Hummer' => 'Hummer',
				'Hyundai' => 'Hyundai',
				'Infiniti' => 'Infiniti',
				'Isuzu' => 'Isuzu',
				'Iveco' => 'Iveco',
				'Jaguar' => 'Jaguar',
				'Jeep' => 'Jeep',
				'Kia' => 'Kia',
				'Lamborghini' => 'Lamborghini',
				'Lancia' => 'Lancia',
				'Land Rover' => 'Land Rover',
				'Lexus' => 'Lexus',
				'Lifan' => 'Lifan',
				'Lincoln' => 'Lincoln',
				'Lotus' => 'Lotus',
				'Marussia' => 'Marussia',
				'Maserati' => 'Maserati',
				'Maybach' => 'Maybach',
				'Mazda' => 'Mazda',
				'McLaren' => 'McLaren',
				'Mercedes' => 'Mercedes',
				'Mercury' => 'Mercury',
				'MG' => 'MG',
				'Mini' => 'Mini',
				'Mitsubishi' => 'Mitsubishi',
				'Nissan' => 'Nissan',
				'Noble' => 'Noble',
				'Opel' => 'Opel',
				'Peugeot' => 'Peugeot',
				'Plymouth' => 'Plymouth',
				'Pontiac' => 'Pontiac',
				'Porsche' => 'Porsche',
				'Ravon' => 'Ravon',
				'Renault' => 'Renault',
				'Rolls-Royce' => 'Rolls-Royce',
				'Rover' => 'Rover',
				'Saab' => 'Saab',
				'Saturn' => 'Saturn',
				'Scion' => 'Scion',
				'Seat' => 'Seat',
				'Skoda' => 'Skoda',
				'Smart' => 'Smart',
				'Ssang Yong' => 'Ssang Yong',
				'Subaru' => 'Subaru',
				'Suzuki' => 'Suzuki',
				'Tesla' => 'Tesla',
				'Toyota' => 'Toyota',
				'UAZ' => 'UAZ',
				'VAZ' => 'VAZ',
				'Volkswagen' => 'Volkswagen',
				'Volvo' => 'Volvo',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'placeholder' => '',
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


//Creamos select de marcas
function acf_load_color_field_choices( $field ) {
    // reset choices
    $field['choices'] = array();
	global $wpdb;
	$query='SELECT count(marca),marca FROM '.$wpdb->prefix.'modelos group by marca order by Marca asc ';
	$marcas=$wpdb->get_results($query);
	
    foreach($marcas as $marca){
		$field['choices'][$marca->marca] = $marca->marca;
	}        

    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=marca', 'acf_load_color_field_choices');