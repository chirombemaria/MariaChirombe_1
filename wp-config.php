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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']w;dQzptVFp_^S7c*w}5ww;DT:$m-:h#}^IqL7ZO!VE6(#u!_liE=<5B/Az.)H(?');
define('SECURE_AUTH_KEY',  '>;3ZYagp*f%s927w hQj}(W_~`<H2%Rfd~WSIkD-eom.rvHP* ,=72t*#`6kD} ?');
define('LOGGED_IN_KEY',    'W&2A}F<YLUKj GwUXB!.28Js:*#YN[K?cWgq4/u>KZ_@}Ju=%l,r~9g:A-T(~bwn');
define('NONCE_KEY',        'dA|@+h!_70X|X9w*ukPbV[eP:`A=TW*!]`i5:. VBrMg~6PR%v$of$0!=JQ*MVK%');
define('AUTH_SALT',        'u?%0jzO2FvYtK]!:NjI<}3-ylk6)tC)j#S],RAj@9hI1^DDNqdu_+Lz7kWSLlsV:');
define('SECURE_AUTH_SALT', 'WDLL=|.O w<br<.A@(0p{MK=H@:b1BPc8fz#xtqOU)Sg=P3MRheAg%cP;=NuRVs*');
define('LOGGED_IN_SALT',   'g2X4gqc64TWJMbjcAXo}v{(|:(rqzQmS3yi~FM4q`1zy;3JW,[]]+t@y$7?lfhig');
define('NONCE_SALT',       '?Y8?8Ge/N]:*{]CxdjQg[yl.b`6XYu^VDxUZ7-X,V[g>]e&Z.~/o<Mk4|ovIPuz=');

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
