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



if ( stristr( $_SERVER['SERVER_NAME'], 'gesture.no' ) )
{
	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'gestuzil_lily');

	/** MySQL database username */
	define('DB_USER', 'gestuzil');

	/** MySQL database password */
	define('DB_PASSWORD', '{=GtFhh^SJ1s');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}
else
{
	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'dev_hioa_magazine_splash');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}



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
define('AUTH_KEY',         'rii0aZ(6%)N6d5@{R*-3oi.i%)F:H/SqmYS)?Vl@0Z&yP8,]>3wh3d5tRCFv9(L_');
define('SECURE_AUTH_KEY',  '7^{h|K=H+GPWCU>2Na6D[>V;,=MV!W7@?>L[z>S *iHM0jZ0We}m{`%=^6P8m$Io');
define('LOGGED_IN_KEY',    'YU*(b-+L6!_+[?k)#,Z*u1)R<u!&]sxf)&n{8zs Mx8ZC5++lCW|D.M4cY-wF-6X');
define('NONCE_KEY',        '0{pa>RK&NWCD;|2Id2L<Sf>o/C`P`4f&N@KlG=/H37{-5~Z#Q<.VP^:Lc<?X#l$6');
define('AUTH_SALT',        '`r-{LqlwL}_w^H,B2.S`e;&{M7{.(udKAN-L.Y?!MQ%}H2i^YE X6n&7Lte;rm5U');
define('SECURE_AUTH_SALT', '-#ga[EBObzXTe6kZy[5-=Wb&s{1 {JbzBHYD{o{bN 2h]O{&DI0HE.a#HDsDkVY]');
define('LOGGED_IN_SALT',   'os t{2by?&sK=0)q)luL$YNh+NBZO?K|PaL`# 3luv^(-2-n#fWfY-F#=a1 W2}/');
define('NONCE_SALT',       'QU,qT:uTTy% _$?<c.((XLqqxBqp9|=z:<`]dVBK|]c-yq-4^#0-3?_I_wR7+gq:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hioa_';

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
