<?php
/**
 * The template that supplies our WordPress Social Menu
 *
 * @author Justin Tadlock
 * @see http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.4.7
 */
?>

<?php if ( has_nav_menu( 'social' ) ) {

	wp_nav_menu(
		array(
			'theme_location'  => 'social',
			'container'       => 'div',
			'container_id'    => 'menu-social',
			'container_class' => 'menu',
			'menu_id'         => 'menu-social-items',
			'menu_class'      => 'menu-items clearfix',
			'depth'           => 1,
			'link_before'     => '<span class="screen-reader-text">',
			'link_after'      => '</span>',
			'fallback_cb'     => '',
		)
	);

} ?>