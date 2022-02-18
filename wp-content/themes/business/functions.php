<?php

// include js & css files

function business_scripts() {
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/frontend/js/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri() . '/frontend/js/bootstrap.bundle.min.js', array('jQuery'), '4.3.1', true);
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/frontend/js/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/9fcb8f6668.js', array(), '5', true);
    wp_enqueue_script('Owl Carousel js', get_template_directory_uri() . '/frontend/js/owl.carousel.min.js', array('jQuery'), '2.3.4', true);
    wp_enqueue_script('main js', get_template_directory_uri() . '/frontend/js/main.js', array('jQuery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'business_scripts');

function business_style() {
    wp_enqueue_style('Owl Carousel', get_template_directory_uri() . '/frontend/css/owl.carousel.css', array(), 'v2.3.4');
    wp_enqueue_style('Owl Carousel Theme', get_template_directory_uri() . '/frontend/css/owl.theme.default.carousel.css', array('Owl Carousel'), 'v2.3.4');
    wp_enqueue_style('Theme', get_template_directory_uri() . '/frontend/css/theme.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'business_style');

function business_support() {
    //title tag support
    add_theme_support('title-tag');

    //custom logo support

    add_theme_support('custom-logo', array(
        'height' => 28,
        'width' => 88,
        'flex-width' => false,
        'flex-height' => false
    ));

    //feature image
    add_theme_support('post-thumbnails');

    //add image size

    add_image_size('news-list', 463, 307, true);
    add_image_size('team-list', 273, 355, true);
    add_image_size('single-member', 558, 725, true);
}

add_action('after_setup_theme', 'business_support');

function business_menus() {
    register_nav_menus(array(
        'main-menu' => 'Main menu',
        'social' => 'Social menu'
    ));
}

add_action('init', 'business_menus');

function business_create_post_type() {

    register_post_type('our_services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'plural_name' => 'Services',
            'all_items' => 'All Items',
            'add_new' => 'Add New Service',
            'new_item' => 'New Service',
            'edit' => 'Edit',
            'edit_item' => 'Edit Service Item',
            'view' => 'View Service',
            'view_item' => 'View Item',
            'featured_image' => 'Featured Img for Service'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 17,
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
}

add_action('init', 'business_create_post_type');

function business_init_sidebar() {
    register_sidebar(
            array(
                'name' => __('Primary Sidebar'),
                'id' => 'sidebar_1',
                'before_widget' => '<aside id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Footer1 Sidebar'),
                'id' => 'footer_1',
                'before_widget' => '<aside id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
    register_sidebar(
            array(
                'name' => __('Footer2 Sidebar'),
                'id' => 'footer_2',
                'before_widget' => '<aside id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
}

add_action('widgets_init', 'business_init_sidebar');

require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/widgets.php';
