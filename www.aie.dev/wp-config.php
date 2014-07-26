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
define('DB_NAME', 'aieDBzdgxm');

/** MySQL database username */
define('DB_USER', 'aieDBzdgxm');

/** MySQL database password */
define('DB_PASSWORD', 'bgDpjgjHjv');

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
define('AUTH_KEY',         'QE{,F70$vng>^zgYQJvrjcUB3YQJF7>^8|@vokc!ogZRJFrkcUB4}RJF80>v:|@-');
define('SECURE_AUTH_KEY',  'S]HD;+x1;~lh+xiOLXTA6.L6.*m]#tqW*qXTAbIE{$E{<uf+yfbuqbIEQM3$y>');
define('LOGGED_IN_KEY',    'QQF^|vg!scBgQB0N7>:@od-ZK4ZN8[G0w|wlVtdC:VG1!:~o_teOaL5#O9[5#wh+');
define('NONCE_KEY',        'IXIEXUA{<@zkRNgcJF0RN40@z0@zgcokVC8RO41@N8|!o0@zkRhdO51O51~-5|!ok');
define('AUTH_SALT',        'T]OL2;~2;+liuqXTAXTA6.*A6<tq.*qXTfbIE{IE{<u2<yf<ufbIjQM3,M3$z3');
define('SECURE_AUTH_SALT', '@URkVR84GC:-w[|wdZ-wdNJdZGC[95_~l:-lhO~lhS8hOK1:95_tp_*mWStpWSDWS');
define('LOGGED_IN_SALT',   '<ebLfbI2B7,^n,^njQuqXTAjQA7,F}>zg>vrYJzfcIFYJF}>40@ok@zgcNokRN40');
define('NONCE_SALT',       'G!s~-lSOhdO51SO51~-1~-hdTDA#.62*qm#_pmWqmTP6XEA<yA<.qm{xubLubXEAM');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
