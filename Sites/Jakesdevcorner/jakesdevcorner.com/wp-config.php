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

//TODO: remove before push
 define( 'WP_SITEURL', 'http://localhost/~jacobtalley/jakesdevcorner/jakesdevcorner.com' );
 define( 'WP_HOME',    'http://localhost/~jacobtalley/jakesdevcorner/jakesdevcorner.com' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_jakesdevcorner');

/** MySQL database username */
define('DB_USER', 'wp_jakesdevcorner');

/** MySQL database password */
define('DB_PASSWORD', 'JJNTd8qaGIOwjbKP');

/** MySQL hostname */
// define('DB_HOST', 'mysql.jakesdevcorner.com');
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
define('AUTH_KEY',         'ZPc|"fV_E2J&G~O~7:l8mPmfxT4CV/A/`XX"nz:C1)4xD)O*V%RrlyJ*BbBWgQ&2');
define('SECURE_AUTH_KEY',  '9%D^G@K3unolu^PQ_~"&Xp+1*~PVDxTGF$&C1xrm`r$MDM$l3uXtB+qdi#K%/nYc');
define('LOGGED_IN_KEY',    'zK(0WHVmB"$#Vv60H(aF"qSI/Q2Arjh9$Y|?$38:Xoep**JP84LdG0A)Jh*WRb4v');
define('NONCE_KEY',        'b0CMkhZz^LFof~:0D&4ffC9Hw^T^5XTSPdYw4de/jsW9`0cp1:qliZcJx:6ePBt+');
define('AUTH_SALT',        '55@c3hRI:AeYgjzQlbs|YyTFiP6|8OdoE&%oi%Uk0Xz+(p&gRmB%6re`;wvCy!1~');
define('SECURE_AUTH_SALT', '`4(3m%_$B_~2SCT%s&5H`Hzt;MRSb:ss)B#A*!5@CYUA$jl;hFCIxR6xz$#5+7DJ');
define('LOGGED_IN_SALT',   'b(3Sn2r5dC(!?^:4;XK*hVfmNWJ?DtsZt|BPiha4Lb%:)C|aZonzPRCz1+&:AzF!');
define('NONCE_SALT',       'K@/"(rnDvHb@yVIeSWdm$u(w%:%L~a$~?&g9NI7gd9%ZK1N:CY;C?Dg;l4keTBvo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_jytfvy_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
