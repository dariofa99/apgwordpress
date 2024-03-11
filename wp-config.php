<?php
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'wordpressapg' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          'Tx+=vUB#zP-:6$-I]^zeB0<! |4<vGB(5t2w$WU#20]5m[*-i1d8u_^W(CNvbkJq' );
define( 'SECURE_AUTH_KEY',   'e{>cUi*?xZ -8:+]!b#nhP%G%F_!vM~ObLJKhT;Y0G7MKv.Bpn4il}4M7Ja>&7_J' );
define( 'LOGGED_IN_KEY',     '9U2.$UCzIR5N XbDYE!u>gF0yh_km`U5M{I`SaL&{,j9:u<dXGSwfap*-K}}(&wZ' );
define( 'NONCE_KEY',         'UY~_k{w<[Z|//={h;R[8)N^*^V8fOYbPV#pT{R9_)v}sX)v]qv.[o8z4HJfRp$8b' );
define( 'AUTH_SALT',         'R$zIU&u,Hd1|pOmb-Dyh/n-1@Ka2:R>6`=?Dr/YWK_|j&,74,f%p(7/e|+fOuO<&' );
define( 'SECURE_AUTH_SALT',  'bV;-c}P5<,IYHg{kk&jFsitvEuP_5Q6er!Mbr-.yWPbU=WR[Q{|uTCC@0PcwV7Z~' );
define( 'LOGGED_IN_SALT',    ' _TYT(f*=;oY6sPP7i+HQ6C2QBU)5)Vry~`XVtjrzans^75/1Ldo;uEGrl4dgwDn' );
define( 'NONCE_SALT',        '-*MBFqj]iYk_ny%n[YnA<GniafM_*D.v9{M!oV#JmWH@{:A5{X+{HuX6n?)oDv&J' );
define( 'WP_CACHE_KEY_SALT', ')V6d6k=6h)2*t?qlv.)m]yWMCGvs~ !7cCJ6J6[Q1~mH@ cK1|:z+^Sm8bh+%,9z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lmh_';

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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
