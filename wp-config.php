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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         '!9~I/L8,h&8lJmsB1GIeyHI`29fFZ%eFBN5)(Om/`MhdLQkF$^tJ>}7G4_B&uK@+' );
define( 'SECURE_AUTH_KEY',  'XD+KLOr*b%gp3#{FZ3#uWr#GaB-3:z6TVh?;o4+)nx*9AxybFSu^!FzHbf94jXv_' );
define( 'LOGGED_IN_KEY',    '>38kFUA+U3$&Fdi$5hq10,c7|js0{=PKnwZh+*UnvKzB}(NbA)n|S@Y%KemtD%0n' );
define( 'NONCE_KEY',        'UmGe0BjTXN}f_7+C8q#,dBK|?>RW7K_*vCDd;1=%Un9i}`b]NQQh4M#/9vz)^;TF' );
define( 'AUTH_SALT',        'EBX@&rI5iK;?tDk&XRhx+MPt=ew?Zhmt${dLkESjQZt)C&2j;R <!!4&;PEtU9HI' );
define( 'SECURE_AUTH_SALT', 'M1vCIX F<?2d}}QpA1<B`AoDC]JJk `kH6>{<c&}`IDoa@Y}_@uI^FGy_K/k o>Z' );
define( 'LOGGED_IN_SALT',   'H(qG1TbTo.21KLJPkX__OP=Z^J#,Zr2H[[%$@s0gAx6uQt*s[%-wi2oW38~cyp>h' );
define( 'NONCE_SALT',       '|zd6,Ke5I1>rcbeZLi=E~~*aRDEIh;8(sHZ[@E31G{OL2L_ rjb_6{#b)03:>VQf' );

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
