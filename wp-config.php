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
define( 'DB_NAME', 'kramson' );

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
define( 'AUTH_KEY',         '!U(x0am~Fyic+D]xQXvcWEZ[$Y0Zaluzd#Q2nEqIe.44jL4pptrFg_~<<lsy$nw!' );
define( 'SECURE_AUTH_KEY',  'qIte[=~(/)Vm>RHpp+nCcQWnjI8MwZwENe|Eh~:cWW)x;mgb=Gi@2*<|q4)|rXyq' );
define( 'LOGGED_IN_KEY',    't( J6Bd*RPDNEOKsnU?&mU[?mR|2stD!h/)_ A6mcOA0} rn;z4d[1@C?uomt4/Q' );
define( 'NONCE_KEY',        '}7E3:lc8qKPyd[*T|!,(A__[2]J `6te&T>2p&dpOV{Jc|xrQq3>(V[G+$,3zwNw' );
define( 'AUTH_SALT',        'NuHFM!{fB1_X2 3e_mLat2eN<mv BA%!WnWLa]^fjq&dN+Ua7*7a|%A>Q/pnCNW&' );
define( 'SECURE_AUTH_SALT', '|zPI]Nld+U{;c*tPZa$;~U01l0MYYf;<L0$Dl<pL$q>W5k15|+*<;FXawqQ   b ' );
define( 'LOGGED_IN_SALT',   '@PcoUUn>bvu4bw1!/xq<.3T0t-)pH={gLy% BOIuk|txrpxo1YnD7u@f/tGPUAW(' );
define( 'NONCE_SALT',       '0*`vuRWQ,`<Rp8pB}t7RA2eCe</yc0_wQmOXQ03;`aUz6eFVY.N`j.Q8QaJ6=_C2' );

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
