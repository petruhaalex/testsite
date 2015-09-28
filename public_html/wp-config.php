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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'alex2000');

define('FS_METHOD','direct');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'NH$5y.V-i2]>.wl`Du(27@w-I+A6|TX7uSVQq+Qq|`Kgcn|H6_ln_Vh@o6R3RP|W');
define('SECURE_AUTH_KEY',  '.hSE%5~DD:>x,wGk7gv<&0WPL^`CJ/cF3CQ9##0WBJ.UkiC[|OlD _o%Oa+L4H*I');
define('LOGGED_IN_KEY',    'E /R!7yv,+Nf80^|98b/U53w0>3;JC?2[D#L5gY?T)tznoWM`^Pk!g`-K8D+17@,');
define('NONCE_KEY',        'j//d>k?Mm+T--FQc8]J+yj={yA?,`rM/WsQe+CVsrdJDwbZ@A2^|]W-G,@N7,,WI');
define('AUTH_SALT',        'N3Rg_zlW|Zk??{. -#vCt^t04yk}(TR7Uw~F8f-u}hN[IT@-*RmSc7|:g-~)B^4.');
define('SECURE_AUTH_SALT', 'TIbYa/~1!Md0,)/>{rexK!0Z:Cxoob+y-C,Z+K.FqM-O|p^oos8y^sjKXP{07x0Y');
define('LOGGED_IN_SALT',   'rbwEt1}y$4N=~|4AA@NzWa-~5f;h>VRCl*vRkeAfwp1HX+|t*Va40u|cG|{w5;0%');
define('NONCE_SALT',       'c/qH+?O.>+Bag6X>LNg,aBpWGG.,o!-ms3PP@_P2gzP,{]ggy-^l8+2H}VEQa6B&');

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
