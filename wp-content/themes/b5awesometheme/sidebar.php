<?php 
include_once 'trending.php';
?>
<div id="ttr_sidebar" class="col-12 col-lg-3 px-0 ps-lg-1">
    <h3 class="bg-danger text-white fw-bold px-1 mb-0"><?= _e('Categories') ?></h3>
    <ul class="list-unstyled mt-0">
        <?php $categories = get_categories(); foreach($categories as $category): ?>
            <li class="cat-item"><a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 class="bg-danger text-white fw-bold px-1 mb-0"><?= _e('Archives') ?></h3>
    <ul class="list-unstyled mt-0"><?= wp_get_archives() ?></ul>
    <div class="trending px-2"><?php echo trending() ?></div>
</div>