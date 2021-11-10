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
define( 'DB_NAME', 'newdatabase' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>Owa~#,YEg@0E0CFS<M#s0<(z8d0Dkrmw |s_?rKqn`9pc$+v-RTM$vis<J%f:p2' );
define( 'SECURE_AUTH_KEY',  'N953p5qH%F Whu;DC/[Cqv~1^y/i}>EZ>t=j|tT~^f|3x8<U!mX-H[vj0`(k$*<E' );
define( 'LOGGED_IN_KEY',    'I(:i5|YlCE{~4t=&22CMpc^kY#^!n{$$7-@y`l/co]OQUJf7}Khg~tR8$4vlJo}N' );
define( 'NONCE_KEY',        '][EnVjK8_:ec_?=}n8?(Qt=le^SbW!+? M9UG66.H$l>-_rTL3QqZycx;|1aEm|K' );
define( 'AUTH_SALT',        '}P9tL#c{TzS7/ 5C4z?P6M8lZ;6_rQ?Emsk;m(ss;HQxKsVfNa+Qv*5L.Q%<Mwgl' );
define( 'SECURE_AUTH_SALT', 'fIy7Ma^;y+I)=vY#n@Hc3CZU>7mNoLv2bnP:xaDwxRk!~Q$/D|hVTOl38-3X~Z{D' );
define( 'LOGGED_IN_SALT',   'x1)BOXD]g;@f8r*gYv/Q<wd-&b4Xg5s#`.]`x3ykgmDOzl*m3>8h[rG6$](IOu7#' );
define( 'NONCE_SALT',       '88Q6<q7AL]%61;p>Agi=F|A>!SeZdr(Hd i%#!8T3V}&Ovg2<%0hp4,KEXd#T/X8' );

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
