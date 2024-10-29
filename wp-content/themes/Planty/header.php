<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>
    <header>
        <button class="menu-toggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="nav-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <!-- Logo à gauche -->
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="http://localhost:10018/wp-content/uploads/2024/09/Logo-source.png" alt="Logo">
                </a>
            </div>
            <div class="menuplanty">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'main-menu', // Classe personnalisée pour le menu
                    'container' => false, // Pas de conteneur HTML autour du menu
                    'fallback_cb' => false // Pas de menu par défaut si aucun menu n'est assigné
                ));
                ?>
                <!-- Lien "Commander" à droite -->
                <div class="special-link">
                    <a href="/commander">Commander</a>
                </div>
            </div>
        </nav>
    </header>