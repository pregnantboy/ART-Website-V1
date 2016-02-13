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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'H08)DXAB|K<dWpZu~xUhf&-s&+t-(n)Xtd!l1+/2wT$[=[91Ir,^`+8Ws6&H42[F');
define('SECURE_AUTH_KEY',  'Xcv?0}yPt$gjPQN^qmN(uxj$m:2gb/8>QAEmWaLwebT||:3@E;%*_C%(Y~I>+T`M');
define('LOGGED_IN_KEY',    ';8>i~QM%+|M;7Cw^/a~BQuk-j_RB[;BpG,80+9~|:Pc0*{8XEsyk{|.+t]vl<vG3');
define('NONCE_KEY',        '7erVBO|2pbfj~1@MQGp{adq%E<]>+ {{#mXI`d>Xe/I-oM~sE|VrO6P)2*k?YLwH');
define('AUTH_SALT',        'y*$]~^mB?@-COqVT+XxDJ+W6+|,&= dN0vt;mk?pv_^/P9/P-pD;8Y.-{l(CE9S|');
define('SECURE_AUTH_SALT', '+)-GvuCqSWnR_N+*;D9sm/5YyF72^aty=ASa3$myS=,jK!+nd,2z`|!UKE@*YC+V');
define('LOGGED_IN_SALT',   'Bi`4N!zlm:eP`-%L7W;mtQ:0j<qP vUK-XE)lT8((IiFO6sHgX5PDA{}1bxTfPEo');
define('NONCE_SALT',       'mX2Dm&t+F=uJwZ+!]V% Z*O#c[=-1E=%-.yZ6TJ|@zJ|m7/Zm3tE&Gj0Wt,Bioo@');

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
