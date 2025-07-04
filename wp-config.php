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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '|6T-F/!iF-iYp;cbqVqNdzq9X#;c7&[A{^;4.]sI*4VS k2[H|,cW<X<@G5lU{vL' );
define( 'SECURE_AUTH_KEY',   '*soR.pPE8U{hB%%I-Y:@ ZW3fM;[.&aeq7US|84.zdOSgiEV~3~6Kd+EAmk?<9F`' );
define( 'LOGGED_IN_KEY',     ';cAs&.46Ht+.tj)m4Rz&-6,Vr$D`s=$$Ii74Et[W ~v/x($wiEo#%=e_y81zrm?Y' );
define( 'NONCE_KEY',         'NTN5b:#@MYRd46Rb.UIK0o94eJ?.=^a!I8s)|;m_OhkUS?$hi;=cKjI@7RUp)$Ag' );
define( 'AUTH_SALT',         'U#]%6;p]sEC=+)u>MXp5W6=@tb2j]Q|%7LDm**q`|ohlrG{e8)/HZAURsn$^[l<1' );
define( 'SECURE_AUTH_SALT',  'J4jaoQ%J$4%xz&2ur=OZpnE%y<+7kE%Q#1V.x MrF&ONS;dlbS#X~Caavt{@4rJ.' );
define( 'LOGGED_IN_SALT',    'y{?(>zP^M_{!#fir]hhtZ6z%$oZP,$Q<d(A1G[^IZ^;:b3WrF-]:gzh0$4Cl}Q8J' );
define( 'NONCE_SALT',        'PQzeddL/`;@T%Yc_|#2+ljdI`te.Ck=ZCl$0svtB=X`ukyYlY]>}@KCJU1u?hZX7' );
define( 'WP_CACHE_KEY_SALT', 'L*jf0z/FJvb_DlC2jOg{AY94&|?4+/o$QXlH7Yb(&SG(N}fOgPgRj:xxJ7Q`64)v' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
