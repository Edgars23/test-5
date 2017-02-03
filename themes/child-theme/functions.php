<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

//wp_enqueue_style( 'style', get_stylesheet_uri() );
//wp_style_add_data( 'style', 'rtl', 'replace' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function child_scripts_and_styles()
{
    if (!is_admin()) {


        // Custom javascript
        wp_enqueue_script('Matchheight', get_stylesheet_directory_uri() . '/js/plugins/jquery.matchHeight-min.js', null, null, true);
        wp_register_script('global', get_stylesheet_directory_uri() . '/js/global.js', null, null, true);

        wp_localize_script('global', 'ajaxSettings', array(
            'url' => admin_url('admin-ajax.php'),
            'base' => get_bloginfo('url'),
            'isHome' => is_home(),
            'isSinle' => is_single(),
            'postType' => get_post_type(),
            'xhr' => false,
            'isFront' => is_front_page(),
            'is_user' => is_user_logged_in(),
            'templates' => get_bloginfo('template_url'),
            'templateName' => get_page_template_slug(),
            'timer' => NULL,
            'nonce' => wp_create_nonce('ajax-nonce')
        ));
        wp_enqueue_script('global');


    }
}

add_action('wp_enqueue_scripts', 'child_scripts_and_styles');



remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 9 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 30 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );



add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'books',
        array(
            'labels' => array(
                'name' => __( 'Books' ),
                'singular_name' => __( 'Books' )
            ),
            'public' => true,
            'menu_icon'           => 'dashicons-book-alt',
            'has_archive' => true,
        )
    );
}
add_action( 'init', 'create_book_tax' );

function create_book_tax() {
    register_taxonomy(
        'genre',
        'books',
        array(
            'label' => __( 'Genre' ),
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        )
    );
}