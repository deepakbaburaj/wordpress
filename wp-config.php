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
define( 'DB_NAME', 'WP_Project' );

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
define( 'AUTH_KEY',         '2olLJX7eds/>$we2Ntz?4%k=amF|?&dXGcwL$lg6Z;&3b!/CoKKW])J-c)UA!-DT' );
define( 'SECURE_AUTH_KEY',  'Pa1mr+h##X@qNx0+C`|:iru+r/?i^tXh]/|kIhL+]Tkg`C$[=ShEj)EvpUUJ^P,i' );
define( 'LOGGED_IN_KEY',    'i3Xy#5eD}K5aaGYFKw:qI/}m80 tg2&>|iy(w]^Nwh5X.b%x`F_k6ush0dHvQwXm' );
define( 'NONCE_KEY',        'b/0%iARlENUa4ul!E(;m_CKtJy{d[USOf84Z{mKih_l 6.QqS:$8KA1?`A 9bgk#' );
define( 'AUTH_SALT',        'dnlesXK?QX~.w~9dM1E%)tt=WbA|NG|Vsb.B~{`u|CRgCw_;*xc@npCkF LJ?FG/' );
define( 'SECURE_AUTH_SALT', '<}R;*)q?D!-CRJyYr#;r_W:C9]nts13MivYQ8^L3M&b/trk0$Q9#mZ;1ZPO$o)(e' );
define( 'LOGGED_IN_SALT',   'Y+Png1PWDG-dsvHUaJcjqHc65uI3$>6SPd_a}`W%-{w(o^qy~f,2bH}AC_jplGn)' );
define( 'NONCE_SALT',       '8v()ufN0tYUtpZjU#xLFOzc9pp+or (]2f]<t7_g1Qj4?96IfZK|}l+8m{F>&kzU' );

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
