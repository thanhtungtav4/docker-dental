<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Khách hàng.
	 */

	$labels = [
		"name" => esc_html__( "Khách hàng", "i-dent" ),
		"singular_name" => esc_html__( "Khách hàng", "i-dent" ),
	];

	$args = [
		"label" => esc_html__( "Khách hàng", "i-dent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "cau-chuyen-khach-hang", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-widgets-menus",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "story-khach-hang", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Doanh mục khách hàng.
	 */

	$labels = [
		"name" => esc_html__( "Doanh mục khách hàng", "i-dent" ),
		"singular_name" => esc_html__( "Doanh mục khách hàng", "i-dent" ),
	];


	$args = [
		"label" => esc_html__( "Doanh mục khách hàng", "i-dent" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'khach-hang', 'with_front' => false,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "khach-hang",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "khach-hang", [ "story-khach-hang" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );