<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <script type="text/javascript" src="<?= get_theme_root_uri().'/b5awesometheme/js/bootstrap.min.js' ?>"></script>
    <link rel="stylesheet" href="<?= get_theme_root_uri().'/b5awesometheme/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_theme_root_uri().'/b5awesometheme/css/font-awesome/css/fontawesome-all.css' ?>">
    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url').'?v='.date('H:i:s') ?>">
    <?=
    wp_head()
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-54V0V7C8N5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-54V0V7C8N5');
    </script>
</head>
<body>
<main>
    <header>
        <div class="px-1 py-2 bg-light">
            <div class="container-fluid px-1">
                    <nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Main Menu">
                            <a class="navbar-brand mx-md-2" href="<?= site_url() ?>">
                                <img style="height:47px;width:120px;border-radius: 5px" class="image-responsive" src="<?= wp_get_upload_dir('2022/02')['url'].'/logo-red.png' ?>" alt="Site Logo">
                            </a>
                            <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainMenu" aria-controls="navbarMainMenu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse mt-1 mt-md-0" id="navbarMainMenu">
                                <?PHP
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-menu',
                                        'container_class' => 'primary-menu me-auto'
                                    )
                                );
                                ?>

                                <div class="text-end mt-1 mt-md-0">
                                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                                    <button type="button" class="btn btn-primary">Sign-up</button>
                                </div>
                            </div>
                    </nav>
            </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-center">
                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                    <script async src="https://cse.google.com/cse.js?cx=65fa5521da54517d2"></script>
                    <div class="gcse-search"></div>
                </form>
            </div>
        </div>
    </header>
    <div class="container-fluid ps-2 ps-md-4">