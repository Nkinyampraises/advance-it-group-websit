<?php 
/*
Template Name: About
*/
?>

<?php get_header();?>

<section class="page-hero about-hero" style="background: url('<?php echo get_field('about_hero_background'); ?>') center/cover no-repeat; padding-top: 20px !important; padding-bottom: 20px !important;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center text-white">
                    <?php echo get_field('hero_title'); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- New Section -->
<section class="new-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="text-section fade-in-left col-md-6">
                <div class="foundation-card" style="background-color: #f0f0f0; padding: 20px; border-radius: 8px;">
                    <h2><?php echo get_field('new_section_title'); ?></h2>
                    <p><?php echo get_field('new_section_text'); ?></p>
                </div>
            </div>

            <div class="image-section fade-in-right col-md-6">
                <img src="<?php echo get_field('new_section_image'); ?>" alt="IT Solutions" class="responsive-img img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Our Foundation -->
<section class="py-5 bg-light" style="padding: 60px 0;">
    <div class="container">
        <h2 class="text-center fade-in-up"><?php echo get_field('foundation_title'); ?></h2>

        <div class="row">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <div class="foundation-card fade-in-left">
                    <div class="foundation-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <circle cx="12" cy="12" r="6"/>
                            <circle cx="12" cy="12" r="2"/>
                        </svg>
                    </div>
                    <h3><?php echo get_field('mission_title'); ?></h3>
                    <p><?php echo get_field('mission_text'); ?></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="foundation-card fade-in-right">
                    <div class="foundation-icon vision">
                       <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg> 
                    </div>
                    <h3><?php echo get_field('vision_title'); ?></h3>
                    <p><?php echo get_field('vision_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-section">
    <div class="container">
        <h2 class="text-center fade-in-up">
            <?php echo get_field('why_choose_title'); ?>
        </h2>

        <div class="row m-4">
            <div class="col-md-4 col-12 mb-3 mb-md-0">
                <div class="feature-card fade-in-up">
                    <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    <h3><?php echo get_field('why_1_title'); ?></h3>
                    <p><?php echo get_field('why_1_text'); ?></p>
                </div>
            </div>

            <div class="col-md-4 col-12 mb-3 mb-md-0">
                <div class="feature-card fade-in-up delay-1">
                        <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    <h3><?php echo get_field('why_2_title'); ?></h3>
                    <p><?php echo get_field('why_2_text'); ?></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card fade-in-up delay-2">
                       <svg class="feature-icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                            <polyline points="17 6 23 6 23 12"/>
                        </svg>
                    <h3><?php echo get_field('why_3_title'); ?></h3>
                    <p><?php echo get_field('why_3_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="team-section py-5">
    <div class="container team-container">
        <h2 class="text-center fade-in-up"><?php echo get_field('team_title'); ?></h2>

        <div class="row g-4 justify-content-center">

            <!-- TEAM MEMBER 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card fade-in-up h-100">
                    <div class="team-image-wrapper">
                        <img src="<?php echo get_field('team1_image'); ?>" class="team-image">
                    </div>
                    <div class="team-info">
                        <h4><?php echo get_field('team1_name'); ?></h4>
                        <p><?php echo get_field('team1_title'); ?></p>
                        <p><?php echo get_field('team1_bio'); ?></p>
                        <a href="<?php echo get_field('team1_link'); ?>" target="_blank" class="team-link">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- TEAM MEMBER 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card fade-in-up h-100">
                    <div class="team-image-wrapper">
                        <img src="<?php echo get_field('team2_image'); ?>" class="team-image">
                    </div>
                    <div class="team-info">
                        <h4><?php echo get_field('team2_name'); ?></h4>
                        <p><?php echo get_field('team2_title'); ?></p>
                        <p><?php echo get_field('team2_bio'); ?></p>
                        <a href="<?php echo get_field('team2_link'); ?>" class="team-link">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- TEAM MEMBER 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card fade-in-up h-100">
                    <div class="team-image-wrapper">
                        <img src="<?php echo get_field('team3_image'); ?>" class="team-image">
                    </div>
                    <div class="team-info">
                        <h4><?php echo get_field('team3_name'); ?></h4>
                        <p><?php echo get_field('team3_title'); ?></p>
                        <p><?php echo get_field('team3_bio'); ?></p>
                        <a href="<?php echo get_field('team3_link'); ?>" class="team-link">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- TEAM MEMBER 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card fade-in-up h-100">
                    <div class="team-image-wrapper">
                        <img src="<?php echo get_field('team4_image'); ?>" class="team-image">
                    </div>
                    <div class="team-info">
                        <h4><?php echo get_field('team4_name'); ?></h4>
                        <p><?php echo get_field('team4_title'); ?></p>
                        <p><?php echo get_field('team4_bio'); ?></p>
                        <a href="<?php echo get_field('team4_link'); ?>" class="team-link">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- TEAM MEMBER 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card fade-in-up h-100">
                    <div class="team-image-wrapper">
                        <img src="<?php echo get_field('team5_image'); ?>" class="team-image">
                    </div>
                    <div class="team-info">
                        <h4><?php echo get_field('team5_name'); ?></h4>
                        <p><?php echo get_field('team5_title'); ?></p>
                        <p><?php echo get_field('team5_bio'); ?></p>
                        <a href="<?php echo get_field('team5_link'); ?>" class="team-link">View Profile</a>
                    </div>
                </div>
            </div>

            <!-- TEAM MEMBER 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="team-card fade-in-up h-100">
                    <div class="team-image-wrapper">
                        <img src="<?php echo get_field('team6_image'); ?>" class="team-image">
                    </div>
                    <div class="team-info">
                        <h4><?php echo get_field('team6_name'); ?></h4>
                        <p><?php echo get_field('team6_title'); ?></p>
                        <p><?php echo get_field('team6_bio'); ?></p>
                        <a href="<?php echo get_field('team6_link'); ?>" class="team-link">View Profile</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TIMELINE -->
<section class="timeline-section">
    <div class="container-small">
        <h2 class="text-center fade-in-up"><?php echo get_field('timeline_title'); ?></h2>
        <div class="timeline row row-cols-12">
            <div class="timeline-item fade-in-left delay-0">
                <div class="timeline-dot"></div>
                <div class="timeline-year"><?php echo get_field("timeline_1_year"); ?></div>
                <h3 class="timeline-title"><?php echo get_field("timeline_1_title"); ?></h3>
                <p class="timeline-description"><?php echo get_field("timeline_1_text"); ?></p>
            </div>
            <div class="timeline-item fade-in-left delay-1">
                <div class="timeline-dot"></div>
                <div class="timeline-year"><?php echo get_field("timeline_2_year"); ?></div>
                <h3 class="timeline-title"><?php echo get_field("timeline_2_title"); ?></h3>
                <p class="timeline-description"><?php echo get_field("timeline_2_text"); ?></p>
            </div>
            <div class="timeline-item fade-in-left delay-2">
                <div class="timeline-dot"></div>
                <div class="timeline-year"><?php echo get_field("timeline_3_year"); ?></div>
                <h3 class="timeline-title"><?php echo get_field("timeline_3_title"); ?></h3>
                <p class="timeline-description"><?php echo get_field("timeline_3_text"); ?></p>
            </div>
            <div class="timeline-item fade-in-left delay-3">
                <div class="timeline-dot"></div>
                <div class="timeline-year"><?php echo get_field("timeline_4_year"); ?></div>
                <h3 class="timeline-title"><?php echo get_field("timeline_4_title"); ?></h3>
                <p class="timeline-description"><?php echo get_field("timeline_4_text"); ?></p>
            </div>
            <div class="timeline-item fade-in-left delay-4">
                <div class="timeline-dot"></div>
                <div class="timeline-year"><?php echo get_field("timeline_5_year"); ?></div>
                <h3 class="timeline-title"><?php echo get_field("timeline_5_title"); ?></h3>
                <p class="timeline-description"><?php echo get_field("timeline_5_text"); ?></p>
            </div>
            <div class="timeline-item fade-in-left delay-5">
                <div class="timeline-dot"></div>
                <div class="timeline-year"><?php echo get_field("timeline_6_year"); ?></div>
                <h3 class="timeline-title"><?php echo get_field("timeline_6_title"); ?></h3>
                <p class="timeline-description"><?php echo get_field("timeline_6_text"); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES -->
<section class="our core value mt-4">
    <div class="container">

        <div class="section-header fade-in-up">
            <h2><?php echo get_field('core_title'); ?></h2>
            <p><?php echo get_field('core_subtitle'); ?></p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card fade-in-up delay-0 h-100 p-4">
                    <div class="value-icon">
                        <i class="bi bi-star"></i>
                    </div>
                    <h3><?php echo get_field("value1_title"); ?></h3>
                    <p><?php echo get_field("value1_text"); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card fade-in-up delay-1 h-100 p-4">
                    <div class="value-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3><?php echo get_field("value2_title"); ?></h3>
                    <p><?php echo get_field("value2_text"); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card fade-in-up delay-2 h-100 p-4">
                    <div class="value-icon">
                      <i class="bi bi-trophy"></i>  
                    </div>
                    <h3><?php echo get_field("value3_title"); ?></h3>
                    <p><?php echo get_field("value3_text"); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card fade-in-up delay-3 h-100 p-4">
                    <div class="value-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3><?php echo get_field("value4_title"); ?></h3>
                    <p><?php echo get_field("value4_text"); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card fade-in-up delay-4 h-100 p-4">
                    <div class="value-icon">
                        <i class="bi bi-check2-square"></i>
                    </div>
                    <h3><?php echo get_field("value5_title"); ?></h3>
                    <p><?php echo get_field("value5_text"); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="value-card fade-in-up delay-5 h-100 p-4">
                    <div class="value-icon">
                        <i class="bi bi-lightning"></i>
                    </div>
                    <h3><?php echo get_field("value6_title"); ?></h3>
                    <p><?php echo get_field("value6_text"); ?></p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container-small text-center">
        <svg class="cta-icon" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <line x1="2" y1="12" x2="22" y2="12"/>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
            </svg>
        <h2 class="text-white"><?php echo get_field('cta_title'); ?></h2>
        <p class="text-white-80"><?php echo get_field('cta_text'); ?></p>
    </div>
</section>

<?php get_footer(); ?>