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
define( 'DB_NAME', 'portfolio' );

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

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'UvocODtru5lMzkyq433NWu2JohzqGAsp9oD697uGWODzLc5rhuHwDeOaKFRc04x5' );
define( 'SECURE_AUTH_KEY',  '1yvlGzZJgpGujNOqjZMcJWTAsvYOETEvGEce0siPzZ2Xhw8mbD26RNtz4eH5fzea' );
define( 'LOGGED_IN_KEY',    '5MhqaRFO16CBg3QM8wXdnvbzlAADa1bROpyRLRTScOSMn6i00WGbcYrD9lV0FnxD' );
define( 'NONCE_KEY',        'eu6IP6SxTJKvxWz2hhOmtHe8J6ya3IHpbDv3z66gQIjiIW7jVMiHfguKWL1B9l1Z' );
define( 'AUTH_SALT',        'zbVqTc9v8keZraH10tYIr9OO8occDEfi3LHjKXqouLRgznablIO5MIE1dMNNJEM7' );
define( 'SECURE_AUTH_SALT', 'iPSZK6w2YMqCA1DtqyMva4sMvldaF1MTPIkMF66Xa6F5p1KuZR79fw6vrZ2tyDdL' );
define( 'LOGGED_IN_SALT',   'TasfZnxGBC3RDZDrT1nOitKjeL8OSyEzZJ9b2tY4QZnAAzOkUANi5RLAGsMZDI6V' );
define( 'NONCE_SALT',       'sFHsQ1H9cNgvVJpNU4qKi2s1M2eTETRxIgK5XUF2vxzxmm23StQZZRKjGvUI36zr' );

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
