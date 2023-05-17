<li class="l-news_item">
    <figure class="images">
        <?php handle_thumbnail('NEWS-ITEM-THUMB'); ?>
    </figure>
    <div class="info">
        <span class="tag"><?php print wp_get_post_terms(get_the_ID(), 'category')[0]->name  ; ?></span>
        <h3 class="title js-height"><?php the_title(); ?></h3>
        <p class="text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
        <div class="m-btn is-reverse">
            <a href="<?php the_permalink() ?>">Xem thêm</a>
        </div>
    </div>
</li>