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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abasiaba-okono.io' );

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
define( 'AUTH_KEY',         'GDZociKfKh^r<iEe8B{51|v`o14-lWk[@7tExVc@v=9><Qh0OjcXZ9i(HeeHPI&R' );
define( 'SECURE_AUTH_KEY',  'IhX~n?7}v]%4 cIs|<dwa_[}[[_;O_MjCXAa>s nAVC_yPNA&g^{:ey}qo/BUX=/' );
define( 'LOGGED_IN_KEY',    ',rk:SxWO&UV*K6#C129Uv;_?#!4sZ,&p}w9fjEoJFxZG&lklPKY8m*`4hs?$+paW' );
define( 'NONCE_KEY',        '5S5%n[TQoEU)y`W3(<L;E{}@2E/I:x#[dCJY[J.AM=DKIwi4v>}~E&ri{7VJM2_1' );
define( 'AUTH_SALT',        'R;E.hf#@2D.|+/R7^.% )0?8co>84vp9yFji!x/YPdG]C^fo]7RK1E`yU6qi6-=j' );
define( 'SECURE_AUTH_SALT', '_x].X2u-jOltr;]#CPg0?6JcdKBo~hM9}q+3-V]XEE7r =R)N[e)Uj!+S}Gj NQV' );
define( 'LOGGED_IN_SALT',   '48hT9;k~Qb{N_ )F!G.iuk^k[%Uyth&KgEJSwqVVHE=.MA(,mYRSd^;.gT@`{Qy]' );
define( 'NONCE_SALT',       'Jj^)cu}$%0KGI-upyqqCRM%7SboR]6)nw-ou#laD)Q)y?23c1*F {CsX,j1u!5jS' );

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
