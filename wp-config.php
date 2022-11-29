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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Wf&uP@:o56B >4HmJM#FJdS{DZswF56|wecJ,`J#1j5%q362Dt 8rp8pk@IokS]B' );
define( 'SECURE_AUTH_KEY',  'rxTK<9+EQrw#a!Ii13f}wq7<%b~;S$Ka(_Lxd$9V+:  seI~WA-oY//;c~L?eum;' );
define( 'LOGGED_IN_KEY',    '7dmPsx!@]u^dJdg|<AfU%ii]zv;{|fP(^SbkhnuT7@2zQ:jTzHP<zbGV&~P3S9Uo' );
define( 'NONCE_KEY',        'rR&1^w!_fclhba%X?uu&<ff!6H&EV%:3`KE&Hli%1Wmbe2Wxy^T].>CL_{F ?Mcs' );
define( 'AUTH_SALT',        'Gga7vqbr,y|`CpO^Trw4l<%j;rIKzatOee;Jrh4,~eOVww]&ri+D6R,Ne;iQ.n!u' );
define( 'SECURE_AUTH_SALT', '1Q rI:0FLQx?6)[_2E8jjxt-GFRZ,Hc$?{SY#$Tp,sQkX+x`y:R(ei&o8%,s*kv!' );
define( 'LOGGED_IN_SALT',   'E+arwR(Z+g(:H;i7 D(J(jrUH1^kRB+x+i9{Z-j}9|n.5*Ocv0FL%!^]w|a0Wf!_' );
define( 'NONCE_SALT',       'micTtqBhaUF4;|Ow>SaFt#4<dX8?cqvy SjK=$^4P.G#)eC:R5G)<C3`ChJplK)4' );

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
