<?php
include_once 'page-posts.php';

function recommended()
{
?>
    <div class="col-12">
        <div class="cat-divider-wrapper">
        <h4 class="text-center my-4 cat-divider text-danger"><span>Recommended Content</span></h4>
        </div>
        <?php
        // Define our WP Query Parameters
        $the_query = new WP_Query('posts_per_page=5');

        page_posts($the_query, 'row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5');

        wp_reset_postdata();
        ?>
    </div>
<?php
}
?>