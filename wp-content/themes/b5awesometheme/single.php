<?php
$title = get_the_title();
$description = get_the_excerpt();
require_once 'header.php';
?>

<div class="container-fluid px-1">
    <div id="ttr_header" class="text-danger">
        <div class="ps-2">
            <h2><?= $title ?></h2>
            <h5 class="text-success font-weight-bold">Posted on <?php echo the_time('F jS, Y') ?></h5>
        </div>
    </div>
    <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-12 col-lg-9 px-0 pe-lg-1">

                             <div class="float-sm-start me-1">

                             <?php if ( has_post_thumbnail() ) {
                                 the_post_thumbnail();
                             } else { ?>
                                 <img style="height: 200px;width: 100%" src="<?php bloginfo('template_directory'); ?>/images/default-featured-images.jpg" alt="<?php the_title(); ?>" />
                             <?php } ?>
                             </div>
                            <p>
                                <?= the_content() ?>
                            </p>
        </div>
        <?= get_sidebar() ?>
    </div>

    <?= get_footer() ?>
