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
define('DB_NAME', 'sportportal');

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
define('AUTH_KEY',         'TkfLUNc;Bxq2MLM*eZl|L5/qiF}j,-}!=TMZf~VkTdS=(F|~3e444,EPOS@Yza)|');
define('SECURE_AUTH_KEY',  'Pyx#HskHPP$alV*m^{)4Xn:hROKr.7|jVCK<&{CCi_->v0Z{ ?-#XAi522d$D>jG');
define('LOGGED_IN_KEY',    'f6y?rk(rL<D*Sg8J-]z:}N^7f?&(u?TBM#_b8)bWIB`n;5h>G-|z+|h,ZyN4}5mU');
define('NONCE_KEY',        '_T|Cw_ GbuImYq?D:_]U6>Q|Zx%i;%o`gyn;m:^_WU-):0=#x++-vb5ktqm|D5$o');
define('AUTH_SALT',        'PKjZI*d1|*_q1nxif-<?_]$a_JYf%F4?W7nD)eDIr6$N90WEs@ip8LS<+-PE6OX(');
define('SECURE_AUTH_SALT', '[/<ZXWi0J~ReVtT`z+|]OZ/$s8pn-}hh>|ca;)mF1@V*KO}b!t<1|}v=54ilL*%k');
define('LOGGED_IN_SALT',   'i09FWq-@MRY0M L1~[cz[ZSK5a*@9>SZNJ|gOZ/+aK(_n8$Q!-Kg6x*)i61U*y@K');
define('NONCE_SALT',       '[~0X,mj@>Di-|PXeCK5{||(o|ULh?l |te6=q~.p$b4/S,o;]aH(cO|W=.W|Y(6U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sp_';

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
