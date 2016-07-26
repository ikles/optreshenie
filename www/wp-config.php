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
define('DB_NAME', 'optreshenie');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&+2pN+4To(yd,xZ8CIVhSMl1vtKm#!0V+f>;~R|Lu,7p;f6gxcN3><ya#ChVHxoo');
define('SECURE_AUTH_KEY',  '_=G-zuqk`fcF9J-4#M})K142CN~cS]-yzBRWiSKMW;c>U!e}EruLWgLP;!38<pFN');
define('LOGGED_IN_KEY',    '6<1*v]+7wN_=2]@h+Ca:QTl=_W`Tjp@t(PT)^N^!c`Q1-e3m|*[bHxQ>n(4qkv>6');
define('NONCE_KEY',        'woIOcOd..62J}O@5rV3~6H*F.v.Qx)V uS#fEaK*W:fW&}8kay1v!zpO{d)UZUh]');
define('AUTH_SALT',        '&/F^1%BJ29G4@q W1V[1r)yGFiUOyc_8y?fM;:i$]5//D$Jb 6BCQ4|f31B9`fnf');
define('SECURE_AUTH_SALT', 'Sf6>&,:A=f)2t=<08HyJu(oLJ7)o~VMMvB:M&ZE|o#06c c_U&pR#-_HJ<m;Qjx;');
define('LOGGED_IN_SALT',   'NuYi9oW%Iz)>rCo1*=C3!DNq`@m2T6@0+7/ST15,Mx?fauL7Fc4a,R`AptLt9kQg');
define('NONCE_SALT',       'X1YKKdh-Y2 3(3<v9A%p/wRCX;kTXH/%ST;+#A{!$KwDLrz&W02G=,yb<{n7kii=');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
