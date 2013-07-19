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
define('DB_NAME', 'augu115_kartchamp');

/** MySQL database username */
define('DB_USER', 'augu115_website2');

/** MySQL database password */
define('DB_PASSWORD', '1P,ypMskr{pP');

/** MySQL hostname */
define('DB_HOST', '201.235.253.60');

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
define('AUTH_KEY',         'ebt?qp*9UniGW#L/omNdJR3&;P>{i{,wci{o{ci~b}LnoGj5-{P>CE!9U81:h@vM');
define('SECURE_AUTH_KEY',  'w93|A$4F4,m4?MWx!z{!EH=O)py|wZsiz03 A82.?7n+@)_zL^:}QITJs(.{E:JO');
define('LOGGED_IN_KEY',    '7 V g%4YJj/}Cq2NMp}wmJ|&zrb^Y5f.H1z[&WK}rFKw$[It@7#2*}#zQ$R^7vG=');
define('NONCE_KEY',        'N:CN|uuKLn>U>9tmqgjHIEct8S#Zhz`e 9%0X)_ofQhjmZcXP|`8#G@YH3:lUicK');
define('AUTH_SALT',        'YN@qe0_l>&N1PISiStnDFqL?.N}.ryB_pR >*O(cs4co+_J9Ni;I~T{ vbFY>a74');
define('SECURE_AUTH_SALT', 'nSL<5oM8$DS^)<vD,]%<Z/4s?fX=hg/,T%;hv54ss,5 p$|#aOT2OMbbeg6h9+[x');
define('LOGGED_IN_SALT',   '4T346n?{]bzNrqJfI_X4%eR1I{9B[_ ;PZe#=DT`!J$$1FShhSW0]1=/6YVdH(z_');
define('NONCE_SALT',       '7)E26gw8_r_X/m&&^kR.VLYq`(V{W{I!3(I&K9f(&uEC,0:d{r]Ukiy/r$i?;.<q');

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
define('WPLANG', 'es_ES');

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
