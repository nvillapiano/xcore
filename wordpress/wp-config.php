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
define('DB_NAME', 'xcore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6rv , DUb^j=U/@<S9NVxh4QQgr2lfQ:*^0Bqs*/w{f>rgCPvZ}5FM*`;$9<X4O>');
define('SECURE_AUTH_KEY',  'Vi1#O!8S+y:e+Sz]U47/~j|ef}-7vk&Ab?VGH1bF%c_;lpXBPEQq]d YIOf%:jMs');
define('LOGGED_IN_KEY',    'fMAaFdZWIw(Fr+<5OpkcUIRP##1U}!Fn]+xXp[Wr@qplu<L]NRG|H08GVT[&%OjM');
define('NONCE_KEY',        '*..t~ljse+@R@3*)@lhW=do[}8{BMo-cG*5>P[ocwb+;SnH!d3|APx)a6MW5Kk*(');
define('AUTH_SALT',        '$VC_JPo{As5!_W`o)]&CdI6~oN6(&E/y<C&yX}ixy`3Z]HHKsN3`yC6j|liF25Wv');
define('SECURE_AUTH_SALT', ',^;] {%C$DSuM(~*)V5Zfo1N#py>VIr-[~t;u!/YH(cS]CZhG8wx!$[a@*i%YN8|');
define('LOGGED_IN_SALT',   'VDOd1y<h^mV|>NKoy9:8wZ;YeaG)>%wP3i#;B:l(mdH0)+T H^_2%cv:Xq;=]4.q');
define('NONCE_SALT',       '`~5Mcjw^QsN 5Smyb7f6Qb3ii+Kr*r3[fz^sMhG#NX>w_?Zemq@-d PQmi_)4vIf');

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
