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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev_wp2023' );

/** Database username */
define( 'DB_USER', 'usr_wp2023' );

/** Database password */
define( 'DB_PASSWORD', 'G5j8d5b7!' );

/** Database hostname */
define( 'DB_HOST', 'http://mysql.urbanestate.com.ar/' );

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
define( 'AUTH_KEY',         ',SLNa{B-n#Z(EsknUo~c]r9lFX ?[=a@G3L*,/Qbk3;BkkD-8EaeRtJe :sVWz%=' );
define( 'SECURE_AUTH_KEY',  '3^gTyQrFgG]$h[AM]:{ea*0-b2eSSf?rbO:LR%$M8XzWOTF44Ap&i<M{_X[BZvc@' );
define( 'LOGGED_IN_KEY',    '&WPl++VEVy2(s8gjBg:[;U)TPr3x0Td0)`Fi_YPWw!0VKS/kA@T*PPDJ[]*STm0p' );
define( 'NONCE_KEY',        '1YSzs0xufctXj<sXCp*e2bq pboDRRV|6aaqlB.A$,=Zdbg0*dU/2F38MR3emiN_' );
define( 'AUTH_SALT',        'H>Lp;x,,4C1!]B_nvRKe4c:Gcw[)/EMoYT0 //Mi(_kt)fY|cAY~gf.NCrCJM#|5' );
define( 'SECURE_AUTH_SALT', 'Q~O|v&CRpPfi+-J%zR)(9L<+-.v/gVX-rUTQ9s`TLc]<m5lf~/Wi9 Li_Pj?0|j#' );
define( 'LOGGED_IN_SALT',   'r2o?2vvU]+Luc`C;o|H{s3k-J(>:aTTsj+A]>zmjihtMvNe|rt<%ck&>,JqN5 PM' );
define( 'NONCE_SALT',       'X2_yJ_olgoJUZBANk`=;;R{^`]4y?G&*sr;;n9Qc@rp]subm?7}qmRA;gH1-#JWf' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
