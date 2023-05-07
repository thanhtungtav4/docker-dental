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
 <section class="m-contact">
   <div class="wrapper">
     <strong>NHẬN TƯ VẤN MIỄN PHÍ TỪ CHUYÊN GIA</strong>
     <h2 class="ttl-primary is-red">ĐẶT LỊCH HẸN THĂM KHÁM NGAY</h2>
     <p>Vui lòng để lại thông tin của quý khách. <br>Nha Khoa I-Dent sẽ liên hệ đến Quý Khách trong thời gian sớm nhất </p>
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
 <div class="contact-information">
   <div class="wrapper">
     <ul class="l-cm">
       <li>
         <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact/img_contact_01.png" alt="Hotline 24/7 094 1818 616">
       </li>
       <li>
         <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact/img_contact_02.png" alt="Thứ 2 - Thứ 7 8h00 - 20h00 Chủ nhật 8h00 - 12h00">
       </li>
       <li>
         <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact/img_contact_03.png" alt="Giữ xe MIỄN PHÍ">
       </li>
     </ul>
   </div>
 </div>
 <div class="m-maps">
   <div class="wrapper">
     <div class="m-maps_item">
       <div class="maps-info">
         <h2 class="title">CƠ SỞ 1</h2>
         <address>CS1: 19V Nguyễn Hữu Cảnh, P.19, Q.Bình Thạnh, Tp.Hồ Chí Minh</address>
         <p class="phone">Điện thoại : (028) 38406854</p>
       </div>
       <div class="maps-iframe">
         <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2814386043055!2d106.70864757686947!3d10.789743358944122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528b2b83f167f%3A0x557143a02eb14d0e!2sNha%20khoa%20Implant%20I-DENT!5e0!3m2!1svi!2s!4v1683012660132!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
     </div>
     <div class="m-maps_item">
       <div class="maps-info">
         <h2 class="title">CƠ SỞ 2</h2>
         <address>CS2: 193A - 195 Hùng Vương, Phường 9, Quận 5, Tp.Hồ Chí Minh</address>
         <p class="phone">Điện thoại : (028) 38336818</p>
       </div>
       <div class="maps-iframe">
         <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d489.95690971388325!2d106.67439424392184!3d10.761028469337875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee258086271%3A0x7686738d866a2c7a!2sNha%20khoa%20Implant%20I-DENT!5e0!3m2!1svi!2s!4v1683013013394!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
     </div>
     <div class="m-maps_item">
       <div class="maps-info">
         <h2 class="title">CƠ SỞ 3</h2>
         <address>CS3: 83 Đường Số 3, KDC CityLand, P.10, Q.Gò Vấp, Tp.Hồ Chí Minh</address>
         <p class="phone">Điện thoại : (028) 22036818</p>
       </div>
       <div class="maps-iframe">
         <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d282.96430421753814!2d106.67025952182688!3d10.837677938245045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752995ed8ccc6b%3A0xc1147d116f1c5645!2sNha%20Khoa%20I-Dent!5e0!3m2!1svi!2s!4v1683013094762!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
     </div>
   </div>
 </div>
<?php get_footer(); ?>
