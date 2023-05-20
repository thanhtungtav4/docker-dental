<?php
/**
 * Template Name: Template single i-dent
 * Template Post Type: post
 */
get_header(); 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package recruit
 */
get_header();
?>
	<?php
	while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-single-sub');
	endwhile;
	?>
<?php
get_footer();

