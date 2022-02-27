<?php
$title = 'Page not found | '.get_bloginfo('name');
$description = 'This is somewhat embarrassing, isn’t it?';
require_once 'header.php';
?>
<div id="ttr_header" class="text-danger">
    <h1><?= $title ?></h1>
    <h6 class="text-primary"><?= $description ?></h6>
</div>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-md-8 col-lg-9">
          <?= no_posts() ?>
    </div>
    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
