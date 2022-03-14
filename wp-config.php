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
define( 'DB_NAME', 'Anglia-Prostate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'dd2LXr8K72ZSOzXrq5pWUUN3MCuwBjBmBpb5DQToRNDREROMK7oFzjLcjt7g9nJv' );
define( 'SECURE_AUTH_KEY',  'dGfc720Xjo2FVnzDvL5zTOewEGB8b35Rt96EagLsk38YfW0FPlgpIziSb4rbetxw' );
define( 'LOGGED_IN_KEY',    'LxHEGyncLzx8g8V5gK11Otq3bRLBqUddz40Z0wVPLhj61kfSMG4u7KaADA64JqVI' );
define( 'NONCE_KEY',        'lduaEIsEhosan5u0t0uPT2cpT0IF811i5tpQxIhkcS2MbsccGSu4oiKEjynIV8Hy' );
define( 'AUTH_SALT',        'dmmjdI71h8Uzq1aPJdWYiqht6GHWUUOTifvltnnUFHqB7u3C2ILTT7vUcpdthjX3' );
define( 'SECURE_AUTH_SALT', 'dPBKni0ctuVmyOM1OUCAgjIXXLNxuDioaYpVZNfY9WUIHzov7XDC3m3A5ZypooL3' );
define( 'LOGGED_IN_SALT',   'wBfTwmBvdpS8nNJqnFPUIX32vcIVCor0bymEtB3fCLBxsivAzGZ7jfrOpU5emIrk' );
define( 'NONCE_SALT',       'XGgjg1rEaXofhFClL4fIK6HuIbJCyWgOP58rxaB181oDT680MOVudABrIx6d6UE9' );

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
