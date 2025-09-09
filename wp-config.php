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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uxcreative' );

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
define( 'AUTH_KEY',         'Rd+.ff?G,EhF%gBTkn^j1co?_cm;$T E-RwoF@:;0CU}wQYi^bN,qXAK: T GmAV' );
define( 'SECURE_AUTH_KEY',  'ywpqHVEGtSuvO{)nXzz[jIASH-$*x<8qv]>?<31T/%D~BQ6hVugak^h{n@FDN@Q ' );
define( 'LOGGED_IN_KEY',    ']9Svc^qD2M=P1-mv|tjp){h;UkL+??Lp~?L+32!S7(ZCqr?^+Nj_cyZ+8k<LX@V=' );
define( 'NONCE_KEY',        'U9G3kx!y;&A><L!8Dm1m s{4!&VgZ(!E-!4)Ew`V}NlL+GX4MVj=8V9DiM3  F ]' );
define( 'AUTH_SALT',        'cA.XdCwI0&K2{<.HBB4wHryV!F(2?75cfmw9gT-gVQb+ `W18dJb.9vkZ/ur=^$1' );
define( 'SECURE_AUTH_SALT', 'k.U*o*]+F4l68Ph`=c;UlN*J=G1u&MHM=:MS%i%9W1@wp$6]|IlN%|)4,A,V`%a~' );
define( 'LOGGED_IN_SALT',   'ORb_LSI7m/.kx]6H;L`zA}NFW<crFh*m8g&4k3o`hL6j:hg)`=;9f#n%1*jn_uDi' );
define( 'NONCE_SALT',       'Gis#W({g~.M|^,UWF.,DE2d?:vS~64@`Wp>mY#`tFu|9ZW?Sj).,kwtGQ**vm[pa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
