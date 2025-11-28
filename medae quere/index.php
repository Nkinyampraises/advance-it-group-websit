
<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>




    <!-- Hero Section -->
<section class="hero py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="hero-content fade-in-left">

                    <!-- HERO TITLE -->
                    <?php if (get_field('hero_heading')): ?>
                        <h1 class="hero-heading">
                            <?php the_field('hero_heading'); ?>
                        </h1>
                    <?php endif; ?>

                    <!-- HERO DESCRIPTION -->
                    <?php if (get_field('hero_description')): ?>
                        <p class="hero-description">
                            <?php the_field('hero_description'); ?>
                        </p>
                    <?php endif; ?>

                    <!-- HERO BUTTON -->
                    <?php if (get_field('button_1_text')): ?>
                        <a href="<?php the_field('button_1_link'); ?>" 
                           class="btn btn-primary mt-3">
                           <?php the_field('button_1_text'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('button_2_text')): ?>
                        <a href="<?php the_field('button_2_link'); ?>" 
                           class="btn btn-primary mt-3">
                           <?php the_field('button_2_text'); ?>
                        </a>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Right Hero Image -->
            <div class="col-lg-6 text-center fade-in-right">
                <?php 
                $hero_image = get_field('hero_image');
                if ($hero_image): ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" 
                         alt="<?php echo esc_attr($hero_image['alt']); ?>" 
                         class="img-fluid hero-img">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- Highlights / Products Section -->
