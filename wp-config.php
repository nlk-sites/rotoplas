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
define('DB_NAME', 'rotoplas');

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
define('AUTH_KEY',         '8$eiM[2.m+~Mzqw~va%)%hzhS-$na+2^xy$JQ#1$^] O7D<1t`#=eY4)UGi92-5P');
define('SECURE_AUTH_KEY',  '+-!g/1#Zp H8SF..f(JEAr8BybLyjuRf=H|{ qSx>tG+pglSR@0fk#F-&#7Q5qve');
define('LOGGED_IN_KEY',    'PAa#:Sls|{D!Iv$gX-},L7jB @I05ZeF{|xP:tjV6iICR@>Yif9$VH)J|6XE.&rQ');
define('NONCE_KEY',        'pypJ4Dq@WdldwLN8%m]k_>(|+j?+-c`-SFfu-E]e~{O-DT94!pblgWex4)b %Tlo');
define('AUTH_SALT',        'my6iZD(ASJ|C~ W5%0^u>{E:g[~,5E7%!S? 0rP+-4K1,S|4+,(A{g==|@Fa,RqI');
define('SECURE_AUTH_SALT', '&G*Zp0P7uaC5GllsrZN#Q-hUGJ7wF+->xvjJ|[RyXMH[mn1~f<ZZkwL)Dt|6m85S');
define('LOGGED_IN_SALT',   '~O#fXJq6z0d%$A`aBz<s3+`)/TUHnx9t=05V5+ j{KhxJ+m]fe7+NHS{l@+C01a;');
define('NONCE_SALT',       'Xsg^OEA,&vAdwr[]=U*{{*(^X|``zU|YS&;} K&7wbs~+Y<tl)otpu~$.qJ.~ytt');

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
