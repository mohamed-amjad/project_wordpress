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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'templet2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '0;k6MA~kcbB~rx%TId08NY[JR#}38w,5tx5*)e+mnV,{Qs9t)nRN !P8rV&`4%<5' );
define( 'SECURE_AUTH_KEY',  'vJc4tSBlm 3%$7|(6yHHz/A9tnf !7cLqZ$cfR}vDe(wgA0/O*;#H{/rg:V6nW!+' );
define( 'LOGGED_IN_KEY',    '%HtGFe<!Jx_W;|PyiAv!iz1n&5&%_(Q% CZH&49^pHVA@nF~yYE4Z8v!lBC6g@I{' );
define( 'NONCE_KEY',        'a.V3/@c9#52pLI^?rdTQ7{!bX6$YQ8SNr9* 6+|@NJZae]fRx]o:7(U:oC#>e<<k' );
define( 'AUTH_SALT',        'as[rox|x9w{nAS;Ky3JM:V{A&C87vaI|@89yv;/ZDJX-od,c.)tt3L$tEHQNH0A@' );
define( 'SECURE_AUTH_SALT', 'p}G(^*@z:h%`vsvk{8`6%(.(u6MZe6Bv&NSXD#{kEAA?RX47{yN`#RF;8cx@H-Us' );
define( 'LOGGED_IN_SALT',   '`KMgo{GKt2cO5e=zVmS}H],rhp_}I|Jka0+.T7s,OI{2Ifc[pLPn=pUe%066s]sk' );
define( 'NONCE_SALT',       '*d{tGUYOKsbM?f<Ts?-Rwu[]z^zm3*Y0;HkIC]y:EcR@BN6%>#SR1(  {Tq{f}=7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
