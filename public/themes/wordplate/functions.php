<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('library/plate.php');

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Show the admin bar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add support for post formats.
    //add_theme_support('post-formats', ['aside', 'audio', 'gallery', 'image', 'link', 'quote', 'video']);

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Add primary WordPress menu.
    register_nav_menu('primary-menu', __('Primary Menu', 'wordplate'));
});

// configure roots/soil
// https://github.com/roots/soil
add_action('after_setup_theme', function () {
    add_theme_support('soil-clean-up');
    add_theme_support('soil-disable-trackbacks');
    //add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
    add_theme_support('soil-js-to-footer');
    //add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

    wp_enqueue_style('wordplate', mix('styles/app.css'));

    wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('wordplate');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// Set custom excerpt more.
add_filter('excerpt_more', function () {
    return '...';
});

// Set custom excerpt length.
add_filter('excerpt_length', function () {
    return 101;
});
