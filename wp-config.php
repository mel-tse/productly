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
define( 'DB_NAME', 'productly' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'ai+JWO+hl<>dv eERdI6z<R&YfBJR;7Z|*CAv@FKB7[A3y{wU@2IlS aSRgV@]g&' );
define( 'SECURE_AUTH_KEY',  'mHf#L0k_Op_G:v`wrV>9?4i@a$VHn1(S@V+z_;t;-uE6[ZyTBp)=}Y79 w}:_bz7' );
define( 'LOGGED_IN_KEY',    'Yw^HaX0eqJ/pg*~87-;fx`M$KR,D}J}`{0eP)ZgiD@7IiG%ami9zdnvH#``#U+L|' );
define( 'NONCE_KEY',        'hM&,67UhA4Q5^(V+I&x.]O2u&Hs7g Fx[(=kH{O)rVC{{YKN/cy3#9F*]+[+Vv,~' );
define( 'AUTH_SALT',        'JO^(LeLyY%R5fd}Z{%F+#F0?C4$iSx)%K:`/#*zO[QZ<j4Y9k9Vv %Jl68|)[)K[' );
define( 'SECURE_AUTH_SALT', 'VGLfzw?5]-2^&zu^n/n%zZd<sov[AjKr:bg%h?513[{|ty.NAU#d}mEn>C$Z=Q4-' );
define( 'LOGGED_IN_SALT',   '[,>;z:/fT2Atzo@A?m%^~r8^.4f(iBf0HC}TwDe%&Og0R~q)+,Z,ev7{0l)T9BQv' );
define( 'NONCE_SALT',       '@B&1eN^%oZWo>/9?]-OZ^Ie^9q/y^? `T`N<7uZ43DD//6:<+~vjO.-4} UIH*}_' );

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
