<?php
/**
 * Template part for displaying nav
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Js_Blog
 */

?>

<div class="collapse navbar-collapse justify-content-center centered-nav">
<!-- menus -->
<?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_id'        => 'primary-menu',
            'container'		 => 'ul',
            'container_class' => 'navbar-nav',
            'menu_class'      => 'navbar-nav',
        )
    );
?>
</div>