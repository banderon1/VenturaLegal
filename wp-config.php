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
define('DB_NAME', $_SERVER['DB_NAME']);

/** MySQL database username */
define('DB_USER', $_SERVER['DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER['DB_PASS']);

/** MySQL hostname */
define('DB_HOST', $_SERVER['DB_HOST']);

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
define('AUTH_KEY',         '{VODRS&GpjF8(GW#e1tj[qut.l.G!lj}%II7Vb,el9z4yK;;~bzT|7[0$nsJiJy>');
define('SECURE_AUTH_KEY',  'c&yEIbeh7:aF|<H#O;Ci?;&k61dXH?;SY/Nd%?V=I,q=KSrEkwqr_9O,Q~U`rWpG');
define('LOGGED_IN_KEY',    '1{hW9.bLZ~zCVnGWVTv:.zVDgm<-#9(1K$W-{nDK,FB#PM_XhMg))n`%L!K?q0|{');
define('NONCE_KEY',        '1b+M[tnEn>8I`CB6:j|2~RhfzS7u[{03&hIf cp~6:g:M`kuX)jhksd~v<%?q+49');
define('AUTH_SALT',        '[f!L,>^3,:xQw;{=7m;0pXXp%cOP7b8Yp~QGr{<[[OZA4Q2eCif/ZbBmeWH(vr,:');
define('SECURE_AUTH_SALT', '-uImTF75wP%^&]ki%XsE?PwxM:1A;GK:7@kUqjfE@?-YiaSV0-eQm=`2)9p&c2=P');
define('LOGGED_IN_SALT',   ']O|Ht[m.U]a|&K^Mf`Ee+c%ZX$t{*G!p8]nK9`j;,JBaAl^9+%4?EmPM7wGp(Z^}');
define('NONCE_SALT',       'uPK5W#64X3G<;$pdA4_u9o(*$0KoKqgYKi9|iLcsy/-h8=7Pd*nIai+huG^rO.V]');

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

