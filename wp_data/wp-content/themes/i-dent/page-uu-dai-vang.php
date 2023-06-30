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
      <section class="about-doctors no-bg">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">ĐỘI NGŨ CHUYÊN BÁC SĨ HƠN 15 NĂM KINH NGHIỆM</h2>
          <div class="wrap-doctor js-doctors">
            <div class="l-doctors is-special">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="bg is-sp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img">
                    <img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                    <img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Tiến sĩ Y khoa Bện h Lý Học Ở Người, Khoa Y, ĐH Aix-Marseille, Marseille, Pháp.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
                      <li>Chứng Chỉ Chuyên Khoa Sau Đại Học Phục Hình Cố Định, ĐH Aix-Marseille, Marseille, Pháp.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_02.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_03.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_01_cer_01.png" alt=""></div>
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
                  <div class="bg is-sp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img">
                    <img class="is-sp" src="/wp-content/uploads/2023/06/thumb-bs_0003_my-263x375.png.webp" alt="BÁC SĨ - NGUYỄN HUỲNH NGỌC MỸ">
                    <img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_04.png.webp" alt="BÁC SĨ - NGUYỄN HUỲNH NGỌC MỸ">
                  </div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">BÁC SĨ - NGUYỄN HUỲNH NGỌC MỸ</h2>
                    <ul class="certificate">
                      <li>BÁC SĨ CHUYÊN KHOA I – ĐẠI HỌC Y DƯỢC TP. HỒ CHÍ MINH</li>
                      <li>Chứng chỉ hành nghề số: 005327/ĐT - CCHN</li>
                      <li>Chuyên Phục hình sứ trên Implant, Phục hình thẩm mỹ Răng sứ - Veneer</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_04_cer_01.png.webp" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_04_cer_02.png.webp" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_04_cer_03.png.webp" alt=""></div>
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
                  <div class="bg is-sp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img">
                    <img class="is-sp" src="/wp-content/uploads/2023/06/thumb-bs_0002_thai-263x375.png.webp" alt="BÁC SĨ - MAI HỒNG THÁI">
                    <img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_02.png.webp" alt="BÁC SĨ - MAI HỒNG THÁI"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">BÁC SĨ - MAI HỒNG THÁI</h2>
                    <ul class="certificate">
                      <li>BÁC SĨ CHUYÊN KHOA I – ĐẠI HỌC Y DƯỢC TP. HỒ CHÍ MINH</li>
                      <li>Chứng chỉ hành nghề số: 0006076/AG - CCHN</li>
                      <li>Chuyên Cấy ghép Implant, Phục hình sứ trên Implant, Phục hình thẩm mỹ Răng sứ - Veneer</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_02_cer_01.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_02_cer_02.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_02_cer_03.png" alt=""></div>
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
                  <div class="bg is-sp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img">
                    <img class="is-sp" src="/wp-content/uploads/2023/06/thumb-bs_0008_tung-mini-263x375.png.webp" alt="BÁC SĨ - ĐẶNG DUY TÙNG">
                    <img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_05.png.webp" alt="BÁC SĨ - ĐẶNG DUY TÙNG"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">BÁC SĨ - ĐẶNG DUY TÙNG</h2>
                    <ul class="certificate">
                      <li>BÁC SĨ CHUYÊN KHOA I – ĐẠI HỌC Y DƯỢC TP. HỒ CHÍ MINH</li>
                      <li>Chứng chỉ hành nghề số: 0004979/BTR – CCHN</li>
                      <li>Chuyên Cấy ghép Implant, Phục hình sứ trên Implant, Phục hình thẩm mỹ răng sứ - Veneer, Phục hình và Phẫu thuật nha chu.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_05_cer_01.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_05_cer_02.png" alt=""></div>
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
                  <div class="bg is-sp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img">
                    <img class="is-sp" src="/wp-content/uploads/2023/06/thumb-bs_0004_thao-263x375.png.webp" alt="">
                    <img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_06.png.webp" alt="BÁC SĨ - NGÔ THỊ PHƯƠNG THẢO"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">BÁC SĨ - NGÔ THỊ PHƯƠNG THẢO</h2>
                    <ul class="certificate">
                      <li>BÁC SĨ CHUYÊN KHOA I – ĐẠI HỌC Y DƯỢC TP. HỒ CHÍ MINH</li>
                      <li>Chứng chỉ hành nghề số: 005787/CT - CHCN</li>
                      <li>Chuyên thẩm mỹ răng sứ - Veneer, Điều trị bệnh lý nha khoa, Phục hình và Phẫu thuật nha chu.</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_06_cer_01.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_06_cer_02.png" alt=""></div>
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
                  <div class="bg is-sp"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.png" alt=""></div>
                  <div class="img">
                    <img class="is-sp" src="/wp-content/uploads/2023/06/thumb-bs_0001_khanh-263x375.png.webp" alt="BÁC SĨ - VŨ THIỆN KHANH">
                    <img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_03.png.webp" alt="BÁC SĨ - VŨ THIỆN KHANH"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">BÁC SĨ - VŨ THIỆN KHANH</h2>
                    <ul class="certificate">
                      <li>BÁC SĨ CHUYÊN KHOA I – ĐẠI HỌC Y DƯỢC TP. HỒ CHÍ MINH</li>
                      <li>Chứng chỉ hành nghề số: 0002812/BL – CCHN</li>
                      <li>Chuyên Cấy ghép Implant, Phục hình sứ trên Implant, Phục hình thẩm mỹ Răng sứ - Veneer</li>
                    </ul>
                    <div class="l-cer-img">
                      <div class="l-cer-img_wrap swiper-container js-slide-cer">
                        <div class="l-cer-img_inner swiper-wrapper">
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_03_cer_01.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_03_cer_02.png" alt=""></div>
                          </div>
                          <div class="l-cer-img_item swiper-slide">
                            <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/doctor/img_doc_03_cer_03.png" alt=""></div>
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
          </div>
          <div class="l-doctors_thumb is-special">
            <div class="js-doc-thumb">
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_01.png" alt="">
                    <div class="name"><span>Bác sĩ -TIẾN SỸ</span><strong>Nguyễn Hiếu Tùng</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_02.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Nguyễn Huỳnh Ngọc Mỹ</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_01.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Mai Hồng Thái</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_02.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Đặng Duy Tùng</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_03.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Ngô Thị Phương Thảo</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_04.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Vũ Thiện Khanh</strong></div></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="m-ungdung"><div class="wrapper"><h2 class="ttl-primary ttl-primary--is-medium">ỨNG DỤNG CÔNG NGHỆ IMPLANT - RĂNG SỨ TIÊU CHUẨN PHÁP</h2><div class="img"><img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_04.png" alt=""><img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/sp/img_04.png" alt=""></div><p class="text">100% máy móc, trang thiết bị nhập khẩu trực tiếp từ Mỹ và châu Âu: Hệ thống chẩn đoán hình ảnh đa chiều CT Cone Beam (USA), máy X-Quang 3 chiều KTS Gendex 700 Series (USA), Máy cắm Implant hiện đại PS500 LED (Anh) & phần mềm hỗ trợ cấy ghép Implant Simplant</p></div><div class="tooth-type"><div class="wrapper"><div class="tooth-type_inner"><div class="img-tooth"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_06.png" alt=""></div><div class="img-mau"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_mau.png" alt=""></div></div></div></div><div class="wrapper"><ul class="l-flow"><li class="l-flow_item"><div class="info"><h3 class="ttl-secondary">HỆ THỐNG LABO SẢN XUẤT RĂNG SỨ NGAY TẠI NHA KHOA</h3><p class="text">Với công nghệ CAD/CAM 3D hiện đại, giúp răng sứ có tính thẩm mỹ cao, màu sắc tự nhiên, kích thước như ý muốn của khách hàng. Qua đó giúp rút ngắn thời gian phục hình.</p></div></li><li class="l-flow_item"><div class="info"><h3 class="ttl-secondary">100% TRỤ IMPLANT VÀ RĂNG SỨ CAO CẤP</h3><p class="text">Nhập khẩu hính hãng từ Mỹ và Châu Âu, đạt tiêu chuẩn FDA, CE.</p></div></li><li class="l-flow_item"><div class="info"><h3 class="ttl-secondary">HỆ THỐNG PHÒNG ĐIỀU TRỊ VÔ TRÙNG</h3><p class="text">Phòng điều trị, phòng phẫu thuật hoàn toàn riêng biệt và khép kín. Đảm bảo vô trùng tuyệt đối bằng đèn cực tím theo tiêu chuẩn của Bộ Y Tế. Không gian rộng rãi, thoáng mát, mang đến cảm giác thoải mái cho khách hàng.</p></div></li></ul></div></section>

      <section class="intro is-pc"><div class="wrapper"><h2 class="ttl-primary ttl-primary--is-medium">ĐÀI TRUYỀN HÌNH QUỐC GIA ĐƯA TIN VỀ NHA KHOA I-DENT</h2><ul class="tv-clip"><li><a class="vidplay" href="https://www.youtube.com/watch?v=WXX4qCbyts0"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_tv_01.jpg"></a><h3 class="fig-title">Đánh giá của Đài truyền hình VTV3 về Nha khoa I-Dent</h3></li><li><a class="vidplay" href="https://www.youtube.com/watch?v=PQu1lk1zBiU"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_tv_02.jpg"></a><h3 class="fig-title">Đánh giá của Đài truyền hình HTV7 về Nha khoa I-Dent</h3></li></ul></div></section>

      <?php
        require_once( get_stylesheet_directory() . '/module/main-videos.php' );
        require_once( get_stylesheet_directory() . '/module/main-paper.php' );
      ?>
      
<?php
  require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
  get_footer(); ?>
