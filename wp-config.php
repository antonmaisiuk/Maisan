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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'autoparts' );

/** MySQL database username */
define( 'DB_USER', 'autoparts-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'auto-admin' );

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
define( 'AUTH_KEY',         ']?~TX5~.xq3#:4n@xUj*V;~VD.LTl:pKe&H+<aq5FVzK[_biA60jp~*{)M*s*LKx' );
define( 'SECURE_AUTH_KEY',  'TV/F?q.&m5%xUS.n&2c>5|0xdb]P`-l=p:g1&e:?x^aW?F^/m>o q5Awo(SeV_:!' );
define( 'LOGGED_IN_KEY',    'DXsVQv/IvVuFeUbzK=A;x0IxSjeQ~v8bNzD1^of9GG)ay]4Y=.9Lq>f6[AX`^:TB' );
define( 'NONCE_KEY',        '(_*fq6[S-WicD//fvO4mi`<1F-&_bd$*$ :TB?)QG#12>B;u3sI%n3Gmnd|FdSM<' );
define( 'AUTH_SALT',        'qxb4D;Ue3FRr{Z;-pSi=`r@Q_^l:TxQt_Z$]}+mU&&K<Oy0ZM3wZZ@:44TaYJiPM' );
define( 'SECURE_AUTH_SALT', '!`!%;EM4=<8gFY33_Ouxi<]aW?Y.=eM/:.!@sh5QzJPk}}d=PAWSjO#mmOEr&1OG' );
define( 'LOGGED_IN_SALT',   'H)_k1R>-8BOTz7U*uN{Ri-ynwc$])&E[QU}ykt8 yhHx2HqE<#)u_$1)R0^0OJ><' );
define( 'NONCE_SALT',       'R:Np8[pUa,ok{(XQ3L<5h&$nlcNU{hq<=5P#.;{X9j6KqDEcmx1fj^%Nw)HTfOfV' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('WP_HOME','http://wordpress/');
define('WP_SITEURL','http://wordpress/');
