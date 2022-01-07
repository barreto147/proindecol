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
define('AUTH_KEY',         '9oEeVSSkADQIL+EAj85iKOmxB1Q7RbO2AqE4b6IprAGfU1uNZADVlxEzrYOOpIY+GdQZkUMifak7bCVLUsZ8hQ==');
define('SECURE_AUTH_KEY',  'wjllVlyYWFRV/kpYXVsEjvlAuSoiZWVDQthmF+zJojsVBuCkKraA2JtYClH0E/LrxUlyuWC8dQU9XnykrQjGyQ==');
define('LOGGED_IN_KEY',    '0ikYIiPS9FUS6TtwJX/M6bn5NlFvUtnIS5302VKpF1v+G7qcyjZwjyH3ZTmtQgqASyZZukrrIhgUQydyQ5MLFw==');
define('NONCE_KEY',        'AieG5dgRobEZPz923VgklAy1aJ0KL2ec6b6YpS5xcCP65inX1TV95aWvH8Q7gfFXsPdwILDW12G1XoV9wE3fGA==');
define('AUTH_SALT',        'phBEzrk/dNjOeMykQ8dmIXgLZ/D6SkTd3lsOtGvgTui71SBDVuHQBK3v+k7v/alZXcmgw/3Ei5P+CeKwOHoJIw==');
define('SECURE_AUTH_SALT', 'jS058Lle63/qognszMigoIRuPBDEEBqNgJb6rOkvBRbMJVEbvlGEXbezHD2TQZCjuIJ9AnrEGH5c9WMur7ijRw==');
define('LOGGED_IN_SALT',   'D168Gri7MZCGNywKWat3E/eyKuAhLJh+Ja1XmwzXno+oTxzTmHVONQcQNaCWHLXKwGRkOEhzpPXlKOMkCP3TMQ==');
define('NONCE_SALT',       'tYdBmbyKr2lrVRKYRVs5VjY82mJ8t9RkbBQQSK9XFwN4HMvalmQDdG705sSVy5jG7qPMjm1cYF4veDHtNYGSXw==');

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
