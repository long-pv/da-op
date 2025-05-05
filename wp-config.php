<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '202504daop' );

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
define( 'AUTH_KEY',         'U+!vKe.9 Or=&<y*m HT59B/Vme!V5dpa}aK{,~c~L%yX~LrQQ`BC3T~n2*m80mh' );
define( 'SECURE_AUTH_KEY',  'K#:y69APk7Os*.amo:?GhBCu(tl|V<(F)raMc,1L97p/1V+R <4gZ^/{)S2a%B :' );
define( 'LOGGED_IN_KEY',    'Kwug{s}cEZ2S0vu{^471IsaSj@+rGGS&tZ tqL%a=J#j>r,DFLp$Isi1`Ek3.00!' );
define( 'NONCE_KEY',        'E_[/2BM77;un~,B9Ck$RoD{_}[I2FCa>TCOR+[xp_iC>IvRNo98@insTK]V5|~I.' );
define( 'AUTH_SALT',        '.cI%z~4T-vE{[G.K9Ao_iR!@@D^(w}@:2cMlBuI:7nz7E}fP|wY~o{_fRIKFpptL' );
define( 'SECURE_AUTH_SALT', 'yx|c7,32^,q!kVXwt^.7@JN|7(xgxPjHUcZWf?F{v+JmKqA@D51?BVSsmpW+m/  ' );
define( 'LOGGED_IN_SALT',   '#IUNlD@(~K?+Xq&zJsml]dcuium*/$CV(|mW h~,??e/hh.aZG^KClOKBm:vTg+u' );
define( 'NONCE_SALT',       ')|m,=K(m=&4&M0*U>RL^+f_m]!_d[B62O=E jCEX);(x2hGjjdWJ-3ma!AyBsWlP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
