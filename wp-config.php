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
define( 'DB_NAME', 'quran' );

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
define( 'AUTH_KEY',         'iIe;X,yHoefln3(y2C7}Wd8}?ZjZWYlA95z&*:HSzL[EL}i* j?bH,!fVg[8/Eol' );
define( 'SECURE_AUTH_KEY',  'F;xC/U@R9@1B88}a`*wT;&Nl[jR>umNqQT!y9$;g2,X*Y#5t@9|E*tI}:CKpi~$6' );
define( 'LOGGED_IN_KEY',    ':^@Ka.mdhNWDAS39Dh{%^krc]z]tsN!^e*JV5/$P!m*8:eCV_4a/:wPXD4eu`g|L' );
define( 'NONCE_KEY',        'U-~%V*/q}E_i-##]brLS3/r?rVN^M]sIK^%HS&ETp=E~^m sq*-b }~M4XYp?~]k' );
define( 'AUTH_SALT',        'MFkjiF+5~ub{R*rFFi #ipS0co<6X8ZUBbw#xk$H{LJ&$_kGoVN9X.|6h/LIl9I`' );
define( 'SECURE_AUTH_SALT', 'tq1w}s $T`IzFj$O}zvR)7e?*gAQ(,=dE_%Y(z={ :/*APIG$L<+k=PU6nTSy#(y' );
define( 'LOGGED_IN_SALT',   '#H>W}pqBXtd{F4I{4]l9{.tSSKQq%+KM5,/?$p[VR|5HHn,vZr_4=tW3}q}!=-Q2' );
define( 'NONCE_SALT',       'z^>70#uRW[X+7o!qwr4Tppgb U+z6}XX fAx9)4an2V0SP<0Jre3s&>3o^g*mr;9' );

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
