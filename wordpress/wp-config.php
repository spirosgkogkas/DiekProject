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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '$?lpbA22)5/6`G=|ubH!}9gGyQHj;X}u<rM>{F#+:I.&ETMEW5.d%T 6.8|Kzr>s' );
define( 'SECURE_AUTH_KEY',  'Abe=IKD4Hw>~~2 gJ|Q^&QT)c5s4_GBx[C)pdq.*7mUc8@/>Kbv7cy!sgS< s!kx' );
define( 'LOGGED_IN_KEY',    'mC$Z/}ij^,xPE8A5&Rz|g|]y;WbrZVfVhrQ^FcJ:?-0ldgj:2>j^w<jiTu!<)aA#' );
define( 'NONCE_KEY',        '?avB%KxmnPaZh99)|M68Gdh`QI)YdFnAUN&[QYhCPODqbN,O*O.jB6>`(ns5Zv4(' );
define( 'AUTH_SALT',        'sDid:1<@to#W/2$y8LzmM[BR#k1@kbLP^q<ArCy]JrT!n>;Kb?QUZO2b?V`X?F`J' );
define( 'SECURE_AUTH_SALT', ';N`cO&dIwC&sFgQy>?FpP.qkLP/@)41o(atEG4GR2b(f{fX}6h5dl%yC.>!D/U]/' );
define( 'LOGGED_IN_SALT',   'Eh5=tKfF?2vxNSQ=a:6T,q,(t~i4Ay0rlU@{XtNgm_U_MhV6`&nGrw.Do}78#s#R' );
define( 'NONCE_SALT',       '}Pp_X88O9CqG*LUYjj&_%NRz>ive)u]Ns@]_OXyDdkbQn|hzueI3rV>1^6Mo~`hZ' );

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
