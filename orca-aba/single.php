<?php
/**
 * Single post template (also used for single Job CPT entries)
 *
 * @package Orca_ABA
 */

get_header();
?>

<section class="page-header">
	<div class="container">
		<?php if ( get_post_type() === 'orca_job' ) : ?>
			<span class="eyebrow"><?php esc_html_e( 'Open position', 'orca-aba' ); ?></span>
		<?php endif; ?>
		<h1 class="page-header__title"><?php the_title(); ?></h1>

		<?php if ( get_post_type() === 'orca_job' ) :
			$loc = get_post_meta( get_the_ID(), 'orca_job_location', true );
			$type = get_post_meta( get_the_ID(), 'orca_job_type', true );
			if ( $loc || $type ) : ?>
				<p class="page-header__intro" style="margin-top:0.5rem;">
					<?php echo esc_html( trim( $loc . ( $loc && $type ? '  •  ' : '' ) . $type ) ); ?>
				</p>
			<?php endif;
		endif; ?>
	</div>
</section>

<section class="section">
	<div class="container" style="max-width:780px;">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
		?>

		<?php if ( get_post_type() === 'orca_job' ) : ?>
			<div style="margin-top:3rem; padding-top:2rem; border-top:2px solid var(--orca-gray-100);">
				<h3><?php esc_html_e( 'Apply for this role', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( 'Email a brief intro and your resume to', 'orca-aba' ); ?> <a href="mailto:careers@orcaaba.com">careers@orcaaba.com</a> &mdash; <?php esc_html_e( "we read every one. We'll respond within 3 business days.", 'orca-aba' ); ?></p>
				<a class="btn btn--primary btn--lg" href="mailto:careers@orcaaba.com"><?php esc_html_e( 'Email careers@orcaaba.com', 'orca-aba' ); ?></a>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
