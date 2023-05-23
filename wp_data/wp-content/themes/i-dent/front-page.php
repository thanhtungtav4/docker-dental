<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

  get_header();
  require_once( get_stylesheet_directory() . '/module/main-slider.php' );
?>
  <section class="intro">
    <div class="wrapper">
      <h2 class="ttl-primary">NHA KHOA I-DENT<br class="is-sp"> PHÒNG KHÁM NHA KHOA <br class="is-sp">SỐ 1 TP HỒ CHÍ MINH</h2>
      <?php
        echo do_shortcode('[contact-form-7 id="6507" title="HỖ TRỢ TƯ VẤN 24/7"]');
        require_once( get_stylesheet_directory() . '/module/main-review.php' );
      ?>
    </div>
  </section>
  <?php
    require_once( get_stylesheet_directory() . '/module/main-service.php' );
    require_once( get_stylesheet_directory() . '/module/main-doctors.php' );
  ?>
  <section class="m-prize">
    <div class="wrapper">
      <h2 class="ttl-primary is-white">NHA KHOA I-DENT ĐIỂM ĐẾN TIN CẬY CỦA KHÁCH HÀNG TRONG VÀ NGOÀI NƯỚC</h2>
      <ul class="l-prize">
        <li>
          <div class="vec">
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt="vec_01">
          </div>
          <p>Tiến sĩ – Bác sĩ 10 năm <br class="is-pc">tu nghiệp chuyên sâu <br class="is-pc">tại Pháp </p>
        </li>
        <li>
          <div class="vec">
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt="vec_02">
          </div>
          <p>100% công nghệ, thiết bị và vật liệu <br class="is-pc"> chuyển giao trực tiếp từ <br> châu Âu và Mỹ </p>
        </li>
        <li>
          <div class="vec">
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_04.svg" alt="vec_04">
          </div>
          <p>Hơn 10.000 khách hàng <br class="is-pc"> cấy ghép Implant <br class="is-pc">thành công </p>
        </li>
        <li>
          <div class="vec">
            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_03.svg" alt="vec_03">
          </div>
          <p>Hơn 6,000 ca <br class="is-pc">Thẩm mỹ răng sứ và <br class="is-pc">Niềng răng thẩm mỹ thành công </p>
        </li>
      </ul>
    </div>
  </section>
  <section class="m-reward">
    <div class="wrapper">
      <h2 class="ttl-primary">VINH DANH TOP <br class="is-sp">10 NHA KHOA UY TÍN 2023</h2>
      <div class="m-reward_inner">
        <div class="info">
          <p class="text">Tại lễ trao giải thường niên "Thương hiệu Mạnh Quốc Gia 2023" do Hội Chống hàng giả và Bảo vệ thương hiệu Quốc gia, Trung tâm Chống hàng giả phối hợp tổ chức.<br>Nha khoa I-Dent vinh dự đón nhận giải thưởng "Top 10 Nha khoa uy tín 2023" bên cạnh những thương hiệu dẫn đầu trên cả nước. <br>Để đạt được giải thưởng này, nha khoa cần phải đáp ứng được các tiêu chí khắt khe:</p>
          <ul class="l-reward">
            <li>Chất lượng điều trị theo tiêu chuẩn Pháp.</li>
            <li>Hệ thống công nghệ, thiết bị tối tân từ Châu Âu.</li>
            <li>Đảm bảo tuân thủ quy trình, quy định từ Bộ Y tế.</li>
            <li>Đánh giá tốt từ khách hàng trong và ngoài nước.</li>
          </ul>
        </div>
        <div class="img">
          <div class="img_item"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cup.png" alt="cup"></div>
          <div class="img_item"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img-certificate.png" alt="certificate"></div>
        </div>
      </div>
    </div>
  </section>
  <?php
    require_once( get_stylesheet_directory() . '/module/main-videos.php' );
    require_once( get_stylesheet_directory() . '/module/customer-story.php' );
    require_once( get_stylesheet_directory() . '/module/main-paper.php' );
    require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
  ?>
  <section class="m-news">
    <div class="wrapper">
      <h2 class="ttl-primary">KIẾN THỨC NHA KHOA</h2>
      <ul class="l-news js-news">
        <li class="l-news_item">
          <figure class="images"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/dummy.jpg" alt=""></figure>
          <div class="info"><span class="tag">KIẾN THỨC IMPLANT</span>
            <h3 class="title js-height">KỸ THUẬT IMPLANT TOÀN HÀM ALL-ON-6 CƯỜNG LỰC CAO CẤP BẬC NHẤT</h3>
            <p class="text">Nha khoa I-DENT giới thiệu đến cô chú giải pháp trồng răng toàn hàm cao cấp bậc nhất. Sử dụng 6 trụ Implant Straumann Thụy Sĩ và phục hình hàm toàn sứ</p>
            <div class="m-btn"><a href="#">Xem thêm</a></div>
          </div>
        </li>
        <li class="l-news_item">
          <figure class="images"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/dummy.jpg" alt=""></figure>
          <div class="info"><span class="tag">KIẾN THỨC IMPLANT</span>
            <h3 class="title js-height">KỸ THUẬT IMPLANT TOÀN HÀM ALL-ON-6 CƯỜNG LỰC CAO CẤP BẬC NHẤT</h3>
            <p class="text">Nha khoa I-DENT giới thiệu đến cô chú giải pháp trồng răng toàn hàm cao cấp bậc nhất. Sử dụng 6 trụ Implant Straumann Thụy Sĩ và phục hình hàm toàn sứ</p>
            <div class="m-btn"><a href="#">Xem thêm</a></div>
          </div>
        </li>
        <li class="l-news_item">
          <figure class="images"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/dummy.jpg" alt=""></figure>
          <div class="info"><span class="tag">KIẾN THỨC IMPLANT</span>
            <h3 class="title js-height">TOP 3 LOẠI TRỤ IMPLANT ĐỨC PHỔ BIẾN NHẤT HIỆN NAY</h3>
            <p class="text">Nha khoa I-DENT giới thiệu đến cô chú giải pháp trồng răng toàn hàm cao cấp bậc nhất. Sử dụng 6 trụ Implant Straumann Thụy Sĩ và phục hình hàm toàn sứ</p>
            <div class="m-btn"><a href="#">Xem thêm</a></div>
          </div>
        </li>
      </ul>
    </div>
  </section>
<?php get_footer(); ?>
