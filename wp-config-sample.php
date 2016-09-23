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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'drogba');

/** MySQL hostname */
define('DB_HOST', '%user');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&:#3S*zi~5oyeP9pi-<B1Kc7DMa_T?Ymut7}|FDs*]XS%4|uR:r5SY-Z&|B&qO)e');
define('SECURE_AUTH_KEY',  '{v&N^FF]w=TmLP-xR#.6 `:)+|O!wSa(t.T;L0An)y#z@wK@Ht-V0]6}dQYS>_x>');
define('LOGGED_IN_KEY',    '51!?/A+JOMAU )@Ts|C_n)E->>=|gcz)p$RD/79B-~t3H_zKp;Y]IS +v6+o@T,&');
define('NONCE_KEY',        'Uf$n;f>lM%dZw7e^w3L56z3Jh1c_v7pb wx+TyAcKEr_-)pZA9!vdSA`eU**8>CE');
define('AUTH_SALT',        'wtMO.1G01mKdsJTTwKWqIct&oUm5}m8hcFUr<G6qX%9}8O<bzhG>*unKWIe5{~zx');
define('SECURE_AUTH_SALT', 'qKMPg:[qbE{VIj^X#y!]%EG?oGj2N;&q#8W=,Q?2}#$vuWasLh{A@Aw:_%LfC(Zv');
define('LOGGED_IN_SALT',   'pX`B_/?q}e36hE$M>.-+mu*P#2vh;Bg;N,W9B0uhDDIHm_g6K#e-+!B8L&{ 2/pT');
define('NONCE_SALT',       '-9FlK7?J-]Z.+a-G%h0{,1!Lf`2=9DyUga(FbVhD#+I]&XtCFsUChx++UJ-y2Y=;');

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
