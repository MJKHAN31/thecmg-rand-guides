<?php
/**
 * Footer template
 *
 * @package Orca_ABA
 */
?>
</main>

<footer class="site-footer" role="contentinfo">
	<div class="container">

		<div class="site-footer__grid">

			<div class="site-footer__about">
				<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="margin-bottom:1.5rem; color:#fff;">
					<?php orca_logo_svg( '#FFFFFF' ); ?>
					<span style="color:#fff;">
						orca
						<span class="site-logo__sub" style="color:rgba(255,255,255,0.7);">ABA Therapy</span>
					</span>
				</a>
				<p>
					<?php esc_html_e( 'Individualized, in-home and community-based ABA therapy for Utah families. Ages 1 to 21. Complex cases welcome. No waitlist.', 'orca-aba' ); ?>
				</p>
			</div>

			<div>
				<h4><?php esc_html_e( 'Visit', 'orca-aba' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Us', 'orca-aba' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'orca-aba' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>"><?php esc_html_e( 'Careers', 'orca-aba' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'orca-aba' ); ?></a></li>
				</ul>
			</div>

			<div>
				<h4><?php esc_html_e( 'Why Orca', 'orca-aba' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Ages 1 to 21', 'orca-aba' ); ?></li>
					<li><?php esc_html_e( 'Complex cases welcome', 'orca-aba' ); ?></li>
					<li><?php esc_html_e( 'Mental health + ABA', 'orca-aba' ); ?></li>
					<li><?php esc_html_e( 'Doctorate-level BCBA', 'orca-aba' ); ?></li>
					<li><?php esc_html_e( 'Hablamos Español', 'orca-aba' ); ?></li>
				</ul>
			</div>

			<div>
				<h4><?php esc_html_e( 'Reach Us', 'orca-aba' ); ?></h4>
				<ul>
					<li><a href="tel:8014079422">801.407.9422</a></li>
					<li><a href="mailto:contact@orcaaba.com">contact@orcaaba.com</a></li>
					<li><?php esc_html_e( 'Salt Lake City, Utah', 'orca-aba' ); ?></li>
					<li><?php esc_html_e( 'Mon–Fri, 8am–6pm MT', 'orca-aba' ); ?></li>
				</ul>
			</div>

		</div>

		<div class="site-footer__bottom">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php esc_html_e( 'Orca ABA Therapy. All rights reserved.', 'orca-aba' ); ?></span>
			<span><?php esc_html_e( 'Licensed ABA provider in the State of Utah.', 'orca-aba' ); ?></span>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
