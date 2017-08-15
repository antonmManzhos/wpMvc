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
define('DB_NAME', 'wpmvc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '46.46.73.228');

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
define('AUTH_KEY',         '?3|*LnenTqt.hR [KBv-w[1K@G}J3~<A%aI`^K}>6 ilO;<h}c`Q]@)KsXX{=_}h');
define('SECURE_AUTH_KEY',  '_HXU{:*M)7Kt#b#T^-&u>FD5 SvXJHfC@O7 XqG_(*,.Bzw)1Qvi>P%SyOf#DQv;');
define('LOGGED_IN_KEY',    'Vu^r%Cp]Fg*!> csP1p,a/#13sL)7?j`D_~2J84-dy$C_FypU,YIec[i(SRhyuAI');
define('NONCE_KEY',        'YUUy`-UzX37gWWfK%,yT;nyjZ-PPe>`,a%tVJIrWiEiLNg7@a]]hR17);Q|*[[7y');
define('AUTH_SALT',        'H%#;&bS3XV7*4:%$Yu ;<!.smXX6ZB&_<_6x7)`9}o~|RbdOh5-m]6[z{/5T8c#g');
define('SECURE_AUTH_SALT', 'Wv/SXG_T9eRQ(SoJd[n.=Q=PcQycp_ g+v?x@WmG+p.yPDEJ+{6_su$^YAX3b_K9');
define('LOGGED_IN_SALT',   't$5Jf<RBF}t1yk2: HL{*`3ik%G<@Iwm@e(r7?eprdDbz^83jtq/mKC/f@eKH(^e');
define('NONCE_SALT',       'UN4ZNv %KYJ4C=t#9~y.U82GX.,5y  5TIr[jTUIj:$j,hsVbeNO)Sk1J}#Zz2V2');

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
