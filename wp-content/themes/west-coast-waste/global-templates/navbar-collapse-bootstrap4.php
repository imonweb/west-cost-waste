<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark" aria-labelledby="main-nav-label">

	<!-- <h2 id="main-nav-label" class="screen-reader-text"> -->
		<?php //esc_html_e( 'Main Navigation', 'understrap' ); ?>
	<!-- </h2> -->


<?php // if ( 'container' === $container ) : ?>
	<div class="container">
<?php // endif; ?>

	<div class="search-input-holder">
 
			<div class="title">Quote:</div>
			<input type="text" placeholder="Type your suburb here">
 
	</div>

		<!-- Your site title as branding in the menu -->
		<!--  -->
		<!-- end custom logo -->

		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php // esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button> -->

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>

<?php // if ( 'container' === $container ) : ?>
	</div><!-- .container -->
<?php // endif; ?>

</nav><!-- .site-navigation -->
