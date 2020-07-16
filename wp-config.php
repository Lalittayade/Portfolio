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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         '=NUU:Y#&kdMLSKqvTjb&22F,6d#{N?YJ3}$4mNo=&cQD05Rm;{Ew8_L4j}4e0V,=' );
define( 'SECURE_AUTH_KEY',  'Pje0X|*U;al3<aeqlc9y7(/E6Kx,.n2wg4cuwW[e0j6%`RU+krb,(oBJ?hSqh+{m' );
define( 'LOGGED_IN_KEY',    'F:TJeVHi4&Jpc3$&ZxG%lWlfa]$Ih G6US-axZ/G/rJ6+;iqPt/L?#Z]-VgmmFr+' );
define( 'NONCE_KEY',        'RS#=)Mhds6n}0W`{|Jqd||bx]~a(GwAY/uQLS|0@9#-pjXDgFZZ,9I&JuwpwSPdw' );
define( 'AUTH_SALT',        'cNyhPb@{5FE{ ~nD5fT.B4:U2CrBz Y^8BFQlMKEyjcv3+3,-0:pjqN8RRn4-0R*' );
define( 'SECURE_AUTH_SALT', 'A}dY:#@J/|Hfyy>3_;TvhiO%(4lsp4}|Gmm_-:V7W.<91|s-kI!BRRRrbn3(I3.e' );
define( 'LOGGED_IN_SALT',   ':>2+SlGr.WcJgoG3Plq^H7#&bAn Cl1@Q2_X[8d=NQ2b33f-[)v2kr{5w~Mq~#F&' );
define( 'NONCE_SALT',       '[(0N|YhVXyZK>km)oa(j;.Izi~,*G3MZ GE>d;3,*ekBe|Sox5D.MvB{xZ YA:l2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
