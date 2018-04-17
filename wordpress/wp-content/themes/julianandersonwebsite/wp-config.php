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
define('DB_NAME', 'julianan_wordpress');

/** MySQL database username */
define('DB_USER', 'julianan_julian');

/** MySQL database password */
define('DB_PASSWORD', 'Eyeshield11');

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
define('AUTH_KEY', '!n8xc^_wJhS 6IUJ,m4JUQ4GaG!lWSbgv;D>*HfbVo-IR+;b-RWCIa;Sa<U~cS>8');
define('SECURE_AUTH_KEY', 'Y0/Bg01/_0Uy3P KL@XZ4p+0y$p0)`a+|;5ySQ3:_W|vy<0zcWz|t+,EX*7k1(;h');
define('LOGGED_IN_KEY', 'XA=*0jS@y0UL;KI|O05S1HXdwND|ZMYf?nt=-*lL&ueEC+>7BZRfNs6-;|.qSLX`');
define('NONCE_KEY', '`8?F:3!F;MGy+;%hg9wLhFo--&3ztt*vEJD!@C8TpF ra(GPEsc%m*nl^D!/jE^j');
define('AUTH_SALT', 'q$[vb@=Hmj0-=!K#3t.De/s}:n2*|WY>q^s|uj+|+`M>fd#@{He0@!QnB]f)GCtX');
define('SECURE_AUTH_SALT', 'MW&p^x:KWZIM-z}]UIc@w8lEG92jX+)?|nE<it=m-MZE[,U Abt-=ZBV`n#--mUA');
define('LOGGED_IN_SALT', 'A6q}Jfw[VRXs+]mq]2Cx|{)ImhwXI+a:w3U@kK``5p~BF8bbDp*_=.Lq*.=;s7>N');
define('NONCE_SALT', '5t?r@$TqYG0xPyP9t}f|E>u%2)GL/t:<m0y8E*r/9?,+Ep+FC;:|BRb]i~I4uoBb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jca11_';

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
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_CACHE', false);


