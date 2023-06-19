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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '?Q%>FE)^K(h)z)a[~m Xh{..4y.lQD`tz`;[DSh_`RR7NZ2;Jjg[a1(X3J M1vY?' );
define( 'SECURE_AUTH_KEY',  '8jygBw?r=_ [cb3!{HYCU{d??oTw(JB6_B4Z*($w_DtLJH~:/2jkN^_]n)g,:SDT' );
define( 'LOGGED_IN_KEY',    '{I]1a[5~XvA9$@Cf{{VCn}$hnf4:h(m;qH&ZE;3b8Bgs_qAW ot(G~Jf5lzG1OWQ' );
define( 'NONCE_KEY',        ';E^[vZdcR<,f|YiRY<3UeGZU#RdDBNr|uNhMtZ]5ezL]SS S+g2vT#ws&u-/`uRL' );
define( 'AUTH_SALT',        '.Oz(5&oxP`T4<{0 G0[bfEWWjWzspX>N*gVTI$DG%g@q6[=K5ae*&el3iHxx1yDK' );
define( 'SECURE_AUTH_SALT', '.O.!(2p<hiD[a,73w5RQ4mi-/Fay~5:2Yp2|Mhg%[R6b| }LV]fe[N((GGGo~LCK' );
define( 'LOGGED_IN_SALT',   'p;?`Hq/V}.It9?>k+(xW{[msPy4.5#yy=<fu@WJi2PEC(sS<*})GKd2*vOH{>fah' );
define( 'NONCE_SALT',       'G3(|zS<EVU^$g{`|Qz)TqJNle-QgOvK7:0.`t|r{d<]=W!26S{_uMg%3r,E@c5 R' );

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
