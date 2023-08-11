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
    <div class="wrapper thanks-page" style="text-align:center;">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76" fill="none">
          <path d="M38 0C17.0468 0 0 17.0468 0 38C0 58.9532 17.0468 76 38 76C58.9532 76 76 58.9532 76 38C76 17.0468 58.9532 0 38 0ZM38 69.0909C20.8562 69.0909 6.90909 55.1435 6.90909 38C6.90909 20.8565 20.8562 6.90909 38 6.90909C55.1438 6.90909 69.0909 20.8565 69.0909 38C69.0909 55.1435 55.1435 69.0909 38 69.0909Z" fill="#025899"/>
          <path d="M52.2494 24.5649L32.7073 44.1068L23.7508 35.1501C22.4019 33.8012 20.2145 33.801 18.8654 35.1499C17.5162 36.499 17.5162 38.6862 18.8654 40.0353L30.2644 51.4349C30.9123 52.0827 31.7909 52.4468 32.707 52.4468H32.7073C33.6234 52.4468 34.502 52.0827 35.1498 51.4351L57.1348 29.4506C58.4839 28.1015 58.4839 25.9143 57.1348 24.5652C55.7857 23.2161 53.5985 23.2158 52.2494 24.5649Z" fill="#025899"/>
        </svg>
      </div>
      <div>
        <h1 class="ttl-primary ttl-primary--is-medium">ĐĂNG KÝ THÀNH CÔNG</h1>
      </div>
      <p>
        Cảm ơn Quý khách đã đăng ký nhận ưu đãi. Nha khoa I-DENT đã nhận được thông tin của Quý khách. <br>Chúng tôi sẽ liên hệ đến Quý khách trong thời gian sớm nhất.
      </p>
      <p>
        Hoặc vui lòng liên hệ Hotline
      </p>
      <div>
        <a href="tel:0941818616" class="call_button">
          <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
            <path d="M19.761 18.5477C19.2767 18.0633 18.4189 18.0633 17.9345 18.5477L16.8207 19.6615L15.3348 18.7697C14.303 18.1504 12.8524 16.6997 12.233 15.6679L11.3412 14.182L12.455 13.0669C12.6972 12.8247 12.8335 12.4968 12.8335 12.1537C12.8335 11.8106 12.6972 11.4826 12.455 11.2404L7.88754 6.67419C7.38298 6.16964 6.5656 6.16964 6.06104 6.67419L3.77792 8.95732C2.08639 10.6476 2.22388 14.2716 4.09201 17.2068L4.93714 18.5351C6.55298 21.0743 9.931 24.4523 12.4664 26.0643L13.7946 26.9107C15.2995 27.8681 17.0831 28.4168 18.6888 28.4168C20.1029 28.4168 21.2634 28.0044 22.0442 27.2236L24.3285 24.9404C24.8318 24.4359 24.8318 23.6185 24.3273 23.1139L19.761 18.5477ZM28.4167 15.5002C28.4167 16.2141 27.839 16.7918 27.125 16.7918C26.4111 16.7918 25.8334 16.2141 25.8334 15.5002C25.8334 9.80245 21.1978 5.16683 15.5 5.16683C14.7861 5.16683 14.2084 4.58911 14.2084 3.87516C14.2084 3.16121 14.7861 2.5835 15.5 2.5835C22.6219 2.5835 28.4167 8.37834 28.4167 15.5002ZM14.2084 7.75016C14.2084 7.03621 14.7861 6.4585 15.5 6.4585C20.4851 6.4585 24.5417 10.5151 24.5417 15.5002C24.5417 16.2141 23.964 16.7918 23.25 16.7918C22.5361 16.7918 21.9584 16.2141 21.9584 15.5002C21.9584 11.9392 19.061 9.04183 15.5 9.04183C14.7861 9.04183 14.2084 8.46411 14.2084 7.75016ZM14.2084 11.6252C14.2084 10.9112 14.7861 10.3335 15.5 10.3335C18.3495 10.3335 20.6667 12.6507 20.6667 15.5002C20.6667 16.2141 20.089 16.7918 19.375 16.7918C18.6611 16.7918 18.0834 16.2141 18.0834 15.5002C18.0834 14.0761 16.9242 12.9168 15.5 12.9168C14.7861 12.9168 14.2084 12.3391 14.2084 11.6252Z" fill="#025899"/>
          </svg>
          <div>094 1818 616</div>
        </a>
      </div>
      <div>
        <div class="m-btn">
          <a class="" href="/">QUAY VỀ TRANG CHỦ</a>
        </div>
      </div>
      <style type="text/css">
        .thanks-page{
          text-align: center;
          margin: 120px auto;
        }
        .thanks-page h1{
          font-size: 22px;
          font-style: normal;
          font-weight: 700;
          line-height: 33px;
          color: #025899;
          margin: 15px 0px;
        }
        .thanks-page p{
          font-size: 18px;
          font-style: normal;
          font-weight: 400;
          line-height: 27px;
          margin-bottom: 10px;
        }
        .thanks-page .call_button{
          display: flex;
          justify-content: center;
          color: #025899;
          font-size: 18px;
          font-size: 22px;
          font-style: normal;
          font-weight: 700;
          line-height: 33px;
          margin: 15px;
          gap: 10px;
        }

      </style>
    </div>
      
<?php get_footer(); ?>
