<?php
$title = 'Page not found | '.get_bloginfo('name');
$description = 'This is somewhat embarrassing, isn’t it?';
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
          <?= no_posts() ?>
    </div>
    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
