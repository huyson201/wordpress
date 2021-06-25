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
define( 'AUTH_KEY',         '#WuJMdn8b4W1#Irls-nC%,6=o(-^2n91`Yi8vz-l(~6;m[*j<,4z[N!^9P?F{3HD' );
define( 'SECURE_AUTH_KEY',  'BL/3%f~iew~kQ@cHd0GJ`C<kUie[F`w3L|38}D*$#RQO$9P^#S,C@&% y*Z)%B8O' );
define( 'LOGGED_IN_KEY',    '$C)|3)1Zy[e*YmNl[e&:7wpFJQoQE^&D,)ub,x7k9S4]qRGCOD;?_mj$`<:XJq+h' );
define( 'NONCE_KEY',        '.a ],?i>|4CbAL>_sXFNkT[T .H,1AjZ_N)w(w` o]o5#HDS*sRScCmiXn&tZR.Z' );
define( 'AUTH_SALT',        '/^fL/J8jW9]Q2cd>wTKy8At`umfe7@yx){yFbAY-ew&%&_+Nk&#qVr?9iNXXdri|' );
define( 'SECURE_AUTH_SALT', 'M;IA6,MT`2t+PX9y{grqv!~;.9ps=75aEw^eb^/+wimWoDLg8-bS8@uGNA`8{O!h' );
define( 'LOGGED_IN_SALT',   '{C,aa6wQ$u]x`n->T<hEo-LdR-hF^eW0pw!_1_;P2|w0tuZO]k0b;o9&NzeKEk>*' );
define( 'NONCE_SALT',       'LN@RZgcBN^q]Lu2C)B,?7[]FhsAA$5GZ;;-`#ul[Pn(?~j}^:p8o4TVOBEq>9cxD' );

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
