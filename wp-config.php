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
define( 'DB_NAME', 'telugucric' );

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
define( 'AUTH_KEY',         '2Q(u={fu-#>`k2t2u2<BQgJA@.aF?ySD1fiVynAw/H=3o<ep8x%sQhoP2zd}C3dM' );
define( 'SECURE_AUTH_KEY',  'GoZVu*^ee]xS`V238+#`6@3=}J(F)&Zh,:@[tq}CtcPWbsV.;aAI9fc1}^FOJ 7#' );
define( 'LOGGED_IN_KEY',    'U.F*mz2y@l8.cJ$UU*DbZ5`*`#mz+R^a/z&NU=YoV9!H0b<&:ef)CYE1}oTY{n#L' );
define( 'NONCE_KEY',        '$3cD:[D6Pr/$II-5=VlN>}1iffQ|,WhaytPP}^h]9{?@+gj?q};@,hvT4]!9q?Me' );
define( 'AUTH_SALT',        'qzb1aLV,VwQ{.Kv:S)_XQ;N<d.=4%6)G2S7sHC(?tjU1PIRa;cyQhUR9)z!d|.@g' );
define( 'SECURE_AUTH_SALT', ',LEAs$)n/TB3RJ3P0v#e/wc74{SPcVRDnY}# Batlp)I0f-%J#mEHI__5hNOrQv]' );
define( 'LOGGED_IN_SALT',   ']t(<=xI`jN7ABhPj&UFV{gS^L8B>teDttutI9f9=>KCaL-2WL2R6`RD!h|[,Y~]7' );
define( 'NONCE_SALT',       'C:p#y!3H^>65_M67nPTND5Uy&s$pMs1^~O73YK5c3DjUV7]tI}LI7+T]B;r_a3|Y' );

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
