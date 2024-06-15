<?php
if (!function_exists('wp_it_volunteers_setup')) {
    function wp_it_volunteers_setup()
    {
        add_theme_support('custom-logo',
            array(
                'height' => 64,
                'width' => 64,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'wp_it_volunteers_setup');
}

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'wp_it_volunteers_scripts');

function wp_it_volunteers_scripts()
{
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main'));
    wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array('main'));
    wp_enqueue_style('choices-style', "https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css", array('main'));

    wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true);
    wp_enqueue_script('choices-scripts', 'https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js', array(), false, true);


    if (is_page_template('templates/home.php')) {
        wp_enqueue_script('touch-swipe-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js', array(), false, true);
        wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array('touch-swipe-scripts'), false, true);
        wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/styles/vendors/swiper.css', array('main'));
        wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/scripts/vendors/swiper-bundle.js', array(), false, true);
        wp_enqueue_script('home-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), false, true);
        wp_enqueue_script('home-jquery', 'https://code.jquery.com/jquery-2.2.0.min.js', array(), false, false);
        wp_enqueue_style('slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array('main'));
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main'));
    }

    // Connected contacts-style & contacts-scripts
    if (is_page_template('templates/contacts.php')) {
        wp_enqueue_style('contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main'));
        wp_enqueue_script('contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true);
    }
    if ( is_page_template('templates/about-us.php') ) {
        wp_enqueue_style( 'about-us-style', get_template_directory_uri() . '/assets/styles/template-styles/about-us.css', array('main') );
        wp_enqueue_script( 'about-us-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about-us.js', array(), false, true );
    }

    if (is_singular() && locate_template('template-parts/loader.php')) {
        wp_enqueue_style('loader-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/loader.css', array('main'));
    }

    if (is_singular() && locate_template('template-parts/contact-form.php')) {
        wp_enqueue_style('contact-form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/contact-form.css', array('main'));
    }

    if (is_page_template('templates/partners.php')) {
        wp_enqueue_style('partners-style', get_template_directory_uri() . '/assets/styles/template-styles/partners.css', array('main'));
    }

}

/** add fonts */
function add_google_fonts()
{
    wp_enqueue_style('google_web_fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap', [], null);
}

add_action('wp_enqueue_scripts', 'add_google_fonts');

/** add swiper */
function add_swiper()
{
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js');
}

add_action('wp_enqueue_scripts', 'add_swiper');

/** Register menus */
function wp_it_volunteers_menus()
{
    $locations = array(
        'header' => __('Header Menu', 'wp-it-volunteers'),
        'footer' => __('Footer Menu', 'wp-it-volunteers'),
    );

    register_nav_menus($locations);
}

add_action('init', 'wp_it_volunteers_menus');


function polylang_translate()
{
    if (function_exists('pll_register_string')) {
        pll_register_string('відправити', 'відправити', 'General');
    }
}

add_action('init', 'polylang_translate');


/** ACF add options page */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
}

function loadDirectory() { ?>
<script type="text/javascript">
    var theme_directory = "<?php echo get_template_directory_uri() ?>";
</script> 
<?php } 
add_action('wp_head', 'loadDirectory');


// Add svg to menu
function find_replace_my_fancy_svg( $items, $args ) {
    $items = str_replace(
        '%SVG%',
        '<svg width="13" height="12" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="M3.748 6.49l2.164 2.255A.83.83 0 006.5 9a.803.803 0 00.59-.255L9.253 6.49C9.781 5.941 9.404 5 8.661 5H4.333c-.744 0-1.112.94-.585 1.49z"/></svg>',
        $items
    );

    return $items;
}
add_filter( 'wp_nav_menu_items', 'find_replace_my_fancy_svg', 10, 2 );
