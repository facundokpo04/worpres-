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
add_image_size( 'list_articles_post', 600, 230,true );
add_image_size( 'list_alo_thumbs', 650, 450,true );

register_nav_menus( array(
	'menu' => 'Menu Superior',
) );
        
function add_responsive_class_content($content){

        $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
        if (!empty($content)) {
        $document = new DOMDocument();
        libxml_use_internal_errors(true);
        $document->loadHTML(utf8_decode($content));

        $imgs = $document->getElementsByTagName('img');
        foreach ($imgs as $img) {           
           $existing_class = $img->getAttribute('class');
           $img->setAttribute('class', "img-responsive $existing_class");
        }

        $html = $document->saveHTML();
        return $html;
        }

        else {

        return $content;  
        }
       

}

add_filter('the_content', 'add_responsive_class_content');


?> 
