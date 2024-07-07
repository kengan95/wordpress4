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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         '_<,B.jxb?Z#IUfqf{<o|[:*QMU=W/5nDN2R[a/_.z0]4.P8Nxu$EszY%RSn# )Js' );
define( 'SECURE_AUTH_KEY',  'jH-9:18S^-d9=}XiMYiAE/;J{?5s!Qo0Nn/5G2Jw{5!Wz26i(*iQ~fKWWJQ}6PMz' );
define( 'LOGGED_IN_KEY',    ',wt#:?MqKZVKS-B@T*EFza6(}jbmi`$CE2 ,[Wpzti2Lz.Y OhTec*P)-$L<<1WC' );
define( 'NONCE_KEY',        '^hnJ[yDa[WG>rxInfUwaHD2*D~SZ$gA:eTr2gsKLiD(ch>aWjo=O_MKVT#E!st/-' );
define( 'AUTH_SALT',        'Y:0*.?4&]q*Ei:m;?YQ)J++YSF;rBRn+jDVfPo{`&DrlWY8ZduDetB5ts;]Pz!}J' );
define( 'SECURE_AUTH_SALT', 'T7{IAhl`zl?#up&Lb9;_Wjtbm`rCS05]sI4P-_ftv:;Q g$[LX0{rfJmLif%JtGz' );
define( 'LOGGED_IN_SALT',   '<!t-60(pv?:vBv5Dy%Qd!8lU>kp8SK-;spq9>Q&;_OVXBfhqB23FstER>df2YTTr' );
define( 'NONCE_SALT',       '*DUL|vgjmB^2,tye]@.MRcsV5z}E.w@{vm=XnG;>|K0!-Y9)~)Y,$QO mXyTs3Nv' );

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
