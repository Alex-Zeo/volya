<?php
/**
 * Front Page Template
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

// Get customizer options
$spotify_url = get_theme_mod('volya_spotify_url', 'https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im');
$twitter_url = get_theme_mod('volya_twitter_url', 'https://x.com/Volya4UA');
$spotify_embed_id = get_theme_mod('volya_spotify_embed_id', '0DWkzKyzeGQ1UCIBNpU7im');
?>

<!-- ========== HERO SECTION ========== -->
<section class="hero" id="hero">
    <div class="hero__content">
        <?php if (has_custom_logo()) : ?>
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>
            <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" class="hero__logo">
        <?php else : ?>
            <img src="https://ugc.production.linktr.ee/911e7da1-b035-47c9-8185-6ca4e899d1f4_VOLYA--15-.png" alt="<?php bloginfo('name'); ?>" class="hero__logo">
        <?php endif; ?>

        <h1 class="hero__title"><?php bloginfo('name'); ?></h1>

        <p class="hero__mission"><?php echo esc_html(get_theme_mod('volya_mission', 'Mission: To Aid Ukraine in Victory')); ?></p>

        <p class="hero__tagline"><?php echo esc_html(get_theme_mod('volya_tagline', 'News & Analysis • Culture & History • Countering Disinformation')); ?></p>

        <div class="hero__cta-group">
            <a href="<?php echo esc_url($spotify_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
                </svg>
                <?php esc_html_e('Listen on Spotify', 'volya-radio'); ?>
            </a>
            <a href="<?php echo esc_url($twitter_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--secondary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <?php esc_html_e('Join Live on X', 'volya-radio'); ?>
            </a>
        </div>

        <div class="hero__live-indicator">
            <span class="live-badge">
                <span class="live-dot"></span>
                <?php esc_html_e('LIVE', 'volya-radio'); ?>
            </span>
            <span><?php esc_html_e('Daily at 2am • 9am • 7pm Kyiv Time', 'volya-radio'); ?></span>
        </div>
    </div>

    <a href="#who-we-are" class="hero__scroll" aria-label="<?php esc_attr_e('Scroll to content', 'volya-radio'); ?>">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14M5 12l7 7 7-7"/>
        </svg>
    </a>
</section>

<!-- ========== WHO WE ARE SECTION ========== -->
<section class="section who-we-are" id="who-we-are">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><?php esc_html_e('Who We Are', 'volya-radio'); ?></h2>
            <p class="section-intro"><?php esc_html_e('We are volunteers from around the world who believe:', 'volya-radio'); ?></p>
        </header>

        <div class="values-grid stagger-children">
            <?php get_template_part('template-parts/value-card', 'victory'); ?>
            <?php get_template_part('template-parts/value-card', 'aggression'); ?>
            <?php get_template_part('template-parts/value-card', 'justice'); ?>
        </div>

        <div class="values-grid--centered">
            <?php get_template_part('template-parts/value-card', 'boundaries'); ?>
        </div>
    </div>
</section>

<!-- ========== WHAT WE DO SECTION ========== -->
<section class="section what-we-do" id="what-we-do">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><?php esc_html_e('What We Do', 'volya-radio'); ?></h2>
        </header>

        <?php get_template_part('template-parts/pillar', 'broadcast'); ?>

        <div class="pillars-grid">
            <?php get_template_part('template-parts/pillar', 'advocate'); ?>
            <?php get_template_part('template-parts/pillar', 'fundraise'); ?>
        </div>
    </div>
</section>

<!-- ========== LISTEN SECTION ========== -->
<section class="section listen-section" id="listen">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><?php esc_html_e('Join the Conversation', 'volya-radio'); ?></h2>
            <p class="section-intro"><?php esc_html_e('Live on X Spaces Daily (Kyiv Time)', 'volya-radio'); ?></p>
        </header>

        <div class="schedule-grid stagger-children">
            <div class="schedule-card animate-on-scroll">
                <div class="schedule-card__icon">&#9728;&#65039;</div>
                <p class="schedule-card__label"><?php esc_html_e('Early Show', 'volya-radio'); ?></p>
                <p class="schedule-card__time">02:00</p>
                <p class="schedule-card__period">AM</p>
                <p class="schedule-card__timezone">Kyiv / UTC+2</p>
            </div>

            <div class="schedule-card animate-on-scroll">
                <div class="schedule-card__icon">&#127780;&#65039;</div>
                <p class="schedule-card__label"><?php esc_html_e('Morning Show', 'volya-radio'); ?></p>
                <p class="schedule-card__time">09:00</p>
                <p class="schedule-card__period">AM</p>
                <p class="schedule-card__timezone">Kyiv / UTC+2</p>
            </div>

            <div class="schedule-card animate-on-scroll">
                <div class="schedule-card__icon">&#127769;</div>
                <p class="schedule-card__label"><?php esc_html_e('Evening Show', 'volya-radio'); ?></p>
                <p class="schedule-card__time">19:00</p>
                <p class="schedule-card__period">PM</p>
                <p class="schedule-card__timezone">Kyiv / UTC+2</p>
            </div>
        </div>

        <div class="listen-cta">
            <a href="<?php echo esc_url($twitter_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <?php esc_html_e('Follow @Volya4UA on X', 'volya-radio'); ?>
            </a>
        </div>

        <div class="divider-or">
            <span><?php esc_html_e('or listen anytime', 'volya-radio'); ?></span>
        </div>

        <div class="spotify-embed">
            <iframe
                style="border-radius:12px"
                src="https://open.spotify.com/embed/show/<?php echo esc_attr($spotify_embed_id); ?>?utm_source=generator&theme=0"
                width="100%"
                height="152"
                frameBorder="0"
                allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"
                title="<?php esc_attr_e('Volya Radio Spotify Player', 'volya-radio'); ?>">
            </iframe>
        </div>

        <p class="listen-note"><?php esc_html_e('Listen to past episodes anytime on Spotify', 'volya-radio'); ?></p>
    </div>
</section>

<!-- ========== FUNDRAISERS SECTION ========== -->
<section class="section fundraisers-section" id="fundraisers">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><?php esc_html_e('Current Vetted Fundraisers', 'volya-radio'); ?></h2>
            <p class="section-intro"><?php esc_html_e('These campaigns have been personally verified by our volunteer network. Support Ukraine directly through these trusted channels.', 'volya-radio'); ?></p>
        </header>

        <div class="fundraiser-grid stagger-children">
            <?php
            // Check for fundraiser posts
            $fundraisers = new WP_Query(array(
                'post_type'      => 'fundraiser',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ));

            if ($fundraisers->have_posts()) :
                while ($fundraisers->have_posts()) :
                    $fundraisers->the_post();
                    get_template_part('template-parts/fundraiser', 'card');
                endwhile;
                wp_reset_postdata();
            else :
                // Default placeholder fundraisers
                get_template_part('template-parts/fundraiser', 'placeholder');
            endif;
            ?>
        </div>

        <!-- United24 Banner -->
        <div class="united24-banner animate-on-scroll">
            <div class="united24-banner__content">
                <div class="united24-banner__flag">&#127482;&#127462;</div>
                <h3 class="united24-banner__title"><?php esc_html_e('Support Ukraine Officially', 'volya-radio'); ?></h3>
                <p class="united24-banner__description"><?php esc_html_e('United24 is the official fundraising platform of Ukraine. 100% of donations go directly to verified state programs.', 'volya-radio'); ?></p>
                <p class="united24-banner__url">u24.gov.ua</p>
            </div>
            <a href="https://u24.gov.ua" target="_blank" rel="noopener noreferrer" class="btn btn--yellow">
                <?php esc_html_e('Donate to United24', 'volya-radio'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
