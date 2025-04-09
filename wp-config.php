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
define( 'DB_NAME', 'webbanhang' );

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
define( 'AUTH_KEY',         'Smolch@]234jJj2 Om},;v?t~B8.my&0{sj&FkGJ{dr/XEGi;QARINKFA(SHJ($F' );
define( 'SECURE_AUTH_KEY',  '-vyQJ.}I5;ry=J!lfrqCMM`]Awu]pxH_RXea@f+zlKGDGMRHy0oPDi QL/D1RZm}' );
define( 'LOGGED_IN_KEY',    '-1fmP^RiDQ5(dY7Qtgr!XcOeZ+/MT^c2vPm:0|jBerPv0/VXsFW$pi!cw-%fX]`3' );
define( 'NONCE_KEY',        '5ifi6)Pzm hrEia`BERdE}((T=s=+{uC(YB957Up7o#QUf|>lT)-0wLmK{Lx@jAc' );
define( 'AUTH_SALT',        '`[Xol5.|O|Z2flpv+}!puwD]ksjIKIxe9tHWP_W~r/{DAVl,,)kfy op-3r@`jaB' );
define( 'SECURE_AUTH_SALT', '`DO v3i=],G-tyY{_}sv~Skth<T1=A/NbQ#:?o;e@j|lXjo-h=cVdzj!-|J~a6=:' );
define( 'LOGGED_IN_SALT',   'JgB0fUJ6TQ-$i_ld_+C!j08+mG[~JlJc#+Jl7GBij1lfqh;SDDT3,s:nK>X5 {Dz' );
define( 'NONCE_SALT',       '{QX2E!cp++F;d>5FG?.qH mUp3U/dwqsCw<F1VVfCq*G)/IA0Db_+j$&G.;e0|,F' );

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
