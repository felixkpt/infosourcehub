<?php
$title = get_the_title();
$description = get_the_excerpt();
require_once 'header.php';
?>
    <div id="ttr_header" class="row text-danger">
        <div class="ps-2">
            <h2><?= $title ?></h2>
            <h5 class="text-success font-weight-bold">Posted on <?php echo the_time('F jS, Y') ?></h5>
        </div>
    </div>
    <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-12 col-lg-9 px-0 pe-lg-1">
            <p>
                <?= the_content() ?>
            </p>
        </div>
        <?php echo get_sidebar(); ?>
    </div>

    <?php echo get_footer(); ?>
