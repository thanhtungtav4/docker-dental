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
      <div class="mv"><img class="is-pc" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/bnr.jpg" alt=""><img class="is-sp" loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/sp/bnr.jpg" alt="">
        <h1 class="ttl"><strong>NIỀNG RĂNG</strong>THẨM MỸ</h1><span class="txt">CHO NỤ CƯỜI ĐẸP HOÀN HẢO</span>
        <div class="btn"><a class="popup-with-form" href="#modal-contact"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/bnr_btn.svg" alt="ĐẶT LỊCH HẸN"></a></div>
      </div>
      <section class="m-intro">
        <div class="wrapper">
          <div class="explant">
            <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_01.png" alt=""></div>
            <div class="info">
              <h2 class="ttl-primary ttl-primary--is-medium u-left">NIỀNG RĂNG THẨM MỸ LÀ GÌ?</h2>
              <p class="text">Niềng răng thẩm mỹ hay còn gọi là Chỉnh nha thẩm mỹ. Đây là kỹ thuật điều chỉnh răng hô, móm, răng mọc lệch lạc… về đúng vị trí khớp cắn chuẩn. Bằng cách sử dụng những khí cụ nha khoa như: mắc cài, dây cung, thun cao su, minivis, khay niềng răng...</p>
            </div>
          </div>
        </div>
      </section>
      <section class="bracer-benefit">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">LỢI ÍCH KHI NIỀNG RĂNG THẨM MỸ</h2>
          <ol class="l-benefit">
            <li class="l-benefit_item">
              <h3 class="title"><span class="order">1</span><strong class="ttl">Điều chỉnh khớp cắn, ăn nhai thuận lợi</strong></h3>
              <p class="text">Tình trạng răng hô, móm, khấp khểnh… khiến quá trình ăn uống gặp khó khăn. Nếu kéo dài lâu ngày còn gây lệch khớp cắn nghiêm trọng, đau đầu, đau thái dương hàm… <br>Niềng răng có tác dụng điều chỉnh các răng mọc lệch về đúng vị trí, giúp thức ăn được nhai nghiền dễ dàng hơn.</p>
            </li>
            <li class="l-benefit_item">
              <h3 class="title"><span class="order">2</span><strong class="ttl">Đảm bảo thẩm mỹ khuôn mặt, bảo tồn răng thật</strong></h3>
              <p class="text">Sau khi niềng răng, hàm răng trở nên đều đặn, thẳng tắp. Nụ cười sẽ hoàn hảo hơn rất nhiều.<br>Đồng thời, niềng răng không xâm lấn đến cấu trúc răng thật như một số phương án phục hình khác.</p>
            </li>
            <li class="l-benefit_item">
              <h3 class="title"><span class="order">3</span><strong class="ttl">Ngăn ngừa bệnh lý răng miệng</strong></h3>
              <p class="text">Hàm răng thưa, mọc lệch… rất dễ bị kẹt thức ăn, khó vệ sinh và mảng bám hình thành sâu dưới nướu. <br>Niềng răng sẽ giúp khắc phục triệt để tình trạng này, ngăn chặn vi khuẩn và bệnh lý răng miệng phát triển.</p>
            </li>
            <li class="l-benefit_item">
              <h3 class="title"><span class="order">4</span><strong class="ttl">Cải thiện phát âm</strong></h3>
              <p class="text">Hàm răng giữ vai trò quan trọng trong việc phát âm. Vì vậy khi răng miệng mắc khuyết điểm sẽ tác động trực tiếp đến giọng nói.<br>Khi niềng răng sẽ cải thiện được vấn đề này, giúp việc phát âm chuẩn hơn và giọng nói rõ ràng hơn.</p>
            </li>
          </ol>
        </div>
      </section>
      <section class="bracer-situation">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">NHỮNG TRƯỜNG HỢP NÊN NIỀNG RĂNG THẨM MỸ</h2>
          <ul class="l-issues is-3-col">
            <li class="l-issues_item">
              <div class="inner">
                <div class="img-ham"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_ham_01.png" alt="RRăng mọc lệch lạc"></div>
                <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                <p class="text">Răng mọc lệch lạc</p>
              </div>
            </li>
            <li class="l-issues_item">
              <div class="inner">
                <div class="img-ham"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_ham_02.png" alt="Răng hô"></div>
                <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                <p class="text">Răng hô</p>
              </div>
            </li>
            <li class="l-issues_item">
              <div class="inner">
                <div class="img-ham"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_ham_03.png" alt="Răng móm"></div>
                <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                <p class="text">Răng móm</p>
              </div>
            </li>
            <li class="l-issues_item">
              <div class="inner">
                <div class="img-ham"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_ham_04.png" alt="Răng thưa"></div>
                <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                <p class="text">Răng thưa</p>
              </div>
            </li>
            <li class="l-issues_item">
              <div class="inner">
                <div class="img-ham"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_ham_05.png" alt="Khớp cắn hở"></div>
                <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                <p class="text">Khớp cắn hở</p>
              </div>
            </li>
            <li class="l-issues_item">
              <div class="inner">
                <div class="img-ham"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_ham_06.png" alt="Khớp cắn chéo"></div>
                <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_check.svg" alt=""></div>
                <p class="text">Khớp cắn chéo</p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="bracer-type">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">CÁC LOẠI NIỀNG RĂNG THẨM MỸ</h2>
          <p class="text">Khi đến nha khoa, khách hàng sẽ được bác sĩ thăm khám, chụp phim và tư vấn phương án niềng răng phù hợp nhất. Nhằm đảm bảo kết quả niềng răng hiệu quả, tiết kiệm thời gian và chi phí tối đa.</p>
          <ul class="l-tooths is-bracer">
            <li class="l-tooths_item">
              <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_02.png" alt=""></div>
              <div class="content">
                <h3 class="ttl-background">RĂNG SỨ KIM LOẠI THƯỜNG</h3>
                <p class="text">Mắc cài kim loại sử dụng các khí cụ chỉnh nha, bao gồm dây cung và các mắc cài bằng chất liệu hợp kim không gỉ như Niken-Titanium, để nắn chỉnh răng trở về đúng vị trí mong muốn.<br>Hiện nay, niềng răng mắc cài kim loại có 2 hình thức là: niềng răng mắc cài thường và niềng răng mắc cài tự đóng. Tùy vào tình trạng răng và nhu cầu của khách hàng, bác sĩ điều trị sẽ đưa ra phương án phù hợp nhất.<br>Thời gian niềng răng sẽ kéo dài từ 12 tháng – 36 tháng, trường hợp răng phức tạp có thể kéo dài lâu hơn.</p>
                <div class="info">
                  <div class="info_block"><strong>Ưu điểm</strong>
                    <ul class="l-dots">
                      <li>Đây là phương pháp niềng răng (chỉnh nha) phổ biến nhất hiện nay nhờ chi phí thấp nhưng vẫn đảm bảo kết quả điều trị tốt và nhanh chóng. Nhờ độ bền chắc của mắc cài, với tác dụng lực đều và ổn định sẽ giúp rút ngắn thời gian niềng răng.</li>
                    </ul>
                  </div>
                  <div class="info_block"><strong>Nhược điểm</strong>
                    <ul class="l-dots">
                      <li>Hạn chế duy nhất của phương án này là tính thẩm mỹ trong thời gian đeo mắc cài không được đánh giá cao.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-tooths_item">
              <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_03.png" alt=""></div>
              <div class="content">
                <h3 class="ttl-background">MẮC CÀI SỨ</h3>
                <p class="text">Đây là kỹ thuật sử dụng hệ thống mắc cài và dây cung để kéo răng về đúng vị trí trên hàm. Các mắc cài được làm từ chất liệu sứ cao cấp, có màu trùng với màu răng.<br>Thời gian niềng mắc cài sứ thường lâu hơn mắc cài kim loại khoảng 6 tháng.</p>
                <div class="info">
                  <div class="info_block"><strong>Ưu điểm</strong>
                    <ul class="l-dots">
                      <li>Tính thẩm mỹ cao. Khi giao tiếp ở khoảng cách gần, người đối diện sẽ khó phát hiện ra được rằng bạn đang niềng răng.</li>
                    </ul>
                  </div>
                  <div class="info_block"><strong>Nhược điểm</strong>
                    <ul class="l-dots">
                      <li>Tuy mắc cài sứ có tính thẩm mỹ hơn mắc cài kim loại, nhưng độ bền lại kém hơn, dễ vỡ. Chi phí thực hiện cũng cao hơn.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-tooths_item">
              <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_04.png" alt=""></div>
              <div class="content">
                <h3 class="ttl-background">MẮC CÀI MẶT TRONG</h3>
                <p class="text">Sự khác biệt giữa phương pháp này với loại mắc cài truyền thống chính là vị trí đặt các khí cụ. Thay vì gắn lên mặt ngoài thì tất cả mắc cài và dây cung được chuyển vào mặt trong của răng.<br>Thời gian điều trị mất khoảng 18 – 36 tháng, phụ thuộc khớp cắn và mức độ lệch lạc của răng.</p>
                <div class="info">
                  <div class="info_block"><strong>Ưu điểm</strong>
                    <ul class="l-dots">
                      <li>Tính thẩm mỹ cao cho người niềng răng, bởi mắc cài sẽ được gắn bên trong cung hàm.</li>
                    </ul>
                  </div>
                  <div class="info_block"><strong>Nhược điểm</strong>
                    <ul class="l-dots">
                      <li>Thời gian niềng răng sẽ kéo dài hơn, chi phí đắt hơn rất nhiều so với các loại mắc cài niềng răng khác như mắc cài kim loại, mắc cài sứ,... Việc chăm sóc, vệ sinh răng miệng sẽ khó khăn hơn khi thức ăn vướng vào mắc cài.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="l-tooths_item">
              <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_05.png" alt=""></div>
              <div class="content">
                <h3 class="ttl-background">NIỀNG RĂNG INVISALIGN</h3>
                <p class="text">Thời gian niềng răng sẽ kéo dài hơn, chi phí đắt hơn rất nhiều so với các loại mắc cài niềng răng khác như mắc cài kim loại, mắc cài sứ,... Việc chăm sóc, vệ sinh răng miệng sẽ khó khăn hơn khi thức ăn vướng vào mắc cài.<br>Trong suốt quá trình niềng răng từ 18 – 36 tháng tùy từng trường hợp, sẽ dùng từ 25 – 40 khay niềng.</p>
                <div class="info">
                  <div class="info_block"><strong>Ưu điểm</strong>
                    <ul class="l-dots">
                      <li>Invisalign được xem là phương án niềng răng (chỉnh nha) có tính thẩm mỹ cao nhất, người đối diện sẽ rất khó nhận ra bạn đang niềng răng. Đồng thời tránh được các tình trạng bung mắc cài hay dây cung, không gây tổn thương cho má, nướu… Bạn cũng có thể dễ dàng tháo khay niềng ra để vệ sinh và ăn uống.</li>
                    </ul>
                  </div>
                  <div class="info_block"><strong>Nhược điểm</strong>
                    <ul class="l-dots">
                      <li>Điểm hạn chế chính của phương án niềng răng Invisalign là chi phí cao hơn nhiều so với các phương pháp khác. Ngoài ra, bên cạnh ưu điểm dễ tháo lắp nhưng nếu bạn tháo khay quá thời gian cho phép sẽ khiến kết quả điều trị bị sai lệch.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-tooth-flow">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">QUY TRÌNH NIỀNG RĂNG THẨM MỸ</h2>
          <p class="text">Với chuyên môn cao, cùng kinh nghiệm của đội ngũ Tiến sĩ – Bác sĩ tu nghiệp chuyên sâu hơn hơn  10 năm tại Pháp, nha khoa I-DENT sẽ giúp khách hàng có được trải nghiệm niềng răng an toàn và hiệu quả nhất. Quy trình niềng răng cụ thể sẽ qua các bước sau:</p>
          <ul class="l-tooth-flow">
            <li class="l-tooth-flow_item">
              <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/rangsu/img_flow_01.svg" alt="Thăm khám và chụp phim X-Quang"></div>
              <div class="info"><span class="tag">Bước 1</span>
                <p class="text">Thăm khám và<br>chụp phim X-Quang</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_flow_02.svg" alt="Lấy dấu răng và lên kế hoạch điều trị"></div>
              <div class="info"><span class="tag">Bước 2</span>
                <p class="text">Lấy dấu răng<br>và lên kế hoạch điều trị</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_flow_05.svg" alt="Gắn mắc cài"></div>
              <div class="info"><span class="tag">Bước 3</span>
                <p class="text">Gắn mắc cài</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_flow_04.svg" alt="Theo dõi quá trình dịch chuyển của răng"></div>
              <div class="info"><span class="tag">Bước 4</span>
                <p class="text">Theo dõi quá trình<br>dịch chuyển của răng</p>
              </div>
            </li>
            <li class="l-tooth-flow_item">
              <div class="ico"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_flow_03.svg" alt="Tiến hành bọc mão răng sứ phục hình"></div>
              <div class="info"><span class="tag">Bước 5</span>
                <p class="text">Tháo mắc cài<br>và đeo hàm duy trì</p>
              </div>
            </li>
          </ul><a class="vidplay trans" href="https://www.youtube.com/watch?v=WXX4qCbyts0"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/bg_video.png"></a>
        </div>
      </section>
      <section class="m-bracer-price">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">CHI PHÍ NIỀNG RĂNG BAO NHIÊU?</h2>
          <p class="text">Tại nha khoa I-DENT, sau khi thăm khám và chụp phim X – Quang, bác sĩ sẽ căn cứ vào mức độ khiếm khuyết của răng miệng và điều kiện tài chính của khách hàng, để tư vấn hình thức niềng răng nào là phù hợp nhất.Bảng giá dưới đây là trọn gói cho 1 quá trình niềng răng. Cam kết không phát sinh thêm chi phí trong quá trình điều trị. Ngoài ra, tại nha khoa I-DENT, khách hàng còn được hỗ trợ niềng răng trả góp với lãi suất 0%.</p>
          <ul class="l-bra-price">
            <li class="l-bra-price_item">
              <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_price_01.png" alt=""></div>
              <div class="name js-height">Chỉnh nha cố định mắc cài thường</div>
              <div class="price"><span>15.000.000 VNĐ/ Hàm</span></div>
              <div class="m-btn "><a class="popup-with-form" href="#modal-contact" >TƯ VẤN NGAY</a></div>
            </li>
            <li class="l-bra-price_item">
              <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_price_02.png" alt=""></div>
              <div class="name js-height">Chỉnh nha cố định mắc cài sứ hoặc nhựa</div>
              <div class="price"><span>20.000.000 VNĐ/ Hàm</span></div>
              <div class="m-btn"><a class="popup-with-form" href="#modal-contact" >TƯ VẤN NGAY</a></div>
            </li>
            <li class="l-bra-price_item is-full">
              <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_price_03.png" alt=""></div>
              <div class="outer">
                <div class="name js-height">Chỉnh nha mắc cài mặt lưỡi hoặc Invisalign</div>
                <div class="price"><span>40.000.000 VNĐ -<br>45.000.000 VNĐ/ Hàm</span></div>
                <div class="m-btn"><a class="popup-with-form" href="#modal-contact" >TƯ VẤN NGAY</a></div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="m-prize">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium is-white">LÝ DO NÊN CHỌN NIỀNG RĂNG THẨM MỸ TẠI NHA KHOA I-DENT</h2>
          <ul class="l-prize">
            <li>
              <div class="vec"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_01.svg" alt=""></div>
              <p>Tiến sĩ – Bác sĩ 10 năm<br>tu nghiệp chuyên sâu<br>tại Pháp</p>
            </li>
            <li>
              <div class="vec"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_02.svg" alt=""></div>
              <p>100% Trang thiết bị , vật <br>liệu sứ nhập khẩu từ Mỹ và <br>Châu Âu</p>
            </li>
            <li>
              <div class="vec"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_07.svg" alt=""></div>
              <p>Hơn 8.000 Khách hàng niềng răng<br>và thẩm mỹ răng sứ thành công</p>
            </li>
            <li>
              <div class="vec"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/vec_06.svg" alt=""></div>
              <p>99% Khách hàng<br>hài lòng về I-DENT</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about-doctors">
        <div class="wrapper">
          <h2 class="ttl-primary ttl-primary--is-medium">ĐỘI NGŨ TIẾN SĨ – BÁC SĨ CHUYÊN SÂU NIỀNG RĂNG</h2>
          <div class="wrap-doctor">
            <div class="l-doctors is-single">
              <div class="l-doctors_item">
                <div class="l-doctors_images">
                  <div class="img"><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bracer/img_doc.png" alt=""></div>
                </div>
                <div class="l-doctors_info">
                  <div class="l-doctors_info_inner">
                    <h2 class="name">Bác Sĩ: NGUYỄN HOÀNG THẠNH QUÂN</h2>
                    <ul class="certificate">
                      <li>BÁC SĨ RĂNG HÀM MẶT ĐH Y DƯỢC TP. HỒ CHÍ MINH</li>
                      <li>Chứng chỉ hành nghề số: 010737/HCM - CCHN.</li>
                      <li>Chuyên Niềng răng.</li>
                    </ul>
                    <div class="doc-intro">
                      <ul class="l-dots">
                        <li>Nha khoa I-DENT trang bị máy X – Quang, máy CT 3D hiện đại hàng đầu thế giới, giúp chẩn đoán chính xác và đảm bảo an toàn trong quá trình niềng răng.</li>
                        <li>Nha khoa I-DENT sử dụng 100% khí cụ, mắc cài đều là sản phẩm cao cấp chính hãng, nhập khẩu trực tiếp từ Đức và Hoa Kỳ. Đảm bảo quá trình niềng răng diễn ra chính xác, các răng sai lệch nhanh chóng được điều chỉnh về đúng vị trí mong muốn. Đồng thời đảm bảo sức khỏe răng miệng dài lâu cho khách hàng.</li>
                        <li>Phòng điều trị khép kín, hệ thống vô trùng dụng cụ đạt chuẩn Bộ Y Tế.</li>
                        <li>Minh bạch chi phí, lên phương án điều trị và báo tổng chi phi cho khách hàng trước khi thực hiện. Cam kết không phát sinh bất kỳ chi phí nào trong và sau khi điều trị. Đồng thời hỗ trợ thanh toán trả góp 0% lãi suất.</li>
                        <li>Chính sách bảo hành và chăm sóc cho khách hàng lâu dài. Cam kết không bỏ mặc khách hàng sau khi điều trị xong.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
       require_once( get_stylesheet_directory() . '/module/m-paper.php' );
       require_once( get_stylesheet_directory() . '/module/contact-footer.php' );
      ?>
<?php
get_footer(); ?>
