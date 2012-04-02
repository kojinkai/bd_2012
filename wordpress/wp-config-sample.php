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
define('DB_NAME', 'bd_local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'challenger');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'BM9H-?%&ccNIclk/| NNr6.lwBPD<g&L0Rd(-QyDEB~P/bGYDGwp5&hEnWZ-<~ZF');
define('SECURE_AUTH_KEY',  '}O{9%vHV|xsq!F>ajZW*|y7[$u69i1XC5C`]zS$W~ $u#AEp:/$~+2v5]OQG^_>T');
define('LOGGED_IN_KEY',    'oSKN/ZXOA*z uf*j?eC=[AWY+z$*hqeYq0(&ww6];uc<cSfdl3a+b Vnw+m6Py7k');
define('NONCE_KEY',        'S.2s +=Nj614#:BXz#5A:<I(EvgUV4d1yW1-s_N!OKCJV0gcc3%t,3HgJk9dFK1O');
define('AUTH_SALT',        'XNiwz%aB2UZrC+t0Es;ftt<M+-Fk.5YMI^1M**A}aqAK}.GW&[x2(@Xrz!{|^+Z5');
define('SECURE_AUTH_SALT', 'cj?7lq4}Obx~t7*1U#0p<YPSnX|tS;V]@)Wo|>a:]T%C%3-!DzFY*+W Mxa)+QHt');
define('LOGGED_IN_SALT',   'OfK#SoO-JoJ*@e,n4v3dk--nJa+n-*+7a9(PYIv2h@CN$eesZ>R~I+yMY$md@&IF');
define('NONCE_SALT',       '_Rgz}tXXN(d=s-e%1/ !M<^MzZDkJ=cBrNzNS< Blktg%fF-0:JnnB[xUiX &;(?');

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
