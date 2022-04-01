</div>
</div>
<!--End main .container-->
<footer id="ttr_footer" class="bg-light my-2">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <h4 class="text-danger">Huduma Kenya OnlineServices</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h5 class="text-primary">Recent Posts</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <?php
                            // Define our WP Query Parameters
                            $the_query = new WP_Query( 'posts_per_page=5' ); 
                            
                            // Start our WP Query
                            while ($the_query -> have_posts()) : $the_query -> the_post();
                            // Display the Post Title with Hyperlink
                                ?>
                                <li>
                                    <a class="text-dark text-decoration-none" href="<?php the_permalink() ?>">
                                    <div class="overflow-hidden"  style="text-overflow:ellipsis">
                                        <span class="text-nowrap">
                                            <span class="fa fa-arrow-right" aria-hidden="true"></span>
                                            <?php  echo wp_trim_words(get_the_title(), 20, '...'); ?>
                                        </span>
                                    </div>    
                                </a>
                                </li>
                            <?php
                            // Repeat the process and reset once it hits the limit
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h5 class="text-primary">Important Links</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a class="text-dark text-decoration-none" href="<?= site_url() ?>/about-us"><span class="fa fa-arrow-right" aria-hidden="true"></span> About us</a></li>
                            <li><a class="text-dark text-decoration-none" href="<?= site_url() ?>/contact-us"><span class="fa fa-arrow-right" aria-hidden="true"></span> Contact us</a></li>
                            <li><a class="text-dark text-decoration-none" href="<?= site_url() ?>/privacy-policy"><span class="fa fa-arrow-right" aria-hidden="true"></span> Privacy policy</a></li>
                            <li><a class="text-dark text-decoration-none" href="<?= site_url() ?>/terms-and-conditions"><span class="fa fa-arrow-right" aria-hidden="true"></span> Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="text-primary">Get in touch with us</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a class="text-dark text-decoration-none" href="https://facebook.com/onlineserviceslab" target="_blank"><span class="fab fa-facebook-f"></span> Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</main>

<?php wp_footer(); ?>
</body>
</html>