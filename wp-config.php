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
define( 'DB_NAME', 'wp_theme_db' );

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
define( 'AUTH_KEY',         'qer.`.ePg8444n;&%5YA;WY*bp-<|Y>)eg4jR^^c@iC5EM)&vo!WpCluG<;)0o>N' );
define( 'SECURE_AUTH_KEY',  'O9!i/Jb%?f9]SHZjERi3e|!#Ba zKChau|{5psIp5.(sgL%?davymyC;r)<A~LfW' );
define( 'LOGGED_IN_KEY',    '$7NlSw+xx| :T}9?1i0sbma|eX]#/0cd_X@A2K6d}5LE/_snUkpn`KgQYf oC=x8' );
define( 'NONCE_KEY',        '7/&8N/h_<^-gBJE#|Wg6RMs)u-=g{?+R$WbT*lXKLe;v[BTzb?Ohv+MNI]zx{WV{' );
define( 'AUTH_SALT',        'J{)oJU*`0Buv#+D[Y-ZE&>dP(J.>)lm<Z=_:8A)> XVrOaMK~Q0_f#RfMx~;~~,I' );
define( 'SECURE_AUTH_SALT', 'Mm[[XY1bkr80FDa4Zy_N[3=uf=MM?u]227|Wg/sCQ/}Lw*ZHZn&4#?K<Ff8<m.xI' );
define( 'LOGGED_IN_SALT',   'I<aI~/{%sht/b+x)r^L=G{}1xJDI]8qQQnsK4samh{|==Lw(!iX7Nn&)K{,9WW%!' );
define( 'NONCE_SALT',       '~&]?A,+,%,l_L=yhBy&Z4T7p~&VTKN>r^Z(VNfO,t~]XT>Ajb%%)P QYArk5;&74' );
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
