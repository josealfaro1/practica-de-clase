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
define( 'DB_NAME', 'wp_gh21a' );

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
define( 'AUTH_KEY',         'MCS[-^(N@ybhzN0DWb-ZXAiGSVEMH~Te9BP>xdw ONo),RTBnKv(s &%q?3!2dz$' );
define( 'SECURE_AUTH_KEY',  ')j&1P)~=5RR,Xdb_J-0/${rAX$GXuuPC`s3,1U*4MKf#7(9>*8v^,WKX/_A(:8j=' );
define( 'LOGGED_IN_KEY',    '{o,wUHq+-qBf?L`Q{;m7[ee[ru^,o6RVSK3!av3xlrH<&Xe1WD #V[c#mBYV>)v>' );
define( 'NONCE_KEY',        '7k-7sT!TtlfrFcw(%RJ*pfztU+u%LVx%gHx`I=ldWaYW^#X)*}]?|X9Tn)}2rbv%' );
define( 'AUTH_SALT',        'PVg&nR<8:&cW/~L?jJc.FIkf~&=y,F};/P1u|:v6*@nPR$_pPT+7Pn<aCYXbc* k' );
define( 'SECURE_AUTH_SALT', 'kV,8FU2Z<N~44n1Z>)*6,q^rFzOwl4I3W[~(I8Q}`Od*TJ3RL4(q+jA1Z6Nn=z<V' );
define( 'LOGGED_IN_SALT',   'sdT.~#Xe**,=uq[ca-BK,p{|d~8V{9+dd^((u+a13j5a`Na4FO|O]:Jkp8t7< x-' );
define( 'NONCE_SALT',       '-h{[:)jQofmJ-8Mu60`CwMOA6,2^+a_<ZghzK3UQB{bdU__iduYVlSuaE0,zKq8X' );

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
