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
define('DB_NAME', 'db763104124');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo763104124');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Laihoalexi656!');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db763104124.hosting-data.io');

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
define('AUTH_KEY',         'oOMS1W4c<XNDOk|Zq..[~1R&Zw!V[TWei&9RUqXo#O_d>56!-gEu_T6J=iG#!PXL');
define('SECURE_AUTH_KEY',  '@x(Y1vft(jK@@OMHqf9fI2?^UX_d@|oUEd@*IO1d7Ip[2Ln#|BsZ1#QVYuxxTsV.');
define('LOGGED_IN_KEY',    '^Qxq|ZjBM5`QIv5yMtSR:.@`^X>[X,av0=h+#wajX=EORa:{,^4(9|hCZ-Y(#0WT');
define('NONCE_KEY',        'D)<N$@a^ /Udg5W4eq/jZXI&Y*3K5|.^pjwGbV&o,s}~5 Q&fx]*=PKSY0~3rN_C');
define('AUTH_SALT',        '[NFR L&n6f9 3_2czavj_yn,=j`nuKqS;tv$.vj`Ocqr4D#GT+&G7?YF)(Tph.L$');
define('SECURE_AUTH_SALT', 'fxO3-|lwp.x6z&;j1+mctQV-A)Iku@7LTuCE/_EkK*lTE%imfcTdnzu+CEoS]uh7');
define('LOGGED_IN_SALT',   'bJz~2{f_D3Y xB5c[SM$SO;WGKp(Bj70PhS,tx^EfY}y=Tl=MV<e.G0u[B.(x8hz');
define('NONCE_SALT',       'R>sLmXE^;`=vPTeoMj]Oo{&Y5=a4+OTmLuoWOjA35gX0^(%DVLbV8[`61BRD}ih:');
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