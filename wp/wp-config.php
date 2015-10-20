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
define('DB_NAME', 'goyito31_posts');

/** MySQL database username */
define('DB_USER', 'goyito31_posts');

/** MySQL database password */
define('DB_PASSWORD', '13(.s8SDP2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'h3uuhftfnk48iwt2gouqa8yzg6hzwhqnrbcdzpkuxxg5cwxxsmdqw2y5x3fwqi01');
define('SECURE_AUTH_KEY',  'trdffpmsvnfnhvomo3jgae32twadsvjme5zd5c2mqpgxzi3cv2v8gaqeiyvqjfnh');
define('LOGGED_IN_KEY',    'o6ymsy5bbmmwzihvueibkei51lwllmr6ylmjecqedcid6jzzhbtkkv8hnuzqehhg');
define('NONCE_KEY',        'rnicmvsvcflgwz6mcprcvzuxvu6zksxf3dglv85qq7ym15uf6ccvz6ppi0qemz7z');
define('AUTH_SALT',        'd6qyxtpsxdrfaqz5sxyovkahks7mjajftvjmldu7kboy7dss2htrhgf5zfyty871');
define('SECURE_AUTH_SALT', 'zxunxwxxxuxeopmuitglqv4c9fpsi1qpaedpp5anluadbegirv51w27lorcadwis');
define('LOGGED_IN_SALT',   '3dtr4lmzoei6z24vgv8ntj6ed03vtvshyebkrxpaomega9eewbbvspx9d9peujwo');
define('NONCE_SALT',       'oozbwxi2tf1ga8q644cv0u3sxx6o332lrerfly0c3ruswydkp4uuyi66qmamkg76');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
