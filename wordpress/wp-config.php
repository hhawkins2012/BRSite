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
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '<5<_8lLV[Ms%sk+R;_Sfip#@<qgPldfb;L38u-,9c+C[ze*gI2 xeU^=sCGV,C4B');
define('SECURE_AUTH_KEY',  '*OV3Yvm=c2+=~SVl?. haw0-#KMZI[F5glD!ea5G 5TSzY|ajqp4g/a.1tiufPqp');
define('LOGGED_IN_KEY',    'T%*3K iI%XSU$Nk26k<-=kEE%Ul<<Rda  ?tXx.W7sS+nyW4].,>2r^+Qn,|b5]<');
define('NONCE_KEY',        'lY_~<$G2@5<vj%-ChqZlF({{mX>z+?LI{E^t*,+6|^.3)(Gj6>*`@)gfb47_=)vu');
define('AUTH_SALT',        'fYh/@|u9oP0L:x;VDpkpGRL4(B*MjQkk8jR:W|G-jE;NidR@#caN;zZq-z=7(~o;');
define('SECURE_AUTH_SALT', 'b*4hU0|,^|TrgUyd;}oPuPRp1p`4Os5=lb9;sY} L&EWTqi!!^|p,2E0=o(0||[3');
define('LOGGED_IN_SALT',   '1|+RlYR:5|m}-/+siX1U0F(;+&KDE=J7:RAU,Svx(M>z?J[]S#F-4={$?-hQ-+1M');
define('NONCE_SALT',       'CcttTL@OD^*}@O|9r5Z|:^+YSfy|3[&a697%=|5k& ``Vr3iR3SD8)B$?i3-zceZ');

/**#@-*/

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
