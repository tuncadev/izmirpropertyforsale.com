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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'citymody_izmirproperty' );

/** Database username */
define( 'DB_USER', 'citymody_izmirproperty' );

/** Database password */
define( 'DB_PASSWORD', 'zb3Fd-~74R' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'yvRV8K6yH=JSa~=^ue4=+zi^7ioL/c:gfmYwz~f(2J$l52RS`:Th3v?+^?e?HObD' );
define( 'SECURE_AUTH_KEY',  'L@[yI_H7q;SZ~;f|.c30bTq~A| p!ZrRe}fK[bYi]Y44/io&cP,O3-X.?s7U)XwU' );
define( 'LOGGED_IN_KEY',    ']egm4LV]!RyJ)>AfaFX?2>U;5E,FhO[|1_#O) ~3~Q?fL^MQO2%fjwkQxI6ViwnL' );
define( 'NONCE_KEY',        'Os%]*#N,~=Tb9A`!idinLS1B9lg3jP,gW~k{y)mT|hnyY^!-aj-~$4F/B5t5rF _' );
define( 'AUTH_SALT',        'DrGJxVKQJb6U/){KW2<WfwiH/ ;e7&}Px+:Fl~*_JcjK|Emo!7w;;y!XB{br#-_P' );
define( 'SECURE_AUTH_SALT', 'alYEE>EZ3d?ynO`. <aF4nFlVm.v_V7dT0L$Fiavw <SaO5gUV2jDm[+/lU!R(}D' );
define( 'LOGGED_IN_SALT',   'E=Hj?pwXG=N@SGUrMgjT=U}(WtU[E0MkM !:rjK(]r1#UphdE^D^;JP+P}IUYlRh' );
define( 'NONCE_SALT',       '^[INWN{.CR(ZZ.:zhg68NrZ@nq1g/F@{tr}wQ&e3r8NE08^i;(%;iLlR;R*#Nz)Y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
