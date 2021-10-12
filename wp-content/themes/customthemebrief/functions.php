<?php

function customtheme_enqueue_scripts()
{
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', [], false, true);
}

function customtheme_li_class($classes)
{
    $classes = [];
    $classes[] = 'nav-item';

    return $classes;
}

function customtheme_link_class($attr)
{
    $attr['class'] = 'nav-link';

    return $attr;
}

// add thumbnail support to theme
add_theme_support('post-thumbnails');
// add menus support
// add_theme_support('menus');

// enregistrer le menu dans wp
register_nav_menus([
    'header' => 'Menu Principal',
    'menu footer' => 'Menu footer',
]);

//ajouter image perso
add_image_size("icon", 64, 64, ["x_crop)position" => "center", "y_crop_position" => "center"]);

// ajouter le script et la stylesheet Bootstrap à notre thème
add_action('wp_enqueue_scripts', 'customtheme_enqueue_scripts');

// application d'un filtre pour les classes li de la navbar
add_filter('nav_menu_css_class', 'customtheme_li_class');
// application d'un filtre pour les classes a de la navbar
add_filter('nav_menu_link_attributes', 'customtheme_link_class');

add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );


