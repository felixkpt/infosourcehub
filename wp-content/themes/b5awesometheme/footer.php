</div>
</div>
<!--End main .container-->
<footer id="ttr_footer" class="my-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 overflow-hidden">
                <h4 class="text-decoration-none section-headline" style=""><span class="section-headline-text">
                    <?php echo bloginfo('description') ?></span></h4>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h5 class="text-success">Recent Posts</h5>
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
                                    <a class="text-white-50 text-decoration-none" href="<?php the_permalink() ?>">
                                    <div class="overflow-hidden"  style="text-overflow:ellipsis">
                                        <span class="text-nowrap">
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
                <h5 class="text-success">Important Links</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a class="text-white-50 text-decoration-none" href="<?= site_url() ?>/about-us">About us</a></li>
                            <li><a class="text-white-50 text-decoration-none" href="<?= site_url() ?>/contact-us">Contact us</a></li>
                            <li><a class="text-white-50 text-decoration-none" href="<?= site_url() ?>/privacy-policy">Privacy policy</a></li>
                            <li><a class="text-white-50 text-decoration-none" href="<?= site_url() ?>/terms-and-conditions">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="text-success">Get in touch with us</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a class="text-white-50 text-decoration-none" href="https://facebook.com/onlineserviceslab" target="_blank"><span class="fab fa-facebook-f"></span> Facebook</a></li>
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