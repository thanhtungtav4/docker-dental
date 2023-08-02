<?php 
    if(class_exists('ACF')) : 
    $doctorRow = get_field('doctor-list','option');
?>
  <?php if($doctorRow): ?>
    <section class="m-doctors">
    <div class="l-doctors">
        <h2 class="ttl-primary">ĐỘI NGŨ BÁC SĨ</h2>
        <div class="wrapper">
        <div class="l-doctors_inner js-doc-slide">
        <?php  foreach( $doctorRow as $item ) : 
            ?>
            <div class="l-doctors_item">
            <div class="doc-info">
                <div class="title"><?php echo $item['doctor_title'] ?></div>
                <h3 class="name"><?php echo $item['doctor_name'] ?></h3>
                <ul class="certificate">
                    <?php echo $item['doctor_description'] ?>
                </ul>
                <div class="m-btn">
                <a href="<?php echo $item['doctor_link_to'] ?>">Xem thêm</a>
                </div>
            </div>
            <div class="doc-img">
                <div class="bg">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/top/bg_circle.webp" alt="<?php echo $item['doctor_name'] ?>">
                </div>
                <div class="img">
                    <img loading="lazy" src="<?php echo wp_get_attachment_image_url($item['doctor_image'], 'DOCTOR-THUMB' ) ?>" alt="<?php echo $item['doctor_name'] ?>">
                </div>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
        </div>
    </div>
    <div class="l-doctors_thumb">
        <div class="wrapper">
            <div class="js-doc-slide-thumb">
                <?php  foreach( $doctorRow as $item ) : ?>
                    <div class="thumb-item">
                    <div class="thumb-item_inner">
                        <a href="javascript:;">
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url($item['doctor_image_min'] ? $item['doctor_image_min'] : $item['doctor_image'], 'DOCTOR-MIN-THUMB' ) ?>" alt="<?php echo $item['doctor_name'] ?>">
                        </a>
                    </div>
                    </div>
                <?php endforeach; ?>    
            </div>
        </div>
    </div>
    </section>
  <?php endif; ?>
<?php endif; ?>  