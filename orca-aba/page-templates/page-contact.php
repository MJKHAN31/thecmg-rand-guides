<?php
/**
 * Template Name: Orca — Contact Us
 *
 * @package Orca_ABA
 */

get_header();
?>

<section class="page-header">
	<div class="container">
		<span class="eyebrow"><?php esc_html_e( 'Contact Us', 'orca-aba' ); ?></span>
		<h1 class="page-header__title"><?php esc_html_e( "Let's talk about your child.", 'orca-aba' ); ?></h1>
		<p class="page-header__intro">
			<?php esc_html_e( "Tell us a bit about your situation and we'll get back to you within 24 hours. No call centers, no scripts — just a real conversation with someone who can actually help.", 'orca-aba' ); ?>
		</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="contact-grid">

			<aside class="contact-info">
				<h3><?php esc_html_e( 'Reach Orca directly', 'orca-aba' ); ?></h3>
				<p><?php esc_html_e( "Mon–Fri, 8am–6pm Mountain Time. After-hours messages returned the next business day.", 'orca-aba' ); ?></p>

				<dl>
					<dt><?php esc_html_e( 'Phone', 'orca-aba' ); ?></dt>
					<dd><a href="tel:8014079422">801.407.9422</a></dd>

					<dt><?php esc_html_e( 'Email', 'orca-aba' ); ?></dt>
					<dd><a href="mailto:contact@orcaaba.com">contact@orcaaba.com</a></dd>

					<dt><?php esc_html_e( 'Service area', 'orca-aba' ); ?></dt>
					<dd><?php esc_html_e( 'Salt Lake, Utah, Davis, Summit & Weber counties', 'orca-aba' ); ?></dd>

					<dt><?php esc_html_e( 'Languages', 'orca-aba' ); ?></dt>
					<dd><?php esc_html_e( 'English  •  Español', 'orca-aba' ); ?></dd>

					<dt><?php esc_html_e( 'Insurance', 'orca-aba' ); ?></dt>
					<dd><?php esc_html_e( 'Medicaid and major commercial plans accepted', 'orca-aba' ); ?></dd>
				</dl>
			</aside>

			<form class="contact-form" id="orca-contact-form">

				<div>
					<label for="cf-name"><?php esc_html_e( 'Your name', 'orca-aba' ); ?> *</label>
					<input id="cf-name" type="text" name="name" required>
				</div>

				<div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
					<div>
						<label for="cf-email"><?php esc_html_e( 'Email', 'orca-aba' ); ?> *</label>
						<input id="cf-email" type="email" name="email" required>
					</div>
					<div>
						<label for="cf-phone"><?php esc_html_e( 'Phone', 'orca-aba' ); ?></label>
						<input id="cf-phone" type="tel" name="phone">
					</div>
				</div>

				<div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
					<div>
						<label for="cf-zip"><?php esc_html_e( 'ZIP code', 'orca-aba' ); ?></label>
						<input id="cf-zip" type="text" name="zip" maxlength="10">
					</div>
					<div>
						<label for="cf-age"><?php esc_html_e( "Child's age", 'orca-aba' ); ?></label>
						<select id="cf-age" name="age">
							<option value=""><?php esc_html_e( '— Select —', 'orca-aba' ); ?></option>
							<option><?php esc_html_e( '1–3 years', 'orca-aba' ); ?></option>
							<option><?php esc_html_e( '4–7 years', 'orca-aba' ); ?></option>
							<option><?php esc_html_e( '8–12 years', 'orca-aba' ); ?></option>
							<option><?php esc_html_e( '13–17 years', 'orca-aba' ); ?></option>
							<option><?php esc_html_e( '18–21 years', 'orca-aba' ); ?></option>
						</select>
					</div>
				</div>

				<div>
					<label for="cf-diag"><?php esc_html_e( 'Has your child completed an autism evaluation?', 'orca-aba' ); ?></label>
					<select id="cf-diag" name="diagnosis">
						<option value=""><?php esc_html_e( '— Select —', 'orca-aba' ); ?></option>
						<option><?php esc_html_e( 'Yes, formally diagnosed', 'orca-aba' ); ?></option>
						<option><?php esc_html_e( 'In progress', 'orca-aba' ); ?></option>
						<option><?php esc_html_e( 'Not yet — still exploring', 'orca-aba' ); ?></option>
					</select>
				</div>

				<div>
					<label for="cf-insurance"><?php esc_html_e( 'Insurance', 'orca-aba' ); ?></label>
					<input id="cf-insurance" type="text" name="insurance" placeholder="<?php esc_attr_e( 'e.g., Medicaid, Select Health, Aetna', 'orca-aba' ); ?>">
				</div>

				<div>
					<label for="cf-message"><?php esc_html_e( 'Tell us about your child and what kind of support you’re looking for', 'orca-aba' ); ?></label>
					<textarea id="cf-message" name="message" rows="5"></textarea>
				</div>

				<button type="submit" class="btn btn--primary btn--lg" style="justify-self:start;"><?php esc_html_e( 'Send', 'orca-aba' ); ?></button>

				<div class="contact-form__msg" role="status" aria-live="polite"></div>

			</form>

		</div>
	</div>
</section>

<section class="section section--sage">
	<div class="container" style="text-align:center;">
		<h2 style="max-width:24ch; margin-inline:auto;"><?php esc_html_e( "Or just call. We answer.", 'orca-aba' ); ?></h2>
		<p class="lead" style="margin-inline:auto; color:var(--orca-gray-800);"><?php esc_html_e( "Sometimes a real conversation is faster than a form. We expect calls — and Dr. Adolphson herself often takes them.", 'orca-aba' ); ?></p>
		<p style="margin-top:1.5rem;"><a class="btn btn--primary btn--lg" href="tel:8014079422"><?php esc_html_e( '801.407.9422', 'orca-aba' ); ?></a></p>
	</div>
</section>

<?php
get_footer();
