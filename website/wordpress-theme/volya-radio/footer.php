<?php
/**
 * Footer template
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}

// Get customizer options
$twitter_url = get_theme_mod('volya_twitter_url', 'https://x.com/Volya4UA');
$instagram_url = get_theme_mod('volya_instagram_url', 'https://www.instagram.com/volya4ua/');
$youtube_url = get_theme_mod('volya_youtube_url', 'https://www.youtube.com/@volya4UA');
$bluesky_url = get_theme_mod('volya_bluesky_url', 'https://bsky.app/profile/volya4ua.bsky.social');
$facebook_url = get_theme_mod('volya_facebook_url', 'https://www.facebook.com/profile.php?id=61566814106204');
$spotify_url = get_theme_mod('volya_spotify_url', 'https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im');
$linktree_url = get_theme_mod('volya_linktree_url', 'https://linktr.ee/VolyaRadio');
?>

</main>

<!-- ========== FOOTER ========== -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-brand">
            <div class="footer-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                    <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" class="footer-logo__image">
                <?php else : ?>
                    <img src="https://ugc.production.linktr.ee/911e7da1-b035-47c9-8185-6ca4e899d1f4_VOLYA--15-.png" alt="<?php bloginfo('name'); ?>" class="footer-logo__image">
                <?php endif; ?>
                <span class="footer-logo__text"><?php bloginfo('name'); ?></span>
            </div>
            <p class="footer-tagline"><?php echo esc_html(get_bloginfo('description')); ?></p>
        </div>

        <nav class="footer-nav" aria-label="<?php esc_attr_e('Footer navigation', 'volya-radio'); ?>">
            <div class="footer-nav__column">
                <h4 class="footer-nav__title"><?php esc_html_e('Connect', 'volya-radio'); ?></h4>
                <ul class="footer-nav__list">
                    <li><a href="<?php echo esc_url($twitter_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('X / Twitter', 'volya-radio'); ?></a></li>
                    <li><a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Instagram', 'volya-radio'); ?></a></li>
                    <li><a href="<?php echo esc_url($youtube_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('YouTube', 'volya-radio'); ?></a></li>
                    <li><a href="<?php echo esc_url($bluesky_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Bluesky', 'volya-radio'); ?></a></li>
                    <li><a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Facebook', 'volya-radio'); ?></a></li>
                </ul>
            </div>

            <div class="footer-nav__column">
                <h4 class="footer-nav__title"><?php esc_html_e('Listen', 'volya-radio'); ?></h4>
                <ul class="footer-nav__list">
                    <li><a href="<?php echo esc_url($spotify_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Spotify', 'volya-radio'); ?></a></li>
                    <li><a href="<?php echo esc_url($twitter_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Live X Spaces', 'volya-radio'); ?></a></li>
                    <li><a href="<?php echo esc_url($linktree_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('All Links', 'volya-radio'); ?></a></li>
                </ul>
            </div>

            <div class="footer-nav__column">
                <h4 class="footer-nav__title"><?php esc_html_e('Support', 'volya-radio'); ?></h4>
                <ul class="footer-nav__list">
                    <li><a href="https://u24.gov.ua" target="_blank" rel="noopener noreferrer"><?php esc_html_e('United24', 'volya-radio'); ?></a></li>
                    <?php if (is_front_page()) : ?>
                        <li><a href="#fundraisers"><?php esc_html_e('Current Fundraisers', 'volya-radio'); ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div class="footer-hashtags">
            <span class="hashtag">#SlavaUkraini</span>
            <span class="hashtag">#HeroiamSlava</span>
            <span class="hashtag">#UkraineWillWin</span>
        </div>

        <div class="footer-legal">
            <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All content by volunteers.', 'volya-radio'); ?></p>
            <p class="footer-disclaimer"><?php esc_html_e('We are NOT a registered charity. Volunteers fund all overhead costs.', 'volya-radio'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
