<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xxl-2 px-1">
    <div class="card p-0 h-100 border border-1">
    <div style="height: 200px;width: 100%" class="bd-placeholder-img card-img-top overflow-hidden">
                <a class="text-decoration-none h-100 d-block" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                    <img class="h-100 w-100" src="<?php echo $image_url ?>" />
                </a>
            </div>
            <div style="height:150px!important;">
               <div class="px-1" style="position:absolute;bottom:0;width:100%">
                        <div class="card-title">
                            <h6 class="text-decoration-underline">
                                <a class="text-decoration-none h-100 d-block" style="font-size:90%" href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
                                    <?php  echo wp_trim_words(get_the_title(), 15, '...'); ?>
                                </a>          
                            </h6>
                            <div class="card-text">
                                <small class="text-muted"><?php the_time('F jS, Y') ?></small>
                                    <a class="d-block text-primary text-decoration-none" style="font-size:13px" title="View posts by <?php the_author() ?>" href="<?php echo get_author_posts_url(1) ?>">
                                        <div class="d-inline">
                                            <img class="rounded-circle bg-light p-1" style="width:30px!important;height:30px!important" src="<?php echo get_template_directory_uri() . '/images/users/default.png'; ?>" alt="">
                                            <small><?php the_author() ?></small>
                                        </div>
                                    </a> 
                            </div>
                        </div>
                </div>
            </div>
    </div>
</div>

