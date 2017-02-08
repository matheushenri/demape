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
define('DB_NAME', 'demape');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'M4th3vsh3nr1');

/** nome do host do MySQL */
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
define('AUTH_KEY',         'C)m wp;OgUTxOqe2uV4YsBFky1qp2`jbqL4[.e@P1C39FQIYx^C??P-,i`i>r5Be');
define('SECURE_AUTH_KEY',  '>Njs 3>l1c&ws3<3p9e=!/L&9=cE%[<{GW^l=@^;j!Vn[8G8[x71+I}[B]MkSm7y');
define('LOGGED_IN_KEY',    'Wac,:stzMGOrX0l9Qy(,M:lm$c{[R!})|wC3I?rKrxAM(XM&Ib+b28tPUcV{jzI2');
define('NONCE_KEY',        'Bz_Y^q3+Cr;4>MMG4[h_<#pC={V<2&|TR.r{0c,y2l{fUc9AUE4>J5d],9ZE%shn');
define('AUTH_SALT',        '=rGMbOMg6h}QqZF+|-EU?w}J5h3cL{[c/m**Duid#Y5Yrj86*%arWf^3D^d9Te`-');
define('SECURE_AUTH_SALT', 'mJ]W/[sW}7}N`t81K8[B>=M@rSpNYK~ykE*ly0[-c^^~2,]3{uyB_Cm`#=c-8J[s');
define('LOGGED_IN_SALT',   '`Uk|cOk)Z.>_(/mY_7Qcyb(.4z<:O=}P1#W6i_tOC$,,U~TPJY*P*PJVH>v7)E~6');
define('NONCE_SALT',       'K+N4CBM1G0!4WG]=!T/^g^etz-%>5[daZ)+44 RE;Ylg#WD6Ag68Vyd|iES]=i4;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dr_';

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
