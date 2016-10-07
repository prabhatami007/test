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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nova3573516060');

/** MySQL database username */
define('DB_USER', 'nova3573516060');

/** MySQL database password */
define('DB_PASSWORD', 'WB-vPcg32=1S');

/** MySQL hostname */
define('DB_HOST', 'nova3573516060.db.3573516.hostedresource.com:3311');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jCcdxFrG44rd@@G7j V58');
define('SECURE_AUTH_KEY',  'ZzPvd1Qy@YrgfXnZB-LN#');
define('LOGGED_IN_KEY',    'h!TAEd*V=IZp+TRMZ6#XR');
define('NONCE_KEY',        'sB8LHdk8HO%hO_Yp6HYSk');
define('AUTH_SALT',        '@2OX%CdZCkSWX4%qYrcb2');
define('SECURE_AUTH_SALT', '2U$+1Jd8C5CRhBC5BfM1R');
define('LOGGED_IN_SALT',   '&tUqUdSd70qxzOm_W2XEv');
define('NONCE_SALT',       'RgCQzfd3_mS_HnSXU7X3V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
/*require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));*/


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');