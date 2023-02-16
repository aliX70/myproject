<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u267599801_qnqU8' );

/** Database username */
define( 'DB_USER', 'u267599801_YuvJ0' );

/** Database password */
define( 'DB_PASSWORD', 'oiovcj5UWQ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Y*s=,LtjrhF$Pp(V8=U:Ov8Sw0W#DRh4cot=x`wI{{KI#ji@ 7q@Ig.,ju_JbW/:' );
define( 'SECURE_AUTH_KEY',   '5m!H>t3+M%nh!v.6Eq$4$&_fMXd-$*bTNV$T6nTX>u<(6c1NfUBMuZrt!9y->iXc' );
define( 'LOGGED_IN_KEY',     '0KkO-GG{2G7`wr%/4ef~e9ZO(3D+~flU?TFNY#KmVX%,]lVqRcgT;0YFD53uq+0>' );
define( 'NONCE_KEY',         'F:<D!tdXf8}/?=>h(Y!$ZGkR8:HZ3K<;vJ7$|)aJr.gDq$i@j9JvgAuxvm++OWo5' );
define( 'AUTH_SALT',         ' `pLtNWYd(&>&kAYLQx=vPXX,,-]4]^L93;HK|iw^t0?swN1%.&&?*LA=-s<!Yqz' );
define( 'SECURE_AUTH_SALT',  'G[M[s:9A_(AO>2(0/[?mYb;zIPJcL|>}4R@5vd1:AAU&OLSYA+b7w+g`%tc9k;d^' );
define( 'LOGGED_IN_SALT',    '.Z=^oHbo%}DaK#7F~t$~D%tDBDiZ2or<7{kb1DE]>@ov t3=(E,GF>u1$P)TZgm2' );
define( 'NONCE_SALT',        'StR0hSrBRR|8dbz>w67o?ym^|h*:ut*b^?gGs`3Q-)di vsw@+`TE!55UrHu>R?8' );
define( 'WP_CACHE_KEY_SALT', 'QE|l0?H;B>h?n*RZAEv70OE%4HOjfx D8n2XCo|QRJ`#{h]KiJ3*rg4&zWo*]e_~' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
