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
define( 'DB_NAME', 'alaminproject01' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VQZ;^J5Hd^aN`Tw2w;/uC>X^m5NF@]AKy+W#J9E}3XT7I}`1+/rDE~m!c*<eyXxc' );
define( 'SECURE_AUTH_KEY',  'M:Q7Z>-pmW@I,bv=<I4UH6/.~s_ojjXo>>A?^6i?1]G+wiS}_}_!&=3[E~J.1reV' );
define( 'LOGGED_IN_KEY',    ',bgfo@jTuvEFfLNQvas/7n7sU;ONp<f5sx]6;*HOHFlc;wBKT8./DD#K3O-V^MOe' );
define( 'NONCE_KEY',        '/c<CqDXw&BKqgNOQ`p *&KL!%[;p:H[=rP8xPDe_^ms0tmL>]K]BKm@g&h#+Ryi&' );
define( 'AUTH_SALT',        'eSAEDl}w{>y}!%{muPM$*mx=:DW >v]GNh-z!j0uX+TPQ1eVjXp<OJy^2LT%ZUO}' );
define( 'SECURE_AUTH_SALT', 'aqXS&p-J$V6A?dq>9N;Z%EDa8@-M9VUkBl*84G[/Iusw!%Ps_K>QYwwM`#u[r`%T' );
define( 'LOGGED_IN_SALT',   'Ee!(zr^bjE+DO%/H#!R;i83h%MaYpYyK&2u0gdObKyQY]4qr2$vzAw/oNzxC.WJu' );
define( 'NONCE_SALT',       '`p;ie[=G_<=+#2_{Q]O`bs%/bzVKwA{@ f[)1e@H #@e~!+#a8!)5q+M(,6SW%Uf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w5p_';

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
