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
define('DB_NAME', 'pirate_db');

/** MySQL database username */
define('DB_USER', 'user0');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8Z`v:}q_$E)B=gX/Fs udrx?u3iZocMyP+4z[#==a&4s8<Dft#]u>UJYv`CJD0$E');
define('SECURE_AUTH_KEY',  'YQ0i^ ]]Ge],TOXW:RMsQqqD~16`:&:+;M8$/Y+4Q~FP)?6#>1yQw(-;zriyV+iO');
define('LOGGED_IN_KEY',    '1tAtH7#{Q,MV.TL(zlTGU3j Kc!G01*83gf_GG[PtPN*#Sm}L5^CIWh_*=`[S3aI');
define('NONCE_KEY',        'Ngg+]Qe,&PGx`wf5bpK>v$ {WVM|NL)#|5Vm^qGr_g`Mk47A`TgR81G$f3 KYl_M');
define('AUTH_SALT',        ')[TYMqn|HNbi|VYo4KCIR.NEJF9VpJfBBBYyww|X5h6YA|Bi?Af0Cori*,~T7~F_');
define('SECURE_AUTH_SALT', '|.@0nd^bWWWH6gQ)TozeEkw=Yf6 06=Ww+S_7uD:7z/kpXnO.m?lz#/*Ar}:uR1f');
define('LOGGED_IN_SALT',   '(D*BA_`tlG|H{+~STP)@{&Li5p>+W)x>}6EM/5z{AYc/{?;yPR*s%r:LAr;<fz A');
define('NONCE_SALT',       '8o 6==mc(n76BuKuTFf6>W-.,cp]qQowq5 %=X8~IMQ?NB]oJ#ie[xA4u3~E2lCV');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */
define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
