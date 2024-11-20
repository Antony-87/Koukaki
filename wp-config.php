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
define( 'DB_NAME', 'Koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WUx9zDm=8lF;1W6XaSM?QfX>,CQUX3v#-O{>_uivG#0&msfEO1Rg^ui+Fq2peeXz' );
define( 'SECURE_AUTH_KEY',  '_1nYHue,|~Rb(hfg%oC:Hi~&61FCrnWeNyhl.gb,9)bPPW.D#s|U%o<AboJ|{1x}' );
define( 'LOGGED_IN_KEY',    'wvrKi R2rPD{>Ad6Wjd96e)=^!AEUMAbv>h_S!i(I^.Z2&Ska[es!o$.t9v//Ab[' );
define( 'NONCE_KEY',        'w@r~yB=z|Zj`;u>61A@qcIS|[~vFxP>={6oHv})7<!^/.d1VSN`c%f+}QpMU+xig' );
define( 'AUTH_SALT',        '1R_MOeV#$BGTvF]1>e&:3v#NV[s8?C*q:w2DF;da(C:OsDEJhO?WqRkqe$/U98Tk' );
define( 'SECURE_AUTH_SALT', '=^$Bmtuo4}j5vbT%f.@GO|uQDS>rH* WyQ/>f3HRj)yqpuFx^^ZS`98:IL&zVbjc' );
define( 'LOGGED_IN_SALT',   '`T$y[WlPlKOP;v@P7[2ITSw;,Jr,.Es& W7~md|{!&)xcV1 /*5/{}jLt= ]w*iY' );
define( 'NONCE_SALT',       '5Ps,.l48[7#7bn?W`>H750>?wn)MRr!`tR/5sUr:/-.hEs@IAmKW_No<N >Kj7l6' );

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
