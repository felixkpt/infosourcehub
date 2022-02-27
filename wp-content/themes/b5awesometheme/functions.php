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

set_post_thumbnail_size( 150, 150);

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