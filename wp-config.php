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
define( 'DB_NAME', 'miranda_db' );

/** MySQL database username */
define( 'DB_USER', 'miranda_db_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kdiD83u087*76' );

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
define( 'AUTH_KEY',         '-[Pr<U^_m[|zaI+j]iVaLA`vFd@K9><7?{AQKHb<A92ZN>>9@V1U{jbZhsEZv~{>' );
define( 'SECURE_AUTH_KEY',  '^DFq>F _wB$HX<9nLI1Y)*%Tr%9<n~D_eG.:Vtod#U&/Qakhf5M|lwnm_<2>PJGd' );
define( 'LOGGED_IN_KEY',    'L 6}q~01ef!PP&HKL07RVEAPe>7aW::rw4>T}a6k=#[CKY/!b,U**-1a.fq![nSI' );
define( 'NONCE_KEY',        'qp!sT:pD8_x-B>Z4u/8ZYF<Z/g*O1KQwv=~dxv.ZZD*Ywg>`)jiX57=X1D${zlj_' );
define( 'AUTH_SALT',        '^1;3.A2o0%M9pg<ln0pzipc&MTfz;}&xM*D{2 Xk(#QH[9V%knq5>$wkD7J/yB.8' );
define( 'SECURE_AUTH_SALT', 'Pa4dy#1,O[M@5!vb[$[k0*q3FN2Hq2G#r6, I}yi7Vd`O(P@>nd&{(K:}ROc$Hj,' );
define( 'LOGGED_IN_SALT',   'ikd?iQZGY%jgQf-O_fb0&=O_<u*<,5gHNoySg$-JT_t{6sGaLC~y5# P&S0&qx22' );
define( 'NONCE_SALT',       'XWYi$scU@im}Of@,:#G@ZR@auPSvbVc<3)FJ>F~3j@SY]A>URxh$o>+K2`-z8_gQ' );

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
