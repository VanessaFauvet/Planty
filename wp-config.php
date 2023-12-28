<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '@uf(!rnj:k;R.Tm>ii_rt?j?twiOHO|![%8(_&`1HTfjvy<:}(pslE#c+h^{/nS/' );
define( 'SECURE_AUTH_KEY',  '-5X3cBD9IE-j>3$0;.9}pH1olUBdk]~63K+j>MP?m_8`GC>_[ 72O_QrQp+s4o^z' );
define( 'LOGGED_IN_KEY',    'XeayD+=vNB,KX-j0DJPwKg%gl%A!4z2.raI1$e dK=hM?+Jp<=),UA<rH,-`Guf~' );
define( 'NONCE_KEY',        '#8~nnJ}FC|`kz&3uJmielduU)t`Jy?bMbx4J83Bg#NBg1Uk[AJpLFku!T@UOTU*m' );
define( 'AUTH_SALT',        'L6WI3-t&k2{f+v.ee0}<9]zG_S vES<_l_1a6B{<lk;9#04wt7!mXpv@dZW>OD+^' );
define( 'SECURE_AUTH_SALT', '_5QXg7%!HL9o%;^&Z@1CYh}y5MDoSA.<$e9P?bHlrd;](4@2VaJ-k;qIw;KvX&R|' );
define( 'LOGGED_IN_SALT',   'BPCOZd2DaIh=(9nW!3J86]s.,vw<cY&=3Z_KzaW}#-+aY^6lh!N{]!Mh;%^qj46m' );
define( 'NONCE_SALT',       'k!9{tZS~`;DM;ilyqf#vc-~V!eunAgjwM-5MDs{EYq1#[zk`E2pIyXfy/Dj5W(#U' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
