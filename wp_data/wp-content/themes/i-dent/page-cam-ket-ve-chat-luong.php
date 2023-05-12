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
        <li><span>Cam kết chất lượng</span></li>
      </ul>
    </div>
  </div>
  <div class="m-detail">
    <div class="wrapper">
      <div class="m-detail_inner">
        <article class="m-detail_detail">
          <h2 class="article-title ttl-primary">CAM KẾT VỀ CHẤT LƯỢNG</h2>
          <div class="m-detail_head">
            <div class="m-detail_head-right"><span class="time">08.08.2022</span>
              <ul class="rating">
                <li><img src=""<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                <li><img src=""<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                <li><img src=""<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                <li><img src=""<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_star.svg" alt=""></li>
                <li><img src=""<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_unstar.svg" alt=""></li>
              </ul><span class="view-rate">Đánh giá: 4.0/5 ( 20 bình chọn )</span>
            </div>
          </div>
          <div class="m-article">
            <p>Mỗi khách hàng khi lựa chọn nha khoa để điều trị luôn dựa trên uy tín, danh tiếng của nha khoa. Vì vậy, cam kết bảo hành khi làm răng là một tiêu chí quan trọng để đánh giá chất lượng nha khoa. Hiểu được điều đó, I-DENT luôn minh bạch thông tin, cam kết về chất lượng và chính sách bảo hành cho tất cả khách hàng. Từ đó, tạo dựng niềm tin và sự hài lòng tuyệt đối của khách hàng đối với Nha khoa I-DENT.</p>
            <div class="box-anchors js-box">
              <h3 class="title">Nội dung bài viết<a class="btn-hide is-active" href="javascript:;">[&nbsp;<span>Ẩn</span> ]</a></h3>
              <ol class="l-anchors">
                <li><a href="#sec01">1. Cam kết của nha khoa I-Dent dành cho khách hàng</a></li>
                <li><a href="#sec02">2. Chính sách bảo hành trụ implant của I-Dent</a></li>
                <li><a href="#sec03">3. Chính sách bảo hành răng sứ của I-Dent</a></li>
              </ol>
            </div>
            <h3 id="sec01">1. CAM KẾT CỦA NHA KHOA I-DENT DÀNH CHO KHÁCH HÀNG</h3>
            <h3>1.1 Trong quá trình tư vấn và điều trị</h3>
            <ol>
              <li>Tất cả chi phí thăm khám và chụp phim CT 3D tại nha khoa đều miễn phí hoàn toàn.</li>
              <li>Bác sĩ I-DENT sẽ thăm khám tổng quát sức khỏe răng miệng để lên kế hoạch điều trị cụ thể, rõ ràng và minh bạch cho từng bệnh nhân.</li>
              <li>Khi bệnh nhân đồng ý với kế hoạch điều trị thì mới tiến hành thực hiện.</li>
              <li>Tất cả dịch vụ tại Nha khoa I-DENT đều được báo chi phí trọn gói, đảm bảo không phát sinh thêm chi phí khác.</li>
              <li>Đội ngũ Tiến sĩ – Bác sĩ điều trị cho bệnh nhân đều là những người có kỹ thuật cao, chuyên sâu về: Trồng răng Implant, Răng sứ thẩm mỹ, Niềng răng, Điều trị bệnh lý răng miệng…</li>
              <li>Hệ thống phòng điều trị - phòng phẫu thuật riêng biệt và được vô trùng tuyệt đối, đảm bảo an toàn cho từng khách hàng.</li>
              <li>Sử dụng trang thiết bị và vật liệu nha khoa chính hãng, nhập khẩu trực tiếp từ Châu Âu.</li>
            </ol>
            <h3>1.2 Sau khi điều trị</h3>
            <ol>
              <li>Sẵn sàng hỗ trợ và đưa ra phương án giải quyết cho bệnh nhân khi có vấn đề xảy ra.</li>
              <li>Cung cấp đầy đủ các giấy tờ bảo hành (nếu có).</li>
              <li>Lên lịch tái khám và thông báo cho bệnh nhân.</li>
            </ol>
            <h3 id="sec02">CHÍNH SÁCH BẢO HÀNH TRỤ IMPLANT CỦA I-DENT</h3>
            <p>100% các loại trụ Implant được sử dụng tại Nha khoa I-DENT đều nhập khẩu trực tiếp từ những thương hiêu Implant nổi tiếng thế giới: Mỹ, Pháp,Thụy Sĩ, Đức, Hàn Quốc… Với chính sách bảo hành theo đúng quy định của hãng trụ như sau:</p>
            <div class="tb-scroll">
              <table>
                <thead>
                  <tr>
                    <th>LOẠI IMPLANT</th>
                    <th>THỜI GIAN BẢO HÀNH</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1. Implant Hàn Quốc (DiO)</td>
                    <td>Bảo hành 7 năm theo hãng trụ + Thẻ bảo hành chính hãng</td>
                  </tr>
                  <tr>
                    <td>2. Implant Hàn Quốc (DENTIUM)</td>
                    <td>Bảo hành 10 năm theo hãng trụ + Thẻ bảo hành chính hãng</td>
                  </tr>
                  <tr>
                    <td>3. Implant Mỹ (Dentium USA Superline)</td>
                    <td>Bảo hành 15 năm theo hãng trụ + Thẻ bảo hành chính hãng</td>
                  </tr>
                  <tr>
                    <td>4. Implant Đức (Mis C1)</td>
                    <td>Bảo hành 20 năm theo hãng trụ + Thẻ bảo hành chính hãng</td>
                  </tr>
                  <tr>
                    <td>5. Implant Pháp (GLOBAL D In-Kone)</td>
                    <td>Bảo hành 20 năm theo hãng trụ + Thẻ bảo hành chính hãng</td>
                  </tr>
                  <tr>
                    <td>6. Implant Thụy Điển/Mỹ (NOBEL Biocare)</td>
                    <td>Bảo hành 20 năm theo hãng trụ + Thẻ bảo hành chính hãng</td>
                  </tr>
                  <tr>
                    <td>7. Implant Thụy Sĩ (Straumann SLActive)</td>
                    <td>Bảo hành 20 năm theo hãng trụ + Thẻ bảo hành chính hãng</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h3>2.1 Những trường hợp sẽ được bảo hành và thay mới trụ Implant như sau:</h3>
            <p>Trụ Implant bị gãy; sút, lỏng khớp nối Abutment; nhiễm trùng răng Implant; gãy răng.</p>
            <h3>2.2 Và không được bảo hành khi:</h3>
            <ol>
              <li>Không tuân thủ theo hướng dẫn của bác sĩ sau khi cấy Implant.</li>
              <li>Không chăm sóc răng miệng đúng cách.</li>
              <li>Hút thuốc lá, uống rượu bia… dẫn đến trụ Implant bị đào thải.</li>
              <li>Không tái khám định kỳ theo kế hoạch điều trị.+Đã đến nha khoa khác để can thiệp đến răng Implant.</li>
            </ol>
            <h3 id="sec03">3. CHÍNH SÁCH BẢO HÀNH RĂNG SỨ CỦA I-DENT</h3>
            <p>Tất cả các bệnh nhân phục hình răng sứ tại Nha khoa I-DENT sẽ có thời gian bảo hành tùy theo từng loại răng sứ đã lựa chọn và có thẻ bảo hành từ nha khoa. Cụ thể như sau:</p>
            <div class="tb-scroll">
              <table>
                <thead>
                  <tr>
                    <th>LOẠI RĂNG SỨ</th>
                    <th>THỜI GIAN BẢO HÀNH</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.Răng sứ kim loại (Ceramco 3 – Mỹ)</td>
                    <td>Thẻ bảo hành chính hãng 3 năm</td>
                  </tr>
                  <tr>
                    <td>2. Răng sứ Titan (Mỹ)</td>
                    <td>Thẻ bảo hành chính hãng 5 năm</td>
                  </tr>
                  <tr>
                    <td>3. Răng sứ không kim loại Zirconia DDBio (Đức)</td>
                    <td>Thẻ bảo hành chính hãng 10 năm</td>
                  </tr>
                  <tr>
                    <td>4. Răng sứ không kim loại cao cấp DDBio HT (Đức)</td>
                    <td>Thẻ bảo hành chính hãng 10 năm</td>
                  </tr>
                  <tr>
                    <td>5. Răng sứ không kim loại cao cấp Cercon HT (Đức)</td>
                    <td>Thẻ bảo hành chính hãng 10 năm</td>
                  </tr>
                  <tr>
                    <td>6. Răng sứ không kim loại cao cấp Nacera PEARL (Đức)</td>
                    <td>Thẻ bảo hành chính hãng 15 năm</td>
                  </tr>
                  <tr>
                    <td>7. Răng sứ không kim loại cao cấp Nacera 9 MAX (Đức)</td>
                    <td>Thẻ bảo hành chính hãng 20 năm</td>
                  </tr>
                  <tr>
                    <td>8. Mặt dán sứ (Veneer/Facette)</td>
                    <td>Thẻ bảo hành chính hãng 10 năm</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h3>3.1 Những trường hợp sẽ được bảo hành và thay mới trụ Implant như sau:</h3>
            <ul>
              <li>Răng sứ bị vỡ, mẻ trong quá trình ăn nhai bình thường.</li>
              <li>Răng sứ bị lỏng, sút ra sau khi được gắn cố định.</li>
              <li>Răng sứ bị cộm, cứng gây khó chịu khi ăn nhai.</li>
              <li>Thẻ bảo hành răng sứ còn thời hạn..</li>
            </ul>
            <h3>3.2 Và không được bảo hành khi:</h3>
            <ul>
              <li>Răng sứ gãy, vỡ do bị tai nạn.</li>
              <li>Răng sứ bị hư hỏng sau khi đến nha khoa khác can thiệp.</li>
              <li>Chăm sóc răng miệng kém dẫn đến các bệnh lý về răng miệng.</li>
              <li>Không tái khám định kỳ theo chỉ định của bác sĩ.</li>
              <li>Hết thời gian bảo hành của răng sứ</li>
            </ul><strong class="signature">BAN BIÊN TẬP I-DENT</strong>
          </div>
          <div class="box-information">
            <h2 class="ttl-primary">I-DENT- PHÒNG KHÁM NHA KHOA SỐ 1 TP. HỒ CHÍ MINH</h2>
            <ul class="l-social">
              <li><a class="trans" href="">
                  <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3 1C27.8 1 35.6 8.97219 35.6 18.6819C35.6 28.4938 27.9 36.3638 18.3 36.3638C8.80005 36.3638 1 28.3916 1 18.6819C1.1 8.97219 8.80005 1 18.3 1Z" fill="#025899" stroke="#025899" stroke-width="0.5" stroke-miterlimit="10"></path>
                    <path d="M21.1136 11.7986H23.9137V7.50586H20.6136C16.6136 7.60807 15.8136 9.95883 15.7136 12.4118V14.5582H13.0137V18.7487H15.7136V29.8893H19.8136V18.7487H23.2136L23.8136 14.5582H19.8136V13.2295C19.8136 12.4118 20.3136 11.7986 21.1136 11.7986Z" fill="white"></path>
                  </svg></a></li>
              <li><a class="trans" href="">
                  <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.114 35.2037C26.3372 35.2037 33.814 27.5618 33.814 18.1351C33.814 8.7083 26.3372 1.06641 17.114 1.06641C7.89086 1.06641 0.414062 8.7083 0.414062 18.1351C0.414062 27.5618 7.89086 35.2037 17.114 35.2037Z" fill="#025899" stroke="#025899" stroke-width="0.5" stroke-miterlimit="10"></path>
                    <path d="M23.1139 22.1215H22.0139V21.5083C22.0139 21.2017 22.2139 20.9972 22.5139 20.9972H22.6139C22.9139 20.9972 23.1139 21.2017 23.1139 21.5083V22.1215ZM19.0139 20.6906C18.7139 20.6906 18.5139 20.895 18.5139 21.0994V24.1657C18.5139 24.3701 18.7139 24.5745 19.0139 24.5745C19.3139 24.5745 19.5139 24.3701 19.5139 24.1657V21.0994C19.5139 20.895 19.3139 20.6906 19.0139 20.6906ZM25.6139 18.9531V24.8811C25.6139 26.312 24.4139 27.4363 22.9139 27.4363H11.9139C10.4139 27.4363 9.21387 26.312 9.21387 24.8811V18.9531C9.21387 17.5222 10.4139 16.3979 11.9139 16.3979H22.9139C24.4139 16.3979 25.6139 17.6244 25.6139 18.9531ZM12.7139 25.5966V19.3619H14.1139V18.4421H10.5139V19.3619H11.6139V25.5966H12.7139ZM16.7139 20.2818H15.6139V23.6546C15.6139 24.1657 15.6139 24.3701 15.6139 24.4723C15.5139 24.7789 15.1139 24.9833 14.9139 24.4723C14.9139 24.3701 14.9139 24.1657 14.9139 23.6546V20.2818H13.8138V23.5524C13.8138 24.0635 13.8138 24.4723 13.8138 24.5745C13.8138 24.8811 13.8139 25.1878 14.1139 25.3922C14.6139 25.801 15.6138 25.29 15.8138 24.7789V25.4944H16.7139V20.2818ZM20.4139 24.0635V21.3039C20.4139 20.2818 19.6139 19.5663 18.6139 20.4862V18.4421H17.5139V25.5966H18.4139L18.5139 25.1877C19.6139 26.2098 20.4139 25.3922 20.4139 24.0635ZM24.0139 23.6546H23.1139V23.7568V24.2679C23.1139 24.5745 22.9139 24.7789 22.6139 24.7789H22.4139C22.1139 24.7789 21.9139 24.5745 21.9139 24.2679V23.7568V23.0414H23.9139V22.3259C23.9139 21.8149 23.9138 21.2017 23.8138 20.895C23.7138 19.873 22.3139 19.7708 21.6139 20.2818C21.4139 20.4862 21.2139 20.6906 21.1139 20.895C21.0139 21.2017 21.0139 21.6105 21.0139 22.0193V23.6546C21.1139 26.4142 24.3139 26.1076 24.0139 23.6546ZM19.6139 14.7626C19.7139 14.8648 19.7139 15.0692 19.9139 15.0692C20.0139 15.1714 20.2139 15.1714 20.4139 15.1714C20.6139 15.1714 20.7138 15.1714 20.8138 15.0692C20.9138 14.967 21.0139 14.8648 21.1139 14.6604V15.0692H22.4139V9.55001H21.4139V13.8427C21.4139 14.0471 21.2139 14.2515 21.0139 14.2515C20.8139 14.2515 20.6139 14.0471 20.6139 13.8427V9.55001H19.6139V13.2295C19.6139 13.7405 19.6139 14.0471 19.6139 14.1493C19.5139 14.456 19.5139 14.5582 19.6139 14.7626ZM15.7139 11.5942C15.7139 11.0831 15.7138 10.6743 15.8138 10.3677C15.9138 10.061 16.0138 9.85662 16.3138 9.65221C16.5138 9.44779 16.8139 9.34558 17.2139 9.34558C17.5139 9.34558 17.7139 9.4478 18.0139 9.55001C18.2139 9.65222 18.4139 9.85663 18.5139 9.95883C18.6139 10.1632 18.7139 10.3677 18.7139 10.5721C18.7139 10.7765 18.8138 11.0831 18.8138 11.4919V12.9228C18.8138 13.4339 18.8139 13.8427 18.7139 14.0471C18.7139 14.2515 18.6139 14.5582 18.5139 14.7626C18.4139 14.967 18.2139 15.1714 18.0139 15.1714C17.8139 15.2736 17.6138 15.2736 17.3138 15.2736C17.0138 15.2736 16.8139 15.2736 16.6139 15.1714C16.4139 15.0692 16.2139 14.967 16.1139 14.7626C16.0139 14.5582 15.9139 14.3538 15.9139 14.1493C15.9139 13.9449 15.8138 13.5361 15.8138 13.0251L15.7139 11.5942ZM16.7139 13.8427C16.7139 14.1493 16.9139 14.456 17.2139 14.456C17.5139 14.456 17.7139 14.2516 17.7139 13.8427V10.8787C17.7139 10.5721 17.5139 10.2655 17.2139 10.2655C16.9139 10.2655 16.7139 10.4699 16.7139 10.8787V13.8427ZM13.2139 15.2736H14.4139V11.0831L15.8138 7.50586H14.5139L13.7139 10.1632L12.9139 7.50586H11.6139L13.1139 11.1853L13.2139 15.2736Z" fill="white"></path>
                  </svg></a></li>
              <li><a class="trans" href="">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.91348 3.03058C0.413484 5.68798 0.913484 8.54979 0.913484 17.1352C0.913484 24.2897 -0.286565 31.4443 6.11344 33.1818C8.11344 33.6928 25.8134 33.6928 27.8134 33.1818C30.5134 32.4663 32.6135 30.32 32.9135 26.4361C32.9135 25.9251 32.9135 8.44758 32.9135 7.93654C32.6135 3.84824 30.1135 1.49747 26.9135 0.986431C26.2135 0.884223 26.0134 0.884233 22.2134 0.884233C8.61341 0.884233 5.61348 0.270978 2.91348 3.03058Z" fill="#025899" stroke="#025899" stroke-width="0.5" stroke-miterlimit="10"></path>
                    <path d="M16.9144 5.07499C12.1144 5.07499 7.51429 4.66616 5.71429 9.2655C5.01429 11.2074 5.11432 13.6604 5.11432 17.1355C5.11432 20.2017 5.01429 23.1657 5.71429 25.0055C7.51429 29.6048 12.1144 29.196 16.9144 29.196C21.5144 29.196 26.3143 29.707 28.1143 25.0055C28.8143 23.0635 28.7143 20.6105 28.7143 17.1355C28.7143 12.4339 29.0143 9.3677 26.7143 7.11914C24.5143 4.87057 21.4144 5.07499 16.9144 5.07499ZM15.9144 7.32355C26.0144 7.32355 27.3143 6.19927 26.6143 22.1436C26.3143 27.7651 22.1143 27.1518 17.0143 27.1518C7.61434 27.1518 7.31427 26.8452 7.31427 17.2377C7.21427 7.42577 8.01436 7.32355 15.9144 7.32355ZM23.2143 9.2655C22.4143 9.2655 21.8143 9.87874 21.8143 10.6964C21.8143 11.5141 22.4143 12.1273 23.2143 12.1273C24.0143 12.1273 24.6143 11.5141 24.6143 10.6964C24.6143 9.87874 24.0143 9.2655 23.2143 9.2655ZM16.9144 11.003C13.6144 11.003 10.8143 13.7626 10.8143 17.2377C10.8143 20.6105 13.5144 23.4723 16.9144 23.4723C20.3144 23.4723 23.0143 20.7127 23.0143 17.2377C23.0143 13.7626 20.3144 11.003 16.9144 11.003ZM16.9144 13.1494C22.1144 13.1494 22.1144 21.2238 16.9144 21.2238C11.7144 21.2238 11.7144 13.1494 16.9144 13.1494Z" fill="white"></path>
                  </svg></a></li>
              <li><a class="trans" href="">
                  <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3136 36.4302C27.8681 36.4302 35.6136 28.5138 35.6136 18.7483C35.6136 8.98286 27.8681 1.06641 18.3136 1.06641C8.75907 1.06641 1.01367 8.98286 1.01367 18.7483C1.01367 28.5138 8.75907 36.4302 18.3136 36.4302Z" fill="#025899" stroke="#025899" stroke-width="0.5" stroke-miterlimit="10"></path>
                    <path d="M28.9139 13.7407C28.2139 14.0473 27.4139 14.3539 26.5139 14.3539C27.4139 13.8429 28.0138 13.0252 28.3138 12.0032C27.5138 12.5142 26.6139 12.8208 25.7139 13.0252C24.9139 12.2076 23.9139 11.6965 22.7139 11.6965C20.4139 11.6965 18.6139 13.5363 18.6139 15.887C18.6139 16.1937 18.6139 16.5003 18.7139 16.8069C15.3139 16.6025 12.2139 14.9672 10.2139 12.412C9.81387 13.0252 9.61389 13.7407 9.61389 14.5583C9.61389 15.9893 10.3139 17.3179 11.4139 18.0334C10.7139 18.0334 10.1139 17.829 9.51392 17.5224C9.51392 17.5224 9.51392 17.5224 9.51392 17.6246C9.51392 19.6687 10.9138 21.4062 12.8138 21.7129C12.5138 21.8151 12.1139 21.8151 11.7139 21.8151C11.4139 21.8151 11.2139 21.8151 10.9139 21.7129C11.4139 23.3482 12.9138 24.5747 14.8138 24.6769C13.4138 25.8012 11.6139 26.5166 9.71387 26.5166C9.41387 26.5166 9.01387 26.5166 8.71387 26.4144C10.5139 27.6409 12.7139 28.3564 15.0139 28.3564C22.6139 28.3564 26.7139 21.9173 26.7139 16.3981C26.7139 16.1937 26.7139 15.9893 26.7139 15.887C27.7139 15.376 28.4139 14.5583 28.9139 13.7407Z" fill="#F1F2F2"></path>
                  </svg></a></li>
              <li><a class="trans" href=""><img src=""<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_zalo.svg" alt=""></a></li>
              <li><a class="trans" href=""><img src=""<?php echo get_stylesheet_directory_uri() ?>/assets/images/ico_tiktok.svg" alt=""></a></li>
            </ul>
            <ul class="l-address">
              <li><span>Cơ sở 1:</span>19V Nguyễn Hữu Cảnh, P.19, Q.Bình Thạnh, TP.Hồ Chí Minh</li>
              <li><span>Cơ sở 1:</span>193A-195 Hùng Vương, P.9, Quận 5, TP.Hồ Chí Minh</li>
              <li><span>Cơ sở 1:</span>83 Đường số 3 Khu dân cư Cityland, P.10, Q.Gò Vấp, TP.Hồ Chí Minh</li>
            </ul>
            <ul class="l-outstand">
              <li><a class="trans" href="#">VTV3 nói gì về Nha Khoa I-DENT ?</a></li>
              <li><a class="trans" href="#">Tiến sĩ - Bác sĩ Nguyễn Hiếu Tùng là ai ?</a></li>
              <li><a class="trans" href="#">Tìm hiểu về Đội ngũ Bác sĩ của I-DENT</a></li>
            </ul>
            <?php
              require_once( get_stylesheet_directory() . '/module/form-reserve.php' );
            ?>
          </div>
        </article>
        <sidebar class="m-detail_side">
          <div class="m-detail_side-bnr"><img src="https://placehold.co/360x630" alt=""></div>
          <div class="m-detail_side-bnr"><img src="https://placehold.co/360x500" alt=""></div>
        </sidebar>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
