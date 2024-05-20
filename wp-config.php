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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'hA`:bvJ(#NNss?z9{}7;>=lTm@PI{VbK#$Z7n/NZUMyoUPqwLKM*PWWNrc{xw+m(' );
define( 'SECURE_AUTH_KEY',  'T4tR)P|H1X-l>%jalNl{AcB{d-{u g&LzZy;{LC`_l>8|}dQnA@t&qmF9IF!AB*R' );
define( 'LOGGED_IN_KEY',    '+[9v1$79FV(8Ti{i0ZWr6eeR<}:3E}07*&k)rBZ&+&3`e61l[< -.n/gS)8$`<lx' );
define( 'NONCE_KEY',        '4PPA XU#U{;W%d3TUuWNm.XJT-T`8m7Y7xOtjEJ#XP~7dkm,_4KPxlyLD4?4W]OL' );
define( 'AUTH_SALT',        'c2+clXJ[0LxC{NHwh]WEB1`5)ENBsz4$J0n?3SCc$S2I27>IWb@P|Z=6:bpq6i(T' );
define( 'SECURE_AUTH_SALT', '_yf[{Ejknl&r67UdNjKm5/+o:=m_T).=.0R$VD_sk~w&561_hV,SeBl4BEVYJr_Y' );
define( 'LOGGED_IN_SALT',   'QlX9ERM znIdAvnq>m/Mx&BvAY)HF#Txvo*BBDxN18fCs}$q37;U;$7o4R1)q!B;' );
define( 'NONCE_SALT',       '(zxCnyy}(c6(/;FYyxj[3.g+=c>m3R9R3Q-<<::/7PR&?WL6QJ^;dQK*|U~AFsoz' );

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
