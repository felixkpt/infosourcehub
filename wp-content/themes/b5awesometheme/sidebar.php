<div id="ttr_sidebar" class="col-12 col-md-4 col-lg-3">
    <h2 class="text-danger"><?= _e('Categories') ?></h2>
    <ul class="list-unstyled"> <?= wp_list_categories('sortcolumn=namonthly') ?></ul>
    <h2 class="text-danger"><?= _e('Archives') ?></h2>
    <ul class="list-unstyled"><?= wp_get_archives() ?></ul>
</div>