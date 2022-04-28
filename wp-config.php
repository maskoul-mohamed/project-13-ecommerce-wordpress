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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'maskoul' );

/** Database password */
define( 'DB_PASSWORD', 'test123' );

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
define( 'AUTH_KEY',         'pkkj-nm(yPsPwP7m[&FgP4NPVte#1%k1RC}{IpC}@+=p`yND71eB}XK/RiJsMZEg' );
define( 'SECURE_AUTH_KEY',  ':m5s:qpsWDWf+.K_t9Lp&6g? jKl/Ox:n`5SIaT{{VTSM5(<te_<c+w[0P&Yg9@A' );
define( 'LOGGED_IN_KEY',    'a|?rRnXj#]Zind73lBw;MG+D_4J2DIN=7D+;WumvM@-A$A.G2xZD2 nR2C|N7S?8' );
define( 'NONCE_KEY',        '<qzt8zXDDmH- *H`.iDy%*!3[fxMmc^LeYkKH5S~BKWJ~BI;WP6n?U]D@+)leZB0' );
define( 'AUTH_SALT',        'oW[pYc|u2J/4,9r;HYntq]0ANTIkK6 $!P/awH~5S@!*!/i4F~0C /)rKZ*8J!qV' );
define( 'SECURE_AUTH_SALT', '^~C|qyN71P!k[n77Fna:yheUMX[q:|K[y.xv.6Se<GfrN(h=|j;b;Q(N2)4%xIC(' );
define( 'LOGGED_IN_SALT',   '|_ko}h4dJm$6tTP6`8TI(5E`/VDWa;zCnGsd|hMyQBP1J[>Wn-><:q08B}Q5jY?A' );
define( 'NONCE_SALT',       '/ZM!3$:sNEG5h4*3~Z$Vc~J e8^7X@%RaTm}UWO(0apeY6ld4O*}+>7kS)a;uCx8' );

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