<section class="highlights">
    <div class="container">
        <div class="section-header fade-in-up">
            <h2><?php the_field('products_title'); ?> <span class="text-primary"><?php the_field('products_span'); ?></span></h2>
            <p><?php the_field('products_description'); ?></p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="action-tiles">
                    <div class="row">
                        <!-- Product 1 -->
                        <div class="col-12 mb-3">
                            <div class="action-tile yellow-tile fade-in-up delay-1 h-100 active" data-target="modal-content-1">
                                <svg class="tile-icon" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                                    </svg>
                                <h3><?php the_field('product_1_title'); ?></h3>
                                <p><?php the_field('product_1_short_description'); ?></p>
                                <span class="tile-link">
                                    <?php the_field('product_1_link_text'); ?>
                                     <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                </span>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="col-12">
                            <div class="action-tile yellow-tile fade-in-up delay-2 h-100" data-target="modal-content-2">
                                <svg class="tile-icon" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <circle cx="12" cy="12" r="6"/>
                                        <circle cx="12" cy="12" r="2"/>
                                    </svg>
                                <h3><?php the_field('product_2_title'); ?></h3>
                                <p><?php the_field('product_2_short_description'); ?></p>
                                <span class="tile-link">
                                    <?php the_field('product_2_link_text'); ?>
                                     <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Product 1 Content -->
                <div id="modal-content-1" class="modal-content">
                    <div class="modal-content-padding" style="background-color: white;">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="<?php echo get_field('product_1_image')['url']; ?>" alt="<?php echo get_field('product_1_image')['alt']; ?>" class="img-fluid" style="height: 380px; object-fit: cover;">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="modal-body">
                                    <p class="modal-text-black modal-text" style="color:black;"><?php the_field('product_1_full_description'); ?></p>
                                    <ul class="feature-list modal-list-black modal-list-left">
                                        <li class="feature-item modal-item-black">
                                            <span class="feature-dot"></span>
                                            <?php the_field('product_1_feature_1'); ?>
                                        </li>
                                        <li class="feature-item modal-item-black">
                                            <span class="feature-dot"></span>
                                            <?php the_field('product_1_feature_2'); ?>
                                        </li>
                                        <li class="feature-item modal-item-black">
                                            <span class="feature-dot"></span>
                                            <?php the_field('product_1_feature_3'); ?>
                                        </li>
                                    </ul>
                                    <div class="modal-actions">
                                        <a href="<?php the_field('product_1_link_url'); ?>" class="btn btn-primary modal-link-black modal-link"><?php the_field('product_1_link_text_button'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 2 Content -->
                <div id="modal-content-2" class="modal-content" style="display: none;">
                    <div class="modal-content-padding" style="background-color: white;">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="<?php echo get_field('product_2_image')['url']; ?>" alt="<?php echo get_field('product_2_image')['alt']; ?>" class="img-fluid" style="height: 380px; object-fit: cover;">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="modal-body">
                                    <p class="modal-text-black modal-text" style="color:black;"><?php the_field('product_2_full_description'); ?></p>
                                    <ul class="feature-list modal-list-black modal-list-left">
                                        <li class="feature-item modal-item-black">
                                            <span class="feature-dot"></span>
                                            <?php the_field('product_2_feature_1'); ?>
                                        </li>
                                        <li class="feature-item modal-item-black">
                                            <span class="feature-dot"></span>
                                            <?php the_field('product_2_feature_2'); ?>
                                        </li>
                                        <li class="feature-item modal-item-black">
                                            <span class="feature-dot"></span>
                                            <?php the_field('product_2_feature_3'); ?>
                                        </li>
                                    </ul>
                                    <div class="modal-actions">
                                        <a href="<?php the_field('product_2_link_url'); ?>" class="btn btn-primary modal-link-black modal-link"><?php the_field('product_2_link_text_button'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>

<!-- Highlights Panel / Why ADVANCE-IT -->
<section class="highlights-panel">
    <div class="highlights-grid row align-items-center">
        <div class="row">
            <div class="col-md-6">
                <div class="highlight-illustration fade-in-up delay-2">
                    <img src="<?php echo get_field('why_image')['url']; ?>" alt="<?php echo get_field('why_image')['alt']; ?>" class="illustration-img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="highlight-content fade-in-up delay-3">
                    <h2><?php the_field('why_title'); ?> <span class="text-primary"><?php the_field('why_span'); ?></span></h2>
                    <p><?php the_field('why_description'); ?></p>
                    <ul class="feature-list">
                        <li class="feature-item"><?php the_field('why_feature_1'); ?></li>
                        <li class="feature-item"><?php the_field('why_feature_2'); ?></li>
                        <li class="feature-item"><?php the_field('why_feature_3'); ?></li>
                        <li class="feature-item"><?php the_field('why_feature_4'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services">
    <div class="container">
        <div class="section-header fade-in-up">
            <h2><?php the_field('services_title'); ?> <span class="text-primary"><?php the_field('services_span'); ?></span></h2>
            <p><?php the_field('services_description'); ?></p>
        </div>
        <div class="row">

            <!-- Service 1 -->
            <div class="col-md-4 mb-4">
                <div class="service-card fade-in-up h-100">
                 <svg class="service-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                        <line x1="6" y1="6" x2="6.01" y2="6"/>
                        <line x1="6" y1="18" x2="6.01" y2="18"/>
                    </svg>
                    <h3><?php the_field('service_1_title'); ?></h3>
                    <p><?php the_field('service_1_description'); ?></p>
                    <div class="service-tags">
                        <span class="tag"><?php the_field('service_1_tag_1'); ?></span>
                        <span class="tag"><?php the_field('service_1_tag_2'); ?></span>
                        <span class="tag"><?php the_field('service_1_tag_3'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4 mb-4">
                <div class="service-card fade-in-up delay-1 h-100">
                    <svg class="service-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                    </svg>
                    <h3><?php the_field('service_2_title'); ?></h3>
                    <p><?php the_field('service_2_description'); ?></p>
                    <div class="service-tags">
                        <span class="tag"><?php the_field('service_2_tag_1'); ?></span>
                        <span class="tag"><?php the_field('service_2_tag_2'); ?></span>
                        <span class="tag"><?php the_field('service_2_tag_3'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4 mb-4">
                <div class="service-card fade-in-up delay-2 h-100">
                     <svg class="service-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <line x1="12" y1="18" x2="12.01" y2="18"/>
                    </svg>
                    <h3><?php the_field('service_3_title'); ?></h3>
                    <p><?php the_field('service_3_description'); ?></p>
                    <div class="service-tags">
                        <span class="tag"><?php the_field('service_3_tag_1'); ?></span>
                        <span class="tag"><?php the_field('service_3_tag_2'); ?></span>
                        <span class="tag"><?php the_field('service_3_tag_3'); ?></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Video Demo Section -->
<section class="video-demo">
    <div class="container">
        <div class="section-header fade-in-up">
            <h2><?php the_field('video_title'); ?> <span class="text-primary"><?php the_field('video_span'); ?></span></h2>
            <p><?php the_field('video_description'); ?></p>
        </div>
        <div class="video-container fade-in-up">
            <div class="video-wrapper" id="videoWrapper">
                <video src="<?php echo get_field('video_file')['url']; ?>" controls class="video-thumbnail w-100" id="videoThumbnail">
                    Your browser does not support the video tag.
                </video>
                <div class="video-info">
                    <h3><?php the_field('video_story_title'); ?></h3>
                    <p><?php the_field('video_story_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container my-5">
        <div class="stats-grid">
            <div class="row">
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="stat-card fade-in-up">
                        <div class="stat-value"><?php the_field('stat_1_value'); ?></div>
                        <div class="stat-label"><?php the_field('stat_1_label'); ?></div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="stat-card fade-in-up delay-1">
                        <div class="stat-value"><?php the_field('stat_2_value'); ?></div>
                        <div class="stat-label"><?php the_field('stat_2_label'); ?></div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card fade-in-up delay-2">
                        <div class="stat-value"><?php the_field('stat_3_value'); ?></div>
                        <div class="stat-label"><?php the_field('stat_3_label'); ?></div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card fade-in-up delay-3">
                        <div class="stat-value"><?php the_field('stat_4_value'); ?></div>
                        <div class="stat-label"><?php the_field('stat_4_label'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5">
    <div class="container">
        <h2 class="text-center"><?php the_field('testimonials_title'); ?></h2>
        <p class="text-center subtitle"><?php the_field('testimonials_subtitle'); ?></p>
        <div class="row" id="testimonialsGrid">

            <!-- Testimonial 1 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card h-100 fade-in-up delay-0">
                    <svg class="testimonial-quote" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="..."/></svg>
                    <div class="testimonial-header">
                        <img src="<?php the_field('testimonial_1_photo')['url']; ?>" alt="<?php the_field('testimonial_1_photo')['alt']; ?>" class="testimonial-avatar">
                        <div>
                            <h4 class="testimonial-name"><?php the_field('testimonial_1_name'); ?></h4>
                            <p class="testimonial-role"><?php the_field('testimonial_1_role'); ?></p>
                        </div>
                    </div>
                    <div class="testimonial-rating"><?php the_field('testimonial_1_rating'); ?></div>
                    <p class="testimonial-content"><?php the_field('testimonial_1_content'); ?></p>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card h-100 fade-in-up delay-1">
                    <svg class="testimonial-quote" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="..."/></svg>
                    <div class="testimonial-header">
                        <img src="<?php the_field('testimonial_2_photo')['url']; ?>" alt="<?php the_field('testimonial_2_photo')['alt']; ?>" class="testimonial-avatar">
                        <div>
                            <h4 class="testimonial-name"><?php the_field('testimonial_2_name'); ?></h4>
                            <p class="testimonial-role"><?php the_field('testimonial_2_role'); ?></p>
                        </div>
                    </div>
                    <div class="testimonial-rating"><?php the_field('testimonial_2_rating'); ?></div>
                    <p class="testimonial-content"><?php the_field('testimonial_2_content'); ?></p>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card h-100 fade-in-up delay-2">
                    <svg class="testimonial-quote" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="..."/></svg>
                    <div class="testimonial-header">
                        <img src="<?php the_field('testimonial_3_photo')['url']; ?>" alt="<?php the_field('testimonial_3_photo')['alt']; ?>" class="testimonial-avatar">
                        <div>
                            <h4 class="testimonial-name"><?php the_field('testimonial_3_name'); ?></h4>
                            <p class="testimonial-role"><?php the_field('testimonial_3_role'); ?></p>
                        </div>
                    </div>
                    <div class="testimonial-rating"><?php the_field('testimonial_3_rating'); ?></div>
                    <p class="testimonial-content"><?php the_field('testimonial_3_content'); ?></p>
                </div>
            </div>
            

        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners">
    <div class="container">
        <div class="section-header fade-in-up">
            <h2><?php the_field('partners_title'); ?> <span class="text-primary"><?php the_field('partners_span'); ?></span></h2>
            <p><?php the_field('partners_description'); ?></p>
        </div>
        <div class="row">
            <!-- Partner 1 -->
            <div class="col-md-4 mb-4">
                <div class="service-card fade-in-up h-100">
                    <svg class="service-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                        <line x1="6" y1="6" x2="6.01" y2="6"/>
                        <line x1="6" y1="18" x2="6.01" y2="18"/>
                    </svg>
                    <h3><?php the_field('partner_1_title'); ?></h3>
                    <p><?php the_field('partner_1_description'); ?></p>
                    <div class="service-tags">
                        <span class="tag"><?php the_field('partner_1_tag_1'); ?></span>
                        <span class="tag"><?php the_field('partner_1_tag_2'); ?></span>
                        <span class="tag"><?php the_field('partner_1_tag_3'); ?></span>
                    </div>
                </div>
            </div>
            <!-- Partner 2 -->
            <div class="col-md-4 mb-4">
                <div class="service-card fade-in-up delay-1 h-100">
                    <svg class="service-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                    </svg>
                    <h3><?php the_field('partner_2_title'); ?></h3>
                    <p><?php the_field('partner_2_description'); ?></p>
                    <div class="service-tags">
                        <span class="tag"><?php the_field('partner_2_tag_1'); ?></span>
                        <span class="tag"><?php the_field('partner_2_tag_2'); ?></span>
                        <span class="tag"><?php the_field('partner_2_tag_3'); ?></span>
                    </div>
                </div>
            </div>
            <!-- Partner 3 -->
            <div class="col-md-4 mb-4">
                <div class="service-card fade-in-up delay-2 h-100">
                    <svg class="service-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <line x1="12" y1="18" x2="12.01" y2="18"/>
                    </svg>
                    <h3><?php the_field('partner_3_title'); ?></h3>
                    <p><?php the_field('partner_3_description'); ?></p>
                    <div class="service-tags">
                        <span class="tag"><?php the_field('partner_3_tag_1'); ?></span>
                        <span class="tag"><?php the_field('partner_3_tag_2'); ?></span>
                        <span class="tag"><?php the_field('partner_3_tag_3'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
