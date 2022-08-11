<?php
/*
Plugin Name: Расширенные комментарии
Version: 1.0
Plugin URI: https://wp-kama.ru/?p=8342
Description: Плагин, добавляющий произвольные поля в форму комментариев.
Author: Campusboy
Author URI: https://wp-plus.ru/
*/
// Добавляем поля для всех пользователей
add_action( 'comment_form_logged_in_after', 'extend_comment_custom_fields' );
add_action( 'comment_form_after_fields', 'extend_comment_custom_fields' );
function extend_comment_custom_fields() {

	echo '<p class="comment-form-title">'.
			  '<label for="title">' . __( 'Comment Title' ) . '</label>'.
			  '<input id="title" name="title" type="text" size="30"/></p>';

	echo '<p class="comment-form-rating">'.
			  '<label for="rating">'. __('Rating') . '<span class="required">*</span></label>
			  <span class="commentratingbox">';

	for( $i=1; $i <= 5; $i++ ){
		echo '
		<label class="commentrating" style="display:inline-block;">
			<input type="radio" name="rating" id="rating" value="'. $i .'"/> '. $i .'   
		</label>';
	}

	echo'</span></p>';
}