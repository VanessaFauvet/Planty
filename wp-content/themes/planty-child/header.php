<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('site'); ?>>
    <header class="main_header">
        <a href="<?php echo home_url('/');?>" class="identity">
			<img class="logo" src="<?= get_stylesheet_directory_uri()."/images/logo.png" ?>">
        </a>
        <nav class="main_nav">
            <p class="subtitle">energy drink</p>
            <?php wp_nav_menu(array(
                'theme_location' => 'main',
                'container' => 'ul', // afin d'éviter d'avoir une div autour
            )); ?>
        </nav>
        <input class="button" type="button" value="Commander">
        
    </header>
    
