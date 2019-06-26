<?php
/**
 * Leleka-Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Leleka-Theme
 */

if ( ! function_exists( 'leleka_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function leleka_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Leleka-Theme, use a find and replace
		 * to change 'leleka-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'leleka-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'leleka-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'leleka_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'leleka_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function leleka_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'leleka_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'leleka_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function leleka_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'leleka-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'leleka-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'leleka_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function leleka_theme_scripts() {

	wp_enqueue_style( 'leleka-theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'leleka-theme-abstacts-style', get_template_directory_uri() . '/assets/styles/abstracts.css' );

    wp_enqueue_script( 'leleka-theme-vendor-scripts', get_template_directory_uri() . '/assets/scripts/vendor.js', array(), '', true );
    wp_enqueue_script( 'leleka-theme-abstacts-scripts', get_template_directory_uri() . '/assets/scripts/abstracts.js', array(), '', true );


}
add_action( 'wp_enqueue_scripts', 'leleka_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function your_plugin_slug_repeater_loop() {
    $rows = get_field( 'section_content' );  //this is the ACF instruction to get everything in the repeater field
    $i = 0;  //this is a variable which sets up the counter starting at 0
    if($rows) {
        echo '<div class="section__content__wrap">';

        foreach($rows as $row) {
            $i++; //this says keep counting

            if( $i % 3 == 1) { // this says, if the item number is divisible by 3 then
                $class = '&nbsp;revers-block' ;  // add this class
                $i = 1;  // then reset the counter back to 1
            }
            else
                $class = ''; //otherwise don't output anything

            echo '<li class="repeater-item one-third' .  $class .'"><span class="repeater-title">' . $row['name_of_repeater']. '</span><a title="'. $row['name_of_repeater'] . '" href="' . $row['link_to_repeater'] .'"><img class="" src="' . $row['item_repeater'] .'" /></a><a href="' . $row['link_to_repeater'] .'" class="button">Download PDF&nbsp('.  $row['pdf_size'] . ')</a></li>';
        }

        echo '</div>';
    }
}
