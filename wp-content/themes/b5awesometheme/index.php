<?php require_once 'header.php'; ?>

<div id="ttr_header" class="text-danger">
    <h1><?= get_bloginfo('name') ?></h1>
    <h6 class="text-primary"><?= get_bloginfo('description') ?></h6>
</div>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-12 col-md-8 col-lg-9">

        <div class="row">
            <?php
            // Check if there are any posts to display
            if ( have_posts() ) : ?>
                <?php
// The Loop
                while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

                    <div class="entry">
                        <div class="row">
                            <div class="col-12 col-md-3 overflow-hidden">
                                <div>
                                <a href="<?php the_permalink() ?>" rel="bookmark">
                                     <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } else { ?>
                                    <img style="height: 150px;width: 100%" src="<?php bloginfo('template_directory'); ?>/images/default-featured-images.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>
                                </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-9">
                                <?php
                                $excerpt= get_the_excerpt();

                                echo wp_trim_words($excerpt, 70, '...');
                                ?>
                            </div>
                        </div>
                        <p class="postmetadata"><?php
                            comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
                            ?></p>
                    </div>

                <?php endwhile;

            else: ?>
                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

        </div>
    </div>
    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
