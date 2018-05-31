<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'WordPress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '8ASReRQF8NTpmjfU');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'ns320482.ip-46-105-101.eu');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AK].4JUP#}|L^,5pg+d767groISpN/mCzSI/=Wa,8d2QsSzXbYI8PEJojQDF?:ML');
define('SECURE_AUTH_KEY',  'pOIyd4aWBp }rHZ*k+s*otj2MIv;JYF=2<2i@LeIL_R[!to&^(98!^~pjst+2wD8');
define('LOGGED_IN_KEY',    '*zQ,?TRw>(gC:vkZ_pO19y8/~y4?p&]Y~y7N@D{:HCE&i#Vs<,ttkInc~Td|iTO1');
define('NONCE_KEY',        ':Mvr}/O2PUV~2if{a)/o1OR-bk&!.E3K}L1dog`l]/aU}PXDQ<[4az{n2[};`l7x');
define('AUTH_SALT',        '-{oA|b}q:tK6pwpuiL=tPdBL_#5tNoHNaJab1`N)rue(Wr3|N$-(<C4U3h~m_)3)');
define('SECURE_AUTH_SALT', 'E=+1E&q][^wKH%as/US[2@q(7`1QE[@e&!3{>7*OFK;AV92*geL_=?Hs|l:S3!f|');
define('LOGGED_IN_SALT',   '*iF;Jd^>x[0T2]aDNcObaf6@J$doY0*JJGN8&2{K;/rBB>X51{4q+8F9H>VXZRA.');
define('NONCE_SALT',       'qVs224GN3D,DddHY3!)kh^^D2QkdPO8EaikD$6_pHN*PgN%)*Pz@Bbd<Cb9+U >f');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');