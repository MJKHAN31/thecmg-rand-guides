<?php
/**
 * 404 template
 *
 * @package Orca_ABA
 */

get_header();
?>

<section class="page-header">
	<div class="container">
		<span class="eyebrow"><?php esc_html_e( 'Page not found', 'orca-aba' ); ?></span>
		<h1 class="page-header__title"><?php esc_html_e( "We couldn't find that page.", 'orca-aba' ); ?></h1>
		<p class="page-header__intro"><?php esc_html_e( 'But we can still help. Try one of these — or just give us a call.', 'orca-aba' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container" style="text-align:center;">
		<a class="btn btn--primary btn--lg" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'orca-aba' ); ?></a>
		<a class="btn btn--ghost btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="margin-left:0.75rem;"><?php esc_html_e( 'Contact us', 'orca-aba' ); ?></a>
	</div>
</section>

<?php
get_footer();
