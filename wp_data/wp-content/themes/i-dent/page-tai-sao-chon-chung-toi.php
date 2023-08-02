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
?>
  <div class="mv">
    <img class="is-pc" src="/wp-content/uploads/2023/07/banner-tai-sao-chon-chung-toi-pc.webp" alt="">
    <img class="is-sp" src="/wp-content/uploads/2023/07/cau-chuye-n-khach-hang-1.webp" alt="">
  </div>
  <section class="m-noibat">
    <div class="wrapper">
      <h2 class="ttl-primary">NHA KHOA I-DENT ĐIỂM ĐẾN TIN CẬY CỦA KHÁCH HÀNG TRONG VÀ NGOÀI NƯỚC</h2>
      <ul class="l-noibat">
        <li>
          <div class="l-noibat_item">
            <div class="ico">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt="10+">
            </div>
            <div class="nd">
              <p class="text">Tiến sĩ – Bác sĩ 10 năm <br class="is-pc">tu nghiệp chuyên sâu tại Pháp </p>
            </div>
          </div>
        </li>
        <li>
          <div class="l-noibat_item">
            <div class="ico">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt="100%">
            </div>
            <div class="nd">
              <p class="text">100% Công nghệ, trang thiết bị, <br class="is-pc">vật liệu nha khoa chuyển giao trực tiếp từ Mỹ và châu Âu </p>
            </div>
          </div>
        </li>
        <li>
          <div class="l-noibat_item">
            <div class="ico">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_04.svg" alt="10000+">
            </div>
            <div class="nd">
              <p class="text">Hơn 10.000 ca <br class="is-pc">cấy ghép Implant thành công </p>
            </div>
          </div>
        </li>
        <li>
          <div class="l-noibat_item">
            <div class="ico">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_03.svg" alt="6000+">
            </div>
            <div class="nd">
              <p class="text">Hơn 6,000 ca <br class="is-pc">Thẩm mỹ răng sứ và <br class="is-pc">Niềng răng thẩm mỹ thành công </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="m-commit">
    <div class="wrapper">
      <h2 class="m-commit_ttl">
        <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/reason/ttl.svg" alt=" 10 cam kết vàng của nha khoa I-DENT với bệnh nhân">
        <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/reason/sp/ttl.svg" alt=" 10 cam kết vàng của nha khoa I-DENT với bệnh nhân">
      </h2>
      <div class="m-commit_block">
        <div class="img">
          <img class="is-pc" loading="lazy"  src="/wp-content/uploads/2023/07/bac-si-tam-tam-cay-ghep-implant.webp" alt="">
          <img class="is-sp" loading="lazy"  src="/wp-content/uploads/2023/07/bac-si-tam-tam-cay-ghep-implant.webp" alt="">
        </div>
        <ul class="l-commit">
          <li class="l-commit_item">
            <p>
              <span>1.</span>Bác sĩ, nhân viên đặt chữ TÂM lên hàng đầu, đề cao Y ĐỨC và luôn lấy SỨC KHỎE của BỆNH NHÂN làm trung tâm.
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>2.</span>Đội ngũ bác sĩ điều trị có trình độ chuyên môn cao, có đầy đủ chứng chỉ và giấy phép hành nghề do Sở Y tế cấp. Các ca trồng răng Implant được trực tiếp thực hiện bởi Tiến Sĩ Bác sĩ Nguyễn Hiếu Tùng có hơn 10 năm kinh nghiệm tu nghiệp chuyên sâu Implant tại Pháp, thực hiện hơn 7,000 ca Implant thành công. Là một trong số ít các bác sĩ hàng đầu tại Việt Nam về trồng răng Implant.
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>3.</span>Công nghệ nha khoa được chuyển giao trực tiếp từ Pháp. Cam kết: An toàn – Hiệu quả - Thẩm mỹ - Nhanh chóng – Không đau.
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>4.</span>Tất cả trang thiết bị, vật liệu nha khoa nhập khẩu trực tiếp từ Mỹ và Châu Âu đạt chuẩn FDA và CE.
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>5.</span>Hệ thống phòng điều trị vô trùng khép kín đạt chuẩn Bộ Y tế.
            </p>
          </li>
        </ul>
      </div>
      <div class="m-commit_block m-commit_block--is-reverse">
        <div class="img is-pc">
          <img loading="lazy"  src="/wp-content/uploads/2023/07/tu-van-minh-bach-ro-rang.webp" alt="">
        </div>
        <ul class="l-commit">
          <li class="l-commit_item">
            <p>
              <span>6.</span>100% trụ Implant và răng sứ cao cấp chính hãng nhập khẩu từ Thụy Sĩ, Mỹ, Đức, Pháp, Thụy Điển, Hàn Quốc.
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>7.</span>Tại Nha khoa Implant I-Dent có phòng Labo chế tác răng sứ riêng, giúp bệnh nhân rút ngắn được thời gian phục hình, mang lại hình dạng, màu sắc răng đúng theo ý muốn. Đồng thời giúp tiết kiệm chi phí cho bệnh nhân vì không phải trung gian qua Labo ngoài như những nha khoa khác..
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>8.</span>Minh bạch chi phí, lên phương án điều trị và báo tổng chi phi cho bệnh nhân trước khi thực hiện. Cam kết không phát sinh bất kỳ chi phí nào sau khi điều trị.
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>9.</span>Linh hoạt thanh toán. Hỗ trợ thanh toán trả góp qua ngân hàng hoặc trực tiếp tại nha khoa để giảm gánh nặng tài chính cho bệnh nhân. Cam kết hoàn toàn 0% lãi suất hoặc phát sinh bất kỳ chi phí nào.
            </p>
          </li>
          <li class="l-commit_item">
            <p>
              <span>10.</span>Chính sách bảo hành và chăm sóc cho bệnh nhân đến trọn đời. Tư vấn, hỗ trợ bệnh nhân nhiệt tình tất cả các vấn đề phát sinh trong suốt quá trình điều trị. Cam kết không bỏ mặc bệnh nhân sau khi điều trị xong.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="intro">
    <div class="wrapper">
      <h2 class="ttl-primary ttl-primary--is-medium">ĐÀI TRUYỀN HÌNH ĐÁNH GIÁ VỀ NHA KHOA I-DENT</h2>
      <ul class="tv-clip">
        <li>
          <a class="vidplay" href="https://www.youtube.com/watch?v=WXX4qCbyts0">
            <img loading="lazy"  src="/wp-content/uploads/2023/07/vtv3-1-1.jpg-1.webp">
          </a>
          <h3 class="fig-title">Tiến sĩ - Bác sĩ Nguyễn Hiếu Tùng chia sẻ trên VTV3</h3>
        </li>
        <li>
          <a class="vidplay" href="https://www.youtube.com/watch?v=T5z6N99zaZc">
            <img loading="lazy"  src="/wp-content/uploads/2023/07/VTV2.webp">
          </a>
          <h3 class="fig-title">Tiến sĩ - Bác sĩ Nguyễn Hiếu Tùng chia sẻ trên VTV2</h3>
        </li>
      </ul>
    </div>
  </section>
  <?php
    require_once( get_stylesheet_directory() . '/module/customer-story.php' );
    require_once( get_stylesheet_directory() . '/module/main-paper.php' );
  ?>
<?php
 require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
 get_footer();
?>
