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
if (strstr($_SERVER['SERVER_NAME'], 'ecommx.local')) {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'dbeafjz2z3phzf' );
	define( 'DB_USER', 'ueufwrvemd8n6' );
	define( 'DB_PASSWORD', '1z)&dbei2Au^' );
	define( 'DB_HOST', '127.0.0.1' );
}


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
define('AUTH_KEY',         'WablccqwJeY141m4AtLaTnTcFdnQrMM9l83TXznNZ/Jr8tK28Z433iMesOuUddkgSwzAAPz6JKfic90jiEwReA==');
define('SECURE_AUTH_KEY',  'MrgZ2pvtk/xTO2pz3a1C+RyfLHvpjcfesbGvol/E2WILRZSxH96YmBR5j7M6LT8aRwnnqyO1ZIifX0tXFsx6zA==');
define('LOGGED_IN_KEY',    'ZlIwLJZfluNFq1ObbTqcw+INX2i80G+77UvcvZbw4/rqYNWZfwDPubWIAZ/pJhPRplFBBv1/qvgbE58qtkcKZw==');
define('NONCE_KEY',        'WJuFMKr5amn4iOhaoPQbZMh+hYQSqhjy9Yr5QdzKdp6yEJ7a6489JHyICtY9V2fhapEMMd9TIIw1k+xxmtPkzA==');
define('AUTH_SALT',        'XuwrmcPQj5fvKEdCzmyV9j1fsCcDutjtxmYFi7of5j4amyxoV5LjkNsba1B+HL89zyo9iEq7vDaWsnDg4XSNbA==');
define('SECURE_AUTH_SALT', 'VP/hOBmW4ghJmpLyUlKRit32zn/4+U0urVDWNwjfUnnn8sBk0zn6WjaMNg9eDf+746xis/PX3W3+CiGjCy6OcA==');
define('LOGGED_IN_SALT',   'hfAfdelfz0lJAklGQhW/OT5s2hXunIoH9SrQHkbnLissIchQRRMSAUp89bt7vkQJvqi/W/5AojzK7AvWgLGu0w==');
define('NONCE_SALT',       'tvh8FLaG3dJLuONBbop2h7HvUIfm9vGFxobYZO6r2rx8QLQ/xlfACunvodrf/OhMw58Wyh5xDddi26L1O7TGHw==');

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
