<?php

function theme_styles() {
    
    // bt stylesheets
    wp_enqueue_style('bs-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fl-css', get_template_directory_uri() . '/css/freelancer.min.css');
    wp_enqueue_style('fs-css', get_template_directory_uri() . '/css/shop-homepage.css');
    wp_enqueue_style('si-css', get_template_directory_uri() . '/css/shop-item.css');
    wp_enqueue_style('si-css', get_template_directory_uri() . '/css/half-slider.css');
    wp_enqueue_style('si-css', get_template_directory_uri() . '/css/sweetalert.css');
    wp_enqueue_style('si-css', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    
    
    		
		// radon js
		wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js');
		wp_enqueue_script( 'radon-custom' , get_template_directory_uri() . '/js/custom.js' );
		wp_enqueue_script( 'fl-js' , get_template_directory_uri(). '/js/freelancer.min.js' );
                wp_enqueue_script( 'jq-js' , get_template_directory_uri(). '/js/jquery.js' );
                
}

add_action('wp_enqueue_scripts', 'theme_styles');

//agregando sidebar
function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" my3>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
   
}

add_action( 'widgets_init', 'themename_widgets_init' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'list_articles_thumbs', 320, 150,true );

?> 
