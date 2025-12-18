<?php
/**
 * Main template file
 *
 * @package Volya_Radio
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-card__image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="post-card__content">
                            <h2 class="post-card__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-card__excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn--outline btn--small">
                                <?php esc_html_e('Read More', 'volya-radio'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '&larr;',
                'next_text' => '&rarr;',
            )); ?>

        <?php else : ?>
            <div class="no-posts">
                <h2><?php esc_html_e('No posts found', 'volya-radio'); ?></h2>
                <p><?php esc_html_e('It seems we can\'t find what you\'re looking for.', 'volya-radio'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
