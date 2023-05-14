<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recruit
 */
$category = get_queried_object()->slug;
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query( 
	array(
		'paged'         => $paged, 
		'categor' => $category,
		'order'         => 'asc',
		'post_type'     => 'post',
		'post_status'   => 'publish',
	)
);
var_dump($query);  
?>
<div class="m-kienthuc">
  <div class="wrapper">
    <div class="m-kienthuc_main">
      <div class="l-news_item">
        <figure class="images">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dummy_01.jpg" alt="">
        </figure>
        <div class="info">
          <span class="tag">KIẾN THỨC IMPLANT</span>
          <h3 class="title js-height">KỸ THUẬT IMPLANT TOÀN HÀM ALL-ON-6 <br>CƯỜNG LỰC CAO CẤP BẬC NHẤT </h3>
          <p class="text">Nha khoa I-DENT giới thiệu đến cô chú giải pháp trồng răng toàn hàm cao cấp bậc nhất. Sử dụng 6 trụ Implant Straumann Thụy Sĩ và phục hình hàm toàn sứ</p>
          <div class="m-btn is-reverse">
            <a href="#">Xem thêm</a>
          </div>
        </div>
      </div>
    </div>
    <div class="m-kienthuc_list">
      <ul class="l-news">
		<?php 
			while ( $query->have_posts() ) : $query->the_post(); 
				require( get_stylesheet_directory() . '/module/news-item.php' );
			endwhile;
		?>
      </ul>
      <nav class="navigation pagination">
        <span class="prev page-numbers inactive">
          <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="#025899"></path>
            <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="black" fill-opacity="0.2"></path>
          </svg>
        </span>
        <span class="page-numbers current" aria-current="page">1</span>
        <a class="page-numbers" href="">2</a>
        <a class="page-numbers" href="">3</a>
        <a class="page-numbers" href="">4</a>
        <span class="page-numbers dots">…</span>
        <a class="page-numbers" href="">12</a>
        <a class="next page-numbers" href="">
          <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="#025899"></path>
            <path d="M1.58525 14.1289L7.79722 7.73951C7.87096 7.66344 7.92331 7.58104 7.95427 7.4923C7.98524 7.40356 8.00048 7.30848 7.99999 7.20706C7.99999 7.10564 7.9845 7.01056 7.95354 6.92182C7.92257 6.83308 7.87046 6.75068 7.79722 6.67461L1.58525 0.266224C1.41321 0.0887412 1.19815 0 0.94009 0C0.682026 0 0.460829 0.09508 0.276497 0.28524C0.0921655 0.4754 0 0.697253 0 0.9508C0 1.20435 0.0921655 1.4262 0.276497 1.61636L5.69584 7.20706L0.276497 12.7978C0.104455 12.9752 0.0184326 13.1941 0.0184326 13.4542C0.0184326 13.7143 0.110599 13.9392 0.29493 14.1289C0.479261 14.319 0.694315 14.4141 0.94009 14.4141C1.18587 14.4141 1.40092 14.319 1.58525 14.1289Z" fill="black" fill-opacity="0.2"></path>
          </svg>
        </a>
      </nav>
    </div>
  </div>
</div>
