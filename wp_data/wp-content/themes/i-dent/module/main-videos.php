<?php if(class_exists('ACF')) :
      $front_id = get_option('page_on_front');
      $videosRow = get_field('main-videos', $front_id);
      if($videosRow):
  ?>
  <section class="m-video">
    <div class="wrapper">
      <h2 class="ttl-primary">CẢM NHẬN CỦA KHÁCH HÀNG VỀ NHA KHOA I-DENT</h2>
      <div class="m-video_inner">
        <?php foreach($videosRow as $key => $item) :
          if($key == 0) :
        ?>
          <div class="m-video_main">
            <a class="vidplay" href="<?php echo $item['video_url']; ?>">
              <img loading="lazy" atl="<?php echo $item['video_name']; ?>" src="<?php echo wp_get_attachment_image_url($item['video_image'], 'full' ) ?>">
            </a>
          </div>
        <?php
            endif;
            endforeach;
          ?>
        <ul class="l-video">
          <?php foreach($videosRow as $key => $item) :
              if($key >= 1) :
            ?>
          <li><a class="vidplay" href="<?php echo $item['video_url']; ?>">
              <img loading="lazy" src="<?php echo wp_get_attachment_image_url($item['video_image'], 'VIDEO-THUMB' ) ?>" alt="<?php echo $item['video_name']; ?>">
            </a>
            <div class="video-info">
              <h3 class="title"><?php echo $item['video_name']; ?></h3><span class="view">Lượt xem : <?php echo $item['view']; ?></span>
            </div></li>
          <?php
            endif;
            endforeach;
          ?>
        </ul>
      </div>
    </div>
  </section>
<?php
  endif;
  endif;
?>