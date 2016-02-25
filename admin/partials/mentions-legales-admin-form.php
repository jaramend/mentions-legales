<?php

/**
* @since        1.0.0
* @package      Mentions_Legales
* @subpackage   Mentions_Legales/admin/partials
* @author       Jean-Baptiste Aramendy <contact@jba-development.fr>
*/


/**
* HTML de la page des réglages
*
* @since 1.0.0
*
*/
function mentions_legales_options_page() {
    ?>
    <div class="wrap">
        <h1><?php echo get_admin_page_title(); ?></h1>
        <div class="card">
            <h2 class="mentions-legales-h2">Instructions - <?php if(is_all_full()){echo 'Partie 2';}else{echo 'Partie 1';} ?></h2>
            <?php
            if (is_all_full()) {
                echo '<p>Maintenant que vous avez saisi toutes les informations, copiez le shortcode suivant et collez le dans une nouvelle page que vous nommerez "Mentions légales" :</p>';
                echo '<code onfocus="this.select()">[mentions_legales]</code>';
                echo '<p>Un lien vers cette page doit être visible sur toutes les pages de votre site. Idéalement, placez un lien dans le bas de page de votre site.';
            } else {
                echo '<p>Les mentions légales sont des informations obligatoires qui doivent apparaitre sur chaque site internet en France. Remplissez ces informations et enregistrez pour avoir les instructions suivantes.</p>';
            }
            ?>
        </div>
        <br>
        <h2 class="mentions-legales-h2">Informations à remplir</h2>
        <form id="mentions-form" method="post" action="options.php">
            <?php settings_fields('mentions_legales_settings'); ?>
            <table id="mentions-form-table">
                <tr>
                    <td colspan="2"><h4 class="mentions-legales-h4">Propriétaire du site</h4></td>
                </tr>
                <tr>
                    <th><label>Propriétaire du site</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_proprietaire" value="<?php echo get_option('mentions_legales_proprietaire'); ?>"/></td>
                </tr>
                <tr><td colspan="2"><p class="description">Nom propre ou entreprise</p></td></tr>
                <tr>
                    <th><label>Statut du propriétaire du site</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_status" value="<?php echo get_option('mentions_legales_status'); ?>"/></td>
                </tr>
                <tr><td colspan="2"><p class="description">EI, SARL, ... suivi du numéro SIRET</p></td></tr>
                <tr>
                    <th><label>Adresse postale du propriétaire</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_prop_adresse" value="<?php echo get_option('mentions_legales_prop_adresse'); ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2"><h4 class="mentions-legales-h4">Créateur du site</h4></td>
                </tr>
                <tr>
                    <th><label>Nom du créateur du site</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_createur" value="<?php echo get_option('mentions_legales_createur'); ?>"/></td>
                </tr>
                <tr>
                    <th><label>Site internet du créateur du site</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_createur_url" value="<?php echo get_option('mentions_legales_createur_url'); ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2"><h4 class="mentions-legales-h4">Responsable de publication du site</h4></td>
                </tr>
                <tr>
                    <th><label>Nom du responsable de publication</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_publication" value="<?php echo get_option('mentions_legales_publication'); ?>"/></td>
                </tr>
                <tr><td colspan="2"><p class="description">Personne qui gère le contenu du site</p></td></tr>
                <tr>
                    <th><label>Email ou téléphone du responsable de publication</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_publication_contact" value="<?php echo get_option('mentions_legales_publication_contact'); ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2"><h4 class="mentions-legales-h4">Webmaster du site</h4></td>
                </tr>
                <tr>
                    <th><label>Nom du webmaster</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_webmaster" value="<?php echo get_option('mentions_legales_webmaster'); ?>"/></td>
                </tr>
                <tr><td colspan="2"><p class="description">Personne en charge des modifications techniques</p></td></tr>
                <tr>
                    <th><label>Email ou téléphone du webmaster</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_webmaster_contact" value="<?php echo get_option('mentions_legales_webmaster_contact'); ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2"><h4 class="mentions-legales-h4">Hébergeur du site</h4></td>
                </tr>
                <tr>
                    <th><label>Hébergeur du site</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_hebergeur" value="<?php echo get_option('mentions_legales_hebergeur'); ?>"/></td>
                </tr>
                <tr>
                    <th><label>Adresse postale de l'hébergeur</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_hebergeur_adresse" value="<?php echo get_option('mentions_legales_hebergeur_adresse'); ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2"><h4 class="mentions-legales-h4">CNIL</h4></td>
                </tr>
                <tr>
                    <th><label>Site déclaré à la CNIL ?</label></th>
                    <td>
                        <select name="mentions_legales_cnil">
                            <option value="Oui" <?php if (get_option('mentions_legales_cnil') == 'Oui'){echo 'selected';} ?>>Oui</option>
                            <option value="Non" <?php if (get_option('mentions_legales_cnil') == 'Non'){echo 'selected';} ?>>Non</option>
                        </select>
                    </td>
                </tr>
                <tr><td colspan="2"><p class="description">Si votre site est destiné à recueillir des informations personnelles sur les utilisateurs de votre site, une déclaration à la CNIL est obligatoire.</p></td></tr>
                <tr>
                    <th><label>Si le site est déclaré à la CNIL, numéro CNIL</label></th>
                    <td><input class="mentions-legales-form-input" type="text" name="mentions_legales_cnil_numero" value="<?php echo get_option('mentions_legales_cnil_numero'); ?>"/></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php
}