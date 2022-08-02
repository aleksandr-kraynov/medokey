<? 

add_action( 'wp_enqueue_scripts', 'medokey_scripts');
add_action( 'wp_enqueue_scripts', 'true_include_myscript', 25 );
function medokey_scripts() {

    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style('breakpoint', get_template_directory_uri() . '/assets/css/breakpoint.css' );

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null');
    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js', array('jquery'), 'null', true);
};

function true_include_myscript() {
	wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/assets/js/accordion.js', array(), '3.0' );
}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support( 'menus' );

// Убираем классы и id у меню навигации в шапке //
add_filter( 'nav_menu_item_id', '__return_empty_string' );
add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );
function change_menu_item_css_classes( $classes, $item, $args, $depth ) {	
	$classes[] = 'header__nav-item';
	return $classes;
}
//  включаю поддержку woocommerce в теме сайта
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="container">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}


remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

/*
** Отключение вкладок на странице товара
*/
 
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
 
function woo_remove_product_tabs( $tabs ) {
 
unset( $tabs['reviews'] ); // Убираем вкладку "Отзывы"
unset( $tabs['additional_information'] ); // Убираем вкладку "Свойства"
 
return $tabs;
 
}
