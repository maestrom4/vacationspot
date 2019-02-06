<?php 
/**
 * Page blogs template file for this test theme
 * 
 * @package wpthemes1
 * @version 1.0
 * @author Danilo B. Matias Jr. 
 * @link danilomatias.bid
 * @since 2018
 */

?>
<div class="container">
	<div class="row">
		<?php if( have_posts() ) : ?>
			<?php while( have_posts() ) : ?>
				<?php the_post(); ?>
					<div class="col-xs-12 col-md-8 my-5">
						<h1><?php echo the_title(); ?></h1>
						<p><?php echo the_content(); ?></p>
					</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="row">
		<?php $myposts = get_posts( 'numberposts=-1&offset=$debut' );
		foreach( $myposts as $post) : setup_postdata( $post ) ?>
			<div class="col-xs-12 col-md-8 col-lg-8 my-3">
				<h1><?php the_title(); ?></h1>
				<!-- Only display part of the post so the user has to click "More!" -->
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">More!</a>
				<hr>
			</div>
			
		<?php endforeach; ?>
	</div>
</div>