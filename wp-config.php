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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1111' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dMKR_=[3irnVWk&jP39jIB?Pj-`c5YH;4K*bGbmOF2g&7@d#Tx?RG, D:iUYEvmc' );
define( 'SECURE_AUTH_KEY',  'OkkXS=YSO{tsQ`&2X]%83B mNq~}Q$SSW>X@|^7R4cGy_N+tOW/#gM>|;g&&CI7$' );
define( 'LOGGED_IN_KEY',    'p/Mgmc!wt#A@|_I4jxx8no~prQSO4Zb[i*txjj`tm26DVYP8Vdlt|=/OZ-][6I7@' );
define( 'NONCE_KEY',        'rhh>s?Y7EZ($5t33z ;0Z6kQmAQF~jw2iH-QpVo8h^4vwwxPa%6B[P_@dRnzK9mM' );
define( 'AUTH_SALT',        '6Iw@R}yr?P3Q?`Rb:Ys&W!XL1?Sj3[{J$~,Qo{9EojLP`x1@oo ^_7Z48(O*e6^#' );
define( 'SECURE_AUTH_SALT', 'YP7&,#tQd_[;L0;um~Sg!`}LZ7(arL+rDr|u#z&:EYvKOiMOfzDXZ|6K4Z)Be}1.' );
define( 'LOGGED_IN_SALT',   ':~}*mxj?ujWd-Ca%3W;!uef|_rs}#(AEq>tbxdVH0C>ZEEq^=hB]VR?wk9sp`J,D' );
define( 'NONCE_SALT',       'wz~N-:tAqiZ5|p4aoBSx-eq<nq@q/lreU3XkTnIkHHcK_)aLrEe(}(teZ^D):6j{' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
