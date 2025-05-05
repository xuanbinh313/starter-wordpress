<?php

/**
 * PizzaCompany functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PizzaCompany
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pizzacompany_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on PizzaCompany, use a find and replace
		* to change 'pizzacompany' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('pizzacompany', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'pizzacompany'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pizzacompany_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'pizzacompany_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pizzacompany_content_width()
{
	$GLOBALS['content_width'] = apply_filters('pizzacompany_content_width', 640);
}
add_action('after_setup_theme', 'pizzacompany_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pizzacompany_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'pizzacompany'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'pizzacompany'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'pizzacompany_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function pizzacompany_scripts()
{
	wp_enqueue_script('alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), _S_VERSION, array('strategy'  => 'defer'));
	wp_enqueue_style('pizzacompany-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('pizzacompany-style', 'rtl', 'replace');
	wp_enqueue_script('pizzacompany-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'pizzacompany_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu {

    // Xử lý bắt đầu cấp con menu (start_lvl)
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"sublist-wrap\" :class=\"{ 'active': open }\">\n";
        $output .= "$indent<ul class=\"sublist\">\n";
        $output .= "$indent\t<li class=\"back-button\"><span>Back</span></li>\n";
    }

    // Xử lý kết thúc cấp con menu (end_lvl)
    function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
        $output .= "$indent</div>\n";
    }

    // Xử lý mỗi item trong menu (start_el)
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        // Thêm class 'has-sublist' nếu item có submenu
        if ( in_array( 'menu-item-has-children', $classes ) ) {
            $classes[] = 'has-sublist';
        }

        // Thêm class 'sublist-wrap' nếu item là submenu
        if ( in_array( 'sub-menu', $classes ) ) {
            $classes[] = 'sublist-wrap';
        }

        // Tạo lại class cho item
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        // Kiểm tra nếu menu có submenu
        $has_children = in_array('menu-item-has-children', $item->classes);

        // Xử lý item có submenu
        if ( $has_children ) {
            $output .= '<li class="has-sublist" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="setTimeout(() => open = false, 500)">';
            $output .= '<a href="' . esc_attr($item->url) . '" title="' . esc_attr($item->title) . '" class="' . implode(' ', $item->classes) . '" :class="{ \'hover\': open }"><span>' . esc_html($item->title) . '</span></a>';
            $output .= '<div class="plus-button"></div>';
        } else {
            // Xử lý các item không có submenu
            $output .= '<li' . $class_names . '>';
            $output .= '<a href="' . esc_attr($item->url) . '" title="' . esc_attr($item->title) . '"><span>' . esc_html($item->title) . '</span></a>';
        }
    }

    // Xử lý kết thúc mỗi item trong menu (end_el)
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
