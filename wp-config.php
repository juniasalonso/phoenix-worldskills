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
define( 'DB_NAME', 'phoenix-was' );

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
define( 'AUTH_KEY',         'D^Y;zZnep*N]Gs)d,@<JqH}x=H-]2AiMhR4>As=lvEAd6AQ1xPo:2/e:dN8Hk`C!' );
define( 'SECURE_AUTH_KEY',  '{B<By29pGjkwRKY{0M!4$6l3GWa*gBU@.e+$rx* %S@ZE5T0SeryIh+hq`*!iW6<' );
define( 'LOGGED_IN_KEY',    ')=pg!TEC Bm46CA3W>U-~Hm3Wmmm72wa>mv:n3RY4GckU3w?rP`dmv:(7ho^Imp<' );
define( 'NONCE_KEY',        '}r(xwZ8x,=.Iv$2|B]=M11C@tRIMhyB#_%GGw+BO#Tn[?c#Kf-j6(P_~OeM2sqX;' );
define( 'AUTH_SALT',        '08a+Tfm ~0= I]><ECS(A:fw_Y4^UP,]Sh=7<>#&jfS=)M5.8X0t$4z7^@TZ!v[V' );
define( 'SECURE_AUTH_SALT', 'S6qh+WXkjNaXf`cNJwEjhDP|3/myAq#^wnJ-UVLzva!]hFXozG!IweXr)j~$QV=S' );
define( 'LOGGED_IN_SALT',   '$5>&*{!K~U4%QV+gs6E+#r.5NJZR?8TWFVOum8SR1/w+bUCI%d$I+;ZG;i}d^Weu' );
define( 'NONCE_SALT',       'yV5}4OfpxbKbPdao=G>+sChJA_)]*9GG%quYad6F2)},3TqlqdH9(ZWJY;>?qp|$' );

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
