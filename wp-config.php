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
define( 'DB_NAME', 'rewrite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'EE*&pa5SkzmVwWH5RX:D.Qx80;vBbRL9P:aNj/0^MsL.3;)EuuJunRL,92-DfPz@' );
define( 'SECURE_AUTH_KEY',  '|G,5T<0,a]s@!&;xR-Eit)`H3BRcMA5c+ql>7Gk$%fcc.WE#~|qT@uHc]0.o}2ki' );
define( 'LOGGED_IN_KEY',    '7C+3C[%%-l6m/Lgv_XcgO0h ip{ya4x6s-Tp(jp<MkWl=g(xt:zUb)zjhmfd}}[*' );
define( 'NONCE_KEY',        '-$5llq=vFt7fU/#6~J<ugGF7Kk8zQmfUBo?:RURik*DPMTB(u*Pt,>,Fh?g%7430' );
define( 'AUTH_SALT',        '@Cye=$aR,B/}&j!2&!r;;pQY!Ymd%S+4-V~hoj=tdm9to2S }_xxf<pLlBS#ssbN' );
define( 'SECURE_AUTH_SALT', ':^L0!k*:XlvCd.N_ bvW_)>PWq9e+E2#R0(RVo8&8mKjf^j5zmc;L8!Yk%6>2Sff' );
define( 'LOGGED_IN_SALT',   'gS4kny*K;b09l%w`|D8euYs>Z/UREqWnz#_yT6KV3Q,v2OuoYUXj~B,WLo3w#pp/' );
define( 'NONCE_SALT',       'avJ zhU}4?<XQDWVrUY{q0I-*S(.d_@9E_n`9v*v:nGC{i8x#mq_4LQXne1T$%?D' );

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
