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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'business_demo' );

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
define( 'AUTH_KEY',         'JJLz/,2]C4/1N`k=bQGRNSvfLvp@8}|AcT6L9|WncYZId(_1v4dYhIN19+_r]5d@' );
define( 'SECURE_AUTH_KEY',  '-w~?43j%bV%%Ao/j!v/Id VECJi68hrUm#J-uO_9Vx:ExOb q?6$M{)UnJdZ|YrX' );
define( 'LOGGED_IN_KEY',    ';AiB:T/g,}9,[^ZF<@b-iV&gs`HJxMV6sRa_i3&g&{El8HcRL5D1fAU)k(_4me*<' );
define( 'NONCE_KEY',        'SqD@CfKs{Kf~08c0OH1-UA=Tgy9-#)$i>MsPeBR:PYF76tT*-_Bh1KK)}g+rjJ>t' );
define( 'AUTH_SALT',        ',y(wGq7F3z5JvM=<M3JMw&G[ut6|O7(?7HD9`SdHb=UK#ov@{YfY`esoYcy}F;BV' );
define( 'SECURE_AUTH_SALT', 'I@G;A8<IRw=wAM44.[tHqK)y?m3qfc^MF69%OFoV,:&y6U!~gh-OVXHh&%Gi}#(d' );
define( 'LOGGED_IN_SALT',   ']!Fgbw3BE@!TYq8ED0S,O2gI(&Gb> ~S=!8^_6?<k{vPd_GQg 2|@F6^NU1=*M2t' );
define( 'NONCE_SALT',       'siB$]f:(&6v0thK*(]ra_c}Zq8U]7JKM<`nLK/Z*4b-RDRU]GX9lk*LBRS6!/1-e' );

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
