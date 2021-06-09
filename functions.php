<?php
/********************Añadir estilos*******************/
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

function wpdocs_theme_name_scripts() {
	wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css', '', '1.1');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', '', '1.1');
}

//Activar VC
require_once get_template_directory() . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'eligeunauto_register_required_plugins' );
function eligeunauto_register_required_plugins() {
	$plugins = array(
			array(
           'name'      => 'Visual Composer Website Builder',
           'slug'      => 'visualcomposer',
           'required'  => false,
        ),
		array(
           'name'      => 'Visual Composer Website Builder',
           'slug'      => 'visualcomposer',
           'required'  => false,
       ),
   );

	$config = array(
		'id'           => 'eligeunauto',           // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

//Incluimos ACF
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}


add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return true;
}

// Options Page Add-On
if( ! class_exists('acf_options_page_plugin') ) {
	include_once( MY_ACF_PATH . '/inc/acf-options/acf-options-page.php');
}
// Repeater Add-On
if( ! class_exists('acf_repeater_plugin') ) {
	include_once( MY_ACF_PATH . '/inc/acf-repeater/acf-repeater.php');
}

if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title('Index');
}

function eua(){
	echo get_template_directory_uri();
}


add_theme_support( 'custom-logo');

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 60,
        'width'                => 333,
        'flex-height'          => false,
        'flex-width'           => false,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


//Acf fields
require_once( get_template_directory() . '/acf/indexfields.php' );