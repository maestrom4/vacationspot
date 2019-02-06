<?php
/**
 * Front page serves as the homepage file for this test theme
 *
 * @package wpthemes1
 * @version 1.0
 * @author Danilo B. Matias Jr.
 * @link danilomatias.bid
 * @since 2018
 */

?>

<?php get_header(); ?>
<div id="carouselId" class="carousel slide" data-ride="carousel">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 div col-lg-6">
				<ol class="carousel-indicators">
					<li data-target="#carouselId" data-slide-to="0" class="active"></li>
					<li data-target="#carouselId" data-slide-to="1"></li>
					<li data-target="#carouselId" data-slide-to="2"></li>
				</ol>
			</div>
		</div>
	</div>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider1.v1.jpg' ); ?>" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 div col-lg-6">
							<h1>Enjoy Your Vacation Now!</h1>
							<p>	Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque cum, molestias corporis suscipit odit quos qui soluta. Placeat, ut provident! Praesentium qui nisi illo ad nihil necessitatibus fugit repellat. Quo.</p>
								<a name="" id="" class="btn btn-primary text-right" href="#" role="button">Book Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider2.v1.jpg' ); ?>" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
			<div class="container">
					<div class="row">
						<div class="col-xs-12 div col-lg-6">
							<h1>Enjoy Your Vacation Now!</h1>
							<p>	Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque cum, molestias corporis suscipit odit quos qui soluta. Placeat, ut provident! Praesentium qui nisi illo ad nihil necessitatibus fugit repellat. Quo.</p>
							<a name="" id="" class="btn btn-primary" href="#" role="button">Book Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider3.v1.jpg' ); ?>" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
			<div class="container">
					<div class="row">
						<div class="col-xs-12 div col-lg-6">
							<h1>Enjoy Your Vacation Now!</h1>
							<p>	Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque cum, molestias corporis suscipit odit quos qui soluta. Placeat, ut provident! Praesentium qui nisi illo ad nihil necessitatibus fugit repellat. Quo.</p>
							<a name="" id="" class="btn btn-primary" href="#" role="button">Book Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid top-distinations">
	<div class="container">
		<div class="row my-5">
			<div class="col-xs-12 div col-lg-6">
				<h3><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/top_icon.jpg' ); ?>" alt=""> Top Distinations</h3>
			</div>
			<div class="col-xs-12 div col-lg-6 float-right">
				<form role="search" action="<?php echo site_url( '/' ); ?>" method="get" id="searchform">
					<div class="input-group" method>
						<input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Search Distinations', 'placeholder' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
						<input type="hidden" name="post_type" value="top_distinations" /> 
						<div class="input-group-append">
							<input class="btn btn-secondary search-btn" type="submit" alt="Search" value="" />
						</div>
					</div>
				</form>	
			</div>
		</div> <!-- row -->
		<div class="row">
			<?php
			$args = array(
				'post_type'      => 'top_distinations',
				'posts_per_page' => 10,
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) :
				$loop->the_post();
				get_template_part( 'template_parts/pages/top-distination-front' );
			endwhile;
			?>
		</div> <!-- row -->
	</div> <!-- container -->
</div> <!-- container-fluid -->
<!-- Promo -->
<div class="container-fluid promo">
	<div class="container">
		<div class="row mt-5 mb-3">
			<div class="col-xs-12 div col-lg-6">
				<h3><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/promo_icon.jpg' ); ?>" alt=""> Promo</h3>
			</div>
			<div class="col-xs-12 div col-lg-6 float-right">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for promos">
					<div class="input-group-append">
						<button class="btn btn-secondary" type="button">
							<!-- <span class="dashicons dashicons-search"></span> -->
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/search_icon.jpg' ); ?>" alt="">
						</button>
					</div>
				</div>
			</div>
		</div> <!-- row -->
		<div class="row">
			<div class="col-xs-12 col-lg-6">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/flash_sale.jpg' ); ?>" alt="promo1 img">
				<p>Present your promo code to any participating store participating store near you. <span>Promo run until December 20, 2050 grab your gifts now!</span></p>

			</div>
			<div class="col-xs-12 col-lg-6 text-center">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/ocean_ticket.jpg' ); ?>" alt="Ocean Ticket">
				<a name="" id="" class="btn btn-dark my-2" href="#" role="button">Buy Now</a>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div>
<div class="container my-5 py-4 partners">
	<div class="row">
		<div class="col-xs-12 col-lg-12">
			<h3><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/handshake.v1.jpg' ); ?>" alt="handshake"> Travel and Tours Partners</h3>
		</div>
		<div class="col-xs-12 col-lg-3 my-2 p-logo">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/partners1.png' ); ?>" alt="sun">
		</div>
		<div class="col-xs-12 col-lg-3 my-2 p-logo">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/partners2.png' ); ?>" alt="sunshine travel agency">
		</div>
		<div class="col-xs-12 col-lg-3 my-2 p-logo">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/partners3.png' ); ?>" alt="amazing asia">
		</div>
		<div class="col-xs-12 col-lg-3 my-2 p-logo">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/partners4.png' ); ?>" alt="asiatica">
		</div>
	</div><!-- row -->
</div><!-- container -->
<div class="container-fluid pt-5 pb-3 footer-widgets">
	<div class="container">
		<div class="row">
			<?php

			/*
				* The footer widget section is triggered if any of the areas have widgets. So let's check that first.
				* If none of the sidebars have widgets, then let's bail early.
				*/
			if ( ! is_active_sidebar( 'footer-widget-1' ) && ! is_active_sidebar( 'footer-widget-2' ) && ! is_active_sidebar( 'footer-widget-3' ) ):
				return;
				// End of all sidebar checks.
			endif;
			?>
			<section class="col-xs-12 col-md-4">
				<div class="h-100 py-3">
					<ul>
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
					</ul>
					<address>

					</address>
				</div>
			</section><!-- .first .widget-area -->
			<section class="col-xs-12 col-md-4">
				<div class="h-100 py-3">
					<ul>
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
					</ul>
				</div>
			</section><!-- .second .widget-area -->
			<section class="col-xs-12 col-md-4">
				<div class="h-100 py-3">
					<ul>
						<?php dynamic_sidebar( 'footer-widget-3' ); ?>
					</ul>
				</div>	
			</section><!-- .third .widget-area -->
		</div><!-- row -->
	</div> <!-- container -->
</div><!-- container-fluid -->
<?php
get_footer();
