<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

get_header(); 

?>

<div class="container">
    <ul class="menu-list">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-6',
                'menu_id'        => 'sitemap-menu',
            ) );
        ?>
    </ul>
</div>

<?php
get_footer();