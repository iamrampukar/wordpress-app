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
define( 'AUTH_KEY',         '(ewwKD/ZSG!`nB;?m9^((dDEt[oy}!n>ELmzd~ix/~Q>+O_W8P]f<nm(-sqNE!NR' );
define( 'SECURE_AUTH_KEY',  'z2LCjsSUt@`J`+]jZu$gYuNB^IV.zejgF7K,KCF+F`ukF1;=UHuDgG*h$<uKAS- ' );
define( 'LOGGED_IN_KEY',    ';GDqdT#h%n>_1RJ^8vq_|-Cd+z>M8a.IG0 |i|$c<KfHm2G/u7n0iZ&q&}IF.}%F' );
define( 'NONCE_KEY',        'z`nxN1j46}xd)u]`S>Of+b7<s2}W>`V8zO$lNE]KSP}AkYZ2.{VGi!|rjaU*_eK?' );
define( 'AUTH_SALT',        'nD[-qc7E2fAm!RQmMW=1;_&ays+<>)?H+>w{TMnI_i9[C1J)fiDO9F]Y$/0!yv|f' );
define( 'SECURE_AUTH_SALT', '|=BRnKF<N/cG*uBe`vEho8OhV)?cA$EKuXP</AXP<u,bpnnWf|w_}2t#Py6bE4SX' );
define( 'LOGGED_IN_SALT',   'AiJ:9qa``yN=^H,=L`?L%?+YJ.2%L#20@}-y}MCU9waS?1T0%n7h$i2op:XKD%K6' );
define( 'NONCE_SALT',       '>W!r}Ot#6U$R0P12f293C6I:`.jiV_.GRY{@@,eys)KuU OnL.:gHRMSJ5BfbU^$' );

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
