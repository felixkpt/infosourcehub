<?php
global $wp_query;
$term_id = $wp_query->queried_object->term_id; 
$title = $wp_query->queried_object->name;
$description = category_description();
require_once 'header.php';
?>
<div class="text-danger">
  <h1><?= $title ?></h1>
    <?php
    // Display optional category description
    if ( $description ) : ?>
        <h6 class="text-primary"><?php echo $description; ?></h6>
    <?php endif; ?>
</div>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-md-8 col-lg-9">
                <?php 
  

$sub_categories = get_categories( array( 'parent' => $term_id, 'hide_empty' => false ) );

if ($sub_categories) {

      $args = array(
        'posts_per_page'   => 5,
        'category__in' => [ 10 ],
        'orderby'          => 'name',
        'order'            => 'ASC',
        'post_type'        => 'post'
    );

    // parent posts
    $posts = get_posts($args);
    if ($posts){
        ?>
        <div class="row">
            <?php
            $counts = count($posts);
            foreach($posts as $post){
            setup_postdata( $post );
            
            show_post_preview($counts);
        }
        wp_reset_postdata();
        ?>
        </div>
        <?php

    }

    foreach($sub_categories as $sub_category) {
    $title = $sub_category->name;
    $description = $sub_category->description;
    $term_link = get_category_link($sub_category->term_id);
    ?>
    <div class="text-danger">
      <h2><a href="<?= $term_link ?>"><?= $title ?></a></h2>
        <?php
        // Display optional category description
        if ( $description ) : ?>
            <h6 class="text-primary"><?php echo $description; ?></h6>
        <?php endif; ?>
    </div>

    <?php 
    $args = array(
        'posts_per_page'   => 5,
        'category'         => $sub_category->term_id,
        'orderby'          => 'name',
        'order'            => 'ASC',
        'post_type'        => 'post'
    );

    $posts = get_posts($args);

    if ($posts){
        ?>
        <div class="row">
        <?php

        $counts = count($posts);
        foreach($posts as $post){
            setup_postdata( $post );
            
            show_post_preview($counts);
        }
        wp_reset_postdata();
        ?>
        </div>
        <?php
    }else{
        no_posts();
    }

    }
    // endforeach;

}else {

            // Check if there are any posts to display
            if ( have_posts() ) {
           // The Loop
                $counts = $wp_query->post_count;

                while ( have_posts() ) : 
                    the_post(); 
                    show_post_preview($counts);
                endwhile;

            }else{
                no_posts(); 
            }
             

        } 
             ?>

    </div>
    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
