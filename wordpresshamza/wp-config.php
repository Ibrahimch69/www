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
define( 'DB_NAME', 'wordpresshamza' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '6l*M~i>Kk79.]gJON ZVuIBD^7U~[{4EznOWNY<<!0#(L8l^l)[TwvveF-=lBl3w' );
define( 'SECURE_AUTH_KEY',  'vp(2raa|;K],| fR^C+t,#NfbSx944!`(b_aQ3;Z#6hA9YLiSo(ROUwhH}71|7qE' );
define( 'LOGGED_IN_KEY',    'Nj)!$07j?c$)s?dE%^zd1OwQ?!)r>8hvJ3z~6yBTgD,2[$3r*I|PVeaMzDfZMD/{' );
define( 'NONCE_KEY',        'K-wc+_BxA#gLk9{Rg?IbbDL?qFE}UJFSY#+d_iHY.~rek47.Y:VF;GObV:x7|JKj' );
define( 'AUTH_SALT',        'Czy7S&;[IT0c$]Pf#Rwe]2d.>6X_btY8M`w0 Y(adfS50r*PK6d*]N/Uy/.lpIoe' );
define( 'SECURE_AUTH_SALT', '>#d~zUtiF1xhmeFNH.KlwJI;`=[njG:CoB]<BOID<*R?jXa#9dkQ< Oj*_XHE`5x' );
define( 'LOGGED_IN_SALT',   'B6-0BK-:3>{X+#_->/8#+&e<YaGa7_XAkJKye]74/fueQIuAHLlcR9p~`cWVeNSY' );
define( 'NONCE_SALT',       'Hg3!GHiQZ1<eTy`/Y`xNM7j(C4o?X2}0@MKvH) H*@?Ub/SGqEuZ}bAIl$](xaSQ' );
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
