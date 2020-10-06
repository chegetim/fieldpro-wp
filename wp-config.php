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
define('DB_NAME', 'fieldph701');
/** MySQL database username */
define('DB_USER', 'fieldph701');
/** MySQL database password */
define('DB_PASSWORD', '8khXRdSRPFM3OV');
/** MySQL hostname */
define('DB_HOST', 'fieldph701.mysql.db:3306');
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
define('AUTH_KEY',         'ZwTeUpZ5D5nf673XAGL5mCzUEVwe7WPjlitSMhyA2+tpkFrZfm/aTmiuFuT4');
define('SECURE_AUTH_KEY',  'NNPRtYHYrISUWFVGBQssX17047Jpke0dv8ST/TtVsMGgyvFPhMZMv0MyfANL');
define('LOGGED_IN_KEY',    'iR//x36ta1SMUhX2juGO4N6aPCKeXfD6Gim1qA22+oBT6LzwMmRWI8AtPhoj');
define('NONCE_KEY',        '/UgnAZmKbdUafHRP0cTONWzNNKWMC6P86JK6IIcnckp/dmsiRSsONu2Q0qjN');
define('AUTH_SALT',        '7karDX5ZFmzv8pYr4P2p2HGt6PmZe8LlWiivJvDa5H5Pp8mXhtgreKQ+NmKa');
define('SECURE_AUTH_SALT', 'wIikZLWa2p4eaw619F16i9PkqKFFgMtq8ze6WmLJrvUhlwnWRNKS3DxCjdYZ');
define('LOGGED_IN_SALT',   'wmh7coZVpGI7ulZPkX/EzEZjFrux9Fhc1ZTjFBGo4Nplm9KOq7eIblmB+qgS');
define('NONCE_SALT',       'yo3TfiTfCvCugJLT+itSJi0gl3q/dvwwIoP2CDcvXz6eCW5fe9IYj2Bge4rG');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor9878_';
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
/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
