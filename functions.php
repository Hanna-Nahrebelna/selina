<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
    function wp_it_volunteers_setup() {
        add_theme_support( 'custom-logo',
            array(
                'height'      => 64,
                'width'       => 64,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
        add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );  
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
  wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array('main'));
  wp_enqueue_style('choices-style', "https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css", array('main'));

  wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js', array(), false, true);
  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );  
  wp_enqueue_script('choices-scripts', 'https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js', array(), false, true);


    if ( is_page_template('templates/home.php') ) {
        wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
        wp_enqueue_script( 'jquery-scripts', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', array(), false, true );
        wp_enqueue_script( 'touch-swipe-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js', array(), false, true );
        wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array('touch-swipe-scripts'), false, true );
    }

    if (is_singular() && locate_template('template-parts/loader.php')) {
      wp_enqueue_style('loader-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/loader.css', array('main'));
    }
  
}
/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500;800&display=swap', [], null );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
// Footer's menu's named is: menu_title_numberOfColumn_numberOfRowInThisColumn in Figma
function wp_it_volunteers_menus() {
    $locations = array(
        'header' => __( 'Header Menu', 'wp-it-volunteers' ),
        'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
        'footer12' => __( 'Footer Menu12', 'wp-it-volunteers' ),
        'footer21' => __( 'Footer Menu21', 'wp-it-volunteers' ),
        'footer22' => __( 'Footer Menu22', 'wp-it-volunteers' ),
        'footer31' => __( 'Footer Menu31', 'wp-it-volunteers' ),
        'footer32' => __( 'Footer Menu32', 'wp-it-volunteers' ),
        'footer41' => __( 'Footer Menu41', 'wp-it-volunteers' ),
        'footer42' => __( 'Footer Menu42', 'wp-it-volunteers' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');


function polylang_translate()
{
    if (function_exists('pll_register_string')) {
        pll_register_string('відправити', 'відправити', 'General');
    }
}
add_action( 'init', 'polylang_translate' );


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

