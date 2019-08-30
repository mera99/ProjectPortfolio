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
define( 'DB_NAME', 'martazmi_basicwp' );

/** MySQL database username */
define( 'DB_USER', 'martazmi_basicwp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yWZhncJJGB2Zshb' );

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
define( 'AUTH_KEY',         'iEP;tZp0 [fE5quSg}+q|S]Jq;AkObCLi0}G.7X;;Q5D!;*WN/K/W@uxhPl(}ZxA' );
define( 'SECURE_AUTH_KEY',  ';V5l$:0tWb/p/iJj{*TC6IPaL7iK6Xt.9 wn=n3Os>Ub) 6(^xDwgHUSHh2|Q.+J' );
define( 'LOGGED_IN_KEY',    '{ Ku[m[+l0}J_ukIAkiW<Q1K>y4-e<REVZ+{C0PR]~c]DVk.b41t!1xX89V.,{qs' );
define( 'NONCE_KEY',        'RtT53Y`v6>Bm_Z?K%fUg|}Zo{CFo4XcIzTnl5[^%Ea}F;i{PgRmx<b[P#dw(;Qv)' );
define( 'AUTH_SALT',        'T9v}{UNYc?GtZ)t4F4^%d#y34?JH24?;IA2BN|++(*oK: QbM)LZa505pTbR&^1/' );
define( 'SECURE_AUTH_SALT', 'xp<_LpYq3<`S`HS:{v.Nz5c4_[sgSs(6}3 JCO@.ER#<,)E?mRR?;HELy:_I-U|!' );
define( 'LOGGED_IN_SALT',   'c+phMj99}[eTcs]cEeR74Ko);No&jO#aAf?GD``pRYkk&4k=kMgN~OKV2?V]jqlV' );
define( 'NONCE_SALT',       'o3_Cld_~o|N*K7FC7Z|~F4!U{h>[)*/:]VA?%.##fvpCal@crHI<`U5#+zYs}_9{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_basicwp';

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
