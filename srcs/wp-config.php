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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'yyoon' );

/** MySQL database password */
define( 'DB_PASSWORD', '147369as' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '_kL|(mb/AdC4l+[zF-?3%+V<Xp}tP5rF%A78 Ey;CR!gLF<RYpiA7>j+__F>fgQ7' );
define( 'SECURE_AUTH_KEY',  'a`~j/Wd|V}nZ>4>6xmFkS<l|OK1l&.[Gi`N+E~ ,>xN-Q~D+|T|X,?:JlgPC6gNq' );
define( 'LOGGED_IN_KEY',    'Rkg[0T6T^=h_B60l7=<[8yl+sR$KC8jHu(B,`YHba/z_e}bk+SLHZWM`AZ&9|iY~' );
define( 'NONCE_KEY',        '00|m0l_D9/EUtAF0SnMR/-.$_@O$g40C*[{M:PQrQh&-zH5 k}}^F`5HaN3pI8-6' );
define( 'AUTH_SALT',        '-2_S#aif)Gb#}Of7)l+!+?=6R/dMnfWG&[Nx|3Oq_t]K|;&`iSzZ`rq%4S-zr64a' );
define( 'SECURE_AUTH_SALT', '@|Tw-&rM79x*(+))4AGl|T^1U:/S-Q| L~gD-SW}ckJqP=vT@4551)|7OawDBFi6' );
define( 'LOGGED_IN_SALT',   'ckjR,JUd%Tb@t+i!.(| +,AZ{}`CuNg.Jz~o_v&cWd-ma&g^=Hj/Uo@x&ty}3Lij' );
define( 'NONCE_SALT',       'rSwp>%O31tQRz%}#&-*GinFW_m$(#U^-83*V/=ms5|.?:Fyu B!k|zx@}qHsO>?p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
