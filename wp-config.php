<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ubcbc');

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
define('AUTH_KEY',         'C@y+(Uz@wTix#Ho$4H0qa6-_->.C>X6bxhz$r!>uc@ OL%IAo9~-cQg)8Vdk{N?p');
define('SECURE_AUTH_KEY',  '3R+j_!$LRb-Lth$(l~1ywVk^Kt>1T$]/HW?ca|9vO.` oS|rh 9dOx:#G biPsO0');
define('LOGGED_IN_KEY',    'L^2qgU][{pNS(uR0YAyRv%Fl?:~#|}7_zd)%@aBGXw{F-ST1R4=;:d?*Bysk:rGf');
define('NONCE_KEY',        'rFKs*J?)WvN2:w1nq-2(k_pg)k15y0n |#?*wOwA2i@eB)>W.F+0a}P<;Ba4y^e(');
define('AUTH_SALT',        'Mc?aTN8Pv.kLrL><zRCM1 `*%o%k-A8;Q6e4dKfJM+8S|uHlm~.Cn7Ljg_{NI;@h');
define('SECURE_AUTH_SALT', '1KgiQ4_S8Y[_Zn}w[I:dGx @G@!fH<XQlL.^Heh8%#i]<#o:+^U;D_x#Zp+P_u,p');
define('LOGGED_IN_SALT',   'V5e<(l0bvqV.FB,SO4HIY&*0*.^WlPkdKBYRzuv*!=wx?n)U}dr!r8^kG:>e+4-q');
define('NONCE_SALT',       '~EKtgK?.1:XtLdK^&s{HsmpxI9*3Ej4s&`xwwL+w2@:%sS!oWlcy-?7g<z+Gjqq,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
