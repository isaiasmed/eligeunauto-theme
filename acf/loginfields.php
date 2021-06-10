<?php
	add_action('acf/init', 'my_acf_op_init');
	function my_acf_op_init() {

		// Check function exists.
		if( function_exists('acf_add_options_page') ) {

			// Register options page.
			$option_page = acf_add_options_page(array(
				'page_title'    => 'Login',
				'menu_title'    => 'Login',
				'menu_slug'     => 'login-settings',
				'capability'    => 'edit_posts',
				'redirect'      => false
			));
		}
	}
	
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_60c14df2b2a18',
			'title' => 'Login',
			'fields' => array(
				array(
					'key' => 'field_60c14e008a183',
					'label' => 'Imagen Login',
					'name' => 'login_image',
					'type' => 'image_crop',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'crop_type' => 'hard',
					'target_size' => 'custom',
					'width' => 247,
					'height' => 475,
					'preview_size' => 'full',
					'force_crop' => 'yes',
					'save_in_media_library' => 'yes',
					'retina_mode' => 'no',
					'save_format' => 'object',
					'library' => 'all',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'login-settings',
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