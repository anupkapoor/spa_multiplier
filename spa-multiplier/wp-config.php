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
define( 'DB_NAME', 'bhatia_spaweb' );

/** Database username */
define( 'DB_USER', 'bhatia_spaweb' );

/** Database password */
define( 'DB_PASSWORD', 'BQO[p$-MyLEq' );

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
define( 'AUTH_KEY',         '?Qy92t#[mre#@!:ZV=$i+vDBL#C,*Z/xj7P}T|kn~)!I.?yM/XZ`Oo*DQnfw+@2v' );
define( 'SECURE_AUTH_KEY',  'ycyBVF_8,wqnzTZw2{g<BD0d7XNi@87=,]/MCSEJ 1vM:-fPlw@^8V<@K~_A`+wK' );
define( 'LOGGED_IN_KEY',    '?<>Y>?!!h#1V^A>($!tWc]dkmR8zSt1Y|384y]_~Mcaj;icKni~FifU4P<r{fc1U' );
define( 'NONCE_KEY',        'sGWjoh9ltE`c5sHCim{:Kg0@9~c7.e`iYN3B)A6l^Le/G_&3ss<<j*J0=|yP>WKt' );
define( 'AUTH_SALT',        '*WdO$W%p.Qqu2KPDN.q|k>wyz1|i=HISihN-xyYL%9?`StUDpU7o~RQuB%$FH kY' );
define( 'SECURE_AUTH_SALT', 'q@v.(A#Bbu?~[Ddn00HXZf[Jka:drtXbn0lvux$amo2a)+QoI;XV;G[L)K^lljJx' );
define( 'LOGGED_IN_SALT',   '.ML DQ|a-74OF(kVb1gice:Z(ryy*2^FV+X{O(hJdK,.JAPpyz*9zd4b}kXw$A8o' );
define( 'NONCE_SALT',       'tIO^YSMA,#?.XiqE,J(pI:pnJujd0W$x];+#o7J96mx;(/<jR|CTZX;$|RP]Bj2j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'spa_';

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

define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
