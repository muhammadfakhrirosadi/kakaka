<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce2023' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e:9_TD2H{Q$}~@<}g{.a}oa8wFgLh7Xiq2#_9B9j/{r2mVvOi5M628UzL}CHU`/?' );
define( 'SECURE_AUTH_KEY',  'CLkw)$edYOk6a8hWpCZS7]UoXG(B@>jzu/-0ZI{r!}fS{i6q#P&F&~@ l_TB,j08' );
define( 'LOGGED_IN_KEY',    'r,4g*294xd<fyZ2`CbqB$R*JZ4W)Vxi 2@Tpff4t/8[m&nMnw5B$HvU*HFuHfL~L' );
define( 'NONCE_KEY',        '%UZTLa6Hzb(~k*7MiaYPz`Ra<aWciBJb>2^}ZiiP]u!~K|wV6^[4$V8dO>D{;Myi' );
define( 'AUTH_SALT',        '&AAOyrVq5~~|cL/;oVZN)s[TioAZL4j3X_=(OWKNV13I)nC3QJi$>,un} .>NL^r' );
define( 'SECURE_AUTH_SALT', '}E8,i|xI`qSgjs9@} gCA4HwY#P--WWMINMQ4wdEu&NiX(V!IOkO.O<0k|Rtu*H,' );
define( 'LOGGED_IN_SALT',   '^ ?qVC8F[$,zcJz@wpO!PSZPUl/i6DLn^Z|>(bav<qJ2d^N;uLh?g[^{x:OvX}8|' );
define( 'NONCE_SALT',       'Ve<*N3I(+Q-O;F5xJ76gF=V%</`I6@.0J<c*Xa}qg|!GffA XRL(~Dux++8G;^|n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ek_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
