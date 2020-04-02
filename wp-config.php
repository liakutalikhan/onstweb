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
define( 'DB_NAME', 'onwp_db' );

/** MySQL database username */
define( 'DB_USER', 'liakut' );

/** MySQL database password */
define( 'DB_PASSWORD', 'liakut' );

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
define( 'AUTH_KEY',         '_o[%puak~U49Fd_*EbU.;.9Wk8m@}#.VQHa]!WdYY9f=>4WvJG&og:S7M:obuT|v' );
define( 'SECURE_AUTH_KEY',  '*GaA_M:`v+xz0DkT%5}hBxV>q$:Fz7uA[{*Y)7VGgKGw1BwlzAdRYfn ==9)D*_F' );
define( 'LOGGED_IN_KEY',    '?Yb/yDAAghH/Zro>j3%}[cc#;mviV-jEa:RpY{^#WEG@ eG}t:luzgn{+r|oZ^{T' );
define( 'NONCE_KEY',        '~#@YI^>ar}fc-5KlHJ{CbIiJ EANk[^f3 <er_sQ?]d]n65Z=*z!J.}sp%?KDE,$' );
define( 'AUTH_SALT',        'rurz|KfM|AS<(w;O6VqGYT`=#z+0Yu:[lg^@_nX*0>:6@MH}[Q3 Fo3H%IkC~-YP' );
define( 'SECURE_AUTH_SALT', '4iN]@_0r`aJIP#5g}6<UFN@l+MreP&R@N O1I>-NC {;7$nQfnGbxZ#:.<|ubgW!' );
define( 'LOGGED_IN_SALT',   'q;0<^?;O7v/gzYefX&A42ch1LO@.GGj0e?C_T<AMy{i `wb; .gJ:qT!N_&-s37m' );
define( 'NONCE_SALT',       ']suepHp5kwheb<R^vX66.jEHz7<gvFGwMLr7Aaa&^9HibT@&biRay4TKik z+$K%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'onst_';

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
