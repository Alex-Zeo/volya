<?php
/**
 * Header template
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Volya4UA">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip to content link for accessibility -->
<a href="#main-content" class="skip-link"><?php esc_html_e('Skip to main content', 'volya-radio'); ?></a>

<!-- ========== HEADER ========== -->
<header class="site-header" id="site-header">
    <div class="header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <?php if (has_custom_logo()) : ?>
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                ?>
                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" class="logo__image">
            <?php else : ?>
                <img src="https://ugc.production.linktr.ee/911e7da1-b035-47c9-8185-6ca4e899d1f4_VOLYA--15-.png" alt="<?php bloginfo('name'); ?>" class="logo__image">
            <?php endif; ?>
            <span class="logo__text"><?php bloginfo('name'); ?></span>
        </a>

        <nav class="nav-main" id="nav-main" aria-label="<?php esc_attr_e('Main navigation', 'volya-radio'); ?>">
            <?php if (is_front_page()) : ?>
                <a href="#who-we-are" class="nav-link"><?php esc_html_e('Who We Are', 'volya-radio'); ?></a>
                <a href="#what-we-do" class="nav-link"><?php esc_html_e('What We Do', 'volya-radio'); ?></a>
                <a href="#listen" class="nav-link"><?php esc_html_e('Listen', 'volya-radio'); ?></a>
                <a href="#fundraisers" class="nav-link"><?php esc_html_e('Fundraisers', 'volya-radio'); ?></a>
            <?php else : ?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-main-list',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ));
                ?>
            <?php endif; ?>
            <a href="https://x.com/Volya4UA" target="_blank" rel="noopener noreferrer" class="cta-live">
                <span class="live-dot"></span>
                <?php esc_html_e('Listen Live', 'volya-radio'); ?>
            </a>
        </nav>

        <button class="menu-toggle" id="menu-toggle" aria-label="<?php esc_attr_e('Toggle navigation menu', 'volya-radio'); ?>" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<main id="main-content">
