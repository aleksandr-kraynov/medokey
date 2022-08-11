<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 <div class="comments__form form">
    <?php 
    $comments_args = array(
        'fields' => array(
            'author' => '
                <input  id="author" class="form__input form__input--comments" name="author" type="text" value="" placeholder="Имя *"' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . $html_req . ' />',
            'email'  => '
                <input id="email" class="form__input form__input--comments" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="" placeholder="Email *"' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />'
            ),
            
    );
    comment_form($comments_args); 
    ?>
 </div>
    
 <form class="comments__form form">
<h2 class="comments__form-title">Пажалуйста, оставьте отзыв</h2> 
    <label class="form__title form__title--comments">Ваш e-mail не будет опубликован. Обязательные поля помечены *
        <textarea class="form__textarea form__textarea--comments" type="text" name="your-message" placeholder="Напишите отзыв здесь" ></textarea>
    </label>
    <input class="form__input form__input--comments" type="text" name="username" placeholder="Имя *" required>
    <input class="form__input form__input--comments" type="text" name="your-email" placeholder="Email *" required>
  <button class="comments__button button">Оставить отзыв</button>
</form>
</div><!-- #comments -->