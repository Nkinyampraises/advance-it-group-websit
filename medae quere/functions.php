<?php 

function load_css() {

    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.0', 'all');

    // Meda main styles
    wp_enqueue_style('meda-main', get_template_directory_uri() . '/styles/main.css', array('bootstrap'), '1.0.0', 'all');

    // Meda animations styles
    wp_enqueue_style('meda-animations', get_template_directory_uri() . '/styles/animations.css', array('meda-main'), '1.0.0', 'all');

    // Bootstrap Icons (CDN)
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3', 'all');
}
add_action('wp_enqueue_scripts', 'load_css');


function load_js() { 
    wp_enqueue_script('jquery'); // jQuery

    // Bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);

    // Meda site JS
    wp_enqueue_script('meda-main', get_template_directory_uri() . '/scripts/main.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('meda-contact', get_template_directory_uri() . '/scripts/contact.js', array('jquery'), '1.0.0', true);

    // Conditionally enqueue about.js on About page
    // Disabled because static content is embedded in page-About.php
    /*
    if (is_page_template('page-About.php')) {
        wp_enqueue_script('meda-about', get_template_directory_uri() . '/scripts/about.js', array('jquery'), '1.0.0', true);
    }
    */

    // Conditionally enqueue news.js on News page
    if (is_page_template('page-news.php')) {
        wp_enqueue_script('meda-news', get_template_directory_uri() . '/scripts/news.js', array('jquery'), '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'load_js');


// Register theme menus
function medae_quere_register_menus() {
    register_nav_menus( array(
        'primary-menu' => __('Primary Menu', 'medae-quere'),
    ));
}
add_action('after_setup_theme', 'medae_quere_register_menus');

?>