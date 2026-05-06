<?php
/**
 * Template Name: Orca — About Us
 *
 * @package Orca_ABA
 */

get_header();
?>

<section class="page-header">
	<div class="container">
		<span class="eyebrow"><?php esc_html_e( 'About Us', 'orca-aba' ); ?></span>
		<h1 class="page-header__title"><?php esc_html_e( 'ABA done differently — and on purpose.', 'orca-aba' ); ?></h1>
		<p class="page-header__intro">
			<?php esc_html_e( "Orca was founded for the families ABA was supposed to serve all along: every age, every complexity, every kind of household. We built the agency we wished existed.", 'orca-aba' ); ?>
		</p>
	</div>
</section>

<section class="section">
	<div class="container split">
		<div class="split__media">
			<?php
			$img = get_theme_file_path( '/assets/images/about-team.jpg' );
			if ( file_exists( $img ) ) : ?>
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/about-team.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Orca ABA team', 'orca-aba' ); ?>">
			<?php else : ?>
				<div class="hero__media-placeholder"><?php esc_html_e( 'Team or environment photo (not stock)', 'orca-aba' ); ?></div>
			<?php endif; ?>
		</div>
		<div>
			<span class="eyebrow"><?php esc_html_e( 'Our Story', 'orca-aba' ); ?></span>
			<h2><?php esc_html_e( "Started by a clinician, not a chain.", 'orca-aba' ); ?></h2>
			<p>
				<?php esc_html_e( "Dr. Lillian Adolphson spent 25 years in ABA — leading clinical programs, training BCBAs, and watching the field shift. Too many agencies were optimizing for the easy cases. Too many families were being told 'we can't help' or 'come back when your child is younger.'", 'orca-aba' ); ?>
			</p>
			<p>
				<?php esc_html_e( "Orca exists because Utah needed an ABA provider built around the families. Not the other way around.", 'orca-aba' ); ?>
			</p>
		</div>
	</div>
</section>

<section class="section section--gray">
	<div class="container">
		<div style="max-width:720px;">
			<span class="eyebrow"><?php esc_html_e( 'What We Believe', 'orca-aba' ); ?></span>
			<h2><?php esc_html_e( 'Five things we won\'t compromise on', 'orca-aba' ); ?></h2>
		</div>

		<div class="differentiators" style="margin-top:3rem;">

			<article class="diff-card">
				<h3><?php esc_html_e( 'Clinical excellence first', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( "Every decision starts with what's best clinically. We don't compromise on quality of care to grow faster.", 'orca-aba' ); ?></p>
			</article>

			<article class="diff-card">
				<h3><?php esc_html_e( 'Meet families where they are', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( "Our model is built around the child's real environment — home, daycare, school, community — not a clinic waiting room.", 'orca-aba' ); ?></p>
			</article>

			<article class="diff-card">
				<h3><?php esc_html_e( "Take the cases others won't", 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( "Complex behaviors, severe cases, dual diagnoses, older children — we're built for the families who've heard 'no' too many times.", 'orca-aba' ); ?></p>
			</article>

			<article class="diff-card">
				<h3><?php esc_html_e( "Respect the parent's time", 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( "Parents reaching out are often exhausted. We respond quickly, listen carefully, and never make them work for our help.", 'orca-aba' ); ?></p>
			</article>

			<article class="diff-card">
				<h3><?php esc_html_e( 'Never generic', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( "Our communication, our therapy, our relationships — all of it is individualized. Stock answers and stock photos are not us.", 'orca-aba' ); ?></p>
			</article>

		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="founder">
			<div class="founder__photo">
				<?php
				$img = get_theme_file_path( '/assets/images/dr-adolphson.jpg' );
				if ( file_exists( $img ) ) : ?>
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dr-adolphson.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Dr. Lillian Adolphson', 'orca-aba' ); ?>">
				<?php else : ?>
					<div class="hero__media-placeholder" style="background:var(--orca-sage);"><?php esc_html_e( 'Real photo of Dr. Adolphson', 'orca-aba' ); ?></div>
				<?php endif; ?>
			</div>
			<div>
				<span class="eyebrow"><?php esc_html_e( 'Founder', 'orca-aba' ); ?></span>
				<h2 class="founder__name"><?php esc_html_e( 'Dr. Lillian Adolphson', 'orca-aba' ); ?></h2>
				<p class="founder__title"><?php esc_html_e( 'Founder & Chief Clinical Officer  •  Doctorate-Level BCBA', 'orca-aba' ); ?></p>
				<p>
					<?php esc_html_e( "Lillian holds a doctorate and is a Board Certified Behavior Analyst with over 25 years of experience. She has built and overseen clinical programs across multiple states and was, until starting Orca, a clinical leader at one of Utah's largest ABA providers. Every Orca case has her direct clinical oversight.", 'orca-aba' ); ?>
				</p>
				<p>
					<?php esc_html_e( "When a parent calls, Lillian takes the call. Sometimes those conversations last over an hour. That's not a bug — it's how Orca was designed.", 'orca-aba' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="cta-band">
			<h2><?php esc_html_e( 'Talk to us about your child.', 'orca-aba' ); ?></h2>
			<p><?php esc_html_e( "We'll listen — and tell you honestly whether Orca is the right fit. No pressure, no waitlist.", 'orca-aba' ); ?></p>
			<a class="btn btn--teal btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start the conversation', 'orca-aba' ); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
