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
define( 'DB_NAME', 'blog-site' );

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
define( 'AUTH_KEY',         ')={Y%&Lj3b>rmL/zj=8(jAy-F>6<T@^L?VR9rAxXwR~6#?DOpQlt(*rKtz15[{<m' );
define( 'SECURE_AUTH_KEY',  'ZhmldSy)&K+sEU)`j;DiCgQJKSAOa4c;I&]`(K[~fyP |)sT}2f630awO/yY%AN}' );
define( 'LOGGED_IN_KEY',    '-M|J,[.gBqlb$uP[,/ygLCr%Qz>%v%,Ub31$M;}+|Cd9Sx7p!=X,_#73qqS45u/i' );
define( 'NONCE_KEY',        '0U!PQCF06 *U^&jq^TH-NK-TRM]E1,aIAip@-l,@#4nyB{%T~(qzHCr!rjW]dd)O' );
define( 'AUTH_SALT',        'uNxp6QgHuwgweWQlgY.&h?PKl6ZJ+rl RA*ZgL%Eb0`(ne7]_!pd|eWd`@Z!~b_C' );
define( 'SECURE_AUTH_SALT', '#O!_mQxUi?XZ7#N>:^Srj#.1cW~|%e8C wMOXgLqK[MFX+tq7?v`%4iUYnBueGx5' );
define( 'LOGGED_IN_SALT',   '1ct:rfltN$Dl13@Kr<Z)os3C^&jxnsXys,A{v%z6e3hTbA-8GBl<NZbB.]*JgD{5' );
define( 'NONCE_SALT',       '*vTQR3?{Y%9Ns/@EOX447ksLHPzh)3~~#Y7-;S+6pxV{8otwd*01]6<gO~Si_|by' );

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
