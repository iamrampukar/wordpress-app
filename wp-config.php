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
define( 'DB_NAME', 'wordpress_dev_db' );

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
define( 'AUTH_KEY',         '0z3;Y`By,pZ-w_rb8+|<-rzIXE]xo%Sx:JDm1O*(!<3+>(!iCBB?zVkTLL_]n{dk' );
define( 'SECURE_AUTH_KEY',  'pdfJE&;@S!ZEfP[-5&jo7w[QF^o.)<l+6~D`(zqP+MQk5(ta4qM?mi9OsG%rXQ?b' );
define( 'LOGGED_IN_KEY',    '@iz?ai(<WW,m~zI|g9lzsr`tay_hV19Y+80,YlrmpX~BZKXAY@gOr?{5Em%|:&!5' );
define( 'NONCE_KEY',        '&]oom -(Xr(l$bRX0IBTjP]EFn&uo(i}&OQyF C5pM^|5z4eR.L{u?!5[cB)#bTw' );
define( 'AUTH_SALT',        '[,4&VL#B@%+pmVJME[NrLNZOvGU}thjr(/C:zBKMMg25RM3,=,(Wr/)xg{BbbGoi' );
define( 'SECURE_AUTH_SALT', '+jRbJ X/C;{LN?lS:)=K8^Y@X#_0jCW!O7F)vZ.XWRuztAgzUE>iAmtp5<]Zb^~w' );
define( 'LOGGED_IN_SALT',   'ecxDx}?Bwl/w74]giceUdR7 m3HUbaf$Q+wHP,-m}8w J$WRe.Wh<U^D!<JdZvLX' );
define( 'NONCE_SALT',       ']FB:tAO=?T5@r_il%L)A&^nv?6sKK=c)}BTIBcfG4?%,9a;5F8=WeL/dS1w<= LC' );

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
