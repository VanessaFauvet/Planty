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
            <img class="logo_device" src="<?= get_stylesheet_directory_uri()."/images/vector.png" ?>">
        </a>
        <div class="main_nav">
            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour
                )); ?>
            </nav>
        </div>
        
    </header>
    
