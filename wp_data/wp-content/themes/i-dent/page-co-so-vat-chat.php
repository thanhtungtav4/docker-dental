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
    <img class="is-pc"   src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/bnr.jpg.webp" alt="">
    <img class="is-sp"   src="/wp-content/uploads/2023/07/banner-co-so-vat-chat-mobile.webp" alt="">
    <div class="mv_wrap">
      <div class="wrapper">
        <div class="mv_inner">
          <h1 class="ttx">CƠ SỞ VẬT CHẤT</h1>
          <strong>
            <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/txt02.svg" alt="HIỆN ĐẠI">
          </strong>
          <h2 class="ttl">
            <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/bnr_title.svg" alt="TRANG THIẾT BỊ NHẬP KHẨU TỪ CHÂU ÂU 100%">
          </h2>
          <div class="btn">
            <a class="trans popup-with-form" href="#popup-dlh" data-message="đặt lịch hẹn (banner)">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/btn.svg" alt="ĐẶT LỊCH HẸN">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="doc-intro">
      <p class="text">Với hệ thống cơ sở vật chất, trang thiết bị hiện đại, được nhập khẩu trực tiếp 100% từ châu Âu đã giúp các bác sĩ I-DENT điều trị cho bệnh nhân chính xác và nhanh hơn. Đây là lý do hàng năm, có hàng nghìn bệnh nhân trong và ngoài nước lựa chọn Nha khoa I-DENT để trồng răng Implant, bọc sứ thẩm mỹ, điều trị bệnh lý răng miệng</p>
    </div>
    <?php do_shortcode('[ez-toc]')?>
    <div class="m-basis">
      <div class="m-basis_block">
        <h2 class="ttl-secondary">1.TRANG THIẾT BỊ MÁY MÓC HIỆN ĐẠI TẠI NHA KHOA</h2>
        <div class="block_inner">
          <h3 class="ttl-bl">1.1 Máy CT Cone beam 3D - Chẩn đoán hình ảnh trên không gian 3 chiều</h3>
          <p class="text">Tại Nha khoa I-DENT được trang bị hệ thống máy chụp phim hiện đại nhất hiện nay – Máy CT Cone beam 3D. Đây là hệ thống X-quang cho hình ảnh không gian 3 chiều, giúp bác sĩ biết được chính xác bề rộng và bề sâu của xương. <br>
            <br>Phim X-quang được chụp bằng hệ thống Cone beam còn cho thấy rõ sự tương quan giữa răng hàm dưới với dây thần kinh, sự tương quan giữa răng hàm trên với xoang hàm, kiểm tra được các sang thương sâu bên trong. <br>
            <br>Đặc biệt khi tiến hành cấy ghép Implant, với việc sử dụng máy CT Cone beam, bác sĩ tại I-DENT sẽ đánh giá chính xác về mức độ tiêu xương cũng như độ xốp của xương để đưa ra phương án điều trị thích hợp và lựa chọn kích thước Implant phù hợp.
          </p>
          <div class="gr-img gr01">
            <img class="is-sp" loading="lazy"  src="/wp-content/uploads/2023/07/co-so-vat-chat-tai-nha-khoa-ident.webp" alt="">
            <div class="big-img is-pc">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_01.jpg.webp" alt="">
            </div>
            <div class="side-img is-pc">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_02.jpg.webp" alt="">
            </div>
            <div class="small-img is-pc">
              <div class="img">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_03.jpg.webp" alt="">
              </div>
              <div class="img">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_04.jpg.webp" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="block_inner">
          <h3 class="ttl-bl">1.2 Hệ thống thiết bị nha khoa hiện đại</h3>
          <p class="text">Bên cạnh Máy chụp CT hiện đại bậc nhất, Nha khoa I-DENT còn sở hữu các trang thiết bị hiện đại, nhập khẩu hoàn toàn từ Châu Âu, đảm bảo cho quy trình thăm khám và điều trị diễn ra an toàn – hiệu quả. Hệ thống thiết bị bao gồm: Máy phẫu thuật Implant; Công nghệ CAD/CAM; Máy siêu âm Piezotome; Máy cạo vôi siêu âm; Tẩy trắng răng với công nghệ Lumacool; Máy trám răng thẩm mỹ Soft – start; Máy chữa tủy siêu âm; Máy hấp vô trùng Autoclave…</p>
          <div class="gr-img gr02">
            <div class="big-img">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_05.jpg.webp" alt="">
            </div>
            <div class="big-img">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_06.jpg.webp" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="m-basis_block">
        <h2 class="ttl-secondary">2.PHÒNG KHÁM VÔ TRÙNG THEO TIÊU CHUẨN BỘ Y TẾ</h2>
        <div class="block_inner">
          <h3 class="ttl-bl">2.1 Phòng điều trị riêng biệt cho từng bệnh nhân</h3>
          <p class="text">Nha khoa I-DENT tự hào là một trong những nha khoa uy tín, đạt được những tiêu chuẩn nghiêm ngặt của một phòng khám chất lượng cao về cơ sở vật chất, quy trình kiểm soát vô khuẩn, quy trình điều trị… Đặc biệt, I-DENT xây dựng một hệ thống phòng điều trị rộng rãi, được trang bị hệ thống thanh trùng không khí và hệ thống máy điều hoà có bộ lọc không khí, vi khuẩn, virus… đem lại luồng không khí tươi mát và sạch sẽ.Tất cả phòng điều trị của nha khoa đều có đầy đủ máy móc, trang thiết bị hiện đại và nằm hoàn toàn riêng biệt, nhằm thực hiện tốt nhất mỗi case điều trị. Nỗ lực này nhằm đem lại sự an toàn tuyệt đối cũng như đảm bảo một kết quả điều trị tốt nhất cho khách hàng khi đến với Nha khoa I-DENT.</p>
          <div class="gr-img gr02">
            <div class="big-img">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_07.jpg.webp" alt="">
            </div>
            <div class="big-img is-pc">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_08.jpg.webp" alt="">
            </div>
          </div>
          <h3 class="ttl-bl">2.2 Phòng phẫu thuật</h3>
          <p class="text">I-DENT là nha khoa chuyên sâu về cấy ghép răng Implant, được trang bị tất cả những máy móc hiện đại nhất của chuyên ngành cấy ghép nha khoa như: máy cấy Implant, máy siêu âm phẫu thuật, máy chụp phim kỹ thuật số, phần mềm 3D hỗ trợ cấy ghép, cùng nhiều thiết bị chuyên dụng khác.Phòng cấy ghép của nha khoa hoàn toàn riêng biệt, được trang bị bình oxy, máy theo dõi nhịp tim, máy hút… và hệ thống sát khuẩn bằng tia cực tím, đảm bảo vô trùng tuyệt đối cho phòng phẫu thuật. Tất cả dụng cụ đều được xử lý tiệt trùng nghiêm ngặt, với quy trình vô trùng khép kín. Tại Nha khoa I-DENT, tất cả các ca cấy ghép Implant đều được tiến hành trong điều kiện vô trùng tiêu chuẩn.</p>
          <div class="gr-img gr03">
            <div class="big-img">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_09.jpg.webp" alt="">
            </div>
            <div class="big-img small is-pc">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_10.jpg.webp" alt="">
            </div>
          </div>
          <h3 class="ttl-bl">2.3 Phòng vô trùng dụng cụ</h3>
          <p class="text">Nha khoa I-DENT đặc biệt coi trọng vấn đề vô trùng, để tránh sự lây nhiễm và đảm bảo an toàn tuyệt đối cho khách hàng. Phòng vô trùng dụng cụ tại I-DENT được thiết kế độc lập, riêng biệt và được trang bị đầy đủ các thiết bị vô trùng cao cấp theo đúng tiêu chuẩn FDA như: dung dịch sát trùng, lò hấp tiệt trùng tự động Auto Clave, máy đóng gói tiệt trùng, tủ đèn chiếu tia cực tím để lưu trữ và bảo quản dụng cụ trong trạng thái vô trùng…Với một hệ thống quy trình vô trùng đúng chuẩn, nghiêm ngặt và khép kín, Nha Khoa I-DENT đảm bảo an toàn tối đa cho bệnh nhân trong suốt quá trình điều trị.</p>
          <div class="image">
            <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_11.jpg.webp" alt="">
          </div>
          <div class="image" style="text-align: center;">
            <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_12.png.webp" alt="">
          </div>
        </div>
      </div>
      <div class="m-basis_block">
        <h2 class="ttl-secondary">3.PHÒNG LABO HIỆN ĐẠI NGAY TẠI NHA KHOA</h2>
        <div class="block_inner">
          <p class="text">I-DENT là một trong số ít nha khoa tại TP HCM có thế mạnh sở hữu phòng LABO riêng, được trang bị hệ thống máy móc hiện đại. <br>Đội ngũ chuyên viên kỹ thuật lành nghề, giàu kinh nghiệm và luôn tận tâm trong công việc, nhằm mang đến những sản phẩm răng đẹp nhất cho khách hàng. <br>
            <br>Phòng LABO Nha khoa I-DENT sử dụng các trang bị các thiết bị máy móc tối tân cùng các vật liệu nha khoa nhập khẩu chính hãng từ các quốc gia Đức, Úc, Pháp… <br>
            <br>Gồm: Lò nung sườn Dekema (Germany), Lò nướng sứ Ivoclar P310 (Austria), Máy đúc cao tầng Bego (Germany), Phần mềm thiết kế Dental system (3Shape-Denmark), Máy Scan 3Shape E2 (Denmark), Máy Milling CORITEC 350i Pro (Germany)… Cho ra đời được những sản phẩm chính xác, các loại răng chất lượng, đạt chuẩn và phù hợp với từng khách hàng. <br>
            <br>Những sản phẩm của phòng LABO nha khoa được đưa vào sử dụng trong các quá trình điều trị như: phục hình răng sứ trên Implant, răng sứ thẩm mỹ, hàm tháo lắp… đảm bảo độ bền cao, rút ngắn thời gian và tiết kiệm chi phí cho khách hàng.
          </p>
          <div class="image">
            <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/basis/img_12.jpg.webp" alt="">
          </div>
        </div>
      </div>
            <div class="modal-contact mfp-hide" id="popup-dlh">
        <?php echo do_shortcode('[contact-form-7 id="8776"]') ?>
      </div>

    </div>
  </div>
<?php
require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
get_footer(); ?>
