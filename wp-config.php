<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '51Kwy-#ho^t,GI#8PrQ u2wP|hc_Ab$^a]!uOa>*2[#?Z[+(m!Cy6A(h|H8HL627' );
define( 'SECURE_AUTH_KEY',  'vFUW&U;C.8`.^* 7Bp&1~,2bLhX^@F:^@^ZTSs=PEx?f$L09s4No(++f, Pvg~rY' );
define( 'LOGGED_IN_KEY',    '`sZM_c,>F:^X366:+a^]OYdxwa{@vB@rX;b=q9Tx={C&h5k2bGU/ )N8*jd4sKEn' );
define( 'NONCE_KEY',        'd4W &|wRCX#>;/x,c;eES ^*|y8){/J/MjJGST[T?}.kvW$3l1oCHl 5gzp,IA?1' );
define( 'AUTH_SALT',        '6Hq2U(SuP,RLi!4-a_[yygQIX5pE*heaZ|1&V.1Q,1AbtD0Xyu~:rV%}cqx!kIn9' );
define( 'SECURE_AUTH_SALT', 'PTyg4}K4I;6f<D0V=&Pm(_!_i&CnZD?paIjY8y>a5~N;U[NM<LZFhjq!z@[+_(@4' );
define( 'LOGGED_IN_SALT',   '_EQTkL7cH?L4?vx3}w7IqmY.3_O~}D@fEzOet||L8){ Wh<pobp|+Ml*.;6d+dvL' );
define( 'NONCE_SALT',       'V;cR]a^3mPkbkhY#1n$sR/{#C20ZssP c<LXT.WK%gwfk,2jeSBUS^C3g>2;hGAU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
