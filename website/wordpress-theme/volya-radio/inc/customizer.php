<?php
/**
 * Theme Customizer
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add customizer options
 */
function volya_radio_customize_register($wp_customize) {

    // ==========================================================================
    // Volya Radio Settings Panel
    // ==========================================================================

    $wp_customize->add_panel('volya_radio_panel', array(
        'title'       => __('Volya Radio Settings', 'volya-radio'),
        'description' => __('Customize your Volya Radio website settings.', 'volya-radio'),
        'priority'    => 30,
    ));

    // ==========================================================================
    // Hero Section
    // ==========================================================================

    $wp_customize->add_section('volya_hero_section', array(
        'title'    => __('Hero Section', 'volya-radio'),
        'panel'    => 'volya_radio_panel',
        'priority' => 10,
    ));

    // Mission Statement
    $wp_customize->add_setting('volya_mission', array(
        'default'           => 'Mission: To Aid Ukraine in Victory',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_mission', array(
        'label'       => __('Mission Statement', 'volya-radio'),
        'section'     => 'volya_hero_section',
        'type'        => 'text',
    ));

    // Tagline
    $wp_customize->add_setting('volya_tagline', array(
        'default'           => 'News & Analysis • Culture & History • Countering Disinformation',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_tagline', array(
        'label'       => __('Tagline', 'volya-radio'),
        'section'     => 'volya_hero_section',
        'type'        => 'text',
    ));

    // ==========================================================================
    // Social Media Links
    // ==========================================================================

    $wp_customize->add_section('volya_social_section', array(
        'title'    => __('Social Media Links', 'volya-radio'),
        'panel'    => 'volya_radio_panel',
        'priority' => 20,
    ));

    // Twitter/X URL
    $wp_customize->add_setting('volya_twitter_url', array(
        'default'           => 'https://x.com/Volya4UA',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_twitter_url', array(
        'label'       => __('X/Twitter URL', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'url',
    ));

    // Spotify URL
    $wp_customize->add_setting('volya_spotify_url', array(
        'default'           => 'https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_spotify_url', array(
        'label'       => __('Spotify URL', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'url',
    ));

    // Spotify Embed ID
    $wp_customize->add_setting('volya_spotify_embed_id', array(
        'default'           => '0DWkzKyzeGQ1UCIBNpU7im',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_spotify_embed_id', array(
        'label'       => __('Spotify Show ID (for embed)', 'volya-radio'),
        'description' => __('The ID from your Spotify show URL.', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'text',
    ));

    // Instagram URL
    $wp_customize->add_setting('volya_instagram_url', array(
        'default'           => 'https://www.instagram.com/volya4ua/',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_instagram_url', array(
        'label'       => __('Instagram URL', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'url',
    ));

    // YouTube URL
    $wp_customize->add_setting('volya_youtube_url', array(
        'default'           => 'https://www.youtube.com/@volya4UA',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_youtube_url', array(
        'label'       => __('YouTube URL', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'url',
    ));

    // Bluesky URL
    $wp_customize->add_setting('volya_bluesky_url', array(
        'default'           => 'https://bsky.app/profile/volya4ua.bsky.social',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_bluesky_url', array(
        'label'       => __('Bluesky URL', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'url',
    ));

    // Facebook URL
    $wp_customize->add_setting('volya_facebook_url', array(
        'default'           => 'https://www.facebook.com/profile.php?id=61566814106204',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_facebook_url', array(
        'label'       => __('Facebook URL', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'url',
    ));

    // Linktree URL
    $wp_customize->add_setting('volya_linktree_url', array(
        'default'           => 'https://linktr.ee/VolyaRadio',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('volya_linktree_url', array(
        'label'       => __('Linktree URL', 'volya-radio'),
        'section'     => 'volya_social_section',
        'type'        => 'url',
    ));

    // ==========================================================================
    // Colors (extend default colors section)
    // ==========================================================================

    // Primary Color
    $wp_customize->add_setting('volya_primary_color', array(
        'default'           => '#2D6B67',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'volya_primary_color', array(
        'label'    => __('Primary Brand Color (Muted Teal)', 'volya-radio'),
        'section'  => 'colors',
        'settings' => 'volya_primary_color',
    )));

    // Accent Color (Orange)
    $wp_customize->add_setting('volya_accent_color', array(
        'default'           => '#F58800',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'volya_accent_color', array(
        'label'    => __('Accent Color (Orange)', 'volya-radio'),
        'section'  => 'colors',
        'settings' => 'volya_accent_color',
    )));

}
add_action('customize_register', 'volya_radio_customize_register');

/**
 * Output custom CSS from customizer
 */
function volya_radio_customizer_css() {
    $primary_color = get_theme_mod('volya_primary_color', '#2D6B67');
    $accent_color = get_theme_mod('volya_accent_color', '#F58800');
    ?>
    <style type="text/css">
        :root {
            --color-primary: <?php echo esc_attr($primary_color); ?>;
            --color-orange: <?php echo esc_attr($accent_color); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'volya_radio_customizer_css');
