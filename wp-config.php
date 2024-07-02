<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'jobelhenryprotfolio' );

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
define( 'AUTH_KEY',         'w+^#fds3d: R*rrwQ#}G&Mz]qlvB*LO/6{2FlfH{|y[ ^W1`@ tXYvFZBz|-}Fv(' );
define( 'SECURE_AUTH_KEY',  '=>X,,y@7~?rN-lOr]5/;o6R7gKZcxAVy@xajtYf8wL;RPGZG1Onr3EVP;*Z^i1RU' );
define( 'LOGGED_IN_KEY',    'bI7=L*5zdw1k1&Yl65*dUl[=!SHG-({YI|i==fd]|ZAu0f*I6XE#~r}%S|W}I#x~' );
define( 'NONCE_KEY',        'OC58p?%(S*y2N4Av?Tnw<H@iNBA:>sV6`,pB6:QVleZhs9@DZ=)[TXwQd)9Ab$F#' );
define( 'AUTH_SALT',        ' {Y3wS%M&HFzJdmy7V^1L}^Zq($q%F3#lw3BFmB9&2H9oAlZyFx)4(MA(F1aKjyU' );
define( 'SECURE_AUTH_SALT', 'mtAv>.7TqDT#3W23* ~I`8r9rxyN|vC 1Yr^$ZdCEIS!p^y|yNs7cUvDsK9fd__C' );
define( 'LOGGED_IN_SALT',   '7a|/67<TW(~+u`@Y:dD`p>R^^uSy0LdaI<1#{hSw&]QZ?-@d>gtLnoq1xLLP{%8D' );
define( 'NONCE_SALT',       'tHYN}NU~Tf!G?,+E!9E2owG4NEYkXQ{A)c6<V:PpFVV+gsYHQ_kLs@P0!yX@F-u*' );

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
define( 'WP_MEMORY_LIMIT', '128M' );


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
