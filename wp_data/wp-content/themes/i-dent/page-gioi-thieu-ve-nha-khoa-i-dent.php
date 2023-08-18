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
  <div class="page-bnr">
    <div class="wrapper">
      <div class="page-bnr_inner">
        <div class="left">
          <h2 class="ttl-primary is-red">NHA KHOA I-DENT</h2><strong><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/ttl.svg" alt="Ươm mầm răng mới"></strong>
          <p class="text">“Nha khoa Implant I-DENT không chỉ mang đến cho bệnh nhân một hàm răng mới, đảm bảo chức năng ăn nhai tốt và tính thẩm mỹ cao. Chúng tôi hướng đến sức khỏe lâu dài và sự hài lòng tuyệt đối của từng bệnh nhân, qua đó để góp phần tạo kiến tạo nên những nụ cười hạnh phúc trọn vẹn cho cộng đồng.”</p>
        </div>
        <div class="right"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/img_doc.png" alt=""></div>
      </div>
    </div>
  </div>
  <div class="m-about">
    <div class="wrapper">
      <div class="m-about_block">
        <h2 class="ttl-secondary">TẦM NHÌN</h2>
        <p class="text">“Trở thành sự lựa chọn hàng đầu về niềm tin, uy tín, chất lượng của bệnh nhân khi trồng răng Implant và dịch vụ nha khoa tại Việt Nam.”</p>
      </div>
      <div class="m-about_block">
        <h2 class="ttl-secondary">SỨ MỆNH</h2>
        <p class="text">Nha khoa Implant I-DENT không chỉ mang đến cho bệnh nhân một hàm răng mới, đảm bảo chức năng ăn nhai tốt và tính thẩm mỹ cao. Chúng tôi hướng đến sức khỏe lâu dài và sự hài lòng tuyệt đối cho từng bệnh nhân, qua đó để góp phần tạo kiến tạo nên những nụ cười hạnh phúc trọn vẹn cho cộng đồng.</p>
      </div>
      <div class="m-about_block">
        <h2 class="ttl-secondary">GIÁ TRỊ CỐT LÕI</h2>
        <div class="box-nd">
          <h3 class="title">ĐẶT CHỮ "TÂM" LÊN HÀNG ĐẦU</h3>
          <div class="box-nd_inner">
            <p class="text">Luôn đề cao Y đức trong quá trình điều trị. Đảm bảo an toàn sức khỏe và mang lại kết quả điều trị tốt nhất cho từng bệnh nhân.Xây dựng môi trường làm việc chuyên nghiệp và nhân văn cho đội ngũ Bác sĩ, phụ tá, nhân viên… đang làm việc tại I-Dent</p>
          </div>
        </div>
        <ul class="l-slogan">
          <li class="l-slogan_item">
            <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/ico_zoom.svg" alt="" style="left: 9px;position: relative;top: 7px;"></div>
            <div class="info"><strong>MINH BẠCH</strong>
              <p class="text">Đảm bảo sự minh bạch tất cả thông tin trong quá trình tư vấn và điều trị cho bệnh nhân.</p>
            </div>
          </li>
          <li class="l-slogan_item">
            <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/ico_shield.svg" alt=""></div>
            <div class="info"><strong>BẢO MẬT</strong>
              <p class="text">Cam kết bảo mật tuyệt đối tất cả các thông tin cá nhân của bệnh nhân điều trị tại nha khoa.</p>
            </div>
          </li>
          <li class="l-slogan_item">
            <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/ico_judge.svg" alt=""></div>
            <div class="info"><strong>TUÂN THỦ</strong>
              <p class="text">Tuân thủ nghiêm chỉnh các quy định của pháp luật, đáp ứng đầy đủ tất cả các quy chuẩn của Bộ Y tế. Đồng thời thực hiện trách nhiệm xã hội đối với cộng đồng.</p>
            </div>
          </li>
          <li class="l-slogan_item">
            <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/ico_hand.svg" alt=""></div>
            <div class="info"><strong>TÔN TRỌNG</strong>
              <p class="text">Luôn lắng nghe để giải đáp tất cả các thắc mắc, nhu cầu của bệnh nhân. Xây dựng mối quan hệ dựa trên sự tôn trọng bệnh nhân, nhân viên, đối tác, cộng đồng.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="m-about_block m-about_block--is-col">
        <div class="left">
          <h2 class="ttl-secondary">TRIẾT LÝ KINH DOANH CỦA I-DENT</h2>
          <p class="text">Nha khoa I-DENT hoạt động dựa trên nguyên tắc lấy bệnh nhân làm trung tâm. Mọi Bác sĩ, phụ tá đến từng nhân viên luôn chủ động và tận tâm trong quá trình chăm sóc bệnh nhân.<br>Nha khoa I-DENT luôn cải thiện chất lượng dịch vụ mỗi ngày để mang đến sự hài lòng tuyệt đối cho tất cả bệnh nhân.</p>
        </div>
        <div class="right"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about/vector_01.svg" alt=""></div>
      </div>
      <div class="m-about_block">
        <h2 class="ttl-secondary">CÂU CHUYỆN CỦA I-DENT</h2>
        <p class="text">Với niềm đam mê và sự nhiệt huyết dành cho lĩnh vực Nha khoa, ngay từ khi còn theo học tại ĐH Y Dược TP HCM, Tiến sĩ – Bác sĩ Nguyễn Hiếu Tùng đã thể hiện xuất sắc trong quá trình học tập và dành được học bổng nghiên cứu sinh tại Đại Học Aix- Marseille, nước Pháp.<br>Nha khoa I-DENT luôn cải thiện chất lượng dịch vụ mỗi ngày để mang đến sự hài lòng tuyệt đối cho tất cả bệnh nhân.</p>
        <p class="text">Trong hơn 10 năm tu nghiệp tại Pháp và được tiếp cận với những công nghệ hiện đại nhất, Bác sĩ Nguyễn Hiếu Tùng cảm thấy lo ngại trước những kỹ thuật nha khoa đã quá cũ và không bắt kịp sự tiến bộ của nền Nha khoa thế giới tại nước ta. Đồng thời, tại Việt Nam cũng thiếu đi những địa chỉ nha khoa tin cậy và các phương án điều trị thích hợp cho người dân.</p>
        <p class="text">Việc thiếu đi các thông tin kiến thức được phổ biến rộng rãi là nguyên nhân chính tạo nên sự thờ ơ và không quan tâm đúng mức đến sức khỏe răng miệng của phần lớn người dân trong nước, dẫn đầu những hậu quả nghiêm trọng về sức khỏe lâu dài, trong đó có chính gia đình của Bác sĩ Tùng.</p>
        <p class="text">Trở thành 1 trong những Tiến Sĩ Y Khoa trẻ nhất Việt Nam sau khi bảo vệ thành công luận án tiến sĩ tại Pháp, với rất nhiều cơ hội để thành công tại nước ngoài. Tuy nhiên, bằng tình yêu quê hương, nhiệt huyết và mong muốn đóng góp phát triển cho ngành Nha khoa tại nước nhà, đặc biệt là trong lĩnh vực Cấy ghép Implant, Bác sĩ Tùng đã quyết định từ bỏ tất cả để quay về Việt Nam và lập nghiệp.</p>
        <p class="text">Với những trăn trở và mong muốn đó của Bác sĩ Tùng đã trở thành kim chỉ nam để thành lập và phát triển Nha khoa I-DENT. Thành lập năm 2014, sau hơn 9 năm đi vào hoạt động, với sự nỗ lực không ngừng của Tiến sĩ – Bác sĩ Nguyễn Hiếu Tùng cùng với đội ngũ cộng sự Bác sĩ, phụ tá, nhân viên tại nha khoa I-DENT đã thực hiện thành công hơn 10,000 ca Implant, qua đó kiến tạo nụ cười hạnh phúc cho hàng ngàn bệnh nhân.</p>
        <p class="text">Đưa I-DENT trở thành một địa chỉ nha khoa uy tín – chất lượng tại TP HCM, là lựa chọn hàng đầu của các bệnh nhân trong và ngoài nước.</p>
      </div>
    </div>
  </div>
<?php
  require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
  get_footer();
?>
