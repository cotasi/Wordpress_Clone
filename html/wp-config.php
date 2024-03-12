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
define( 'DB_NAME', 'haruka' );

/** Database username */
define( 'DB_USER', 'haruka' );

/** Database password */
define( 'DB_PASSWORD', 'gkfpa135!' );

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
define( 'AUTH_KEY',         'M=v]&@jO(mHhb*dVR-JcBV<B6F&vWkEu4HU9or@Pe}I<qr_N]-VchdZYt;CB3[``' );
define( 'SECURE_AUTH_KEY',  'H`naMH};WmaS?+V45[:jBE{(aLP:!z:W)]xkVprc=# 4s[c 7,Di|)V+RoVUYOnm' );
define( 'LOGGED_IN_KEY',    'ytwsWc,DiAF/sCZ2nD3nGJXFH?P+z=H<J<NZ;[6W@KMSYfP}X%D7OQt*(`,@Ne!E' );
define( 'NONCE_KEY',        '_MpyT(#IzNZGL.A{d^oqF(ZXIg*:X,*A_bXGk8N^KTjMU99_sQ9xW%rr69V=>J#4' );
define( 'AUTH_SALT',        'fO3jUaYO~hl%0UO)AEyo56,k@8JmBW(Tp,67=4Xw.k^|#3<08TXu7e#2kL#F>;k!' );
define( 'SECURE_AUTH_SALT', 'Ha^$ik6h2B59@6G^]e$4y686B8[_xl)>AkYDNCR>pCtuysG@d@D/c=QF.D7Pj7H2' );
define( 'LOGGED_IN_SALT',   'cv@7*3tB|&.w#g4V@(h`cv1aB7Qi/>./,gk,a<X}TTw[5CEF$wg,LW.@9aJhK}4(' );
define( 'NONCE_SALT',       ')NaI|E4Bo|bU(lbF06{`& b<UJ{WY|y `0#FY0{%FhO!9i,5nzbnv5]9hvj1KPT[' );

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
