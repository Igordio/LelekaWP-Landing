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
define( 'DB_NAME', 'leleka_db' );

/** MySQL database username */
define( 'DB_USER', 'Admin_db' );

/** MySQL database password */
define( 'DB_PASSWORD', '16WjAwuRuvc4v742' );

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
define( 'AUTH_KEY',         '9+IvaB`LX(.&@/d~zjc&?GGK0O:2hs3rJ`1{u`Dt{:XjzcLthjFt=({%DWY#6W7~' );
define( 'SECURE_AUTH_KEY',  '0ac0(KFF2n_I-cuRk9&N0ba(eJlANfRgO~JUbuGAo6*6gS+Yrwgrf)~K|z:~T}d/' );
define( 'LOGGED_IN_KEY',    'V3MCOsq|R&uhcgmrGOX__lsxs8Bu%Fp=Nem`ap/voGV<ez|{R#`bxxF(=9QmU_IZ' );
define( 'NONCE_KEY',        '%{a656o!cnGvArt?hs0zJI!RN=mS.:13!B9(|v.Q{kPiN7ZS3/@b^hX(NA;2@&fF' );
define( 'AUTH_SALT',        'U[0eZ3kv8[o.Bd]J3:yRTqj3hy* D<e5K4DJ,(9D |F^`Es!fPuHK3o245&Q# GV' );
define( 'SECURE_AUTH_SALT', '?v*;j2{70mbI<p?e,( /$3;B_#KgO%262rZ6j4k=||?|e]#l&4G1b3RoArO]:9BD' );
define( 'LOGGED_IN_SALT',   'N*yLHx:ijZM4Zrrp2>o38,:ZE`hy0e $bn2xn{@iWuGF6:xdF#) HjanVL!RAn9;' );
define( 'NONCE_SALT',       'T_@F>OUFJZixT?q)15aqWZ3>EcXD7o<8COXM%c^%s@^JqedtdSTcxycO5a]5ksTi' );

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


define( 'ALLOW_UNFILTERED_UPLOADS', true );