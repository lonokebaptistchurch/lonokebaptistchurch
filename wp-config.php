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
define('DB_NAME', 'lbc');

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
define('AUTH_KEY',         'qQk;`x|88~U7PdJ#5F8=uATB|kWxj|.`(I8<;y9QD*o&1r3kpyTG]?OY,x[MyQ.E');
define('SECURE_AUTH_KEY',  'N$MWZVnDguCKmNs!a(CFLMI={G?&FC[GC$Cohu[;W36p1h^5~(j& q_Y!n:;0%V~');
define('LOGGED_IN_KEY',    'A^0q/Dw]PX#CVgTzc^Gtc^yK<rN.Mvsvt)c{TV ae2$=*ENPgvP(>,,(z/BQ<E}?');
define('NONCE_KEY',        '.<7-R$~sB>t/s0@6J$hvLmQ@k`e0eDN$sB^ uKV<8/wL=65Kl7THo}EWESxfxnCx');
define('AUTH_SALT',        '/cB%hd,921uR,}Poq=VKlr3QmOQS_>Q|zJYTKJS`!xy@~FPfqSWaYRl?Da*9PX-v');
define('SECURE_AUTH_SALT', 'QHXh0 Un(G 83>,ps:>*+&@gi>84}X7)he:FEDWz6B;/3Vf[DEuzt$Sw #{y_&%U');
define('LOGGED_IN_SALT',   'wnNX;+R5@N$Uy)l;M`}Q8Xkk/K0LES1m^F#p?CDO6=iV<SoisW6Bz1(P62r3MR%!');
define('NONCE_SALT',       'J4>`gqt;e*h]L5o68g,S3D7@HhTc#TsVeoQq&9UfhIN+c6+yeb7V?:C0+^^AHY`>');

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
