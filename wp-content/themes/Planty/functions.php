<?php
// Charger les styles et scripts du thème
function theme_enqueue_assets() {
    // Charger les styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

    // Charger le script menu.js dans le footer
    wp_enqueue_script('custom-menu', get_stylesheet_directory_uri() . '/js/menu.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

// Déclaration des emplacements de menus
function register_my_menus() {
    register_nav_menus(array(
        'header-menu' => __('Menu principal'),
        'footer-menu' => __('Menu du pied de page')
    ));
}
add_action('init', 'register_my_menus');

// Ajouter un lien "Admin" pour les utilisateurs connectés dans le menu principal
function add_admin_link_to_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté et si le menu est le menu principal
    if (is_user_logged_in() && $args->theme_location === 'header-menu') {
        // Crée un lien "Admin" avec une classe personnalisée pour le style
        $admin_link = '<li class="menu-item admin-link"><a href="' . admin_url() . '">Admin</a></li>';
        $items .= $admin_link; // Ajoute le lien "Admin" à la fin du menu
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
?>