<?php
$title = 'Posts published by '.get_the_author();
$description = $title;
require_once 'header.php';
?>
<div id="ttr_header" class="text-danger">
    <h1><?= $title ?></h1>
    <?php
    // Display optional category description
    if ( category_description() ) : ?>
        <h6 class="text-primary"><?php echo category_description(); ?></h6>
    <?php endif; ?>
</div>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-md-8 col-lg-9">
        <div class="row">
            <?php
            // Check if there are any posts to display
            if ( have_posts() ) : ?>
                <?php
                $counts = $wp_query->post_count;
// The Loop
                while ( have_posts() ) : the_post();
                    show_post_preview($counts);
                endwhile;

            else: no_posts(); endif; ?>

        </div>
    </div>
    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
