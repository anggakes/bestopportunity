<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cms_bo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E~:4dHi<O-|I$,A`#vZVX|?A;DUI>[ mu]3!0dfTGll.>5t@U*aQ(Ih~zh+8+$|G');
define('SECURE_AUTH_KEY',  '^0Oq*q|HIC5rB1|tQG6:}X^M?1l((*{+7-HP3D2aBp$4lzDFj]L*.Ugj=%Bs.*}]');
define('LOGGED_IN_KEY',    'w-m|iUpdN 9Fcpx$A-nkm2_DvSrq0hc-1$4 !WKI)$lpRd^J$tCX?3nnU1/rWf?G');
define('NONCE_KEY',        ',+e)OZl}KtcJ<i/0Mq,ZAb6+;>@?=%qtd9m=qA>DWof/P+bUijgv&F XE.sKFx+{');
define('AUTH_SALT',        '&F2=oRdW#~ED D<0dE@Vy:U|O3Ts$4a5<s<)QA[XV@Ff2{Ho6LFgRoPD?q6IS|MO');
define('SECURE_AUTH_SALT', 'Qzib*$m[K*8c<-I6HN[]Uo+_9V4DG&KDB4g+|If-BGUMF#hPhdTVj=A@K+dqW Cn');
define('LOGGED_IN_SALT',   '^X>C1xM^pP%wvP&(G~Sa<K952Lh4: OVN&)k8yT^d!8KMVV7J*}2UP$C{kosPmjw');
define('NONCE_SALT',       'G+Dte{0|oa+4wU|ouf;5G`.I~C<NFa,}aC3-~m[(H5Pem.u?JEBRlk}j=&+t`#|H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
