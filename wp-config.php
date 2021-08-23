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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'butuhofficial_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'CO3jY4t5{C.4~IPCX@p0SIGOiDsk`9QYMt^A>^ffZht,Sfho)>{(,[@$wLd2(!5;' );
define( 'SECURE_AUTH_KEY',  'iXVbN)]fbvj<%5Sgb uW8o?:t8t,)KAD{QqD}JcB[[HFtF31g8Y23+.}aYMt_`sU' );
define( 'LOGGED_IN_KEY',    'TRcX>$SQ&}#&i{q9*88(O@rd%C[=L8,]0&8(qaP=u&f b287Iwsz,bBNdov{MbhA' );
define( 'NONCE_KEY',        ',ZWzlh7)CO}95?-`8HIu(wD>:9(:-6Xt4;sSM0r@{/^b,BgabkMTr3f9z3Foo/:F' );
define( 'AUTH_SALT',        't>_in?cbfhkgaI@{0S`ifW.KIiw~/Qx4joPtu;tlH._W5]XWf4L>}t&3zV0m5D)W' );
define( 'SECURE_AUTH_SALT', 'j[jHsgRHryx(7rH]ZGTKg54fpdyv-#f/Jp-O8]Nx*y=;,V5qSZ!*8Hb- 0%)9Y*{' );
define( 'LOGGED_IN_SALT',   '-ngc[/)F{7):Z5BsB$oHJ>fd,PHPrnc2*<I#GzUe`h%@t=O%+n0/B,#&8RaY-,:d' );
define( 'NONCE_SALT',       'ZKMx+OZyQ|pW@ZjX^#?iW5{+_/JI>#h)MZ}Rp{%i{[sAMP9=&(ot[W+g{[pk2|Vc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
