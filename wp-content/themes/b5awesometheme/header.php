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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-221500902-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-221500902-1');
    </script>
    <script data-ad-client="ca-pub-8286276782155723" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<body>
    <?php
    if (current_user_can( 'manage_options' )):
    ?>
        <style>
        .sticky-top {
            top: 18px;
        }
        @media screen and (max-width: 782px) {
            .sticky-top {
            top: 32px;
        }
        @media screen and (max-width: 600px) {
            .sticky-top {
            top: 0;
        }  
        }
    </style>
    <?php 
    endif;
    ?>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" aria-label="Main Menu">
    <a class="navbar-brand mx-md-2" href="<?= site_url() ?>">
        <img style="height:47px;width:120px;border-radius: 5px" class="image-responsive" src="<?= wp_get_upload_dir()['baseurl'].'/2022/02/logo-red.png' ?>" alt="Site Logo">
    </a>
    <button class="navbar-toggler justify-content-end me-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainMenu" aria-controls="navbarMainMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mt-1 mt-md-0" id="navbarMainMenu">
        <?PHP
        wp_nav_menu(
            array(
                'theme_location' => 'header-menu',
                'container_class' => 'primary-menu ms-auto'
            )
        );
        ?>
    </div>
</nav>

<main>
    <div class="container-fluid ps-2 ps-md-4">