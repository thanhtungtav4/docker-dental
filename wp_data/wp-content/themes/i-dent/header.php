<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="charset" content="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="fb:app_id" content="0000000000000000">
    <meta name="twitter:card" content="summary">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>TOP</title>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/js/libs/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="c-header">
      <div class="wrapper">
        <div class="c-header_inner">
         <?php if(is_front_page()) : ?>
          <h1 class="c-header_logo">
            <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="Nha khoa Implant I-DENT"></a>
          </h1>
          <?php else : ?>
            <div class="c-header_logo">
              <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="Nha khoa Implant I-DENT"></a>
            </div>
          <?php endif; ?>
          <div class="c-header_contact">
            <div class="hotline"><span>HOTLINE</span><a class="hotline_phone" href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_phone.svg" alt="(+84) 94 1818 616">(+84) 94 1818 616</a></div>
            <ul class="language">
              <li><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_en_flag.svg" alt="flag"><span>EN</span></li>
            </ul>
          </div>
          <div class="nav-icon js-menu"><span></span><span></span><span></span></div>
        </div>
      </div>
      <nav class="c-header_nav">
        <div class="wrapper">
          <?php if (has_nav_menu( 'primary-menu' )) {
              wp_nav_menu( array(
              'container'         => 'false',
              'menu_class'        => 'nav-menu',
              'items_wrap'        => '<ul class="%2$s" role="menubar">%3$s</ul>',
              'walker' => new Aria_Walker_Nav_Menu(),
              'theme_location'    => 'primary-menu' ) );
          } ?>
          <div class="btn-search"><a class="is-icon" href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_search.svg" alt=""></a>
            <input class="m-input" type="text">
          </div>
        </div>
      </nav>
    </header>
    <main class="SiteMain">