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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'gq1lOTKuLmLdiGeXrrmx5GwwfBJO9qQwkPDJd+HbVvvyZ5EJ1YP7qgaZ87KxYoWPOY6uZk2cMiYk9RwAyXIGdw==');
define('SECURE_AUTH_KEY',  '55LcUkWUq8RUVJyvqTUBObfvxByxMkP+xl39oNOGTMvMJ7DybLf7LKCp6WLZL1YcQJatlMxqw8WuPStupLYpPg==');
define('LOGGED_IN_KEY',    '/+XmybeOTbA1VhMeYOVFromcaT7CQnGCj6bgTicyDA7L/xXUPwPVOUkCxsUK8epTDk7ABcCEEXpyLIXfPwV3wQ==');
define('NONCE_KEY',        'bYwpzxPitvbhGHaGb419aIhB2Z6du5/dIPspMAi1q2t3+kItjbW8mA3RiAE5G30UeQhY6m57zsBniHcy4pwu4g==');
define('AUTH_SALT',        'e2sKvKiLVvXX36ZVRFRbRnic6nDCuNqAoJ6BlVZZ8ZXZt4+bU2Ko8ujXnu7oHLQwV8jDdCb5UE/jZ6cCyAVQMw==');
define('SECURE_AUTH_SALT', 'OAMe/kHnJoJsGDJCYJp/ch+MFuETny56H2KTPmkb79e71cojx+dr59l+Wl33hSqgY5iMAgOWsKnYgp9zvl3D+w==');
define('LOGGED_IN_SALT',   'Yz1RKRnJ0D936Awid38+lx3WP0OsQFB4oOeMEMSty0oZl50aKTEVfHMt4A9yJ6TrLrD1Ow5X0gOh6cEiR2AQeQ==');
define('NONCE_SALT',       'FJBtJ68WKw5dKP5Aud+SufxK1fAANF7SNZ71WXAUQvAW0FQsOj2dy5mUWH4OLZxMpjuX6u+gX4qw3DdU3BIY5w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
