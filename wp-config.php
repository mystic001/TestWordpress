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
define( 'DB_NAME', 'wordpress_base' );

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
define( 'AUTH_KEY',         '{{1<w^~o{V4|=^Gz;$MDc^!a!b}V@YL_cXdyD(uy~#ndwL75/;6)E6K) MCf}dBL' );
define( 'SECURE_AUTH_KEY',  '5Sg{B2jzU[JIzHDi,U/Zo7giLus,#yV/wc>T(v.C8CWCQC Xx^TSXs e!K*{}o9E' );
define( 'LOGGED_IN_KEY',    'a40wG&-(R1Y]Uj4+C?Le2w^~^<tg0,va:g26BUTqgV}d^2vpWN[*N-+140T;P85G' );
define( 'NONCE_KEY',        'MuG8|RlsF:.d;)w[/+)Q|@&%~e,@V~Tbl5)>Kg>fC_Ws;v_Oys8H{VG:&86,8`<F' );
define( 'AUTH_SALT',        'Sw,x[0$U@!xG&m$;6c~cqh|)WI`K-rbTAWgfqqIt}$AuempCX&#SMeVZ#qonCYE|' );
define( 'SECURE_AUTH_SALT', 'oB#,7Xx{;(t+[!YB=%:5tXgNQ9:c4j$x,?BVcB0Tg4H[gosoM%uBj-b8K+rM0( c' );
define( 'LOGGED_IN_SALT',   'v:N9EZd6OaI+%8r$!yZ]uF$2Fl*?Mgb$nWC^l;T>}ph~|`/+{$.D8+vk:Wnx-A9s' );
define( 'NONCE_SALT',       'SzN7W@4oNj;T0v#,%X}sKKo{tZrQ,SY%REKZjwDKS;Cy_t0C;enGiAf47D~GNQTB' );

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

