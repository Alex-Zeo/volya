<?php
/**
 * Template part: Pillar - Fundraise
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<article class="pillar-card animate-on-scroll">
    <div class="pillar-header">
        <div class="pillar-icon pillar-icon--fundraise">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
            </svg>
        </div>
        <div class="pillar-header-text">
            <h3><?php esc_html_e('Fundraise', 'volya-radio'); ?></h3>
        </div>
    </div>

    <div class="pillar-content">
        <div class="transparency-notice">
            <p class="transparency-notice__title">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
                    <path d="M12 9v4"/>
                    <path d="M12 17h.01"/>
                </svg>
                <?php esc_html_e('Important Transparency Notice', 'volya-radio'); ?>
            </p>
            <ul class="transparency-list">
                <li>&bull; <?php esc_html_e('We are NOT a 501(c)(3) or registered charity', 'volya-radio'); ?></li>
                <li>&bull; <?php esc_html_e('Our volunteers pay all overhead costs', 'volya-radio'); ?></li>
                <li>&bull; <?php esc_html_e('We do not handle donations directly', 'volya-radio'); ?></li>
            </ul>
        </div>

        <p><strong><?php esc_html_e('What we DO:', 'volya-radio'); ?></strong></p>
        <ul class="what-we-do-list">
            <li><?php esc_html_e('Vet fundraising recipients', 'volya-radio'); ?></li>
            <li><?php esc_html_e('Promote verified campaigns', 'volya-radio'); ?></li>
            <li><?php esc_html_e('Follow Ukrainian small-group donation models', 'volya-radio'); ?></li>
        </ul>

        <a href="#fundraisers" class="btn btn--outline"><?php esc_html_e('See Current Fundraisers', 'volya-radio'); ?></a>
    </div>
</article>
