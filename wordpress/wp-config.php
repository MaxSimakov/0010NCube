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
define( 'DB_NAME', 'ncube' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ncube' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ncube' );

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
define( 'AUTH_KEY',         'geeN>%D)F5o%56)/[,LTIcQ)Dr+ {.gw(=!akvr>y+T3+Xa)A7B;<sQppdE2I+_Q' );
define( 'SECURE_AUTH_KEY',  'Q<~La(ZA[,Su| ?WQ3[X1i8s4TI6[u7.MLP<I3^:.z,fwOmO``vDcUhDoo=i||_+' );
define( 'LOGGED_IN_KEY',    '7Tz$k&5zt@ssM{LppinFs%LYxEccNr.bAu9b6fR`EU73m,M)PR8xJw2#3bM]+01!' );
define( 'NONCE_KEY',        'w{rwIw&jvdn:DT0&;@i0v,%$7]:/f4g>*rKwBD0g.jNi4|JQ3I!b{v,j$O0cLmnE' );
define( 'AUTH_SALT',        '_Ofxfd9XFnfU~3N~i<mdp%vL RY^. Xw_cr{%1*v-_eoK1|a:isZa9;vS9/{he)7' );
define( 'SECURE_AUTH_SALT', 'pB7[]PQ@mm114sa[pMh3_MJa*>A Sz~&xHY/I>zo6-)5`d;UrJb{spKjd`4@T_A[' );
define( 'LOGGED_IN_SALT',   'G.q:<m;ao|5z]PoI2IBXH]t[~A|61Nsnh<de1gER6{j#`0FDaHhaZ%!qB?:JPLU3' );
define( 'NONCE_SALT',       '*Np=d]CMH3,IG,NCpQF 75>hK5KT6>qtO:b+P@nJjN69hX;fl& XXU]W) LL&y=V' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ncube_';

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
