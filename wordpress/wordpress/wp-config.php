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
define('DB_NAME', 'mama');

/** MySQL database username */
define('DB_USER', 'juan_balbuena_');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'LTm/gIw=G.|{Bel|`}E8l[d9[ _ir6`!1}n!tOTqpc}bg9@1?p`V.2Z8[y]6I?jw');
define('SECURE_AUTH_KEY',  'P;tnQ--:ys+`+d`7P@8#+^Zjk@!c72DzK<OL6 R;*Ak]I;3.0eiKqFs:.}pq7QDB');
define('LOGGED_IN_KEY',    'HZ8&3EQM,f2`Sl~KK s~hshXOyTl-,s;M0$YRysc<Rm|kuL+N/_2@Rl0NY888#}g');
define('NONCE_KEY',        'a%&TN)NV0zZwgN~*r6V-(|gdpZsrf2K)&~?*v_8)D~i]- ?:3mI|)(j4zyaV{&Yb');
define('AUTH_SALT',        'ZU>j<*!]&Qw)3);b& Q1On+a+_;ye? .lrF/PV6|5 c JI|;Ly?C-J]9~ W/}-;1');
define('SECURE_AUTH_SALT', '0}kO`z[X;mGhoOYlD>7+$ns|Ap8eGr#ylql;V*oe0xa7*u$paKY3%T -jo{*j$68');
define('LOGGED_IN_SALT',   'N%{V;@XnO-_&o;1K#T[hd5Zs5E<nR-D)mJq6gOJo&sxE$x(YZmTK--f<@SKFPky<');
define('NONCE_SALT',       'AZp^:e}(l>2=evF`e`brH+YgkHKk=D&_OtPs=laW+/=tGTH<Q5*xqf;nYxM;vtMn');

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
