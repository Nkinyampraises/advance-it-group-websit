<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<?php
// Include the content from index.php to reuse the home page template
include( get_template_directory() . '/index.php' );
?>

<?php get_footer(); ?>
