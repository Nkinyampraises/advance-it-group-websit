<?php
/*
Template Name: Contact
*/
?>

 <?php get_header();?>
<section class="page-hero contact-hero" style="background: url('<?php echo get_field('contact_hero_background'); ?>') center/cover no-repeat; padding-top: 20px !important; padding-bottom: 20px !important;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center text-white"><?php echo get_field('contact_hero_title'); ?></h1>
                <p class="text-white text-center"><?php echo get_field('contact_hero_subtitle'); ?></p>
            </div>
        </div>
       </div>
    </section>
 <!--main contact-->

<section class="py-4">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Left Column -->
                <div class="contact-forms">
                    <!-- Contact Form -->
                    <div class="contact-form-wrapper">
                        <h2 class="text-primary text-center text-lg-start"><?php echo get_field('form_title'); ?></h2>
                        <p class="text-center text-lg-start"><?php echo get_field('form_subtitle'); ?></p>
                        <form id="contactForm" class="contact-form">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label"><?php echo get_field('name_label'); ?></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="<?php echo get_field('name_placeholder'); ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label"><?php echo get_field('email_label'); ?></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="<?php echo get_field('email_placeholder'); ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="message" class="form-label"><?php echo get_field('message_label'); ?></label>
                                <textarea id="message" name="message" rows="6" class="form-control" placeholder="<?php echo get_field('message_placeholder'); ?>" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-send"></i> <?php echo get_field('send_button_text'); ?>
                            </button>
                        </form>
                    </div>

                    <!-- Newsletter -->
                    <div class="newsletter-box mt-5">
                        <h3 class="text-primary"><?php echo get_field('newsletter_title'); ?></h3>
                        <p><?php echo get_field('newsletter_subtitle'); ?></p>
                        <form id="newsletterFormContact" class="newsletter-form-contact">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="<?php echo get_field('newsletter_email_placeholder'); ?>" required>
                                <button type="submit" class="btn btn-primary"><?php echo get_field('subscribe_button_text'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

        <div class="col-md-6">
             <!-- Right Column -->
                <div class="contact-info-column">
                    <!-- Contact Information -->
                    <div class="contact-info-wrapper">
                        <h2 class="text-primary text-center text-lg-start"><?php echo get_field('contact_info_title'); ?></h2>

                        <div class="info-card d-flex flex-row text-start bg-light mb-3">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <p><strong><?php echo get_field('address_label'); ?>:</strong> <?php echo get_field('address'); ?></p>
                            </div>
                        </div>

                        <div class="info-card d-flex flex-row bg-light mb-3">
                            <div class="info-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <p><strong><?php echo get_field('phone_label'); ?>:</strong> <?php echo get_field('phone_number'); ?></p>
                                <p class="text-small"><?php echo get_field('phone_availability'); ?></p>
                            </div>
                        </div>

                        <div class="info-card d-flex flex-row bg-light">
                            <div class="info-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <p><strong><?php echo get_field('email_info_label'); ?>:</strong> <?php echo get_field('primary_email'); ?></p>
                                <p><?php echo get_field('support_email'); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="map-wrapper">
                        <h3 class="text-primary text-center text-lg-start"><?php echo get_field('map_title'); ?></h3>
                        <div class="map-container">
                            <iframe src="<?php echo get_field('map_embed_url'); ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php echo get_field('map_title_attribute'); ?>"></iframe>
                            <div class="map-info">
                                <strong><?php echo get_field('map_info_title'); ?></strong><br>
                                <?php echo get_field('map_info_address'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="social-media-wrapper">
                        <h3 class="text-primary text-center text-lg-start"><?php echo get_field('social_media_title'); ?></h3>
                        <div class="social-buttons">
                            <a href="<?php echo get_field('facebook_url'); ?>" class="social-btn facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="<?php echo get_field('linkedin_url'); ?>" class="social-btn linkedin">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="<?php echo get_field('twitter_url'); ?>" class="social-btn twitter">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="<?php echo get_field('instagram_url'); ?>" class="social-btn instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
  </div>
    <!-- CTA Banner -->
    <section class="cta-section">
        <div class="container-small text-center">
            <h2 class="text-white"><?php echo get_field('cta_title_contact'); ?></h2>
            <p class="text-white-80"><?php echo get_field('cta_subtitle_contact'); ?></p>
        </div>
    </section>
<?php get_footer();?>