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
define('DB_NAME', 'swenka');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&)s5+;-_,+6U/i;J@ai!SvxCTSPx0z=}hBP$q~7Ot&W_0v$tMq0g(T5@JZw&]}&3');
define('SECURE_AUTH_KEY',  'Ry`XN3eZ.y5wnEy24c27B+]C/T /-P pH|e]Pr/M!tM(Bo5Er;UB)I1-9-B=bVvQ');
define('LOGGED_IN_KEY',    'Gp3,uVB@k[XVPS)1tSp*Ubi=d%s=![&za9e%?fh`#hQu`EO{jt.urqds90)Ym](|');
define('NONCE_KEY',        'RGz!x$J$q^s~D:[,%K)zA1@d-3pQLr 7B5Ytc#|9+BFB7B3d;+-uykhmNpbh$8rK');
define('AUTH_SALT',        '8}[13]D*dMe.XihiUSRK>B4$KU@R:u%$#UN 7t&|e/Y19M .e9U}_FvtXKr85P<=');
define('SECURE_AUTH_SALT', 'YqeZ#vmag.z[W,,48PFhoY% U2&oO`z4SF;~]m/x!,T*5u~TYV-)Kb1-AiSy@xdC');
define('LOGGED_IN_SALT',   'a]15W8A$U?D|SW2?hv:B(ogv%=jU#)idRYt{Zg+;vcn<w|1h_d;lq^4?v,;:t%.}');
define('NONCE_SALT',       'bM1Khi}M?+@og6[l OEw@X!+-nvXFkw:SmKBtu n47+OvKzz{XR&.p>_!<q<lt/@');

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
