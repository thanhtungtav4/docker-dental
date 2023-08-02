<?php if(class_exists('ACF')) : ?>
  <?php if( have_rows('home_slider_items') ): ?>
  <div class="mv-top js-mv">
    <?php while( have_rows('home_slider_items') ): the_row();
      $image = get_sub_field('image_slider_home');
      $imagesp = get_sub_field('image_slider_home_sp');
      $alt = get_sub_field('alt_image');
      $link_to = get_sub_field('link_to');
    ?>
    <div class="mv-top_slide">
      <a href="<?php echo $link_to ?>">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo wp_get_attachment_image_url($image, 'full') ?>">
          <?php if($imagesp) : ?>
          <source media="(max-width: 768px)" srcset="<?php echo wp_get_attachment_image_url($imagesp, 'full' ) ?>">
          <?php endif ?>
          <img src="<?php echo wp_get_attachment_image_url($image, 'full' ) ?>" alt="<?php echo $alt ?>">
        </picture>
      </a>
    </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
<?php endif; ?>