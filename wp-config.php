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
if (file_exists(dirname(__FILE__).'/local.php')){
	/** Local database settings */
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	/** Live database settings */
	define( 'DB_NAME', 'jiml6348_frictionU' );
	define( 'DB_USER', 'jiml6348_wp113' );
	define( 'DB_PASSWORD', '222222' );
	define( 'DB_HOST', 'localhost' );
}


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
 define('AUTH_KEY',         'ikF18H|NaZZhG%y7n!1Z0THlz2<WX*5!*+YZ}BpG0@-E;lrgZR<7p&/_(^MfV<g.');
 define('SECURE_AUTH_KEY',  'a5`yaWI4Xd.XbF-|*]#kzt/~~-g|J$oo2(@bUa}^~f{pDy]LVK?v)vLMRg F l7L');
 define('LOGGED_IN_KEY',    '09vVCEB^!kc?yOG|QNm+QjdBS+QBIG+=*+p!ZRQKKnKwE9{yc]O%g%34$LY-]3mk');
 define('NONCE_KEY',        'cy`x~HAp/)OS`T7+,V5XRD+Me+EN^Y>14/.OYC/v#O4oj1wKHn>-6VhMv;b-/]eW');
 define('AUTH_SALT',        '=8E?!onM%$C,N_DW=i.|DgZ*1ixAICpZzzJ-D(TybZc~:}lqE]bRG$j-vD}9 ,m5');
 define('SECURE_AUTH_SALT', 'y<`Bip<8C>uDt81J+}F6^HuL=DuVf}5;zQXz|LHzmpZ}o3kT&G-V-3$l5f/(a8{2');
 define('LOGGED_IN_SALT',   'N+<%|rAP.w51=$Kj:]Jp-INFN)yUY_&wcMeuyciK]3M8;zJA;?;8A*n-$zNTQPbU');
 define('NONCE_SALT',       '~nBcjam]M#//^!R{L7s@*ylnQ|#{poNR~C|)_sH-vbqAaA-{|#_ba/JuV}3T]Dp/');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
