<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <script>
        const THEME_URL = '<?php echo get_template_directory_uri(); ?>';
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Debug: Output current template file being used
global $template;
echo "<!-- Current template: " . basename($template) . " -->";
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbar">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand logo">
            <div class="logo-icon">AI</div>
            <span class="logo-text"><?php bloginfo('name'); ?></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'medae-quere'); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        if (has_nav_menu('primary-menu')) :
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarNav',
                'menu_class' => 'navbar-nav ms-auto',
                'fallback_cb' => '__return_false',
            ));
        else :
        ?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" data-translate="nav.home" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'medae-quere'); ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-translate="nav.product" href="#" id="nav-product" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php esc_html_e('Product', 'medae-quere'); ?></a>
                        <ul class="dropdown-menu" aria-labelledby="nav-product">
                            <li><a class="dropdown-item" href="https://advance-it-group.biz/software-testing-qa"><?php esc_html_e('Aurore SIS', 'medae-quere'); ?></a></li>
                            <li><a class="dropdown-item" href="https://datacentral.tech"><?php esc_html_e('Data Central', 'medae-quere'); ?></a></li>
                            <li><a class="dropdown-item" href="https://erp.auroresuite.com"><?php esc_html_e('Aurore ERP', 'medae-quere'); ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-translate="nav.about" href="<?php echo esc_url(home_url('/about')); ?>"><?php esc_html_e('About', 'medae-quere'); ?></a></li>
                    <li class="nav-item"><a class="nav-link" data-translate="nav.news" href="<?php echo esc_url(home_url('/news')); ?>"><?php esc_html_e('News', 'medae-quere'); ?></a></li>
                    <li class="nav-item"><a class="nav-link" data-translate="nav.contact" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact', 'medae-quere'); ?></a></li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</nav>