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
define('AUTH_KEY',         'Pks2P1Add7P8g1jUrNZ370o3NgyRjW2jc4jzLHErU646nF6othYNnFcrCvzQRRfESs/PQ5l22OGvVCg9xb9Ztw==');
define('SECURE_AUTH_KEY',  'FoQTAlP0TqGtNeqcJKLe4+xaQLnyng7k6+tjEuwmjGnnZU8kcLLdj2vJDSOGV6cdGOSqIAb/zLf+ZgNUIj2B+A==');
define('LOGGED_IN_KEY',    't2EWNEWezEQYyQqul/n3VyHEBZOarRZ0BVB/hrMRGhnwpc61nwR7kOMklyxApe+/tafbz8TdHXd95v+2od0xTQ==');
define('NONCE_KEY',        'qg+P3LRV5gs2WqFQkM1mEbORb6W6YbeMOOKdXvd9+v4rgFc6oOzGRTicTzCNjAXJ3Wr4NqxDPOamkQPUkcCytg==');
define('AUTH_SALT',        'epa/YhnqALt6o4SQYdiEsn5LgXiz8eB/955s2C5ge7khW6FHYAWONkGx89K3k+oj4TXQbQ+6hWeExLhvY/b8+w==');
define('SECURE_AUTH_SALT', 'eLFqUPVyTnYAZRdVGvbjEe4EUSrjlzaXhwlNPaGqyPxylxMfAyXkLB0HY2PKvPcOxfTlmNxCEBb8Ze81SMf/AA==');
define('LOGGED_IN_SALT',   '2TLSiF1DTJk/+6OJ2T/W60hJuMWU84/1NQ/YdbjCOkThpM6RBRuHaSHYXJSpfj+HdcdKHOkCrebHHEzpF1ssvw==');
define('NONCE_SALT',       'bVEl84JseN8pAktAyPk+DfzdawS1uTtzbtMiq8mDt+igPAKrr22SKRS4laowxFIyl74zMWSmboGo0eFDgARmNg==');

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
