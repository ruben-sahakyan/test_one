<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '^aik~ ^bx_;u6B }Few}TUE%5C3Wx-D E;Z)quS-cP6ftK`7MY&g&;8gK]VR2Rh3' );
define( 'SECURE_AUTH_KEY',   '!R+rcBi6fToOzlCNg:$Cxp6N#d{R987 ;BYhq$;3iutQe..}]$%i8zcoErBp`S83' );
define( 'LOGGED_IN_KEY',     'tb*QWf*`bjU]$$RQbT`(Lgq_bv<!(h7<Tq7`}Bz3l^|aso{$F7WVBSG>}y]Xeh |' );
define( 'NONCE_KEY',         'I6<@SZh])Ljlzbj$U,^XI/bfTI20uNF%$K:)  a!7%D CPDF/<-<*$5Q/IU?MZ{2' );
define( 'AUTH_SALT',         'bXf(s7SQv14aGH;+/zI0w)@g)#$i<=nm~Q@E`~eBeW6]$FOCSzW5W1En#q`-}L1o' );
define( 'SECURE_AUTH_SALT',  'tWqv,+-B|$.yErgg%K(pdZrf7.zRu7e#enK[>_z^)-tEtU0W^M.1+l|ef.^SpkI&' );
define( 'LOGGED_IN_SALT',    '0KSHf~$;$nenZd<iLbVSU*~wt7W^@l$:Z:5I-h`nmOu<Ozap[2c9x!eH2~u0/~~6' );
define( 'NONCE_SALT',        'kzi:6(gV~x69@6~W!/y7?xa!EM64|/[t[`AKDSqe?Um+K_u25SS`t^dUZ=-#t+od' );
define( 'WP_CACHE_KEY_SALT', '_v$S,WrbejoUNl.%6Quzfw*fb?l[*4l/pL><a9.E>D$hhJt vMQ{dKOZK%XqbDX ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
