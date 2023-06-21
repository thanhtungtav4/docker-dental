<?php
if(class_exists('ACF')) :
$postID = get_field('main_customer');
$queryCustomer = new WP_Query(
    array(
      'post_type'     => 'story-khach-hang',
      'post_status'   => 'publish',
      'posts_per_page' => '8',
      'post__in' => $postID,
      'orderby' => 'post__in'
    )
  );
?>
<section class="m-customer">
  <div class="wrapper">
    <h2 class="ttl-primary">I-DENT CÂU CHUYỆN KHÁCH HÀNG</h2>
    <div class="m-customer_slide js-cus-slide">
      <?php if ( $queryCustomer->have_posts() ) :
            while ( $queryCustomer->have_posts() ) : $queryCustomer->the_post();
            $sex = get_field('sex', get_the_ID());
            $title = get_the_title();
      ?>
        <div class="m-customer_item">
          <div class="m-customer_inner">
            <figure class="image">
              <?php handle_thumbnail_id(get_field('customer_image_main'), 'full') ?>
            </figure>
            <div class="info">
              <h3 class="cus-name"><?php echo $sex . '&nbsp;' . $title; ?></h3>
              <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
              <div class="m-btn">
                <a href="<?php the_permalink() ?>">Xem chi tiết</a>
              </div>
            </div>
          </div>
        </div>
      <?php
        endwhile;
        wp_reset_query();
        endif;
      ?>
    </div>
  </div>
 </section>
<?php endif; ?>
