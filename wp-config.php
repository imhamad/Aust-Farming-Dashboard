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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jobnelly' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Y)e)>JV{UE-l@j}SZ@>B-n-<XO)A+,A81G*|I$1pxe0r8k>UD3k(VHkyg?>zvDhJ' );
define( 'SECURE_AUTH_KEY',  'sz*eeD=VU.nrU~><CZP Hq#VGpMc#Jb-;5@kx%AM,P6[[JX7#**^pmbcj$.c(;N,' );
define( 'LOGGED_IN_KEY',    'J|~U<SFd;$KO,bZ9/(DwFLS1wcr,JT{OoMB*u=f<{rN38JO5Kox9MzQjYcQ#b[9>' );
define( 'NONCE_KEY',        'a5dfW6;>ag<%,{G_=ipCNUP8UvBHIc7dN 4@|A|*f=U5M=Qa%duY_OVn:MJO6pTq' );
define( 'AUTH_SALT',        'Tj,E9PTtgELwZC-aSZLb7w,O/rJ]CdWdXu51f$Bb @TR7B4$1wY.v2P7Vs?{XZ>f' );
define( 'SECURE_AUTH_SALT', 'p]s~d9Uku@PMkoxg)Q=y9_rO0PUC7~wJp0pq%g2i&WO&M`7O6450*!B`g`oZ$^<$' );
define( 'LOGGED_IN_SALT',   '48dp8j*_ -/mP8+H6gp,_wj)>xp]p&gh:$9j6Uy?6:3HN1y@Q50|&>v8lE8c}li(' );
define( 'NONCE_SALT',       '7`58o^ahKj.hdaM@$5Y>|?nPEi9|xra?u9$,*|.m t+0TIV^B&IG4Q,xP9%xf3T?' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
