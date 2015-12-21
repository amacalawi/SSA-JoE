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
define('DB_NAME', 'ssa_joe_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'tG*zz5;eKGt]qHpJ^lq>*8(~/nL-<z+a}B]}iXsE&=Y87m^I6NESM,+K+F0}Hg}S');
define('SECURE_AUTH_KEY',  '9^lB/jr]^tTpU84@wb-;T@FdoMc~uiD{].T-s;wjY+Jg+9jNJ8hVWLPx-1~@seNK');
define('LOGGED_IN_KEY',    'P *&[JgheK+CzM?4pKB4v|$6*)wC{q9oXm$g!-ANgohWK ;#TS31*[(]h!)BF&E}');
define('NONCE_KEY',        '3gI8Hk|U}B0)3IkK=u,DU9eixX90kfd/4%IyJNc1:Tqf<~*Wy%}e]o)n+KE9X:8$');
define('AUTH_SALT',        'B<XdUje>l.I-?|fmWz+r#VzS62y/Y@%896KYdlb?_]Rrdpr6|/#AdpdQFK#/T,)^');
define('SECURE_AUTH_SALT', '/SP.09-_8k]bH&NmydAPa~.l,C*]PImb;NLzb_)(AAOLT8rU?s_p~$cb3P/g- }k');
define('LOGGED_IN_SALT',   'I]i|BZFFRKYIk`>+X=~dT/Em*qd+F%?ft-8O($bC_@{PwtKY?=N+OG2$gl9&ytVC');
define('NONCE_SALT',       '3vg-607m@UN63B,:@VN;[bP-WG*MbCcaKj`+iV~4xkP]hZsJH3 Y]|O2a=JoKp|$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'joe_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
