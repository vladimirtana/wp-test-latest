<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );  

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bJ4:yOl:jKfxvCHp*K7NVAG^!.g(OT*NEu6F/xA;JhXu0K)_T=YhX*<@LaSPY](y');
define('SECURE_AUTH_KEY',  'q%=9(MAt^gW]Q+G8+#d,Na`A||KuI2+OR|3$8DRC+H<c mztSC,y*g#U~>+_VU7|');
define('LOGGED_IN_KEY',    'H7Sa$7;h;/s<zv*1!^aFE7 xVg1qu!QS1O/j3a)eCkv~s96,K#AM)epD<1-Wxf(J');
define('NONCE_KEY',        'o}jIsf+tt)NMP5P37r`:7xetEeO!O1Iw{u=Pu@+DEbDP!>% `A{g--AFldo;4PC)');
define('AUTH_SALT',        '+K!Wo}+Gznmb-ht6vcoD3 |A_:/s7q1E!3<Z +5R=da+>xBWgs7~Vl7D-j|o9-r*');
define('SECURE_AUTH_SALT', 'Ak0kaZzMAmdQD:lU$ZWZ2u;J|#&VN&n^Cd+eac +X]{Hm+.UPVf[I0YC@@BB;M=v');
define('LOGGED_IN_SALT',   '6$^J8__ByUipwE`]gu5L42SK`6#Q&u6%.KvM&!z&Peb9tcO{bz45J0n>1h-{#<~}');
define('NONCE_SALT',       '[uCp/hOpI,TC;u}sn-+Wlgv;-(be:K+fjJ(,H=O!_/+aF<}:0_>f49y7W~viMC/Z');
/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
   $_SERVER['HTTPS']='on';


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
