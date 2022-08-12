<? 

add_action( 'wp_enqueue_scripts', 'medokey_scripts');

function medokey_scripts() {

    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style('breakpoint', get_template_directory_uri() . '/assets/css/breakpoint.css' );    

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null');    
};

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support( 'menus' );


//  Включаю поддержку woocommerce в теме сайта
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
// Убираем чекбокс из формы отзывов
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );
// Настройка стилей списка комментариев 
function mytheme_comment($comment, $args, $depth) {
  if ( 'div' === $args['style'] ) {
      $tag       = 'div';
      $add_below = 'comment';
  } else {
      $tag       = 'li';
      $add_below = 'div-comment';
  }?>
  <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
  if ( 'div' != $args['style'] ) { ?>
      <div id="div-comment-<?php comment_ID() ?>" class="feedback"><?php
  } ?>
      <div class="wrap">
        <div class="feedback__avatar">
          <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] );?>
        </div>
        <div class="feedback__author author">
          <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
        </div>
      </div>
      <?php 
      if ( $comment->comment_approved == '0' ) { ?>
          <em class="comment-awaiting-moderation"><?php _e( '' ); ?></em><br/><?php 
      } ?>
      <div class="feedback__text">
        <?php comment_text(); ?>
      </div>
      <div class="feedback__data">
        <span>
           <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
              /* translators: 1: date, 2: time */
              printf( 
                  __('%1$s'), 
                  get_comment_date()  
              ); ?>
          </a>
        </span>
         <!-- <?php 
          edit_comment_link( __( '(Edit)' ), '  ', '' ); ?> -->
      </div>

      <div style="display:none;" class="reply"><?php 
              comment_reply_link( 
                  array_merge( 
                      $args, 
                      array( 
                          'add_below' => $add_below, 
                          'depth'     => $depth, 
                          'max_depth' => $args['max_depth'] 
                      ) 
                  ) 
              ); ?>
      </div><?php 
  if ( 'div' != $args['style'] ) : ?>
      </div><?php 
  endif;
}

