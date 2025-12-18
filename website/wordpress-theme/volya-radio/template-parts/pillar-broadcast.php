<?php
/**
 * Template part: Pillar - Broadcast
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}

$spotify_url = get_theme_mod('volya_spotify_url', 'https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im');
?>
<article class="pillar-card pillar-card--featured animate-on-scroll">
    <div class="pillar-header">
        <div class="pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"/>
                <path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"/>
                <circle cx="12" cy="12" r="2"/>
                <path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"/>
                <path d="M19.1 4.9C23 8.8 23 15.1 19.1 19"/>
            </svg>
        </div>
        <div class="pillar-header-text">
            <h3><?php esc_html_e('Broadcast', 'volya-radio'); ?></h3>
            <p class="pillar-subtitle"><?php esc_html_e('News • Discussion • Expert Interviews', 'volya-radio'); ?></p>
        </div>
    </div>

    <div class="pillar-content">
        <p><?php esc_html_e('We provide news, discussion, and interviews with experts through Twitter Spaces, where any number of Twitter users can listen live to conversations between co-hosts and up to 10 speakers. All segments are available on Spotify.', 'volya-radio'); ?></p>

        <div class="topic-tags">
            <span class="topic-tag"><?php esc_html_e('Genocide Documentation', 'volya-radio'); ?></span>
            <span class="topic-tag"><?php esc_html_e('Book Club', 'volya-radio'); ?></span>
            <span class="topic-tag"><?php esc_html_e("Russia's Absurdity", 'volya-radio'); ?></span>
            <span class="topic-tag"><?php esc_html_e('Military Analysis', 'volya-radio'); ?></span>
            <span class="topic-tag"><?php esc_html_e('Cultural History', 'volya-radio'); ?></span>
        </div>

        <a href="<?php echo esc_url($spotify_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--solid">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
            </svg>
            <?php esc_html_e('Listen on Spotify', 'volya-radio'); ?>
        </a>
    </div>
</article>
