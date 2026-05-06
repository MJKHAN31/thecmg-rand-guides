<?php
/**
 * Homepage template (front-page.php) — used as the default front page.
 *
 * Mirrors orcaaba.com structure: hero, contact band, differentiators,
 * Dr. Adolphson section, services preview, CTA band.
 *
 * @package Orca_ABA
 */

get_header();
?>

<!-- HERO -->
<section class="hero">
	<div class="container hero__grid">
		<div>
			<span class="eyebrow"><?php esc_html_e( 'ABA Therapy in Utah', 'orca-aba' ); ?></span>
			<h1 class="hero__title">
				<?php esc_html_e( 'Leading with love, not labels', 'orca-aba' ); ?>
			</h1>
			<p class="hero__intro">
				<?php esc_html_e( 'Orca provides individualized ABA therapy for individuals with autism across Utah. We work together with you to help the child you care about shine.', 'orca-aba' ); ?>
			</p>

			<div class="hero__proofs">
				<span class="hero__proof">
					<?php orca_proof_icon(); ?>
					<?php esc_html_e( 'We accept Medicaid.', 'orca-aba' ); ?>
				</span>
				<span class="hero__proof">
					<?php orca_proof_icon(); ?>
					<?php esc_html_e( 'No waitlist.', 'orca-aba' ); ?>
				</span>
				<span class="hero__proof">
					<?php orca_proof_icon(); ?>
					<?php esc_html_e( 'Hablamos Español.', 'orca-aba' ); ?>
				</span>
			</div>

			<div class="hero__cta">
				<a class="btn btn--primary btn--lg" href="#contact"><?php esc_html_e( 'Get in Touch', 'orca-aba' ); ?></a>
				<a class="btn btn--ghost btn--lg" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'See Our Services', 'orca-aba' ); ?></a>
			</div>
		</div>

		<div class="hero__media">
			<?php
			$hero_img = get_theme_file_uri( '/assets/images/hero-child.jpg' );
			if ( file_exists( get_theme_file_path( '/assets/images/hero-child.jpg' ) ) ) : ?>
				<img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php esc_attr_e( 'A child receiving ABA therapy', 'orca-aba' ); ?>">
			<?php else : ?>
				<div class="hero__media-placeholder">
					<?php esc_html_e( 'Add a real, candid photo of a Utah family or child to /assets/images/hero-child.jpg. Use natural light, real environments — no stock imagery.', 'orca-aba' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- INTAKE FORM BAND -->
<section class="form-band" id="contact" aria-labelledby="contact-title">
	<div class="container">
		<div class="form-band__card">
			<div class="form-band__head">
				<h2 class="form-band__title" id="contact-title"><?php esc_html_e( "We're here for you", 'orca-aba' ); ?></h2>
				<p class="form-band__note"><?php esc_html_e( "Drop in your details and we'll get back to you within 24 hours.*", 'orca-aba' ); ?></p>
			</div>

			<form class="intake-form" id="orca-intake-form">
				<label class="screen-reader-text" for="orca-name"><?php esc_html_e( 'Full Name', 'orca-aba' ); ?></label>
				<input id="orca-name" type="text" name="name" placeholder="<?php esc_attr_e( 'Full Name', 'orca-aba' ); ?>" required>

				<label class="screen-reader-text" for="orca-email"><?php esc_html_e( 'Email Address', 'orca-aba' ); ?></label>
				<input id="orca-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Email Address', 'orca-aba' ); ?>" required>

				<label class="screen-reader-text" for="orca-phone"><?php esc_html_e( 'Phone Number', 'orca-aba' ); ?></label>
				<input id="orca-phone" type="tel" name="phone" placeholder="<?php esc_attr_e( 'Phone Number', 'orca-aba' ); ?>">

				<button type="submit"><?php esc_html_e( 'Get in Touch', 'orca-aba' ); ?></button>

				<div class="intake-form__msg" role="status" aria-live="polite" style="grid-column:1/-1;"></div>
			</form>
		</div>
	</div>
</section>

<!-- DIFFERENTIATORS -->
<section class="section">
	<div class="container">
		<div style="max-width:700px;">
			<span class="eyebrow"><?php esc_html_e( 'Why Orca', 'orca-aba' ); ?></span>
			<h2><?php esc_html_e( 'Built for the families other providers turn down', 'orca-aba' ); ?></h2>
			<p class="lead">
				<?php esc_html_e( "Most ABA agencies in Utah focus narrowly on early intervention. We don't. From toddlers to young adults, mild cases to complex ones, we serve the families who've been told 'no' or 'we have a waitlist' too many times.", 'orca-aba' ); ?>
			</p>
		</div>

		<div class="differentiators">

			<article class="diff-card">
				<div class="diff-card__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12c0-5 4-9 9-9s9 4 9 9-4 9-9 9-9-4-9-9z"/><path d="M12 7v5l3 3"/></svg>
				</div>
				<h3><?php esc_html_e( 'Ages 1 to 21', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( 'We serve children, teens, and young adults across the full developmental span — not just early intervention. School-age and adolescent kids deserve great ABA too.', 'orca-aba' ); ?></p>
			</article>

			<article class="diff-card">
				<div class="diff-card__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3 7h7l-5.5 4 2 7-6.5-4.5L5.5 20l2-7L2 9h7z"/></svg>
				</div>
				<h3><?php esc_html_e( 'Complex cases welcome', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( "Severe behaviors, dual diagnoses, kids who've been declined or discharged elsewhere — we're built for the cases other providers turn down.", 'orca-aba' ); ?></p>
			</article>

			<article class="diff-card">
				<div class="diff-card__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/></svg>
				</div>
				<h3><?php esc_html_e( 'Mental health + ABA', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( 'When autism comes with anxiety, ADHD, depression, or trauma histories, we integrate behavioral mental health into our ABA practice — because one without the other often isn\'t enough.', 'orca-aba' ); ?></p>
			</article>

			<article class="diff-card">
				<div class="diff-card__icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>
				</div>
				<h3><?php esc_html_e( '25 years of experience', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( 'Founded and led by Dr. Lillian Adolphson, a doctorate-level BCBA with over 25 years building ABA programs. Every case has direct clinical oversight.', 'orca-aba' ); ?></p>
			</article>

		</div>
	</div>
</section>

<!-- FOUNDER SECTION -->
<section class="section section--gray">
	<div class="container">
		<div class="founder">
			<div class="founder__photo">
				<?php
				$founder_img = get_theme_file_path( '/assets/images/dr-adolphson.jpg' );
				if ( file_exists( $founder_img ) ) : ?>
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/dr-adolphson.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Dr. Lillian Adolphson, Founder & Chief Clinical Officer', 'orca-aba' ); ?>">
				<?php else : ?>
					<div class="hero__media-placeholder" style="background:var(--orca-sage);">
						<?php esc_html_e( 'Real photo of Dr. Adolphson', 'orca-aba' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div>
				<span class="eyebrow"><?php esc_html_e( 'Meet our Founder', 'orca-aba' ); ?></span>
				<h2 class="founder__name"><?php esc_html_e( 'Dr. Lillian Adolphson', 'orca-aba' ); ?></h2>
				<p class="founder__title"><?php esc_html_e( 'Founder & Chief Clinical Officer  •  Doctorate-Level BCBA', 'orca-aba' ); ?></p>
				<p>
					<?php esc_html_e( "Lillian has spent the last 25 years in ABA — a doctorate-level Board Certified Behavior Analyst who has built and overseen clinical programs across the country. She founded Orca because she wanted to do ABA the way she always believed it should be done: individualized, family-first, and willing to take on the cases other agencies won't.", 'orca-aba' ); ?>
				</p>
				<p>
					<?php esc_html_e( "Every case at Orca has Dr. Adolphson's direct clinical oversight. Parents don't get handed off — they get a real conversation, however long it takes.", 'orca-aba' ); ?>
				</p>
				<a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Read more about Orca', 'orca-aba' ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- AGES STRIP -->
<section class="section section--sage">
	<div class="container">
		<div style="max-width:720px;">
			<span class="eyebrow" style="color:var(--orca-black);"><?php esc_html_e( 'Who we serve', 'orca-aba' ); ?></span>
			<h2><?php esc_html_e( 'Every age. Every stage.', 'orca-aba' ); ?></h2>
			<p class="lead" style="color:var(--orca-gray-800);">
				<?php esc_html_e( 'We meet children, teens, and young adults wherever they are — at home, in daycare, at school, in the community. Real environments. Real progress.', 'orca-aba' ); ?>
			</p>
		</div>

		<div class="ages-strip">
			<div class="age-tile" style="background:#fff;">
				<span class="age-tile__range">1–5</span>
				<span class="age-tile__label"><?php esc_html_e( 'Early intervention', 'orca-aba' ); ?></span>
			</div>
			<div class="age-tile" style="background:#fff;">
				<span class="age-tile__range">6–12</span>
				<span class="age-tile__label"><?php esc_html_e( 'School-age', 'orca-aba' ); ?></span>
			</div>
			<div class="age-tile" style="background:#fff;">
				<span class="age-tile__range">13–17</span>
				<span class="age-tile__label"><?php esc_html_e( 'Adolescent', 'orca-aba' ); ?></span>
			</div>
			<div class="age-tile" style="background:#fff;">
				<span class="age-tile__range">18–21</span>
				<span class="age-tile__label"><?php esc_html_e( 'Young adult', 'orca-aba' ); ?></span>
			</div>
		</div>
	</div>
</section>

<!-- CTA BAND -->
<section class="section">
	<div class="container">
		<div class="cta-band">
			<h2><?php esc_html_e( "Ready when you are. No waitlist.", 'orca-aba' ); ?></h2>
			<p><?php esc_html_e( "Whether your child was just diagnosed or you've been told 'no' by another provider, we want to talk. Same week. Real conversations.", 'orca-aba' ); ?></p>
			<a class="btn btn--teal btn--lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Start the conversation', 'orca-aba' ); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
