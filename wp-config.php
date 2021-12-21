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
define( 'DB_NAME', 'wp_restaurent' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', '3J#tOC9WT0MWTJ-G14!52mED&i-`1#!*w5ss G_VY}f0).go! 0vY/7eg!CDr`z.' );
define( 'SECURE_AUTH_KEY', 'B]6Wz$K;).iu^.ny_/ho+TNLOxJXfPNX|^@NTTAHlcpO+G?u;oLkic(6s%|+|!@D' );
define( 'LOGGED_IN_KEY', 'oQU2GIMp3_H6uMrB;QusKSii||Z5s@%4#4^WT$u3M8miz1[Frzj!q;ic-fCK#nhV' );
define( 'NONCE_KEY', '18xP4Q|9tnX-i,*go^^<q-o7*1AA88sKk~rqJ@E|}agZfvy!]UhBI)(y`0#>L:F#' );
define( 'AUTH_SALT', '%nOW+h8&2Gm;6={rD>.G_f 2$sY:/#udLAtC#RB@b1aky-#YdY!YYPoA4xrZ0Rf+' );
define( 'SECURE_AUTH_SALT', '^]=0?+/Ttwr4);)4_hUspQ}-J[3leVSzO`Iv@muz2v9uMQ_yaGuiE9A`,B(;0kth' );
define( 'LOGGED_IN_SALT', 'M%G[Kc4O55 ,EIT/ws5]eDES45Z1[=<-;Lpf7<n:s_xo9wBx=+f.cDVT$!Q^GF P' );
define( 'NONCE_SALT', '|SXQf|-nkDZo{>-_tK>~cAG= f? Y&FT4OXTW+q7X=J/}xL6X5nF@@TK_N7I?|2d' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
