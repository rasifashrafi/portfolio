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
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'wp_portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'shetu72743');

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
define('AUTH_KEY',         'V1AfWL=S}qJhF*ZOS?c8Luiv8NWE^X8f{BR~f}!Y5#C;=b=@n*D!FI_XTY^Da[8)');
define('SECURE_AUTH_KEY',  '4s/D?a_i>#vZWkRk8@/{Nd$0BlNVA&}-Lb{9/lv#-_Lh_,F9E+d=c w#CrPr%jHO');
define('LOGGED_IN_KEY',    'VxZsSk~=@kALQR8N(KozzTsO*<cei|d/tx=R;NM@v+kIO?<{FEjh&~?cOQ-$g!{7');
define('NONCE_KEY',        '{0VNh;Ch{EE$;OUOcbW7qX=0cW1Jy0|`^w0wj#&I|jsTTb{1F2 yZd=[YZj>`^5Q');
define('AUTH_SALT',        '0HIFOV%[skzJBW<>O7x2_+w5cw-bQ?0M%w7u4s<[e)K{S{R3QUQFv|~o4BE06+M.');
define('SECURE_AUTH_SALT', '}N_b%(Excp|TJQV@)s/~,jp85dPq<}Lp5KvMnu^{y[l#=ud;6O%J1:tfndnhq?5{');
define('LOGGED_IN_SALT',   '&Te@e7I%=#T<J3g&`/Bz88Y!%4xL!y&nUWz9@[*YSTY]dZTb|^ex[>&q7`pOn)>|');
define('NONCE_SALT',       'Unyaz{lD}JI$Z<rj)w0JKQ#<60-WxKUAgLb?e^JK1F|.`M<SWUi=uMPSR_dE;?)|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
