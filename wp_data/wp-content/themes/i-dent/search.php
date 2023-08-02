<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package recruit
 */
global $query_string;
$s=get_search_query();
$args = array(
    's' =>$s
);
$the_query = new WP_Query( $args );
get_header();
?>
  <section class="m-news">
    <div class="wrapper">
      <h2 class="ttl-primary">Kết Quả Tìm Kiếm "<?php echo get_search_query(); ?>"</h2>
      <div class="m-kienthuc_list">
        <ul class="l-news js-news">
        <?php
          while ( $the_query->have_posts() ) : $the_query->the_post();
            require( get_stylesheet_directory() . '/module/news-item.php' );
          endwhile;
          wp_reset_query();
        ?>
        </ul>
      </div>
      
    </div>
  </section>
<?php
get_footer();
