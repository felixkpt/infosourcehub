<?= get_header() ?>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-md-8 col-lg-9">

        <div class="row">
            <?php if (have_posts()): while(have_posts()): the_post();?>
            <div class="col-lg-6 col-md-6 col-12">
                <h3><?= the_title() ?></h3>
                <h6>Posted on <?= the_time('F jS, Y') ?></h6>
            </div>
            <?php endwhile; else: ?>
            <p><?= _e('Sorry, no posts attached to your criteria.') ?></p>
            <?php endif; ?>

        </div>
    </div>
    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
