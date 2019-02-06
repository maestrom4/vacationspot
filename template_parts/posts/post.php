<?php
/**
 * Template for displaying single post
 *
 * @package danmats
 * @author Danilo B. Matias Jr.
 * @version 1.0
 */

?>

<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid bg-color-posts-header bg-color-posts-sizes pad-topbot-2">
		<!-- <div class="row"> -->
			<div class="container text-left">
				<div class="row">
					<!-- <header class="entry-header"> -->
						<div class="col-xs-12 col-md-8">
							<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" rel="bookmark"></a>', '</h2>' ); ?>
						</div>
						<div class="col-xs-12 col-md-4 text-center">
							<?php the_post_thumbnail( array(200,200), 'class=img-fluid'); ?>
						</div>
					<!-- </header> -->
				</div>
			</div> <!-- End of entry container -->
		<!-- </div> End of row -->
	</div> <!-- End of Container-fluid -->
</article>