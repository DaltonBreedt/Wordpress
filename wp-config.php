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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '7t#|d3P2+n9j;3,/DsMep-#h.w1rqP<BIQc6OZ;s^>rZiz~urRfHOod}Zu^%7mEb' );
define( 'SECURE_AUTH_KEY',  ':O9RUG,|{`uI?|gViBMP5XJVeU!W_+#cL;WUcD5WBQ M2=fm<W2G=v+1%:(iMD9g' );
define( 'LOGGED_IN_KEY',    'g  @h2B:1+4?$A1{2*Zrl4HMnk3B[QT?ALsfAUdD&F4-j5^?A>tuDa&e9Az.MHGR' );
define( 'NONCE_KEY',        'K-{XCI;rrQkh45$;VspKFawh$I^qOgMa,sxp/uf[`pC?Ww(luy?iWfc)X=~pnh3I' );
define( 'AUTH_SALT',        'in07+!QFqYsy>yGzi;,;9=)bNYk3?ac^s)]XUh1mK~:e(thZKmL&Y?IZZ=kCklVp' );
define( 'SECURE_AUTH_SALT', '[,#k`IXIbb|75#q==qOt2O8S7/A)FL7q5;{k8uL&P{BT_wt L{J0*j`zEiK=l-W]' );
define( 'LOGGED_IN_SALT',   'e4C<mx$d-XfJeW!$}Mi`,HZ%VxX)RjD>*4|7+UV.R[uDs.-j@EgMCB956D|Wt78q' );
define( 'NONCE_SALT',       '$aEOO<S(b(+K!$%qPE+J&w1c7Lt:q<cJ/U[q3ALA:UbgxJ-3jH|4mA3h~U^V<$} ' );

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
