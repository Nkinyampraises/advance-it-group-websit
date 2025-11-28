<!-- Footer -->
<footer class="footer">
    <div class="footer-cta">
        <div class="container">
            <div class="cta-content">
                <div>
                    <h3><?php esc_html_e('Ready to boost your performance?', 'medae-quere'); ?></h3>
                    <p><?php esc_html_e("Let's discuss how we can help transform your business", 'medae-quere'); ?></p>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-light btn-large"><?php esc_html_e('Contact Us Today', 'medae-quere'); ?></a>
            </div>
        </div>
    </div>

    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-company">
                        <div class="logo">
                            <div class="logo-icon">AI</div>
                            <span class="logo-text"><?php bloginfo('name'); ?></span>
                        </div>
                        <p><?php esc_html_e('Empowering businesses through innovative IT solutions since 2015.', 'medae-quere'); ?></p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span><?php esc_html_e('2593, rue 6.250 Oyom-Abang, Nkolbisson, Carrefour Tsimi, Yaoundé', 'medae-quere'); ?></span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+237 696 099 939</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>Info@advance-it-group.biz</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h4><?php esc_html_e('Quick Links', 'medae-quere'); ?></h4>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'medae-quere'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/product')); ?>"><?php esc_html_e('Product', 'medae-quere'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php esc_html_e('About', 'medae-quere'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/news')); ?>"><?php esc_html_e('News', 'medae-quere'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact', 'medae-quere'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h4><?php esc_html_e('Products', 'medae-quere'); ?></h4>
                        <ul class="list-unstyled">
                            <li><a href="https://erp.auroresuite.com"><?php esc_html_e('Aurore ERP', 'medae-quere'); ?></a></li>
                            <li><a href="https://datacentral.tech"><?php esc_html_e('Data Central', 'medae-quere'); ?></a></li>
                            <li><a href="#"><?php esc_html_e('Aurore SIS', 'medae-quere'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h4><?php esc_html_e('Services', 'medae-quere'); ?></h4>
                        <ul class="list-unstyled">
                            <li><a href="#"><?php esc_html_e('Software Development', 'medae-quere'); ?></a></li>
                            <li><a href="#"><?php esc_html_e('Consulting', 'medae-quere'); ?></a></li>
                            <li><a href="#"><?php esc_html_e('Custom Software', 'medae-quere'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .row -->

            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="social-links">
                        <a href="https://www.facebook.com/advit.group" class="social-link">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://x.com/AdvanceITGroup" class="social-link">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/advance-it-group" class="social-link">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://www.instagram.com/advanceitgroup/" class="social-link">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0" style="color: black;">&copy; 2015 <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'medae-quere'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
