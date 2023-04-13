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
define( 'DB_NAME', 'trabajosenatipru_wordpress' );

/** Database username */
define( 'DB_USER', 'trabajosenatipru_senati' );

/** Database password */
define( 'DB_PASSWORD', 'B3hnG77@mGBF' );

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
define( 'AUTH_KEY',         '`,btZ{KR4!qkwm3[8 3,qWBG[t561v=8Km#)%c9V}w8t[K!=F-.ITwc(Lr8bDy{k' );
define( 'SECURE_AUTH_KEY',  'Qt0jonWyrW*f93cNgCCy)BDXAU62a{O04U,), .1pqUA,[C@~YXegrW/PO9*EN>O' );
define( 'LOGGED_IN_KEY',    'DhEuI[myf|)!>DPO*qNmK(D+fb_#fCSYWs)=Xq@fuMApmK r|Yl~-}<`D# C$<%v' );
define( 'NONCE_KEY',        'IRJrc,.|bVcL>j@,ZD9e`tG*~O KvH.+JobB`wLu;i6@!FXR@%.zL:BI!ms*%2Mr' );
define( 'AUTH_SALT',        '_m*p`{`02L2-3A,`0h0>VI[ cLh8=f*4SA?8.:k6.2H I,x]wavy:$c);(RhL:vV' );
define( 'SECURE_AUTH_SALT', '.2;%^%Ur4CsH%cv-B&SXC-+:[ERuK6eLGl^VJ^13/C8D?#A+k_5w+`$_{|ux;Q3K' );
define( 'LOGGED_IN_SALT',   '(loKinyEM5`iULu7/`GuG=@7o t}~z[<fB9E@]ZA&s0e7AUBrve=ycSSlb~(sj0j' );
define( 'NONCE_SALT',       '|iRQN3#48PJP%?;F^cO.w$p<AYEWX=#>/sf>?joVWKXY2`:,MzHQy3r&K avxxU^' );

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
