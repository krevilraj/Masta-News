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
define('DB_NAME', 'mastanews');

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
define('AUTH_KEY',         'l4+Wh6?L66ocR8D>Rl93=.uGH!4YvFV #R_EiaHx,Hi!AwcRbz/fqjep)z*x/d;X');
define('SECURE_AUTH_KEY',  'o&U2O9?khf}6rrqJljLcd#|M;l{X={s[+iT.}k6.E78k4/(.9VU}:{q)BV&;fHl3');
define('LOGGED_IN_KEY',    '89~wq^nuO`pD xnJrluCHjG3[UCO?qla9Fq3tPv]E^]|dOv&leZ1>Lo%u.G9_ew0');
define('NONCE_KEY',        '2mA(Ca~3NPQ6MxjM*OCbwaVnpA_ _rXkJB}nhE&>/Oh-Jjni>`n6144KV%ix~5Z:');
define('AUTH_SALT',        '<f|]y;/6KN,9<vrG>`;K[c^x&-YYO:Gl5s&=xhx.Aa`P2ovT v~&:6,|:|ED6xd7');
define('SECURE_AUTH_SALT', 'E8AR $.r610hI<70t#@j{j!2G6aOG-Ur7@dOHzc/ws|y<{SllgfzW4U,?Y.YIar~');
define('LOGGED_IN_SALT',   '=FCkbB8Q#G!Hl{?RPlvzRW;M)ww>nQ|0f7mLxDQLg+*}p Jyn;%#rYnG#adM<Cc(');
define('NONCE_SALT',       'Dfgy:HQrCg1/E#3itN%(6d:CW^m<Slw!iHQ)V:^>F@L2mfpct[7pXwSkV!CEHW O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rks_';

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
