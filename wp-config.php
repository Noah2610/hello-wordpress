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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ' uLH2~yo|<LMP-NOB!M;NOokQLL+8=fV&(A@jK4Jq4TThW7zqjKG9jEKU3M<|aqh');
define('SECURE_AUTH_KEY',  ' v3Qf&%Li/>un@4OHth5+(q/x6bMOdJ,KcD@?&r2l:*vfTKJI`<dluut g=llVaS');
define('LOGGED_IN_KEY',    '+=0jD8;]^.=|{/PE2aJ+eBxVoc~*rse8M,qO6pPT,>fjv[h:ewg*Z]~o<}R>6w4Q');
define('NONCE_KEY',        'P-M.2)mI89~n5WMh0c(npsWbJ,{>7z(!cX|R?o~dnsL-G^!52E@hqaQ_Y:^^RNAW');
define('AUTH_SALT',        'X-+sHT.I29)m.|1j=+{=-`riC}a/NV|ymY`WiNk7O-~6sk8sC>9H|nw3*G*X17;|');
define('SECURE_AUTH_SALT', '{{S+v-6vDzj:HE8v=@?uA:7`f#v&xL,f~R;#dgg6UcmUD+#EPJ(Rt]dXnhFr4:CL');
define('LOGGED_IN_SALT',   'W2+.0J-/DvZTWMw+1SbBp<6pM/Q6-RFbE+ In,O!d^`JcEl#IA8MuzKHW((Jc&ic');
define('NONCE_SALT',       '^~?#3:H+5!z#O4ry%D+UdV+y?)3tpg/>QOt4j^h3+*H<7C=|_#1=<5K+M8N4Hex1');

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

/* CUSTOM */
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
