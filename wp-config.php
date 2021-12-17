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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '0000' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'n(d&D< VH7aYRxfq%<&jI@g(b255$!RZ@g8boMp671PhRx9%s W-x;T0qL{,J!`g' );
define( 'SECURE_AUTH_KEY',  '0+=qSSbaJ_`D1(Ex ~7]n8y7zDwTGJ;> Ky<h0zr -ElH*F5mZF}aM*u&G}.2p.&' );
define( 'LOGGED_IN_KEY',    'K=R^fW+_2b:yMER[cRd3XlTa+GiYZWCYow:w9aj#}b*~kMIOAXOdih[y}d>u`kft' );
define( 'NONCE_KEY',        '/4h7yIE~5ba4G;RRmz;w-1i?C2oM,iKf+((s<UZ~pFMMI-cJ^V]`6cuD~2-X%jry' );
define( 'AUTH_SALT',        ',}1xB /#Vc~y0<727!OmG$zH~*yCimPgl)4[0w;bn{q]Ry C,9JWp%%+!k nj~Y=' );
define( 'SECURE_AUTH_SALT', '*s?WJizbpq1rFyT/kPQc?t+3MVy}TF9A]pFEom&X-s#+(<UNscQLu0|a$Ac,lx1D' );
define( 'LOGGED_IN_SALT',   '+sFK(nAXn2`3{Bq:nnjXx)n`.8LWH4EIDDwX~!SuT_C@j!PvT!Ki*[uPY&]+;UYq' );
define( 'NONCE_SALT',       'BA@Rv0aq~:NP~0;vp$/rCP}kKbk23Y_o$cVx|j2Vfed%LfKU90*G>#6r5v3Y>.YB' );

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
