<?php
require get_theme_file_path('/inc/search-route.php');
function wkode_files(){
    if (is_singular('post') AND !is_singular('servico')){
        wp_enqueue_script('wkode-product-zoom-js', get_theme_file_uri('/dist/zoom.js'), NULL, '1.0', true);
    }
    if (is_front_page()){
        wp_enqueue_script('wkode-slider-script', get_theme_file_uri('/dist/sliderScript.js'), NULL, '1.0', true);
    }
   /* main styles with theme name and version etc */
    wp_enqueue_style('wkode_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_theme_file_uri('/dist/main.js'), NULL, '1.0', true);
    wp_localize_script('main-js', 'WKodeData', array(
        'root_url' => get_site_url()
    ));
    wp_enqueue_script('wkode-font_awesome', '//kit.fontawesome.com/fde7c29e46.js', NULL, '1.0', true);
    /* dont forget all these scripts */
    wp_enqueue_script('wkode-popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', NULL, '1.0', true);
    wp_enqueue_script('wkode-js-bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', NULL, '1.0', true);
    wp_enqueue_style('bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style('slick-slider-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/main.css');
        
        
}

add_action('wp_enqueue_scripts', 'wkode_files');

function wkode_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('ProductImageList', 500, 350, true);
    add_image_size('ProductImageSingle', 800, 1000, true);
}
add_action('after_setup_theme', 'wkode_features');


function remove_pages_from_search() {
    global $wp_post_types;
    $wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');


