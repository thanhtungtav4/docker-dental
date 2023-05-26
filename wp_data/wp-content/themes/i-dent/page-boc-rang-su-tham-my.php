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
      <div class="mv"><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/mv.jpg" alt=""><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/sp/mv.jpg" alt="">
        <h1 class="title">RĂNG SỨ THẨM MỸ</h1><span class="name">NỤ CƯỜI HOÀN MỸ</span><a class="btn" href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/allinone/bnr_btn.svg" alt="ĐẶT LỊCH HẸN"></a>
      </div>
      <section class="m-intro">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium ttl-head">BỌC RĂNG SỨ THẨM MỸ LÀ GÌ? CÓ TỐT KHÔNG? GIÁ BỌC RĂNG SỨ BAO NHIÊU?</h2>
          <div class="doc-intro">
            <p class="text">Bọc răng sứ thẩm mỹ đang là phương án làm đẹp răng được đông đảo nhiều người thực hiện. Nhờ những ưu điểm vượt bật, bọc răng sứ giúp khắc phục các khuyết điểm của răng cũ, mang lại một nụ cười trắng sáng, hàm răng mới đều đẹp tự nhiên, giúp người làm răng sứ tự tin hơn trong giao tiếp, cuộc sống hằng ngày. Vậy thực chất bọc răng sứ là gì? Bọc răng sứ có tốt như quảng cáo không? Chi phí (giá) bọc răng sứ bao nhiêu? Hãy cùng tìm hiểu với Nha khoa I-Dent.</p>
          </div>
          <div class="explant">
            <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_01.png" alt=""></div>
            <div class="info">
              <h3 class="ttl-primary ttl-primary--is-medium u-left">BỌC RĂNG SỨ LÀ GÌ ?</h3>
              <p class="text"><a href="#">Bọc răng sứ thẩm mỹ</a> là phương pháp phục hình bằng vật liệu sứ giúp phục hồi chức năng và cải thiện thẩm mỹ, giúp mang lại dáng răng đều, đẹp, màu sắc tự nhiên như răng thật. Trong đó, Bác sĩ sẽ tiến hành mài nhẹ răng hư để làm cùi răng, sau đó lắp mão răng sứ lên trên. Phần mão sứ này sẽ có độ trong và màu sắc trắng sáng tự nhiên như răng thật. Bên cạnh việc cải thiện thẩm mỹ, phương án bọc răng sứ còn giúp bảo vệ răng thật trước những loại vi khuẩn gây hại cho răng.</p>
              <div class="m-btn"><a href="#">ĐẶT LỊCH TƯ VẤN</a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="m-who">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">AI NÊN BỌC RĂNG SỨ</h2>
          <p class="text">Với sự phát triển của công nghệ nha khoa, bọc răng sứ thẩm mỹ không chỉ đem lại một hàm răng trắng sáng tự nhiên. Mà còn giúp bạn khắc phục được các nhược điểm của răng như:</p>
          <div class="content">
            <div class="img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_02.png" alt=""></div>
            <ul class="l-issues">
              <li class="l-issues_item">
                <div class="inner">
                  <div class="img-ham"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_ham_01.png" alt="Răng bị sâu, sứt mẻ, gãy vỡ, viêm tủy, mòn men răng"></div>
                  <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                  <p class="text">Răng bị sâu, sứt mẻ, gãy vỡ, viêm tủy, mòn men răng</p>
                </div>
              </li>
              <li class="l-issues_item">
                <div class="inner">
                  <div class="img-ham"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_ham_02.png" alt="Răng thưa hở, răng mọc lệch lạc, khấp khểnh, răng hô, móm"></div>
                  <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                  <p class="text">Răng thưa hở, răng mọc lệch lạc, khấp khểnh, răng hô, móm</p>
                </div>
              </li>
              <li class="l-issues_item">
                <div class="inner">
                  <div class="img-ham"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_ham_03.png" alt="Răng bị xỉn màu, nhiễm kháng sinh tetracylin, ngả vàng, không thể tẩy trắng được"></div>
                  <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                  <p class="text">Răng bị xỉn màu, nhiễm kháng sinh tetracylin, ngả vàng, không thể tẩy trắng được</p>
                </div>
              </li>
              <li class="l-issues_item">
                <div class="inner">
                  <div class="img-ham"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_ham_04.png" alt="Răng hư, có hình dạng to, nhỏ không đồng đều"></div>
                  <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                  <p class="text">Răng hư, có hình dạng to, nhỏ không đồng đều</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="about-bstung">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">BỌC RĂNG SỨ CÓ TỐT KHÔNG?</h2>
          <p class="text">Bọc răng sứ mang lại nhiều ưu điểm về mặt thẩm mỹ. Tuy nhiên, nhiều khách hàng vẫn lo lắng về bọc răng sứ có tốt không? Có gây biến chứng hay ảnh hưởng đến sức khỏe gì không?</p>
          <div class="wrap">
            <div class="loibacsi">
              <quote>
                <p class="text">Nhờ những công nghệ nha khoa vượt bật hiện nay, giúp phương án bọc răng sứ được thực hiện với hiệu quả cao nhất. Nếu bạn lựa chọn bọc răng sứ tại nha khoa uy tín, có trang thiết bị hiện đại và đội ngũ Bác sĩ có tay nghề chuyên môn cao thì quá trình bọc răng sứ, dán sứ veneer được diễn ra an toàn, hoàn toàn không xảy ra các biến chứng hay ảnh hưởng sức khỏe. Và phương án bọc răng sứ sẽ giúp bạn có được một nụ cười xinh đẹp, tự tin như ý<br>Tuy nhiên, cũng xin lưu ý với mọi người, hiện nay có rất nhiều lời quảng cáo giá rẻ từ những cơ sở làm răng sứ kém chất lượng. Với những lời chào mời hấp dẫn, hình ảnh răng sứ đẹp mắt nhưng chỉ vài trăm nghìn đồng, đến một triệu nhằm thu hút khách hàng. Khi bọc răng sứ tại những địa chỉ này, ban đầu có thể rất đẹp tuy nhiên do chất lượng sứ không đảm bảo, tay nghề bác thực hiện không đúng kỹ thuật có dể dẫn đến biến chứng nguy hiểm sau thời gian ngắn sử dụng như: răng bị xâm lấn nhiều làm chết tủy răng thật, ảnh hưởng đến chức năng ăn nhai, gây hôi miệng, đau ê buốt răng, răng bị nhiễm trùng, thậm chỉ phải nhổ bỏ răng....<br>Tốt nhất, bạn nên đến trực tiếp nha khoa uy tín để bác sĩ tư vấn chính xác phương án cho tính trạng răng của mình rồi mới đồng ý thực hiện bọc răng sứ.</p>
              </quote><span class="signature">Chia sẻ của Tiến sĩ - Bác sĩ : NGUYỄN HIẾU TÙNG</span>
            </div>
            <div class="img-doc"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_doc.png" alt=""></div>
          </div>
        </div>
      </section>
      <section class="m-tooth-type">
        <h2 class="ttl-primary ttl-primary--is-medium">CÁC DÁNG RĂNG SỨ ĐƯỢC LỰA CHỌN NHIỀU TẠI NHA KHOA I-DENT</h2>
        <div class="tooth-type">
          <div class="wrapper">
            <div class="tooth-type_inner">
              <div class="img-tooth"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_06.png" alt=""></div>
              <div class="img-mau"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_mau.png" alt=""></div>
            </div>
          </div>
        </div>
      </section>
      <div class="box-text">
        <div class="wrapper">
          <p class="text">Nha khoa I-Dent có hệ thống labo sản xuất răng sứ với công nghệ thiết kế răng sứ CAD/CAM 3D ngay tại Nha khoa giúp tăng tính thẩm mỹ tự nhiên về màu sắc, kích thước như ý muốn của khách hàng, qua đó giúp rút ngắn thời gian phục hình.<br><strong>100% vật liệu răng sứ cao cấp nhập khẩu trực tiếp tại Đức và Mỹ.</strong></p>
        </div>
      </div>
      <section class="m-tooth-flow">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">QUY TRÌNH BỌC RĂNG SỨ THẨM MỸ</h2>
          <p class="text">Quy trình bọc răng sứ tại nha Nha khoa I-Dent được diễn ra khép kín theo tiêu chuẩn Bộ Y tế. Với những trường hợp bệnh nhân có sức khỏe răng miệng bình thường, không mắc những bệnh lý như sâu răng, viêm nha chu, … thì thời gian bọc sứ chỉ mất từ 4 – 5 ngày cho 2 lần hẹn, mỗi lần hẹn cách nhau khoảng 2 – 3 ngày với các bước sau.</p>
          <ul class="l-tooth-flow">
            <li class="l-tooth-flow_item">
              <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_flow_01.svg" alt="Thăm khám và chụp phim X-Quang"></div>
              <div class="info"><span class="tag">Bước 1</span>
                <p class="text">Thăm khám và<br>chụp phim X-Quang</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_flow_02.svg" alt="Lên kế hoạch điều trị"></div>
              <div class="info"><span class="tag">Bước 2</span>
                <p class="text">Lên kế hoạch điều trị</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_flow_03.svg" alt="Tiến hành gây tê và tạo hình cùi răng"></div>
              <div class="info"><span class="tag">Bước 3</span>
                <p class="text">Tiến hành gây tê và<br>tạo hình cùi răng</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_flow_04.svg" alt="Lấy dấu mẫu hàm và thiết kế mão răng sứ"></div>
              <div class="info"><span class="tag">Bước 4</span>
                <p class="text">Lấy dấu mẫu hàm<br>và thiết kế mão răng sứ</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_flow_05.svg" alt="Tiến hành bọc mão răng sứ phục hình"></div>
              <div class="info"><span class="tag">Bước 5</span>
                <p class="text">Tiến hành bọc mão<br>răng sứ phục hình</p>
              </div>
            </li>
          </ul><a class="vidplay trans" href="https://www.youtube.com/watch?v=WXX4qCbyts0"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/bg_video.png"></a>
        </div>
      </section>
      <section class="m-promo m-promo-normal">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">BỌC RĂNG SỨ GIÁ BAO NHIÊU ?</h2>
          <p class="text">Tại nha khoa I-Dent, 100% răng sứ cao cấp chính hãng cao cấp nhập khẩu trực tiếp từ Đức và Hoa Kỳ để đảm bảo kết quả tốt nhất cho khách hàng. Bảng giá dưới đây là trọn gói cho 1 răng sứ. Cam kết không phát sinh thêm chi phí trong quá trình điều trị.Chi phí thăm khám ban đầu hoàn toàn miễn phí 100%. Ngoài ra, tại Nha Khoa I-Dent, khách hàng còn được<strong> hỗ trợ thanh toán trả góp với lãi suất 0%.</strong></p>
          <ul class="l-uudai">
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ kim loại<strong>Ceramco 3 - Mỹ</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 3 năm)</div>
                  <div class="img">
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_01.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price current-price">1.000.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ Titan<strong>Mỹ</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 5 năm)</div>
                  <div class="img">
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_02.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price current-price">2.500.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ kim loại<strong>Chrom-Cobalt- Mỹ</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 5 năm)</div>
                  <div class="img">
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_03.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price current-price">3.500.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ toàn sứ Đức<strong>Zirconia DDBio</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 10 năm)</div>
                  <div class="img"><span class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%"></span>
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_04.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price old-price">4.500.000 VNĐ</strong><strong class="price new-price">3.600.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ toàn sứ Đức<strong>DDBio HT</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 10 năm)</div>
                  <div class="img">
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_05.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price current-price">1.000.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ toàn sứ Đức<strong>DDBio HT</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 10 năm)</div>
                  <div class="img"><span class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%"></span>
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_06.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price old-price">6.000.000 VNĐ</strong><strong class="price new-price">4.800.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ toàn sứ Đức<strong>Nacera PEAR</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 15 năm)</div>
                  <div class="img">
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_07.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price current-price">8.000.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
            <li class="l-uudai_item is-blue">
              <div class="inner">
                <div class="heading js-height">Răng sứ toàn sứ Đức<strong>Nacera 9Max</strong></div>
                <div class="body">
                  <div class="warranty">(Bảo hành 20 năm)</div>
                  <div class="img"><span class="ico"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/service/ico_khuyenmai_20.svg" alt="-20%"></span>
                    <div class="img_inner"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/item_08.png" alt=""></div>
                  </div>
                  <div class="box-price"><strong class="price old-price">9.000.000 VNĐ</strong><strong class="price new-price">7.200.000 VNĐ</strong></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div class="box-text">
        <div class="wrapper">
          <p class="text">Nha khoa I-Dent áp dụng bảo hành theo chính hãng răng sứ. Ngoài ra, bác sĩ I-Dent sẽ hỗ trợ bệnh nhân tất cả các vấn đề phát sinh của khách hàng trong quá trình sử dụng. Nha khoa I-Dent cam kết không bỏ mặt khách hàng sau khi bọc răng sứ xong.</p>
        </div>
      </div>
      <section class="m-prize">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium is-white">VÌ SAO BẠN NÊN BỌC RĂNG SỨ TẠI NHA KHOA I-DENT</h2>
          <ul class="l-prize">
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt=""></div>
              <p>Tiến sĩ – Bác sĩ 10 năm<br>tu nghiệp chuyên sâu<br>tại Pháp</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt=""></div>
              <p>100% Trang thiết bị , vật <br>liệu sứ nhập khẩu từ Mỹ và <br>Châu Âu</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_04.svg" alt=""></div>
              <p>Hơn 6000 Khách hàng<br>thẩm mỹ răng sứ</p>
            </li>
            <li>
              <div class="vec"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_06.svg" alt=""></div>
              <p>99% Khách hàng<br>hài lòng về I-DENT</p>
            </li>
          </ul>
        </div>
      </section>
      <div class="box-check">
        <div class="wrapper">
          <ul class="l-check">
            <li>Đội ngũ Bác sĩ là những Tiến sĩ – Bác sĩ chuyên khoa trình độ chuyên môn cao, trên 10 năm kinh nghiệm, được đào tạo trực tiếp tại Pháp.</li>
            <li>Công nghệ, trang thiết bị nhập khẩu trực tiếp từ châu Âu. Phòng phẫu thuật vô trùng khép kín đạt chuẩn Bộ Y Tế.</li>
            <li>Hệ thống labo sản xuất răng sứ với công nghệ thiết kế răng sứ CAD/CAM 3D ngay tại Nha khoa giúp tăng tính thẩm mỹ tự nhiên về màu sắc, kích thước như ý muốn của khách hàng, qua đó giúp rút ngắn thời gian phục hình. 100% vật liệu răng sứ cao cấp nhập khẩu trực tiếp tại Đức và Mỹ.</li>
            <li>Công nghệ gây tê tiên tiến nhất, giúp bệnh nhân hoàn toàn không đau trong suốt quá trình bọc răng sứ thẩm mỹ.</li>
            <li>Minh bạch chi phí, lên phương án điều trị và báo tổng chi phi cho Quý Bệnh nhân trước khi thực hiện. Cam kết không phát sinh bất kỳ chi phí nào sau khi điều trị.</li>
            <li>Chính sách bảo hành và chăm sóc cho bệnh nhân đến trọn đời. Cam kết không bỏ mặc bệnh nhân sau khi điều trị xong.</li>
          </ul>
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
                  <div class="img"><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
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
                  <div class="img"><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
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
                  <div class="img"><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
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
                  <div class="img"><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
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
                  <div class="img"><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
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
                  <div class="img"><img class="is-sp" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_bs_01.png" alt=""><img class="is-pc" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bs-tung/img_doc_04.png" alt="TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG"></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">TIẾN SĨ - BÁC SĨ NGUYỄN HIẾU TÙNG </h2>
                    <ul class="certificate">
                      <li>Chứng chỉ hành nghề số: 0002468/TG – CCHN.</li>
                      <li>Bằng Chuyên Khoa Sau Đại Học IMPLANT Nha khoa, ĐH Méditerranée,     Marseille, Pháp.</li>
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
          </div>
          <div class="l-doctors_thumb is-special">
            <div class="js-doc-thumb">
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_01.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Mai Hồng Thái</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/img_thumb_02.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Mai Hồng Thái</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_01.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Mai Hồng Thái</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_02.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Mai Hồng Thái</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_03.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Mai Hồng Thái</strong></div></a></div>
              </div>
              <div class="thumb-item">
                <div class="thumb-item_inner"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/promotion/img_doc_04.png" alt="">
                    <div class="name"><span>Bác sĩ Chuyên Khoa I</span><strong>Mai Hồng Thái</strong></div></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="m-cus-danhgia">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">ĐÁNH GIÁ CỦA KHÁCH HÀNG KHI BỌC RĂNG SỨ TẠI NHA KHOA I-DENT</h2>
          <ul class="l-demo is-one">
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_cus.png" alt=""></div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">Chị Thu Yến - Long An</h3><span class="lca">36 Tuổi</span>
                  </div>
                  <div class="type js-height">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</div>
                  <div class="implant">Bọc sứ 20 răng - Zirconia</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_cus.png" alt=""></div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">Chị Kiều Oanh - Kiên Giang</h3><span class="lca">34 Tuổi</span>
                  </div>
                  <div class="type js-height">Nhờ đến nha khoa I-Dent và được bác sĩ Thái tư vấn bọc 20 răng sứ Cercon HT, nên giờ răng của chị đẹp hơn rất nhiều. Răng trắng sáng và đều màu. Chị cũng rất thích dịch vụ ở đây, báo giá rõ ràng và trọn gói</div>
                  <div class="implant">Bọc sứ 20 răng - Cercon HT</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_cus.png" alt=""></div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">Chị Thu Liên - Bình Dương</h3><span class="lca">36 Tuổi</span>
                  </div>
                  <div class="type js-height">Răng chị nhiễm kháng sinh Tetra khá nặng, tẩy trắng nhiều lần cũng không hiệu quả. Chỉ sau khi bọc sứ tại nha khoa I-Dent, mới cải thiện được thẩm mỹ cho cả hàm răng. Giờ chị có thể tự tin cười nói, công việc cũng thuận lợi hơn.</div>
                  <div class="implant">Bọc sứ 16 răng - DDBio HT</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_cus.png" alt=""></div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">Chị Thu Yến - Long An</h3><span class="lca">36 Tuổi</span>
                  </div>
                  <div class="type js-height">Nhờ người bạn đồng nghiệp giới thiệu, chị biết đến I-Dent và thực hiện bọc răng sứ tại đây. Giờ chị có thể tự tin cười nói vui vẻ mà không e ngại hàm răng ố vàng. Cảm ơn Bác sĩ Tùng, Bác sĩ Khanh và I-Dent rất nhiều.</div>
                  <div class="implant">Bọc sứ 20 răng - Zirconia</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_cus.png" alt=""></div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">Chị Kiều Oanh - Kiên Giang</h3><span class="lca">34 Tuổi</span>
                  </div>
                  <div class="type js-height">Nhờ đến nha khoa I-Dent và được bác sĩ Thái tư vấn bọc 20 răng sứ Cercon HT, nên giờ răng của chị đẹp hơn rất nhiều. Răng trắng sáng và đều màu. Chị cũng rất thích dịch vụ ở đây, báo giá rõ ràng và trọn gói</div>
                  <div class="implant">Bọc sứ 20 răng - Cercon HT</div>
                </div>
              </div>
            </li>
            <li class="l-demo_item">
              <div class="wrap">
                <div class="demo-img"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_cus.png" alt=""></div>
                <div class="demo-info">
                  <div class="demo-info_name">
                    <h3 class="name">Chị Thu Liên - Bình Dương</h3><span class="lca">36 Tuổi</span>
                  </div>
                  <div class="type js-height">Răng chị nhiễm kháng sinh Tetra khá nặng, tẩy trắng nhiều lần cũng không hiệu quả. Chỉ sau khi bọc sứ tại nha khoa I-Dent, mới cải thiện được thẩm mỹ cho cả hàm răng. Giờ chị có thể tự tin cười nói, công việc cũng thuận lợi hơn.</div>
                  <div class="implant">Bọc sứ 16 răng - DDBio HT</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-video is-special">
        <div class="wrapper">
          <div class="m-video_inner">
            <div class="m-video_main"><a class="vidplay" href="https://www.youtube.com/watch?v=jZF0MMdPang"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/thumbnail-video1.webp"></a></div>
            <ul class="l-video js-loadmore">
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
            <div class="m-btn btn-more is-sp"><a href="javascript:;">Xem thêm</a></div>
          </div>
        </div>
      </section>
      <section class="m-paper">
        <div class="wrapper">
          <h2 class="ttl-primary">BÁO CHÍ ĐƯA TIN VỀ NHA KHOA I-DENT</h2>
          <div class="l-paper js-paper-slide">
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
          <h2 class="ttl-primary is-red">ĐẶT LỊCH HẸN <br class="is-sp">THĂM KHÁM NGAY</h2>
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
      <section class="m-faq">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">NHỮNG CÂU HỎI THƯỜNG GẶP KHI BỌC RĂNG SỨ TẠI NHA KHOA I-DENT</h2>
          <ul class="l-faq is-special">
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">1. Bọc răng sứ có tốt không ?</h3>
                <div class="m-btn is-reverse active"><a href="javascript:;">Thu gọn</a></div>
              </div>
              <div class="answer" style="display: block">
                <p class="text"><span class="bg">Trả lời:</span> Rất nhiều khách hàng băn khoăn liệu bọc răng sứ có tốt không? Có ảnh hưởng gì đến sức khỏe răng miệng hay không. Thực tế, nếu được chỉ định đúng trường hợp và thực hiện đúng kỹ thuật, thì bọc răng sứ sẽ mang đến nhiều lợi ích:<strong>Tăng tính thẩm mỹ cho khuôn mặt</strong>Răng mọc khấp khểnh, răng thưa, răng hô, móm, răng ố vàng, xỉn màu… khiến nhiều người mất tự tin khi giao tiếp.<br>Bọc răng sứ là lựa chọn tối ưu để khắc phục được các khuyết điểm của răng. Mang đến cho bạn một hàm răng trắng sáng, đều đặn và khuôn mặt trở nên hài hòa hơn rất nhiều.<strong>Bảo vệ răng thật</strong>Trong quá trình ăn nhai hàng ngày, răng thật dễ bị tác động bởi hóa chất, nhiệt độ, vi khuẩn… dẫn tới bị sâu răng, mòn cổ chân răng, viêm tủy… Hoặc sau khi điều trị các bệnh lý răng miệng, khiến răng thật bị yếu đi.<br>Với những trường hợp trên, bọc sứ để bảo vệ răng thật là điều cần thiết. Răng sứ có độ bền cao, chịu lực tốt nên có thể giữ cho răng thật không bị tấn công bởi các tác nhân có hại, giúp răng luôn chắc khỏe.<strong>Cải thiện tình trạng sai lệch khớp cắn</strong>Trong những trường hợp sai khớp cắn nhẹ thì có thể cải thiện bằng cách bọc răng sứ. Thời gian điều trị nhanh chóng, chỉ 3 - 5 ngày là hoàn thiện.<br>Khớp cắn được điều chỉnh, giúp việc ăn uống hàng ngày và vệ sinh răng miệng dễ dàng hơn.</p>
              </div>
            </li>
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">2. Bọc răng sứ có đau không và những triệu chứng kèm theo?</h3>
                <div class="m-btn is-reverse active"><a href="javascript:;">Thu gọn</a></div>
              </div>
              <div class="answer" style="display: block">
                <p class="text"><span class="bg">Trả lời:</span> Bọc răng sứ là một kỹ thuật nha khoa được đánh giá là an toàn đối với sức khỏe răng miệng. Tuy nhiên, bọc sứ có đau không sẽ phụ thuộc khá nhiều vào tay nghề của bác sĩ thực hiện và sự hỗ trợ của các trang thiết bị, máy móc.<br>Nếu bạn thực hiện bọc sứ tại một nha khoa kém uy tín, thiếu trang thiết bị và bác sĩ thao tác sai kỹ thuật thì có thể dẫn tới tình trạng đau nhức khi bọc sứ, bởi những nguyên nhân:<strong>Bọc sứ bị viêm nướu</strong>Bác sĩ mài cùi răng quá nhiều, can thiệp sâu đến cấu trúc răng đã tạo điều kiện cho vi khuẩn tấn công và làm tổn thương răng, tổn thương các mô mềm, dẫn tới viêm nướu.<br>Hoặc do răng sứ chế tác sai kỹ thuật, khi gắn lên không sát khít với răng thật, làm cho thức ăn dễ mắc vào và gây viêm.<strong>Bọc sứ bị hở cổ chân răng</strong>Nếu bác sĩ không có tay nghề cao thì quá trình mài răng dễ có nhiều sai sót, cùi bề mặt không nhẵn khiến mão răng sứ chụp lên không sát khít. Lâu ngày răng sứ sẽ bị hở gây mất thẩm mỹ và nhiều hệ lụy khác.<br>Ngoài ra, nếu bạn chăm sóc răng miệng không đúng cách, chải răng theo chiều ngang, chải răng quá mạnh… cũng sẽ khiến răng sứ dễ bị lệch và hở cùi răng.<strong>Bọc sứ bị cộm</strong>Răng sứ bị cộm, cấn không chỉ gây nhiều khó khăn trong quá trình ăn nhai mà còn làm cho bạn thấy đau nhức, khó chịu.<br>Câu hỏi: Bọc răng sứ có bền không ?</p>
              </div>
            </li>
            <li class="l-faq_item">
              <div class="heading">
                <h3 class="question ttl-secondary">3. Bọc răng sứ có bền không ?</h3>
                <div class="m-btn is-reverse"><a href="javascript:;">Trả lời</a></div>
              </div>
              <div class="answer">
                <p class="text">Loremipsum</p>
              </div>
            </li>
          </ul>
        </div>
      </section>
 <?php
  require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
  get_footer(); ?>
