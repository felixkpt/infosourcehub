<div id="ttr_sidebar" class="col-12 col-md-4 col-lg-3">
    <h2><?= _e('Categories') ?></h2>
    <ul> <?= wp_list_categories('sortcolumn=namonthly') ?></ul>
    <h2><?= _e('Archives') ?></h2>
    <ul><?= wp_get_archives() ?></ul>
</div>