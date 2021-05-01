<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


// Nav Menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' ),
) );

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('small', 600, 600, false);
add_image_size('extra-small',150,150,true);

function create_projects_posttype()
{
    $args=array(
        'labels'=>array(
            'name'=>__('Projects'),
            'singular_name'=>__('Project')
        ),
        'public'=>true,
        'supports'=>array(
            'title','editor','thumbnail'
        ),
        'has_archive'=>true,
        'menu_icon'=>'dashicons-code-standards',
        'hierarchical'=>false
    );
    register_post_type('Project',$args);
}
add_action('init','create_projects_posttype');

flush_rewrite_rules(false);