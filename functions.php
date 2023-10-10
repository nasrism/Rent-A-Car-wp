<?php

function get_ancestor_id(){

    global $post;

    if($post -> post_parent){
        $ancestor = array_reverse(get_post_ancestors ($post-> ID));
        return $ancestor [0];
    }

    return $post->ID;
}

function enqueue_css_js() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/functions.js', array('jquery'), '1.0', true);
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_css_js');

function RentACar_setup(){
    
register_nav_menus(array(
    'nav'=> __('Navigation Menu'),
    'footl'=> __('Footer Left'), 
    'footr'=> __('Footer Right'),
));
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'RentACar_setup');

// 
function custom_search_filter($query) {
    if ($query->is_search) {


        if (isset($_GET['rent-price'])) {
            $price = sanitize_text_field($_GET['rent-price']);
            if (!empty($price)) {
                $query->set('meta_key', 'rent-price');
                $query->set('meta_value', $price);
            }
        }

        if (isset($_GET['car-type'])) {
            $car_type = sanitize_text_field($_GET['car-type']);
            if (!empty($car_type)) {
                $query->set('meta_key', 'car-type');
                $query->set('meta_value', $car_type);
            }
        }

        
        if (isset($_GET['from'])) {
        $from_date = sanitize_text_field($_GET['from']);
        if (!empty($from_date)) {
            $query->set('meta_key', 'from');
            $query->set('meta_value', $from_date);
        }
        }
        if (isset($_GET['to'])) {
        $to_date = sanitize_text_field($_GET['to']);
        if (!empty($to_date)) {
            $query->set('meta_key', 'to');
            $query->set('meta_value', $to_date);
        }
        }
    }
}

add_action('pre_get_posts', 'custom_search_filter');

