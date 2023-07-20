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
define( 'DB_NAME', 'vedora' );

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
define( 'AUTH_KEY',         '&n2ZKA5)px`{ix.Yff*!5L4zUK1KZ!9mbevfR~sOhq+??ytHT)YaD^c]y5b&`q[=' );
define( 'SECURE_AUTH_KEY',  'mNz5R;{{qO;g!9R/q~H_r}xvFLP?qZLL&H)6AuMMTt.Z<IEn9e<)uV-u#4<sK6*~' );
define( 'LOGGED_IN_KEY',    'WhxFY0fDhCVXV{{t=].=MJPxj^w(&lA4Q9Grhf}@iD;`]G.;]*;/hPbI@b~?jvs%' );
define( 'NONCE_KEY',        '%}rQ[NR05K4hY_J7Y:y6@~7:B6Oq_u~w{9B3W/Y`cpE|U?3&Ez{N,^@m/<$2vx+>' );
define( 'AUTH_SALT',        '7^A%BFc|;@>9>Zt)U*4dyQe}QK9A$9pEJbja!bjHf`fi3n7v5yI-$A66R3~Dj(YM' );
define( 'SECURE_AUTH_SALT', ' Uv0~18t09@?!3*~cyr{=DSoJDKIkq}|+>;HSwDr@;LVG;~qKM.IDniB3B</V]tk' );
define( 'LOGGED_IN_SALT',   '6l6wLm)YA.mz(:w3+%YE)rT6eb[ QEA!#5H)We3q<8z||zSNV}z4Q=UjozxE+DOH' );
define( 'NONCE_SALT',       'Sox*f`9#0qbE}Xj6%!@U>&(kGH3;<1sE8}-3Nk<S;Cf^?$CMa$$f,WrmYQ)cZuP9' );

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
