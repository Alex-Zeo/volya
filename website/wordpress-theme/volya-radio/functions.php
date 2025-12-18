<?php
/**
 * Volya Radio Theme Functions
 *
 * @package Volya_Radio
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function volya_radio_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'volya-radio'),
        'footer'  => esc_html__('Footer Menu', 'volya-radio'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}
add_action('after_setup_theme', 'volya_radio_setup');

/**
 * Enqueue scripts and styles
 */
function volya_radio_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'volya-radio-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'volya-radio-style',
        get_template_directory_uri() . '/css/main.css',
        array('volya-radio-fonts'),
        wp_get_theme()->get('Version')
    );

    // Theme stylesheet (for WordPress admin bar compatibility)
    wp_enqueue_style(
        'volya-radio-theme-style',
        get_stylesheet_uri(),
        array('volya-radio-style'),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'volya-radio-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Pass data to JavaScript
    wp_localize_script('volya-radio-script', 'volyaRadio', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('volya-radio-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'volya_radio_scripts');

/**
 * Register widget areas
 */
function volya_radio_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'volya-radio'),
        'id'            => 'footer-widget',
        'description'   => esc_html__('Add widgets here to appear in the footer.', 'volya-radio'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'volya_radio_widgets_init');

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes
 */
function volya_radio_image_sizes() {
    add_image_size('fundraiser-card', 800, 600, true);
    add_image_size('hero-background', 1920, 1080, true);
}
add_action('after_setup_theme', 'volya_radio_image_sizes');

/**
 * Disable WordPress emojis (for performance)
 */
function volya_radio_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'volya_radio_disable_emojis');

/**
 * Add preconnect for Google Fonts
 */
function volya_radio_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'volya_radio_resource_hints', 10, 2);

/**
 * Custom excerpt length
 */
function volya_radio_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'volya_radio_excerpt_length');

/**
 * Custom excerpt more
 */
function volya_radio_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'volya_radio_excerpt_more');

/**
 * Add body classes
 */
function volya_radio_body_classes($classes) {
    // Add class for front page
    if (is_front_page()) {
        $classes[] = 'front-page';
    }

    // Add class for logged-in users (for admin bar spacing)
    if (is_user_logged_in()) {
        $classes[] = 'logged-in';
    }

    return $classes;
}
add_filter('body_class', 'volya_radio_body_classes');

/**
 * Security: Remove WordPress version from head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Security: Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');
