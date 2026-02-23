<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk11/4736741/www/devanshi.atwebpages.com/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '4736741_wpress0636f3cc' );

/** Database username */
define( 'DB_USER', '4736741_wpress0636f3cc' );

/** Database password */
define( 'DB_PASSWORD', 'DSiJDocK7zFmBWjOk_jCiYJiShv3hdpE' );

/** Database hostname */
define( 'DB_HOST', 'fdb1034.runhosting.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',P*v9QbQ)N|7d/Hl^hmnmil:Vw[V^sKTSfu^1g+}zF8pYI$4]YzX7g*k8}^K+kF^' );
define( 'SECURE_AUTH_KEY',  'aiiW%=i76qgsuPSqNV1&:%5f.hYv=nMQjaZmrvGtYeHmGknvup1!?)I{cnCe:D(_' );
define( 'LOGGED_IN_KEY',    '{Q3%SVIg*s*mg-Y%{LTI]MvU,hp/JEocdmn724+UX-Zgzsz2Ba[ZZ=x1+AxlY}f;' );
define( 'NONCE_KEY',        'SF XCwkWS8J#bR)MEiH??fLNkr_m;Pc;Wudk`[4(|ZF391sc>,)+L`gQnWY-Fm,o' );
define( 'AUTH_SALT',        '7dpf|*a%<g$Z0 FR<[Al^f?<1:SQ+# H[H#uVcYg1D(t-m!{/_=;sz=?.2Y+;rgx' );
define( 'SECURE_AUTH_SALT', 'pdx1FbQL$(K(y%Qm]I{Jl=7uU!#K3P_!Cc04q>QIE!38;-rFs?aRDQLH])]:A3QQ' );
define( 'LOGGED_IN_SALT',   'kbd@JCcGUd`>B_}1]Fj)*y:#- !~[Ri},+/xHA6v6):Cj5!RZD]/1,MQ_gYp#^X;' );
define( 'NONCE_SALT',       'h#mj{!o@lg`>yW]BTL!@c^c.p8PxTsB/# [ZE!j?*g7img[f=Cq|8t#z912O2#I ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
