<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mipc_20345177_name' );

/** MySQL database username */
define( 'DB_USER', 'mipc_20345177' );

/** MySQL database password */
define( 'DB_PASSWORD', 'papillojetezoro123' );

/** MySQL hostname */
define( 'DB_HOST', 'sql311.mipropia.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@#U6AMt>uuyVs;Yr)GH>7u]L@8+5bM4sCNOT{c}%-G$LN]Bn},TREs,4;1avQ^.?');
define('SECURE_AUTH_KEY',  'a}:m(92dm00yr``Nn474iqe`T]W^vNrO,~+[XDL!A]W-CY?+Km$yj]9sUtzMa<$|');
define('LOGGED_IN_KEY',    'wWV7?}VBYN)/*g*f,/acQ-bx3 | >Es*+z|23~YyCr`xup~%+{Aqn7,bjuymtLS2');
define('NONCE_KEY',        ' -mUHQ$6x{/GFFHCIc{t_^19~#MQ4j^&[.x2.#,_KDs~)emn`yV;nb}I]=d6k[]+');
define('AUTH_SALT',        ']8=H_WkQ)aAkZYt(yy??XKDXQ,p1ZvBf2+E}vo?_1[s=IFcZ%phhwT) 3>|rr&%Y');
define('SECURE_AUTH_SALT', '#&5gc;AGl5Jd*^I#0&xSahi5zliNjy+w#yFKz>O.ZO*PtFKK5<Ej3;m,!fF-Ij|v');
define('LOGGED_IN_SALT',   'U<V%qz;xCF/.At+%Wr)tt/(Qe-(KZ==l4a`5n;?OcaEu0*lHJS|#57:%ka-?)t;G');
define('NONCE_SALT',       'WUn1b@|/+M`P_Pz;LXrYqA%aFutFX`P7[ 3_B*tPIWd^cWaec/3dI13HZ]afj~KF');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
