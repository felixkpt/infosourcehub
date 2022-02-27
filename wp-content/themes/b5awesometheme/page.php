<?php
$title = get_the_title();
$description = get_the_excerpt();
require_once 'header.php';
?>

<div class="container-fluid px-1">
    <div id="ttr_header" class="text-danger">
        <h1><?= $title ?>
            <h6 class="text-primary">Posted on <?= the_time('F jS, Y') ?></h6>
    </div>
    <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-12 col-md-8 col-lg-9">
            <p>
                <?= the_content() ?>
            </p>
        </div>
        <?= get_sidebar() ?>
    </div>

    <?= get_footer() ?>
