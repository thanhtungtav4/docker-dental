<?php
/**
 * recruit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package recruit
 */
  include_once(get_stylesheet_directory() .  '/functions/aria-walker-nav-menu.php');
  include_once( get_stylesheet_directory() . '/functions/init.php' );
  include_once( get_stylesheet_directory() . '/functions/security.php' );
  include_once( get_stylesheet_directory() . '/functions/optimize.php' );
  include_once( get_stylesheet_directory() . '/functions/bodyClass.php' );
  include_once( get_stylesheet_directory() . '/functions/breadcrumbs.php' );
  include_once( get_stylesheet_directory() . '/functions/custome_post_type.php' );
  include_once( get_stylesheet_directory() . '/functions/style.php' );
  include_once( get_stylesheet_directory() . '/functions/pagenavi.php' );
  include_once( get_stylesheet_directory() . '/functions/smtp.php' );
  include_once( get_stylesheet_directory() . '/functions/cf7.php' );
  include_once( get_stylesheet_directory() . '/functions/url.php' );
  include_once( get_stylesheet_directory() . '/functions/removeTagb.php' );
 // include_once( get_stylesheet_directory() . '/functions/oaZalo.php' );
 include_once( get_stylesheet_directory() . '/functions/antiSpam.php' );

  add_filter('jpeg_quality', function($arg){return 100;});
  add_filter('wp_editor_set_quality', function($arg){return 100;});