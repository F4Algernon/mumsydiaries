<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home1/algernon/public_html/mumsydiaries/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'algernon_wrdp1');

/** MySQL database username */
define('DB_USER', 'algernon_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'jww9VPGwiO3YsyfF');

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
define('AUTH_KEY',         '_qId0H>)CYSUc|gUfc05ct|XZx6N|2ICU27OPot;W@XNpI6_b/Dq?YWdoPI8i^\`y)eH2XXp');
define('SECURE_AUTH_KEY',  'Lfg<@gP/sL9B*Iho*ksZQOJRtN>kjt5u*z\`M(D;ta\`kigrOl!9QlUOlT\`KI*wAe<bX6PC');
define('LOGGED_IN_KEY',    '!wRa4Av=WvqJ1*NiN$-3Gb3Bcc$!tn_#XmzCHae9q*=!w)_o4sL0ej8oM0>V9;-OSqeg9y:WXU(B|lm\`y0Y3ZACSHqu');
define('NONCE_KEY',        'TH9j6E6E!\`jaInyPJml0cP8)QY4j$26Dfmi<<gx06vvo6i6<wfzBBzva8<jN5o(oh\`4d@1*ZF~_!');
define('AUTH_SALT',        'SjGX^xXHU?;lWm\`#dyK/b5a<aWZDi_hm<|fZm8Y8wjhS<1#hUtqvBAfV!R#lbW)depRXz4\`-lLrLy0');
define('SECURE_AUTH_SALT', 'lOXn\`Mvvpcc:ZD0g?Dc>s!2@X7ud_!#5w82;T*w\`ox:)vM*Rp;c>:ImAiw$0ju3#\`RzsQed>\`)B)lE!Urih');
define('LOGGED_IN_SALT',   'K_dW\`ou2k50(dOLeq@d2Hm9YCY@a:kkuo=~Z21Sywmoo9b;!4DRn($T~wsq>oSjD/=^G12r5');
define('NONCE_SALT',       'n;8!)2G)SL\`XfQub11Jkny=DS829^jP;S_5QR0y75/-Tp<!>64_>P=c?YP8<');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
