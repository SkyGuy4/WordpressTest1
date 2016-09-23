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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{q1/3)7<oLrOp3a<{KS9;@M P*<p=r!jC3N{${zP!)0K0&Pw)|jruX/NM+lHZP_>');
define('SECURE_AUTH_KEY',  '9TtT sYa6.Vdrv[C4%L27D`b0knS+J_s3:W. L^gDPiAo2a64ecx* GG^@052qCR');
define('LOGGED_IN_KEY',    '= Y4pZb~qZdl@AntX;%S21Ew)kJ@.A484:uM9vk7}V0-hexOhoMq7X_Wo[:Hz>y7');
define('NONCE_KEY',        'u-E<_;swaFMgTG.)bF@d1*} iD-i!Q8)_iT|`i]Zq~h>P%h3HkNOO*&KYdiB._Gk');
define('AUTH_SALT',        '|LRQbQSf;1i49LjlhI5;PLNZ^l?ZnilQsq&X%QIKObz4&$75|y5~QUB05:^MwCdM');
define('SECURE_AUTH_SALT', '!CpU91h$ifMN_~4IUAxY%3Pd,^5e1cb=b}/5%)_sz!$h]9cF5S*t/>N_)Y#vONEN');
define('LOGGED_IN_SALT',   'LU2PiItX6P:&ikQrT8U D5^mx_ RgOK|M.Lg291d:J_YDEN1EJtnPn5il?Ml$^6&');
define('NONCE_SALT',       'YiDax83^4*(}%z&M{l~v+u[f&p9]4g>2u3z qF/s-rO01O<h3F`Zt#kBC8XM?nN3');

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
