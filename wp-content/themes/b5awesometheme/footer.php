</div>
</div>
<!--End main .container-->
<footer id="ttr_footer" class="bg-light my-2">
    <div class="container-fluid px-2">
        <div class="row">
            <div class="col-12">
                <h4>Huduma Kenya OnlineServices</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5>Recent Posts</h5>
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


                                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

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
                <h5>Important Links</h5>
                <div class="row">
                    <div class="col">
                        Content coming soon!
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5>Get in touch with us</h5>
                <div class="row">
                    <div class="col">
                        Content coming soon!
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5>Suggestions</h5>
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