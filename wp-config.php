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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'uw<A==$j`|%-@q!(J}1WXdE;>H%u-9Q|e+?}VXKtH|qm81r9e?l1vf0kKRQ*ssNe' );
define( 'SECURE_AUTH_KEY',  '#4G>{)C)Zo2<b89)>)oR3GFer@{T5bs1nMXG1uQ+:R5Hvt|Qk;]g7lzQ/.5%CoP0' );
define( 'LOGGED_IN_KEY',    'b1!WJ~fqWN~ ?2++csLc EV%Z_>]GgI2F/b{Vq9FEm]A3I(lvj,{f@:n_ [4<sy!' );
define( 'NONCE_KEY',        '<-o{1>RR_XO7!U*nY{eVr@IrJm7x:vYMcP!c{bsZ2Y>/Q3>QK(,75zH-t./jI/IF' );
define( 'AUTH_SALT',        'j`a=sv8aKr@Z_=a._u!lKJsKsB2;~;fxq[^{3Ff(V3=l*5F<<D{-8 ^|5|95/mS@' );
define( 'SECURE_AUTH_SALT', '@S:L;:bT^(^Z#Qk+y0k`Jhgl1KQ4IviwR[R%){#&;;batoViX3ej;t54H)Pl/pwO' );
define( 'LOGGED_IN_SALT',   'qxIB]SZu69f@r+mA5XgKaTtl_tHSi9u>R?o2-#q^-vg=S  ky`u^daJh;[<Z{o>-' );
define( 'NONCE_SALT',       '4y^d1,S1%cc#.=82e|fPTag7TDjePb(Mf97ra,!v=G;CF(*G1i&>_,8T<:wBMe=-' );

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
