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
define( 'DB_NAME', 'revizli' );

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
define( 'AUTH_KEY',         'DXO2T$hbhm[6|[zZv3.IMOB;]EGSEDG@~Do)*&BiWC)n31WUR>Ig86XBsGn/z2mW' );
define( 'SECURE_AUTH_KEY',  '<9M tBY7&4O[oy5Mce9GCbBGdyvW,qqT7c%V?]1dT[U]6*Znmg>kn$f1db]zU=3%' );
define( 'LOGGED_IN_KEY',    'G248Vdax6E!h5jU;JjvJTA(wm%`7S_`V.!Z}uT(_1-aUD&_PLv|@ .VEt[*j,-[A' );
define( 'NONCE_KEY',        'y|Un3PTjSXAleaw}| 7#cN0xzZXu/mgT:Q kXtD~Ontyp>f^LznB)Xj;&oxr!;`G' );
define( 'AUTH_SALT',        '`20o5wj{=aO(5-i#(|PX+aSpMywpHuh&%5)fINkOz$P?bp=#X)8VgD`3?B5%5iK_' );
define( 'SECURE_AUTH_SALT', '<-!fM):SU3y9wOn1OUA_$}_Yc%_7>c^0pk!4E|;oTk88D8lyvc!be/)}K1mi+q2&' );
define( 'LOGGED_IN_SALT',   '_Kw:3,KS5+X/j_3]Dd_H:hm,FTyk1%0XWlxrYEQ:L]lH=k&@^!{+NdReqHY!H`E(' );
define( 'NONCE_SALT',       'PF>$@es [v[<Zu<*f`2#C<d;LiV!ekdQnN_O;52R-f$`iX6[Q6Y_J<a+TuuuFB&K' );

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
