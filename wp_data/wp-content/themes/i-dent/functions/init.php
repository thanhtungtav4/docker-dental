<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
define('PAGESIZE', 10);
define( 'PLACEHOLDER-THUMB', 'http://via.placeholder.com/600x400');
define( 'PLACEHOLDER-SLIDE-THUMBPC', 'http://via.placeholder.com/1274x431');
define( 'PLACEHOLDER-SLIDE-THUMBSP', 'http://via.placeholder.com/376x376');
define( 'PLACEHOLDER-REVIEW-THUMB', 'http://via.placeholder.com/590x315');
define( 'PLACEHOLDER-SERVICE-THUMB', 'http://via.placeholder.com/365x520');
define( 'PLACEHOLDER-DOCTOR-THUMB', 'http://via.placeholder.com/263x375');
define( 'PLACEHOLDER-DOCTOR-MIN-THUMB', 'http://via.placeholder.com/198x246');
define( 'PLACEHOLDER-VIDEO-THUMB', 'http://via.placeholder.com/650x366');
define( 'PLACEHOLDER-VIDEO-MIN-THUMB', 'http://via.placeholder.com/188x106');
define( 'PLACEHOLDER-SIDEBAR-THUMB', 'http://via.placeholder.com/360x630');

define( 'PLACEHOLDER-NEWS-THUMB', 'http://via.placeholder.com/275x458');
define( 'PLACEHOLDER-NEWS-PC-THUMB', 'http://via.placeholder.com/370x616');

define( 'PLACEHOLDER-NEWS-DETAIL-THUMB', 'http://via.placeholder.com/780x520');

// setup
function corporate_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'corporate_setup', 99);

