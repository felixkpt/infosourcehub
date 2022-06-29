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

$db_name = 'onlineserviceslab';
$db_user = 'root';
$db_pass = '';

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'infosourcehub' );

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
define( 'AUTH_KEY',         '7Pjo$5>AMrEurx=wFH`Ch2b;x;)2J`r2G-^_6~Ri2[X&~Y594$F]iL3]uI8jfJ1t' );
define( 'SECURE_AUTH_KEY',  '&mn}Qv144Qntfm_y}%zv<*Wo4;R -ElFcG9b{OYyg_u5VFN/=rI>=VRQ?/3D{SC>' );
define( 'LOGGED_IN_KEY',    'X+4pJW{?{?%=YDJIf` @ 25<[H2Qu(S?F5,jTgWBuuU{RjB5f-|NpwFyz<=99c-F' );
define( 'NONCE_KEY',        'f(o=TU@}]7!?OKHd>-mfDwFWda/`!$f7qk) z68?/884-m{8zjLvkr);>yj0X_EU' );
define( 'AUTH_SALT',        ':&lOJ?}5k`VgthNhddw=!/2j7.vEFCrtg[;#c&lrEUi]jb0m4r6*!KJJ6.s,.s~A' );
define( 'SECURE_AUTH_SALT', 'pxaLU%4)[U5[IQ9i0a)op[+20@h>uM0S;7@taPjt@:]!|ju).&DpsMbf[Un:=%lv' );
define( 'LOGGED_IN_SALT',   ']3KE~H:a4y9<SgrDht>KV8gDm93U`er]%=?D(>CmS9l,V5#(,3p+XJ?mK5k;L;+>' );
define( 'NONCE_SALT',       'ULYRJKdc69[pT1sv<T)LD6>#0U*570M(g.G3U$$zAZDzWr#)h=V.=uN8R@vd07-V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'koech';

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
