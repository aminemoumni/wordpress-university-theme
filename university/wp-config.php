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
define( 'DB_NAME', 'universityWP' );

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
define( 'AUTH_KEY',         '0JpRp}Esk$aoO;rO*2u1zkZHN#P:(~d!o*#-r$ r=]o}D_~}Y52P1jl*fQCN,^C4' );
define( 'SECURE_AUTH_KEY',  '$JG`D5D@[[D^Dex1tM9R2nv_v=^4V2/+l&P0~smZ?Qdc^q&6FV]Pwrp<oty=j!=>' );
define( 'LOGGED_IN_KEY',    ',qOngZbAHmP]qDyXTR]P`Ci&S+oza@~/Kv1sY{<9@8c}>0{}xlg`G7LadcDvx>W2' );
define( 'NONCE_KEY',        'Q}g_[jK1iV<;DUy`dBP&QWhswg4+E?g!N%}6>c{# Tl>gM^z]w;5C`*3`JssN{io' );
define( 'AUTH_SALT',        '[h%a{BM<:FTN6oHll8=~?{g=z.K }4?1h; sv3q]U+x-,+juV~rd(;M#CCbw2(h]' );
define( 'SECURE_AUTH_SALT', '1.0Zi:`i)IeljJ[mWm2v$vkTXYDI+Yj0jbQ-T)dgYb6ly`*!s{G$an+Puj!yIA8E' );
define( 'LOGGED_IN_SALT',   'z+bk1J$9E^idT3x, q3xz0[nbHv:U^Fh0(6~;d~pJr5~IK)!ib0^4zQn W{:?]GH' );
define( 'NONCE_SALT',       'H7mlc66[9lOKtk5me>.lz2Zq!d)B!@EyCisQ8F8uM;br$~:I>0)B2a9~kBd%RXx!' );
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
