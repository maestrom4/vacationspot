<?php
/**
 * The template for displaying top distination custom post type.
 *
 * @package wptheme1
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();
			get_template_part('template_parts/posts/top-distination-content');

			
		// End the loop.
		endwhile;
		?>
	</div>
</div>

<?php get_footer();
