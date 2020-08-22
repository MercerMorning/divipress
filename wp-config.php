<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PA7`N8QC|?ND~(n].nBeWH?^(;f5s;(P8tHh>sF[!)/Hg;Z_QM#@zbH,r(_aL;T@' );
define( 'SECURE_AUTH_KEY',  'M [ea:5{,vd=^W25]m8u=wpgInaSeml4OaFVvVEa][9=c^U?;*b6Ns{B]B*FzUUK' );
define( 'LOGGED_IN_KEY',    'U>vW39m&X#F|56H=(R}v=SNS=ZubOZY5Pw1jZMDM%2r3^/IH;<$b,3+>*H=m45I@' );
define( 'NONCE_KEY',        'r:Z]TfBcSbk:q)g]=tJS>|j?rMfm2h.x=.>~Y(2(`Buj6p`?Mk&*?4PJE{[wPgtX' );
define( 'AUTH_SALT',        'S3XqyIhccEPC7*R4jAZhCZEF6 l)5d4|Iq>35d5Lw$k.~)j@|#|=Z3rWeI~s`|0{' );
define( 'SECURE_AUTH_SALT', '{[daxKQKBJs6vG#rvA$=oOddC%u3r1+_ByS5jCQYPMY)g8CFcQ@zF?<wJd{5CBu-' );
define( 'LOGGED_IN_SALT',   'lW<(%nw$@]t+r<eS9_wGM>VgaI7dy7 $2?Xc>iF(`(6{@Bkjn*D ;6ecP#~Q;[f ' );
define( 'NONCE_SALT',       'f`1Gz?TQf~WB,^xr`u;j-5@pC4V}1Q:Ju,V7`XH>*2g!Dlv|_>Ncp2j+CinLQD w' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
