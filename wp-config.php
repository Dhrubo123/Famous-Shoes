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
define( 'DB_NAME', 'famous' );

/** Database username */
define( 'DB_USER', 'famous' );

/** Database password */
define( 'DB_PASSWORD', '225588' );

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
define( 'AUTH_KEY',         'KJvRWQ)I75{9NvuS7y{T4uDzI@EEs_pFm~xqpRCbzSHb03wS=u[]JWWf$@}+z#=/' );
define( 'SECURE_AUTH_KEY',  '.$M0n8Zbkf{/o#<o),cSUrj5lZJy#OhD$7i%77.?V<@`EWTRI%cfbq:.j$51PPY+' );
define( 'LOGGED_IN_KEY',    ';|TJLdo@c11Zw4KQwb,pIk8f@dEo5Nq>4gbK`%>#oZ?B[wSoCPSD/idT=djp@R(:' );
define( 'NONCE_KEY',        'Meb1]nPGKo4w0(HYsZo&( cZrAb@$#MY]k<mC9wb 1D)T#o^]2YGgPKhahR3xV{c' );
define( 'AUTH_SALT',        '!IHFE!}u&Dwh0>yewWIB|()Eg_iQgT=iQP]k` yy1ENA$J2EUXKc@crkDnz(aHdB' );
define( 'SECURE_AUTH_SALT', 'z}MI/XJaiD!nGV7>]j2c6I#(dZbu[$T5 CM:T 0[m%}G;*Dm?7ColuJ 9w?mugpO' );
define( 'LOGGED_IN_SALT',   'jM.I_3qut3@XQKiQeee9d>GoBz^DmJW%7cE/x$cPO8c$muR53?{fymCF=lR|zE<p' );
define( 'NONCE_SALT',       '(5!n+[3/iLHKY0?8(oRdz=*0_H3-G=N N;F$/8U%yRer;cw`5r1y~-@G*M,4h1rv' );

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
