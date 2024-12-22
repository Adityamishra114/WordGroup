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
define( 'DB_NAME', 'group' );

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
define( 'AUTH_KEY',         '/;8cQ^R!or|MFEEE^YV;!-[n3ma-aw%_!Y3`:hpg}x~G{FSV]#;}|Pr&)9 2iv87' );
define( 'SECURE_AUTH_KEY',  '3G^[VyUv@[z5,WidCu*kUdEtPVfd)5RKXV>81DW.+CsRHG!h}oirw==<>gZ{(..^' );
define( 'LOGGED_IN_KEY',    'uSx_uQ9P>uZ7riU,}h~Jh$8,6b.QRR@,UK{GvQtv[1sYv-<x/2rlr}hKK2BbF/I|' );
define( 'NONCE_KEY',        '?d@S5-En_47~IL1f0Yo{(6fA$XS}Gd;iw(2D[cwJn1##0e@50xz8PhD]%p}oRLnp' );
define( 'AUTH_SALT',        'AB}>QX(T8olUFJR]Qbl^=OQWvDQW1z~p~*lWL-uNaPdsycq=grOd7RO@kgk<%0|v' );
define( 'SECURE_AUTH_SALT', 'ZN8vso ]T%%flr~t_r>cZ3fpr^%]&F>k`=.]B#!|}cP`5G2xE^NQpus&D$hkRWm2' );
define( 'LOGGED_IN_SALT',   't bql3,+xTy:,8E:7OudtyYFyGd0a5c]0W%s-bQ$|Gjf|SsDOFiT1<VW3am4*woO' );
define( 'NONCE_SALT',       '@wT}VOU>SA}U;G0Vka33_C@~BtH=p*$M|,}P9?DR9jiV]mL+>F}NJ&YnGRM?x zg' );

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
