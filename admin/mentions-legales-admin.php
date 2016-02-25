<?php

/**
* @since        1.0.0
* @package      Mentions_Legales
* @subpackage   Mentions_Legales/admin
* @author       Jean-Baptiste Aramendy <contact@jba-development.fr>
*/

require_once WPML_PLUGIN_DIR . '/admin/partials/mentions-legales-admin-form.php';

/**
* Ajout de la page des réglages
*
* @since 1.0.0
*
*/
add_action('admin_menu', 'add_mentions_menu');
function add_mentions_menu() {
    add_options_page(
        'Mentions légales',
        'Mentions légales',
        'manage_options',
        'mentions-legales-menu',
        'mentions_legales_options_page'
    );
}

add_action('admin_enqueue_scripts', 'load_custom_admin_style');
function load_custom_admin_style() {
    wp_enqueue_style('mentions_legales_css', plugin_dir_url(__FILE__) . 'css/mentions-legales-admin.css');
}

/**
* Enregistrement des paramètres des mentions légales
*
* @since 1.0.0
*
*/
add_action('admin_init', 'register_mentions_settings');
function register_mentions_settings() {
    register_setting('mentions_legales_settings', 'mentions_legales_proprietaire');
    register_setting('mentions_legales_settings', 'mentions_legales_status');
    register_setting('mentions_legales_settings', 'mentions_legales_prop_adresse');
    register_setting('mentions_legales_settings', 'mentions_legales_createur');
    register_setting('mentions_legales_settings', 'mentions_legales_createur_url');
    register_setting('mentions_legales_settings', 'mentions_legales_publication');
    register_setting('mentions_legales_settings', 'mentions_legales_publication_contact');
    register_setting('mentions_legales_settings', 'mentions_legales_webmaster');
    register_setting('mentions_legales_settings', 'mentions_legales_webmaster_contact');
    register_setting('mentions_legales_settings', 'mentions_legales_hebergeur');
    register_setting('mentions_legales_settings', 'mentions_legales_hebergeur_adresse');
    register_setting('mentions_legales_settings', 'mentions_legales_cnil');
    register_setting('mentions_legales_settings', 'mentions_legales_cnil_numero');
}