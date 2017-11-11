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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id3513072_wp_f57231bd52bdbe375d4fe9227d6ec881' );

/** MySQL database username */
define( 'DB_USER', 'id3513072_wp_f57231bd52bdbe375d4fe9227d6ec881' );

/** MySQL database password */
define( 'DB_PASSWORD', '83d57dd7e692d379a257d05bb12704750eb4e283' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'D?M1n`#%L`_]PUd((w4*O+1>zSKsP`jJM0Hf&?hNpri(E-]yTd4<#oM6z4Gi7<a&' );
define( 'SECURE_AUTH_KEY',  'N/MvO@ ;f=PEzL{rFM[K%V^uF|i(?V`ucl%%Fd&^@BjVs2Zf<w({{;<BB.E<!W%5' );
define( 'LOGGED_IN_KEY',    '4NvEHoGjxA|VJub7=jYX[n/yKz(a>}nGx:ROWwLt=|p}F_2`y&a2D`iqyEF3bEx^' );
define( 'NONCE_KEY',        'U2_#pigIvy3l>)/rFm0JkCT6^3)L=|6;#z )J15Nh|XaVQ}UL^&0:gUYxJ#a;1Ld' );
define( 'AUTH_SALT',        '/?-d@%&Ri3mIa4x6lrT6RYE_Y^cup*CSi$c%1Z:$-UdwSezEWO(]YRK:<QH,mKmn' );
define( 'SECURE_AUTH_SALT', '/czHHCnQPe{b&D+qZ.b*AJ|:#[q*[ f(fNhN)+_<]#1Ch# !IVsGmwqV0@Z2opu3' );
define( 'LOGGED_IN_SALT',   '}UEb6/o^(Bf(^qf<1Ula3Irb=x)HoP-08%Ps|_BwH` i{$/gX**u_zWrD%e[%pVC' );
define( 'NONCE_SALT',       'e5sb%rG}.Xc_nplKJ>4D{#}&nX_Q=RJ^PAMolz&^S<9y2E~[}Z8ad0JAMQr9$f%o' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
