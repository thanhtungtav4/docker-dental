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
            <li><a class="trans" href="#">Trang chủ</a></li>
            <li><span>Câu chuyện về nước làm răng của Việt Kiều</span></li>
          </ul>
        </div>
      </div>
      <div class="m-phacdo m-loairang">
        <div class="wrapper">
          <div class="m-phacdo_inner">
            <div class="heading">
              <h2 class="ttl-primary ttl-primary--is-medium">CÂU CHUYỆN VỀ NƯỚC LÀM RĂNG CỦA VIỆT KIỀU</h2><span class="time">04.05.2023</span>
            </div>
            <p class="text intro-text"><strong>Về nước trồng răng</strong> hay bọc răng sứ thẩm mỹ hiện đang là lựa chọn phổ biến của nhiều Việt kiều. Tuy nhiên, do khoảng cách địa lý xa xôi và thời gian hạn hẹp khiến cho các khách hàng Việt kiều gặp không ít khó khăn khi về nước làm răng.</p>
          </div>
          <section class="m-cons">
            <div class="wrapper">
              <h3 class="ttl-primary ttl-primary--is-medium">VIỆT KIỀU VỀ NƯỚC LÀM RĂNG GẶP NHỮNG KHÓ KHĂN GÌ?</h3>
              <ul class="l-cons">
                <li class="l-cons_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_hard_01.svg" alt="Hạn chế về thời gian"></div>
                  <div class="info">
                    <h4 class="ttl-bl">Hạn chế về thời gian</h4>
                    <p class="text">Với khách hàng Việt kiều, thời gian ở lại Việt Nam không nhiều và thường sẽ kèm theo kế hoạch thăm người thân, du lịch, công việc… <br>Do đó, việc sắp xếp thời gian phù hợp để làm răng thường gặp nhiều khó khăn. </p>
                  </div>
                </li>
                <li class="l-cons_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_hard_02.svg" alt="Giá cả thiếu minh bạch"></div>
                  <div class="info">
                    <h4 class="ttl-bl">Giá cả thiếu minh bạch</h4>
                    <p class="text">Bệnh nhân thường muốn biết trước chi phí để chuẩn bị tài chính đầy đủ trước khi về nước. Nhưng tình trạng nhiều nha khoa không công khai minh bạch về giá cả. Dẫn đến trường hợp về nước điều trị lại bị phát sinh thêm chi phí  gây mất lòng tin và hoan mang.</p>
                  </div>
                </li>
                <li class="l-cons_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_hard_03.svg" alt=" Lo ngại về tay nghề bác sĩ trong nước"></div>
                  <div class="info">
                    <h4 class="ttl-bl"> Lo ngại về tay nghề bác sĩ trong nước</h4>
                    <p class="text">Trồng răng implant là kỹ thuật phức tạp, tay nghề bác sĩ kém sẽ để lại rất nhiều hệ lụy nghiêm trọng. <br>Các nha khoa cũng không tiết lộ nhiều thông tin về bác sĩ. Không biết BS có bằng cấp, chứng chỉ như thế nào, chuyên môn ra sao, bao nhiêu năm kinh nghiệm…  khiến bệnh nhân việt kiều rất đắng đo.</p>
                  </div>
                </li>
                <li class="l-cons_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_hard_04.svg" alt="Lựa chọn cơ sở uy tín"></div>
                  <div class="info">
                    <h4 class="ttl-bl">Lựa chọn cơ sở uy tín</h4>
                    <p class="text">Hiện nay có hàng nghìn nha khoa lớn nhỏ khác nhau trên khắp cả nước, Không phải phòng khám nào cũng có năng lực điều trị cao, sử dụng công nghệ tiên tiến, uy tín thật sự.<br>Điều này khiến cho khách Việt kiều hoang mang, lo lắng, không biết phải lựa chọn nha khoa nào mới chất lượng và đáp ứng được nhu cầu của bản thân.</p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="m-trust">
            <div class="wrapper">
              <h3 class="ttl-primary ttl-primary--is-medium">ĐIỀU GÌ KHIẾN NHA KHOA I-DENT TRỞ THÀNH ĐIỂM ĐẾN LÀM RĂNG TIN CẬY SUỐT HƠN 10 NĂM QUA</h3>
              <ul class="l-trust">
                <li class="l-trust_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_01.png" alt=""></div>
                  <div class="info">
                    <h4 class="ttl-bl">THẤU HIỂU KHÁCH HÀNG</h4>
                    <p class="text js-height">Hiểu rõ những đắn đo của bệnh nhân việt kiều. Nha khoa I-Dent đã cho ra dịch vụ lập phác đồ điều trị online cụ thể bao gồm những thông tin quan trọng gồm: Tình trạng của bệnh nhân, Phương án điều trị (vị trí cấy, loại trụ, phương pháp cây), Thời gian thực hiện, Người thực hiện, Giá trọn gói và Phương án thanh toán giúp bệnh nhân chủ động 100% khi quyết định về nước.</p>
                    <div class="m-btn"><a href="#">XEM KẾ HOẠCH ĐIỀU TRỊ</a></div>
                  </div>
                </li>
                <li class="l-trust_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_02.png" alt=""></div>
                  <div class="info">
                    <h4 class="ttl-bl">ĐỘI NGŨ CHUYÊN SÂU</h4>
                    <p class="text js-height">Đứng đầu là bác sĩ Tiến Sĩ Nguyễn Hiếu Tùng 10 năm tu nghiệp tại Pháp cùng các bác sĩ khác 100% đều là các bác sĩ từ CKI ( Thạc sĩ y khoa ) Trở lên. Toàn bộ thông tin bác sĩ đều được công khai trên Website</p>
                    <div class="m-btn"><a href="#">XEM HỒ SƠ ĐỘI NGŨ BÁC SĨ</a></div>
                  </div>
                </li>
                <li class="l-trust_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_03.png" alt=""></div>
                  <div class="info">
                    <h4 class="ttl-bl">MINH BẠCH GIÁ CẢ</h4>
                    <p class="text js-height">Toàn bộ thông tin về chi phí được minh bạch trên Website. Nha khoa I-Dent niêm yết giá trọn gói, cam kết không phát sinh bất kỳ chi phí nào khác.</p>
                  </div>
                </li>
                <li class="l-trust_item">
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/story/img_04.png" alt=""></div>
                  <div class="info">
                    <h4 class="ttl-bl">CÔNG NGHỆ VƯỢT TRỘI</h4>
                    <p class="text js-height">Nha Khoa I-Dent sử dụng công nghệ cấy Implant Pháp. An toàn tuyệt đối, nhanh chóng và không đau. Sử dụng thiết bị hoàn toàn nhập từ Châu Âu. Được bộ y tế cấp phép hoạt động. Và 100% trụ implant cao cấp.</p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </div>
      <section class="m-reward is-short">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">VINH DANH TOP <br class="is-sp">10 NHA KHOA UY TÍN 2023</h2>
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
              <div class="img_item"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cup.png" alt=""></div>
              <div class="img_item"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img-certificate.png" alt=""></div>
            </div>
          </div>
        </div>
      </section>
      <section class="m-prize is-short">
        <div class="wrapper">
          <ul class="l-prize">
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt=""></div>
              <p>Hơn 10 năm<br> kinh nghiệm<br> trong lĩnh vực<br> Implant</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_04.svg" alt=""></div>
              <p>Hơn 10.000<br> khách hàng Việt<br> kiều và trong<br> nước tin tưởng</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt=""></div>
              <p>100% công nghệ,<br> thiết bị và vật liệu<br> chuyển giao trực<br> tiếp từ Âu Mỹ</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt=""></div>
              <p>100% Bác sĩ<br> trình độ từ<br> chuyên khoa<br> 1 trở lên</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-video is-short">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">BỆNH NHÂN VIỆT KIỀU ĐÃ CẤY IMPLANT TẠI NHA KHOA IDENT</h2>
          <div class="m-video_inner">
            <div class="m-video_main"><a class="vidplay" href="https://www.youtube.com/watch?v=X0fkB-SaOJQ"><img src="/wp-content/uploads/2023/06/TU-PHOI.jpg.webp"></a></div>
            <ul class="l-video">
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=ZkUbDBFN42s"><img src="/wp-content/uploads/2023/06/HUNG-MAI.jpg.webp"></a>
                <div class="video-info">
                  <h3 class="title">CHÚ HÙNG MAI</h3><span class="view">VIỆT KIỀU MỸ</span>
                </div>
              </li>
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=zoQWvgDECP0"><img src="/wp-content/uploads/2023/06/MY-NHI-TAT.jpg.webp"></a>
                <div class="video-info">
                  <h3 class="title">CÔ MỸ NHI TẤT</h3><span class="view">VIỆT KIỀU ÚC</span>
                </div>
              </li>
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=9vI_x7J-yAY"><img src="/wp-content/uploads/2023/06/TAN-DUNG.jpg.webp"></a>
                <div class="video-info">
                  <h3 class="title">ANH NGUYỄN TẤN DŨNG</h3><span class="view">VIỆT KIỀU MỸ</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="wrapper">
          <?php require_once( get_stylesheet_directory() . '/module/box-information.php' ); ?>
        </div>

      </section>
      
<?php get_footer(); ?>
