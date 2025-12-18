<?php
/**
 * Custom template tags for this theme
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Display posted date
 */
function volya_radio_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date())
    );

    echo '<span class="posted-on">' . $time_string . '</span>';
}

/**
 * Display posted by
 */
function volya_radio_posted_by() {
    echo '<span class="byline">' .
        '<span class="author vcard">' .
        '<a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' .
        esc_html(get_the_author()) .
        '</a></span></span>';
}

/**
 * Display category list
 */
function volya_radio_category_list() {
    $categories_list = get_the_category_list(', ');
    if ($categories_list) {
        echo '<span class="cat-links">' . $categories_list . '</span>';
    }
}

/**
 * Display tags list
 */
function volya_radio_tags_list() {
    $tags_list = get_the_tag_list('', ', ');
    if ($tags_list) {
        echo '<span class="tags-links">' . $tags_list . '</span>';
    }
}

/**
 * Display comments link
 */
function volya_radio_comments_link() {
    if (!post_password_required() && (comments_open() || get_comments_number())) {
        echo '<span class="comments-link">';
        comments_popup_link(
            sprintf(
                wp_kses(
                    __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'volya-radio'),
                    array('span' => array('class' => array()))
                ),
                get_the_title()
            )
        );
        echo '</span>';
    }
}

/**
 * Custom post navigation
 */
function volya_radio_post_navigation() {
    the_post_navigation(array(
        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'volya-radio') . '</span> <span class="nav-title">%title</span>',
        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'volya-radio') . '</span> <span class="nav-title">%title</span>',
    ));
}

/**
 * Custom excerpt more link
 */
function volya_radio_excerpt_more($more) {
    global $post;
    return '... <a class="read-more" href="' . esc_url(get_permalink($post->ID)) . '">' . esc_html__('Read More', 'volya-radio') . '</a>';
}
add_filter('excerpt_more', 'volya_radio_excerpt_more');

/**
 * SVG Icons helper
 */
function volya_radio_icon($icon_name, $size = 24) {
    $icons = array(
        'trophy' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>',
        'stop' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18.36 6.64A9 9 0 0 1 20.77 15"/><path d="M6.16 6.16a9 9 0 1 0 12.68 12.68"/><path d="M12 2v4"/><path d="m2 2 20 20"/></svg>',
        'justice' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>',
        'globe' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>',
        'radio' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.9 19.1C1 15.2 1 8.8 4.9 4.9"/><path d="M7.8 16.2c-2.3-2.3-2.3-6.1 0-8.5"/><circle cx="12" cy="12" r="2"/><path d="M16.2 7.8c2.3 2.3 2.3 6.1 0 8.5"/><path d="M19.1 4.9C23 8.8 23 15.1 19.1 19"/></svg>',
        'megaphone' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>',
        'heart' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>',
        'spotify' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>',
        'x' => '<svg width="' . esc_attr($size) . '" height="' . esc_attr($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>',
    );

    if (isset($icons[$icon_name])) {
        return $icons[$icon_name];
    }

    return '';
}
