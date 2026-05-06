<?php
/**
 * Index template — required fallback.
 *
 * @package Orca_ABA
 */

get_header();
?>

<section class="page-header">
	<div class="container">
		<h1 class="page-header__title"><?php
			if ( is_home() && ! is_front_page() ) {
				single_post_title();
			} elseif ( is_archive() ) {
				the_archive_title();
			} else {
				esc_html_e( 'News & Updates', 'orca-aba' );
			}
		?></h1>
	</div>
</section>

<section class="section">
	<div class="container" style="max-width:780px;">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article style="margin-bottom:3rem; padding-bottom:3rem; border-bottom:2px solid var(--orca-gray-100);">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p style="color:var(--orca-gray-600); font-size:0.9375rem;">
						<?php echo esc_html( get_the_date() ); ?>
					</p>
					<?php the_excerpt(); ?>
					<a class="btn btn--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'orca-aba' ); ?></a>
				</article>
			<?php endwhile; ?>

			<?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'Nothing here yet — check back soon.', 'orca-aba' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
