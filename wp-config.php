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
define( 'DB_NAME', 'mehak' );

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
define( 'AUTH_KEY',         'o +`yb@ri(D0wbEFY1ncM!bRtD6$N+%}N+&ZVrAT8DTNG%c>dT?[B08cj-8bko7l' );
define( 'SECURE_AUTH_KEY',  '|lGpsMaY*t:YvDW!*mLyWXub:q];m_azn,Pt]u0F%IUO]uBkn Fu(ob?<JMkuF&_' );
define( 'LOGGED_IN_KEY',    '!VE.eOB*V^4o7$,vNYcrw`d~S~[I;(QTg&&e-~8/}q4S.u[6%&Hy(8cQ&y0)C7~ ' );
define( 'NONCE_KEY',        'TgT<qu)ruhJcL,^7K%ss+OV6<Al0{KvHX);`7O+CEX}C,PI!jPTye`_qCeo0?1<V' );
define( 'AUTH_SALT',        '}}FvoS^p<Z=`rV9O2@`=0 _99qDGn8F#8;i@)<ckNcSnfaRx6V~~V(]i(F-P,R!V' );
define( 'SECURE_AUTH_SALT', 'Vj%v_BSi.)2X*$(0pSoH=vLd>`z5YE9*r|-9ng{ddC-h{%GGmG(,?OG}~mIJ*K@K' );
define( 'LOGGED_IN_SALT',   '9Tgk5lUKqzUX#jy|=Qss^F+Wz!Mo:7/aYo<$3hQEulAxnKDkqEuAk}V7nnfn[_>m' );
define( 'NONCE_SALT',       '*{U+rC/q?7w]4>BCNo1`|cU1Jp$xRS!nbB0pbW,M>D}@c=$WcwrVkC>&1,3LioAj' );

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
