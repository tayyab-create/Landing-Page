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
define( 'DB_NAME', 'landingPage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'z(XK8?XkX)*=?y65asIl<{l%`VJr-0|Oo,ODX=RvXNKRmfuFo,}AWKy!oh71uGBo' );
define( 'SECURE_AUTH_KEY',  'FvaqoYw:Z03,X>yRro?)Fcd?QD+$e;da7^b)ieQpR}pZ37{1UlGw<4%lq3-}J8f~' );
define( 'LOGGED_IN_KEY',    'd<rFfrz*3m%?^toI>h>|r~,$`]FCjj;KMk%dTQ2]V+R /_L,aiD||{4e^P*yREpb' );
define( 'NONCE_KEY',        '3}^_onx[O.9~+ZKHg~PIIu!bAl]=vhFsU(H&LwC3pMlV{hVyk#gsrQ<O5i$cPiGU' );
define( 'AUTH_SALT',        'fExgLsXIZ-:5Zkywl8DoavKUi=|::nn?/n2cVacM#Tp-Igv#t6./zfh!*Er5lijm' );
define( 'SECURE_AUTH_SALT', 'IQHqoe0rf#w0R@ta#w2HyI8;X$Q==b:/RuQga,Pivtly[PIQ0k8fNF%UXn367T;0' );
define( 'LOGGED_IN_SALT',   '>:dY+]r;y74{EqP/:4bA<B$[(H=M52bH@;F+kuct}_DQD<(I~s0&6f>W?82cXM6W' );
define( 'NONCE_SALT',       'r$g,xO@)T&SDYuIFUyBP6#01uo2Rfi[<9Mg0xnx$Ql^AwwFer{.8(x#<-ngL#v?8' );

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
