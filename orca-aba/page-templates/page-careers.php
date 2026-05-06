<?php
/**
 * Template Name: Orca — Careers
 *
 * @package Orca_ABA
 */

get_header();

$jobs = new WP_Query( array(
	'post_type'      => 'orca_job',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
) );
?>

<section class="page-header">
	<div class="container">
		<span class="eyebrow"><?php esc_html_e( 'Careers', 'orca-aba' ); ?></span>
		<h1 class="page-header__title"><?php esc_html_e( 'Do ABA the way you always wanted to.', 'orca-aba' ); ?></h1>
		<p class="page-header__intro">
			<?php esc_html_e( 'Smaller caseloads. Real clinical leadership. Direct doctorate-level supervision. We built Orca for the clinicians who got into this field for the right reasons.', 'orca-aba' ); ?>
		</p>
	</div>
</section>

<section class="section">
	<div class="container split">
		<div>
			<span class="eyebrow"><?php esc_html_e( 'Why Orca', 'orca-aba' ); ?></span>
			<h2><?php esc_html_e( 'A different kind of ABA workplace', 'orca-aba' ); ?></h2>
			<p>
				<?php esc_html_e( "We're a clinician-led, growing Utah ABA agency — not a private equity rollup. That means smaller caseloads, real mentorship from a doctorate-level BCBA, and the ability to actually do clinically excellent work without burning out.", 'orca-aba' ); ?>
			</p>
			<p>
				<?php esc_html_e( "If you've been told you can't take complex cases, can't take older kids, or can't spend the time families actually need — Orca is built differently.", 'orca-aba' ); ?>
			</p>
			<a class="btn btn--ghost" href="#openings"><?php esc_html_e( 'See open positions', 'orca-aba' ); ?></a>
		</div>

		<div class="split__media">
			<?php
			$img = get_theme_file_path( '/assets/images/careers.jpg' );
			if ( file_exists( $img ) ) : ?>
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/careers.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Orca team at work', 'orca-aba' ); ?>">
			<?php else : ?>
				<div class="hero__media-placeholder"><?php esc_html_e( 'Team or therapy environment photo', 'orca-aba' ); ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="section section--gray" id="openings">
	<div class="container">
		<div style="max-width:700px; margin-bottom:2.5rem;">
			<span class="eyebrow"><?php esc_html_e( 'Open Positions', 'orca-aba' ); ?></span>
			<h2><?php esc_html_e( "We're hiring across Utah", 'orca-aba' ); ?></h2>
			<p class="lead"><?php esc_html_e( "BCBAs, BCaBAs, and Behavior Technicians who want clinically rigorous, family-centered ABA work.", 'orca-aba' ); ?></p>
		</div>

		<div class="job-list">
			<?php if ( $jobs->have_posts() ) : ?>
				<?php while ( $jobs->have_posts() ) : $jobs->the_post(); ?>
					<article class="job-card">
						<div>
							<h3><?php the_title(); ?></h3>
							<div class="job-card__meta">
								<?php if ( get_post_meta( get_the_ID(), 'orca_job_location', true ) ) : ?>
									<span><?php echo esc_html( get_post_meta( get_the_ID(), 'orca_job_location', true ) ); ?></span>
								<?php endif; ?>
								<?php if ( get_post_meta( get_the_ID(), 'orca_job_type', true ) ) : ?>
									<span><?php echo esc_html( get_post_meta( get_the_ID(), 'orca_job_type', true ) ); ?></span>
								<?php endif; ?>
							</div>
							<?php if ( has_excerpt() ) : ?>
								<p style="margin-top:0.75rem; color:var(--orca-gray-600);"><?php echo esc_html( get_the_excerpt() ); ?></p>
							<?php endif; ?>
						</div>
						<a class="btn btn--primary" href="<?php the_permalink(); ?>"><?php esc_html_e( 'View role', 'orca-aba' ); ?></a>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			<?php else : ?>
				<?php
				// Default placeholder roles when no jobs are posted yet.
				$placeholders = array(
					array( 'title' => __( 'Board Certified Behavior Analyst (BCBA)', 'orca-aba' ), 'meta' => __( 'Salt Lake County  •  Full-time', 'orca-aba' ), 'desc' => __( 'Lead clinical caseloads with direct oversight from Dr. Adolphson. Smaller caseloads, real mentorship, complex cases welcome.', 'orca-aba' ) ),
					array( 'title' => __( 'Behavior Technician (BT/RBT)', 'orca-aba' ), 'meta' => __( 'Multiple Utah counties  •  Full or part-time', 'orca-aba' ), 'desc' => __( 'Work directly with kids and teens in homes, schools, and community settings. Paid training, supportive supervision, real growth path.', 'orca-aba' ) ),
					array( 'title' => __( 'Bilingual BCBA (Spanish-speaking)', 'orca-aba' ), 'meta' => __( 'Salt Lake County  •  Full-time', 'orca-aba' ), 'desc' => __( "Help us serve Utah's Spanish-speaking families with culturally responsive ABA. Doctorate-level supervision, flexible caseload.", 'orca-aba' ) ),
				);
				foreach ( $placeholders as $j ) : ?>
					<article class="job-card">
						<div>
							<h3><?php echo esc_html( $j['title'] ); ?></h3>
							<div class="job-card__meta"><span><?php echo esc_html( $j['meta'] ); ?></span></div>
							<p style="margin-top:0.75rem; color:var(--orca-gray-600);"><?php echo esc_html( $j['desc'] ); ?></p>
						</div>
						<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Apply', 'orca-aba' ); ?></a>
					</article>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="cta-band">
			<h2><?php esc_html_e( "Don't see your role?", 'orca-aba' ); ?></h2>
			<p><?php esc_html_e( "We're growing fast. If you're a great clinician looking for a different kind of ABA workplace, we want to hear from you.", 'orca-aba' ); ?></p>
			<a class="btn btn--teal btn--lg" href="mailto:careers@orcaaba.com"><?php esc_html_e( 'careers@orcaaba.com', 'orca-aba' ); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
