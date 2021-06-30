<?php

/**
 * add support theme woocommerce
 */
function ts_add_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'ts_add_woocommerce_support');
/**
 * disable woocommerce styles
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');


/**
 * tender shop script
 */
function ts_scripts()
{
    /**
     * ajax jquery
     */
    wp_enqueue_script('ajax-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array(), '1.8.2', true);

    /**
     * https://maps.googleapis.com/maps/api/js?sensor=false
     */
    wp_enqueue_script('map-script', 'https://maps.googleapis.com/maps/api/js?sensor=false', array(), false, true);

    /**
     * scripts
     */

    wp_enqueue_script('jquery-tweet', get_template_directory_uri() . '/js/jquery.tweet.js', array(), '', true);
    wp_enqueue_script('jquery-my',"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js");
    wp_enqueue_script('js-bootstrap-head', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('js-bootstrap-foot', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('js-shop', get_template_directory_uri() . '/js/shop.js', array(), false, true);
    wp_enqueue_script('js-script', get_template_directory_uri() . '/js/script.js', array(), false, true);


    wp_enqueue_script('carousel-min-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',array(),'',true);
    wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/js/owl-carousel.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'ts_scripts');

/**
 * tender shop styles
 */
function ts_styles()
{

    /**
     * Add bootstrap file
     */
    wp_enqueue_style('bootstrap-style1', get_template_directory_uri() . '/css/bootstrap.min.css');
    // wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');

    /**
     * Add font file
     */
    wp_enqueue_style("font-style", get_template_directory_uri() . '/css/font.css');

    /**
     * add Font awesome link
     */

    wp_enqueue_style("font-awesome",  "https://pro.fontawesome.com/releases/v5.10.0/css/all.css");

    /**
     * Add style file
     */
    wp_enqueue_style("main-style", get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style("styles", get_template_directory_uri() . '/style.css');


    /**
     * Add cdn carousel min
     */
    wp_enqueue_style("carousel-min-style", 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
}

add_action('wp_enqueue_scripts', 'ts_styles');

/**
 *  register nav menu
 */

function ts_register_my_menu()
{
    register_nav_menu('header-menu', __('Menu Header'));
    register_nav_menu('quick-link', __('Quick-link'));
}
add_action('init', 'ts_register_my_menu');


/**
 * tạo một custom post type slider
 * tạo một custom post type brand
 */
function ts_slider_post_type()
{
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Ảnh Slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh Slider' //Tên post type dạng số ít
    );

    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Ảnh Slider', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail',
            'active'
        ),
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );


    $label2 = array(
        'name' => 'Brand Image', //Tên post type dạng số nhiều
        'singular_name' => 'Brand Image' //Tên post type dạng số ít
    );

    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args2 = array(
        'labels' => $label2, //Gọi các label trong biến $label ở trên
        'description' => 'Brand Image', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail',
            'active'
        ),
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' =>  get_template_directory_uri() . '/img/brand.svg', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );


    register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
    register_post_type('brand', $args2);
}
add_action('init', 'ts_slider_post_type');


 