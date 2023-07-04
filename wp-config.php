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
define( 'DB_NAME', 'harsteelgarage' );

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
define( 'AUTH_KEY',         'j}.j8<T{!q*;Ue$Yi5e5Xs<ROd(!OZRlnvfc3:xfBqrDp+cu9!V1o>~<xh|V=fmL' );
define( 'SECURE_AUTH_KEY',  '4`JcU?J;vs1^HMH|4LnBWF,aiBAk#>aq|VV/Oe9%ov[M@~Fbkq^i xq#tT{[J@#b' );
define( 'LOGGED_IN_KEY',    '.X0#ew6@))X-q&+_VYC-)cb{!hF30vW;j#,[)/J$y`i1uJh=t05MlyV_<X+y&#zF' );
define( 'NONCE_KEY',        '.%9g+)EM1DSk:Bhy!or{9]Rm6{YDa?Z^URQ>V*P_/|:4c7DwG9E[VB+|AK|QOBo8' );
define( 'AUTH_SALT',        '_[&;J8!k>O(xjyD),JF0?]>=+bW}{PZQmsZJ:7y7}`^8pH,7:s)6QyK7,+nw>0Ga' );
define( 'SECURE_AUTH_SALT', '?il&~I*ktfCSJ:c[Y93`9PsLd?j4fvD#q6;+vh2k.MkI.iCtB] S{w9yi.s2zp+}' );
define( 'LOGGED_IN_SALT',   ':qg)8b_g+lofj#}$mrKqC_}1&k(ycP7r5ZanG}SW?%3g&sKfTiP}?$:8s!d/IqTk' );
define( 'NONCE_SALT',       'F8N]!;zpwz<y$vt!!sWExOb j.0hxI=[`>8iEuSpYIvZ<dL,OUJAhK0l7NOD}3|W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hs_';

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
