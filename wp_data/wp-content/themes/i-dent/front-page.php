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
      <div id="contact-menu">
        <ul>
          <li id="menu-datlich"><a class="form-popup" id="ssldatlich" href="#" rel="nofollow" title="Đặt lịch hẹn"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-dlh.png" alt=""></a><a class="form-popup" id="ssldatlich" href="#" rel="nofollow" title="Đặt lịch hẹn">Đặt lịch hẹn</a></li>
          <li id="menu-mesenger"><a href="https://www.facebook.com/NhaKhoaIDent" rel="nofollow" target="_blank" title="Messenger"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-mess.png" alt=""></a><a href="https://www.facebook.com/messages/t/NhaKhoaIDent" rel="nofollow" target="_blank" title="Messenger">Messege</a></li>
          <li id="menu-bando"><a href="https://zalo.me/4299371072036201150" title="zalo" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-zalo.png" alt="zalo"></a><a href="https://zalo.me/4299371072036201150" title="zalo" target="_blank">Zalo</a></li>
          <li id="menu-bando"><a href="/lien-he" rel="nofollow" target="_blank" title="Địa chỉ"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-location.png" alt="Địa chỉ"></a><a href="/lien-he" rel="nofollow" target="_blank" title="Địa chỉ">Địa chỉ</a></li>
        </ul>
      </div>
      <div class="mv-top js-mv">
        <div class="mv-top_slide"><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/top_slide_01.jpg" alt=""></a></div>
        <div class="mv-top_slide"><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/top_slide_02.jpg" alt=""></a></div>
      </div>
      <section class="intro">
        <div class="wrapper">
          <h2 class="ttl-primary">NHA KHOA I-DENT   PHÒNG KHÁM NHA KHOA SỐ 1 TP HỒ CHÍ MINH</h2>
          <form class="form-support" action=""><span class="title">HỖ TRỢ TƯ VẤN 24/7</span>
            <input class="m-input" type="text" placeholder="Họ và tên">
            <input class="m-input" type="text" placeholder="Số điện thoại">
            <button class="btn-sub trans" type="submit">GỬI</button>
          </form>
          <ul class="tv-clip">
            <li><a class="vidplay" href="https://www.youtube.com/watch?v=WXX4qCbyts0"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_tv_01.jpg"></a>
              <h3 class="fig-title">Đánh giá của Đài truyền hình VTV3 về Nha khoa I-Dent</h3>
            </li>
            <li><a class="vidplay" href="https://www.youtube.com/watch?v=PQu1lk1zBiU"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_tv_02.jpg"></a>
              <h3 class="fig-title">Đánh giá của Đài truyền hình HTV7 về Nha khoa I-Dent</h3>
            </li>
          </ul>
        </div>
      </section>
      <section class="key-service">
        <div class="key-service_inner">
          <div class="wrapper">
            <h2 class="ttl-primary">CÁC DỊCH VỤ NỔI BẬT</h2>
            <div class="service-slide js-service-slide">
              <div class="service-slide_item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_service.jpg" alt="">
                  <div class="service-name is-implant"><span>TRỒNG RĂNG</span><strong>IMPLANT</strong></div></a></div>
              <div class="service-slide_item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_service.jpg" alt="">
                  <div class="service-name is-nieng"><span>NIỀNG RĂNG</span><strong>THẨM MỸ</strong></div></a></div>
              <div class="service-slide_item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_service.jpg" alt="">
                  <div class="service-name is-dieutri"><span>NHA KHOA</span><strong>ĐIỀU TRỊ</strong></div></a></div>
              <div class="service-slide_item"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_service.jpg" alt="">
                  <div class="service-name is-su"><span>BỌC</span><strong>RĂNG SỨ</strong></div></a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="m-doctors">
        <div class="l-doctors">
          <h2 class="ttl-primary">ĐỘI NGŨ BÁC SĨ</h2>
          <div class="wrapper">
            <div class="l-doctors_inner js-doc-slide">
              <div class="l-doctors_item">
                <div class="doc-info">
                  <div class="title">TIẾN SĨ - BÁC SĨ</div>
                  <h3 class="name">NGUYỄN HIẾU TÙNG</h3>
                  <ul class="certificate">
                    <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                    <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
                    <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                    <li>Tiến sĩ Y khoa Bệnh Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                  </ul>
                  <div class="m-btn"><a href="#">Xem thêm</a></div>
                </div>
                <div class="doc-img">
                  <div class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""></div>
                </div>
              </div>
              <div class="l-doctors_item">
                <div class="doc-info">
                  <div class="title">BÁC SĨ CKI</div>
                  <h3 class="name">NGUYỄN HUỲNH NGỌC MỸ</h3>
                  <ul class="certificate">
                    <li>BÁC SĨ CHUYÊN KHOA I - ĐẠI HỌC Y DƯỢC TP. HỒ CHÍ MINH</li>
                    <li>Chứng chỉ hành nghề số: 005327/ĐT - CCHN</li>
                    <li>Chuyên Phục hình sứ trên Implant, Phục hình thẩm mỹ Răng sứ - Veneer</li>
                  </ul>
                  <div class="m-btn"><a href="#">Xem thêm</a></div>
                </div>
                <div class="doc-img">
                  <div class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_02.png" alt=""></div>
                </div>
              </div>
              <div class="l-doctors_item">
                <div class="doc-info">
                  <div class="title">TIẾN SĨ - BÁC SĨ</div>
                  <h3 class="name">NGUYỄN HIẾU TÙNG</h3>
                  <ul class="certificate">
                    <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                    <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
                    <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                    <li>Tiến sĩ Y khoa Bệnh Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                  </ul>
                  <div class="m-btn"><a href="#">Xem thêm</a></div>
                </div>
                <div class="doc-img">
                  <div class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""></div>
                </div>
              </div>
              <div class="l-doctors_item">
                <div class="doc-info">
                  <div class="title">TIẾN SĨ - BÁC SĨ</div>
                  <h3 class="name">NGUYỄN HIẾU TÙNG</h3>
                  <ul class="certificate">
                    <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                    <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
                    <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                    <li>Tiến sĩ Y khoa Bệnh Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                  </ul>
                  <div class="m-btn"><a href="#">Xem thêm</a></div>
                </div>
                <div class="doc-img">
                  <div class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""></div>
                </div>
              </div>
              <div class="l-doctors_item">
                <div class="doc-info">
                  <div class="title">TIẾN SĨ - BÁC SĨ</div>
                  <h3 class="name">NGUYỄN HIẾU TÙNG</h3>
                  <ul class="certificate">
                    <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                    <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
                    <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                    <li>Tiến sĩ Y khoa Bệnh Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                  </ul>
                  <div class="m-btn"><a href="#">Xem thêm</a></div>
                </div>
                <div class="doc-img">
                  <div class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""></div>
                </div>
              </div>
              <div class="l-doctors_item">
                <div class="doc-info">
                  <div class="title">BÁC SĨ CKI</div>
                  <h3 class="name">VŨ THIỆN KHANH</h3>
                  <ul class="certificate">
                    <li>BÁC SĨ CHUYÊN KHOA I - ĐẠI HỌC Y DƯỢC TP. HỒ CHÍ MINH</li>
                    <li>Chứng chỉ hành nghề số: 0002812/BL – CCHN</li>
                    <li>Chuyên Cấy ghép Implant, Phục hình sứ trên Implant, Phục hình thẩm mỹ Răng sứ - Veneer</li>
                  </ul>
                  <div class="m-btn"><a href="#">Xem thêm</a></div>
                </div>
                <div class="doc-img">
                  <div class="bg"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_03.png" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="l-doctors_thumb">
          <div class="wrapper">
            <div class="js-doc-slide-thumb">
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_01.png" alt=""></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_02.png" alt=""></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_01.png" alt=""></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_01.png" alt=""></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_01.png" alt=""></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_03.png" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="m-prize">
        <div class="wrapper">
          <h2 class="ttl-primary is-white">NHA KHOA I-DENT ĐIỂM ĐẾN TIN CẬY CỦA KHÁCH HÀNG TRONG VÀ NGOÀI NƯỚC</h2>
          <ul class="l-prize">
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt=""></div>
              <p>Tiến sĩ – Bác sĩ 10 năm<br>tu nghiệp chuyên sâu<br>tại Pháp</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt=""></div>
              <p>100% công nghệ, thiết bị và vật liệu<br> chuyển giao trực tiếp từ<br> châu Âu và Mỹ</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt=""></div>
              <p>Hơn 10.000 khách hàng<br> cấy ghép Implant<br>thành công</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_03.svg" alt=""></div>
              <p>Hơn 6,000 ca<br>Thẩm mỹ răng sứ và<br>Niềng răng thẩm mỹ thành công</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-reward">
        <div class="wrapper">
          <h2 class="ttl-primary">VINH DANH TOP 10 NHA KHOA UY TÍN 2023</h2>
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
      <section class="m-video">
        <div class="wrapper">
          <h2 class="ttl-primary">VIDEOS CẢM NHẬN CỦA KHÁCH HÀNG VỀ NHA KHOA I-DENT</h2>
          <div class="m-video_inner">
            <div class="m-video_main"><a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp"></a></div>
            <ul class="l-video">
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp"></a>
                <div class="video-info">
                  <h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3><span class="view">Lượt xem : 5230</span>
                </div>
              </li>
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp"></a>
                <div class="video-info">
                  <h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3><span class="view">Lượt xem : 5230</span>
                </div>
              </li>
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp"></a>
                <div class="video-info">
                  <h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3><span class="view">Lượt xem : 5230</span>
                </div>
              </li>
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp"></a>
                <div class="video-info">
                  <h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3><span class="view">Lượt xem : 5230</span>
                </div>
              </li>
              <li><a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp"></a>
                <div class="video-info">
                  <h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3><span class="view">Lượt xem : 5230</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="m-customer">
        <div class="wrapper">
          <h2 class="ttl-primary">I-DENT CÂU CHUYỆN KHÁCH HÀNG</h2>
          <div class="m-customer_slide js-cus-slide">
            <div class="m-customer_item">
              <div class="m-customer_inner">
                <figure class="image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt=""></figure>
                <div class="info">
                  <h3 class="cus-name">Chú Nguyễn Hải</h3>
                  <p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>
                  <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="m-customer_item">
              <div class="m-customer_inner">
                <figure class="image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt=""></figure>
                <div class="info">
                  <h3 class="cus-name">Chú Nguyễn Hải</h3>
                  <p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>
                  <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="m-customer_item">
              <div class="m-customer_inner">
                <figure class="image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt=""></figure>
                <div class="info">
                  <h3 class="cus-name">Chú Nguyễn Hải</h3>
                  <p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>
                  <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                </div>
              </div>
            </div>
            <div class="m-customer_item">
              <div class="m-customer_inner">
                <figure class="image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt=""></figure>
                <div class="info">
                  <h3 class="cus-name">Chú Nguyễn Hải</h3>
                  <p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>
                  <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="m-paper">
        <div class="wrapper">
          <h2 class="ttl-primary">BÁO CHÍ ĐƯA TIN VỀ NHA KHOA I-DENT</h2>
          <div class="m-paper js-paper-slide">
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn"><a href="#">Xem chi tiết</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="m-contact">
        <div class="wrapper"><strong>NHẬN TƯ VẤN MIỄN PHÍ TỪ CHUYÊN GIA</strong>
          <h2 class="ttl-primary is-red">ĐẶT LỊCH HẸN THĂM KHÁM NGAY</h2>
          <p>Vui lòng để lại thông tin của quý khách.<br>Nha Khoa I-Dent sẽ liên hệ đến Quý Khách trong thời gian sớm nhất</p>
          <form action="">
            <div class="row-input">
              <input class="m-input" type="text" placeholder="Họ và tên">
            </div>
            <div class="row-input">
              <input class="m-input" type="text" placeholder="Số điện thoại">
            </div>
            <div class="m-btn">
              <button type="submit">ĐĂNG KÝ</button>
            </div>
          </form>
        </div>
      </section>
      <section class="m-news">
        <div class="wrapper">
          <h2 class="ttl-primary">KIẾN THỨC NHA KHOA</h2>
          <ul class="l-news">
            <li class="l-news_item">
              <figure class="images"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/dummy.jpg" alt=""></figure>
              <div class="info"><span class="tag">KIẾN THỨC IMPLANT</span>
                <h3 class="title js-height">KỸ THUẬT IMPLANT TOÀN HÀM ALL-ON-6 CƯỜNG LỰC CAO CẤP BẬC NHẤT</h3>
                <p class="text">Nha khoa I-DENT giới thiệu đến cô chú giải pháp trồng răng toàn hàm cao cấp bậc nhất. Sử dụng 6 trụ Implant Straumann Thụy Sĩ và phục hình hàm toàn sứ</p>
                <div class="m-btn"><a href="#">Xem thêm</a></div>
              </div>
            </li>
            <li class="l-news_item">
              <figure class="images"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/dummy.jpg" alt=""></figure>
              <div class="info"><span class="tag">KIẾN THỨC IMPLANT</span>
                <h3 class="title js-height">KỸ THUẬT IMPLANT TOÀN HÀM ALL-ON-6 CƯỜNG LỰC CAO CẤP BẬC NHẤT</h3>
                <p class="text">Nha khoa I-DENT giới thiệu đến cô chú giải pháp trồng răng toàn hàm cao cấp bậc nhất. Sử dụng 6 trụ Implant Straumann Thụy Sĩ và phục hình hàm toàn sứ</p>
                <div class="m-btn"><a href="#">Xem thêm</a></div>
              </div>
            </li>
            <li class="l-news_item">
              <figure class="images"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/dummy.jpg" alt=""></figure>
              <div class="info"><span class="tag">KIẾN THỨC IMPLANT</span>
                <h3 class="title js-height">TOP 3 LOẠI TRỤ IMPLANT ĐỨC PHỔ BIẾN NHẤT HIỆN NAY</h3>
                <p class="text">Nha khoa I-DENT giới thiệu đến cô chú giải pháp trồng răng toàn hàm cao cấp bậc nhất. Sử dụng 6 trụ Implant Straumann Thụy Sĩ và phục hình hàm toàn sứ</p>
                <div class="m-btn"><a href="#">Xem thêm</a></div>
              </div>
            </li>
          </ul>
        </div>
      </section>
<?php get_footer();
