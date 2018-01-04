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
define('AUTH_KEY',         '(F,[FSIXq`25KI%?G_N2HS#L*vW9`.JZIjLmI`PO>+bh]i<??{_3UtjSH2F.z&*a');
define('SECURE_AUTH_KEY',  '_7F:Hb`eD]My>DhuKeKPP[U3Q_X4pdhJd(g&TpBH.IftTct/#ah00uHk{.IJ/x@=');
define('LOGGED_IN_KEY',    'trJtxA4v?$C82{fbNiMyY#NL.BhBh2KOHtItEj Bz72/H90yT7eGT>ve&1_~r5QM');
define('NONCE_KEY',        'V<SC`5tWl7!Qb(KMSIF3-,v,S/,N[`oXYY[;PsKM7 |5DpQ<+ffcn;uLs.F[F5:+');
define('AUTH_SALT',        'W(B}qz^o.xPLmNfYP l>~.$Ri=]7=`ze57ASU/v917yxHdTP;]dE]m:|<dikcgir');
define('SECURE_AUTH_SALT', 'eQv_FNn/Thr3!0 /_J]RTHqvC1#Ojm8jbVE)NM0VEO[xw|g87>[g3ia)3hjM~NSo');
define('LOGGED_IN_SALT',   'ZvS-,^(|g$4V@D}Xw0>dDS^T>+8hEP(R3T3Kk?J^DSc(Uf|4SLUf9^BrNw4}2^it');
define('NONCE_SALT',       '.>(7_}v-@j:p3}1o[0o0_=ugPq<kb-a1#92Q[d/Y[;$&Xpbc2r1*c(A1J!&P4qff');

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
