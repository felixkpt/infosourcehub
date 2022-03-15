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

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $db_name = 'onlineserviceslab';
    $db_user = 'root';
    $db_pass = 'derick';
}else{
    $db_name = 'onligfbc_onlineserviceslab';
    $db_user = 'onligfbc_onlineserviceslab';
    $db_pass = '0=&gMN8JRz,l';
}
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $db_name );

/** Database username */
define( 'DB_USER', $db_user );

/** Database password */
define( 'DB_PASSWORD', $db_pass );

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
define( 'AUTH_KEY',         'kgJG-Agm}qr&27i*&(65sTGb$L`=Yg[.xM5!(=_4m8F;1 a9<T>>G6%mhZcmwu<C' );
define( 'SECURE_AUTH_KEY',  'vkHreDYq~N_(zf>k;UTQw6+3JDM?/djFlJx:o9st@*f#FiGW)0&P/b93{s8q2$De' );
define( 'LOGGED_IN_KEY',    'ZJO`G*90:|p)tA%NF;dvYY#oM~(NDsWjS/hZ%NS}ecWZ)s:%!%EE9ICFKHY:EjL=' );
define( 'NONCE_KEY',        'Vq*3)bOKk[mF;qy.M-# gm.]k+Y/SJy^4{O&1OYn@5$5d6SsKFuda?oJ=Ix[fwH#' );
define( 'AUTH_SALT',        '>y7q`q6,QUNfv/BX]&kx p9ormKFkanohMq!t&DO1dV}Ruglc,@rpu|;B[<MWvF<' );
define( 'SECURE_AUTH_SALT', 'tg$s&ib] jkCn4Xk,lIdSu6Q(x4( mZZ`]C7(5<f2 <MyN|~eisfd_Pq t.k5(K>' );
define( 'LOGGED_IN_SALT',   'CC/A(KK}8?(;1ZFo,LpJdQ<1n2&pB=?>$&p-`)e9c_fmndn`KN5R5}c1xb+w`bso' );
define( 'NONCE_SALT',       'ds*x^@54}J~]qArUmin6>pp2d^26b_y:F6#+?ukaRiwCi1PgsN9:Fc}&+B,H~}7-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpOnlineSL_';

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
