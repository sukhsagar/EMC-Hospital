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
define( 'DB_NAME', 'blgdbx' );

/** MySQL database username */
define( 'DB_USER', 'blgdbx' );

/** MySQL database password */
define( 'DB_PASSWORD', '#i8FQ]kXu9dA' );

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
define( 'AUTH_KEY',         'S[cBbqeev]3pE8Sr?ias@saPxanp,!~6>:H_I[x,5b@r;=Z5%l*FBkmN}wd:b^Zl' );
define( 'SECURE_AUTH_KEY',  'QHo#E?U{.v,M9$Lq<5pLMVL?Jc/3Ye4^OP[^Ya9I)0+f`Sk b+Z2WBCA<FEV:5x)' );
define( 'LOGGED_IN_KEY',    'vT<%]V_6X}~s&A:Iz59l/_-JWd7YVZ)U8&&oI5~e:$d&q:@ft(9jz-niUHe3Y`dD' );
define( 'NONCE_KEY',        'j+h*o1^:Rw!8XbgG:*a_ra%bRNoSRy,zA!Ll{ GgQh@r}/*+FP[xATBdP5b7v Rl' );
define( 'AUTH_SALT',        'VE%?RUCGH?[SqX,Y:[0B])PY6x9pu(Bf]ptv%{?X]9HT#tJ8 Y 6jTChfo~kL~S>' );
define( 'SECURE_AUTH_SALT', 'kd8BY/t@[vN97^MAC+D17M5wD5gs}t7i3)^_n={19Se5F!G6wCjduudE0eI:qYMd' );
define( 'LOGGED_IN_SALT',   'L2~$0`aj~mz:;j!#3k-7+RVUaX7ifXm08/ML[FWuq5HvlJCuOkeWpFk$G1NF]KkH' );
define( 'NONCE_SALT',       'G&/E( WI3>)]9!0&raVcCCh}Ec#5mbo;p|nsSEm6Xm98-ZC+u7;D8^U0Z)0#.Z(k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xb_';

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
