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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_K`I58b1V7+iv/dj}CUS_vEmh(5S:&M1[P=%MdNNgeG(k5DE=pRBWY&/Y:6OmJvt' );
define( 'SECURE_AUTH_KEY',  'Mx +Y8iG}TH0mXP~k2f[Fm-zcII^:QH/P@J7j):/+{X*j[?F;?#N(1IMc~db)2TC' );
define( 'LOGGED_IN_KEY',    '3}3G3jGbcF^{UmX[iYd|+byr!Wv*4~*{rAdoc_}ZnTk_!W1u4Xe?C57s#J++hn,F' );
define( 'NONCE_KEY',        'kCaRulk^?QCChdRM/:nPBXs].d;y9+ uRQ/*)fZXcq)s@Oys;+d2LFO) )*8uI2$' );
define( 'AUTH_SALT',        '~U7a|1;2^i;n<{KqJQHtj8>&79z=mnE2a|IBuj9n+kb*RgO;R(S(a5(6>5OeU.qZ' );
define( 'SECURE_AUTH_SALT', 'HM+Hn:Z9YozyWNg;}sHhD/Rx}!%#gd?5ebRy8#SUnlfDayZ3T#JCX._B:3&N5[);' );
define( 'LOGGED_IN_SALT',   'n7Lw(v:3Jj)gv~]Q#5!q1u=P_]CYOqiHh.. 5x>K6}!xWzt:!Jf7P8)Luog+6#.D' );
define( 'NONCE_SALT',       '}0`xI*W..~jkI hhm(FUPY3lcN!`:N|gvRb-^r?rM;}37^_.OUNc>(az:59]ggt!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
