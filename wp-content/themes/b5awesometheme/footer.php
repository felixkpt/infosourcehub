</div>
</div>
<!--End main .container-->
<footer id="ttr_footer" class="bg-light my-2">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <h4 class="text-danger">Huduma Kenya OnlineServices</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="text-primary">Recent Posts</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <?php
                            // Define our WP Query Parameters
                            $the_query = new WP_Query( 'posts_per_page=5' ); ?>


                            <?php
                            // Start our WP Query
                            while ($the_query -> have_posts()) : $the_query -> the_post();
// Display the Post Title with Hyperlink
                                ?>

                                <li><a class="text-dark" href="<?php the_permalink() ?>"><span class="fa fa-location-arrow" aria-hidden="true"></span> <?php the_title(); ?></a></li>

                            <?php
// Repeat the process and reset once it hits the limit
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="text-primary">Important Links</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a href="https://onlineserviceslab.com/contact-us">Contact us</a></li>
                            <li><a href="https://onlineserviceslab.com/privacy-policy">Privacy policy</a></li>
                            <li><a href="https://onlineserviceslab.com/terms-and-conditions">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="text-primary">Get in touch with us</h5>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/onlineserviceslab"><span class="fa fa-facebook"></span> Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="text-primary">Suggestions</h5>
                <div class="row">
                    <div class="col">
                        Content coming soon!
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