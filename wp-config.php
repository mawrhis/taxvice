<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'taxvice');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', '');


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
define('AUTH_KEY',         '3E(M*BN/v2aI(}[? @G,.3NL$tEQug/):i8X&SrBczY53%4A`Az+?pSRVt2z?RCT');

define('SECURE_AUTH_KEY',  '-DikfVKI 5SA;i+S||4Qqlr.8==w`bB4mPc%J#|I4Jbf{wnhd|/HdS=9?tP,;v+F');

define('LOGGED_IN_KEY',    '.<G4S~_-Zd*n.XmZ~D]tpetzhDzN&-tXBkP>VQ6#WtP| l:XL!3y&,xd!;SpEjcN');

define('NONCE_KEY',        '.`FF$#nY->ne[3kukV7;TiAMoCxj0VL}[Z9(IwU[P*+-bswyne6gkdnsmZvzWS:,');

define('AUTH_SALT',        'hRQIR`]Fq}Ly1M{ZPL*3.>&$<.;2(0&Ckd8TZ1pRETbl0rYYJ$pRyw!mo:7K/F+^');

define('SECURE_AUTH_SALT', 'aL*4:n=w?$j5)7v+4![d:Sem&hIw.)#usQ$@$bfd#J^Vjiz):9L^iZ1.enT8H~42');

define('LOGGED_IN_SALT',   ')pE@c-SFbu5Oavh|^m($IsJjC1-b.cPn1bt^]@#%`SwPVM-L *k|E2X{w}s*H}WW');

define('NONCE_SALT',       '^f@J9xE5s=<cA$P]IX=)|rk#,xU5V8]qRsh{`aHE2mR.@nG1I_*$ =5 EBHXy8`:');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'cs_CZ');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
