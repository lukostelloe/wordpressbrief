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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressbrief' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^>BHo_?)T&[.Aw_M7mGpA?_t!T4YcS c?`#(kT$PX1w(f{h}Sd7q8?}8su?L(FJ3' );
define( 'SECURE_AUTH_KEY',  'pseHqq=75/o*~wy,nuDd8L+R2GtU}oy&-g8a&~nHJw| H5aiXH!{<wS+i2yC{;w$' );
define( 'LOGGED_IN_KEY',    '=hD_ZTnqaOq{/>.M+gt;b(wKo#Lg*asoVvi/fCZ|zk|GrL9Gndua$eg`d5nDYTP|' );
define( 'NONCE_KEY',        'n^&dn&,LPF]!eCDv0NlmC2$cls] {(El qpOpduPQRP4:m/H$%2;r/7F>JAvQ-.9' );
define( 'AUTH_SALT',        '.^KK`+yF@+MMxXU*JV*=Mz7<$DC`PbW/,8|S|SQ/oAuk)T#k`iUq?#ndqt/rqMN4' );
define( 'SECURE_AUTH_SALT', '1EAeyGXhkNan)gWW&@K~dPAP4/r-PesyMJ+6w>r3`J>eo pc3cY9?<-Ak52/s+xL' );
define( 'LOGGED_IN_SALT',   '`MY>fycNN($Q0fMZn1}$]nv+|rK#TQ(`Q8fA_Nr<W_0UbK@tFs?|x[@D!p <N3EZ' );
define( 'NONCE_SALT',       'Fsj_l7`Iji<BbsI5GWfr2 tc3mVb%5VIXC-,@Jne!X)J}l^<+XX0lT}WJhX:W8jN' );

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
