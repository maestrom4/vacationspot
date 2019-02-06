<?php
/**
 * Page template for this test theme
 *
 * @package wpthemes1
 * @version 1.0
 * @author Danilo B. Matias Jr.
 * @link danilomatias.bid
 * @since 2018
 */
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template_parts/pages/page', 'get_posts_formats' );
	endwhile;
endif;
get_footer();