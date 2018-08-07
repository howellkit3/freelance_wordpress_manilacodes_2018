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
define('DB_NAME', 'manilacodes_db');

/** MySQL database username */
define('DB_USER', 'manilacodes_user');

/** MySQL database password */
define('DB_PASSWORD', 'm@n1l@C0d3$!');

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
define('AUTH_KEY',         '<+9Eqy9hsS-1-MR9a_8s{0p7,xRAJH!vQEdW|(<~3M?Xs;?0A;%Fa(ZW~}=0$Qq%');
define('SECURE_AUTH_KEY',  '8:A|QuV3W^csr,GRrhI7VrizSs#w[_,.G&hR^2fNpDu$n+(PQVA%Wzc$HYgnh4<k');
define('LOGGED_IN_KEY',    'x[qq[J(Vzp+M`V|s!>j/FOp|gBlg*sHJCcAX*g@t:FjGKB*7pM~#NeHX!Pcmz7U%');
define('NONCE_KEY',        'r]Rh2EH/~OsjgW6lX?nDs0m46KTW,*>>V`FIHyg[V^B#<YKWaOw%F+Mh-kS=bk<!');
define('AUTH_SALT',        'k5i],!Nm6%mU9fcebMnJ%Es,O%g>i,nOXBlQ^x9r`h;ba`dGezt?Nb{1#e8cE5wz');
define('SECURE_AUTH_SALT', '?-cqSX_2[ 6MPrFt_d6g)S ,4A+`Ex>.Ao39m|NSMpH4maG]o :%.=.71mKBL;y$');
define('LOGGED_IN_SALT',   'umMTKb?>6Dc4?dz9A)pjF]b26GDLwNpmkm0hS#Dt_aR:-Kp,g@8t+T87iM)>i1Px');
define('NONCE_SALT',       'E@p~xlYC$AVnK12n6PTOXwF>/^;H/9Q`ECn ;s~]^m`pdun+qZ)FtLWguDo(ENe3');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



