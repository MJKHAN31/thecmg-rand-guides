<?php
/**
 * Generic page template (fallback for any page without a more specific template)
 *
 * @package Orca_ABA
 */

get_header();
?>

<section class="page-header">
	<div class="container">
		<h1 class="page-header__title"><?php the_title(); ?></h1>
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
	</div>
</section>

<?php
get_footer();
