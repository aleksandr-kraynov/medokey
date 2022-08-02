<? 

add_action( 'wp_enqueue_scripts', 'medokey_scripts');

function medokey_scripts() {

    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style('breakpoint', get_template_directory_uri() . '/assets/css/breakpoint.css' );
    wp_enqueue_style('iconsfonts', get_template_directory_uri() . '/assets/css/iconsfonts.css' );

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null');    
};

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support( 'menus' );
