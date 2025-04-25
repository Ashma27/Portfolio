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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '?=?u{1;`V2#EB4190)rL}fo]6 ^tp%|txOc|N;9Q{Ec6x:A6k~/x:eAg,j]ev3 y' );
define( 'SECURE_AUTH_KEY',  'i#$8Pd!h|M)E#l5lJ**B3%9L/,3-@qO,&f?NRR~{?C@vt)k96W3t2 z<otJrF$!Z' );
define( 'LOGGED_IN_KEY',    'lEtbfb.ps$<?L.Ahr/v?;U}k!>,AX*]Zb1RO@;=ncmbQ2Na:G.b>7bqqKyQ:Pt8{' );
define( 'NONCE_KEY',        'WJxrr,:gs4VsF}o/RRZ|.]VUa<T&>c>OHC)?)]]wfLh1v@%J!MTc{.-y406{*_h-' );
define( 'AUTH_SALT',        'kuFJmuZCwie0u_kJp.?vI|``LMHfG(m< p_AUxX1`pLKE1;f4^jxVx}4B,-^OC/E' );
define( 'SECURE_AUTH_SALT', '@%[fBDh|0/_NmNp[Szt(,M>o9:WL}F|q48YR92KLc*q`>Su*3Oh<ZI8;1So0^Zw.' );
define( 'LOGGED_IN_SALT',   'n-0zaV!fMHGV7NCJoySTcDtGTx16h,t<&VK+[`Gtn=e,}yROAeq9e}j<{XJvIvtM' );
define( 'NONCE_SALT',       'isj!P?8%nd(>|+Gd>;AxPDV0t:I2}J9,>aKk_W-Wjf3w&z()Zlcxm|;@4M<2*oj4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
