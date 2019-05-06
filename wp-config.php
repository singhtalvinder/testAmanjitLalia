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
define( 'DB_NAME', 'mywordpress_db' );

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
define( 'AUTH_KEY',         ':J-{jG5CB[ PzE4EI4RR+n*2ivP.aU27ddfi?vJ2Y>gjl)c3pE02uh9Wy#|Ka4%&' );
define( 'SECURE_AUTH_KEY',  '<<G4m&~gd/ysw9v=,Z(8GGx~2Zyz+eB=v4;1oaG[=&cqw40A8ov}a<9xTd<$3U)_' );
define( 'LOGGED_IN_KEY',    'U+<sCxJ*<)*6d,X}jo][@Ls1Qb4K|u?lya;h98N07e5C9__B[*Xy.|kGhl8.NDy]' );
define( 'NONCE_KEY',        'a[LG mreK4<Km9(T,&{~MS>abo/OcVo?6nNpkZ-?X{a(EiC?bL[nQAOt>1L$T um' );
define( 'AUTH_SALT',        'duUzDBsv1bN[Bm[EAE;nx2SyIzedx_GIZ(K.%X/P/6[}|gV%8JbiJFcBXP>@R_}1' );
define( 'SECURE_AUTH_SALT', 'kpVS|8/&S,>(N#>G,P{{5}eVBQ+C:aO]9Y$}%kbtBy:%v5r*dTVxitGGe;?_8U5T' );
define( 'LOGGED_IN_SALT',   'IHhD>|}8@hk><dL.N#RB$(@,}hb#w8O4XY6;*on`XR(thXspE.G7=N;=ubMN6[|I' );
define( 'NONCE_SALT',       'BL17?=gJnzo_6XTb;_QPMX0#z.OaSK#3.D#V!&x.|G3= 9$2N(]}[hT`h`eQr),0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_alalia';

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
