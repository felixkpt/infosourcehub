<?php
$title = get_bloginfo('name');
$description = get_bloginfo('description');
require_once 'header.php';
require_once 'home-cats.php';
?>
<div id="ttr_header" class="row text-danger">
    <div class="ps-2">
        <h2><?= $title ?></h2>
        <h5 class="text-success font-weight-bold"><?php echo $description ?></h5>
    </div>
</div>
<div id="ttr_main" class="row">
    <?php home_cats() ?>
</div>

<?php echo get_footer(); ?>