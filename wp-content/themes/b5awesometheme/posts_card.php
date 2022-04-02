
<?php $i=0; while($i<1) { $i++; ?>

<div class="col">
    <div class="card p-0 h-100 border border-1">
    <div class="responsive-card-img bd-placeholder-img card-img-top overflow-hidden">
                <a class="text-decoration-none h-100 d-block" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                    <img class="h-100 w-100" src="<?php echo $image_url ?>" />
                </a>
            </div>

            <div class="card-title">
                <h6>
                    <a class="h-100 d-block text-dark px-1 link-highlight" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                       <?php  echo wp_trim_words(get_the_title(), 20, '...'); ?>
                    </a>          
                </h6>
                
            </div>
            <div style="height:50px!important;">
               <div class="px-1" style="position:absolute;bottom:0;width:100%">
                    <div class="card-text">
                        <small class="text-muted"><?php the_time('F jS, Y') ?></small>
                        <a class="d-block text-primary text-decoration-none" title="View posts by <?php the_author() ?>" href="<?php echo get_author_posts_url(get_the_author_ID()) ?>">
                            <div class="d-inline">
                                <img class="rounded-circle bg-light p-1" style="width:30px!important;height:30px!important" src="<?php echo get_template_directory_uri() . '/images/users/default.png'; ?>" alt="">
                                <small class="text-success font-weight-bold"><?php the_author() ?></small>
                            </div>
                        </a> 
                    </div>        
                </div>
            </div>
    </div>
</div>


<?php } ?>