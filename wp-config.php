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
define('DB_NAME', 'business');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* * #@+
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
define('AUTH_KEY', ',T>>}Nq0OM2eVAN-{N,GAtVA#jPx}d)k14m:+/l,M68dp{xvQT=vq!7j07lJBWnA');
define('SECURE_AUTH_KEY', 'N?P(`/VU;3qWJa>uS=<g%sLj7<H*@s?_:Vm)osQux5BHOg!b;|mX5tNA_O@TBHVF');
define('LOGGED_IN_KEY', 'bR1(fxBklsf{J8ssSAN^#A7[vCqz6*o[7etXW.>{n4;rnEM$FabzPyP)E>/{QmFp');
define('NONCE_KEY', '1NCh>~G.mH%[Gb!_BWg%|OvdGjjt5Dr)<FcU>NnR;PqB(K&3FF?0:u{WRjIAmUH`');
define('AUTH_SALT', 'l;W_<v(^r>7!6LNnSbmfV!cTB:@cC!$4=XKJ*z{ xj0h*N`w-2b[U2|r0Bu3|1$v');
define('SECURE_AUTH_SALT', 'Jr2@n<|9R&AeHn:u_=RQ{ZA~v[RrnI0Cv1FOZZ-dh 4p`%SJ3Z6Z6c]CDxmk>pZ&');
define('LOGGED_IN_SALT', 'Z?x)oId+A9|S_ODx,<hNaeMH(mJX!J?T>|t:J}b,<64;WLJ.-#hDmCz*cnB9oBjH');
define('NONCE_SALT', '/ALeuh9ur$s #4:q0UkcuSe8U:52_GCd7b(^I]]b|t)c Ft]U[J=/NV1QF%](ETl');

/* * #@- */

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
