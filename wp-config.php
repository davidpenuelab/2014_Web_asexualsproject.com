<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'laiaabri_asexual');

/** MySQL database username */
define('DB_USER', 'laiaabri_asexual');

/** MySQL database password */
define('DB_PASSWORD', 'A7P[9S1[4G');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'e2lsvccp2mz0px6icxymcmza2flbtrqzs9l2srcaze4ivbkffcwzxd4libla669a');
define('SECURE_AUTH_KEY',  'v4csejnifmmacr7tdy7tbpocymxenre0gay00f4jkdiw3uag9upzqevbtzuaywq8');
define('LOGGED_IN_KEY',    'avbx32vszane621d0vzdrnywycf4jntgwuo4v0m8bb3hgmdf01rbx7hpgehu48hr');
define('NONCE_KEY',        'aoj4r2refjc05mhvg7dgxuobkgtt6kgx96ydwbluwjr4chzoa63nffpfeixlql2q');
define('AUTH_SALT',        '5uz2mmctx6nt0wcudxtphre0zsod9upl3evxt6i8exgqa0ifqebdd4e3euf70lui');
define('SECURE_AUTH_SALT', 'iisohxpusaureenwrxo53mdwfu9paxi8luuifwn8bdkzg21olnckazg6sa2h6aid');
define('LOGGED_IN_SALT',   '1soaudrpcriwkesjwh2npv3v8biky22xlc4oorsc2rupsisjk20wymbx5cysubtw');
define('NONCE_SALT',       'mxyhlbfb0jorted5kjuxawldpzgoe35u6mb1ak8hmg6nqmr82o8ijtkulpqgceke');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'asex_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
