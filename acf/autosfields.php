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

function acf_load_color_field_choices( $field ) {
    // reset choices
    $field['choices'] = array();
            
    $field['choices'][ 'Ferrari' ] = 'Ferrari';
    $field['choices'][ 'Ford' ] = 'Ford';
    $field['choices'][ 'Renault' ] = 'Renault';
    
    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=marca', 'acf_load_color_field_choices');

endif;