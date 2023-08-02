<?php
    if(class_exists('ACF')) :
    $paperRow = get_field('press_reporting', get_option('page_on_front'));
?>
  <?php if($paperRow): ?>
  <section class="m-paper">
      <div class="wrapper">
        <h2 class="ttl-primary">BÁO CHÍ ĐƯA TIN VỀ NHA KHOA I-DENT</h2>
        <div class="m-paper js-paper-slide">
        <?php  foreach( $paperRow as $item ) : ?>
          <div class="m-paper_item">
            <div class="m-paper_inner">
              <div class="m-paper_wrap">
                <picture>
                  <source media="(max-width:768px)" srcset="<?php echo wp_get_attachment_image_url($item['press_image'], 'NEWS-THUMB' ) ?>">
                  <img src="<?php echo wp_get_attachment_image_url($item['press_image'], 'NEWS-PC-THUMB' ) ?>" alt="báo chí đưa tin về nha khoa i-dent">
                </picture>
                <div class="m-paper_btn">
                  <div class="m-btn"><a target="_blank" href="<?php echo $item['press_link_to'] ?>">Xem chi tiết</a></div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>