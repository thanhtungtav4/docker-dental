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
  <div class="breadcrumbs">
    <div class="wrapper">
      <ul class="l-breadcrumbs">
        <li>
          <a class="trans" href="/">Trang chủ</a>
        </li>
        <li>
          <span>Phác đồ điều trị mẫu</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="m-phacdo">
    <div class="wrapper">
      <div class="m-phacdo_inner">
        <div class="heading">
          <h2 class="ttl-primary ttl-primary--is-medium">PHÁC ĐỒ ĐIỀU TRỊ MẪU TẠI NHA KHOA I-DENT</h2>
          <span class="time">24.04.2023</span>
        </div>
        <div class="doc-intro">
          <p class="text"><b>Trồng răng implant</b> là công việc quan trọng, ảnh hướng đến ăn nhai, thẩm mỹ và chất lượng cuộc sống của cả 1 đời người. <br>Đối với <b>kiều bào nước ngoài</b> lại càng nên cân nhắc thận trọng vì tốn rất nhiều thời gian và chi phí đi lại. <br>Vì vậy trước khi quyết định về nước hoặc chọn cơ sở y tế nào đó để làm răng. Thay vì chỉ xem những thông tin chung trên mạng bệnh nhân nên biết rõ 5 <b>thông tin cụ thể sau</b> : </p>
          <ul class="l-dots">
            <li>Tình trạng răng miệng hiện tại của bản thân</li>
            <li>Phương án điều trị dành riêng cho mình</li>
            <li>Thời gian điều trị</li>
            <li>Tổng chi phí điều trị</li>
            <li>Ai là người sẽ thực hiện cấy implant cho mình</li>
          </ul>
          <p class="text">Để giúp bệnh nhân có đầy đủ thông tin trước khi về nước, Nha Khoa I-Dent đã mở ra <b>dịch vụ lên kế hoạch điều trị online miễn phí</b>, thiết kế riêng cho từng bệnh nhân. Cô chú anh chị có thể dùng tham khảo hoặc đối chiếu giữa nhiều nha khoa khác nhau để có sự lựa chọn và quyết định tốt nhất.</p>
        </div>
        <div class="note">
          <ul class="l-check">
            <li>100% ca cấy ghép được thực hiện bởi BS-TS Nguyễn Hiếu Tùng</li>
          </ul>
        </div>
      </div>
      <section class="m-steps">
        <h2 class="ttl-primary ttl-primary--is-medium">HƯỚNG DẪN NHẬN PHÁC ĐỒ ĐIỀU TRỊ MIỄN PHÍ TẠI NHA KHOA I-DENT</h2>
        <ul class="l-steps">
          <li class="l-steps_block">
            <h3 class="title">Bước 1: Đăng ký thông tin theo Form mẫu</h3>
            <?php echo do_shortcode('[contact-form-7 id="8797"]'); ?>
          </li>
          <li class="l-steps_block">
            <h3 class="title">Bước 2: Nhận thông tin khách hàng và lên sơ đồ răng</h3>
            <p class="text">Sau khi nhận được đăng ký từ bệnh nhân. Nha Khoa I-Dent sẽ gọi lại tư vấn và <b>thu thập những thông tin cần thiết</b>, bao gồm tình trạng răng miệng, tiền sử bệnh án và film chụp X-Quang nếu có. <br>Sau đó lập sơ đồ răng riêng biệt cho bệnh nhân, từ đó xác định vấn đề và lên phương án điều trị. </p>
            <figure class="img">
              <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/img_01.png" alt="">
              <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/sp/img_01.png" alt="">
            </figure>
            <div class="box-chuthich is-sp">
              <div class="inner">
                <div class="row">
                  <div class="row-left">
                    <span>1</span>
                  </div>
                  <div class="row-right">
                    <p>Vị trí răng bị mất</p>
                  </div>
                </div>
                <div class="row">
                  <div class="row-left">
                    <span>2</span>
                  </div>
                  <div class="row-right">
                    <p>Vị trí răng sâu, chỉ còn chân răng</p>
                  </div>
                </div>
                <div class="row">
                  <div class="row-left">
                    <span>3</span>
                    <span>5</span>
                  </div>
                  <div class="row-right">
                    <p>Cầu răng sứ khách hàng đã làm trước đó</p>
                  </div>
                </div>
                <div class="row">
                  <div class="row-left">
                    <span>4</span>
                  </div>
                  <div class="row-right">
                    <p>Đánh dấu số răng</p>
                  </div>
                </div>
              </div>
            </div>
            <p class="text">Dựa vào tình trạng răng miệng cũng như mong muốn và khả năng tài chính của bệnh nhân, I-Dent sẽ <b>lập sơ đồ điều trị</b> tương ứng bao gồm vị trí trồng trụ Implant và phương pháp cụ thể (cấy trụ lẻ, hoặc toàn hàm <br>All on 4, All on 5, All on 6....) Loại răng sứ và loại trụ Implant. </p>
            <figure class="img">
              <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/img_02.png" alt="">
              <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/sp/img_02.png" alt="">
            </figure>
            <div class="box-chuthich is-sp">
              <div class="inner">
                <div class="row">
                  <div class="row-left">
                    <span>1</span>
                  </div>
                  <div class="row-right">
                    <p>Cầu răng sứ</p>
                  </div>
                </div>
                <div class="row">
                  <div class="row-left">
                    <span>2</span>
                  </div>
                  <div class="row-right">
                    <p>Mão răng sứ đơn</p>
                  </div>
                </div>
                <div class="row">
                  <div class="row-left">
                    <span>3</span>
                  </div>
                  <div class="row-right">
                    <p>Vị trí trồng trụ Implant</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="l-steps_block">
            <h3 class="title">Bước 3: Tính toán chi phí trọn gói</h3>
            <p class="text">Dựa vào sơ đồ điều trị, Nha Khoa I-Dent sẽ <b>liệt kê tất cả dịch vụ cần thiết</b> cho từng vị trí răng và đơn giá tương ứng. <br>Toàn bộ dịch vụ được liệt kê như bảng bên dưới </p>
            <figure class="img">
              <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/img_03.png" alt="">
              <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/sp/img_03.png" alt="">
            </figure>
          </li>
          <li class="l-steps_block">
            <h3 class="title">Bước 4: Xác định thời gian điều trị và phương án thanh toán</h3>
            <p class="text">Thời gian có thể phục hình sứ được đưa ra rõ ràng và chi tiết. Kèm theo là <b>phương án thanh toán</b>.</p>
            <figure class="img">
              <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/img_05.png" alt="">
              <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/sp/img_04.png" alt="">
            </figure>
          </li>
        </ul>
        <div class="warning">
          <span class="ttl">Lưu ý</span>
          <p class="text">Cô chú anh chị sẽ nhận được phiếu kế hoạch điều trị đầy đủ như hình bên dưới và <b>không bắt buộc điều trị tại Nha Khoa I-Dent</b> <br>Hãy sữ dụng như tài liệu tham khảo để loại bỏ những nha khoa kém chất lượng và so sánh giữa nhiều nha khoa khác nhau để có sự lựa chọn phù hợp. <br>
            <br>
            <span>Phác đồ điều trị online chỉ dùng tham khảo với <b>độ chính xác > 80%</b>. Để tiến hành điều trị cần được thăm khám trực tiếp, chụp film 3D, xét nghiệm. Nhằm đảm bảo độ chính xác tuyệt đối.</span>
          </p>
          <div class="img is-pc">
            <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dieutri/img_04.png" alt="">
          </div>
          <div class="btn-download is-sp">
            <a href="#">TẢI KẾ HOẠCH ĐIỀU TRỊ</a>
          </div>
        </div>
        <?php
        require_once( get_stylesheet_directory() . '/module/box-information.php' );
        ?>
      </section>
    </div>
  </div>
<?php
get_footer(); ?>
