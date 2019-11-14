<?php
add_theme_support( 'post-thumbnails' );
load_theme_textdomain( 'writertheme', get_template_directory() . '/languages' );
@ini_set( 'upload_max_filesize' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
add_filter('upload_mimes', function ( $mimes = array() )
{ 
    $mimes['mobi'] = 'application/x-mobipocket-ebook';
    $mimes['epub'] = 'application/epub+zip';
    return $mimes;
} );

add_action( 'wp_enqueue_scripts', 'writer_enqueue_scripts');
function writer_enqueue_scripts() {
    wp_register_script('mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js', array('jquery'),'1.1', true);
    wp_enqueue_script('mousewheel');
    wp_register_script('jscrollpane', get_template_directory_uri() . '/js/jquery.jscrollpane.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jscrollpane');
    wp_register_style('jscrollpane_stylesheet', get_template_directory_uri() . '/css/jquery.jscrollpane.css');
    wp_enqueue_style('jscrollpane_stylesheet');
}

add_action( 'init', 'writer_add_custom_types' );
function writer_add_custom_types() {
    register_post_type( 'writer_text',
        array(
            'labels' => array(
                'name' => __( 'Teksty' ),
                'singular_name' => __( 'Tekst' )
            ),
            'public' => true,
            'has_archive' => false,
            'taxonomies' => array( 'category' ),
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields')
        )
    );
    
    register_post_type( 'books',
        array(
            'labels' => array(
                'name' => __( 'E-booki' ),
                'singular_name' => __( 'E-book' )
            ),
            'public' => true,
            'has_archive' => false,
            'taxonomies' => array( 'category' ),
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields')
        )
    );
}

?>