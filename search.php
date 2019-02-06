<?php
/**
 * The template for displaying search results pages
 *
 * @link http://danilomatias.bid
 *
 * @package Wpthemes1
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php get_header();?>
<div class="container">
	<div class="row mt-3">
		<div class="col-xs-12 col-lg-12 my-md-3 my-lg-5">
			<h1>Search Page</h1>
			<hr>
		</div>
	</div>
</div>
<div class="container-fluid bg-color-posts-header bg-color-posts-sizes pad-topbot-2">
	<div class="container text-left mb-sm-3 mb-md-4 mb-lg-5">
	<?php

	if (have_posts()) : 
		while (have_posts()) : the_post(); 
			if(isset($_GET['post_type'])) {
			$type = $_GET['post_type'];
			if($type == 'top_distinations') {

				get_template_part('template_parts/posts/top-distination-content');
				echo '<hr class="col-xs-12 col-md-8 text-left my-5 ml-1">';
				} else { 
				/* Format for custom post types that are not "book,"
				or you can use elseif to specify a second post type the
				same way as above. Copy the default format here if you
				only have one custom post type. */
			} 
		} else { 

				/* Format to display when the post_type parameter
				is not set (i.e. default format) */
	} 
	endwhile; else: 
	/* What to display if there are no results. */
	echo "no result";
	endif; 
	?>
	</div> <!-- End of entry container -->
</div> <!-- End of Container-fluid -->
<?php get_footer(); ?>