// load style css
function corporate_enqueue_style() {
	wp_enqueue_style( 'corporate-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'corporate_enqueue_style' );

/**
 * Adds custom image sizes to the current theme.
 */
add_action( 'after_setup_theme', 'corporate_theme_setup' );
function corporate_theme_setup() {
	add_image_size( 'SLIDE-THUMBPC', 1274, 431, true );
	add_image_size( 'SLIDE-THUMBSP', 414, 414, true );
	add_image_size( 'REVIEW-THUMB', 590, 315, true );
	add_image_size( 'SERVICE-THUMB', 365, 520, true );
	add_image_size( 'DOCTOR-THUMB', 263, 375, true );
	add_image_size( 'DOCTOR-MIN-THUMB', 198, 246, true );
	add_image_size( 'VIDEO-THUMB', 650, 366, true );
	add_image_size( 'VIDEO-MIN-THUMB', 188, 106, true );
	add_image_size( 'NEWS-THUMB', 370, 616, true );
	add_image_size( 'NEWS-PC-THUMB', 370, 616, true );
	add_image_size( 'SIDEBAR-THUMB', 360, 630, true );

	add_image_size( 'NEWS-DETAIL-THUMB', 780, 520, true );
}

/**
 * This function takes a string `$data` as its input and performs the following operations:
 * - Trim whitespaces using the PHP `trim` function.
 * - Convert the string to lowercase using the PHP `strtolower` function.
 * - Remove any malicious characters using the PHP `filter_var` function with the `FILTER_SANITIZE_STRING` filter.
 * - Return the sanitized and normalized string.
 *
 * @param string $data The input string to sanitize and normalize.
 * @return string The sanitized and normalized string.
 */

 function normalizeInputString($data) {
	// Trim whitespaces
	$data = trim($data);
	// Convert to lowercase
	$data = strtolower($data);
	// Remove any malicious characters
	$data = filter_var($data, FILTER_SANITIZE_STRING);
	return $data;
}
/**
* This function takes a string `$data` as its input and performs the following operations:
* - Trim whitespaces using the PHP `trim` function.
* - Convert the string to lowercase using the PHP `strtolower` function.
* - Remove any non-numeric characters using the PHP `filter_var` function with the `FILTER_SANITIZE_NUMBER_INT` filter.
* - Convert the sanitized string to an integer using the PHP `intval` function.
* - Return the sanitized and normalized integer.
*
* @param string $data The input string to sanitize and normalize.
* @return int The sanitized and normalized integer.
*/
function normalizeInputNumber($data) {
	// Trim whitespaces
	$data = trim($data);
	// Convert to lowercase
	$data = strtolower($data);
	// Remove any malicious characters
	$data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
	// Initialize data type
	$data = intval($data);
	return $data;
}
/**
* This function takes a string `$data` as its input and performs the following operations:
* - Trim whitespaces using the PHP `trim` function.
* - Convert the string to lowercase using the PHP `strtolower` function.
* - Remove any question mark character '?' using the PHP `str_replace` function.
* - Remove any non-numeric characters using the PHP `filter_var` function with the `FILTER_SANITIZE_NUMBER_INT` filter.
* - Convert the sanitized string to an integer using the PHP `intval` function.
* - Return the sanitized and normalized integer.
*
* @param string $data The input string to sanitize and normalize.
* @return int The sanitized and normalized integer.
*/
function normalizeInputPaged($data){
	// Trim whitespaces
	$data = trim($data);
	// Convert to lowercase
	$data = strtolower($data);
	// remote ?
	$data = str_replace('?', '', $data);
	// Remove any malicious characters
	$data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
	// Initialize data type
	$data = intval($data);
	return $data;
}
/**
 * Disables the block editor for all posts.
 *
 * @param bool $use_block_editor Whether to use the block editor for the post. Default true.
 * @return bool Whether to use the block editor for the post. Always false.
 */
 //add_filter('use_block_editor_for_post', '__return_false', 10);


/**
 * Retrieves the URL for a category based on its slug.
 *
 * @param string $category_slug The slug of the category to retrieve the URL for.
 * @return string|false The URL of the category, or false if the category cannot be found.
 */
 function get_category_url_by_slug( $category_slug ) {
	// Retrieve the category object based on its slug.
	$category = get_category_by_slug( $category_slug );

	// If the category object exists, retrieve the URL for the category based on its term ID.
	if ( $category ) {
		return get_category_link( $category->term_id );
	} else {
		// If the category object does not exist, return false.
		return false;
	}
}


/**
 * Generate HTML for post thumbnails
 *
 * @param string $size The thumbnail size to use
 * @return string The HTML for the post thumbnail image
 */
function get_handle_thumbnail($size){
	$placeholder = defined("PLACEHOLDER-".$size) ? constant("PLACEHOLDER-".$size) : null;
	$images = '';
	if ( has_post_thumbnail() ) {
	  $images = '<img src="'. get_the_post_thumbnail_url(null, $size).'" alt="'. get_the_title() .'" loading="lazy">';
	}
	elseif(!empty($placeholder)){
		$images = '<img src="'. $placeholder . '" alt="'. get_the_title() .'" loading="lazy">';
	}
	else{
		$images = '<img src="'. constant('PLACEHOLDER-THUMB') . '" alt="'. get_the_title() .'" loading="lazy">';
	}
	return $images;
}


/**
 * Generate HTML for displaying post thumbnails
 *
 * @param string $size The thumbnail size to use
 * @return string The HTML for the post thumbnail image
 */
function handle_thumbnail($size, $is_figure = false){
	$placeholder = defined("PLACEHOLDER-".$size) ? constant("PLACEHOLDER-".$size) : null;
	$images = '';
	if ( has_post_thumbnail() ) {
		$images .= $is_figure ? '<figure>' : '';
		$images .= get_the_post_thumbnail(get_the_ID(), $size, array('loading' => 'lazy', 'alt'   => get_the_title() ) );
		$images .= $is_figure ? '</figure>' : '';
	}
	elseif(!empty($placeholder)){
		$images .= $is_figure ? '<figure>' : '';
		$images .= '<img src="'. $placeholder . '" alt="'. get_the_title() .'" loading="lazy">';
		$images .= $is_figure ? '</figure>' : '';
	}
	else{
		$images .= $is_figure ? '<figure>' : '';
		$images .= '<img src="'. constant('PLACEHOLDER-THUMB') . '" alt="'. get_the_title() .'" loading="lazy">';
		$images .= $is_figure ? '</figure>' : '';
	}
	return print $images;
}


/**
 * Generate HTML for displaying post thumbnails picture
 *
 * @param string $size The thumbnail size to use
 ** @param string $size The thumbnail size mobile to use
 * @return string The HTML for the post thumbnail image
 */
function handle_thumbnail_picture($size, $sizemb){
	$images = '';
	if ( has_post_thumbnail() ) {
		$images = the_post_thumbnail($size, array('loading' => 'lazy', 'alt'   => get_the_title() ) );
	}
	else{
		$images .= '<picture">';
		$images .= '</picture>';

	}
	return print $images;
}


/**
 * Function to handle generating HTML for a thumbnail image.
 *
 * @param int $id The ID of the attachment.
 * @param string $size The size of the image.
 * @param string $alt The alt text for the image.
 * @param bool $is_figure Whether or not to wrap the image in a <figure> element.
 * @return string The generated HTML for the image.
 */
function handle_thumbnail_id($id, $size = 'NEWS-THUMB', $alt = '', $is_figure = false){
	$placeholder = defined("PLACEHOLDER-".$size) ? constant("PLACEHOLDER-".$size) : null;
	$images = wp_get_attachment_image_url($id, $size);
	if ($images) {
		$images = $is_figure ? '<figure>' : '';
		$images .= '<img src="' . wp_get_attachment_image_url($id, $size) . '" alt="' . $alt . '" loading="lazy">';
		$images .= $is_figure ? '</figure>' : '';
	}
	elseif(!empty($placeholder)){
		$images = $is_figure ? '<figure>' : '';
		$images .= '<img src="'. $placeholder . '" alt="'. $alt .'" loading="lazy">';
		$images .= $is_figure ? '</figure>' : '';
	}
	else{
		$images = $is_figure ? '<figure>' : '';
		$images .= '<img src="'. constant('PLACEHOLDER-THUMB') . '" alt="'. $alt .'" loading="lazy">';
		$images .= $is_figure ? '</figure>' : '';
	}
	return print $images;
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Disable global-styles-inline-css
add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
function remove_global_styles(){
    // wp_dequeue_style( 'global-styles' );
		// wp_dequeue_style( 'classic-theme-styles' );
		// wp_dequeue_style( 'wp-block-library' );
}

function get_id_by_slug($page_slug) {
	// $page_slug = "parent-page"; in case of parent page
	// $page_slug = "parent-page/sub-page"; in case of inner page
	$page = get_page_by_path($page_slug);
	if ($page) {
			return $page->ID;
	} else {
			return null;
	}
}
// hide admin bar
//add_filter('show_admin_bar', '__return_false');

/**
 * Get the slug of a category by its name.
 *
 * @param string $category_name The name of the category.
 *
 * @return string|null The slug of the category, or null if it does not exist.
 */
function get_category_slug_by_name( $category_name, $taxonomy = 'category' ) {
	$category = get_term_by( 'name', $category_name, $taxonomy );
	if ( $category ) {
			return $category->slug;
	} else {
			return null;
	}
}
	// remove width & height attributes from images
	function remove_img_attr ($html)
	{
		return preg_replace('/(width|height)="\d+"\s/', "", $html);
	}
	add_filter( 'post_thumbnail_html', 'remove_img_attr' );

	function my_tags_hierarchical($args) {
		$args['label'] = 'Tags';
    $args['hierarchical'] = true;
    return $args;
	};
	add_filter( 'register_post_tag_taxonomy_args', 'my_tags_hierarchical' );

// add menu

add_theme_support( 'menus' );

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
			'page_title'    => 'Theme General Settings',
			'menu_title'    => 'Theme Settings',
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
	));

	acf_add_options_sub_page(array(
			'page_title'    => 'ĐỘI NGŨ BÁC SĨ',
			'menu_title'    => 'ĐỘI NGŨ BÁC SĨ',
			'parent_slug'   => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
			'page_title'    => 'Banner Detail Post',
			'menu_title'    => 'Banner Detail Post',
			'parent_slug'   => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Related Detail Post',
		'menu_title'    => 'Related Detail Post',
		'parent_slug'   => 'theme-general-settings',
));
}


// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );