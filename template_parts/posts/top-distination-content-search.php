<?php
/**
 * Template for displaying single search results
 *
 * @package danmats
 * @author Danilo B. Matias Jr.
 * @version 1.0
 */

?>


	
<!-- <div class="row"> -->
	<article id="<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<!-- <header class="entry-header"> -->
		<div class="col-xs-12 col-md-8">
			<?php the_title( '<h2 class="entry-title my-sm-2 my-md-4"><a href="' . get_permalink() . '" rel="bookmark"></a>', '</h2>' ); ?>
			<?php the_content();?>
			<!-- <hr> -->
		</div>
		<figure class="col-xs-12 col-md-4 text-center">
			<?php the_post_thumbnail( array(200,200), 'class=img-fluid'); ?>
		</figure>
		
	</article>
<!-- </div> -->
