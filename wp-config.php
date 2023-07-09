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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'B.bj/eTw}wr~)gk~ +4[S6F~xd8JU)d4Cy2%K6zC%Amdp& 2G](!A?qFDls26Y8R' );
define( 'SECURE_AUTH_KEY',  'RZhT&] w,bZnH_uEf#-s3A1DG]z}Y7l!]+NdOo2 e}DP!<Vj,9O0#-V(t}vTNMz2' );
define( 'LOGGED_IN_KEY',    'ZL9~_Lk^C!N1M0yq:,l|.D/Zex~|NfB%s?D62yYMQ2{PW1E0{!t-6 ZB.,sP[?Qg' );
define( 'NONCE_KEY',        '@$]:V-wF=Od%K9+>BwMa9R,qK7Ze^79|7~;Q)O,JO?PY^Q.6Nh1z|-VE}1|r1*Lf' );
define( 'AUTH_SALT',        'U<YLNjP,rf9]D#0/3-=utq!X?Z?,ufDq|]AnPGH)vSu]Jc31S_t9PPsNh&3A}o+.' );
define( 'SECURE_AUTH_SALT', 'Yt~+,pFc!1$hWKOc4t~qg0h[FfXF,&<$?>vfs?hchU:Du&DR}zl%%d;/l6.7f+_>' );
define( 'LOGGED_IN_SALT',   '>2A&!O3YZ>!RAU.{vjng~sM,0<iIjIGL@>zoJ]A+FjYkJY(,K_3d~ZUOL8 MqT-%' );
define( 'NONCE_SALT',       '&@I?!P0t#nSB( Bslo9OfW]}u^K6-WNR,+d}o0Iq{HVOqyw5zqN>:YTa))r4qmlv' );

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
