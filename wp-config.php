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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'a1cookingequip' );

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
define( 'AUTH_KEY',         'v3f`]TV/#RDS|8:Rk<D[r+eTzyzK2Np^m5g6C+|6jwL@,@B-6*&/]9|i?cGiNZbg' );
define( 'SECURE_AUTH_KEY',  'A=C&t=6NSzu3d[5cfT[bzgZu4_b7dx??;G:<ACmVg:cD7DaOtuNB,][w|6txp,wV' );
define( 'LOGGED_IN_KEY',    '.X_@z0i+u-vP|o@Aq>bxng8Rp}8W9oN/1S1iJ@|z64; M6]:o&W-=q2ldDX1}%?M' );
define( 'NONCE_KEY',        '4RB5D;WP7UG9=Ho^5xm`?,+6MS2~&H<<%PGN$oT1^/:MwK~l:~CP;~F}Uh`jh=Vf' );
define( 'AUTH_SALT',        'K1QNp@Xtfl;#gN&x<xcyrQH%VZ}3oYvxB>o;RJ.^117y9Vxt9uo3V$HZCdGQs5Fv' );
define( 'SECURE_AUTH_SALT', 'uTf_1lZsS-!GW5slA6l=-|$tmb[bN/idLdCguv;Y_9QiD,gXg_jbzBLUgsG#IbiU' );
define( 'LOGGED_IN_SALT',   'HQlL7[O(s7UCyh8KhS%#R9Nned;H;@H}it.f;=E0Wp<2Ze}AkMzjXAz)0qG$K(EM' );
define( 'NONCE_SALT',       'B[nKBU)O(~;dAY^SZx%I~CALr+:6~|R8/ho+KHOyS]HPe,]}V$:2$YSG@wqLn~J!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
