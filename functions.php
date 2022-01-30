<?php 

function radio_gc(){
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap');
    wp_enqueue_style('radio_gc_main_styles' , get_template_directory_uri() . '/app/scss/style.css' );
    wp_enqueue_script('radio_gc_js' , get_template_directory_uri() . '/app/js/script.js' , NULL, '1.0', true);
    
}
add_action('wp_enqueue_scripts','radio_gc');

function radiogc_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
    	
add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'radiogc_features');



function radiogc_adjust_queries($query){
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
$today= date('dmy');
        $query -> set('meta_key', 'event_date');
        $query -> set('orderby', 'meta_value_num');
        $query->set('order','ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
                )
            )); 
    }
}

add_action('pre_get_posts', 'radiogc_adjust_queries');


