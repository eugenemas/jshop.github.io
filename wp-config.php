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
define('DB_NAME', 'jshop.ua');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'tu=Ku?f.Ou`Y/<2)?`dJTfI&+@0,iUy.d& qZ+30M?_UJdh~sq~b:T Tzj* vXg@');
define('SECURE_AUTH_KEY',  '$A0=TCiX>5]|WbqDMoH<wpsmh/C6r8wi4`d?{3Ux4x~X ^z`ATR|^JOOD;rvn$2P');
define('LOGGED_IN_KEY',    'p}*k{R`B^[Su `+-3x&bw7gU}&<cI@w$ZP/~ IV@pkE7w5@igT)Y:xuuperOpgL1');
define('NONCE_KEY',        'U&J%D.12FrYDbX1iM>|xm@w2[)WROnCBr%~7h*?s;=Tvh`b6:qwI@UBBiCgxr^<h');
define('AUTH_SALT',        '.WiIDpp~^s.RAA;rwMa<QY{i$Qds5ofcN;L]BC1<MEOOAG{/&ZUk@fb4fsi]hddo');
define('SECURE_AUTH_SALT', 'l^Q(nwD9Y{!(c+0/V(s_5)}F2d&@y)Gh*}A]L)<MjQ/J_+.X1]E7Cy#.o7{d vzH');
define('LOGGED_IN_SALT',   '8|^p4CE(Pv 2S+S8E$r~&Q.f $JkiuBLZ9ca{@zSl!V{6v$ePN<shrECr&!&z6Ab');
define('NONCE_SALT',       'v3 Uc9ouXby=&[$cqh>(%hO_&O.HZ,!z|7c(C{.2<vM+D}4`KpbVJ7.[*l$l?]WL');

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
