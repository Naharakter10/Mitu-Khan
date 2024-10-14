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
define( 'DB_NAME', 'naharmitu' );

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
define( 'AUTH_KEY',         'b8!h2kB;19<6Z2@/;rkuo_qDGapHsyfk/}NaFn <xo>J ,!(bRoNI3wdfUm8W`Y8' );
define( 'SECURE_AUTH_KEY',  'G*.DK/-u?+Ekf3^3`1RW{SuCXwB DG93nxOTO-eAS`=/=e,[l]JXoJ35G^zXYkrW' );
define( 'LOGGED_IN_KEY',    'E$#.NrH2q1ENM#7WvTS&0 y=iVOH*pJ(MOw-fOkTmKU_4r b#(cx!W8hl9ROlm&M' );
define( 'NONCE_KEY',        'iW%nmoF6`WsaZ!P8~aa+l7204]-~D-J0@xW9=$)H0Yl@Z*SVYOxY:FO4J%P$%D.]' );
define( 'AUTH_SALT',        '1Bi!X*ptQsQ=5no3:_$<*SW?zSXF,wclU[&jg.]Y.CBv^5EC_V8Ul >(],PR3^!s' );
define( 'SECURE_AUTH_SALT', 'q)SJ;^&$/8pl}EZkMT qasuD)mEXbd<A-wrCrj^=a Vn$CYS(W4#R?9C(tmRV7jZ' );
define( 'LOGGED_IN_SALT',   '#X^=31??i|^l&+Eq@Jk>hK)zpRo,s`w&~1D1>pYR3)P:4yCELH$M`k(_ytpv=AY$' );
define( 'NONCE_SALT',       'XmB!2;Fo9!+iX]Pp[DAj O8);p]QxKeA61~0fqLS=GI@]?ZETV>o<g:I7q9/lelg' );

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
