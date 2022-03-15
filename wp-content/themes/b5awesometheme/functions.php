<?php
function register_my_menus() {
register_nav_menus(
array(
'header-menu' => __( 'Header Menu' ),
'extra-menu' => __( 'Extra Menu' )
)
);
}
add_action( 'init', 'register_my_menus' );

function admin_bar(){

    if(is_user_logged_in()){
        add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
}
add_action('init', 'admin_bar' );

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 400, 250, true);

function show_post_preview($counts) {


    $att_id = get_post_thumbnail_id( get_the_ID() );
    $image_url = @wp_get_attachment_image_src($att_id)[0];
if (!$image_url){
    $image_url = get_template_directory_uri() . '/images/default-featured-images.jpg';

}
?>
<div class="<?php if ($counts > 1) { echo 'col-12 col-sm-6 col-md-6 col-lg-3'; }else { echo 'col-12 col-md-7 col-lg-3'; } ?> p-1">
    <div class="h-100">
        <div class="card h-100">
            <a class="link-unstyled" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">

            <div class="bd-placeholder-img card-img-top">
            <img style="height: 200px;width: 100%" src="<?= $image_url ?>" alt="<?php the_title(); ?>" />
            </div>

            <div class="card-body d-flex flex-column" style="height: 170px">

                <p class="card-title">
                <h6 class="text-decoration-underline"><?php  echo wp_trim_words(get_the_title(), 10, '...'); ?></h6>
                </p>
                <p class="card-text mt-auto">
                    <small class="text-muted"><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>
                </p>
            </div>
            </a>

        </div>

</div>
</div>
                <?php


}
function no_posts() {
//    status_header(404);
    ?>
    <div class="alert alert-danger px-1" style="height:250px;">
        <div class="container-fluid p-0 m-0">
            <div class="flex text-sm-center">
                <div>
                    <div class="fa fa-ban fa-7x"></div>
                    <div class="fs-2">Sorry, no posts matched specified criteria!</div>
                </div>
            </div>
        </div>
    </div>
<?php
}
