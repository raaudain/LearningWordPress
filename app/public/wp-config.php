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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sfOL92BbDHADx8oF7d5Iy19pC3L7FMtJnNSMcs7mYJWG1eLslzuT/Vk4krnAXk1DEazHfsLmitw/7T2ubIr0Zg==');
define('SECURE_AUTH_KEY',  'OAIbrxZOFtaDYaOLdOOKXLuRco6rUKdlmfrAfciqa8OL79kwxlMVSISz2c7sDZ5vIuge2i3rJsEnor/LWjroQA==');
define('LOGGED_IN_KEY',    'QoiAfqbbq8D+WPkygK+XARRsV1rdTaL6TOmxuR9bWPHbPzlT0pT3eTGSd+xbWBjguqK4ZfnMpY+kkpTrj2ntCw==');
define('NONCE_KEY',        'nbicaBjtdeIxAo0Ruene8CpwtDZGpmzlc0AemzGYYUkNT7YnPe1uJMF2eZ6Vj/yQgC08IdUc5DKOxdmpFGaXSQ==');
define('AUTH_SALT',        'HvFHVUxEj1is/BpECvb0nm2dWQ8ikP//yyDw06dHEAC7k+eT8xDD47Fj80EnMT+yWpbYWLIWa0bz9Tz9dyonvw==');
define('SECURE_AUTH_SALT', 'WYuK899ke3dJ/GcNfx1hgWE3EaMBzPdyXo8sQqQzoLXD/L1XnL9JOi3QXtvstzaugEwchu0adIXUE6uU9/pRcw==');
define('LOGGED_IN_SALT',   'MnbE9qPonYv5iIc3rpfNZLuwOUN9iFh/KDTfrhp9wS/qHikstl1ZWh/2p/qXC8dpzJjtAFElQgaJYWONigzaqQ==');
define('NONCE_SALT',       'rIRlFK7zxP/hlI7ujGB8xh9Dqjok84lxyK9O68WJIiPnMD48sS6glwTirfMV5cG8v6FRrPecP/BE/oBRaXu1qg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
