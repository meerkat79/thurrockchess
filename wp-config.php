<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'chessdb');

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
define('AUTH_KEY',         '(9e%Yzrw L~M T]f{zQ4T#d{5@ltr,+xdu=/CTE|RoO*m.>>rg_{J~;vBF$1B>yM');
define('SECURE_AUTH_KEY',  'b?y$56HX$,3-e,AV%GBNbzWdWLEaO4B~f&^:/|Z6A/_g|)2IM?-?Ae_1*U&M#mfg');
define('LOGGED_IN_KEY',    'Qw^Gqu?G933eO(I~6ufqLG<y&r|zGU]i^w#l8:V0oBX?)s]ZQ4SPon.rF8(HZT]`');
define('NONCE_KEY',        '`OA,6TD1g*i7s fL_a<8TZ,ZnVV(d6=Hz_h?+dkj4&GW+$)Geon0Nr:Mep=SZggs');
define('AUTH_SALT',        'G7sb`wt$zJLpK{~fgkgnbYv38OAAn1Fd0z&Ev@oHV*.My{FMkpx1/mhkPkZ6%@Pd');
define('SECURE_AUTH_SALT', 'RWqk8txJQYZzfn7q~6YMn6r>v^3Es]F0H0-`7;4ACd$)JU;N2J`ihlpa-EsI#2[0');
define('LOGGED_IN_SALT',   'v:[H+iz142gjA1}UJ(G;ev%Y~P#+i<p)N{V(}?(Obh{KrO~Z5f0trYB@4txPh:_:');
define('NONCE_SALT',       'fQeTsE(LR)$5`f>du;/d(-nLV1v3}0v[YjJtPJG`}EY6.t1;6FGJI_IS5`a@ho[u');

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
