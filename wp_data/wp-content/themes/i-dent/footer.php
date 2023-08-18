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
                <li><a class="trans" href="https://www.facebook.com/NhaKhoaIDent"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_facebook.svg" alt=""></a></li>
                <li><a class="trans" href="https://www.youtube.com/channel/UCqFZe36HfQU_h0y-lhVmgEQ"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_youtube.svg" alt=""></a></li>
                <li><a class="trans" href="https://www.instagram.com/identdentalclinic/"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_inst.svg" alt="inst"></a></li>
                <li><a class="trans" href="https://twitter.com/TrungTamImplant"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_twitter.svg" alt="twitter"></a></li>
              </ul><strong class="title is-pc">ĐỐI TÁC THANH TOÁN</strong>
              <ul class="l-payment is-pc">
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_mc.svg" alt="mc"></a></li>
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_visa.svg" alt="visa"></a></li>
                <li><a href=""><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_jcb.svg" alt="jcb"></a></li>
              </ul>
              <ul class="l-certi">
                <li><a href="http://online.gov.vn/Home/WebDetails/33854"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_bct.svg" alt="bct"></a></li>
                <li>
                  <a href="http://www.dmca.com/Protection/Status.aspx?ID=ba5e7d05-c2fe-4fa7-949d-113ec65a9b6e&amp;refurl=https://old.nhakhoaident.com/" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_dmca.svg" alt="DMCA.com Protection Status">
                  </a>
                </li>
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
                  <p class="addr">CS3: 83 Đường Số 3, KDC CityLand Park Hills, P.10, Q.Gò Vấp, Tp.Hồ Chí Minh</p>
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
    <script>
      if ($('.wpcf7-form.sent').length) {
        $(location).attr('href', '/dat-hen-thanh-cong')
      }
    </script>
    <?php wp_footer(); ?>
    <!-- // popup static -->
    <?php
       if( have_rows('popup_static', 'option') ):
        while( have_rows('popup_static', 'option') ) : the_row();
    ?>
          <div class="modal-contact mfp-hide" id="<?php the_sub_field('form_id'); ?>">
            <?php echo do_shortcode(get_sub_field('short_code')); ?>
          </div>
    <?php
        endwhile;
      endif;
    ?>
    <!-- // popup static -->
    <!-- // popup dynamic -->
    <?php
    if (have_rows('popup_dynamic', 'option')):
      $ClientCountry = get_client_location('country');
      while (have_rows('popup_dynamic', 'option')) : the_row();
        if (is_page(get_sub_field('show_in_page')) || is_single(get_sub_field('show_in_post')) || is_singular(get_sub_field('show_in_post'), 'story-khach-hang')) :
          ?>
              <?php
                if(empty(get_sub_field('country_in')) || ((get_sub_field('country_in') == 'Vietnam') && empty(get_sub_field('show_location')))) :
                  ?>
                    <div class="modal-contact mfp-hide" data-city="<?php echo get_client_location('regionname') ?>" data-country="<?php print $ClientCountry ?>"
                        data-page-scroll="<?php echo get_sub_field('page_scroll'); ?>"
                        data-show-after-time="<?php echo get_sub_field('show_after_time') ?: 0; ?>" id="popup_dynamic">
                          <?php
                          echo do_shortcode(get_sub_field('short_code'));
                          var_dump('case 1');
                          ?>
                    </div>
                <?php elseif(!empty(get_sub_field('country_in') && get_sub_field('country_in') == 'Foreign')): ?>
                  <div class="modal-contact mfp-hide" data-city="<?php echo get_client_location('regionname') ?>" data-country="<?php print $ClientCountry ?>"
                      data-page-scroll="<?php echo get_sub_field('page_scroll'); ?>"
                      data-show-after-time="<?php echo get_sub_field('show_after_time') ?: 0; ?>" id="popup_dynamic">
                        <?php
                        echo do_shortcode(get_sub_field('short_code_foreign'));
                        var_dump('case 2', $ClientCountry);
                        ?>
                  </div>
                <?php
                elseif(!empty(get_sub_field('show_location')) && in_array(get_client_location('regionname'), get_sub_field('show_location'))): ?>
                  <div class="modal-contact mfp-hide" data-city="<?php echo get_client_location('regionname') ?>" data-country="<?php print $ClientCountry ?>"
                      data-page-scroll="<?php echo get_sub_field('page_scroll'); ?>"
                      data-show-after-time="<?php echo get_sub_field('show_after_time') ?: 0; ?>" id="popup_dynamic">
                        <?php
                          if(have_rows('short_code_local')){
                            while( have_rows('short_code_local') ): the_row();
                              $slugClientCity = sanitize_title(get_client_location('regionname'));
                              $shortCodeName = sanitize_title(get_sub_field('location_name'));
                              if($slugClientCity == $shortCodeName){
                                echo do_shortcode(get_sub_field('short_code_city'));
                                var_dump('case 3');
                              }
                            endwhile;
                          }
                        ?>
                  </div>
                <?php endif; ?>
        <?php
        endif;
      endwhile;
      ?>
        <script>
          document.addEventListener("DOMContentLoaded", function () {
            var popupElement = document.getElementById("popup_dynamic");
            var showAfterTime = parseInt(popupElement.getAttribute("data-show-after-time")) * 1000;
            var hasShownPopup = localStorage.getItem("hasShownPopup");

            if (locationRuleShow() && !hasShownPopup && showAfterTime > 0) {
              setTimeout(showPopup, showAfterTime);
            }
          });

          window.addEventListener("scroll", function () {
            var popupElement = document.getElementById("popup_dynamic");
            var scrollThreshold = parseFloat(popupElement.getAttribute("data-page-scroll"));
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var totalHeight = document.documentElement.scrollHeight - window.innerHeight;
            var scrollPercentage = (scrollTop / totalHeight) * 100;
            var hasShownPopup = localStorage.getItem("hasShownPopup");

            if (locationRuleShow() && !hasShownPopup && scrollPercentage >= scrollThreshold) {
              showPopup();
            }
          });

          function showPopup() {
            $.magnificPopup.open({
              items: {
                src: '#popup_dynamic',
                type: 'inline'
              },
              preloader: false,
              callbacks: {
                beforeOpen: function () {
                  if ($(window).width() < 700) {
                    this.st.focus = false;
                  } else {
                    this.st.focus = '#name';
                  }
                  $('body').addClass('iframe-modal');
                },
                beforeClose: function () {
                  $('body').removeClass('iframe-modal');
                  localStorage.setItem("hasShownPopup", true); // Mark popup as shown
                }
              }
            });
          }
          function showVietNam() {
            var popupElement = document.getElementById("popup_dynamic");
            var clienCity = popupElement.getAttribute("data-city");
            var ruleCountry = '<?php get_sub_field('country_in') ? print get_sub_field('country_in') : print 'null' ; ?>';
            var clienCountry = '<?php print get_client_location() ?>';
            var ruleCity = '<?php get_sub_field('show_location') ? print implode(", ", get_sub_field('show_location')) : print 'null' ?>';
            var checkCity = ruleCity.includes(clienCity);
            if((clienCountry == 'Vietnam' && ruleCity == 'null')
            || ruleCountry == 'null' && ruleCity == 'null'
            || clienCountry == 'Vietnam' && ruleCity != 'null' && checkCity === true) {
              return true;
            }
            return false;
          }
          function showForeign() {
            var popupElement = document.getElementById("popup_dynamic");
            var ruleCountry = '<?php print get_client_location() ?>';
            if(ruleCountry !== 'Vietnam'){
              return true;
            }
            return false;
          }

          function locationRuleShow(){
            var Country = '<?php get_sub_field('country_in') ? print get_sub_field('country_in') : print 'null' ; ?>';
            if(Country == 'null' || (Country == 'Foreign' && showForeign()) || (Country == 'Vietnam' && showVietNam())){
              return true;
            }
            return false;
          }
        </script>
      <?php
    endif;
    ?>
    <!-- // popup dynamic -->
  </body>
</html>