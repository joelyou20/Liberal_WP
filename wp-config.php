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
define( 'DB_NAME', 'Liberal_WP' );

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
define( 'AUTH_KEY',         '6YA0yND(|$ay)pg:(pI@oc+R#*94Lm*t6`zRwD1~.+ b?X.uP~W.0|j=HV`Q$?(>' );
define( 'SECURE_AUTH_KEY',  '8eI+Zn0T*oxK1:zU6~$VNE[>XZX6nXfOuuFGG3}n7vTvV<dRX?+!a`@T(h<5Y>QI' );
define( 'LOGGED_IN_KEY',    'pw.V,6OR#-{a+li,|JSV2,ZF[=`}AHl,lV{Gj!1z5U_j.&mOG!0c4><pwobkKY?%' );
define( 'NONCE_KEY',        'JRrLx:/[;h)NHww%[,O.P6@0I99?5(]4+BT9 ROoB}DXu<trn8?;BmViK3(;4y~t' );
define( 'AUTH_SALT',        'oVVsp^$(5]JFxx+n4xd%2z9:~ ;K2^.[?OF@GuQ6q#61-|,8t*sTbS|nw0Jwy_i8' );
define( 'SECURE_AUTH_SALT', ':#Z*%(}e3.Cn@a&:oR@^jP~202a_*wvn[K@v3So7dBHg-b^r*XTgaG?d8d^z%wNU' );
define( 'LOGGED_IN_SALT',   'hhb1:n!N,r]6tCdqAHzC2vs!Jn_WJf6dRO6a:! M9,uLTY)G.FP{El+wZw*7dWMJ' );
define( 'NONCE_SALT',       ',qn$7)= X0+w![#LfV]3#3Z{T%SrA@M!#j(<;G/4p`]RDYixn2j.QVnF{ t9C3S^' );

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
