<?php $i = 0;
while ($i < 1) {
    $i++; ?>
    <div class="col p-2">

        <div class="card h-100 card-default">
            <div class="card border-0" style="<?php echo $card_styles ?>;">
                <a class="text-decoration-none sd-block" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                    <img class="img rounded-sm" src="<?php echo $image_url ?>" alt="">
                </a>
            </div>
            <a class="article-link p-1 text-decoration-none d-block text-dark fw-bold" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                <div>
                <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                </div>
                <div>
                <small class="text-muted"><?php the_time('F jS, Y') ?></small>
                </div>
            </a>
        </div>

    </div>

<?php } ?>