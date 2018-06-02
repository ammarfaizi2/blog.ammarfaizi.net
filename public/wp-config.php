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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'blog');

/** MySQL database password */
define('DB_PASSWORD', '858869123');

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
define('AUTH_KEY',         ';`K3 q@>C!G^kOkg#MPbb!&@H#hbnh7t_H#Wjyf;zctQ;ZVK;481!-oL>4|5>Qdj');
define('SECURE_AUTH_KEY',  '5?9((%c`OgX=_&,U6/&=<#P*wf)_$RzJ/3N#:4A/@@>j/6tz*J^Yx>*9VK&nroWJ');
define('LOGGED_IN_KEY',    '{4[kUsq[i<Mh3xEHXC~h|o_88]3mHpI!}HSpH&#nH6At433,4O1OY}+K3<ZX!NhS');
define('NONCE_KEY',        'dCxV[tbnlo9$xMGjlmrB/G$^%AtG ^oG&!F_ jQ,s 3V&43UpUTIj1#6JmMI]FqE');
define('AUTH_SALT',        '9a}-wteiX!XT3Kud$|#UY|(l;1y1MIqlCHcygkLKpIqdkH,v>zn5=AQeJ,jqHgF>');
define('SECURE_AUTH_SALT', ':Vcl]@!Nm94:|aej oeh[CAP+saOc`0ynf3GTPM$4K,z)]QZ(4g9g5bJSUG?M)^[');
define('LOGGED_IN_SALT',   'wcXJs(B*0wIZ1^:bzr)1Jy?A,+c7x2*?y|[Oje$+|1)_qQ_^98%Fpk1t]D.0_dh`');
define('NONCE_SALT',       'TG-U$5v2Jc%s0QS7wY&y@v9zUX2f$/W$y9p>*8^*Y=@5#47{#R_zMt$A_>f/bv?%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
