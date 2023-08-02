<?php if(class_exists('ACF')) : ?>
  <?php if( have_rows('hot_service') ): ?>
    <section class="key-service">
      <div class="key-service_inner">
        <div class="wrapper">
          <h2 class="ttl-primary">CÁC DỊCH VỤ NỔI BẬT</h2>
          <div class="service-slide js-service-slide">
          <?php while( have_rows('hot_service') ): the_row();
            $image_service_main = get_sub_field('image_service_main');
            $image_service_sub = get_sub_field('image_service_sub');
            $nameservice = get_sub_field('name_service');
            $link_to_service = get_sub_field('link_to_service');
            ?>
            <div class="service-slide_item">
              <a href="<?php echo $link_to_service; ?>">
                <img loading="" src="<?php echo $image_service_main ?>" alt="<?php echo $nameservice ?>">
                <div class="service-name <?php echo $image_service_sub ?>">
                    <?php echo $nameservice; ?>
                </div>
              </a>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>