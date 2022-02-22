<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <title>Felix Biwott Theme</title>
    <script type="text/javascript" src="<?= get_theme_root_uri().'/b5awesometheme/js/bootstrap.min.js' ?>"></script>
    <link rel="stylesheet" href="<?= get_theme_root_uri().'/b5awesometheme/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url') ?>?v=ervq1">
    <?=
    wp_head()
    ?>
</head>
<body>
<main>
    <header>

        <div class="px-1 py-2 bg-light text-white">
            <div class="container-fluid px-1">
                <div class="">

                    <nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <a href="<?= site_url() ?>" class="me-lg-2">
                                    <img class="image-responsive" style="height:50px;width:auto;border-radius: 5px" src="<?= wp_get_upload_dir('2022/02')['url'].'/site-logo.png' ?>" alt="Site Logo">
                                </a>

                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <?PHP
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-menu',
                                        'container_class' => 'primary-menu me-auto'
                                    )
                                );
                                ?>

                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                                    <button type="button" class="btn btn-primary">Sign-up</button>
                                </div>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-center">
                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
            </div>
        </div>
    </header>
    <div class="container-fluid ps-2 ps-md-4">