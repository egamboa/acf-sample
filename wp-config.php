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
define('DB_NAME', 'acf_sample');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0Pt?+V1gpWHb5V!bY7s>A1M C KF)yp^UE  d{`oB1h]F*Gj{^l^D=u=vG8]dE+;');
define('SECURE_AUTH_KEY',  '%n<vBpiphQ2l2&d,o)3TXNi*;`KK<L)sD]1REM$EZ^Rw4<5POs{(1S8!7l VVC+[');
define('LOGGED_IN_KEY',    'Om^A#|9,A?1iV>BT1}(@l)n_A;WdZZ11cA@%KAE1X_gvv;+G6y~pN%Vio9R3vnnz');
define('NONCE_KEY',        'v:Lyh:r76-Ag~J,GOYZo&jx8bDm 1OCb$p^^2v{qq8c?79UcpSZLlefWQoyOJRi ');
define('AUTH_SALT',        'GsVGFIn<x|~<TY$[sdi!XKI]Fqo#bw(yS6%a?ETxk6K(i;K45kJ&,6V/Ryt FX&6');
define('SECURE_AUTH_SALT', '$!R*natz[66rx(16]|1+Lw}-`.Al+>|(iQc-N@AI3B?,^g8a?!7&m{K^]wO:3)!k');
define('LOGGED_IN_SALT',   '%}NKO7a/){YQ<&`KD4Cx$$c;cVq;;)w4z[TME.^y:zMu5$e+U]@)`Um1dV=Col_I');
define('NONCE_SALT',       'MRzG 2iOm0Ne4Jw.g@UBNu/D);SY~U)Hv88*tZr1()L_I@[pGF&m#H<[?8G]$8@S');

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
