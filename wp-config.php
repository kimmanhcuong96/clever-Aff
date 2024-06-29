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
define( 'DB_NAME', 'mmo' );

/** Database username */
define( 'DB_USER', 'mmo' );

/** Database password */
define( 'DB_PASSWORD', 'Abcd1234' );

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
define( 'AUTH_KEY',         'Ak70>%TamBR41>i:C0lE[X15PCv><$@<*]-)5WUAwbrz`TFX.~a0ur)$N6[4jJb+' );
define( 'SECURE_AUTH_KEY',  'Y%&<<=86O}{Ie1j+c][B.%nzrd25zO@MZJ[]N5c5([?|+GB{C<Rp1!($1)u&CN6v' );
define( 'LOGGED_IN_KEY',    'NYQEww[B[wP,sbs%eW<y-yVM)qt}k1J}X2nCrSD&1.Z3t*id_IJ@qf*Z+Ab_tRwq' );
define( 'NONCE_KEY',        'i-/C,  DCB]dQec#>nB?pc~ui&TzQ+BqV0_G(gt0ZBqSR^cHgD# $D{OcmXVni(g' );
define( 'AUTH_SALT',        'fD6=rc+Yc-~}8%HK!15.wfXq~?x+rM5hl>!]ngu.$bgSDoV4E$E!yQO`(y(Qs|5b' );
define( 'SECURE_AUTH_SALT', ')}{R>5}rr^EOH`qbpX~(^;6&-S_KABRnGI8HXr:(D?2&z<pT?^0A^MVI(r~9vgW*' );
define( 'LOGGED_IN_SALT',   'E6CN@B5`#?M*BI;qwT5zg!/R^H00U_]v/`Bmtvea4]It+&7gYHzw0{</Y5;X+3:x' );
define( 'NONCE_SALT',       'M<8GN4gZBM *eB7kH34&[;}Nmg!j`5-1j 2&,oQaf^q{woymmJ0(kY*.#>Y;i`R=' );

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
