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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_caderco' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%>!Q1agP4u T*D`i?s/QA9xR}PuECu;e6gq@EVO%SzVR8eZA8!H.R-e1?Cq_Xz: ' );
define( 'SECURE_AUTH_KEY',  'fiN%x#r<er3y-i]>P`1H,J=>[f=97!|QUh7DH_^NuW/NgEd<9olmljWq]MN7v>1m' );
define( 'LOGGED_IN_KEY',    'CIKO3rEPV!{}6_MxV7`RTK054Az!$Erkz/ZimZ1ml)#4$f$P:Y^Mv]Z9d]k&s/3i' );
define( 'NONCE_KEY',        '{845zPfy&<*Mm]xj9w.mcF%#d+kn;?uiMG(cw{3Z)vzM=6dnEf<;}9=YR*DOan1r' );
define( 'AUTH_SALT',        'gr{dgR6%%dk&2TKi&kOpZlc{lB(?,)lF+nVGl8(Z}mB(qqv19qb($B,Z>[[Qpc*F' );
define( 'SECURE_AUTH_SALT', '5ZWN4fL_M{Qsd6)Ob-{#UAP|OL;^_L`*~KN6jCd^xOVaO&=Pu^eU8+qk6B~g|N&9' );
define( 'LOGGED_IN_SALT',   '^<G0kT$Lk;$Q1WE<+l;G*Noq|N]D*b2q/i7g^&[2.aB40>PH4CQ~She7&78x,:2q' );
define( 'NONCE_SALT',       'ei$fj$D6Ry2vItp6.u;j~nI/vfM:}14-36OIpLrcfsH!{jR8%b7(au<h-Q=q1|tY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
