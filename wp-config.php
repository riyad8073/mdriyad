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
define( 'DB_NAME', 'mdriyad' );

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
define( 'AUTH_KEY',         '*HJG0IA9VV{VNY:kofz]jWInG*j.l0DC8r,F-5cDX}*uv.FCie)`3e{M~tw/P`wd' );
define( 'SECURE_AUTH_KEY',  'V*n^|ni[(x3O0}Z0b_mOTXa=Y#*4+VWohG;$wZdQc;0`~*CTWV<@V0`$=>KlRh2~' );
define( 'LOGGED_IN_KEY',    'U#seOkJzTv0M{X)VS=J^%E[8(#}`[ZXNdqDU<<;OdY6NRl!d%IceDwplma4mH?t;' );
define( 'NONCE_KEY',        '.+fBqc6I]:q7}e/->!bL9iK]()VI@e~.L9fmX JN%MD4ltw3IuNSudc&%KR6G#br' );
define( 'AUTH_SALT',        'rHz2m//1hSa~ 4RM*GkFs90sF9fo_#P6Zj)xYNx&CDCH9^VeujxQ%8:x@Wh9)+$3' );
define( 'SECURE_AUTH_SALT', 'LhLUX~g:oz|uj~4,NK]4K.QQq(;?f<Gm2Wh^U4[-M31J9I]CjG1Rx!iG-]:MC]Z0' );
define( 'LOGGED_IN_SALT',   '.8e`|i.Q.pjf+,rW(ax,M4hrP$4 Nn6J&q962m-irZ}<D5 t)qKjJ1`$rszy3P>I' );
define( 'NONCE_SALT',       '#xx~`>H v64tUv~e;98&3NI@Z1 LOOLQo/t{$ph]hRnJCJ{^ee@16q7}:J5YpV)x' );

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
