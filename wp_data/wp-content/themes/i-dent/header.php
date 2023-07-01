<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="charset" content="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="content-language" content="vi-vn" />
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta property="og:site_name" content="<?php echo get_bloginfo( 'name' );?>">
    <meta property="og:description" content="<?php echo get_bloginfo( 'description' );?>">
    <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <link rel="alternate" href="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" hreflang="vi-vn" />
    <meta property="fb:app_id" content="263634224110155" />
    <meta property="fb:pages" content="1501028436840514" />
    <meta property="fb:admins" content="100003294784231,100022444733784,100028756207651,100000185834839" />
    <meta name="author" content="Bs.Nguyễn Hiếu Tùng">
    <meta name="copyright" content="Copyright ® 2014 - 2016 nhakhoaident.com. All rights reserved" />
    <meta name="p:domain_verify" content="7c1c3e8895bfc859a4ae8796fa04d548" />
    <meta name="google-site-verification" content="cExJeNm-uwIJhwMYhWpttuIaALlhk-a42lVTWC-I5lQ" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="TpHCM" />
    <meta name="geo.position" content="10.789725;106.711259" />
    <meta name="ICBM" content="10.789725;106.711259" />
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/js/libs/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php echo bodyClass(); ?>>
    <header class="c-header">
      <div class="wrapper">
        <div class="c-header_inner">
        <?php if(is_front_page()) : ?>
            <h1 class="c-header_logo">
              <a href="<?php echo home_url(); ?>">
              <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="Nha khoa Implant I-DENT"></a>
            </h1>
          <?php else : ?>
            <div class="c-header_logo">
              <a href="<?php echo home_url(); ?>">
              <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="Nha khoa Implant I-DENT"></a>
            </div>
          <?php endif; ?>
          <div class="c-header_contact is-pc">
            <div class="hotline"><span>HOTLINE</span>
            <a class="hotline_phone" href="tel:0941818616">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_phone.svg" alt="0941818616">(+84) 94 1818 616
            </a>
            </div>
            <ul class="language">
              <li>
                <a href="https://identdentalimplantcenter.com/" target="_blank" rel="noopener">
                  <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_en_flag.svg" alt="ico en flag"><span>EN</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="c-header_book is-sp">
            <a class="popup-with-form" href="#modal-contact">
              <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/btn_book.svg" alt="btn book">
            </a>
          </div>
          <div class="nav-icon js-menu">
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/btn_menu.svg" alt="btn menu">
          </div>
        </div>
      </div>
      <nav class="c-header_nav">
        <div class="btn-close is-sp js-close">
          <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/btn_close.svg" alt="btn close"></div>
        <div class="overlay is-sp"></div>
        <div class="wrapper">
          <div class="nav-wrap">
            <?php if (has_nav_menu( 'primary-menu' )) {
                  wp_nav_menu( array(
                  'container'         => 'false',
                  'menu_class'        => 'nav-menu',
                  'items_wrap'        => '<ul class="%2$s" role="menubar">%3$s</ul>',
                  'walker' => new Aria_Walker_Nav_Menu(),
                  'theme_location'    => 'primary-menu' ) );
              } ?>
            <div class="m-btn is-sp"><a class="popup-with-form" href="#">ĐẶT LỊCH HẸN</a></div>
            <div class="btn-search"><a class="is-icon" href="javascript:;">
              <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_search.svg" alt="ico search">
              <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_search_white.svg" alt="ico search white"></a>
              <form action="/" method="get">
                <input class="m-input" name="s" id="search" value="<?php the_search_query(); ?>" type="text" placeholder="Tìm kiếm">
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="modal-contact mfp-hide" id="modal-contact">
      <div class="inner"><strong>BẠN CẦN TƯ VẤN</strong>
        <p class="title">ĐẶT LỊCH HẸN CÙNG BÁC SĨ NGAY</p>
        <p class="text">Nha Khoa I-Dent sẽ liên hệ lại<br>quý Khách trong thời gian sớm nhất</p>
        <div class="row">
          <input class="m-input" type="text" placeholder="Họ và tên">
        </div>
        <div class="row">
          <input class="m-input" type="text" placeholder="Số điện thoại">
        </div>
        <div class="row">
          <select class="m-input m-select" name="">
            <option value="Dịch vụ quan tâm">Trồng răng implant</option>
            <option value="Dịch vụ quan tâm">Bọc răng sứ</option>
            <option value="Dịch vụ quan tâm">Dán venneer</option>
            <option value="Dịch vụ quan tâm">Chỉnh nha</option>
            <option value="Dịch vụ quan tâm">Dịch vụ khác</option>
          </select>
        </div>
        <div class="m-btn"><a href="#">ĐĂNG KÝ</a></div>
        <p class="text">Tư vấn trực tiếp 24/7 : 094 1818 616</p>
      </div>
    </div>
    <main class="SiteMain">
    <?php  require_once( get_stylesheet_directory() . '/module/contact-menu.php' ); ?>