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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Project4Word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[@A_VkILTGk[(bM#8,X.+b*32%* L2QFl^klx?oy1_2WX%:q<1-55iP*|>P4 )bu' );
define( 'SECURE_AUTH_KEY',  'BS:z7jS@!ig[*F![9Php6,$J,S~+fkrVj_jhG%cF.1anDr]ktMFn:|A^B^r,OhJ[' );
define( 'LOGGED_IN_KEY',    'c7;`ZXtCm#vj8vL;Hq_{S2kLZOcsd{F!Xyyw*?&u#J|c@QD3chjLbwhqkxCJU_()' );
define( 'NONCE_KEY',        'ia{ePh-];PPG8}0YrgwbFJO^g}Rm@#/`n.9c~]*X]Yz+h]Oc4!]b3C+f6,u3<Y-E' );
define( 'AUTH_SALT',        'UxL1>}=X+m)sXL=06YIhyJfjDbrf) Zp-Bd70w{D}$e]9?&^enh=d1bl-Z-Tl`}4' );
define( 'SECURE_AUTH_SALT', '*NHa(/[fL7d0&O2V.y}kObdWb/F[yw8@g3U;)SdGo={Dq78SB0+|]}]]W{R].2)l' );
define( 'LOGGED_IN_SALT',   '_g}Cp@#Xz_Mo&DxUv_ =E>eHe%(aKbE2ZFwYw(d?4pOQw6KPz*^YOo.!e3=yA}`W' );
define( 'NONCE_SALT',       'C5R($qA`~WfNUBaBS9W]QOrJ(,?B0DBK<%U![3a2]~~8<`sjiG2<2.~q+Fn=#clY' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
