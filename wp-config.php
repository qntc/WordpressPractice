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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'TVf579TnZqEhtEHYnvwWoQyq0ajfF+5+cd7ZXZAvRQoRe7PwnyeUyHTxxD38GvRlybzuaBRCmGfw+u4bNFiLDQ==');
define('SECURE_AUTH_KEY',  'bjhXLkBTonOK4X+w2LGB0cyXwv67YBtxv1Fuc07z52V5vTa50/OG1+Gx8W/X+ZXYS8+0G0rmdDNhtjo1PtfHSg==');
define('LOGGED_IN_KEY',    'Ocs+r5KjeMsWNOYjDpm02VWwjIhlg9gn69tEyyut+HNOuR3vRrcsQ60e5p9C4mGDWiNyeI1dGrb837jTAvVY6w==');
define('NONCE_KEY',        'DraZuzNamKK50lNxcPfTCQDGbDrh0Q8rHIMFGdaoDRlf8dkAEZxUKtUfwyocgz0XAlN1zFj/I35MxHAD2G6yiw==');
define('AUTH_SALT',        'DMuLkjQ0vfVePjN4PGy9wIwNQhXqF89S0iIVjasscXOR5weQMOtJjGgmmAAqE/pSgSOj4Ore3OnUDk6Yl9u4tw==');
define('SECURE_AUTH_SALT', 'zD6zrIo4DmCNdcVnQS6xjdhJdDjr6YvccJ4kZ/312WnhdGaU85xtPiu5Io3xK3n2v4GNeWLGZ8F+CPDx9auxxA==');
define('LOGGED_IN_SALT',   'C53eMU+aW58bX9m2+nMpS+Zrjw5gkoNOwOWpVPHavsKZkCfnD4OxAXOPu/kAV+47xz+ke6/xuBewxR0fTmvfgg==');
define('NONCE_SALT',       '1fv8Z50uiZe0uJNcLm0VGbJC9TDiOIl8HXM+rKvZ4oKSwjKPoY2BpHRKWJ0cAcI8pNLnKzfYK/X0FtILmnTNXA==');

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
