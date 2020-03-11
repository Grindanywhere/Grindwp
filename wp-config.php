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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Grind_db' );

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
define( 'AUTH_KEY',         'U@FW>EbJl@E&9|/w210qLQk J;]dhibDNsQk))0ss_U0AIo>INy7h#0U5Epo%_c)' );
define( 'SECURE_AUTH_KEY',  '4Ii=lbq`0UO MTGY#/ED];P<4DzVRr~LS# DAR(%{)]3]ni9Ty`o~AYjHb{E;BL6' );
define( 'LOGGED_IN_KEY',    'qYo!^?bVLNX`mK3M,oslp6e>^1!5~a]hH#`uDSWLa6+R4ub;Kcg[jT4ZqR=CIBsx' );
define( 'NONCE_KEY',        '@m(5ro}<SDw|2Pk9xz5.G,tD?3?y74c]#L)Jjx-A::_Dn}bec|r;C0]RWwFW]^xm' );
define( 'AUTH_SALT',        'm:Kioilnbzw[:Rnb]vxL,]56+(714zD|AJ-fbD%Dp@,K*|_WULTDgvAOUy :*CK^' );
define( 'SECURE_AUTH_SALT', 'ZuU?q;>^eKND%qR?8-sfyw4()fv )7i]XA,dEEL>3KWC0xl[ZlD$R{vS6}h(y[k}' );
define( 'LOGGED_IN_SALT',   'm~cT(z*PB.%l~WSoa=H(%H*EaE|nq,.1>+|6_OrJZ,ea2v4wjqM]e&@=R2vq%=y(' );
define( 'NONCE_SALT',       '&UN^!9oX0i~>jE4w],;7 vpVoi.Zoy[89/@xSLn;.(,/F:{Xmx+)Tp$t/lW Vd`5' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
