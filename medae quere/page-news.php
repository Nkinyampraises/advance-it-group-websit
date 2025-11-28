<?php
/*
Template Name: News
*/
?>

<?php get_header();?>

<section class="page-hero news-hero" style=" background: url('<?php echo get_field('news_hero_background'); ?>') center/cover no-repeat; height: 10; !important; display: flex; align-items: center;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center text-white" id="news-hero-title"><?php echo get_field('news_hero_title'); ?></h1>
                <p class="text-center text-white" id="news-hero-desc"><?php echo get_field('news_hero_desc'); ?></p>
            </div>
        </div>
    </div>
</section>
<!-- News Grid -->
<section class="news-section">
    <div class="container">
        <div class="news-grid" id="newsGrid">
            <!-- News Card 1 -->
            <article class="news-card fade-in-up delay-0">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_1_image'); ?>" alt="<?php echo get_field('news_1_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_1_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_1_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_1_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_1_excerpt'); ?></p>
                </div>
            </article>

            <!-- News Card 2 -->
            <article class="news-card fade-in-up delay-1">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_2_image'); ?>" alt="<?php echo get_field('news_2_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_2_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_2_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_2_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_2_excerpt'); ?></p>
                </div>
            </article>

            <!-- News Card 3 -->
            <article class="news-card fade-in-up delay-2">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_3_image'); ?>" alt="<?php echo get_field('news_3_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_3_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_3_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_3_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_3_excerpt'); ?></p>
                </div>
            </article>

            <!-- News Card 4 -->
            <article class="news-card fade-in-up delay-0">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_4_image'); ?>" alt="<?php echo get_field('news_4_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_4_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_4_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_4_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_4_excerpt'); ?></p>
                </div>
            </article>

            <!-- News Card 5 -->
            <article class="news-card fade-in-up delay-1">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_5_image'); ?>" alt="<?php echo get_field('news_5_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_5_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_5_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_5_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_5_excerpt'); ?></p>
                </div>
            </article>

            <!-- News Card 6 -->
            <article class="news-card fade-in-up delay-2">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_6_image'); ?>" alt="<?php echo get_field('news_6_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_6_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_6_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_6_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_6_excerpt'); ?></p>
                </div>
            </article>

            <!-- News Card 7 -->
            <article class="news-card fade-in-up delay-0">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_7_image'); ?>" alt="<?php echo get_field('news_7_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_7_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_7_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_7_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_7_excerpt'); ?></p>
                </div>
            </article>

            <!-- News Card 8 -->
            <article class="news-card fade-in-up delay-1">
                <div class="news-image-wrapper col-md-4 col-12 mb-3 mb-md-0">
                    <img src="<?php echo get_field('news_8_image'); ?>" alt="<?php echo get_field('news_8_title'); ?>" class="news-image">
                </div>
                <div class="news-content ">
                    <div class="news-meta">
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span><?php echo get_field('news_8_date'); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                <line x1="7" y1="7" x2="7.01" y2="7"/>
                            </svg>
                            <span class="news-category"><?php echo get_field('news_8_category'); ?></span>
                        </div>
                    </div>
                    <h3 class="news-title"><?php echo get_field('news_8_title'); ?></h3>
                    <p class="news-excerpt"><?php echo get_field('news_8_excerpt'); ?></p>
                </div>
            </article>

        </div>
        <div id="noResults" class="no-results" style="display: none;">
            <p id="news-no-results">No articles found. Try adjusting your search or filters.</p>
        </div>
    </div>
</section>
<!-- Newsletter CTA -->
<section class="newsletter-cta">
    <div class="container-small text-center">
        <h2 class="text-white" id="news-subscribe-title"><?php echo get_field('news_subscribe_title'); ?></h2>
        <p class="text-white-80" id="news-subscribe-desc"><?php echo get_field('news_subscribe_desc'); ?></p>
        <form class="newsletter-form" id="newsletterForm">
            <input type="email" placeholder="<?php echo get_field('news_email_placeholder'); ?>" class="newsletter-input" id="news-email-placeholder" required>
            <button type="submit" class="btn btn-light" id="news-subscribe-btn"><?php echo get_field('news_subscribe_btn'); ?></button>
        </form>
    </div>
</section>

<?php get_footer();?>