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
define( 'DB_NAME', 'professionalfriends' );

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
define( 'AUTH_KEY',         'Y -7X?|rMo2P[E<Q^cS.x%QS^U-$+?9<N:k$Hsc[JEQ9lD79qWPhnt>Geugo;26:' );
define( 'SECURE_AUTH_KEY',  ';u6}`e]*.nZF)!em.mTeb?Z+MrZt=afQn,wdV-7.*;xd:WEV@#p9K3)8:l<-vXdo' );
define( 'LOGGED_IN_KEY',    ' B`(<n520M |1+?u!NG<ra)a]T?O]Y9 Mv_-5qVu<sX4BW|hI+Q[Sb;Vo)mb6kxN' );
define( 'NONCE_KEY',        'moJQ68*<Vy!pwJKDf;4trk~TshF6fsMoOZpeHG6WotVU~LyKtAaWTvueNTMDQ<A%' );
define( 'AUTH_SALT',        'iojhQJV/djh3sqA*muo{^%`%EOc2[FrHAe)t{Uu:*W!)!cE%4(3 q6 LztEZ`6.;' );
define( 'SECURE_AUTH_SALT', 'e^4]v?f|^LYd_u F?E2qRjvIF/VILJU%m_@Y+;_33tOY7`+ox-jXmgBv#~1GFsZr' );
define( 'LOGGED_IN_SALT',   'EGG_cKGdj}K]#gx$*w!6E|sG{`hF.p.&`MTeU-VguwK2gt},V@Fh(v_H39CUsXs~' );
define( 'NONCE_SALT',       '.&;(r%$%E%kjZgycrqg0qtMupQoB9``Mv!?M2O!/J}`-W;16)^l>9nQk9=Dysi5x' );

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
