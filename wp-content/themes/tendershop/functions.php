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

    wp_enqueue_style("font-awesome",  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    /**
     * Add style file
     */
    wp_enqueue_style("main-style", get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style("styles", get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'ts_styles');

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
    wp_enqueue_script('jquery-tweet', get_template_directory_uri() . '/js/jquery.tweet.js', array(), false, true);
    wp_enqueue_script('js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('js-shop', get_template_directory_uri() . '/js/shop.js', array(), false, true);
    wp_enqueue_script('js-script', get_template_directory_uri() . '/js/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'ts_scripts');


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
 * t???o m???t custom post type slider
 * t???o m???t custom post type brand
 */
function ts_slider_post_type()
{
    /*
     * Bi???n $label ????? ch???a c??c text li??n quan ?????n t??n hi???n th??? c???a Post Type trong Admin
     */
    $label = array(
        'name' => '???nh Slider', //T??n post type d???ng s??? nhi???u
        'singular_name' => '???nh Slider' //T??n post type d???ng s??? ??t
    );

    /*
     * Bi???n $args l?? nh???ng tham s??? quan tr???ng trong Post Type
     */
    $args = array(
        'labels' => $label, //G???i c??c label trong bi???n $label ??? tr??n
        'description' => '???nh Slider', //M?? t??? c???a post type
        'supports' => array(
            'title',
            'thumbnail',
            'active'
        ),
        'hierarchical' => false, //Cho ph??p ph??n c???p, n???u l?? false th?? post type n??y gi???ng nh?? Post, true th?? gi???ng nh?? Page
        'public' => true, //K??ch ho???t post type
        'show_ui' => true, //Hi???n th??? khung qu???n tr??? nh?? Post/Page
        'show_in_menu' => true, //Hi???n th??? tr??n Admin Menu (tay tr??i)
        'show_in_nav_menus' => true, //Hi???n th??? trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hi???n th??? tr??n thanh Admin bar m??u ??en.
        'menu_position' => 5, //Th??? t??? v??? tr?? hi???n th??? trong menu (tay tr??i)
        'menu_icon' => 'dashicons-images-alt2', //???????ng d???n t???i icon s??? hi???n th???
        'can_export' => true, //C?? th??? export n???i dung b???ng Tools -> Export
        'has_archive' => true, //Cho ph??p l??u tr??? (month, date, year)
        'exclude_from_search' => false, //Lo???i b??? kh???i k???t qu??? t??m ki???m
        'publicly_queryable' => true, //Hi???n th??? c??c tham s??? trong query, ph???i ?????t true
        'capability_type' => 'post' //
    );


    $label2 = array(
        'name' => 'Brand Image', //T??n post type d???ng s??? nhi???u
        'singular_name' => 'Brand Image' //T??n post type d???ng s??? ??t
    );

    /*
     * Bi???n $args l?? nh???ng tham s??? quan tr???ng trong Post Type
     */
    $args2 = array(
        'labels' => $label2, //G???i c??c label trong bi???n $label ??? tr??n
        'description' => 'Brand Image', //M?? t??? c???a post type
        'supports' => array(
            'title',
            'thumbnail',
            'active'
        ),
        'hierarchical' => false, //Cho ph??p ph??n c???p, n???u l?? false th?? post type n??y gi???ng nh?? Post, true th?? gi???ng nh?? Page
        'public' => true, //K??ch ho???t post type
        'show_ui' => true, //Hi???n th??? khung qu???n tr??? nh?? Post/Page
        'show_in_menu' => true, //Hi???n th??? tr??n Admin Menu (tay tr??i)
        'show_in_nav_menus' => true, //Hi???n th??? trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hi???n th??? tr??n thanh Admin bar m??u ??en.
        'menu_position' => 5, //Th??? t??? v??? tr?? hi???n th??? trong menu (tay tr??i)
        'menu_icon' =>  get_template_directory_uri() . '/img/brand.svg', //???????ng d???n t???i icon s??? hi???n th???
        'can_export' => true, //C?? th??? export n???i dung b???ng Tools -> Export
        'has_archive' => true, //Cho ph??p l??u tr??? (month, date, year)
        'exclude_from_search' => false, //Lo???i b??? kh???i k???t qu??? t??m ki???m
        'publicly_queryable' => true, //Hi???n th??? c??c tham s??? trong query, ph???i ?????t true
        'capability_type' => 'post' //
    );


    register_post_type('slider', $args); //T???o post type v???i slug t??n l?? sanpham v?? c??c tham s??? trong bi???n $args ??? tr??n
    register_post_type('brand', $args2);
}
add_action('init', 'ts_slider_post_type');
