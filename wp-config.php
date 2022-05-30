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
define( 'AUTH_KEY',         ')/P!N[wm AdHCopD`wn/GyDn8lux_.P;(E*xQt,T!)hr2mY_{XC<|q:l3f59PaE#' );
define( 'SECURE_AUTH_KEY',  'o6`[IAX=%ifBO;dM.&Wr% ,ClJc1qeaAjC!z UqAKRt5Fj`eDERUY4^GLz^;4?-/' );
define( 'LOGGED_IN_KEY',    '}HT(#hwAqeI.wj 7[IpV~qk?WS9QM~hvy{yq(#Cdf )V:TJ:6NG)zWz3{ ykZu%-' );
define( 'NONCE_KEY',        'zE2rT@d!|l>g0ek1;/Q* /RqeVqkl?A,vKh]l8N*IDm5H*2m0K@dOAhYeLuPm[d<' );
define( 'AUTH_SALT',        'C.EaO[a93RV(B7.[dJ6nYXP)xvk>``3Wb%3UOTG?mrw|DRaK]{cCMTa~b8Q=>5Kt' );
define( 'SECURE_AUTH_SALT', 'c$xrW|^H?&C<v.59sL.#y5VWgwEqNd@;l3(^%R9c)a4vEn6TaS:-.j73ddqAvDnS' );
define( 'LOGGED_IN_SALT',   'SxS&sS-PuRl7BC^xpmvZF:>(1H&l?p7=O.BXH{AC6UZ7Uq(Q(b?LP+uonC>DQ:DP' );
define( 'NONCE_SALT',       'bWTPnl)]e1FMN4Y9!u_6Rr#^50Eo:%@=^+!Z1itR)3{Nu a^ T1,r gwE7dh|~[Y' );

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
