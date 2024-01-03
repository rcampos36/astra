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
define( 'DB_NAME', 'astra_db' );

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
define( 'AUTH_KEY',         'vE{^#a#t8G}]pwcp?uCh-A%Ks.d=EAU@s|l8N|OZL)=#VG`g4Mah8C,K.8|Ty{Av' );
define( 'SECURE_AUTH_KEY',  '(8UQ|m0i|iOX`$@Cy8HsH>+kFtmFaJ:?n|~$=!0[OB+bCk9y~O VSG2U9lq,Y4ol' );
define( 'LOGGED_IN_KEY',    '])NbnzxpU{QG#XU|<N@%ZFGmg6QwM)x;3&|X%oYQlmyFcks+WWnU >cO4hj/|5Vu' );
define( 'NONCE_KEY',        '-*wHI~z>lUD^<9]=F+KM4R/#~f<c6[>k9d$_0f}&Sok|PD!})t]7CX2y)03q+Avk' );
define( 'AUTH_SALT',        '3a#~@%-= IMLl $.!s%s?sL_]i<}dTJhO{ro`rlZ*=xf1N n*nv2~rs&Pt[b%WnT' );
define( 'SECURE_AUTH_SALT', 'wR1z/Z9@[p+w.yIF+UkqwDXjphy>UumK=i>I<J;_KZH,b;8v;;_Oqc/qhSh98Nzm' );
define( 'LOGGED_IN_SALT',   '!vL^:)#uZbk@NCAQbjjZy86rJ6%_UCVN1oE731e!en;QgKEvum<31>{jF:Ad_YUo' );
define( 'NONCE_SALT',       'lz;HdsCMNXsd8m^?^]AURH1,,rh<%mg/nr%<JjO![JUO~+pM^3]D,iF7$GEMB!=k' );

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
