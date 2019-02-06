<?php
/**
 * Template for displaying single post
 *
 * @package danmats
 * @author Danilo B. Matias Jr.
 * @version 1.0
 */

?>

<article id="<?php the_ID(); ?>" <?php post_class('col-xs-12 col-md-8 my-sm-3 my-md-5'); ?>>	
	<?php the_title( '<h2 class="entry-title mt-sm-2 mt-md-4"><a href="' . get_permalink() . '" rel="bookmark"></a>', '</h2>' ); ?>
	By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('{Edit}'), ''); ?>
	<p class="my-sm-3 my-md-5"><?php the_content();?></p>
	<figure class="col-xs-12 col-md-3 text-center">
		<?php the_post_thumbnail( 'full', 'class=img-fluid'); ?>
	</figure>
	<section class="col-xs-12 col-md-12">
	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	// Previous/next post navigation.
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
	?>
</section>
</article>
<aside class="col-xs-12 col-md-4 my-sm-3 my-md-5">
	<?php get_sidebar(); ?>
</aside>
