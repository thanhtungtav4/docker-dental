<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recruit
 */
  if(!is_page()){
    $categories = get_the_category();
    $categorie_name = (!empty($categories[0]) && !empty($categories[0]->name)) ? $categories[0]->name : '';
    $categorie_slug = (!empty($categories[0]) && !empty($categories[0]->term_id)) ? get_category_link($categories[0]->term_id) : '';
  }
  else{
    $page_parentID = $post->post_parent;
  }
?>
      <div class="breadcrumbs">
        <div class="wrapper">
          <ul class="l-breadcrumbs">
            <li><a class="trans" href="<?php echo get_home_url()?>/">Trang chủ</a></li>
            <?php if(!is_page() && $categorie_name) : ?>
              <li><a class="trans" href="<?php echo $categorie_slug ?>"><?php echo $categorie_name ?></a></li>
            <?php endif; ?>
            <?php if(is_page() && $page_parentID) : ?>
              <li><a class="trans" href="<?php echo get_the_permalink($page_parentID) ?>"><?php echo get_the_title($page_parentID) ?></a></li>
            <?php endif; ?>
            <li><span><?php the_title()?></span></li>
          </ul>
        </div>
      </div>
      <div class="m-phacdo m-loairang">
        <div class="wrapper">
          <div class="m-phacdo_inner">
            <div class="heading">
              <h1 class="ttl-primary ttl-primary--is-medium"><?php the_title()?></h1>
              <span class="time"><?php echo get_the_date('d.m.Y')?></span>
            </div>
            <div class="m-article">
             <?php the_content(); ?>
            </div>
            <?php
              require_once( get_stylesheet_directory() . '/module/box-information.php' );
            ?>
          </div>
        </div>
      </div>