<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Chargement de style.css du thème enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/style.css'));
    
    // Chargement du script personnalisé pour le slidingTitle
    wp_enqueue_script( 'slidingTitle-scripts', get_stylesheet_directory_uri() . '/assets/scripts/slidingTitle.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/scripts/slidingTitle.js'), true );

    // Chargement des fichiers CSS et JS de Swiper.js
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

    // Chargement du script personnalisé pour initialiser Swiper
    wp_enqueue_script('custom-swiper-js', get_stylesheet_directory_uri() . '/assets/scripts/custom-swiper.js', array('swiper-js'), filemtime(get_stylesheet_directory() . '/assets/scripts/custom-swiper.js'), true);

    // Chargement du script personnalisé pour les nuages
    wp_enqueue_script( 'clouds-scripts', get_stylesheet_directory_uri() . '/assets/scripts/clouds.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/scripts/clouds.js'), true );

    // Chargement du script personnalisé pour le nouveau menu
    wp_enqueue_script( 'menu-scripts', get_stylesheet_directory_uri() . '/assets/scripts/menu.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/scripts/menu.js'), true );
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