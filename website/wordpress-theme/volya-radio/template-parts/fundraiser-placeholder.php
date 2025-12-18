<?php
/**
 * Template part: Fundraiser Placeholder Cards
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Fundraiser Card 1 -->
<article class="fundraiser-card animate-on-scroll">
    <div class="fundraiser-card__image" style="background: linear-gradient(135deg, #2D6B67, #1A4645); display: flex; align-items: center; justify-content: center;">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" opacity="0.5">
            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/>
            <line x1="4" x2="4" y1="22" y2="15"/>
        </svg>
    </div>
    <div class="fundraiser-card__content">
        <span class="verified-badge"><?php esc_html_e('Verified', 'volya-radio'); ?></span>
        <h3 class="fundraiser-card__title"><?php esc_html_e('Medical Supplies for Frontline', 'volya-radio'); ?></h3>
        <p class="fundraiser-card__description"><?php esc_html_e('Supporting combat medics with essential medical equipment and supplies for wounded soldiers.', 'volya-radio'); ?></p>
        <a href="#" class="btn-donate"><?php esc_html_e('Donate Now', 'volya-radio'); ?></a>
    </div>
</article>

<!-- Fundraiser Card 2 -->
<article class="fundraiser-card animate-on-scroll">
    <div class="fundraiser-card__image" style="background: linear-gradient(135deg, #F58800, #FBBC24); display: flex; align-items: center; justify-content: center;">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" opacity="0.5">
            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
            <circle cx="9" cy="9" r="2"/>
            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
        </svg>
    </div>
    <div class="fundraiser-card__content">
        <span class="verified-badge"><?php esc_html_e('Verified', 'volya-radio'); ?></span>
        <h3 class="fundraiser-card__title"><?php esc_html_e('Drone Unit Support', 'volya-radio'); ?></h3>
        <p class="fundraiser-card__description"><?php esc_html_e('Providing reconnaissance and defense drones to protect Ukrainian soldiers on the front lines.', 'volya-radio'); ?></p>
        <a href="#" class="btn-donate"><?php esc_html_e('Donate Now', 'volya-radio'); ?></a>
    </div>
</article>

<!-- Fundraiser Card 3 -->
<article class="fundraiser-card animate-on-scroll">
    <div class="fundraiser-card__image" style="background: linear-gradient(135deg, #FFDD00, #FBBC24); display: flex; align-items: center; justify-content: center;">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#051821" stroke-width="1.5" opacity="0.5">
            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
        </svg>
    </div>
    <div class="fundraiser-card__content">
        <span class="verified-badge"><?php esc_html_e('Verified', 'volya-radio'); ?></span>
        <h3 class="fundraiser-card__title"><?php esc_html_e('Humanitarian Aid', 'volya-radio'); ?></h3>
        <p class="fundraiser-card__description"><?php esc_html_e('Emergency assistance for displaced families, including food, shelter, and essential supplies.', 'volya-radio'); ?></p>
        <a href="#" class="btn-donate"><?php esc_html_e('Donate Now', 'volya-radio'); ?></a>
    </div>
</article>
