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
define( 'DB_NAME', 'myprofile_db' );

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
define( 'AUTH_KEY',         '-GAA:7F[Pu~vxY0Ni_GoDBYir<P9JYi6?#Q/6fFV6if (GK%Uo5~z.ai{V`$I.9o' );
define( 'SECURE_AUTH_KEY',  '7J:pD-3}:^dsq>b#ThiP9%4zSQ;mwa!V/CspfxdUH<Y75B3=XfX 1(5W KCpFh{g' );
define( 'LOGGED_IN_KEY',    'Y&_xjWgi7=eS]&u#.&Bz*{<?hEbUQ3!Hc|`&>Ll&iaGjP-ymzr:>VI(*K[}}2,S0' );
define( 'NONCE_KEY',        'A>{dzBN+vZ3~)E}Cqj^Hs`vp}(CKee+$AdY.A ]0SGRU-y9OD0<8{nxD5K0YdP6]' );
define( 'AUTH_SALT',        '(]SG+EWf|az)1L^=LW.W2UYa.piQyC9?2AH-a6W-k^p*jr&7{MOD`^LbuqZ|u{Fm' );
define( 'SECURE_AUTH_SALT', 'A=)a.q`5aP0sSr-9r& okntz1x+b}ln*)5^_zS&9Iu7VnSj3m&0Yi$b%!^^od#Ls' );
define( 'LOGGED_IN_SALT',   'x}ZBcrSRv{U~/x@>{&;f>cqX<< HWJ7-][?j[<~*[tTH>? pQd`Qc+7PJ=bL=m,[' );
define( 'NONCE_SALT',       '=4:tpu@RxM<)!8}&Og1qSuF;EAlov~j50-FBxW6(ms)D,]B_$6m~!74@#LhAEI_8' );

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
