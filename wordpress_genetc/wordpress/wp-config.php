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
define('DB_NAME', 'wordpress_genetc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BRGJB9kta3g*!nB5@p(lu.WCi*lI=/j6(iI6bWbfi@in0dZQ+[]9Fx%([6EnfCOa');
define('SECURE_AUTH_KEY',  'CRvx3}v S,DBOA:G*Ck?4,rQqMP l-zy@!Sq5AXV*ixCRPX[ah9zImrD>ekK-TX%');
define('LOGGED_IN_KEY',    'CEzDg^z[th Mm%{WC]DN[-fw!_-*wj!a :<nY:&Vat@#[6}r]z9wzTRRuexS~r}<');
define('NONCE_KEY',        'sk|v/d49;u}znUoj?b Bzhd:jY(_oLSa#5VUfaJI%J6G^yGf:=|[ ZZ&k_ED#+5B');
define('AUTH_SALT',        'ewR`ltxG<BySu#{r;O}g<$pZ+D<p5q4q>Q/05_XPv;-KI}}8gQ$--/jYo,?T,?Jy');
define('SECURE_AUTH_SALT', 'G!PL0K{Dx|/K)kLz)Fkw=c[Ux0Pu@Pz*DXuYS33Osr^dOU3:xQ{4qeY+vZEB^mUq');
define('LOGGED_IN_SALT',   'Gk6T/FU<m_G&,nlP6Q0l#dst;8&8Un$,BYPt mh-AExoReOL|FS+E8w}mM1D^8T$');
define('NONCE_SALT',       'I>|lwyy6FlNX/%Uc&16ji0ebJv*@3<<OI9,qs>}0byz)w DM6k$iVka:[n5FQ0cD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
