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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'presta' );

/** Database username */
define( 'DB_USER', 'prestauser' );

/** Database password */
define( 'DB_PASSWORD', 'prestapw' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '%W;*uBEiT<sCA3?^C98%L~w.oFeAm9y4F<;9QRg4aV_j_vyBFY+/j l;&NVnI<Oh' );
define( 'SECURE_AUTH_KEY',  'TeiY8K+tzw@k]^c09qlXJj}QR!:~bkSpLE&J.$_sL=0NWO{KqcvWYk?,6h^3bMJ(' );
define( 'LOGGED_IN_KEY',    ' 9f|6=:*ku:G|$lJ:C TR:l J[+[SREmA(l^RJAJ~e<^o&I_e,.]ilEqW{ia^F2P' );
define( 'NONCE_KEY',        'U1om|wog`}-x9Lv5$4`T~.p!C)b$UX|dw3l#DKq;R3!WJ?7[~$u%?JEMj(ne@XV]' );
define( 'AUTH_SALT',        'gm*Y-?!RHE}qpLKqbO;p<^vZ1<pRC<4E[5LUEJLQFWk`-0o40gfweFBmh4TOa%mF' );
define( 'SECURE_AUTH_SALT', 't6@[|tkw3{Jba,DL&,5jDTagg#pPcH)k7[*I@Krz0/`.K]nd|rOM@#[ >dbRwtXc' );
define( 'LOGGED_IN_SALT',   ']Rec5]8lMw1~!^Za#9PN>v0tGPYk#P[4QnZ8q`YPB6$@87~scKu9ZB.% A`OD1B9' );
define( 'NONCE_SALT',       '5y^L9rmrega|5I]#n4r$%MsNK}DH7-vOcJc=1CMeQ9FD5d0#om}(J2|I,t9JqdpE' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
