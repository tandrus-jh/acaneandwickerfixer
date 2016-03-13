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
define('DB_NAME', 'wickerDB');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '36:plu8X}f%=FTyEN#!TloBMnW0)W!;c+Ag*U!(y-[8|-Z-uFshZ$dNWQ)Lg&-lR');
define('SECURE_AUTH_KEY',  '+H,P1KSLbeq8M>B^5:3Z=<RVA04u5|)m1{bOFJyBm1R:Gr!7P:gKShsF0?Sw2:$u');
define('LOGGED_IN_KEY',    '$hDtTOnt0|W VN1{}jMigU/$__.jbbY+2H+48q@&V!&6|Juv_7y$q6iVp^YnCP.0');
define('NONCE_KEY',        'T[kx{>_mK3uhvJ:1AbKuJ-??VG&B^Yye8+oZ?BH9x}])f(xnMLqUv,}m.Sxr=8*H');
define('AUTH_SALT',        '/])%~afxT|xDxenp+f01~Pw868t<X9R~7NtG-}%pd^i;Kl-4[KFc_BU4xd!vAP`8');
define('SECURE_AUTH_SALT', ']]/3?-*JB>`1j&yXaWZN#2L/1Dly-$L2Tvs}F&UnfATcX9n@bG^ziE1>|g%}MN?$');
define('LOGGED_IN_SALT',   'N:D6bZ+/+uiVc[[T/2K+,(+012EQ$ 8D/>M,4ZA6-{Gw O7GwX Xy62Q^#qK@}QN');
define('NONCE_SALT',       '*)ZU+IIH-$!#Ga`2@WSTd`B8T RCn>Slp$-|a[ml+cCd`Lp%F)8bWF4>3PbiI.L7');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
