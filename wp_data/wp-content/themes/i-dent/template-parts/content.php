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
            <li><a class="trans" href="<?php echo get_home_url()?>">Trang chủ</a></li>
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
              <h2 class="article-title ttl-primary"><?php the_title(); ?></h2>
              <?php
                require_once( get_stylesheet_directory() . '/module/box-doctor.php' );
              ?>
              <div class="m-article">
                <p><?php the_excerpt(); ?></p>
                <?php do_shortcode('[toc]')?>
                <!-- <div class="box-anchors js-box">
                  <h3 class="title">Nội dung bài viết<a class="btn-hide is-active" href="javascript:;">[&nbsp;<span>Ẩn</span> ]</a></h3>
                  <ol class="l-anchors">
                    <li><a href="#sec01">1. Kỹ thuật Implant toàn hàm cường lực All-on-6</a></li>
                    <li><a href="#sec02">2. 4 yếu tố quyết định cấy ghép Implant All-on-6 thành công</a>
                      <ol>
                        <li><a href="#">2.1 Thực hiện bởi TS.BS tu nghiệp 10 năm tại Pháp</a></li>
                        <li><a href="#">2.2 Sử dụng trụ Implant Straumann Thụy Sĩ cao cấp</a></li>
                        <li><a href="#">2.3 Máy chụp phim Cone beam CT 3D nhập khẩu từ Hoa Kỳ</a></li>
                        <li><a href="#">2.4 Răng toàn Sứ cao cấp Nacera Pearl</a></li>
                      </ol>
                    </li>
                    <li><a href="#">3. Trồng răng implant All on 6 Thụy Sĩ giá bao nhiêu?</a></li>
                    <li><a href="#">4. Đánh giá của khách hàng và báo chí về Nha khoa I-DENT</a></li>
                  </ol>
                </div> -->
                <?php the_content(); ?>
              </div>
              <?php
                require_once( get_stylesheet_directory() . '/module/box-information.php' );
              ?>
            </article>
            <?php
              require_once( get_stylesheet_directory() . '/module/sidebar.php' );
            ?>
          </div>
        </div>
      </div>

