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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'y5FFj8o|}|6X_jz4WY=6 FdSQ8@`rH;hd]mZx9QB(6n)!{0jrwm}H}1X:$XsP+Xr' );
define( 'SECURE_AUTH_KEY',  '=]Bkf{5Mo&3o8D,$<W*0c=TEdpKG~!iJ=#|3u(cRS3D)dKLz8}BY0+8xvLj9awiO' );
define( 'LOGGED_IN_KEY',    'z(,h$yT5AYYJ(!BR-z%Vx)ng z?a#/Y0`q#]o{18 8);H7=h>%vm:jv_!kL^=!<-' );
define( 'NONCE_KEY',        'C-?N6v^lE1/~ UD6=Hcn}yQDdH}hX=CkjxEykkol 09F;G&M4V3ArMZT}1 cQ+]R' );
define( 'AUTH_SALT',        '?9vP2)[S)on|F3?y{*/}P}M.2G03]zb{N!^q56*qHxx97|mUe cdRyJ0,n+zH{Ke' );
define( 'SECURE_AUTH_SALT', '!-!Oj3bxPlV915sD1y6lWgN~>fP@{*n-f_em/e@^W:?ixvbGVJ?rj$RJK)?M4{#,' );
define( 'LOGGED_IN_SALT',   '[j6E/Xh=OFU2=e=+hZ~iO$,6q,rV3*DOB!MC#5lNBu|V)0y8 ldi(xVC0xdoffM0' );
define( 'NONCE_SALT',       'hi+4FNN]TlwJ-!;%&6&CDq}vB5.B;go[8Z&2Zj*?z-%;ks+;_@Deznh.|<Xk;q|F' );

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
