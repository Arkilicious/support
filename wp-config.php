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


define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));
/*error_reporting(0);
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);*/

if (!function_exists('d')){

	function d($data = array(),$flag=0)
	{
	    echo "<pre>";
	    print_r($data);
	    echo "</pre>";

	    if($flag)
	        exit();
	}	
}






if($_SERVER['HTTP_HOST'] == 'localhost')
{

	/** The name of the database for WordPress */
	define('DB_NAME', 'raytron');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', '');

}
elseif($_SERVER['HTTP_HOST'] == 'dev.codekernal.com')
{
	 
	/** The name of the database for WordPress */
	define('DB_NAME', 'raytron');

	/** MySQL database username */
	define('DB_USER', 'raytron');

	/** MySQL database password */
	define('DB_PASSWORD', '@L~Glkw#M.A{raytron');

} 
else {

 
	/** The name of the database for WordPress */
	define('DB_NAME', 'raytron');

	/** MySQL database username */
	define('DB_USER', 'uraytron');

	/** MySQL database password */
	define('DB_PASSWORD', '89HBY6fc?/n');
	
}


 

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
define('AUTH_KEY',         'TZAhu3{hNRcy9[n% (4Ez3pk}4]no*!3xqarX6?9jCKii.p<7yG?RdXv5}u);GI7');
define('SECURE_AUTH_KEY',  '?U@(R{Ge0jh6S@ttAA0.{shUqR2x;shpC&Fe44-D*?1h Yx-qH 0cSBidz+ ,4}4');
define('LOGGED_IN_KEY',    '8jdF]f/6_R:^PDf!,@4,v.;gg;Na0,Sm bLTH<;s?3=G5hk#kK]&}Qvu3Jr+@sD@');
define('NONCE_KEY',        'F0~|XXfCk245#7|DA*oi#8a <}ph zLP>VSo&nbDn=AgA)ChYa7|Zws[C9BeEkJq');
define('AUTH_SALT',        'bn#09T7jc1)|~^eC6L va]iqRqs[y>*]@a]0tIyxynHNIXSYsgfyRa:A!]!7%=lX');
define('SECURE_AUTH_SALT', '[v<KI`:WlASl29dt3 b,CTFKK|QkS^l^G5ci?tT`AfHj!.KWlYn[f)t>:N@dD#P_');
define('LOGGED_IN_SALT',   'IJH72gn+R8!@_w A(9.nGte0i(ic-neQ%0!xv(iaJ?4*~ao%]Rn&,JSK?8SVS|_y');
define('NONCE_SALT',       '@8x&(EW)^Zu3V#rmu5X~qvY[a$=f?^8%1_App424gw|ebv?s`~s&ozg|-XUPtuy0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ck_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
