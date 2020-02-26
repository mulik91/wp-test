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
define( 'DB_NAME', 'wp-test-schema' );

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
define( 'AUTH_KEY',         'y}hu]ZlFUy#1q4`JvqF}=_%K  Z(7-1-2P:jP}{V^J  KdDrz.1s]UX(JGaOc jy' );
define( 'SECURE_AUTH_KEY',  'O1rIZyP<F}}mzh{JHAZ}@$}O$~_LF/WIrRQv_3Y^:rJ!22f.ld5G{R<rV~_?0`io' );
define( 'LOGGED_IN_KEY',    'ovh2j`;W^~nJU59O%VkN3nX*APeZ0^~5ZST?bP(R`q&NK+(26;rWwu)xs3G%<PMu' );
define( 'NONCE_KEY',        'C<xY`b4)(q#d6%:4)IB1u4`aQ:5K_Ca[zPi5(/h7uahoQrc} W+hK42igWD{ ]`}' );
define( 'AUTH_SALT',        'F$EX1_y8yE#,)kTj0s&4JrBX9X<HH#m1J6K4^KX<^H|sQ?zgZ$c>.MhA+(DbSmUp' );
define( 'SECURE_AUTH_SALT', 'x%*S~Hy8+S;d+(rV)UFQmQe8X9RrP!9+u,@>@7>jI_EnAE:HFa<kUcKRX~Xp,i:h' );
define( 'LOGGED_IN_SALT',   '+)Rk)D>U!DIz?sfa1OFx<K9b{;bQV:DP8cOrCcN*B%,]WI[y>meX)=-;QgTxe7P>' );
define( 'NONCE_SALT',       'B:5sEU`{SE3+_-+]4-cLU)g+y/b{%;dX9lxMMb}k/nP7}sXfh_Xa{snX39.=bsG(' );

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
