<?php

function vortron_setup()
{
    add_theme_support("title-tag");

    add_theme_support("custom-logo", [
        "height" => 250,
        "width" => 250,
        "flex-width" => true,
        "flex-height" => true,
    ]);

    add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "vortron_setup");

function vortron_files()
{
    wp_enqueue_script(
        "vortron_js",
        get_theme_file_uri("/build/index.js"),
        "1.0",
        true
    );
    wp_enqueue_script(
        "fa_js",
        get_theme_file_uri("/node_modules/@fortawesome/fontawesome-free/js/all.js"),
        "1.0",
        true
    );
    wp_enqueue_script(
        "splide_js",
        get_theme_file_uri("/node_modules/@splidejs/splide/dist/js/splide.min.js"),
        "1.0",
        true
    );
    wp_enqueue_style("vortron_styles", get_stylesheet_uri());
    wp_enqueue_style(
        "splide_styles",
        get_theme_file_uri("/node_modules/@splidejs/splide/dist/css/splide.min.css")
    );
}

add_action("wp_enqueue_scripts", "vortron_files");

function vortron_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Sidebar', 'vortron'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add Widgets Here.', 'vortron'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}

add_action('widgets_init', 'vortron_widgets_init');