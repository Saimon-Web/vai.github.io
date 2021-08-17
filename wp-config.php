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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'helloxyz_wp53' );

/** MySQL database username */
define( 'DB_USER', 'helloxyz_wp53' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Z-pF9l2S-3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p7tjfhzugayjlmmbqrzckq7i9mmhdatrmk0mrarqexcvp0d0v3yvghwg06ntek5s' );
define( 'SECURE_AUTH_KEY',  'q620g2yvioxntbmtxnlp6nwjp9mdo89wwyeiocbyjislvg8jfy9yajcxuybxevak' );
define( 'LOGGED_IN_KEY',    'suortkznybhbrimbatfycslmpwqjpt6atkurvpiffqfjw3hqjh9oqfrsr3jkytlk' );
define( 'NONCE_KEY',        'swgdo8nj6zzsytfybjzlotq8ld8icrxbrhcwdiljkpjxdaqwpxb9xuea1t5aogc8' );
define( 'AUTH_SALT',        'eiy5vxc5l93ijb8saxonhq0pqejm1cpimhfmwnzi8ywjslwvvw5itgmm1irdr6j6' );
define( 'SECURE_AUTH_SALT', 'ntpaqyruzpeeoxpapre9aebtlwmnwkwdrskonkafabgfhu3vwrrqczm3mhflybqj' );
define( 'LOGGED_IN_SALT',   't9ecopq8huxuovhfnwomna5euecwq36ivvfnzj516c2kzs9x6zhmtnxcpxxrwean' );
define( 'NONCE_SALT',       'nx1hdfb8gszd20cpvoathqa1wqw0ypfrzm0uhk38oru3fpvngklgdxp6amu4y0bd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
