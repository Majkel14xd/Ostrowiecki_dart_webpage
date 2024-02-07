<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'if0_35924713_wp970' );

/** Database username */
define( 'DB_USER', '35924713_2' );

/** Database password */
define( 'DB_PASSWORD', '882Sp.6yN[' );

/** Database hostname */
define( 'DB_HOST', 'sql106.byetcluster.com' );

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
define( 'AUTH_KEY',         'rstu1oob6sn1vay7i1zmouyhps1ksa5cgwa9sctntn64o8wpucjjveueyox4ag3l' );
define( 'SECURE_AUTH_KEY',  'fybccg0n25lksddp6rhef3d3rtglnpecfp2moyekkq2ejynomj6lffxds3gvkeyl' );
define( 'LOGGED_IN_KEY',    'sk08jcywhe5p0ooipkh1cu6m67oqpxqvgge3pzrbl6lrqkwnnfyhpdrzzfohicuz' );
define( 'NONCE_KEY',        'w161i96dfjiagykqmxvyzaw3fshcoxo2cb2whqqhvna0yrkhiw9ntlgjdlxzz4f3' );
define( 'AUTH_SALT',        '6ktzdqhsuvongv860hbxnhnimvod9uyv68spujdlatsfz51eqyc1dd1sio1wezey' );
define( 'SECURE_AUTH_SALT', 'w4xnrbeqayaqvt8gdocqw3u90tm16nsafjwuzbprwv8bpp6umos8vgpc17tjjjts' );
define( 'LOGGED_IN_SALT',   'ceal985wthtg1nbwxmuswf1aebdatcbcrwrctvpvjdhjfwaedittuahlriatdtzh' );
define( 'NONCE_SALT',       '7dll2mqi3vua9j7siif26yzifimvcdlqkxd4flbdd0zgwnssftyhom827xktukwc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6r_';

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
