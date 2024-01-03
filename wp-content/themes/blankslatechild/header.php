<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
                <div class="identity">
                    <img src="images/logo.png" alt="Logo Planty">
                    <p class="slogan">energy drink</p>
                </div>
                <nav class="header_nav"><?php wp_nav_menu(['theme_location' => 'header']) ?></nav>
                <input id="button" type="button" value="Commander">
            </header>
        <div id="container">
            
    <main id="content" role="main">