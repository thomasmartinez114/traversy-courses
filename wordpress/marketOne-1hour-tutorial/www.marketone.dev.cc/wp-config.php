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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marketonDBo4wlc' );

/** MySQL database username */
define( 'DB_USER', 'marketonDBo4wlc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gOG7uldJB' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iiTaH+iePa;+<xH2H;iOWhS_tpa]+_;~P9K5lWhpV[wwd1D:1_SDR8s~osd0!!o8' );
define( 'SECURE_AUTH_KEY',  'Y|3^MYFI7nUfcJQ^nr$j3B>3^{bIMTEu$jfMX>uy,q7<3E{bmTTeL+iuqTf$*<u' );
define( 'LOGGED_IN_KEY',    '0>@NUB8J0coVYFN@kv^nvF}B>YfQM0BrYcjQ^}z.q$IAE{bmTMXEubnnTfy,;+' );
define( 'NONCE_KEY',        'g>^>yMBB}gMUjufA{$M6IIfQTfQ,q*mA*TEPAubiT<y#+P6D2lSP6HxeitW#2*' );
define( 'AUTH_SALT',        '{}$Q7}fMbMX{$.uE{$QAI7nTfqX<2**]xH;A6.TfLLXEubmxe;9#]x_S5HD]am' );
define( 'SECURE_AUTH_SALT', '^^TfMP6IubmjQ^<y$,qA<3E<2iPTeL+iqmTf$.<uEP6H;9mSeiO*]xt+i2*];+L6' );
define( 'LOGGED_IN_SALT',   '#LL6qaiT<x#xK19]dOO9telW]x|wK18[dOZZK~psd:~0@RCG0CwghR!s-k4|vc0^>' );
define( 'NONCE_SALT',       'Z^z^rB}}@N8JRBvcrb$,uIBB}gQYI$n$mA{2.XI<bQXI$n*qE;6<aLL6qbiP.y#x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
