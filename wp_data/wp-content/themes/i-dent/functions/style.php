<?php
/***
 * add style to  detail post
 */
add_action( 'wp_footer', 'conditionally_enqueue_styles_scripts' );
function conditionally_enqueue_styles_scripts() {
    if(is_front_page()){
        //wp_register_script( 'top-slider', get_stylesheet_directory_uri().'/assets/js/top-slider.js' );
        //wp_enqueue_script('top-slider');
    }
    if(is_singular('post') || is_singular('content')){
      wp_register_style( 'block-theme', get_stylesheet_directory_uri().'/assets/css/style-single.css' );
      wp_enqueue_style('block-theme');
      ?>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const images = document.querySelectorAll('.wp-block-image img');
            images.forEach(function(image) {
              image.removeAttribute('width');
              image.removeAttribute('height');
            });
        });
      </script>
      <?php
    }
}


// functions.php or your custom plugin file

// Add a new template for single posts
// function custom_single_post_template($single_template) {
//   if (is_single()) {
//       // Replace 'custom-single-template.php' with the name of your template file
//       $single_template = locate_template(array('custom-single-template.php'));
//   }
//   return $single_template;
// }
// add_filter('single_template', 'custom_single_post_template');

// Register the new template for single posts
function register_custom_single_template($templates) {
  $templates['custom-single-template.php'] = 'Template single i-dent';
  return $templates;
}
add_filter('theme_page_templates', 'register_custom_single_template');
