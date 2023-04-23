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
define( 'DB_NAME', 'ljgym' );

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
define( 'AUTH_KEY',         'NdB.C$Fxyoq&wpInn(Jze5o.YMR1Xt9/6[^HI/{(9_(f*.`nJ2Q*om|/k^y2%,SV' );
define( 'SECURE_AUTH_KEY',  ',g>H%P^fOZ@(_k7u_/]:AzErhS^Ctkiy%UJ*FZBd<Zz2bD~@r%g9>vd%[xX-hVSQ' );
define( 'LOGGED_IN_KEY',    'bi`b2J^-4V+2Q*,^rz+k0/g2 G!~e<*}BFUynEhB~08c^t^Up$$mt;o@cWU]]6kL' );
define( 'NONCE_KEY',        'ltwIiA>:>z30SefUy^!Yz-wW)gR_y3{r.`7R*j.vbc+;e+-CH|J;STxLAfVtT1*G' );
define( 'AUTH_SALT',        ']tRriJW8b(2%B/l-E}fA4P<?tH?6|_+kV6;&1a6:2+77$$Q!crqWN86~J?w{wb),' );
define( 'SECURE_AUTH_SALT', 'Q[%Jf[TG-js$</#Ns<?Q(chKhi.0jinDw3F81q_!RNzQ/nmNk-~LUEzn,`WvhRON' );
define( 'LOGGED_IN_SALT',   'B+HRN)p_],l z0b_(Qq_ tzm8.><a(bAr;|V55oW1w:kE&?-{43|Flz@U+sTI[vX' );
define( 'NONCE_SALT',       '|%zXYxNY>EJx=X&OP.kw{O#El$:[AGQgbP2Y[=9%_rq*82BBn>;N7]O8S|NqItO;' );

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
