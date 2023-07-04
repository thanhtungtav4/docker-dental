<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package recruit
 */

?>
  </main>
    <footer class="c-footer">
      <div class="c-footer_upper">
        <div class="wrapper">
          <div class="c-footer_inner">
            <div class="c-footer_block"><strong class="title">KẾT NỐI VỚI I-DENT</strong>
              <ul class="l-social">
                <li><a class="trans" href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_facebook.svg" alt=""></a></li>
                <li><a class="trans" href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_youtube.svg" alt=""></a></li>
                <li><a class="trans" href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_inst.svg" alt="inst"></a></li>
                <li><a class="trans" href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_twitter.svg" alt="twitter"></a></li>
              </ul><strong class="title is-pc">ĐỐI TÁC THANH TOÁN</strong>
              <ul class="l-payment is-pc">
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_mc.svg" alt="mc"></a></li>
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_visa.svg" alt="visa"></a></li>
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_jcb.svg" alt="jcb"></a></li>
              </ul>
              <ul class="l-certi">
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_bct.svg" alt="bct"></a></li>
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_dmca.svg" alt="dmca"></a></li>
              </ul>
            </div>
            <div class="c-footer_block"><strong class="title">NHA KHOA IMPLANT I-DENT</strong>
              <ul class="l-address">
                <li>
                  <p class="addr">CS1: 19V Nguyễn Hữu Cảnh, P.19, Q.Bình Thạnh, Tp.Hồ Chí Minh</p>
                  <p class="phone">Điện thoại : (028) 38406854</p>
                </li>
                <li>
                  <p class="addr">CS2: 193A - 195 Hùng Vương, Phường 9, Quận 5, Tp.Hồ Chí Minh</p>
                  <p class="phone">Điện thoại : (028) 38336818</p>
                </li>
                <li>
                  <p class="addr">CS3: 83 Đường Số 3, KDC CityLand, P.10, Q.Gò Vấp, Tp.Hồ Chí Minh</p>
                  <p class="phone">Điện thoại : (028) 22036818</p>
                </li>
                <li>
                  <p class="phone is-hotline">Hotline : 094 1818 616</p>
                </li>
              </ul>
              <div class="work-time"><strong>Giờ làm việc:</strong>
                <ul class="l-time">
                  <li><span>Thứ 2 - Thứ 7:</span><span>8h00 - 20h00</span></li>
                  <li><span>Chủ Nhật:</span><span>8h00 - 12h00</span></li>
                </ul>
              </div>
            </div>
            <div class="c-footer_block"><strong class="title">THÔNG TIN CẦN BIẾT</strong>
            <?php if (has_nav_menu( 'footer-menu' )) {
                  wp_nav_menu( array(
                  'container'         => 'false',
                  'menu_class'        => 'l-info',
                  'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                  'theme_location'    => 'footer-menu' ) );
              } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="c-footer_info">
        <div class="wrapper">
          <div class="inner">
            <p class="gp">GPKD/MST/0312964786<br>Ngày cấp: 09/10/2014 bởi Sở Kế hoạch và Đầu tư Tp.Hồ Chí Minh</p><small class="copyright">Copyright ® nhakhoaident.com. All right Reserved</small>
          </div>
        </div>
      </div>
    </footer>
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/libs/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/libs/jquery.matchHeight-min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/libs/jquery.syotimer.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/scripts.js"></script>
    <?php wp_footer(); ?>
    <script>
      if ($('.wpcf7-form.sent').length) {
        $(location).attr('href', '/dat-hen-thanh-cong')
      }
    </script>
  </body>
</html>