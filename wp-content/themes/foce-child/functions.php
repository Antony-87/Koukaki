<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function import_scripts() {
    // Enregistrer et charger le fichier script.js
    wp_enqueue_script(
        'mon-script', // Nom unique du script
        get_stylesheet_directory_uri() . '/js/script.js', // Chemin vers le fichier
        array('jquery'), // Dépendances (si nécessaires, ex. jQuery)
        '1.0', // Version du script
        true // Charger dans le footer
    );

    // Charger Swiper CSS
    wp_enqueue_style(
        'swiper-style', // Nom unique pour Swiper
        'https://unpkg.com/swiper/swiper-bundle.min.css', // URL du fichier CSS
        array(), // Aucune dépendance
        null // Pas de version spécifique
    );

    // Charger Swiper JS
    wp_enqueue_script(
        'swiper-script', // Nom unique pour Swiper
        'https://unpkg.com/swiper/swiper-bundle.min.js', // URL du fichier JS
        array(), // Pas de dépendances
        null, // Pas de version spécifique
        true // Charger dans le footer
    );

    // Ajouter un script inline pour initialiser Swiper
    wp_add_inline_script(
        'swiper-script', // Nom du script auquel l'ajouter
        "
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
    el: '.swiper-pagination',
    clickable: false,
    renderBullet: function () {
      return '';
    },
        });
        "
    );
}
add_action('wp_enqueue_scripts', 'import_scripts');

function enqueue_custom_scripts() {
    // Déclare le chemin du fichier script.js
    wp_enqueue_script(
        'custom-script', // Identifiant unique
        get_stylesheet_directory_uri() . '/js/script.js', // Chemin vers le fichier
        array(), // Dépendances (vide ici)
        filemtime(get_stylesheet_directory() . '/js/script.js'), // Version basée sur l'heure de modification
        true // Chargement dans le footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

