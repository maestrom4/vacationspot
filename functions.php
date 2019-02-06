<?php
/**
 * Main configurations file for this test theme
 *
 * @package wpthemes1
 * @version 1.0
 * @author Danilo B. Matias Jr.
 * @link danilomatias.bid
 * @since 2018
 */

if ( ! function_exists( 'wpthemes1' ) ) :
	/** Loads theme support for the theme */
	function wpthemes1() {
		load_theme_textdomain( 'wpthemes1', get_template_directory() . '/languages' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support(
			'thml5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
			)
		);
		register_nav_menu(
			'primary',
			esc_html__( 'Primary Menu' )
		);
	}
endif;
add_action( 'after_setup_theme', 'wpthemes1' );
/** Registering and loading styles and scripts. */
function wptest_scripts() {
	/* Loading Stylesheet!  */
	wp_enqueue_style( 'stylesheet ', get_stylesheet_uri(), array(), true );
	wp_enqueue_style( 'dashicon-style', get_stylesheet_uri(), array( 'dashicons' ), true );
	wp_register_style( 'bootstrap_reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', array(), true );
	wp_enqueue_style( 'bootstrap_reboot' );
	wp_register_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), true );
	wp_enqueue_style( 'bootstrap_css' );
	wp_register_style( 'layout_css', get_template_directory_uri() . '/assets/css/layout-main.min.css', array(), true );
	wP_enqueue_style( 'layout_css' );
	/* Loading Scripts!  */
	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'bootstrap_js' );
}
add_action( 'wp_enqueue_scripts', 'wptest_scripts' );
/**
 * Post type for the top distination spots. Visitors can search top distination spots.
 */
function top_distination_post_type() {
	// Top Distinations post type.
	register_post_type(
		'top_distinations',
		array(
			'labels' => array(
				'name'          => __( 'Top Distinations' ),
				'singular_name' => __( 'Distinations' ),
			),
			'public'      => true,
			'has_archive' => true,
			'supports'    => array( 'title', 'editor', 'custom-fields', 'thumbnail')
		)
	);
}
add_action( 'init', 'top_distination_post_type' );
/** Post type for the Promo section. Users can search promo posts here. */
function promo_post_type() {
	// Promo posts type where users can create promo post types.
	register_post_type(
		'promos',
		array(
			'labels' => array(
				'name'          => __( 'Promos' ),
				'singular_name' => __( 'Promo' ),
			),
			'public'      => true,
			'has_archive' => true,
			'supports'    => array( 'title', 'editor', 'custom-fields', 'thumbnail')
		)
	);
}
add_action( 'init', 'promo_post_type' );

/**
 * Load Admin icons to frontend
 *
 * @package wpthemes1
 */
function load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );

/** Removes the adminbar.  */
add_filter( 'show_admin_bar', '__return_false' );
/** Registering all Widgets footer widgets and sidebars */
function reg_wp_footer_widget() {
	 // First Footer Widget.
	$template_uri = get_template_directory_uri();
	$args = array(
		'name'          => sprintf( __( 'Footer Widget One' ), 'wpthemes1' ),
		'id'            => 'footer-widget-1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s p-3">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h4 class="widgettitle mb-3"><img class="mr-3" src="' . $template_uri . '/assets/img/bulb.jpg" alt="Icon">',
		'after_title'   => "</h3>\n",
	);
	register_sidebar( $args );
	// Second Footer Widget.
	$args = array(
		'name'          => sprintf( __( 'Footer Widget Two' ), 'wpthemes1' ),
		'id'            => 'footer-widget-2',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s p-3">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h4 class="widgettitle mb-3"><img class="mr-3" src="' . $template_uri . '/assets/img/recent_post_icon.jpg" alt="Icon">',
		'after_title'   => "</h4>\n",
	);
	register_sidebar( $args );
	// Third Footer Widget.
	$args = array(
		'name'          => sprintf( __( 'Footer Widget Three' ), 'wpthemes1' ),
		'id'            => 'footer-widget-3',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s p-3">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h4 class="widgettitle mb-3"><img class="mr-3" src="' . $template_uri . '/assets/img/contact_us_icons.jpg" alt="Icon">',
		'after_title'   => "</h4>\n",
	);
	register_sidebar( $args );
	// Fourth Footer Widget.
	$args = array(
		'name'          => sprintf( __( 'Page Sidebar' ), 'wpthemes1' ),
		'id'            => 'sidebar1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'reg_wp_footer_widget' );
/**
 * Custom Search for our Top Distination post type.
 *
 * @package wptheme1
 */
// function template_chooser($template)   
// {
//   global $wp_query;
//   $post_type = get_query_var( 'post_type' );
//   if( $wp_query->is_search && $post_type == 'top_distinations' )   
//   {
//     return locate_template('archive-search.php');  //  redirect to archive-search.php
//   }   
//   return $template;   
// }
// add_filter('template_include', 'template_chooser'); 

function searchfilter($query) {
	if ($query->is_search && !is_admin() ) {
		if(isset($_GET['post_type'])) {
			$type = $_GET['post_type'];
				if($type == 'top_distinations') {
					$query->set('post_type',array('top_distinations'));
				}
		}
	}
return $query;
}
add_filter('pre_get_posts','searchfilter');


# remove dashicons in frontend to non-admin 
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
		return $classes;
	}
add_filter( 'body_class', 'add_slug_body_class' );