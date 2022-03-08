<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u827574715_4IhbH' );

/** MySQL database username */
define( 'DB_USER', 'u827574715_XRrwv' );

/** MySQL database password */
define( 'DB_PASSWORD', '7G4IkctS5u' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '(>%tH>.*N%/?tuC>0_L1Q/=:jW,`u8|kw[EOEN<ma%7+Bvhm]++i&v!O2p:t4(-:' );
define( 'SECURE_AUTH_KEY',   '85^h[=9W}W^dKyn6Tx%DU}-~OIe|s_tEraj[T p#ISwzdUf2IrUSdWwul6h:c(P`' );
define( 'LOGGED_IN_KEY',     '5!t~d+^.:M_u*)NS9PWjhT.tLe) U_GG022*{Ecl{L y~HDQ=`#*NnDVQw3pFJK$' );
define( 'NONCE_KEY',         '!y`;[Yp~u$<*[,uCs0He~O$]]7B[_[}_Yq?3Y5ROr7no][]7KvB(}IIEPO?ffa}j' );
define( 'AUTH_SALT',         'l_m2*kv]59l-Be8J:Cnh.q:^Uw2~c?ceS5*6Z=:VB;NbW_]}}BTxS(dv/B@]zw|@' );
define( 'SECURE_AUTH_SALT',  ')|c=}}~^${RAX6hT~u;9/_e@jWpDS5*|+TLB]s[J(-3F~vjsw%@Dku<LOMf7zY#.' );
define( 'LOGGED_IN_SALT',    'zNl;kI${3|D:0x~het@GO?ML]Cm(T$F8Jb[77NOC?_761}mmpzL5~wb$F7%U&qQ1' );
define( 'NONCE_SALT',        ';:0,2uL$wy0$qFi.9BZ:>hPLHdr7!4,ka{)c5h9vLuXhxU7,?14- ,Y}!GFcK_y%' );
define( 'WP_CACHE_KEY_SALT', 'f+[|Y}{0o1_;_zG)r!!nUo74h^}c8AD6Te32~))p!M`nWXr2A3n1PVW8m+2O16-,' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
