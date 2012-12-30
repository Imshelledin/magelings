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
define('DB_NAME', 'magelingsblog_dev');

/** MySQL database username */
define('DB_USER', 'magelingsadmin');

/** MySQL database password */
define('DB_PASSWORD', 'Dumb13Dor3');

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
define('AUTH_KEY',         'Ys9?$Hk+ %59Q?t.Z4rk>;60&Se+G[k`[|=VDj3vkxa6>STcz}6QPeh7|0*.e#KZ');
define('SECURE_AUTH_KEY',  '0O(5 @k=9*M7=c<rM%-#,4_mEGj)PJ]544@`,U5e-G++Y{vP!YAL!F!5orVbi-*u');
define('LOGGED_IN_KEY',    '_{YSb$Y-LW^E]25^]~o`3Xez9J8CMH*1gaoxTS-DDN!G,#f*X&$Dyoa[g31Qso(c');
define('NONCE_KEY',        '{MGbo`a*Vg;|{S8$`1._dA.,2eN2}%3RYq+wp:8al ^3Iap6!5+-`K]t6r:uK.BY');
define('AUTH_SALT',        'biTpeu+(I&iD]1&B;+%ZAWd${SLW ]PBY(MBYz(mMOXq8V[yFr3>2;mZq{|:RVx-');
define('SECURE_AUTH_SALT', 'rS[3X5aO+|cd#U<Ri@x[+LI2*K^VOb&E2?SNt1:.-WgaoUBrT(jqH{fI7e~eCAE/');
define('LOGGED_IN_SALT',   'V@n+SC(w`$llX_x6]dmdJI#N*Hw,l5!?z](C7w@D1.yqY{2 ZJcWd(vIV]RWMqRt');
define('NONCE_SALT',       '^I(j!;+g}lRdcx$wl;rkFuFR:uH#Wo4D3nx1WI_9y}kVt9Q/cH-*^cT82cc.df @');

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
