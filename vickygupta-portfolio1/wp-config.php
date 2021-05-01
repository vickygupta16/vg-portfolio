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
define( 'DB_NAME', 'vg-portfolio1' );

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
define( 'AUTH_KEY',         '=Z:0(epZwXYGCq{/ADoJ,.lAWhvEj~qrYPF8=IW&p4X4Xtdj!w<(k`Mg|,*z}nQ9' );
define( 'SECURE_AUTH_KEY',  'RNhto)m:AwglK4C7/Z75b4?R.;]Y7*A3beS/s,Qg^}Aqf$70LH)3.5>|4=G0Ll:U' );
define( 'LOGGED_IN_KEY',    'yy8i@tB&dHt=O7|qYf8hRA.%LxM>Ns[[p6__8^OI%PR{czP^YO8o.E``i51!lu6R' );
define( 'NONCE_KEY',        'te[}c:+G&Z@l6v2czuhN||i`+6cI5-64V,7<,4!*x?k{ngxlk:6>hD<_MD6W:q8e' );
define( 'AUTH_SALT',        '`FQG&D-E[fk|> /oBI.oFYTW&k~f$O jMd_>W?Xw*Th^gI%XZ]S8C!}~O{~22{?4' );
define( 'SECURE_AUTH_SALT', 'kGy(Zvx!n}qPW{SH~-Y] 6S<2vp0HA4Pl`7x(wC*{7[J6C|fk~ Z;TBtyCQ%%@FU' );
define( 'LOGGED_IN_SALT',   'w_/[(3loM6)V:pgzDK5(]Oyf1TMU+s4rL+}KFL{tzs6 G(Z;$3d^R?ZIU.4M2(l%' );
define( 'NONCE_SALT',       'S?E} danJ3/<vJH77q`9029J!_vw)L{yX)ss6D@kar+(Nle>qW$Qq[8aq=fc6ZlO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vg_p1';

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
