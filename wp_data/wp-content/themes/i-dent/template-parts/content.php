<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recruit
 */
  $categories = get_the_category();
  $categorie_name = (!empty($categories[0]) && !empty($categories[0]->name)) ? $categories[0]->name : '';
  $categorie_slug = (!empty($categories[0]) && !empty($categories[0]->term_id)) ? get_category_link($categories[0]->term_id) : '';
?>
      <div class="breadcrumbs">
        <div class="wrapper">
          <ul class="l-breadcrumbs">
            <li><a class="trans" href="<?php echo get_home_url()?>/">Trang chủ</a></li>
            <li><a class="trans" href="<?php echo $categorie_slug ?>"><?php echo $categorie_name ?></a></li>
            <li><span><?php the_title()?></span></li>
          </ul>
        </div>
      </div>
      <div class="m-detail">
        <div class="wrapper">
          <div class="m-detail_inner">
            <article class="m-detail_detail">
              <div class="m-detail_bnr">
                <?php echo get_handle_thumbnail('NEWS-DETAIL-THUMB'); ?>
              </div>
              <div class="m-detail_head"><span class="tag"><?php echo $categorie_name ?></span>
                <div class="m-detail_head-right"><span class="time"><?php echo get_the_date('d.m.Y')?></span>
                  <ul class="rating">
                    <li><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_unstar.svg" alt=""></li>
                  </ul><span class="view-rate">Đánh giá: 4.0/5 ( 20 bình chọn )</span>
                </div>
              </div>
              <h1 class="article-title ttl-primary"><?php the_title(); ?></h1>
              <?php
                require_once( get_stylesheet_directory() . '/module/box-doctor.php' );
              ?>
              <div class="m-article">
                <?php do_shortcode('[toc]')?>
                <?php the_content(); ?>
              </div>
              <?php
                require_once( get_stylesheet_directory() . '/module/box-information.php' );
              ?>
            </article>
          </div>
        </div>
      </div>

