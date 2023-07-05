<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recruit
 */
if (function_exists('get_field') ) {
  $youtube_img = get_field('image_placeholder_video');
  $youtube_url = get_field('video_url');
  $treatment_plan = get_field('treatment_plan');
  $ekip = get_field('ekip');
  $list_service = get_field('list_service');
}
$argsEkip = array(
  'post_type' => 'ekip',
  'post__in' => $ekip,
  'post_status' => 'publish',
  'orderby' => 'post__in'
);
$queryEkip = new WP_Query($argsEkip);
?>
<div class="breadcrumbs">
  <div class="wrapper">
    <ul class="l-breadcrumbs">
      <li>
        <a class="trans" href="
					<?php echo get_home_url(); ?>">Trang chủ </a>
      </li>
      <li>
        <a class="trans" href="#">Câu chuyện khách hàng</a>
      </li>
      <li>
        <span> <?php the_title(); ?> </span>
      </li>
    </ul>
  </div>
</div>
<div class="wrapper">
  <div class="m-detail">
    <?php if($youtube_img && $youtube_url) : ?>
    <div class="m-detail_video is-sp">
      <a class="vidplay" href="<?php echo $youtube_url;?>">
        <?php handle_thumbnail_id($youtube_img, 'full'); ?>
      </a>
    </div>
    <?php endif; ?>
    <div class="m-detail_head">
      <span class="tag">CÂU CHUYỆN KHÁCH HÀNG</span>
      <h2 class="post-title ttl-primary"> <?php the_title(); ?> </h2>
      <span class="time"> <?php echo get_the_date('d.m.Y')?> </span>
    </div>s
    <?php if($youtube_img && $youtube_url) : ?>
      <div class="m-detail_video is-pc">
        <a class="vidplay" href="<?php echo $youtube_url;?>">
          <?php handle_thumbnail_id($youtube_img, 'REVIEW-THUMB'); ?>
        </a>
      </div>
    <?php endif; ?>
    <?php if($treatment_plan): ?>
      <div class="box-short">
        <strong class="title">TÓM TẮT KẾ HOẠCH ĐIỀU TRỊ</strong>
        <ul class="l-short">
          <?php foreach($treatment_plan as $plan) :?>
            <li>
              <span><?php echo $plan['plan_name'] ?>:</span><?php echo $plan['plan_description'] ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php if ( $queryEkip->have_posts() ) : ?>
      <div class="ekip">
        <h3 class="ttl-primary is-small">EKIP THỰC HIỆN</h3>
        <ul class="l-ekip">
        <?php while ( $queryEkip->have_posts() ) : $queryEkip->the_post(); ?>
          <li class="l-ekip_item">
            <div class="img">
              <?php echo get_handle_thumbnail('EKIP-THUMB'); ?>
            </div>
            <div class="info">
              <span class="pos"><?php the_field('ekip_role', get_the_ID()); ?></span>
              <span class="ttl"><?php the_field('ekip_degree', get_the_ID()); ?></span>
              <span class="name"><?php the_field('ekip_name', get_the_ID()); ?></span>
              <div class="gr-btn">
                <?php if(get_field('btn_appointment', get_the_ID())) :  ?>
                  <div class="m-btn is-small">
                    <a class="popup-with-form" href="#modal-contact">Đặt lịch hẹn</a>
                  </div>
                <?php endif; ?>
                <?php if(get_field('view_profile', get_the_ID())) :  ?>
                  <div class="m-btn is-small is-reverse">
                    <a href="<?php the_field('view_profile', get_the_ID()); ?>">Xem hồ sơ</a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </li>
        <?php
          endwhile;
          wp_reset_query();
        ?>
        </ul>
      </div>
    <?php endif; ?>
    <div class="cus-images">
      <div class="left">
        <div class="big-img">
          <?php handle_thumbnail_id(get_field('customer_image_main'), 'CUSTOMER-MAIN-THUMB') ?>
        </div>
        <div class="small-img">
          <div class="ig after">
          <?php handle_thumbnail_id(get_field('customer_image_main_before'), 'CUSTOMER-SMAIL-THUMB') ?>
          </div>
          <div class="ig before">
          <?php handle_thumbnail_id(get_field('customer_image_main_after'), 'CUSTOMER-SMAIL-THUMB') ?>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="cus-info">
          <div class="name"><?php the_field('sex'); ?>: <strong><?php get_field('customer_name') ? the_field('customer_name') : the_title() ; ?></strong>
          </div>
          <?php if(get_field('customer_service_from')): ?>
            <span class="loc"><?php the_field('customer_service_from'); ?></span>
          <?php endif; ?>
        </div>
        <?php if($list_service): ?>
          <ul class="cus-service">
            <?php foreach($list_service as $item) : ?>
              <li><?php echo $item['service']?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <div class="m-article">
      <?php the_content(); ?>
      <strong class="signature">BAN BIÊN TẬP I-DENT</strong>
    </div>
    <?php
      require_once( get_stylesheet_directory() . '/module/box-information.php' );
    ?>
  </div>
</div>