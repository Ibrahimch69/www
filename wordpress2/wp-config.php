<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'epiz_31635118_ibrahim' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'epiz_31635118' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'TwB8mXcnh1' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'sql109.epizy.com' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')xyDHnr`,ex`lU%?%GO1JW~S^hzX-&Qy?xD=N~cKf8_lh2|03Y;7S)yUF&arGP@_' );
define( 'SECURE_AUTH_KEY',  'Me/eno|wl2B*7S7F(kv]qPZ;5tL. u::lmDD-8 %yTl@5jF OYT+.Vg<(&x`Wa[Q' );
define( 'LOGGED_IN_KEY',    '>5{/d.?ZTL0C]l c_G6}prSDxSGpI=#iBx`xtY~Fv+p.!m{e!N1N+K=)6-k~uTqV' );
define( 'NONCE_KEY',        '<w%q<xF]%{Bis-pV9lf<ndnIO?s`U}3Wp9;;E_J(E_E*qT0]lO_!g9}cm+%S;sH^' );
define( 'AUTH_SALT',        '42Au`m5y$M1!)DI;]l# .mA-2cDKI{-NtxY@m;lxf18^9A^~_n~#-a1>.#_Nf4s|' );
define( 'SECURE_AUTH_SALT', '1X([><LETJ1-`v=7gTWpi8j@C_Um+nF]vTOjrswPZMvd~mtndex=`|h89nn>al@a' );
define( 'LOGGED_IN_SALT',   'X{~v/9/{]_x zFNXY+.a1Uz/zegdm1~NRR%Xw<TM4)H_Wf=`~}mzB_]`L<i>[e0u' );
define( 'NONCE_SALT',       'osSeoh1N{H?<x[@L;]s!@b5KLclx)-CBjZ%x:[w-RD:#Q?c8UIcG/<JZvHb%Zgo#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
