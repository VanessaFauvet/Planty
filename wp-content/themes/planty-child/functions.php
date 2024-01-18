<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Déclarer un emplacement de menu //
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

add_filter( 'wpcf7_form_elements', 'do_shortcode' );

add_shortcode('formulaire_commande', 'formulaire_commande');
function formulaire_commande() {
    $image_1_url=get_field('image_1', get_the_ID());
    $image_2_url=get_field('image_2', get_the_ID());
    $image_3_url=get_field('image_3', get_the_ID());
    $image_4_url=get_field('image_4', get_the_ID());
    $formulaire=<<<EOD
    <div class="formulaire_de_commande">
        <h2>Commander</h2>
        <div class="parfums">
            <div class="parfum">
                <img src="$image_1_url">
            </div>
            <div class="parfum">
                <img src="$image_3_url">
            </div>
            <div class="parfum">
                <img src="$image_2_url">
            </div>
            <div class="parfum">
                <img src="$image_4_url">
            </div>
        </div>
        <input type="text" name="nom" value="nom">
        <input type="text" name="prenom" value="prénom">
        <input type="email" name"email" value="e-mail">
        <input type="text" name "adresse" value="Adresse de livraison">
        <input type="text" name "zip" value="Code postal">
        <input type="text" name "city" value="Ville">
        <input type="submit" value="Commander">
    </div>
    EOD;
    return $formulaire;
}