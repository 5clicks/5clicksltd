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
define('DB_NAME', 'a5clip1x_smsapi');

/** MySQL database username */
define('DB_USER', 'a5clip1x_smsapi');

/** MySQL database password */
define('DB_PASSWORD', '@P8(i4SdZ1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'eqqq8greaobf9zowlsg1aqhxse6riwfg4p7x8lcnzfbjbob1bl1hmqlc22zusyxq');
define('SECURE_AUTH_KEY',  'oxnf7fifnrwhpgst0nuxy44kycrts0skyhz7goorqvyxtlxffurucol1mtxzq1m1');
define('LOGGED_IN_KEY',    'gwyp6jkukq1gadwxo6xqsz7verqjrfoslt2ce6tqh4sdevxwelagkiozdfzeigcz');
define('NONCE_KEY',        'qcvlidjbpwplvy188hfmk9jwtjtcxeqnd4go2mybly66ed9ogdylnakh6vgm1y7v');
define('AUTH_SALT',        'kbkpp3ufqbd4ewxzzgbiido38qz74fawwzpltobfbzis68dygvbmrifavwvix8nu');
define('SECURE_AUTH_SALT', '41vbvp5jnycjavohcllsdmmliz8b5easfqoeangu7u5tlfhwe74mlj6jcrnjljf4');
define('LOGGED_IN_SALT',   'u9o1mgtz9gwaijuzbmlfjmuxrqbgkretmtseuwnughqkfw3otd6rvk0i0tuhpwg5');
define('NONCE_SALT',       'qackegwsqrrq7yhqatanyqtugdupbrovtbaipk0cs8iwczhw5jumjudpg3oce3po');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sms_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
