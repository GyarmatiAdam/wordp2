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
define( 'DB_NAME', 'wp_wordp2' );

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
define( 'AUTH_KEY',         'UCXUiaVENJ)0^>;1gwiWeIqP<oVvW4Aa4]*<)Q6_:dY*1)A5+ab~~nuA_b0>u?gO' );
define( 'SECURE_AUTH_KEY',  'IIIMN_#J]O_vaJ.l*sJ|CMOWik5#}w7U[|^n^)}KrXlf{ykRE(d#CfJ*;uQ1;?d=' );
define( 'LOGGED_IN_KEY',    ':db;Tpocz$J{-D{`,:v^lLfe@4dAc#:f>i7.pzCT#c$#E_Dtr4BY^#G`F#V7H$)j' );
define( 'NONCE_KEY',        '}xSg28[xdi|6Jq]P Dw>;moqYhJY?hodj54?X$)m8KzK:x>AgndBpUaoAOL**6*|' );
define( 'AUTH_SALT',        '/^w%FtwJ^ncZt51*[<sBh+s$S#|2kX|uoP)B+}XCfTv`m9#+PFdDp:7&~!0Tqk^r' );
define( 'SECURE_AUTH_SALT', '-WOg=os(To{CU%520=~_GC(Dy+/?b6H=(lq6d3Oz~]J,%5a]SQnE)swa}cXV?uzy' );
define( 'LOGGED_IN_SALT',   '%KhOcOYa>QYtTDz>n ^FtU977zew9wAcgGVN/. :@f$^nd,@AXS8qvS+NI.Y*.A7' );
define( 'NONCE_SALT',       '-[}I}qO~odbOHaCM(vE8=l([zx1Bwr|*G}g|G$~t8zQMw~E<juLJT)-=k:.EbiMv' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
