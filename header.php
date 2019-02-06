<?php
/**
 * Header file for this test theme
 *
 * @package wpthemes1
 * @version 1.0
 * @author Danilo B. Matias Jr.
 * @link danilomatias.bid
 * @since 2018
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header>
			<nav class="navbar navbar-expand-md navbar-light fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display  -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#danmats-navbar-collapse" aria-controls="danmats-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">VacationSpot</a>
					<div class="collapse navbar-collapse" id="danmats-navbar-collapse">
						<ul class="nav navbar-nav ml-auto">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
										'container'      => false,
										'items_wrap'     => '%3$s',
									)
								);
							?>
						</ul>
					</div>
				</div>
			</nav> 
			
			<img class="img-fluid nav-footer-bg" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/header_colored_lines.jpg' ); ?>" alt="Header Colored Lines">
		</header>
