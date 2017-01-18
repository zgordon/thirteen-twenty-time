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
define('DB_NAME', '1320time');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '?8QQ0~VGhm]c6?mthhL=00ms-v8f0-yMR:)K<mp0_t(pMWXVmSVA]ukR.23h!48]');
define('SECURE_AUTH_KEY',  '4T}BmH%UuU.j#}A7r5YA?+|)e<Rc>d)TyaOm,D{3hl,Hbq*%kt;TG,Zi>|7^.d>a');
define('LOGGED_IN_KEY',    'WpDyEr2UbO|;|fg:S-H~W$uTj4F!LBO@0?7@Rel#NCW{Lwy~U%w.-J7tZ.|zB)r?');
define('NONCE_KEY',        'V&:~| )(I/Zp_69mF=_Z&eV!+1Uv[)|q=8XgF*n-,V-,B*zRa2pdw^@`WK#~@`SY');
define('AUTH_SALT',        'lD+>fXC8cQ0KF-xxC#2x2NV^]>6tbmioP#3@4dDN4Jw+0{y;K;$@tavK5Drs]mcW');
define('SECURE_AUTH_SALT', 'x[@}^%R;J@rw }(q+6x<V[wY+hP*}1bPD-XaS=HeGTJQ|k,l`TcP_QBX${f+m7<%');
define('LOGGED_IN_SALT',   'nzubWj>jFP5Bl$Uo_z:bAxpEmcYcgj!RrW46I%V7hFZD|x+Ed.X9kN#lLB.|yh+=');
define('NONCE_SALT',       ']-OU!|L]|iO||W4mc09JYX#pW}8;R*r7<s%_T3TUs.WwsVQ!`vle!^$8x`{C+|Ti');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '1320wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
