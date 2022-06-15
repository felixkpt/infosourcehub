<?php
include_once 'page-posts.php';

function home_cats()
{

    $categories = get_categories();
    foreach ($categories as $category) : ?>
        <div class="col-12">
            <div class="cat-divider-wrapper">
                <h4 class="text-end my-4 cat-divider text-danger"><span><a class="text-danger" href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?> <i class="fas fa-chevron-circle-right"></i></a></span></h4>
            </div>
            <?php
            // Define our WP Query Parameters
            $args=array(  'post_type' => 'post', 'category_name' => $category->slug, 'post_status' => 'publish',  'posts_per_page' => 5, );

            $the_query = new WP_Query($args);

            page_posts($the_query);

            wp_reset_postdata();
            ?>
        </div>
    <?php endforeach; ?>
<?php
}
?>