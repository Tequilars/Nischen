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
define('AUTH_KEY',         'CH7v`M@eQ^,pDI`;@b3-ic]5TG3>:Cp!dS}{:.b+q#s_@Muw nVm>q4Z&a#SOx8h');
define('SECURE_AUTH_KEY',  '&nJN6jxhnJ(gvm7>zgq9!e6)qxvc;gPBk8!o)`B;6k$BuxYa|.# ~8-HTEW+.0*^');
define('LOGGED_IN_KEY',    'w-NhsW]&c9KsYeM zx mC[jzn@pg<fB5w;=MTd!qUH;&@;*E/o<Vq[[:?!)`rg?3');
define('NONCE_KEY',        'Ic?^9XFS/$0dISdWZpU#(gpF)og,f]8b;}3FXidT2CM(WO<[g=!Ciw0ZnYFo#X1g');
define('AUTH_SALT',        'KAoshTHgy9%qS<ao218}H/&u+|*u>M6i]m&Y$+16~q KS<0qdKDBGnv4l3,^-C#t');
define('SECURE_AUTH_SALT', '%,}3RLy^GR[[/+Ue81R%tdhE#1dQJ}8lZ]W%fD*Pyf$%=d%xESQv}HoQKavO$U%r');
define('LOGGED_IN_SALT',   'Xl)/M3760fB$=jZ7[N/(Kf!R725p[zT3iRiRHDGrw%~Ih~_EavB^%$({$V +E(w;');
define('NONCE_SALT',       ':7K fz!y{e:sp,<|k^5Yk^mLGkA-E]fgvecOY`mx^900%*X4%[P54-?G3@E*?e*,');

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
