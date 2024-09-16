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
define( 'AUTH_KEY',          'x1HZRDS{t88*V89kB-$1SgFJ1&cm9]:M6NLpl1b/rW%neYkc[^uE[*Qg/E0^BD[6' );
define( 'SECURE_AUTH_KEY',   '^P3}rDV%1*JX+4yHyq (Cl(7z-38nF>4-4@lac0S}SSgoop.$qGv{9H96{:uUg2{' );
define( 'LOGGED_IN_KEY',     'x NHGaH6Sxk`W()T3Q$RU!nh)!Dcb:8UnVihF_ieb6tk?CjcS:xdv#Jsv|&+A`g ' );
define( 'NONCE_KEY',         '-{unum2u~I(Z5vKHTiA5EcuqEb$^wKmQ8%UOZ~-!#<,NrXb;$Sw#dX+2d[3Pih@9' );
define( 'AUTH_SALT',         '_ .11kp&9Lm:}I*f16I{Ulif+vMB|1^c<vYWBf9y:T7jX<SvN|wLzrp qYJo@v|f' );
define( 'SECURE_AUTH_SALT',  '?-Xax5+M#F D{DArT(FaF*wQhebYJY=Cu*?-cv?!_^e+/%f1.Q eJ@%@~LRs/fcm' );
define( 'LOGGED_IN_SALT',    'M3?TP,Zy8uyP2A2NNQI@XzL>&s7(6irx?[=L,uUJ6A%ID1<tSst`OWvex=6s]@//' );
define( 'NONCE_SALT',        '-k,S# CPc#zl.czg7hecR*shX|Y[#2Tbw[{M Zm{_xPdAjzfKKR[k}2qqGF%M+w@' );
define( 'WP_CACHE_KEY_SALT', 'pgwYaOSkyLwyn_+W2EJv@Kfw*[i#;vAR7),~=28$k#`E:@m3$a)LbWE|EYszAPC7' );


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
