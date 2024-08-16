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
define( 'DB_NAME', 'dev2_wp949' );

/** Database username */
define( 'DB_USER', 'dev2_wp949' );

/** Database password */
define( 'DB_PASSWORD', '9p8S!9.12c' );

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
define( 'AUTH_KEY',         'k3mbgafvx9sqcb3eqbgcnjcizjmwj07knnyi7lvpop2vlbolwkfwigma6nbxtvnc' );
define( 'SECURE_AUTH_KEY',  'fs5v2dghzgakqbqwswjhioljkxspoadwnnymzylldjr9jkfzjiwctbiqjhxvqm9m' );
define( 'LOGGED_IN_KEY',    'rq4efm5qxqdtfmriyn2j8qiwkn1dyolkadsf1r253ibt4ep1wesn858h9rs8jvlf' );
define( 'NONCE_KEY',        'emhldhe5ldp7bgkt85u83qoptufeyoggieo37qbdyhoxitus9vrjggeaqpfytwir' );
define( 'AUTH_SALT',        '7idtzmpael98buqjnvjdpmpz1esiihnpcxbbwc2jjriqf8la2i7nqmpa8quc5pw8' );
define( 'SECURE_AUTH_SALT', '81bljlm54ydujktzwzf43ar1q6s489ybnlqtppsmrrgnmhjvxgdsujdzjs0ie4ak' );
define( 'LOGGED_IN_SALT',   '9lz7k4ltwivexfwqcdp7zlujbgp22lbphth9ypmt3ky75lvv2y0mqkrango78aid' );
define( 'NONCE_SALT',       'atob7xflkxvuuggowmo7ppxywimzybl4kzlonn7pyzppkhv2fec3l2dtr7ugl8tg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr7_';

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
