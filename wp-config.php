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
define( 'DB_NAME', 'whhc' );

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
define( 'AUTH_KEY',         'bI5)obO@a=XJBSI^?]qQk+C-U/Y_ug17C+M~07daj.)7sLX^vPXW!h{XW7.]wP5_' );
define( 'SECURE_AUTH_KEY',  'sXTg#G>+&9A^<jk-BGAWAr|G+L?21 N5KeR:vKBl?B!gr|z(nDcDu5:<Z]j/o89O' );
define( 'LOGGED_IN_KEY',    'R#M4$]kZab.Q@d`guIYg#g>qCaw%1tIqM58N8e-s/vhCeN-%8qo&o+f999NcH.g}' );
define( 'NONCE_KEY',        '=6j1/y,rp^|oN>iWU0[<-F0uDC;fj]&`3k7/w2zg<  1ZwhL8Sq[TW_U6Vwa!fhQ' );
define( 'AUTH_SALT',        'k/5mY2S7g?5a(YVnZYA.T#>^kJt+VOwOkKfH&In}W} Dc^e0u~Qz}-GL>$$DKdXX' );
define( 'SECURE_AUTH_SALT', 'SU!_{&k#)^r#i@hny;D1/e/ZP&Q/yKEZ;_!u$DtNTuT[$K-I-{?kS.Q~pzp+PKV%' );
define( 'LOGGED_IN_SALT',   '%ed,clmpJUO)4&> (~/#C>F IU:FV)TufOS,<f#Z[i(6gFcS<JK)d|]-LVF3d_nv' );
define( 'NONCE_SALT',       '{vh!{NU{U?!+uRV(gIvMNcJ0;X&4(>!):;npxy@ok,O6wd5~i_{ e++=2?Q}`GX1' );

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
