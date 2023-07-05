
<?php
if(class_exists('ACF')) :
$postID = get_field('main_news');
$queryPost = new WP_Query(
    array(
      'post_type'     => 'post',
      'post_status'   => 'publish',
      'posts_per_page' => '3',
      'post__in' => $postID,
      'orderby' => 'post__in'
    )
  );
?>
<section class="m-news">
    <div class="wrapper">
      <h2 class="ttl-primary">KIẾN THỨC NHA KHOA</h2>
      <ul class="l-news js-news">
        <?php if ( $queryPost->have_posts() ) :
          while ( $queryPost->have_posts() ) : $queryPost->the_post();
          ?>
          <li class="l-news_item">
            <figure class="images">
              <?php echo get_handle_thumbnail('NEWS-DETAIL-THUMB'); ?>
            </figure>
            <div class="info"><span class="tag"><?php wp_get_post_terms(get_the_ID(), 'category') ? print wp_get_post_terms(get_the_ID(), 'category')[0]->name : print 'Tin Tức'; ?></span>
              <h3 class="title js-height"><?php the_title(); ?></h3>
              <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
              <div class="m-btn"><a href="<?php the_permalink() ?>">Xem thêm</a></div>
            </div>
          </li>
        <?php
          endwhile;
          wp_reset_query();
          endif;
        ?>
      </ul>
    </div>
  </section>
<?php endif; ?>
