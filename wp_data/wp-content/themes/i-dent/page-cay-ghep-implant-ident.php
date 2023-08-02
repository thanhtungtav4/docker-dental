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
        <img class="is-pc"   src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/bnr.jpg.webp" alt="">
        <img class="is-sp"   src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/sp/bnr.webp" alt="">
        <h1 class="ttl">TRỒNG RĂNG IMPLANT <span>CÙNG TIẾN SĨ</span>
        </h1>
        <div class="txt">Mất răng lâu năm, mất răng toàn hàm không còn nỗi lo thẩm mỹ, <br>ăn nhai yếu và sức khỏe kém. </div>
        <a class="btn trans popup-with-form" href="#popup-tv-implant" data-message="tư vấn implant (banner)">
          <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/bnr_btn.svg" alt="ĐẶT LỊCH HẸN">
        </a>
      </div>
      <section class="m-problem">
        <div class="wrapper">
          <div class="m-problem_inner">
            <div class="left">
              <h2 class="ttl-primary ttl-primary--is-medium">TRẢI LÒNG CỦA BỆNH NHÂN KHI <br>TÌM ĐẾN NHA KHOA I-DENT </h2>
              <ul class="l-check">
                <li>Bệnh nhân <strong>ngại giao tiếp</strong> do mất răng toàn hàm hoặc răng cửa.</li>
                <li>Rất thèm những món ăn Việt Nam, nhưng <strong>không nhai được</strong> và mất vị giác.</li>
                <li>Bị <strong>tiêu xương hàm</strong>, gương mặt chảy xệ, lão hóa nhanh.</li>
                <li>Bệnh nhân lớn tuổi mất răng và <strong>rất sợ đau.</strong></li>
                <li>Bệnh nhân <b><a href="https://nhakhoaident.com/dich-vu/cay-ghep-implant-ident/">trồng răng implant</a> không thành công</b> ở những nha khoa thiếu uy tín.</li>
                <li><b>Kiều bào ở xa</b> muốn về nước trồng răng nhưng thời gian eo hẹp.</li>
              </ul>
            </div>
            <div class="right">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_01.jpg.webp" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="m-giaiphap">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">NHA KHOA I-DENT MANG ĐẾN GIẢI PHÁP HOÀN THIỆN NHẤT</h2>
          <ul class="l-giaiphap">
            <li>
              <div class="img">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_cir_01.png.webp" alt="">
              </div>
              <p class="text">Trồng răng Implant<br>công nghệ Pháp</p>
            </li>
            <li>
              <div class="img">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_cir_02.png.webp" alt="">
              </div>
              <p class="text">Kỹ thuật đặt trụ<br>7 phút không đau</p>
            </li>
            <li>
              <div class="img">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_cir_03.png.webp" alt="">
              </div>
              <p class="text">TS-BS <br>Nguyễn Hiếu Tùng<br>trực tiếp thực hiện</p>
            </li>
            <li>
              <div class="img">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_cir_04.png.webp" alt="">
              </div>
              <p class="text">Thiết kế<br> lộ trình riêng cho<br>kiều bào nước ngoài</p>
            </li>
          </ul>
          <?php echo do_shortcode('[contact-form-7 id="8795"]'); ?>

        </div>
      </section>
      <section class="m-chuyensau">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">NHA KHOA I-DENT CHUYÊN SÂU CẤY GHÉP IMPLANT</h2>
          <p class="text landing-page-gom-intro">Để đưa công nghệ Implant tiếp cận gần hơn cho những bệnh nhân mất răng, <strong>Tiến sĩ - Bác sĩ Nguyễn Hiếu Tùng</strong> đã nỗ lực nghiên cứu và thực hành hơn 10 năm tại Pháp. Đến năm 2014, trở về Việt Nam và thành lập nên nha khoa I-Dent - Chuyên sâu cấy ghép Implant. </p>
          <p class="text landing-page-gom-intro">Sứ mệnh của I-Dent là khôi phục lại nụ cười tự tin và sức khỏe cho từng bệnh nhân. Luôn đề cao 3 giá trị cốt lõi <b>Tận tâm, Chất lượng và Uy tín</b> đã giúp I-Dent ngày càng phát triển.</p>
          <p class="text landing-page-gom-intro"> Với đội ngũ Tiến sĩ, Bác sĩ CKI, hệ thống công nghệ, thiết bị chuyển giao từ Châu Âu cùng với việc lựa chọn trụ Implant cao cấp, chính hãng. Nha khoa I-Dent đã trở thành địa chỉ uy tín hàng đầu về trồng răng Implant cho kiều bào trong và ngoài nước. Với hơn <b>10,000 ca Implant thành công</p>
          </p>
        </div>
      </section>
      <div class="wrapper">
        <div class="l-doctors">
          <div class="l-doctors_item">
            <div class="l-doctors_images">
              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_bstung.png.webp" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
            </div>
            <div class="l-doctors_info">
              <div class="l-doctors_info_inner">
                <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                <ul class="certificate">
                  <li>Tiến sĩ Implant tại Pháp.</li>
                  <li>Giám đốc nha khoa I-Dent.</li>
                  <li>Thành viên của Hiệp hội Implant Thế giới (ICOI).</li>
                  <li>Viện trưởng Viện Phát triển Nha khoa Thành Công (DDS Institute).</li>
                </ul>
                <div class="box-quote">
                  <p class="text">Với tôi trở thành một người bác sĩ có tay nghề giỏi là chưa đủ, mà phải luôn dành cả trái tim và sự tận tâm, tận tình chăm sóc cho tất cả bệnh nhân. Mới có thể mang đến nụ cười hạnh phúc cũng như sức khỏe lâu dài cho người bệnh.</p>
                </div>
                <div class="l-cer-img">
                  <div class="l-cer-img_wrap swiper-container js-slide-cer">
                    <div class="l-cer-img_inner zoom-gallery swiper-wrapper">
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-11.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-11.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-10.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-10.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-9.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-9.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-1.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-1.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-2.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-2.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-3.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-3.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-4.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-4.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-5.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-5.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-6.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-6.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-7.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-7.jpg" alt=""></a></div>
                      </div>
                      <div class="l-cer-img_item swiper-slide">
                        <div><a href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-8.jpg"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bang-cap-nguyen-hieu-tung-8.jpg" alt=""></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-btn swiper-prev"></div>
                  <div class="swiper-btn swiper-next"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="video">
          <a class="vidplay" href="https://www.youtube.com/watch?v=WXX4qCbyts0">
            <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/bg_video.jpg.webp">
            <img class="is-sp" loading="lazy"  src="/wp-content/uploads/2023/07/vtv3-1-1.jpg-1.webp">
          </a>
          <h3 class="fig-title">Đánh giá của Đài truyền hình VTV3 về Nha khoa I-Dent</h3>
        </div>
      </div>
      <section class="m-prize">
        <div class="wrapper">
          <ul class="l-prize">
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt="Hơn 10 năm kinh nghiệm trong lĩnh vực Implant">
              </div>
              <p>Hơn 10 năm kinh nghiệm trong lĩnh vực Implant</p>
            </li>
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_05.svg" alt="Hệ thống 3 chi nhánh chuyên cấy ghép Implant tại TP. Hồ Chí Minh">
              </div>
              <p>Hệ thống 3 chi nhánh chuyên cấy ghép Implant tại TP. HCM</p>
            </li>
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_04.svg" alt="Hơn 10.000 khách hàng Việt kiều và trong nước tin tưởng ">
              </div>
              <p>Hơn 10.000 khách hàng Việt kiều và trong nước tin tưởng</p>
            </li>
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt="100% công nghệ, thiết bị và vật liệu chuyển giao trực tiếp từ Âu Mỹ">
              </div>
              <p>100% công nghệ, thiết bị và vật liệu chuyển giao trực tiếp từ Âu Mỹ</p>
            </li>
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt="">
              </div>
              <p>100% Bác sĩ trình độ từ chuyên khoa 1 trở lên</p>
            </li>
          </ul>
        </div>
      </section>
      <?php require_once( get_stylesheet_directory() . '/module/main-videos.php' ); ?>
      <section class="m-cus">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">KHÁCH HÀNG ĐÃ CẤY IMPLANT TẠI NHA KHOA I-DENT</h2>
          <ul class="l-demo js-demo">
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img">
                  <div class="img-big">
                    <img loading="lazy" src="/wp-content/uploads/2023/08/1_ANH-LONG-LEE-T-copy_11zon-3.webp" alt="">
                  </div>
                  <div class="img-small">
                    <div class="img before">
                      <img loading="lazy" src="/wp-content/uploads/2023/08/1_ANH-LONG-M-LEE-T-copy_11zon.webp" alt="">
                    </div>
                    <div class="img after">
                      <img loading="lazy" src="/wp-content/uploads/2023/08/1_ANH-LONG-M-LEE-S-copy_11zon-1.webp" alt="">
                    </div>
                  </div>
                </div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">ANH LONG M LEE</h3>
                    <span class="lca">VIỆT KIỀU MỸ</span>
                  </div>
                  <div class="type">Phương án: Cấy implant ALL ON 4 hàm dưới, ALL ON 6 hàm trên</div>
                  <div class="implant">Loại trụ: Implant Straumann Thụy Sỹ</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img">
                  <div class="img-big">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_big_02.jpg" alt="">
                  </div>
                  <div class="img-small">
                    <div class="img before">
                      <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_small_03.jpg" alt="">
                    </div>
                    <div class="img after">
                      <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_small_04.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">CHÚ NGUYỄN TẤN DŨNG</h3>
                    <span class="lca">VIỆT KIỀU MỸ</span>
                  </div>
                  <div class="type">Phương án: Trồng răng 2 hàm ALL ON 4</div>
                  <div class="implant">Loại trụ: Implant Mis C1 Đức</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img">
                  <div class="img-big">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_big_03.jpg.webp" alt="">
                  </div>
                  <div class="img-small">
                    <div class="img before">
                      <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_small_05.jpg.webp" alt="">
                    </div>
                    <div class="img after">
                      <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_small_06.jpg.webp" alt="">
                    </div>
                  </div>
                </div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">CÔ KHỔNG NỮ ĐẠT</h3>
                    <span class="lca">VIỆT KIỀU MỸ</span>
                  </div>
                  <div class="type">Phương án: Trồng răng toàn hàm ALL ON 6</div>
                  <div class="implant">Loại trụ: Implant Mis C1 Đức</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img">
                  <div class="img-big">
                    <img loading="lazy" src="/wp-content/uploads/2023/08/1_HUA-TAN-DAT-copy-1.webp" alt="">
                  </div>
                  <div class="img-small">
                    <div class="img before">
                      <img loading="lazy" src="/wp-content/uploads/2023/08/1_HUA-TAN-DAT-T-copy-1.webp" alt="">
                    </div>
                    <div class="img after">
                      <img loading="lazy" src="/wp-content/uploads/2023/08/1_HUA-TAN-DAT-S-copy-1.webp" alt="">
                    </div>
                  </div>
                </div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">CHÚ HỨA TẤN ĐẠT</h3>
                    <span class="lca">TP. HỒ CHÍ MINH</span>
                  </div>
                  <div class="type">Phương án: Trồng răng implant ALL ON 4</div>
                  <div class="implant">Loại trụ: Implant Nobel Biocare Thụy Điển</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div class="wrapper">
        <?php echo do_shortcode('[contact-form-7 id="8796"]'); ?>
      </div>
      <section class="m-flow">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">QUY TRÌNH CẤY GHÉP IMPLANT TẠI NHA KHOA I-DENT</h2>
          <ul class="l-flow">
            <li class="l-flow_item">
              <div class="info">
                <h3 class="ttl-secondary">
                  <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_03.png.webp" alt="">Bước 1: Tư vấn biết trước phác đồ điều trị và chi phí dự trù
                </h3>
                <p class="text">Khách hàng gửi hình ảnh răng hiện tại hoặc để lại SĐT, trợ lý Bác sĩ sẽ liên hệ tư vấn trước về: Giải pháp trồng răng tối ưu nhất cho tình trạng răng hiện tại; loại trụ Implant thích hợp; thời gian hoàn thiện và chi phí dự trù trọn gói. <br>Đồng thời đặt trước lịch hẹn thăm khám miễn phí cùng Bác sĩ CKI, để khách hàng không phải chờ đợi khi đến nha khoa. </p>
              </div>
              <div class="img is-pc">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_03.png" alt="">
              </div>
            </li>
            <li class="l-flow_item">
              <div class="info">
                <h3 class="ttl-secondary">
                  <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_04.png.webp" alt="">Bước 2: Thăm khám, chụp phim CT Scanner 3D (Khoảng 45-60 phút)
                </h3>
                <p class="text">Khách hàng đến nha khoa thăm khám theo lịch hẹn đã đặt trước. Bác sĩ sẽ kiểm tra tổng quát tình trạng răng miệng và chụp phim CT Scanner 3D vùng răng hàm mặt, để biết chính xác chất lượng xương hàm cũng như vị trí răng mất của khách hàng.  <br>Bên cạnh đó, khách hàng sẽ được làm một số xét nghiệm cần thiết để xem có đủ sức khỏe để cắm Implant hay không. <br>Khi có kết quả kiểm tra chính xác, Bác sĩ sẽ lên phương án điều trị, tư vấn loại trụ Implant thích hợp và tiết kiệm chi phí. Giúp khách hàng biết rõ mọi thông tin cần thiết cũng như tổng chi phí hoàn thiện khi trồng Implant. </p>
              </div>
              <div class="img is-pc">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_04.png" alt="">
              </div>
            </li>
            <li class="l-flow_item">
              <div class="info">
                <h3 class="ttl-secondary">
                  <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_05.png.webp" alt="">Bước 3: Phẫu thuật cấy ghép trụ Implant (7 phút/trụ Implant)
                </h3>
                <p class="text">Khách hàng sẽ được kiểm tra tổng quát một lần nữa trước khi Bác sĩ cấy ghép trụ Implant. Để đảm bảo sức khỏe ổn định và tâm lý thoải mái. <br>Bác sĩ sẽ gây tê tại vùng cấy trụ Implant, giúp khách hàng hoàn toàn không đau và thoải mái trong suốt thời gian phẫu thuật. Quá trình cấy ghép nhẹ nhàng và nhanh chóng, chỉ khoảng 7 phút cho 1 trụ Implant. </p>
              </div>
              <div class="img is-pc">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_05.png" alt="">
              </div>
            </li>
            <li class="l-flow_item">
              <div class="info">
                <h3 class="ttl-secondary">
                  <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_06.png.webp" alt="">Bước 4: Lấy dấu hàm và gắn răng tạm (Từ 3 - 5 ngày sau khi cấy trụ Implant)
                </h3>
                <p class="text">Sau 3 - 5 ngày cấy trụ Implant, khách hàng sẽ được hẹn quay lại nha khoa để Bác sĩ gắn răng tạm. Răng tạm hoàn toàn đảm bảo được chức năng ăn nhai và thẩm mỹ trong thời gian chờ gắn mão sứ trên Implant.</p>
              </div>
              <div class="img is-pc">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_06.png" alt="">
              </div>
            </li>
            <li class="l-flow_item">
              <div class="info">
                <h3 class="ttl-secondary">
                  <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_07.png.webp" alt="">Bước 5: Tái khám sau khi cấy ghép Implant (Sau 7 - 10 ngày)
                </h3>
                <p class="text">Sau khoảng 7 - 10 ngày, nướu đã lành thương, khách hàng quay lại nha khoa I-Dent để bác sĩ kiểm tra độ lành thương một lần nữa.</p>
              </div>
              <div class="img is-pc">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_07.png" alt="">
              </div>
            </li>
            <li class="l-flow_item">
              <div class="info">
                <h3 class="ttl-secondary">
                  <img class="is-sp" loading="lazy"  src="/wp-content/uploads/2023/07/buoc-6-phuc-hinh-rang-su-tren-implant.webp" alt="">Bước 6: Phục hình răng sứ trên Implant (Sau khi đặt trụ 3 - 6 tháng)
                </h3>
                <p class="text">Sau khi trụ Implant tích hợp với xương hàm, Bác sĩ sẽ gắn răng sứ cố định lên trên để hoàn tất quy trình trồng Implant. Khi gắn răng xong, khách hàng sẽ được kiểm tra lại khớp cắn, độ chịu lực và hướng dẫn cách chăm sóc răng tại nhà.</p>
              </div>
              <div class="img is-pc">
                <img loading="lazy"  src="/wp-content/uploads/2023/07/buoc-6-phuc-hinh-rang-su-tren-implant.webp" alt="">
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-price">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">BẢNG GIÁ VÀ CHƯƠNG TRÌNH ƯU ĐÃI TẠI NHA KHOA I-DENT</h2>
          <div class="doc-intro-highlight">
            <p class="text">Bảng giá trọn gói công khai minh bạch.</p>
            <p class="text"><u>Phí trọn gói = trụ Implant + Abutment + Răng sứ + chi phí dịch vụ liên quan</b>.</u></p>
            <p class="text">Không phát sinh bất cứ chi phí nào trong quá trình điều trị (Ngoại trừ chi phí đi lại và tiền thuốc vì Nha khoa chỉ kê đơn, không bán thuốc)</p>
          </div>
          <div class="table-scroll is-pc">
            <table class="table-common">
              <thead>
                <th class="w01">TRỤ IMPLANT</th>
                <th class="w02">ƯU ĐIỂM</th>
                <th>GIÁ TRỤ LẺ</th>
                <th>TOÀN HÀM <br>ALL ON 4 </th>
                <th>TOÀN HÀM <br>ALL ON 6 </th>
                <th>&nbsp;</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <strong>IMPLANT DIO <br>(HÀN QUỐC) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Dòng Implant phổ thông</li>
                      <li>- Thích hợp với các trường hợp mất răng lẻ</li>
                      <li>- Bảo hành 7 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price">13.000.000 VNĐ</strong>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="IMPLANT DIO">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>IMPLANT DENTIUM <br>(HÀN QUỐC) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Dòng Implant phổ thông</li>
                      <li>- Sử dụng trong các trường hợp mất răng lẻ</li>
                      <li>- Bảo hành 10 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price is-old">17.000.000 VNĐ</strong>
                    <strong class="price">15.300.000 VNĐ</strong>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="IMPLANT DENTIUM (HÀN QUỐC)">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>IMPLANT DENTIUM <br>SUPERLINE (MỸ) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Dòng Implant phổ thông phổ biến nhất Châu Á</li>
                      <li>- Ưu tiên sử dụng cho trường hợp mất răng lẻ</li>
                      <li>- Bảo hành 15 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price">21.000.000 VNĐ</strong>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="DENTIUM SUPERLINE">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>IMPLANT MIS C1 <br>(ĐỨC/ISRAEL) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Thương hiệu Implant số 1 tại Đức</li>
                      <li>- Bác sĩ khuyến nghị cho phương án toàn hàm</li>
                      <li>- Đảm bảo khả năng ăn nhai tốt và tiết kiệm chi phí</li>
                      <li>- Bảo hành 20 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price is-old">24.000.000 VNĐ</strong>
                    <strong class="price">20.400.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price is-old">130.000.000 VNĐ</strong>
                    <strong class="price">117.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price is-old">155.000.000 VNĐ</strong>
                    <strong class="price">139.500.000 VNĐ</strong>
                  </td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="MIS C1">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>IMPLANT TEKKA <br>GLOBAL D (PHÁP) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Thương hiệu Implant số 1 tại Pháp</li>
                      <li>- Thích hợp cấy răng lẻ và toàn hàm</li>
                      <li>- Bảo hành 20 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price">25.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price">140.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price">160.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="TEKKA GLOBAL D">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>IMPLANT SIC <br>(THỤY SĨ /ĐỨC) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Dòng Implant cao cấp</li>
                      <li>- Thiết kế riêng biệt theo từng vùng xương hàm</li>
                      <li>- Bảo hành 20 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price">26.000.000 VNĐ</strong>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="SIC">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>IMPLANT NOBEL BIOCARE<br>(THỤY ĐIỂN) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Dòng Implant cao cấp phổ biến nhất thế giới</li>
                      <li>- Thời gian tích hợp xương nhanh (từ 2-3 tháng)</li>
                      <li>- Ưu tiên sử dụng cho phương án toàn hàm</li>
                      <li>- Bảo hành 20 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price is-old">30.000.000 VNĐ</strong>
                    <strong class="price">25.500.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price is-old">170.000.000 VNĐ</strong>
                    <strong class="price">153.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price is-old">190.000.000 VNĐ</strong>
                    <strong class="price">171.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="NOBEL BIOCARE">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>IMPLANT STRAUMANN <br>SLACTIVE (THỤY SĨ) </strong>
                  </td>
                  <td>
                    <ul class="text">
                      <li>- Dòng Implant cao cấp nhất thế giới</li>
                      <li>- Thời gian tích hợp xương nhanh nhất (từ 8-10 tuần )</li>
                      <li>- Sử dụng cho phương án toàn hàm</li>
                      <li>- Bảo hành 20 năm</li>
                    </ul>
                  </td>
                  <td>
                    <strong class="price is-old">30.000.000 VNĐ</strong>
                    <strong class="price">25.500.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price is-old">180.000.000 VNĐ</strong>
                    <strong class="price">162.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <strong class="price is-old">200.000.000 VNĐ</strong>
                    <strong class="price">180.000.000 VNĐ</strong>
                  </td>
                  <td>
                    <a class="link trans popup-with-form" href="#popup-tv-implant" data-message="STRAUMANN SLACTIVE">ĐĂNG KÝ <br>TƯ VẤN </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <ul class="l-items is-sp">
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT DIO (HÀN QUỐC) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Dòng Implant phổ thông</li>
                  <li>- Thích hợp với các trường hợp mất răng lẻ</li>
                  <li>- Bảo hành 7 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price">13.000.000 VNĐ</span>
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="DIO">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT DENTIUM (HÀN QUỐC) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Dòng Implant phổ thông</li>
                  <li>- Thích hợp với các trường hợp mất răng lẻ</li>
                  <li>- Bảo hành 10 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price old">17.000.000 VNĐ</span>
                    <span class="price">15.300.000 VNĐ</span>                  
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="DENTIUM (HÀN QUỐC)">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT DENTIUM SUPERLINE (MỸ) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Dòng Implant phổ thông phổ biến nhất Châu Á</li>
                  <li>- Ưu tiên sử dụng cho trường hợp mất răng LẺ</li>
                  <li>- Bảo hành 15 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price">21.000.000 VNĐ</span>
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="DENTIUM SUPERLINE">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT MIS C1 (ĐỨC/ISRAEL) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Thương hiệu Implant số 1 tại Đức</li>
                  <li>- Bác sĩ khuyến nghị cho phương án toàn hàm</li>
                  <li>- Đảm bảo khả năng ăn nhai tốt và tiết kiệm chi phí</li>
                  <li>- Bảo hành 20 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price old">24.000.000 VNĐ</span>
                    <span class="price">20.400.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 4:</dt>
                  <dd>
                    <span class="price old">130.000.000 VNĐ</span>
                    <span class="price">117.000.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 6:</dt>
                  <dd>
                    <span class="price old">155.000.000 VNĐ</span>
                    <span class="price">139.500.000 VNĐ</span>
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="MIS C1">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT TEKKA GLOBAL D (PHÁP) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Thương hiệu Implant số 1 tại Pháp</li>
                  <li>- Thích hợp cấy răng lẻ và toàn hàm</li>
                  <li>- Bảo hành 20 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price">25.000.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 4:</dt>
                  <dd>
                    <span class="price">140.000.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 6:</dt>
                  <dd>
                    <span class="price">165.000.000 VNĐ</span>
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="TEKKA GLOBAL D">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT SIC (THỤY SĨ /ĐỨC) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Dòng Implant cao cấp</li>
                  <li>- Thiết kế riêng biệt theo từng vùng xương hàm</li>
                  <li>- Bảo hành 20 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price">26.000.000 VNĐ</span>
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="SIC">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT NOBEL BIOCARE (THỤY ĐIỂN) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Dòng Implant cao cấp phổ biến nhất thế giới</li>
                  <li>- Thời gian tích hợp xương nhanh (từ 2-3 tháng)</li>
                  <li>- Ưu tiên sử dụng cho phương án toàn hàm</li>
                  <li>- Bảo hành 20 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price old">30.000.000 VNĐ</span>
                    <span class="price">25.500.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 4:</dt>
                  <dd>
                    <span class="price old">170.000.000 VNĐ</span>
                    <span class="price">153.000.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 6:</dt>
                  <dd>
                    <span class="price old">190.000.000 VNĐ</span>
                    <span class="price">171.000.000 VNĐ</span>
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="NOBEL BIOCARE">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
            <li class="l-items_block">
              <h3 class="item-name ttl-bl">IMPLANT STRAUMANN SLACTIVE (THỤY SĨ) </h3>
              <div class="body">
                <ul class="l-dd">
                  <li>- Dòng Implant cao cấp nhất thế giới</li>
                  <li>- Thời gian tích hợp xương nhanh nhất (từ 8-10 tuần )</li>
                  <li>- Sử dụng cho phương án toàn hàm</li>
                  <li>- Bảo hành 20 năm</li>
                </ul>
                <dl class="price-box">
                  <dt>Giá trụ lẻ:</dt>
                  <dd>
                    <span class="price old">35.000.000 VNĐ</span>
                    <span class="price">29.750.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 4:</dt>
                  <dd>
                    <span class="price old">180.000.000 VNĐ</span>
                    <span class="price">162.000.000 VNĐ</span>
                  </dd>
                </dl>
                <dl class="price-box">
                  <dt>Toàn hàm All on 6:</dt>
                  <dd>
                    <span class="price old">200.000.000 VNĐ</span>
                    <span class="price">180.000.000 VNĐ</span>
                  </dd>
                </dl>
                <div class="m-btn">
                  <a class="popup-with-form" href="#popup-tv-implant" data-message="STRAUMANN SLACTIVE">TƯ VẤN NGAY</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div class="box-uudai is-ceramic">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium is-white">ƯU ĐÃI TRỒNG RĂNG IMPLANT <br class="is-sp"> THÁNG 7 </h2>
          <ul class="l-uudai is-reverse">
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">IMPLANT HÀN QUỐC<strong>DENTIUM</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_10.svg" alt="-10%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/implant-han-quoc-dentium.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">17.000.000 VNĐ</strong>
                  <strong class="price new-price">15.300.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a class="popup-with-form" href="#popup-tv-implant" data-message="ƯU ĐÃI: DENTIUM (HÀN QUỐC)">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading">IMPLANT ĐỨC/ISRAEL <strong>MIS C1</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_01.png.webp" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">24.000.000 VNĐ</strong>
                  <strong class="price new-price">20.400.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a class="popup-with-form" href="#popup-tv-implant" data-message="ƯU ĐÃI: MIS C1">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="l-uudai is-reverse">
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading">IMPLANT THỤY ĐIỂN <strong>NOBEL BIOCARE</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_02.png.webp" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">30.000.000 VNĐ</strong>
                  <strong class="price new-price">25.500.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a class="popup-with-form" href="#popup-tv-implant" data-message="ƯU ĐÃI: NOBEL BIOCARE">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading">IMPLANT THỤY SỸ <strong>STRAUMANN SLA</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_03.png.webp" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">35.000.000 VNĐ</strong>
                  <strong class="price new-price">29.750.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a class="popup-with-form" href="#popup-tv-implant" data-message="ƯU ĐÃI: STRAUMANN SLACTIVE">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading">&nbsp; <strong>&nbsp;</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_10.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_04.png.webp" alt="">
                    </div>
                  </div>
                  <strong class="price text">IMPLANT TOÀN HÀM</strong>
                  <strong class="price new-price">ALL ON 4/5/6</strong>
                  <div class="m-btn">
                    <a class="popup-with-form" href="#popup-tv-implant" data-message="ƯU ĐÃI: IMPLANT TOÀN HÀM">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <section class="m-faq">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">NHỮNG CÂU HỎI THƯỜNG GẶP KHI TRỒNG RĂNG IMPLANT TẠI NHA KHOA I-DENT</h2>
          <ul class="l-faq">
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">1. Trồng răng Implant có được bảo hành không?</h3>
                <div class="m-btn is-reverse">
                  <a href="javascript:;">Trả lời</a>
                </div>
              </div>
              <div class="answer">
                <p class="text">Tại nha khoa I-Dent, 100% trụ Implant và răng sứ đều được nhập khẩu từ những thương hiệu nổi tiếng, đạt tiêu chuẩn chất lượng của CE, FDA, ISO. Cam kết cung cấp đầy đủ thẻ bảo hành chính hãng theo tên của khách hàng. Ngoài ra, I-Dent còn chăm sóc và thăm khám định kỳ miễn phí cho khách hàng đến trọn đời.</p>
              </div>
            </li>
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">2. Trồng răng Implant có được áp dụng Bảo hiểm Y tế không?</h3>
                <div class="m-btn is-reverse">
                  <a href="javascript:;">Trả lời</a>
                </div>
              </div>
              <div class="answer">
                <p class="text">Trồng răng Implant là dịch vụ nha khoa thẩm mỹ theo yêu cầu, vì vậy sẽ không nằm trong danh mục khám chữa bệnh được hưởng Bảo hiểm Y tế. Tuy nhiên Bảo hiểm có thể chi trả cho các dịch vụ đi kèm như thăm khám, nhổ răng…</p>
              </div>
            </li>
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">3. Có nên trồng răng Implant giá rẻ vài triệu không?</h3>
                <div class="m-btn is-reverse">
                  <a href="javascript:;">Trả lời</a>
                </div>
              </div>
              <div class="answer">
                <p class="text">Hiện nay có rất nhiều những lời quảng cáo hấp dẫn về trụ Implant giá rẻ, với mức giá chỉ 2, 3 triệu/trụ. Nhưng thực tế, trụ Implant chính hãng, xuất xứ từ các thương hiệu nổi tiếng sẽ không bao giờ có mức giá này. Đây có thể là chiêu trò quảng cáo của các nha khoa hoặc sử dụng những loại Implant không rõ nguồn gốc, không đảm bảo chất lượng và không có thẻ bảo hành chính hãng. Vì vậy, cần phải cảnh giác trước những dịch vụ cấy ghép Implant giá vài triệu đồng.</p>
              </div>
            </li>
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">4. Mất răng lâu năm, trồng răng Implant được không?</h3>
                <div class="m-btn is-reverse">
                  <a href="javascript:;">Trả lời</a>
                </div>
              </div>
              <div class="answer">
                <p class="text">Trồng Implant là phương pháp có thể áp dụng trong hầu hết các trường hợp mất răng, kể cả mất răng lâu năm. Răng Implant có cấu tạo như một răng thật, bao gồm cả chân răng và thân răng, được cắm cố định vào bên trong xương hàm. Từ đó kích thích các mô xương phát triển và ngăn chặn tình trạng tiêu xương khi bị mất răng lâu năm.</p>
              </div>
            </li>
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">5. Người lớn tuổi có cấy ghép Implant được không?</h3>
                <div class="m-btn is-reverse">
                  <a href="javascript:;">Trả lời</a>
                </div>
              </div>
              <div class="answer">
                <p class="text ">Cấy ghép Implant là phương án trồng răng hiện đại và an toàn nhất hiện nay. Nên có thể áp dụng cho hầu hết các đối tượng mất răng, kể cả người lớn tuổi. Chỉ cần đủ điều kiện sức khỏe là có thể trồng răng Implant.</p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-paper">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">BÁO CHÍ ĐƯA TIN VỀ NHA KHOA I-DENT</h2>
          <div class="l-paper js-paper-slide">
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap">
                  <img loading=""  src="/wp-content/uploads/2023/05/vtv1.png.webp" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn">
                      <a href="https://vtv.vn/goc-doanh-nghiep/danh-gia-dich-vu-trong-rang-implant-tai-nha-khoa-i-dent-2020110316112448.htm">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap">
                  <img loading=""  src="/wp-content/uploads/2023/07/cafef1-1.webp" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn">
                      <a href="https://cafef.vn/tsbs-nguyen-hieu-tung-chuyen-gia-cay-ghep-implant-hang-dau-viet-nam-20201030152808412.chn">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap">
                  <img loading=""  src="/wp-content/uploads/2023/07/tuoitre-1.webp" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn">
                      <a href="https://tuoitre.vn/danh-gia-chat-luong-nha-khoa-i-dent-20201030095640522.htm">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-paper_item">
              <div class="m-paper_inner">
                <div class="m-paper_wrap">
                  <img loading=""  src="/wp-content/uploads/2023/07/skds-1.webp" alt="">
                  <div class="m-paper_btn">
                    <div class="m-btn">
                      <a href="https://suckhoedoisong.vn/dia-chi-nha-khoa-trong-rang-implant-tot-va-uy-tin-tai-ho-chi-minh-169182122.htm">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="modal-contact mfp-hide" id="popup-tv-implant">
        <?php echo do_shortcode('[contact-form-7 id="9405"]') ?>
      </div>
<?php
  require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
  get_footer();
?>
