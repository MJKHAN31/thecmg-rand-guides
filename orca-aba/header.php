<?php
/**
 * Header template
 *
 * @package Orca_ABA
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta name="theme-color" content="#48BEA6">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'orca-aba' ); ?></a>

<header class="site-header" role="banner">
	<div class="container site-header__inner">

		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Orca ABA Therapy — Home', 'orca-aba' ); ?>">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				orca_logo_svg();
				?>
				<span>
					orca
					<span class="site-logo__sub">ABA Therapy</span>
				</span>
				<?php
			}
			?>
		</a>

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'orca-aba' ); ?></span>
			<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
				<line x1="3" y1="6" x2="21" y2="6"/>
				<line x1="3" y1="12" x2="21" y2="12"/>
				<line x1="3" y1="18" x2="21" y2="18"/>
			</svg>
		</button>

		<nav class="site-nav" id="primary-menu" aria-label="<?php esc_attr_e( 'Primary', 'orca-aba' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => '',
					'depth'          => 1,
				) );
			} else {
				?>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Us', 'orca-aba' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'orca-aba' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>"><?php esc_html_e( 'Careers', 'orca-aba' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'orca-aba' ); ?></a></li>
				</ul>
				<?php
			}
			?>
		</nav>

		<a class="site-header__phone" href="tel:8014079422" aria-label="<?php esc_attr_e( 'Call Orca ABA', 'orca-aba' ); ?>">
			801.407.9422
		</a>

	</div>
</header>

<main id="main-content" role="main">
