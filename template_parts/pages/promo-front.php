<?php 
/**
 * Front page promo template serves as the homepage file for this test theme
 * 
 * @package wpthemes1
 * @version 1.0
 * @author Danilo B. Matias Jr. 
 * @link danilomatias.bid
 * @since 2018
 */
?>

<div class="col-xs-12 col-md-12 col-lg-4 text-center my-1">
	<?php the_post_thumbnail('full'); ?>
	<h2><img class="mr-3" src="<?php echo get_template_directory_uri() . '/assets/img/map_icon.jpg'; ?>" alt=""><?php the_title(); ?></h2>
	<p><?php //the_content(); ?></p>
</div>



