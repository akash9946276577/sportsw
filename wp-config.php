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
define( 'DB_NAME', 'databasesportsw_db' );

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
define( 'AUTH_KEY',         '4%x.oX3VY{e+4oVmSWHBX%+o$6@G+cQnnFN#u;ao]A7SWSNV}R}Ev/AK*/}VFePU' );
define( 'SECURE_AUTH_KEY',  'HSyY_GA3~tFgl]3>$FR{]_iq{tj*`6{v9obqs%)ff9cZg*%nS6B|6qHH$=Nv:oyu' );
define( 'LOGGED_IN_KEY',    '+2:/4ODfK{I7gg_=pf@z G[l02G!e%V,|VMF) e>v{CG&YonRzqNpPRv]@s09R-y' );
define( 'NONCE_KEY',        '{[/8f|FxMN6S?Cu}xarTb|M)^U(>;qMZqSx`<Ol<fyaHRt$;e<AAB3zV+A5PlyP%' );
define( 'AUTH_SALT',        'O:YZsz44d?uG4<}@GybJ<vOHl+i,W`70QRLrruH),,gv7]W:%>5dO+$l%rHv5N5L' );
define( 'SECURE_AUTH_SALT', 'uz`}u@s6-?: Q)q8mM14i{?W^h]?c`FE?8AMN{P%_[H}&8gQ}T,w{c[?@HAS@DDy' );
define( 'LOGGED_IN_SALT',   'weD{%=t$6t8m{ezqK+!wrPI:#MnJb}eGIGg=K/xRoh;P&vC)3bl?/&=MPw1_{Fb%' );
define( 'NONCE_SALT',       'I~[$Pp6m9wUVXs@}l*-3l`=|V3[O^uQ0hy:bcVLi`lGrrk!~PV~3Prd$-hC5Fl4d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
