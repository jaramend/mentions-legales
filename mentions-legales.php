<?php
/**
* @link           http://jba-development.fr
* @since          1.0.0
* @package        Mentions_Legales
* 
* Plugin Name:    Mentions Légales
* Plugin URI:     http://jba-development.fr
* Description:    Un plugin pour générer automatiquement les mentions légales de votre site.
* Version:        1.0.0
* Author:         Jean-Baptiste Aramendy
* Author URI:     http://jba-development.fr
* License:        GPL2
* Licence URI:    https://www.gnu.org/licenses/gpl-2.0.html
**/

define('WPML_PLUGIN_DIR', untrailingslashit(dirname(__FILE__)));

require_once WPML_PLUGIN_DIR . '/includes/class-mentions-legales-shortcode.php';

// Si ce fichier est appelé directement, abandonner.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Si administrateur
if ( is_admin() ) {
    require_once WPML_PLUGIN_DIR . '/admin/mentions-legales-admin.php';
}

// Fonction lancée à la désinstallation du plugin
function mentions_legales_uninstall() {
    unregister_setting('mentions_legales_settings', 'mentions_legales_proprietaire');
    unregister_setting('mentions_legales_settings', 'mentions_legales_status');
    unregister_setting('mentions_legales_settings', 'mentions_legales_prop_adresse');
    unregister_setting('mentions_legales_settings', 'mentions_legales_createur');
    unregister_setting('mentions_legales_settings', 'mentions_legales_createur_url');
    unregister_setting('mentions_legales_settings', 'mentions_legales_publication');
    unregister_setting('mentions_legales_settings', 'mentions_legales_publication_contact');
    unregister_setting('mentions_legales_settings', 'mentions_legales_webmaster');
    unregister_setting('mentions_legales_settings', 'mentions_legales_webmaster_contact');
    unregister_setting('mentions_legales_settings', 'mentions_legales_hebergeur');
    unregister_setting('mentions_legales_settings', 'mentions_legales_hebergeur_adresse');
    unregister_setting('mentions_legales_settings', 'mentions_legales_cnil');
    unregister_setting('mentions_legales_settings', 'mentions_legales_cnil_numero');
}

/**
* Fonction pour déterminer si toutes les informations sont remplies
*
* @since 1.0.0
*
*/
function is_all_full() {
    if (trim(get_option('mentions_legales_proprietaire')) == false || trim(get_option('mentions_legales_status')) == false || trim(get_option('mentions_legales_prop_adresse')) == false || trim(get_option('mentions_legales_createur')) == false || trim(get_option('mentions_legales_createur_url')) == false || trim(get_option('mentions_legales_publication')) == false || trim(get_option('mentions_legales_publication_contact')) == false || trim(get_option('mentions_legales_webmaster')) == false || trim(get_option('mentions_legales_webmaster_contact')) == false || trim(get_option('mentions_legales_hebergeur')) == false || trim(get_option('mentions_legales_hebergeur_adresse')) == false) {
        return true;
    } else {
        return false;
    }
}