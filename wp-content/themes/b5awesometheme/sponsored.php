<div id="sponsored" class="row">
    <div class="col-12">
        <hr class="pt-1">
        <h3>Sponsored Articles</h3>
    </div>
    <div class="col-12">
        <?php
        $sponsored = [
            [
                'title' => 'The Morning',
                'content' => 'David Leonhardt looks at the hot-button issues next on the Supreme Court docket, starting with affirmative action.',
                'image' => 'http://localhost/infosourcehub/wp-content/uploads/2022/06/KDU20B3BIK.jpg',
                'link' => 'http://localhost/infosourcehub/index.php/2022/06/09/after-deposing-longtime-aide-trumps-effort-to-remain-out-of-contempt-has-been-met-with-dissatisfaction-by-the-new-york-attorney-general/'
            ],
            [
                'title' => 'The Morning',
                'content' => 'A megachurch leader from La Luz del Mundo has been sentenced to prison for child sex assault',
                'image' => 'http://localhost/infosourcehub/wp-content/uploads/2022/06/ftyfu9ff5v87t6.jpg',
                'link' => 'http://localhost/infosourcehub/index.php/2022/06/09/after-deposing-longtime-aide-trumps-effort-to-remain-out-of-contempt-has-been-met-with-dissatisfaction-by-the-new-york-attorney-general/'
            ],
            [
                'title' => 'The Morning',
                'content' => 'David Leonhardt looks at the hot-button issues next on the Supreme Court docket, starting with affirmative action.',
                'image' => 'http://localhost/infosourcehub/wp-content/uploads/2022/06/La-Luz-del-Mundo.jpg',
                'link' => 'http://localhost/infosourcehub/index.php/2022/06/09/after-deposing-longtime-aide-trumps-effort-to-remain-out-of-contempt-has-been-met-with-dissatisfaction-by-the-new-york-attorney-general/'
            ],
            [
                'title' => 'The Morning',
                'content' => 'David Leonhardt looks at the hot-button issues next on the Supreme Court docket, starting with affirmative action.',
                'image' => 'http://localhost/infosourcehub/wp-content/uploads/2022/06/ftyfu9ff5v87t6.jpg',
                'link' => 'http://localhost/infosourcehub/index.php/2022/06/09/after-deposing-longtime-aide-trumps-effort-to-remain-out-of-contempt-has-been-met-with-dissatisfaction-by-the-new-york-attorney-general/'
            ]
        ]
        ?>
        <div class="d-flex gap-2 overflow-auto">
            <?php foreach ($sponsored as $item) : ?>
                <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                    <div class="row">
                        <div class="col-7">
                            <a class="link-primary" href="<?php echo $item['link'] ?>" target="_blank">
                                <h5>
                                    <?php echo $item['title'] ?>
                                </h5>
                                <p>
                                    <?php echo $item['content'] ?>
                                </p>
                            </a>
                        </div>
                        <div class="col-5">
                            <a class="link-primary" href="<?php echo $item['link'] ?>" target="_blank">
                                <div class="image-wrapper-sm">
                                    <img src="<?php echo $item['image'] ?>" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>