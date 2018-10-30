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
define('DB_NAME', 'plugin_dev1');

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
define('AUTH_KEY',         '$m4ycc0I:bUM-?iqC%D<_.;7llQI 3v=SD$V`Ut7X,LW5{J+)T-,^*w*%>Ur`VVE');
define('SECURE_AUTH_KEY',  '#^ctu3U *.Y!gLRe=xLV$lK gwa{??#kbz/^=v%(/s!$^|;}bLWKH0^?WkN/p;^Q');
define('LOGGED_IN_KEY',    'v=Z#P[y&mT#zm3(1J0sYd?-m+>Hb*[*RdL1k.0]e| GRLUIRPL4IvqP)BUnF-wv<');
define('NONCE_KEY',        ']zprWp?~{Ya/!|JY47X#1*X5LMG$?GLbZDk(.RlZ.fl3D+6Aktx3$z?P<[B9-}5+');
define('AUTH_SALT',        '8LyweUP0ypiG(WNb|TY=j1z_MwiVvf4X=JT0SVhw@R$^x8j*.~n`Ex)zYnhtkbOb');
define('SECURE_AUTH_SALT', '}FG .c:<5?bf ,>PwUV83gtWk&S%*@S9QN5|#bjoomFxqwIy_z7$t(lx9z&q_2hh');
define('LOGGED_IN_SALT',   'Ws^Ni5:yKL6&Y/<F2#GEmqo$w8OP^N(5RZCiuN;2;1$I&+ge]#MavdD}STQMV[T4');
define('NONCE_SALT',       '>,.3a5hqeIAO|OO{. !vvecR2.OE$<+^N=Fr+G*-D1]pE^:Mqu{&,O!mTPyj1>_G');

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
