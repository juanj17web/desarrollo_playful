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
define( 'DB_NAME', 'playful' );

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
define( 'AUTH_KEY',         'bdxAO@1N&:}47#LJ;>VoW`G8A-|].-m8VF?NsQ)lKt>1:w{hs7o-KcOunaJgka>@' );
define( 'SECURE_AUTH_KEY',  '0/a** )6_WHysEH?M_x_S%B5MD *eQDTEW/ixknB>i4:wfv*ZLPSndOB/kAKeT?O' );
define( 'LOGGED_IN_KEY',    'a`1Q5hhb1a0L;C8Ge?B4LgZ8oK+94DD{ji<A18F@dB~MMXUBi6dJ$[2k|!dBOOK~' );
define( 'NONCE_KEY',        'W7Ju T.Gpz#3;;&@A,#z9KnriQ1ue_5~Vo>phT+>V7q$>,}cyc]u&]J&bCl:-Bu@' );
define( 'AUTH_SALT',        '}!HCP|,h}LX tw*-Y](~F}XJL^J.,7W{.YVv!-t43$D{yP=Q9Ddj9b]P#%UuxNh?' );
define( 'SECURE_AUTH_SALT', 'Wu%sbw)9iU_Gnh[#[D$2gn=|SNGuaG]5[rmQqpZ]nW$lex1DoJ]o,qK,`ko3hhh_' );
define( 'LOGGED_IN_SALT',   'M&X3kW&ZAW5Q%Wsv@29M[@JkF,qtcCGffy)@}n7XUOma[BFgvjK]54uqcZfcKT{m' );
define( 'NONCE_SALT',       ')t@Poq(><w3d[5b =_oxPGZ/`|O#pe:ik=}DOF-Hz`1D9a);[|dYWc0]+#%A%5hG' );

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
