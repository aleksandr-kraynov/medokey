<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'medok_acto' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qPJJ);C<Ri9~482dvr9XoS;ox_Fc,cOy=>>[:j@w1o!2HYdA3 eosT)rA&mfQLP.' );
define( 'SECURE_AUTH_KEY',  'I9&Vfr%rC89c@`]-}L?IARpjoJPn?pgD}ey~bVkwf,+Xy&*f@@{:k&ko.k:p&{(X' );
define( 'LOGGED_IN_KEY',    'TB6p;P{qT(n`{,Vd9`Le=<qeVpf5rI@TpE|,=9*;Y%4|ezavU{C0q kKo)_kGmBl' );
define( 'NONCE_KEY',        ':qZ^S<RY:DHpgFWZ#k;76#=G`P6+,n~V5iYrX&2<&Up$[aRo ){BT_%KqtDSNCyx' );
define( 'AUTH_SALT',        'Mq1|.EnHSx6x6y&,vW$KM miwsg_Foe,b+>}>_1qC}wWNX.s`?qA0as^ q`)kIS6' );
define( 'SECURE_AUTH_SALT', 'M</3<2XEe*799Q.B$6$OK0omsVi7Qj;ptL9w](|Wy;$X>3Yqg%0($]:#IXQ)i1q|' );
define( 'LOGGED_IN_SALT',   'eBSZlF4%(,vsl{O3c3^__-=xeOK[CuR,+j(D*`BcXVrC3}M~wUx|4&H4Te gMl%L' );
define( 'NONCE_SALT',       ' )&PayxErY ,:U;H)Xu3T/IF:E(oU+ZQMZ-2.{rW,<>aeIK]ZDUYNR)SL;>RvjJX' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
