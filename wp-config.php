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
define( 'DB_NAME', 'wp_west_coast_waste' );

/** MySQL database username */
define( 'DB_USER', 'imon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '$5mUG0JxNz_/d366?&!Ne1U*J2FHb|rVw._{Z P#i6~9R_^enQ`w3|x(k1F8@%:%' );
define( 'SECURE_AUTH_KEY',   '-N&pC_iPF]d(f/WH=UoWnPFg?ZcR+0Z:HTz<WtO:I{^+;y^a?Ia^%NCxT<kE5,`P' );
define( 'LOGGED_IN_KEY',     'Kod)6>hgeZ?tLi7o.fg(s}2S{f,=q3_WrL6Xk^FA7x.z|J9UCS(lfkL-n^=7kN>E' );
define( 'NONCE_KEY',         'hdk~KcrG GS;mD/$dM2 [Ew.&B/`sNjJql03OPt:4?7Ywwf{U !y8I/^Bq-R#Zw6' );
define( 'AUTH_SALT',         '.kygn#}g0Mb ^~|;j:y# 2Gv5C8}Ev4 6?9{*tEZeoIcXm8]5*bo5oq<q12A>d j' );
define( 'SECURE_AUTH_SALT',  '*.ctC2D;woxos9Wg~2ruG{tJ!$&fxYv:-JLUEcM79)X^w:,I!B^v=|xYQ(y#cZS0' );
define( 'LOGGED_IN_SALT',    'zAjMGz=ot;p4qX59MGq[8IiR96##M}i>=CI)XK|3DQ7ujH&%g%i5+M!_p3t<>z?g' );
define( 'NONCE_SALT',        '31Lxq*Y,iMX)&>MAb91(`>[|wrc4_g8K$Sm!<Po3*6|lo#Scy..DtS2V!q2RQBSO' );
define( 'WP_CACHE_KEY_SALT', '=#3(tJtTlYVyqpi4k4j[T[??Kwtt4i3! G};6A,>W^E1O2_K}JruGUi;b0*EH}t9' );

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
