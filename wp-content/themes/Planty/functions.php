<?php
// Charger les styles et scripts du thème
function theme_enqueue_assets() {
    // Charger les styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

    // Charger le script menu.js
    wp_enqueue_script('custom-menu', get_stylesheet_directory_uri() . '/js/menu.js', array(), '1.0', true); // 'true' pour charger dans le footer
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

// Déclaration des emplacements de menus
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Menu principal' ),
            'footer-menu' => __( 'Menu du pied de page' )
        )
    );
}
add_action('init', 'register_my_menus');

// register shortcode
add_shortcode('bbwp_get_session', 'bbwp_get_session'); 

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
	if (is_user_logged_in() && $args->menu === 'main-menu') {
		$items .= '<li class="wt_menu_item_user_avatar"><a href="/my-account">' . get_avatar( $current_user->ID, 32 ) . '</a></li>';
	}
	return $items;
}
?>