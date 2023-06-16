<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */
  get_header();
  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
  $category['name'] = "Tin Tức";
  $queryPost = new WP_Query(
    array(
      'paged'         => $paged,
      'post_type'     => 'tuc-tuc',
      'post_status'   => 'publish',
      'offset'        => -1
    )
  );
  $querySticky = new WP_Query(
    array(
      'posts_per_page'      => 1,
      'post_status'   => 'publish',
      'post_type'     => 'tuc-tuc'
    )
  );
?>
<div class="m-kienthuc">
  <div class="wrapper">
    <div class="m-kienthuc_main">
      <?php while ( $querySticky->have_posts() ) : $querySticky->the_post() ;  ?>
        <div class="l-news_item">
          <figure class="images">
            <?php handle_thumbnail('NEWS-BIG-THUMB'); ?>
          </figure>
          <div class="info">
            <span class="tag">Tin tức</span>
            <h3 class="title js-height"><?php the_title(); ?></h3>
            <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
            <div class="m-btn is-reverse">
              <a href="<?php the_permalink() ?>">Xem thêm</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="m-kienthuc_list">
      <ul class="l-news">
		<?php
			while ( $queryPost->have_posts() ) : $queryPost->the_post();
				require( get_stylesheet_directory() . '/module/news-item.php' );
			endwhile;
      wp_reset_query();
		?>
      </ul>
      <?php
        // $GLOBALS['wp_query']->max_num_pages = $queryPost->max_num_pages;
        the_posts_pagination( array(
          'prev_text' => __( '<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="#025899"></path>
        <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="black" fill-opacity="0.2"></path>
      </svg>', 'textdomain' ),
          'next_text' => __( '<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="#025899"></path>
          <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="black" fill-opacity="0.2"></path>
        </svg>', 'textdomain' ),
        ) );
    ?>
</div>
  </div>
</div>

<?php
get_footer(); ?>
