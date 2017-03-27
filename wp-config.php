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
define('DB_NAME', 'wordpress_2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'xBYK(uuFx/FFBoO7C*Po^XAoSU8]~/xjaX4a6aCcrhv4( =!sd0jjnjTL?Klc1G]');
define('SECURE_AUTH_KEY',  'm}h8XL9Z/3O[1SM-1:31mIreg.9U,`sZt/F.#$Nn@/Ue[Rc9TOeDZ4EpJ|/4-9C`');
define('LOGGED_IN_KEY',    '#CNUUs<Rp{H/6HOfA$wSdeb%=DqtCM_woh d4b#7/Q5%KHciw{x}(LAJa9CyGkZU');
define('NONCE_KEY',        'NN&h;jw~xtTf5W2i7uW1iJW{]>))1*LP8diQ,{C:?C_`^JXjUHtuk%Z#fD.:Z1Xb');
define('AUTH_SALT',        '45Tp@,)!F;m!D$T?8k*h4(;1;TA7=lCf,M]jzJDK2`+#ndmRsaH XotZp.%;<MlP');
define('SECURE_AUTH_SALT', 'wi]Zx-EH[U`!{RNGeR.>{P_=+2M6ZCRp:X!R|J@T hx@JPHAd^&G3b/*lwu},<Zc');
define('LOGGED_IN_SALT',   '!pHIsb;_+nM52+QK2W2F?#|o/;kJh FG8?va<8>@{s_u>PY{)}ZYfctU[1yx~]ay');
define('NONCE_SALT',       'R99MFT$lwI.={&hLDn*uJ@fa1xNmk6%kb6EGP8PK9_b(TYQX!AMBEoj&-pQ+; Us');
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