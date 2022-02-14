<?php
@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'max_execution_time', '300' );

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

//show_admin_bar( false );	


add_image_size( 'medium_large', '768', '0', false );
add_image_size( '1536x1536', '1536', '1536', false );
add_image_size( '2048x2048', '2048', '2048', false );
add_image_size( 'autos-small', '345', '235', true ); 

/********************Añadir estilos*******************/
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
function wpdocs_theme_name_scripts() {
	//wp_deregister_script('jquery');
	//wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', '', '3.6.0', true);
	//wp_enqueue_script('jquery');
	
	wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css', '', '1.1');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', '', '1.1');	
	wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', '', '2.3.4');	
	//wp_enqueue_style('owl-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css', '', '2.3.4');	
	
	//wp_enqueue_scripts('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', '', '3.6.0', true);
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', '', '4.5.3', true);
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap', false );
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/a9a129e468.js', '', '5.0.0', true);
	
	if(is_home()){
		wp_enqueue_script('owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', '', '2.3.4', true);
	}
	wp_register_script('theme-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.' . date('YmdHis'), true);
	wp_enqueue_script('theme-script');
}

//Activar VC
require_once get_template_directory() . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'eligeunauto_register_required_plugins' );
function eligeunauto_register_required_plugins() {
	$plugins = array(
			array(
           'name'      => 'Elementor Website Builder',
           'slug'      => 'elementor',
           'required'  => false,
        ),
		array(
           'name'      => 'Social Login',
           'slug'      => 'miniorange-login-openid',
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
// Crop Image Add-On
if( ! class_exists('acf_field_image_crop') ) {
	include_once( MY_ACF_PATH . '/inc/acf-crop-image/acf-image-crop.php');
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


function cptui_register_my_cpts_autos() {
	/**
	 * Post Type: Autos.
	 */
	$labels = [
		"name" => __( "Autos", "custom-post-type-ui" ),
		"singular_name" => __( "Auto", "custom-post-type-ui" ),
		"menu_name" => __( "Autos", "custom-post-type-ui" ),
		"all_items" => __( "Todos los Autos", "custom-post-type-ui" ),
		"add_new" => __( "Añadir nuevo", "custom-post-type-ui" ),
		"add_new_item" => __( "Añadir nuevo Auto", "custom-post-type-ui" ),
		"edit_item" => __( "Editar Auto", "custom-post-type-ui" ),
		"new_item" => __( "Nuevo Auto", "custom-post-type-ui" ),
		"view_item" => __( "Ver Auto", "custom-post-type-ui" ),
		"view_items" => __( "Ver Autos", "custom-post-type-ui" ),
		"search_items" => __( "Buscar Autos", "custom-post-type-ui" ),
		"not_found" => __( "No se ha encontrado Autos", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No se han encontrado Autos en la papelera", "custom-post-type-ui" ),
		"parent" => __( "Auto superior:", "custom-post-type-ui" ),
		"featured_image" => __( "Imagen destacada para Auto", "custom-post-type-ui" ),
		"set_featured_image" => __( "Establece una imagen destacada para Auto", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Eliminar la imagen destacada de Auto", "custom-post-type-ui" ),
		"use_featured_image" => __( "Usar como imagen destacada de Auto", "custom-post-type-ui" ),
		"archives" => __( "Archivos de Auto", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insertar en Auto", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Subir a Auto", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filtrar la lista de Autos", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Navegación de la lista de Autos", "custom-post-type-ui" ),
		"items_list" => __( "Lista de Autos", "custom-post-type-ui" ),
		"attributes" => __( "Atributos de Autos", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Auto", "custom-post-type-ui" ),
		"item_published" => __( "Auto publicado", "custom-post-type-ui" ),
		"item_published_privately" => __( "Auto publicado como privado.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Auto devuelto a borrador.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Auto programado", "custom-post-type-ui" ),
		"item_updated" => __( "Auto actualizado.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Auto superior:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Autos", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "autos", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-car",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "autos", $args );
}
add_action( 'init', 'cptui_register_my_cpts_autos' );
//Añadimos admin js
add_action( 'admin_print_scripts-post-new.php', 'portfolio_admin_script', 11 );
add_action( 'admin_print_scripts-post.php', 'portfolio_admin_script', 11 );

function portfolio_admin_script() {
    global $post_type;
    if( 'autos' == $post_type )
    wp_enqueue_script( 'autos-admin-script', get_stylesheet_directory_uri() . '/js/admin.js' );
}





//Crear paginas de usuario
add_action( 'after_switch_theme', 'create_page_on_theme_activation' );

function create_page_on_theme_activation(){
    // Set the title, template, etc
    $new_page_title     = 'Cuenta de Usuario'; // Page's title
    $new_page_content   = '';       // Content goes here
    $new_page_template  = '';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'cuenta-usuario'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}


//Acf fields
require_once( get_template_directory() . '/acf/indexfields.php' );
require_once( get_template_directory() . '/acf/autosfields.php' );
require_once( get_template_directory() . '/acf/loginfields.php' );
