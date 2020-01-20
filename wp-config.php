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
define( 'DB_NAME', 'trainingdevelopment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '((.@$W=,^j9#,j1s5~l[Z)^KbB~!O*%$e=QJf?O}i|z*C/-8=o/)]qu[Z=R(*&6=' );
define( 'SECURE_AUTH_KEY',  'eoRN4N`X4[v@G@xGp/%fdZ~pw{n ?vFg$.APUa|yMNTLFPj/p4@PRrnkwG,x$kV>' );
define( 'LOGGED_IN_KEY',    'I2)Ufvtg0zwKiidX^#>u7i_sR:>#aR@Up27zlC79XMGF}&UXWPaPIGc1@vH$tzWR' );
define( 'NONCE_KEY',        '4_mE`C,;X^*F;sG`@u%&U *Nz1i8q$:5H9~SF+h}_V[$l9J@V0r^IPzN`Y((I@W_' );
define( 'AUTH_SALT',        'N{9^BCc#B[0rv>[%QI)Hf ,v,Y4;N;}LoZDOhWR=(gr?E&GFXP<F^p&D|wT(UIz%' );
define( 'SECURE_AUTH_SALT', '?=E*mpEivv@36HIoVACWz9WyE(!Zu5mm/a3qY:rF^KZLffY:Ugb~H !(H=9uCqxf' );
define( 'LOGGED_IN_SALT',   's*1;Ob)M1A8tO?G50;*O=wxa~?rS=Z=DJcD?9w^-Sm6gAVF+}(Gua^Tnn~y7M#gF' );
define( 'NONCE_SALT',       '?yUXS~2h}HJPQc*cW4#q^_S,0J_)xB i7r:m=Ohi*V~!H$3PV*-cEA=6>YiLFj.[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wdevelop_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
