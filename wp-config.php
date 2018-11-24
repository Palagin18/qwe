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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'wmC%n/~{ZVuvF5fM?n$?O@h6] ?S8I*QIk$HexWAAC6F2/?(dv}A_Zo9iRb<sW9N');
define('SECURE_AUTH_KEY',  '|hdTA#=k%_@[sKzT?-jyCy!P[;0-b!^7Dg`6S,(.-iD|a5u{qAEH;8W0-a(V^r6P');
define('LOGGED_IN_KEY',    'H^z1!#ci>PGEr=,rEo$Y=E]WQN-x{/x4fq]#!wzOy{km;|5iVeIzJknE>uv4 }FN');
define('NONCE_KEY',        '`$~MnW63n,|IJpy>,l<zMkgP9OD94_E`7qd[```FX,To.*Q4Pq&zkkND,#h{ms]W');
define('AUTH_SALT',        'rGEX$lx| Ia_:[ctMvY_-p!Z3MBd7g.HcO$0M#&90:KWihv6c!BDCi~>y{{@kkJD');
define('SECURE_AUTH_SALT', 'W#Wnx%i!eHH>mR$pnAB=-( &7#CxnQEg#>O>Dfy?x8cI`!Hl-fS4SWNs-V{{#&V,');
define('LOGGED_IN_SALT',   'R}zC.Z;>$,~hA1c;ryK)cF3bnrJ^T aG,QCt09 =o*@,0 eo:xgG]{b+<ao$Xl~o');
define('NONCE_SALT',       '=(>r_RP>QML2R#flOh^)&%L[D)<$$qo]VM-ad]+!?4M:6*ibkqygY9#5rF5ABMII');

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
