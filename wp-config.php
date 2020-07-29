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
define( 'DB_NAME', 'wp_airvault' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')]DIa~y0oFr#macl18&`^rCeOmg)-hTE2Lc1THluj=A@L|Z5[2LkY3rUu>w$FR=7' );
define( 'SECURE_AUTH_KEY',  ' `l0D{Y:IHw)`n=/zh)UF(YkA!q=nF*! xR]t75.|j[]@_8h <E%W%O[*}LhrhJf' );
define( 'LOGGED_IN_KEY',    'i+TR^RHBDU!rK;5]KRA.!b#,,q`iOHw!AtqXm.2JJd#783!Ui}_Slk5r>3!?3.<)' );
define( 'NONCE_KEY',        'g:HrNVaSe{Q1jSrE<*5PUe JmZy_VP?np~4@z1WC9d6mi./%5S])7<txKw*o4u?Z' );
define( 'AUTH_SALT',        'aIVnGbyvSK:nU.4P^x?60u!$[J`f3|4Wx,$pjB$WANMY~C65b@86W/[iefTGNLH*' );
define( 'SECURE_AUTH_SALT', 'w`=ifYiA53>zb/B5q]!af-fZnP*IKcvpoP)K~JNJy,Z02B C)yT(MMr<V/>xqP%%' );
define( 'LOGGED_IN_SALT',   '*I>Z$%e{y[lC,)Q,s$c^BzR=j{f|-m|[i:M0pR?naaHXH`:QE=K}yLP?d)I*$6oM' );
define( 'NONCE_SALT',       'rC)Cp[O]K+:V(E3nDPF4uDV@^ Dkp.%M#YS`,)[ia)~5o&mjA7Mx1&,RJ?!2 gci' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
