<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package recruit
 */
$taxonomy = get_queried_object()->taxonomy;
$taxonomy_name =get_queried_object()->name;
$term_id = get_queried_object()->term_id;
$termchildren = get_term_children($term_id, $taxonomy);
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'post_type' => 'story-khach-hang',
	'paged'         => $paged,
	'post_status'   => 'publish',
	'tax_query' => array(
			array(
			'taxonomy' => $taxonomy,
			'field' => 'term_id',
			'terms' => $term_id
			 )
		)
	);
$queryPost = new WP_Query( $args );
get_header();
?>
      <div class="page-mv"><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/bnr_story.jpg" alt=""><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/sp/bnr.jpg" alt=""></div>
      <section class="m-story">
        <div class="wrapper">
          <h2 class="ttl-primary uppercase"><?php echo isset($taxonomy_name) ? $taxonomy_name : ''; ?></h2>
          <ul class="l-filter">
						<?php
						if($termchildren) :
							foreach ( $termchildren as $child ) {
								$term = get_term_by( 'id', $child, $taxonomy );
								echo '<li class="trans" ><a href="' . get_term_link( $child, $taxonomy ) . '">' . $term->name . '</a></li>';
							}
						endif;
						?>
          </ul>
          <ul class="l-news l-story">
					<?php
						while ( $queryPost->have_posts() ) : $queryPost->the_post();
							$video_url = get_field('video_url');
					?>
						<li class="l-news_item">
							<a class="vidplay trans" href="<?php echo $video_url; ?>"><
	              <figure class="images">
									<?php handle_thumbnail('NEWS-ITEM-THUMB'); ?>
								</figure>
							</a>
              <div class="info"><span class="tag">CÂU CHUYỆN KHÁCH HÀNG</span>
                <a href="<?php the_permalink(); ?>">
                	<h3 class="title js-height"><?php the_title(); ?></h3>
                </a>
                <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <div class="m-btn is-reverse is-small"><a href="<?php the_permalink(); ?>">Xem thêm</a></div>
              </div>
            </li>
					<?php
						endwhile;
						wp_reset_query();
					?>
          </ul>
					<?php
					 $GLOBALS['wp_query']->max_num_pages = $queryPost->max_num_pages;
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
      </section>
<?php
get_footer();

