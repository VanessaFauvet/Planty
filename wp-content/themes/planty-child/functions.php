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
    <div id="command_form">
        <form method="get" action="">
            <h2 class="commander_title">Commander</h2>
            <h3 class="commander_subtitle">Votre commande</h3>
            <div id="saveurs">
                <div class="saveur">
                    <img src="$image_1_url" alt="image de fraises">
                    <input type="number" name="number" class="number">
                </div>
                <div class="saveur">
                    <img src="$image_3_url" alt="image de quartiers de pamplemousses">
                    <input type="number" name="number" class="number">
                </div>
                <div class="saveur">
                    <img src="$image_2_url" alt="image de framboises">
                    <input type="number" name="number" class="number">
                </div>
                <div class="saveur">
                    <img src="$image_4_url" alt="image de demi citrons">
                    <input type="number" name="number" class="number">
                </div>
            </div>
            <div class="donnees">
                <div class="infos">
                    <h3 class="commander_subtitle">Vos informations</h3>
                    <label>Nom</label>
                    <input type="text" name="nom" class="wpcf7-text">
                    <label>Prénom</label>
                    <input type="text" name="prenom" class="wpcf7-text">
                    <label>E-mail</label>
                    <input type="email" name="email" class="wpcf7-text">
                </div>
                <div class="livraison">
                    <h3 class="commander_subtitle">Livraison</h3>
                    <label>Adresse de livraison</label>
                    <input type="text" name="adresse" class="wpcf7-text">
                    <label>Code postal</label>
                    <input type="text" name="zip" class="wpcf7-text">
                    <label>Ville</label>
                    <input type="text" name="city" class="wpcf7-text">
                </div
            </div>
            <button type="submit" class="wpcf7 btn">Commander</button>
        </form>
    </div>
    EOD;
    return $formulaire;
}