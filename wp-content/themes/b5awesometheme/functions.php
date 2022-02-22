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
