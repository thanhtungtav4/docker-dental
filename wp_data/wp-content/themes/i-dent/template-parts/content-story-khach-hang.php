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
}
$argsEkip = array(
  'post_type' => 'ekip',
  'post__in' => $ekip,
  'post_status' => 'publish',
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
        <?php handle_thumbnail_id($youtube_img, 'REVIEW-THUMB'); ?>
      </a>
    </div>
    <?php endif; ?>
    <div class="m-detail_head">
      <span class="tag">CÂU CHUYỆN KHÁCH HÀNG</span>
      <h2 class="post-title ttl-primary"> <?php the_title(); ?> </h2>
      <span class="time"> <?php echo get_the_date('d.m.Y')?> </span>
    </div>
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
              <span class="pos"><?php get_field('role');?></span>
              <span class="ttl">Tiến sĩ - Bác sĩ</span>
              <span class="name"><?php the_title();?></span>
              <div class="gr-btn">
                <div class="m-btn is-small">
                  <a href="#">Đặt lịch hẹn</a>
                </div>
                <div class="m-btn is-small is-reverse">
                  <a href="#">Xem hồ sơ</a>
                </div>
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
          <img src="https://placehold.co/600x400?text=dummy" alt="">
        </div>
        <div class="small-img">
          <div class="ig after">
            <img src="https://placehold.co/600x400?text=dummy" alt="">
          </div>
          <div class="ig before">
            <img src="https://placehold.co/600x400?text=dummy" alt="">
          </div>
        </div>
      </div>
      <div class="right">
        <div class="cus-info">
          <div class="name">Cô: <strong>MỸ NHI TẤT</strong>
          </div>
          <span class="loc">Việt Kiều Úc</span>
        </div>
        <ul class="cus-service">
          <li>Cấy Implant All on 5 hàm trên</li>
          <li>Implant Mis C1 Đức</li>
          <li>Phục hình sứ</li>
        </ul>
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