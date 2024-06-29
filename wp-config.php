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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paginawebwp' );

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
define( 'AUTH_KEY',         'T%{87~/,Yckk/Tl[uEqk4t#%F7.Rt)6)guP^1h,0hh)Rzt?_GsPd$}(Kg~P!3fHy' );
define( 'SECURE_AUTH_KEY',  ' dRRj,|Mb6qG1d~Qfid-@Ys(%6 Ia&g-_AraNV_`j-<gASf^X3{LeyD-m{ LhBv9' );
define( 'LOGGED_IN_KEY',    '1|D4jQU?!*`REvk3uiBY}C;|WtCSt(O11+au{6x[`gRHRB/)tgbYuTBWEvFp:`Mm' );
define( 'NONCE_KEY',        '|nK6{Y4bXZOJ@(fYL#=h]UOX-HA4Gd^W{Ya9d;_IXzu?Y&b~cih/8|![(UzjjIgZ' );
define( 'AUTH_SALT',        'QPEh(~seO8 zc$pZ^{B_nx,muTr S +V(f+$MHQ4z7-)QyE?J@ui(!=9_Ok!}6|e' );
define( 'SECURE_AUTH_SALT', '1-o1~^ABHe];4l<qey#0pj?3+`M#:4!5GP7!|1a_UnLe*2qe)xkr4N?_ap3!]@(Q' );
define( 'LOGGED_IN_SALT',   '?O/*ne3#,bb:TG]H 8HL<NKr`e{g dw6j#qIL5{wm~eo^5;;Q)A2HD?#C<h%=!G*' );
define( 'NONCE_SALT',       'Q2r{@rhl6,2lpYaeEBmSsjb7MNbI<2N/ql FQKf)qX%ZvU%,z$9_J]avZV>%X8~p' );

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
