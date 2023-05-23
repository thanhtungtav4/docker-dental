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
        <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/bnr.jpg" alt="">
        <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/bnr.png" alt="">
        <a class="btn trans" href="#">
          <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/bnr_btn.svg" alt="ĐẶT LỊCH HẸN">
          <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/bnr_btn.svg" alt="ĐẶT LỊCH HẸN">
        </a>
      </div>
      <div class="banner">
        <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/bnr_bs.jpg" alt="">
        <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/bnr_bs.png" alt="">
      </div>
      <section class="m-aboutident">
        <div class="wrapper">
          <div class="m-aboutident_inner">
            <h2 class="ttl-primary ttl-primary--is-medium">
              <span>NHA KHOA I-DENT</span>HỆ THỐNG NHA KHOA <br class="is-sp">TIÊU CHUẨN PHÁP
            </h2>
            <ul class="m-about">
              <li>
                <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_01.png" alt="Tiến sĩ - Bác sĩ tu nghiệp Pháp">
                <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/img_01.png" alt="Tiến sĩ - Bác sĩ tu nghiệp Pháp">
                <p class="text is-sp">Tiến sĩ - Bác sĩ <br>tu nghiệp tại Pháp </p>
              </li>
              <li>
                <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_02.png" alt="Công nghệ chuyển giao từ Pháp">
                <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/img_02.png" alt="Công nghệ chuyển giao từ Pháp">
                <p class="text is-sp">Công nghệ chuyển giao <br>từ Pháp </p>
              </li>
              <li>
                <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_03.png" alt="Thiết bị, vật liệu nhập khẩu từ châu Âu">
                <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/img_03.png" alt="Thiết bị, vật liệu nhập khẩu từ châu Âu">
                <p class="text is-sp">Thiết bị, vật liệu <br>nhập khẩu từ châu Âu </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="m-promo">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">TRỒNG RĂNG IMPLANT <br class="is-sp">CÔNG NGHỆ PHÁP </h2>
          <div class="m-tag">
            <span class="tag">ĂN NGON - NHAI KHỎE - VỮNG CHẮC TRỌN ĐỜI</span>
          </div>
          <ul class="l-uudai">
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">IMPLANT ĐỨC/ISRAEL <strong>MIS C1</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_01.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">24.000.000 VNĐ</strong>
                  <strong class="price new-price">20.400.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">IMPLANT THỤY ĐIỂN <strong>NOBEL BIOCARE</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_02.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">30.000.000 VNĐ</strong>
                  <strong class="price new-price">25.500.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">IMPLANT THỤY SỸ <strong>STRAUMANN SLACTIVE</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_03.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">35.000.000 VNĐ</strong>
                  <strong class="price new-price">29.750.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">&nbsp; <strong>&nbsp;</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_10.svg" alt="-15%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/img_uudai_04.png" alt="">
                    </div>
                  </div>
                  <strong class="price text">IMPLANT TOÀN HÀM</strong>
                  <strong class="price new-price">ALL ON 4/5/6</strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="l-outstand">
            <li>
              <a class="trans" href="#">Tặng một máy tăm nước cao cấp trị giá 2.000.000 đ khi cấy từ 2 trụ Implant trở lên.</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-promo is-ceramic">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">THẨM MỸ RĂNG SỨ CÔNG NGHỆ PHÁP</h2>
          <div class="m-tag">
            <span class="tag">RĂNG ĐẸP - CƯỜI XINH - TỰ TIN TỎA SÁNG</span>
          </div>
          <ul class="l-uudai">
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">RĂNG SỨ ĐỨC <strong>ZIRCONIA DDBIO</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_prom_01.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">4.500.000 VNĐ</strong>
                  <strong class="price new-price">3.600.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">RĂNG SỨ ĐỨC <strong>CERCON HT</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_prom_02.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">6.000.000 VNĐ</strong>
                  <strong class="price new-price">4.800.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">RĂNG SỨ ĐỨC <strong>NACERA 9MAX</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_prom_03.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">9.000.000 VNĐ</strong>
                  <strong class="price new-price">7.200.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">MẶT DÁN SỨ <strong>VENEER EMAX PRESS</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_prom_04.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">8.000.000 VNĐ</strong>
                  <strong class="price new-price">6.400.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">MẶT DÁN SỨ <strong>VENEER LISI PRESS</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_prom_05.png" alt="">
                    </div>
                  </div>
                  <strong class="price old-price">12.000.000 VNĐ</strong>
                  <strong class="price new-price">9.600.000 <small>VNĐ</small>
                  </strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item">
              <div class="inner">
                <div class="heading js-height">&nbsp; <strong>&nbsp;</strong>
                </div>
                <div class="body">
                  <div class="img">
                    <span class="ico">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%">
                    </span>
                    <div class="img_inner">
                      <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_prom_06.png" alt="">
                    </div>
                  </div>
                  <strong class="price text">BỌC RĂNG SỨ</strong>
                  <strong class="price new-price">TOÀN HÀM</strong>
                  <div class="m-btn">
                    <a href="#">TƯ VẤN NGAY</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="l-outstand">
            <li>
              <a class="trans" href="#">Tặng BN 1 máy tăm nước trị giá 2.000.000 đ khi làm bọc sứ toàn hàm TOÀN SỨ (từ 16 răng TOÀN SỨ trở lên )</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-prize">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium is-white">HƠN 16.000 KHÁCH HÀNG HÀI LÒNG <br>VỀ SỨC KHỎE RĂNG MIỆNG VÀ THẨM MỸ NỤ CƯỜI </h2>
          <ul class="l-prize">
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt="">
              </div>
              <p>Tiến sĩ – Bác sĩ 10 năm <br>tu nghiệp chuyên sâu <br>tại Pháp </p>
            </li>
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt="">
              </div>
              <p>100% công nghệ, thiết bị và vật liệu <br> chuyển giao trực tiếp từ <br> châu Âu và Mỹ </p>
            </li>
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_04.svg" alt="">
              </div>
              <p>Hơn 10.000 khách hàng <br> cấy ghép Implant <br>thành công </p>
            </li>
            <li>
              <div class="vec">
                <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_03.svg" alt="">
              </div>
              <p>Hơn 6,000 ca <br>Thẩm mỹ răng sứ và <br>Niềng răng thẩm mỹ thành công </p>
            </li>
          </ul>
        </div>
      </section>
      <div class="bnr-customer">
        <div class="wrapper">
          <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_customer.jpg" alt="">
          <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/img_customer.jpg" alt="">
          <img class="is-sp is-small" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/img_customer_inner.png" alt="">
        </div>
      </div>
      <section class="about-doctors">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">ĐỘI NGŨ TIẾN SĨ BÁC SĨ <br class="is-sp">HƠN 15 NĂM KINH NGHIỆM <br class="is-sp">10 NĂM <br class="is-pc"> TU NGHIỆP TẠI PHÁP </h2>
          <div class="wrap-doctor js-doctors">
            <div class="l-doctors is-special">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="bg is-sp">
                    <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt="">
                  </div>
                  <div class="img">
                    <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt="">
                    <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Tiến sĩ Y khoa Bện h Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại học Phẫu Thuật Tạo Hình Nha Chu, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Cao Học Phẫu Thuật Răng Miệng Vật Liệu Nha Khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học Nha Chu Lâm Sàng, ĐH Méditerranée, Marseille, Pháp.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_02.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_03.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
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
            <div class="l-doctors is-special">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="bg is-sp">
                    <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt="">
                  </div>
                  <div class="img">
                    <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt="">
                    <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Tiến sĩ Y khoa Bện h Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại học Phẫu Thuật Tạo Hình Nha Chu, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Cao Học Phẫu Thuật Răng Miệng Vật Liệu Nha Khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học Nha Chu Lâm Sàng, ĐH Méditerranée, Marseille, Pháp.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_02.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_03.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
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
            <div class="l-doctors is-special">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="bg is-sp">
                    <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt="">
                  </div>
                  <div class="img">
                    <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt="">
                    <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Tiến sĩ Y khoa Bện h Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại học Phẫu Thuật Tạo Hình Nha Chu, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Cao Học Phẫu Thuật Răng Miệng Vật Liệu Nha Khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học Nha Chu Lâm Sàng, ĐH Méditerranée, Marseille, Pháp.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_02.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_03.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
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
            <div class="l-doctors is-special">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="bg is-sp">
                    <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt="">
                  </div>
                  <div class="img">
                    <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt="">
                    <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Tiến sĩ Y khoa Bện h Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại học Phẫu Thuật Tạo Hình Nha Chu, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Cao Học Phẫu Thuật Răng Miệng Vật Liệu Nha Khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học Nha Chu Lâm Sàng, ĐH Méditerranée, Marseille, Pháp.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_02.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_03.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
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
            <div class="l-doctors is-special">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="bg is-sp">
                    <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt="">
                  </div>
                  <div class="img">
                    <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt="">
                    <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Tiến sĩ Y khoa Bện h Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại học Phẫu Thuật Tạo Hình Nha Chu, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Chứng Chỉ Cao Học Phẫu Thuật Răng Miệng Vật Liệu Nha Khoa, ĐH Méditerranée, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học Nha Chu Lâm Sàng, ĐH Méditerranée, Marseille, Pháp.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>
                              <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_02.png" alt="">
                            </div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div>undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_03.png" alt="">undefined</div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">undefined<div>undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">undefined</div>undefined</div>
                        </div>
                      </div>
                      <div class="swiper-btn swiper-prev"></div>
                      <div class="swiper-btn swiper-next"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="l-doctors is-special">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="bg is-sp">
                    <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt="">
                  </div>
                  <div class="img">
                    <img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt="">
                    <img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">undefined<h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>undefined<ul class="certificate">undefined<li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>undefined<li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée, Marseille, Pháp.</li>undefined<li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>undefined<li>Tiến sĩ Y khoa Bện h Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>undefined<li>Bằng Chuyên Khoa Sau Đại học Phẫu Thuật Tạo Hình Nha Chu, ĐH Méditerranée, Marseille, Pháp.</li>undefined<li>Chứng Chỉ Cao Học Phẫu Thuật Răng Miệng Vật Liệu Nha Khoa, ĐH Méditerranée, Marseille, Pháp.</li>undefined<li>Bằng Chuyên Khoa Sau Đại Học Nha Chu Lâm Sàng, ĐH Méditerranée, Marseille, Pháp.</li>undefined</ul>undefined<div class="l-cer-img">undefined<div class="l-cer-img_wrap swiper-container js-slide-cer">undefined<div class="l-cer-img_inner swiper-wrapper">undefined<div class="l-cer-img_item swiper-slide">undefined<div>undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">undefined</div>undefined</div>undefined<div class="l-cer-img_item swiper-slide">undefined<div>undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_02.png" alt="">undefined</div>undefined</div>undefined<div class="l-cer-img_item swiper-slide">undefined<div>undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_03.png" alt="">undefined</div>undefined</div>undefined<div class="l-cer-img_item swiper-slide">undefined<div>undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt="">undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="swiper-btn swiper-prev"></div>undefined<div class="swiper-btn swiper-next"></div>undefined</div>undefined</div>undefined
                </div>undefined
              </div>undefined
            </div>
          </div>
          <div class="l-doctors_thumb is-special">undefined<div class="js-doc-thumb">undefined<div class="thumb-item">undefined<div class="thumb-item_inner">undefined<a href="javascript:;">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_01.png" alt="">undefined<div class="name">undefined<span>Bác sĩ Chuyên Khoa I</span>undefined<strong>Mai Hồng Thái</strong>undefined</div>undefined</a>undefined</div>undefined</div>undefined<div class="thumb-item">undefined<div class="thumb-item_inner">undefined<a href="javascript:;">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_02.png" alt="">undefined<div class="name">undefined<span>Bác sĩ Chuyên Khoa I</span>undefined<strong>Mai Hồng Thái</strong>undefined</div>undefined</a>undefined</div>undefined</div>undefined<div class="thumb-item">undefined<div class="thumb-item_inner">undefined<a href="javascript:;">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_01.png" alt="">undefined<div class="name">undefined<span>Bác sĩ Chuyên Khoa I</span>undefined<strong>Mai Hồng Thái</strong>undefined</div>undefined</a>undefined</div>undefined</div>undefined<div class="thumb-item">undefined<div class="thumb-item_inner">undefined<a href="javascript:;">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_02.png" alt="">undefined<div class="name">undefined<span>Bác sĩ Chuyên Khoa I</span>undefined<strong>Mai Hồng Thái</strong>undefined</div>undefined</a>undefined</div>undefined</div>undefined<div class="thumb-item">undefined<div class="thumb-item_inner">undefined<a href="javascript:;">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_03.png" alt="">undefined<div class="name">undefined<span>Bác sĩ Chuyên Khoa I</span>undefined<strong>Mai Hồng Thái</strong>undefined</div>undefined</a>undefined</div>undefined</div>undefined<div class="thumb-item">undefined<div class="thumb-item_inner">undefined<a href="javascript:;">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_04.png" alt="">undefined<div class="name">undefined<span>Bác sĩ Chuyên Khoa I</span>undefined<strong>Mai Hồng Thái</strong>undefined</div>undefined</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined
        </div>undefined
      </section>undefined<section class="m-ungdung">undefined<div class="wrapper">undefined<h2 class="ttl-primary ttl-primary--is-medium">ỨNG DỤNG CÔNG NGHỆ IMPLANT - RĂNG SỨ TIÊU CHUẨN PHÁP</h2>undefined<div class="img">undefined<img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_04.png" alt="">undefined<img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/img_04.png" alt="">undefined</div>undefined<p class="text">100% máy móc, trang thiết bị nhập khẩu trực tiếp từ Mỹ và châu Âu: Hệ thống chẩn đoán hình ảnh đa chiều CT Cone Beam (USA), máy X-Quang 3 chiều KTS Gendex 700 Series (USA), Máy cắm Implant hiện đại PS500 LED (Anh) & phần mềm hỗ trợ cấy ghép Implant Simplant</p>undefined</div>undefined<div class="tooth-type">undefined<div class="wrapper">undefined<div class="tooth-type_inner">undefined<div class="img-tooth">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_06.png" alt="">undefined</div>undefined<div class="img-mau">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_mau.png" alt="">undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="wrapper">undefined<ul class="l-flow">undefined<li class="l-flow_item">undefined<div class="info">undefined<h3 class="ttl-secondary">HỆ THỐNG LABO SẢN XUẤT RĂNG SỨ NGAY TẠI NHA KHOA</h3>undefined<p class="text">Với công nghệ CAD/CAM 3D hiện đại, giúp răng sứ có tính thẩm mỹ cao, màu sắc tự nhiên, kích thước như ý muốn của khách hàng. Qua đó giúp rút ngắn thời gian phục hình.</p>undefined</div>undefined</li>undefined<li class="l-flow_item">undefined<div class="info">undefined<h3 class="ttl-secondary">100% TRỤ IMPLANT VÀ RĂNG SỨ CAO CẤP</h3>undefined<p class="text">Nhập khẩu hính hãng từ Mỹ và Châu Âu, đạt tiêu chuẩn FDA, CE.</p>undefined</div>undefined</li>undefined<li class="l-flow_item">undefined<div class="info">undefined<h3 class="ttl-secondary">HỆ THỐNG PHÒNG ĐIỀU TRỊ VÔ TRÙNG</h3>undefined<p class="text">Phòng điều trị, phòng phẫu thuật hoàn toàn riêng biệt và khép kín. Đảm bảo vô trùng tuyệt đối bằng đèn cực tím theo tiêu chuẩn của Bộ Y Tế. Không gian rộng rãi, thoáng mát, mang đến cảm giác thoải mái cho khách hàng.</p>undefined</div>undefined</li>undefined</ul>undefined</div>undefined</section>undefined<section class="intro is-pc">undefined<div class="wrapper">undefined<h2 class="ttl-primary ttl-primary--is-medium">NHA KHOA I-DENTundefined<br>ĐIỂM ĐẾN ĐÁNG TIN CẬY CHO KHÁCH HÀNG TRONG VÀ NGOÀI NƯỚCundefined</h2>undefined<ul class="tv-clip">undefined<li>undefined<a class="vidplay" href="https://www.youtube.com/watch?v=WXX4qCbyts0">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_tv_01.jpg">undefined</a>undefined<h3 class="fig-title">Đánh giá của Đài truyền hình VTV3 về Nha khoa I-Dent</h3>undefined</li>undefined<li>undefined<a class="vidplay" href="https://www.youtube.com/watch?v=PQu1lk1zBiU">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_tv_02.jpg">undefined</a>undefined<h3 class="fig-title">Đánh giá của Đài truyền hình HTV7 về Nha khoa I-Dent</h3>undefined</li>undefined</ul>undefined</div>undefined</section>undefined<section class="m-customer is-pc">undefined<div class="wrapper">undefined<h2 class="ttl-primary ttl-primary--is-medium">CẢM NHẬN CỦA KHÁCH HÀNG</h2>undefined<div class="m-customer_slide js-cus-slide">undefined<div class="m-customer_item">undefined<div class="m-customer_inner">undefined<figure class="image">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt="">undefined</figure>undefined<div class="info">undefined<h3 class="cus-name">Chú Nguyễn Hải</h3>undefined<p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="m-customer_item">undefined<div class="m-customer_inner">undefined<figure class="image">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt="">undefined</figure>undefined<div class="info">undefined<h3 class="cus-name">Chú Nguyễn Hải</h3>undefined<p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="m-customer_item">undefined<div class="m-customer_inner">undefined<figure class="image">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt="">undefined</figure>undefined<div class="info">undefined<h3 class="cus-name">Chú Nguyễn Hải</h3>undefined<p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="m-customer_item">undefined<div class="m-customer_inner">undefined<figure class="image">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_cus_01.jpg" alt="">undefined</figure>undefined<div class="info">undefined<h3 class="cus-name">Chú Nguyễn Hải</h3>undefined<p class="text">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</p>undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined</section>undefined<section class="m-video is-pc">undefined<div class="wrapper">undefined<h2 class="ttl-primary ttl-primary--is-medium">VIDEOS CẢM NHẬN CỦA KHÁCH HÀNG VỀ NHA KHOA I-DENT</h2>undefined<div class="m-video_inner">undefined<div class="m-video_main">undefined<a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp">undefined</a>undefined</div>undefined<ul class="l-video">undefined<li>undefined<a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp">undefined</a>undefined<div class="video-info">undefined<h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3>undefined<span class="view">Lượt xem : 5230</span>undefined</div>undefined</li>undefined<li>undefined<a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp">undefined</a>undefined<div class="video-info">undefined<h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3>undefined<span class="view">Lượt xem : 5230</span>undefined</div>undefined</li>undefined<li>undefined<a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp">undefined</a>undefined<div class="video-info">undefined<h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3>undefined<span class="view">Lượt xem : 5230</span>undefined</div>undefined</li>undefined<li>undefined<a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp">undefined</a>undefined<div class="video-info">undefined<h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3>undefined<span class="view">Lượt xem : 5230</span>undefined</div>undefined</li>undefined<li>undefined<a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp">undefined</a>undefined<div class="video-info">undefined<h3 class="title">Cảm nhận bệnh nhân sau khi trồng Implant</h3>undefined<span class="view">Lượt xem : 5230</span>undefined</div>undefined</li>undefined</ul>undefined</div>undefined</div>undefined</section>undefined<section class="m-paper is-pc">undefined<div class="wrapper">undefined<h2 class="ttl-primary ttl-primary--is-medium">BÁO CHÍ ĐƯA TIN VỀ NHA KHOA I-DENT</h2>undefined<div class="l-paper js-paper-slide">undefined<div class="m-paper_item">undefined<div class="m-paper_inner">undefined<div class="m-paper_wrap">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">undefined<div class="m-paper_btn">undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="m-paper_item">undefined<div class="m-paper_inner">undefined<div class="m-paper_wrap">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">undefined<div class="m-paper_btn">undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="m-paper_item">undefined<div class="m-paper_inner">undefined<div class="m-paper_wrap">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">undefined<div class="m-paper_btn">undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined<div class="m-paper_item">undefined<div class="m-paper_inner">undefined<div class="m-paper_wrap">undefined<img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_wallpaper_01.jpg" alt="">undefined<div class="m-paper_btn">undefined<div class="m-btn">undefined<a href="#">Xem chi tiết</a>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined</div>undefined</section>
<?php
  require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
  get_footer(); ?>
