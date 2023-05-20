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
      <div class="m-phacdo m-loairang">
        <div class="wrapper">
          <div class="m-phacdo_inner">
            <div class="heading">
              <h2 class="ttl-primary ttl-primary--is-medium"><?php the_title()?></h2><span class="time"><?php echo get_the_date('d.m.Y')?></span>
            </div>
            <p class="text intro-text"><?php echo wp_trim_words(get_the_excerpt()); ?></p>
            <div class="m-article">
             <?php the_content(); ?>
            </div>
            <?php
              require_once( get_stylesheet_directory() . '/module/box-information.php' );
            ?>
          </div>
        </div>
      </div>