<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lthietk19gr_westnew');

/** MySQL database username */
//define('DB_USER', 'lthietk19gr_new');

/** MySQL database password */
//define('DB_PASSWORD', '@dminchuanseo212');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');

/** The name of the database for WordPress */
//define('DB_NAME', 'westpq');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dung3864');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f}WTZO_06q;eE:*a}ETt0wE^8FDUF9tK9em{un MKv{LbTLyGH~2TBCD4n?V&l2g');
define('SECURE_AUTH_KEY',  'Jfw7#gBK/pGnUUZRrUo];Nx]qYKXsGPzA?iCm+cw^+oWptlm dQL+D5hJUh-uh--');
define('LOGGED_IN_KEY',    'h3XtY3y9lp!0t+:&sC]VnerUMw$x )EAIPD;Z}K}:Q2.#Iqh/i=RX~iQg!_Bbd8!');
define('NONCE_KEY',        'MbJb1S&@1hB4j2UuU`:O>.SxVzF,EFj%|x]bgkjtl2 =_Z@#8!Y_]lEm@sZ)Pcjn');
define('AUTH_SALT',        'L:]2ErAr,/8ovJJQG9)^0HhbSxC$#dg#*tk8y9;2<^=#JRJjuso}cS|T2j?TA%f4');
define('SECURE_AUTH_SALT', 'I6EO&OKuz8`F#oVo>c*CUnHTZ7)&>h3sU;9f%pe%sK2Ge-BOC,%_W#b~iZ)IPrZ+');
define('LOGGED_IN_SALT',   '<@&t5N6A[VSKG6,>.Bkn!Ne.!NG7-o7}DO?c!aC;/k4CZ_h.naYZLw4NcnK8,s$1');
define('NONCE_SALT',       'C(.6489C)_pt4ss@qam_S-{-IgIMAQ1DJZh?ntV<}*3S7^9=3Y`Y{@~LxYz/z?@s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chuanseo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
