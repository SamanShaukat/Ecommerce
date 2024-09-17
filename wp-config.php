<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yFpzSnm+pckfwKpI?~2PV8@jF.uC zqk{AuOU]]N~9(n4HXDsBl2Ee11Mz]8Oq~L' );
define( 'SECURE_AUTH_KEY',  'jf/<e1c}#H&Cc!P?cLRs?**K}`IP8sqF^r{Cj4AQWj-sw/MP}o$4EAXD_j~wq3X4' );
define( 'LOGGED_IN_KEY',    '@1sK;)lE;d+`7V5kB}5HRCT#{T|;}YqZ3DH+c:=I&e9v=T<^c3T/CJ6n,{q=ya}W' );
define( 'NONCE_KEY',        '-4z2MGYwu~7k/5*U(8WS#WQd]@@micEDNkFU 5H*PG4]DC_K_@n%EcJhJkI,08e-' );
define( 'AUTH_SALT',        'P,7#/uxU&u6.#O-nXpTU{M#T:WIWY,1u+2#Ek7R$`~#kV&w1{(:BY]8*DAc9R9i2' );
define( 'SECURE_AUTH_SALT', 'wustY56C%G`gj*=2A*vb5Y=N!ZNJ)A@3c=J8@X>~wY|cLG3HP?I0bZBeZN:%)aC(' );
define( 'LOGGED_IN_SALT',   'w8):cF>),u[J-wZp|:M0u3B}GcCri*T }h:X{fnKUNY5CSzH7n=e<^(|q#)D%%Mg' );
define( 'NONCE_SALT',       'CpjXzo#2,Ta`;([G<J7PFM<w@knJFv<I9PK%AT^3SJUCPy_Ed L3?!=,D[S|y0%5' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
