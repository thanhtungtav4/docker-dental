<?php
if(class_exists('ACF')) :
$Sidebar_img = get_field('image_banner_detail') ? get_field('image_banner_detail') : get_field('image_banner_detail', 'option');
$Sidebar_url = get_field('url_banner_detail') ? get_field('url_banner_detail') : get_field('url_banner_detail', 'option');
$Sidebar_alt = get_field('alt_banner_detail') ? get_field('alt_banner_detail') : get_field('alt_banner_detail', 'option');
$Sidebar_img2 = get_field('image_banner_detail2') ? get_field('image_banner_detail2') : get_field('image_banner_detail2', 'option');
$Sidebar_url2 = get_field('url_banner_detail2') ? get_field('url_banner_detail2') : get_field('url_banner_detail2', 'option');
$Sidebar_alt2 = get_field('alt_banner_detail2') ? get_field('alt_banner_detail2') : get_field('alt_banner_detail2', 'option');
?>

<sidebar class="m-detail_side <?php is_page('cam-ket-ve-chat-luong') ?: print 'is-pc' ?>?>">
  <div class="m-detail_side-bnr">
    <?php if($Sidebar_img) : ?>
    <a href="<?php echo $Sidebar_url?>" target="_blank">
      <?php handle_thumbnail_id($Sidebar_img, 'SIDEBAR-THUMB', $Sidebar_alt) ?>
    </a>
    <?php endif; ?>
  </div>
  <div class="m-detail_side-bnr">
    <?php if($Sidebar_img2) : ?>
    <a href="<?php echo $Sidebar_url2?>" target="_blank">
      <?php handle_thumbnail_id($Sidebar_img2, 'SIDEBAR-THUMB', $Sidebar_alt2) ?>
    </a>
    <?php endif; ?>
  </div>
</sidebar>
<?php endif; ?>
