<?php if(class_exists('ACF')) : ?>
  <?php if( have_rows('review_tv') ): ?>
    <ul class="tv-clip">
    <?php while( have_rows('review_tv') ): the_row();
      $imagetv = get_sub_field('image_tv');
      $nametv = get_sub_field('name_tv');
      $urltv = get_sub_field('url_video');
    ?>
    <li>
        <a class="vidplay" href="<?php echo $urltv ?>">
            <img loading="lazy" alt="<?php echo $nametv ?>" src="<?php echo wp_get_attachment_image_url($imagetv, 'NEWS-TV-THUMB' ) ?>">
        </a>
        <h3 class="fig-title"><?php echo $nametv ?></h3>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php endif; ?>
<?php endif; ?>