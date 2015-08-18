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
define('DB_NAME', 'kosshop.info');

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
define('AUTH_KEY',         'YhUm; wY^7.++)p^jy?+J$$Du4AxoXD,-`ZFN`:9Fu.~#-5Q0kZ{v~7R(junsPBU');
define('SECURE_AUTH_KEY',  ' QH( JGkzZKDQP99TSZy#fzCPO4433s:aR|/zMss)!AgrxAi3#de>O!(- Y<m&Aj');
define('LOGGED_IN_KEY',    ',?Na)g_^;b#s3Oc9a8JO=J?RyQ:lV||l> U)li83D5c<!kYJVt2n&6<4!hk6A+W/');
define('NONCE_KEY',        'xbk!og(t!bai;]O*-2LA[j:NCgqeD+Kl.GZPgVhh^[bX;`H|)3Y3-%O%tO>jG;G)');
define('AUTH_SALT',        '=/f8;I79@d-?-XR?=#+.T_K-8,U]BlaR1vH-N8KGD}H-7-m%YqFxg}FkzI_CUS]O');
define('SECURE_AUTH_SALT', 'aU,&:Tlr@vr%a-J8]uE+)gsD8h)cf!Lyz`E?T,&8:w|DK]A-p??TNzs|3?6BIUH?');
define('LOGGED_IN_SALT',   'Nyzzkw:<WW|ClfdSz-jwT4G>P5UOKt^M#@{K7+xHx)3[|hpSQ~x3.ya]>e)S?r,W');
define('NONCE_SALT',       'W-C(H|9SHv|g+#|cg,-E&7G=mb7TTK*l<JbT7c|4F]z^{n4rw+?yRu6{WH+x,ByP');

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
